@extends('layouts.default')

@section('content')
<div class="container">
        


        <h1 class="text-left">@lang('Dashboard')</h1> <br>
  <div class="row">
          <div class="col-auto mr-auto">
            <div class="btn">
              
              <a class="btn btn-sm btn-primary" href="{{ route('post.create') }}" role="button">@lang('Ajouter new post')</a>
              
            </div>
          </div>
          
          
  </div>


 <table class="table table-bordered table-hover table-sm">
          <thead class="thead-dark">
            <tr>
                    <th scope="col" class="col-auto small">@lang('titre')</th>
                     <th scope="col" class="col-auto small">@lang('durée')</th>
                     <th scope="col" class="col-auto small">@lang('date')</th>
                     <th scope="col" class="col-auto small">@lang('prix')</th>  
                     <th scope="col" class="col-auto small">@lang('Contenu')</th>
                     <th scope="col" class="col-auto small">@lang('statut')</th>
                     <th scope="col" class="col-auto small">@lang('Lien vidéo')</th>                   
                     
                     
            </tr>
            <tbody>
               
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>modifier</td>
                <td>supprimer</td>
                
                                
              </tr>


            </tbody>                
            </thead>
</table> 


 <table class="table table-bordered table-hover table-sm">
          <thead class="thead-dark">
            <tr>
                    <th scope="col" class="col-auto small">@lang('titre')</th>
                     <th scope="col" class="col-auto small">@lang('durée')</th>
                     <th scope="col" class="col-auto small">@lang('Type de post')</th>
                     <th scope="col" class="col-auto small">@lang('date')</th>
                     <th scope="col" class="col-auto small">@lang('prix')</th>  
                     <th scope="col" class="col-auto small">@lang('Contenu')</th>
                     <th scope="col" class="col-auto small">@lang('statut')</th>
                     <th scope="col" class="col-auto small">@lang('catégories')</th>
                     <th scope="col" class="col-auto small">@lang('Lien vidéo')</th>                   
                     
                     
            </tr>
            <tbody>

            @foreach ($posts as $post)  

              <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->duration }}</td>
                <td>{{ $post->post_type }}</td>
                <td>{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }} </td>
                <td>{{ $post->price }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->statut }}</td>
                <td> </td>
                <td>{{ $post->link_video }}</td>
                <td> 
                    <button type="button" class="btn btn-primary"  onclick="affiche_form_update({{"'".route('post.form_update',$post->id)."'"}});">
                                @lang('Modifier post')
                    </button></td>
                <td>
                    <form method="POST" action="{{ route('post.delete', $post->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger"> supprimer </button>

                    </form>
                        
                

                </td>
                
                                
              </tr>
            @endforeach

            </tbody>                
            </thead>
</table> 

  <div class="float-right">
    {{ $posts->links() }}
  </div>

<section id="form_update" class="contentcard">    

</section>

       
</div>
@include('layouts.partials._footer')
@endsection
