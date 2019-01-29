@extends('layouts.default')

@section('content')
<div class="container">
        

<h1 class="text-left">@lang('Catégories')</h1> <br>
@include('layouts.partials._header')


<div class="contentcard">
	@foreach($categories as $categorie)
		  <div class="card cardstyle">
				    <img class="card-img-top" src="{{url('images', 'image2.jpg') }}" style="width:300px;height:300px"; alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">{{ $categorie->name }}</h5>
				      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
					   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
					   exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
					    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
						 occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
				    </div>
				    <div class="card-footer">				      
					     <button type="button" class="btn btn-primary"  onclick="affiche_souscategorie({{"'".route('categorie.souscategorie',$categorie->id)."'"}});"> @lang('Afficher la sous catégorie')
						 {{ $categorie->name }}
	                    </button>
				    </div>
		  </div>
@endforeach	
</div>
<br><br><br><br><br><br>

<section id="souscategorie">    

</section>

		   
</div>
@include('layouts.partials._footer')
@endsection
