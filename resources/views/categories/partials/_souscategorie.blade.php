kn fjdn oqefnbngrjbngrjn

	@foreach($categories as $categorie)
		  <div class="card cardstyle">
				    <img class="card-img-top" src="{{url('images', 'image2.jpg') }}" style="width:300px;height:300px"; alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">{{ $categorie->name }}</h5>
				      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				    </div>
				    <div class="card-footer">
				      <small class="text-muted">Last updated 3 mins ago</small>
					     <button type="button" class="btn btn-primary"  onclick="affiche_souscategorie({{"'".route('categorie.souscategorie',$categorie->id)."'"}});"> @lang('Afficher liste des cours de cette catégorie')
	                    </button>
				    </div>
		  </div>
@endforeach	