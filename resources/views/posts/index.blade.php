@extends('layouts.default')

@section('content')
<div class="container">
        


		    <h1 class="text-left">@lang('Accueil')</h1> <br>

@include('layouts.partials._header')



			 @foreach ($posts as $post)
					<div class="card bg-dark text-white text-center ">
						  <img class="card-img" src="{{url('images', 'image1.jpg') }}" style="width:500px;height:300px"; alt="Card image">
						  <div class="card-img-overlay">
						  <p class="card-text">Catégorie:
						        @foreach($post->categories as $category)
                    					{{ $category->name}}
                  				@endforeach </p>
						    <h5 class="card-title"> Titre de la vidéo :{{ $post->title }}  </h5>						    
						    <p class="card-text"> Prix de la vidéo: {{ $post->price }} €</p>						    
						    <a class="btn btn-sm btn-success" href="{{ route('post.show', [$post->id] ) }}" role="button">@lang('Voir la vidéo') </a>
						  </div>
					</div>

			<br><br><br>
			 @endforeach
		</div>

	<div class="float-right">
		{{ $posts->links() }}
	</div>

		   
</div>
@include('layouts.partials._footer')
@endsection
