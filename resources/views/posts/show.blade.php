@extends('layouts.default')





@section('content')
<div class="container">       


		   
@include('layouts.partials._header')
 <h1 class="text-left">@lang('Détail du post')</h1> <br>



<aside>
  <h4>Autres articles</h4>
  <ul>
    <li><a href="#">Lien 1</a></li>
    <li><a href="#">Lien 2</a></li>
    <li><a href="#">Lien 3</a></li>
  </ul>
</aside>

	<!-- <div class="form-row form-group">
                        

                            <div class="form-group col-md-2">
                                   <img src="{{url('images', 'image1.jpg') }}", class="rounded float-left"> images
                            </div>                

                            <div class="form-group col-md-2">
                            	<h1 class="text-left">@lang('Formation 1')</h1> <br>
                                   text
                                   Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                            </div>                           
	</div> -->




<div class="form-row form-group">






		<div class="card bg-dark text-white text-center ">
			   <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mAGyQ5Rmz7o" style="width:600px;height:400px"; allowfullscreen></iframe>
			  <div class="card-img-overlay">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			    <p class="card-text">Last updated 3 mins ago</p>
			    <a class="btn btn-sm btn-success" href="" role="button">@lang('Revenir à la page précédente') </a>
			  </div>
		</div>

<br><br><br>




</div>



		   
</div>
@include('layouts.partials._footer')
@endsection
