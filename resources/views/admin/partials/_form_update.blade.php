<form class="form-horizontal" method="POST" action="{{ route('post.update', $post->id) }}">
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
                                    <label for="link_video" class="control-label font-weight-bold">@lang('Lien vidéo')</label>
                                    <input id="link_video" type="text" class="form-control " name="link_video" value="{{ (!empty($post->link_video)) ? $post->link_video : old('link_video') }}" placeholder="" autofocus>
                                    @if ($errors->has('link_video'))
                                        <div class="help-block text-danger font-italic"></div>
                                    @endif
                            </div>







                </div>

                

               
                



            <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-danger">
                                @lang("Modifier le post")
                            </button>                
                    </div>
            </div>
    </form>