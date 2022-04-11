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
        return $this->belongsTo(Categorie::class);
    }

    public function s_categorie(){
        return $this->belongsTo(Sous_Categorie::class);
    }

}
