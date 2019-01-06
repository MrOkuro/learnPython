@extends('layouts.default')

@section('content')
<div class="container">
        


@include('layouts.partials._header')

 <h1 class="text-left">@lang('Nom catégorie')</h1> <br>
	

<!--
<div class="contentcard">

			<div class="card cardstyle" >
					    <img class="card-img-top" src="{{url('images', 'image2.jpg') }}" style="width:300px;height:300px";  alt="Card image cap">
					    <div class="card-body">
					      <h5 class="card-title">Sous catégorie 1</h5>
					      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. .</p>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">Last updated 3 mins ago</small>
					      <a class="btn btn-sm btn-success" href="" role="button">@lang('Voir les vidéos') </a>
					    </div>
		   </div>

		   <div class="card cardstyle">
					    <img class="card-img-top" src="{{url('images', 'image2.jpg') }}" style="width:300px;height:300px"; alt="Card image cap">
					    <div class="card-body">
					      <h5 class="card-title">Sous catégorie 2</h5>
					      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">Last updated 3 mins ago</small>
					      <a class="btn btn-sm btn-success" href="" role="button">@lang('Voir les vidéos') </a>
					    </div>
		  </div>

			<div class="card cardstyle">
				    <img class="card-img-top" src="{{url('images', 'image2.jpg') }}" style="width:300px;height:300px"; alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Sous catégorie 3</h5>
				      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				    </div>
				    <div class="card-footer">
				      <small class="text-muted">Last updated 3 mins ago</small>
				      <a class="btn btn-sm btn-success" href="" role="button">@lang('Voir les vidéos') </a>
				    </div>
		  </div>	  		
</div>
-->


<div class="contentcard">
	@foreach($categories as $categorie)
		  <div class="card cardstyle">
				    <img class="card-img-top" src="{{url('images', 'image2.jpg') }}" style="width:300px;height:300px"; alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">{{ $categorie->name }}</h5>
				      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				    </div>
				    <div class="card-footer">
				      <small class="text-muted">Last updated 3 mins ago</small>
					     <button type="button" class="btn btn-primary"  onclick="affiche_souscategorie({{"'".route('categorie.souscategorie',$categorie->id)."'"}});"> @lang('Afficher la sous catégorie')
	                    </button>
				    </div>
		  </div>
@endforeach	
</div>


<section id="souscategorie" class="contentcard">    

</section>

		   
</div>
@include('layouts.partials._footer')
@endsection
