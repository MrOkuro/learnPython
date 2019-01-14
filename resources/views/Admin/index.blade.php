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
                     <th scope="col" class="col-auto small">@lang('date')</th>
                     <th scope="col" class="col-auto small">@lang('prix')</th>  
                     <th scope="col" class="col-auto small">@lang('Contenu')</th>
                     <th scope="col" class="col-auto small">@lang('statut')</th>
                     <th scope="col" class="col-auto small">@lang('Lien vidéo')</th>                   
                     
                     
            </tr>
            <tbody>
            @foreach ($posts as $post)   
              <tr>
                <td>{{ $post->title }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td> 
                    <button type="button" class="btn btn-primary"  onclick="affiche_form_update({{"'".route('post.form_update',$post->id)."'"}});">
                                @lang('Modifier opération')
                            </button></td>
                <td>supprimer</td>
                
                                
              </tr>
            @endforeach

            </tbody>                
            </thead>
</table> 


<section id="form_update" class="contentcard">    

</section>

       
</div>
@include('layouts.partials._footer')
@endsection
