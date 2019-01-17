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


    public function categorie()
    {
    	//return $this->belongsTo(Categorie::class);
        return $this->hasOne('App\Categorie');
    }
}
