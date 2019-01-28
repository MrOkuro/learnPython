<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        'title', 'link_image',
    ];


    public function post()
    {
        return $this->hasOne(post::class); 
        //return $this->hasOne('App\Http\Controllers\Admin\Post');
    }
}
