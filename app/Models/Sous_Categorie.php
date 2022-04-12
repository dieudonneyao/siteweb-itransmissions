<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sous_Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'categorie_id',
    ];

    /*public function subcategory()
    {
        return $this->hasMany(Category::class);
    }*/

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }



}
