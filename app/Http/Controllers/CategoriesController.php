<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;

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



        public function showliste($categorie_id)
    {
        $posts = Post::where('categorie_id','=',$categorie_id)->with(['categorie_post'])->get();
        //$categories = Categorie::where('parent_id',"=",$id)->get();
        return view('categories.liste', compact('categories'));
    }
}
