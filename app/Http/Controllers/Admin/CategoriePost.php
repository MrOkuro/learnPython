<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Database\Eloquent\Model;

class CategoriePost extends Model
{
        protected $fillable = [
        'post_id','categorie_id'
    ];



        public function categorie()
    {
    	//return $this->belongsTo(Categorie::class);
        return $this->belongsTo('App\Http\Controllers\Admin\Categorie');
    }


        public function post()
    {
    	//return $this->belongsTo(Post::class);
        return $this->belongsTo('App\Http\Controllers\Admin\Post');
    }
}
