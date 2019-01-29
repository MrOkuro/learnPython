@extends('layouts.default')





@section('content')
<div class="container">       


		   
@include('layouts.partials._header')
 <h1 class="text-left">@lang('Détail du post')</h1> <br>








<div class="form-row form-group">






        <div class="card bg-dark text-white text-center ">
         <iframe width="560" height="315" src={{$post->link_video}} allowfullscreen></iframe>

        <div class="card-img-overlay">
          <h5 class="card-title">{{$post->title}} </h5>
          <p class="card-text">{{$post->content}}</p>          
          <a class="btn btn-sm btn-success" href="" role="button">@lang('Revenir à la page précédente') </a>
        </div>
    </div>

<br><br><br>




</div>



		   
</div>
@include('layouts.partials._footer')
@endsection
