<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Produit extends Model
{

    use HasFactory;

    protected $fillable = [

        'libelle','categorie_id','image','description','sous_categorie_id'

    ];

    public function categorie(){

        return $this->belongsTo(Categorie::class)->withDefault(function ($libelle, $post) {
            $libelle->libelle = 'categorie';
        });

    }


    public function s_categorie(){

        return $this->belongsTo(Sous_Categorie::class);
    }

}

