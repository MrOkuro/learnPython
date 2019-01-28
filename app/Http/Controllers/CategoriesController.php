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
        //dd(Categorie::find($id)->posts);
        $categories = Categorie::find($id)->posts;
        /*
        $categorie = Categorie::where('id','=',$id)->with(['categoriepost.post'])->first();
        //dump($categorie);
        $posts = array();
        foreach($categorie->categoriepost as $categoriepost)
        {
            $posts[] = $categoriepost->post;
        }
        //dump($posts);
        //dd('test');*/
        return view('categories.liste', compact('categories'));

        
    }
}
