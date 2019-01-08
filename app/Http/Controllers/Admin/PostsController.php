<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Post;
use App\Http\Controllers\Admin\Categorie;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	return view('admin.index',compact(['posts']));
    }

    public function create()
    {
        $post = new Post;
        $categories = Categorie::whereNotNull('parent_id')->get();

        return view('admin.create',compact('post','categories'));
    }

    public function store($request)
    {
        $post = new Post;
        $post->post_type = $request->post_type;
        $post->duration = $request->duration;
        $post->title = $request->title;
        $post->date = $request->date;
        $post->price = $request->price;
        $post->content = $request->content;
        $post->statut = $request->statut;
        $post->content = $request->content;

        if($post->save() !== false)
        {
            
        }

        return view('admin.create',compact('post','categories'));
    }



    /*public function show($id)
    {
    	$post = Post::find($id);
    	return view('posts.show', compact(['post']));
    } */
}
