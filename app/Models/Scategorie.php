<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scategorie extends Model
{
    protected $fillable = [
        'nomscategorie','imagescategorie','categorieID'
        ];
        // la relation entre le table categorie et table sous categorie 
        public function categories()
        {
        return $this->belongsTo(Categorie::class,"categorieID");
        }
        public function article()
{
return $this->hasMany(Article::class,"scategorieID");
}
}
