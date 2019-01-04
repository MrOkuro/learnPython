<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Post;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	return view('admin.index');
    }



    /*public function show($id)
    {
    	$post = Post::find($id);
    	return view('posts.show', compact(['post']));
    } */
}
