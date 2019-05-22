@extends('app.default.one_col')



@section('default_content_text')

    <style>
	.box {
	    background: #f0f0f0;
	    border: 1px solid #c9c9c9;

	}

	.box:hover {
	    background: #fff;
	}


    </style>





	<div id="" class="row  mt-5">


	    <div class="offset-1"></div>

	    <div class="col-md-10">

	    	<div class="mt-5">

	    		<div class="d-flex flex-row  p-3 bg-secondary">

	  				<div class="col-md-6 p-2 bg-info">Flex item 1</div>
	  				<div class="col-md-3 p-2 bg-warning">Flex item 2</div>
	  				<div class="col-md-3 p-2 bg-primary">Flex item 3</div>	    		

				</div>


	    		<div class="d-flex flex-row p-3 bg-primary">

	  				<div class="p-2 bg-info">Flex item 1</div>
	  				<div class="p-2 bg-warning">Flex item 2</div>
	  				<div class="p-2 bg-primary">Flex item 3</div>	    		

				</div>



	    	</div>


		    <div class="row">
		    		
	
				<div class="col-md-4 box">
				    <img src="http://kd.wop.pl/storage/stones/arabescato_cardellino/main.jpg" class="img-fluid pt-3 pb-3" />
				    <h4>Komienie w praktyce</h4>
				    <p>
					To jest kawalindek opisu.
				    </p>
				</div>


				<div class="col-md-4 box">
				    <img src="http://kd.wop.pl/storage/stones/arabescato_cardellino/main.jpg" class="img-fluid pt-3 pb-3" />
				    <h4>Komienie w praktyce</h4>
				    <p>
					To jest kawalindek opisu.
				    </p>
				</div>


				<div class="col-md-4 box">
				    <img src="http://kd.wop.pl/storage/stones/arabescato_cardellino/main.jpg" class="img-fluid pt-3 pb-3" />
				    <h4>Komienie w praktyce</h4>
				    <p>
					To jest kawalindek opisu.
				    </p>
				</div>

			</div>

	    </div>


	</div>
	

@stop
