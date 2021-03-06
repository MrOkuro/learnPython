<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'media_id', 'post_type', 'title','duration','date','price','content','statut','link_video'
    ];

    public function media()
    {
        return $this->hasOne('App\Media');
    }

    public function categories()
    {
    	return $this->belongsToMany(Categorie::class, 'categorie_posts');
       //return $this->hasOne('App\Admin\CategoriePost'); 
    }
}
