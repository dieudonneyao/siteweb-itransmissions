<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Mail\Transmission;
use App\Models\Categorie;
use App\Models\Message;
use App\Models\Produit;
use App\Models\Sous_Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class IndexController extends Controller
{

    function home(){
        return view('home');
    }


    function about(){
        return view('about');
    }


    function services(){
        return view('services');
    }


    function galerie(Request $request){

        $produits = DB::table('produits')

        ->join('sous__categories', 'sous__categories.id', '=', 'produits.sous_categorie_id')

        ->join('categories', 'categories.id', '=', 'produits.categorie_id')

        ->selectRaw('produits.*,

            produits.id,

            produits.libelle,

            categories.libelle as cats,

            sous__categories.libelle as scats'

        )

        ->orderBy('produits.id', 'desc')
        ->paginate(10);
        //->get();

        //dd($produits);


        //return view('galerie'); Electricite
        $transmission = Produit::whereHas('categorie', function ($produits) {
            $produits->where('libelle', ['Transmissions']);
        })
            ->orderBy('created_at', 'DESC')
            ->with('categorie','s_categorie')
            ->paginate(10);
            //->get();

        $quicaillerie = Produit::whereHas('categorie', function ($produits) {
            $produits->where('libelle', ['Quincaillerie']);
        })
            ->orderBy('created_at', 'DESC')
            ->with('categorie','s_categorie')
            //->get();
            ->paginate(10);

        $electricite = Produit::whereHas('categorie', function ($produits) {
            $produits->where('libelle', ['Electricite']);
        })
            ->orderBy('created_at', 'DESC')
            ->with('categorie','s_categorie')
            ///->get();
            ->paginate(10);

        $divers = Produit::whereHas('categorie', function ($produits) {
            $produits->where('libelle', ['Divers']);
        })
            ->orderBy('created_at', 'DESC')
            ->with('categorie','s_categorie')
            ->paginate(10);
            //->get();

        $huiles = Produit::whereHas('categorie', function ($produits) {
            $produits->where('libelle', ['Huiles, lubrifiants et graisses']);
        })
            ->orderBy('created_at', 'DESC')
            ->with('categorie','s_categorie')
            //->get();
            ->paginate(10);

        //dd($divers);

        if ($request->ajax()) {
            # code...
            return view('galerie_ajax',compact('huiles','transmission','quincaillerie','electricite','divers','produits'));

        }

        return view('galerie',compact('huiles','transmission','quincaillerie','electricite','divers','produits'));

    }


    public function jeff()
    {
        $produits    = Produit::all();
        $categories  = Categorie::all();

        return view('produits.index_prod',compact('produits','categories'));
    }


    public function admin()
    {
        $produits    = Produit::all();
        $categories  = Categorie::all();

        return view('admin',compact('produits','categories'));
    }

    public function produits($cat_id)
    {
        //$cat = $request->categorie;
        $s_cat = Sous_Categorie::query()
            ->where('categorie_id', '=', $cat_id)
            ->get();

        //dd($s_cat);

        return response()->json($s_cat);

    }


    function prod_per_scat($cat_libelle,$scat_lib){

        $categorie   = Categorie::where('libelle', $cat_libelle)->first();
        $s_categorie = Sous_Categorie::where('libelle', $scat_lib)->first();

        $produits    = Produit::all();
        $categories  = Categorie::all();

        $cat_id  = $categorie->id;
        $scat_id = $s_categorie->id;

        $produits = DB::table('produits')

            ->join('sous__categories', 'sous__categories.id', '=', 'produits.sous_categorie_id')

            ->join('categories', 'categories.id', '=', 'produits.categorie_id')

            ->where('produits.categorie_id','=', $cat_id)->where('produits.sous_categorie_id','=', $scat_id)

            ->selectRaw('produits.*,

                produits.id,

                produits.libelle as prod,

                categories.libelle as cats,

                sous__categories.libelle as scats'
            )

            ->orderBy('produits.id', 'desc')

            ->paginate(10);

        return view('produits.prod_cat',compact('produits','categories'));


    }


    public function contact(){
        return view('contact');
    }


    public function send_contact(Request $request){

        $contact = new Message([
            'name'    => $request->get('nom'),
            'email'   => $request->get('email'),
            'message' => $request->get('description'),
        ]);

        //dd($contact);
        $contact->save();

        Mail::to('contact@i-transmission.com')->send(new Transmission($contact));

        Mail::to($contact->email)->send(new ContactForm($contact));

        Alert::success('i-transmissions', 'Votre message a éte envoyé avec succès');

        return redirect()->route('contact')->with('success', 'Votre message a éte envoyé avec succès');


    }


    function search(Request $request){

        $text = $request->input('search_cat');

        /* $cat_id  = $categorie->id;
        $scat_id = $s_categorie->id; */

        $produits = DB::table('produits')

            ->join('sous__categories', 'sous__categories.id', '=', 'produits.sous_categorie_id')

            ->join('categories', 'categories.id', '=', 'produits.categorie_id')

            //->where('produits.categorie_id','=', $cat_id)->where('produits.sous_categorie_id','=', $scat_id)

            ->selectRaw('produits.*,

                produits.id,

                produits.libelle as prod,

                categories.libelle as cats,

                sous__categories.libelle as scats'
            )
            ->where('cats', 'Like', $text)
            ->orWhere('scats', 'Like', $text)

            ->orderBy('produits.id', 'desc')
            ->get();


        //$patients = DB::table('patients')->where('firstname', 'Like', "$text")->get();

        return response()->json($produits);

    }


}
