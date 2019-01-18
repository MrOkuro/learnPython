<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesPostsController extends Controller
{
    protected $fillable = [
        'post_id','categorie_id'
    ];
	$this->timestamp = false;
}
