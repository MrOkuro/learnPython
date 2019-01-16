<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Admin\CategoriePost;
use App\Http\Controllers\Admin\Categorie;
use App\Http\Controllers\Admin\Media;
use App\Http\Controllers\Admin\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

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
        //$categories = Categorie::all();
        dump($categories);

        return view('admin.create',compact('post','categories'));
    }

    public function store(PostRequest $request)
    {
        //dd('test');
        $post = new Post;
        $post->post_type = $request->post_type;
        $post->duration = $request->duration;
        $post->title = $request->title;
        //$post->date = $request->date;
        $post->price = $request->price;
        $post->content = $request->content;
        $post->link_video = $request->link_video;
        $post->statut = $request->statut;
        //
        $post->categoriepost->categorie_id = $request->categorie_id;
        //$post->post_id = $request->post_id; 
        

        if($post->save() !== false)
        {
            $categoriepost = New CategoriePost;
            $categoriepost->post_id = $post->id;
            //$categoriepost->categorie_id = $categorie->id;
            // Save image
            //$path = Storage::disk('images')->put('learnPython\public\images', $request->file('image'));
            //Request::file('image')->move('images/datasheets', 'nom_personnalisé.jpg');

            //$media = new Media;
            //$post->media_id = $media->id;
            //$media->title = $media_title;
            //$media->link_image = $path;
        }

        return redirect(url()->previous());
    }



    public function update(PostRequest $request, Post $post)
    {
       
        if($post->update($request->input()))
        {
             $request->session()->flash('alert', ['class'=>'success','message'=>'Post mis à jour']);
        }
        
        return redirect(url()->previous());
    }



     public function form_update($id)
    {
      $post = Post::find($id); 
      $categories = Categorie::whereNotNull('parent_id')->get();    
     
      return view('admin.partials._form_update', compact('post','categories'));
    }



    /*public function show($id)
    {
    	$post = Post::find($id);
    	return view('posts.show', compact(['post']));
    } */
}
