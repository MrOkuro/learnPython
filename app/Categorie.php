<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'parent_id', 'name', 
    ];



    protected $table = 'categories';

    public function categoriepost()
    {
        //return $this->belongsTo(CategoriePost::class);
       return $this->hasMany('App\CategoriePost');
    }


    public function posts()
    {
        return $this->belongsToMany(Post::class, 'categorie_posts');
    }
}
