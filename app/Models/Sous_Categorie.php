<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sous_Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle', 'categorie_id',
    ];

/*     public function subcategory()
    {
        return $this->hasMany(Category::class);
    } */

    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }

}
