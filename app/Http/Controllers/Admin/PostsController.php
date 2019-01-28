<?php

namespace App\Http\Controllers\Admin;


use App\Admin\CategoriePost;
use App\Admin\Categorie;
use App\Admin\Media;
use App\Admin\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function index()
    {
    	//$posts = Post::all();
        $posts = Post::paginate(5);
        //dd($posts);
        //$categories = Categorie::whereNotNull('parent_id')->with(['categoriepost'])->get();
        
        //dd($categories);
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
        $post->price = $request->price;
        $post->content = $request->content;
        $post->link_video = $request->link_video;
        $post->statut = $request->statut;        
        if($post->save() !== false)
        {
            $categoriepost = New CategoriePost;
            $categoriepost->post_id = $post->id;
            $categoriepost->categorie_id = $request->categorie_id;
            $categoriepost->save();   
            
            // Save image
            //$path = Storage::disk('images')->put('\public\images', $request->file('file.jpg'));
            //$path = Storage::putFileAs('images', new File('/images'), 'public' );
            //Request::file('image')->move('images/datasheets', 'file.jpg');
            //$path = $request->file('path')->storeAs('images');

            //$path = storeAs('public','mon_image.jpg');
        
            //$media = new Media;            
            //$media->title_image = $request->title_image;
            //$media->link_image = $path;
            //$media->save();
            $request->session()->flash('alert', ['class'=>'success','message'=>'Post crée!!']);
        }
        //$request->session()->flash('alert', ['class'=>'success','message'=>'Post crée!!']);
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


    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return view('admin.index');
    }


}
