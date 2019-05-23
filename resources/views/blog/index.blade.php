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


	#slot_1 {
		position: relative;
		/*background-image: url('images/blog/pu5.jpg');*/
	}

	#slot_1 .image {
		width: 100%;
	}

	.overlay {
		position: absolute;
		bottom: 0; 
		background: rgb(0, 0, 0);
		background: rgba(0, 0, 0, 0.5); /* Black see-through */
		color: #f1f1f1; 
		width: 100%;
		transition: .5s ease;
		opacity: 1;
		color: white;
		font-size: 20px;
		padding: 20px;
		text-align: center;		
	}



    </style>





	<div id="" class="row  mt-5">


	    <div class="offset-1"></div>

	    <div class="col-md-10">

	    	<div class="mt-5">

	    		<div class="d-flex flex-row bg-secondary" style="">

	  				<div id="slot_1" class="p-0 m-2 bg-info d-flex align-items-stretch" style="flex: 50%;">
	  					<img src="{{ asset('images/blog/pu5.jpg') }}" class="image">
	  					<div class="overlay">Tytuł artykułu</div>
	  				</div>
	  				
	  				<div class="p-0 m-2 bg-warning" style="flex: 25%">
	  					<div class="bg-primary m-2" style="height: 200pt;">
	  						col 1	
	  					</div>

	  					<div class="bg-primary m-2" style="height: auto;">
	  						col 2ś
	  					</div>

	  				</div>
	  				
	  				<div class="p-0 m-2 bg-info" style="flex: 25%">
	  					<div class="bg-primary m-2" style="height: 300pt">
	  						col 1	
	  					</div>

	  					<div class="bg-primary m-2" style="height: auto;">
	  						col 2ś
	  					</div>
	  					
	  				</div>	    		

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
