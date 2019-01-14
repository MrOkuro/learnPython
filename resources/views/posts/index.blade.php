@extends('layouts.default')

@section('content')
<div class="container">
        


		    <h1 class="text-left">@lang('Accueil')</h1> <br>

@include('layouts.partials._header')


<div class="form-row form-group">

		<div class="card bg-dark text-white text-center ">
			  <img class="card-img" src="{{url('images', 'image1.png') }}" style="width:894px;height:270px"; alt="Card image">
			  <div class="card-img-overlay">
			    <h5 class="card-title">Card title Exemple</h5>
			    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			    <p class="card-text">Last updated 3 mins ago</p>
			    <a class="btn btn-sm btn-success" href="" role="button">@lang('Voir la vidéo') </a>
			  </div>
		</div>

<br><br><br>


 @foreach ($posts as $post)
		<div class="card bg-dark text-white text-center ">
			  <img class="card-img" src="{{url('images', 'image1.png') }}" style="width:894px;height:270px"; alt="Card image">
			  <div class="card-img-overlay">
			    <h5 class="card-title">{{ $post->title }} </h5>
			    <p class="card-text">{{ $post->title }}</p>
			    <p class="card-text">Last updated 3 mins ago</p>
			    <a class="btn btn-sm btn-success" href="{{ route('post.show', [$post->id] ) }}" role="button">@lang('Voir la vidéo') </a>
			  </div>
		</div>

<br><br><br>
 @endforeach



</div>



		   
</div>
@include('layouts.partials._footer')
@endsection
