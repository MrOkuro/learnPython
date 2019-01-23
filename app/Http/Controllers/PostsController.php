<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{


     public  function search($request,$posts)
    {
        if(!empty($request->search)) //if(!empty($request->search == 'title'))
        {
            $posts = $posts->orWhere('title','like','%'.$request->search.'%');
            //$posts->appends(['search' => $request->recherche, 'title' => $request->title]);
            
        }
        $posts->select('posts.*');
        //dd($posts);

        return $posts;
    }


    public function index(Request $request)
    {
    	//$posts = Post::all();
        if(empty($request->input()))
        {
            $posts = Post::paginate(3);
        }
        else
        {
            $posts = new Post;
            $posts = self::search($request,$posts);
            $posts = $posts->paginate(3);
        }


        //$posts = Post::paginate(3);        
    	return view('posts.index',compact(['posts']));
    }



    public function show($id)
    {
    	$post = Post::find($id);
    	return view('posts.show', compact(['post']));
    }


}
