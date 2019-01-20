<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Post;

class CategoriesController extends Controller
{
   /* public function index()
    {
    	$categories = Categorie::all();
    	return view('categories.index', compact('categories'));
    }
	*/

    public function show()
    {
    	$categories = Categorie::whereNull('parent_id')->get();
    	return view('categories.index', compact('categories'));
    }



    public function showsouscategorie($id)
    {
        $categories = Categorie::where('parent_id',"=",$id)->get();
        return view('categories.partials._souscategorie', compact('categories'));
    }



    public function showliste($id)
    {
        //$posts = Post::where('categorie_id','=',$categorie_id)->with(['categorie_post'])->get();
        //$categories = Categorie::where('parent_id',"=",$id)->get();
        $categories = Categorie::find($id);
        $posts = Post::where('id','=',$id)->with(['categoriepost'])->get();
        //dd($posts);
        return view('categories.liste', compact('posts','categories'));
    }
}
