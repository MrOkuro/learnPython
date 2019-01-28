<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'parent_id', 'name', 
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    public function categoriepost()
    {
    	return $this->belongsTo(CategoriePost::class);
    	//return $this->hasMany('App\Admin\CategoriePost');
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'categorie_posts');
    }
}
