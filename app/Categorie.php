<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'parent_id', 'name', 
    ];

    public function categoriepost()
    {
        //return $this->belongsTo(CategoriePost::class);
       return $this->hasOne('App\CategoriePost'); 
    }
}
