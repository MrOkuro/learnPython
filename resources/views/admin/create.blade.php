@extends('layouts.default')

@section('content')


<div class="container py-1">
    <form class="form-horizontal" method="POST" action="">
        {{ csrf_field() }}
        <!--<div class="form-group">
            <div class="col-md-3">
                <label for="ref_demande" class="control-label font-weight-bold">@lang('Référence de la demande')</label>
                <input id="ref_demande" type="text" class="form-control {{ $errors->has('ref_demande') ? 'is-invalid' : '' }} " name="ref_demande" value="{{ old('ref_demande') }}" placeholder="Demande DXXXX" autofocus disabled>
                @if ($errors->has('ref_demande'))
                    <div class="help-block text-danger font-italic"></div>
                @endif
            </div>
        </div> -->

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

           	<div class="form-group col-md-3">
			<label for="statut" class="control-label font-weight-bold">@lang('Statut')</label>
			<div class="form-check">
					  <input class="form-check-input" type="radio" name="statut" id="exampleRadios1" value="open" checked>
					  <label class="form-check-label" for="exampleRadios1">
					   Open
					  </label>
			</div>
			<div class="form-check">
					  <input class="form-check-input" type="radio" name="statut" id="exampleRadios2" value="close">
					  <label class="form-check-label" for="exampleRadios2">
					    Close
					  </label>
			</div>
			@if ($errors->has('statut'))
				<div class="help-block text-danger font-italic">{{ $errors->first('statut') }}</div>
			@endif
</div>

           
        


        <div class="col-md-3">
            <label for="etat" class="control-label font-weight-bold">@lang('Catégories')</label>
            <select id="categorie_id" class="form-control {{ $errors->has('categorie_id') ? 'is-invalid' : '' }}" name="categorie_id">
                <option value=""> Liste état </option>
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}" {{ (old('categorie_id') == $categorie->id)? 'selected' : '' }} > {{ $categorie->name}} </option>
                @endforeach 
            </select>        
            @if ($errors->has('categorie_id'))
                <div class="help-block text-danger font-italic"></div>
            @endif
        </div>
</div>
           
            
           
        


       
            

        
        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    @lang('Créer la Demande')
                </button>
                <a class="btn btn-primary" href="{{ url()->previous()}}" role="button">@lang('Annuler')</a>
            </div>
        </div>
    </form>
</div>

@include('layouts.partials._footer')
@endsection