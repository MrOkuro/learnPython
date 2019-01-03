<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'parent_id', 'name', 
    ];

    public function post()
    {
    	return $this->hasMany(Post::class);
    }
}
