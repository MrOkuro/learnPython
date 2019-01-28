@extends('layouts.default')

@section('content')
<div class="container">
        
 
        <h1 class="text-left">@lang('Liste des posts de la catégorie') </h1> <br>
       

 <table class="table table-bordered table-hover table-sm">
          <thead class="thead-dark">
            <tr>
                    <th scope="col" class="col-auto small">@lang('titre')</th>     
            </tr>
            <tbody>
            @foreach ($categories->posts as $post)   
             
              <tr>
                <td>{{ dd($post->title) }}  </td>
                <td> <a class="btn btn-sm btn-success" href="{{ route('post.show', [$post->id] ) }}" role="button">@lang('Voir le poste') </a> </td>
              </tr>
            @endforeach

            </tbody>                
            </thead>
</table> 

       
</div>
@include('layouts.partials._footer')
@endsection
