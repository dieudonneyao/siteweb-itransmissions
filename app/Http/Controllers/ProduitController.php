<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Sous_Categorie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

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
            ->with('categorie','sous_categorie')
            ->orderBy('created_at', 'desc')
            ->get();

        dd($produits);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
