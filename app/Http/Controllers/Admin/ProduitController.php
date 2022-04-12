<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Sous_Categorie;
use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ProduitController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::query()
            ->with('s_categorie','categorie')
            ->orderBy('created_at', 'desc')
            ->get();

        //dd($produits);
        return view('admin.pages.produits.index',compact('produits'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_products()
    {
        //$categories = Categorie::all();
        $categories = Categorie::query()->where('libelle','!=' , 'categorie')->get();
        //dd($categories);
        return view('admin.pages.produits.add_products', compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $produit = new Produit([
            'libelle'          => $request->input('libelle'),
            'categorie_id'     => $request->input('categorie'),
            'description'      => $request->input('description'),
            'sous_categorie_id'=> $request->get('subcat'),
            'image'            => $request->get('image'),
        ]);

        //dd($produit);

        $upload = $request->file('image');
        $filename = $upload->getClientOriginalName();
        $upload->move('uploads/shop/', $filename);
        $produit->image =  $filename;

        //dd($produit->image);

        $produit->save();
        return redirect()->route('admin.products')->with('success', 'Votre produit a éte enregistré avec succès');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_products($id)
    {
        $produit= Produit::find($id);
        //$categories   = Categorie::all();
        $categories = Categorie::query()->where('libelle','!=' , 'categorie')->get();
        //dd($categories);
        $prod_cat     = $produit->categorie;
        $prod_cat_id  = $produit->categorie->id;
        //dd($prod_cat_id);

        $scats = Sous_Categorie::whereHas('categorie',function($q) use($prod_cat_id){
            $q->where('categorie_id',$prod_cat_id);
        })->get();

        $prod_sact = $produit->sous_categorie_id;
        //dd($prod_sact);

        $ss_cat = Sous_Categorie::where('id',$prod_sact)->get();
        //dd($ss_cat->nom);


        foreach ($ss_cat as $key) {
            # code...
            $name_scat = $key->nom;
            //dd($name);
        }


        return view('admin.pages.produits.edit',compact('categories','scats','produit','prod_cat','name_scat','prod_sact'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_products(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'libelle'     =>'required|max:191',
            'description' =>'required|max:191',
            'categorie'   =>'required|max:191',
            'subcat'      =>'required|max:191',
        ]);

        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->errors()
            ]);
        }
        else{

            $produit = Produit::find($id);
            $ids = $produit->id;
            if($produit){

                $produit->libelle           = $request->input('libelle');
                $produit->description       = $request->input('description');
                //$produit->image           = $request->get('image');
                $produit->categorie_id      = $request->get('categorie');
                $produit->sous_categorie_id = $request->get('subcat');


                if ($request->file('image')) {
                    # code...
                    $upload   = $request->file('image');
                    $filename = $upload->getClientOriginalName();
                    $upload->move('uploads/shop/', $filename);
                    $produit->image =  $filename;
                }

                //$xy = $request->get('subcat');

                if ($request->get('subcat') || $request->get('categorie')) {
                    # code...
                    return Redirect::to('/dashboard/edit_products/'.$ids)->with('danger', 'Veuillez renseigner la catégorie et la sous-catégorie');
                }

                $produit->update(['updated_at' => now()]);

                $produit->update();

                return redirect()->route('admin.products')->with('success', 'Votre produit a éte modifié avec succès');

            }

        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_products($id)
    {
        $product = Produit::find($id);
        $product->delete();

        return redirect()->route('admin.products')
            ->with('success', 'Suppression effectuée avec succès');
    }

}

/**
 * Un servlet est un composant web JEE qui permet d'effectuer des traitements du coté du serveur
 * suite à une requete HTTP et d'envoyer une reponse HTTP;
 * classe java à linterieur de laquelle on peut generer du code java
 *
 * Une servlet est une classe Java qui herite de HttpServlet et qui redefinie des methodes
 * comme doGet, doPost, doPut, doDelete; doHead.Et d'autres methodes qui definissent son cycle de vie
 *
 * la methode doX est executée si une requete HTTP est envoyée par un client http avec la methode X
 *
 * executer  une operation au demarrage de l'application
 *
 * serveur, cycle de vie du servlet
 */
