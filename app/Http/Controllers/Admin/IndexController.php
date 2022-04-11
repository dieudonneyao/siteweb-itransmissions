<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Categorie;
use App\Models\Sous_Categorie;
use App\Models\Produit;

class IndexController extends Controller
{
    function index(){

        $this->middleware('auth');

        if (Auth::check() == null) {
            # code...
            return redirect()->route('loginview');
        }else {
            # code...
            $prod = Produit::query()->count();
            $cat = Categorie::query()->count();
            $s_cat = Sous_Categorie::query()->count();
            return view('admin.pages.index', compact('prod','cat','s_cat'));
        }

    }

}
