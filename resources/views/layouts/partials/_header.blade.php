	<div class="row">
		      <div class="col-auto mr-auto">
		        <div class="btn btn-group">
		          <a class="btn btn-sm btn-primary" href="{{ route('post.index') }}" role="button">@lang('Home')</a> 
		          <a class="btn btn-sm btn-primary" href="{{ route('categorie.index') }}" role="button">@lang('Catégories')</a>          
		          <a class="btn btn-sm btn-primary" href="{{ route('contact') }}" role="button">@lang('Qui sommes-nous?')</a> 
		          <a class="btn btn-sm btn-primary" href="{{ route('admin.index') }}" role="button">@lang('Admin')</a>
		        </div>
		      </div>
		      
		      <div class="col-auto">
		        <form class="form-inline" method="POST" action="{{ route('post.index.search') }}">
		          {{ csrf_field() }}
		          <div class="form-group mx-sm-3 mb-2">
		            <input id="search" type="text" class="form-control" name="search" value="" placeholder="Recherche" autofocus>
		          </div>
		          <button type="submit" class="btn btn-primary mb-2" title="@lang('Search')" >
		            <i class="fas fa-search"></i>
		          </button> 
		        </form>
		      </div>
	</div>
	<br><br><br><br><br><br>