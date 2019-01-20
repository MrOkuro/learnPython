@extends('layouts.default')

@section('content')


<div class="container py-1">
    <form class="form-horizontal" method="POST" action="{{ route('post.store') }}">
        {{ csrf_field() }}


<div class="form-row form-group">
         
            <div class="col-md-3">
                <label for="title" class="control-label font-weight-bold">@lang('Titre post')</label>
                <input id="title" type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }} " name="title" value="{{ old('title') }}" placeholder="titre" autofocus>
                @if ($errors->has('title'))
                    <div class="help-block text-danger font-italic"></div>
                @endif
            </div>

            <div class="col-md-3">
                <label for="link_video" class="control-label font-weight-bold">@lang('Lien vidéo')</label>
                <input id="link_video" type="text" class="form-control {{ $errors->has('link_video') ? 'is-invalid' : '' }} " name="link_video" value="{{ old('link_video') }}" placeholder="vidéo" autofocus>
                @if ($errors->has('link_video'))
                    <div class="help-block text-danger font-italic"></div>
                @endif
            </div>

            <div class="col-md-3">
                <label for="duration" class="control-label font-weight-bold">@lang('Durée')</label>
                <input id="duration" type="text" class="form-control {{ $errors->has('duration') ? 'is-invalid' : '' }} " name="duration" value="{{ old('duration') }}" placeholder="durée" autofocus>
                @if ($errors->has('duration'))
                    <div class="help-block text-danger font-italic"></div>
                @endif
            </div>


            <div class="col-md-3">
                <label for="price" class="control-label font-weight-bold">@lang('Prix')</label>
                <input id="price" type="text" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }} " name="price" value="{{ old('price') }}" placeholder="prix" autofocus>
                @if ($errors->has('price'))
                    <div class="help-block text-danger font-italic"></div>
                @endif
            </div>


             <div class="col-md-3">
                <label for="content" class="control-label font-weight-bold">@lang('Contenu')</label>
                <input id="content" type="text" class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }} " name="content" value="{{ old('content') }}" placeholder="contenu" autofocus>
                @if ($errors->has('content'))
                    <div class="help-block text-danger font-italic"></div>
                @endif
            </div>
       
        


        <div class="col-md-3">
            <label for="categorie_id" class="control-label font-weight-bold">@lang('Catégories')</label>
            <select id="categorie_id" class="form-control {{ $errors->has('categorie_id') ? 'is-invalid' : '' }}" name="categorie_id">
                <option value=""> Liste catégories </option>
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}" {{ (old('categorie_id') == $categorie->id)? 'selected' : '' }} > {{ $categorie->name}} </option>
                @endforeach 
            </select>        
            @if ($errors->has('categorie_id'))
                <div class="help-block text-danger font-italic"></div>
            @endif
        </div>





            <div class="form-group col-md-3">
                        <label for="statut" class="control-label font-weight-bold">@lang('Statut')</label>
                        <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="statut" id="open" value="open" >
                                  <label class="form-check-label" for="exampleRadios1">
                                   Open
                                  </label>
                        </div>
                        <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="statut" id="close" value="close">
                                  <label class="form-check-label" for="exampleRadios2">
                                    Close
                                  </label>
                        </div>
                        @if ($errors->has('statut'))
                            <div class="help-block text-danger font-italic">{{ $errors->first('statut') }}</div>
                        @endif
            </div>

            <div class="form-group col-md-3">
                        <label for="statut" class="control-label font-weight-bold">@lang('Post Type')</label>
                        <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="post_type" id="post" value="post" >
                                  <label class="form-check-label" for="exampleRadios1">
                                   Post
                                  </label>
                        </div>
                        <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="post_type" id="video" value="video">
                                  <label class="form-check-label" for="exampleRadios2">
                                    Video
                                  </label>
                        </div>
                        @if ($errors->has('post_type'))
                            <div class="help-block text-danger font-italic">{{ $errors->first('post_type') }}</div>
                        @endif
            </div>

</div> 

<div class="form-row form-group">

                <div class="col-md-3">
                <label for="title_image" class="control-label font-weight-bold">@lang('Nom image')</label>
                <input id="title_image" type="text" class="form-control {{ $errors->has('title_image') ? 'is-invalid' : '' }} " name="title_image" value="{{ old('title_image') }}" placeholder="image" autofocus>
                @if ($errors->has('title_image'))
                    <div class="help-block text-danger font-italic"></div>
                @endif
            </div>   

            <div class="col-md-3">
                        <label for="avatar">Choix image:</label>
                        <input type="file" id="" name="" accept="image/png, image/jpeg">
            </div>
</div>        
      <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    @lang('Créer le Post')
                </button>
                <a class="btn btn-primary" href="{{ url()->previous()}}" role="button">@lang('Annuler')</a>
            </div>
        </div>
    </form>
</div>

@include('layouts.partials._footer')
@endsection
