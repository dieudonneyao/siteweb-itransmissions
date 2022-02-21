<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Sous_Categorie;
use Illuminate\Support\Facades\Request;

class AjaxController extends Controller
{
    public function s_cat($cat_id){
        //$cat = $request->categorie;
        $s_cat = Sous_Categorie::query()
            ->where('categorie_id', '=', $cat_id)
            ->get();

        //dd($s_cat);

        return response()->json($s_cat);

    }

    public function ss_cat($slug){
        //$cat = $request->categorie;
        $categorie = Categorie::where('slug', $slug)->first();
        $cat_id = $categorie->id;
        //dd($cat_id );
        $s_cat = Sous_Categorie::query()
            ->where('categorie_id', '=', $cat_id)
            ->get();

        dd($s_cat);

        return response()->json($s_cat);

    }

}
