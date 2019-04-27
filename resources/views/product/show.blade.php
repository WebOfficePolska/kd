@extends('app.default.one_col')



@section('default_content_text')


	<div class="row">
	    <div class="offset-2"></div>
	    <div class="col-8 mt-5 pt-5">


		<div class="row">
		    <div class="col-md- 12">
			<img src="/images/cup.png" class="img-fluid">
		    </div>
		</div>

            </div>
	</div>



	<div class="row bg_color1">
	    <div class="offset-2"></div>
	    <div class="col-8 mt-5 pt-5">


		<div class="row bg_color1  pt-5 pb-5">

		    <div class="col-md-12">
			<h3> {{ $product->title}} </h3>
		    </div>

		    <div class="col-6">
			<p>
			    Opis kamienia, opis kamienia, opis kamienia. 
			    Opis kamienia, opis kamienia, opis kamienia
			    Opis kamienia, opis kamienia, opis kamienia
			    Opis kamienia, opis kamienia, opis kamienia
			    Opis kamienia, opis kamienia, opis kamienia. 
			    Opis kamienia, opis kamienia, opis kamienia
			    Opis kamienia, opis kamienia, opis kamienia
			    Opis kamienia, opis kamienia, opis kamienia
			</p>
		    </div>

		    <div class="col-6">
			<p>
			    Opis kamienia, opis kamienia, opis kamienia. 
			    Opis kamienia, opis kamienia, opis kamienia
			    Opis kamienia, opis kamienia, opis kamienia
			    Opis kamienia, opis kamienia, opis kamienia
			    Opis kamienia, opis kamienia, opis kamienia. 
			    Opis kamienia, opis kamienia, opis kamienia
			    Opis kamienia, opis kamienia, opis kamienia
			    Opis kamienia, opis kamienia, opis kamienia
			</p>
		    </div>

		</div>


		<div class="row bg_color1 pt-5 pb-5">
		    <div class="col-12">
			<h4> Wykonczenia </h4>
		    </div>

		    <div class="col-4">
			<img src="/images/czern.png" class="img-fluid">
		    </div>

		    <div class="col-4">
			<img src="/images/czern.png" class="img-fluid">
		    </div>

		    <div class="col-4">
			<img src="/images/czern.png" class="img-fluid">
		    </div>

		</div>



            </div>
	</div>

	

@stop
