<form class="form-horizontal monFormulaire" method="POST" action="{{ route('post.update', $post->id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
    

<h5 class="text-left">@lang('Modifications Post')</h5> 
                    <div class="form-row form-group">
                        
                            <div class="form-group col-md-2">
                                    <label for="title" class="control-label font-weight-bold">@lang('Titre')</label>
                                    <input id="title" type="text" class="form-control " name="title" value="{{ (!empty($post->title)) ? $post->title : old('title') }}" placeholder="" autofocus>
                                    @if ($errors->has('title'))
                                        <div class="help-block text-danger font-italic"></div>
                                    @endif
                            </div>                

                            <div class="col-md-2">
                                    <label for="duration" class="control-label font-weight-bold">@lang('Durée')</label>
                                    <input id="duration" type="text" class="form-control " name="duration" value="{{ (!empty($post->duration)) ? $post->duration : old('duration') }}" placeholder="" autofocus>
                                    @if ($errors->has('duration'))
                                        <div class="help-block text-danger font-italic"></div>
                                    @endif
                            </div>


                            <div class="col-md-2">
                                    <label for="price" class="control-label font-weight-bold">@lang('Prix')</label>
                                    <input id="price" type="text" class="form-control " name="price" value="{{ (!empty($post->price)) ? $post->price : old('price') }}" placeholder="" autofocus>
                                    @if ($errors->has('price'))
                                        <div class="help-block text-danger font-italic"></div>
                                    @endif
                            </div> 

                            

                            <div class="col-md-2">
                                    <label for="content" class="control-label font-weight-bold">@lang('Contenu')</label>
                                    <input id="content" type="text" class="form-control " name="content" value="{{ (!empty($post->content)) ? $post->content : old('content') }}" placeholder="" autofocus>
                                    @if ($errors->has('content'))
                                        <div class="help-block text-danger font-italic"></div>
                                    @endif
                            </div> 

                            <div class="col-md-2">
                                    <label for="total_ht" class="control-label font-weight-bold">@lang('Date')</label>
                                    <input id="total_ht" type="text" class="form-control " name="total_ht" value="{{ (!empty($operation->total_ht)) ? $operation->total_ht : old('total_ht') }}" placeholder="" autofocus>
                                    @if ($errors->has('total_ht'))
                                        <div class="help-block text-danger font-italic"></div>
                                    @endif
                            </div> 





                </div>

                

               
                



            <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-danger">
                                @lang("Modifier l'opération")
                            </button>                
                    </div>
            </div>
    </form>