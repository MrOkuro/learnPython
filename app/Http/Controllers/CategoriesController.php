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
    	$categories = Categorie::all();
    	return view('categories.index', compact('categories'));
    }
}
