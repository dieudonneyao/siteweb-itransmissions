<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Models\Categorie;
use App\Models\Message;
use App\Models\Produit;
use App\Models\Sous_Categorie;
use App\Notifications\EmailNotif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

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

    function galerie(){
        //return view('galerie'); Electricite

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

            ->get();


        $transmission = Produit::whereHas('categorie', function ($x) {
            $x->where('libelle', ['Transmissions']);
        })
            ->orderBy('created_at', 'DESC')
            ->with('categorie','s_categorie')
            ->get();

        $quicaillerie = Produit::whereHas('categorie', function ($x) {
            $x->where('libelle', ['Quincaillerie']);
        })
            ->orderBy('created_at', 'DESC')
            ->with('categorie','s_categorie')
            ->get();

        $electricite = Produit::whereHas('categorie', function ($x) {
            $x->where('libelle', ['Electricite']);
        })
            ->orderBy('created_at', 'DESC')
            ->with('categorie','s_categorie')
            ->get();

        $divers = Produit::whereHas('categorie', function ($x) {
            $x->where('libelle', ['Divers']);
        })
            ->orderBy('created_at', 'DESC')
            ->with('categorie','s_categorie')
            ->get();

        return view('galerie',compact('transmission','quicaillerie','electricite','divers','produits'));
    }


    public function jeff()
    {
        $produits    = Produit::all();
        $categories  = Categorie::all();
        return view('admin',compact('produits','categories'));
    }


    public function produits()
    {
        //$produits    = Produit::all();
        $categories  = Categorie::all();

        $produits = DB::table('produits')

        ->join('sous__categories', 'sous__categories.id', '=', 'produits.sous_categorie_id')

        ->join('categories', 'categories.id', '=', 'produits.categorie_id')

        ->selectRaw('produits.*,

            produits.id,

            produits.libelle,

            produits.image,

            categories.libelle as cats,

            sous__categories.libelle as scats'

        )

        ->orderBy('produits.id', 'desc')

        ->get();

        return view('product',compact('produits','categories'));
    }


    function prod_per_cat($slug){

        $categorie = Categorie::where('slug', $slug)->first();
        //dd($categorie);

        $cat_id = $categorie->id;
        //dd($cat_id);

        $categories = Categorie::all();
        $s_cat      = Sous_Categorie::all();

        $produits = DB::table('produits')

            ->join('sous__categories', 'sous__categories.id', '=', 'produits.sous_categorie_id')

            ->join('categories', 'categories.id', '=', 'produits.categorie_id')

            ->where('produits.categorie_id','=', $cat_id)


            ->selectRaw('produits.*,

                produits.id,

                produits.libelle,

                categories.libelle as cats,

                sous__categories.libelle as scats'

            )

            ->orderBy('produits.id', 'desc')

            ->paginate(2);

        //dd($produits);

        /*$produits = Produit::query()
            ->with('categorie','s_categorie')
            ->where('categorie_id', '=' , $cat_id)
            ->orderBy('created_at', 'desc')
            ->get();*/


        return view('product',compact('produits','categories'));
    }


    public function contact(){
        return view('contact');
    }

    public function send_contact(Request $request){

        $contact = new Message([
            'name'    => $request->get('nom'),
            'email'   => $request->get('email'),
            'message' => $request->get('msg'),
        ]);

        //dd($contact);

        //Notification::send('jefersonyoboue@gmail.com', new ContactForm($contact));//Notification mail
        Mail::to($contact->email)->send(new ContactForm($contact));


    }

}



/* $contact = new Contact([
            'name'    => $request->get('form_name'),
            'email'   => $request->get('form_email'),
            'message' => $request->get('form_msg'),
        ]);

        //dd($contact->email);

        Mail::to('jefersonyoboue@gmail.com')->send(new ContactForm($contact));

        $contact->save();

        //return  redirect()->route('contact')->with('success','Your information has been successfully transmitted.');
        # code...
        $admin_email = $contact->email;
        //Notification::send($contact->email, new Contacts($contact));//Notification mail

        Mail::to('jefersonyoboue@gmail.com')->send(new ContactForm($contact));


        $contact->save(); */
