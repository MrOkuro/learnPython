<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'parent_id', 'name', 
    ];

    public function post()
    {
    	//return $this->hasMany(Post::class);
    	 return $this->hasMany('App\Post');
    }
}
