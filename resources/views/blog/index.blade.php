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
		padding: 30px;
		text-align: center;		
	}


	#col1, #col2, #col3 {
		padding: 8px;
	}

	#slot_1, #slot_2, #slot_3, #slot_4, #slot_5 {
		position: relative;
	}

	#slot_1 {
		height: 100%;
		min-height: 500pt;
		overflow: hidden;
	}


	#slot_2, #slot_5 {
		height: 300pt;
	}

	#slot_3, #slot_4 {
		height: 200pt;

	}


	#slot_1 {
		background: url('images/blog/pu5.jpg');
  		background-position: center;
  		background-size: cover;
	}

	#slot_2 {
		background: url('images/blog/s2.jpg');
  		background-repeat: no-repeat;
  		background-position: 50% 15%;		
	}


	#slot_3 {
		background: url('images/blog/s1.jpg');
  		background-repeat: no-repeat;
  		background-position: 50% 15%;		
	}

	#slot_4 {
		background: url('images/blog/s3.jpg');
  		background-repeat: no-repeat;
  		background-position: 50% 15%;		
	}


	#slot_5 {
		background: url('images/blog/s4.jpg');
  		background-repeat: no-repeat;
  		background-position: 50% 15%;		
	}



	#slot_1:hover, #slot_1:focus,
	#slot_2:hover, #slot_2:focus,
	#slot_3:hover, #slot_3:focus,
	#slot_4:hover, #slot_4:focus,
	#slot_5:hover, #slot_5:focus
	{
		transform: scale(1.000);
		transition: all .5s;
	}



    </style>





	<div id="" class="row  mt-5">


	    <div class="offset-1"></div>

	    <div class="col-md-10">

	    	<div class="row mt-5">

	  				<div id="col1" class="col-md-6">
		  				<div id="slot_1">
		<!--   					<img src="{{ asset('images/blog/pu5.jpg') }}" class="image img-fluid"> -->
		  					<div class="overlay">Tytuł art slot 1</div>
		  				</div>	  					
	  				</div>
	  				
	  				<div id="col2" class="col-md-3">

	  					<div id="slot_2" class="">
	  						<!-- <img src="{{ asset('images/blog/s1.jpg') }}" class="image img-fluid"> -->
		  					<div class="overlay">Tytuł artykułu slot 2</div>	  						
	  					</div>

	  					<div id="slot_3" class="mt-3">
	  						<!-- <img src="{{ asset('images/blog/s2.jpg') }}" class="image img-fluid"> -->
	  						<div class="overlay">Tytuł artykułu slot 3</div>
	  					</div>

	  				</div>
	  				
	  				<div id="col3" class="col-md-3">

	  					<div id="slot_4" class="">
	  						<!-- <img src="{{ asset('images/blog/s3.jpg') }}" class="image img-fluid"> -->
		  					<div class="overlay">Tytuł artykułu slot 4</div>	  						
	  					</div>

	  					<div id="slot_5" class="mt-3" >
	  						<!-- <img src="{{ asset('images/blog/s4.jpg') }}" class="image img-fluid"> -->
		  					<div class="overlay">Tytuł artykułu slot 5</div>
	  					</div>
	  					
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
