<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediasController extends Controller
{
    public function show($media_id)
    {
    	$medias = Media::where('media_id','=',$media_id)->with(['demande'])->get();
    	return view('post.index',compact('medias'));
    }
}
