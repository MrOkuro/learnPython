<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	return view('posts.index');
    }



    public function show()
    {
    	//$post = Post::find($id);
    	return view('posts.detail', compact(['post']));
    }
}
