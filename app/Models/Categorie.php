<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle','slug',
    ];

    public function produit(){
        return $this->hasMany(Produit::class);
    }

    public function subcategory(){
        return $this->hasMany(Sous_Categorie::class);
    }

}
