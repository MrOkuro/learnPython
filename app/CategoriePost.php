<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriePost extends Model
{
    protected $fillable = [
        'post_id','categorie_id'
    ];

    public function categorie()
    {
    	//return $this->belongsTo(Categorie::class);
        return $this->belongsTo('App\Categorie');
    }

    public function post()
    {
    	//return $this->belongsTo(Post::class);
        return $this->belongsTo('App\Post');
    }
}
