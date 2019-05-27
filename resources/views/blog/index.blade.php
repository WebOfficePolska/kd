@extends('app.default.one_col')



@section('default_content_text')

    <style>

    a:link, a:visited {
    	text-decoration: none;
    	color: #646462;
    }


	.box {
	    background: #fff;
	    border-right: 1px solid #d0d0d0;
	    border-top: 1px solid #d0d0d0;
	    padding: 40pt;
  		min-height: 200pt;    	

	}


/*	.box:after {
  		content: "";
  		display: block;
  		padding-bottom: 100%;
  	}
*/


	.box:hover {
	    background: #ebebeb;
	}


	.overlay {
		position: absolute;
		bottom: 0; 
		background: rgb(0, 0, 0);
		background: rgba(0, 0, 0, 0.7); /* Black see-through */
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
		padding: 0px;
		border: 2pt solid white;
		overflow: hidden;
	}

	#slot_1, #slot_2, #slot_3, #slot_4, #slot_5 {
		position: relative;
		overflow: hidden;
	}

	#slot_1 {
		height: 500pt;
		min-height: 500pt;	
	}


	#slot_2, #slot_5 {
		height: 200pt;
	}

	#slot_3, #slot_4 {
		height: 300pt;

	}


	#slot_1 figure {
		width: 100%;
		height: 100%;
		background: url('/images/blog/pu5.jpg');
  		background-position: center;
  		background-size: cover;
	}

	#slot_2 figure {
		background: url('images/blog/i2.jpg');
  		background-position: center;
  		background-size: cover;
	}


	#slot_3 figure {
		background: url('images/blog/s2.jpg');
  		background-position: center;
  		background-size: cover;
	}

	#slot_4 figure {
		background: url('images/blog/i1.jpg');
  		background-position: center;
  		background-size: cover;
	}


	#slot_5 figure {
		background: url('images/blog/i5.jpg');
  		background-position: center;
  		background-size: cover;
	}



	#slot_1 figure:hover, #slot_1:focus,
	#slot_2 figure:hover, #slot_2 img:focus,
	#slot_3 figure:hover, #slot_3 img:focus,
	#slot_4 figure:hover, #slot_4 img:focus,
	#slot_5 figure:hover, #slot_5 img:focus
	{
		transform: scale(1.05);
		transition: all .5s;
	}


	figure {
		width: 100%;
		height: 100%;
	}


    </style>





	<div id="" class="row  mt-5">


<!-- 	    <div class="offset-1"></div> -->

	    <div class="col-md-12">

	    	<div class="row mt-5">

	  				<div id="col1" class="col-md-6">
		  				<div id="slot_1">
		  					<a href="">
		  						<figure></figure>
		  					</a>
		  					<div class="overlay">Tytuł art slot 1</div>
		  				</div>	  					
	  				</div>
	  				
	  				<div id="col2" class="col-md-3">
	  					<div id="slot_2" class="">
	  						<a href="">
		  						<figure></figure>
	  						</a>
		  					<div class="overlay">Tytuł artykułu slot 2</div>	  						
	  					</div>
	  					<div id="slot_3" style="border-top: 4px solid white;">
	  						<a href="">
	  							<figure></figure>
	  						</a>
	  						<div class="overlay">Tytuł artykułu slot 3</div>
	  					</div>
	  				</div>
	  				
	  				<div id="col3" class="col-md-3">

	  					<div id="slot_4" class="">
	  						<a href="">
	  							<figure></figure>
	  						</a>
		  					<div class="overlay">Tytuł artykułu slot 4</div>	  						
	  					</div>

	  					<div id="slot_5" class=""  style="border-top: 4px solid white;" >
	  						<a href="">
		  						<figure></figure>
	  						</a>
		  					<div class="overlay">Tytuł artykułu slot 5</div>
	  					</div>
	  				</div>	    		

	    	</div>


		    <div id="post" class="row mt-5" style="border-left: 1px solid #d0d0d0;" >		    		
	

				<blog-post 
					v-for="post in posts" 
					v-bind="post"
					v-bind:key="post.id">
				</blog-post>

<!-- 
				<div class="col-md-4 box" v-for="post in posts">
					<div class="">
						<a :href="'/blog/art/' + post.id">
					    	<img :src="post._embedded['wp:featuredmedia'][0].source_url" alt="" class="img-fluid pt-3 pb-3 w-100">
						</a>

						<a href="/blog/art">
					    	<h4> @{{post.title.rendered}} @{{post.id}}</h4>
					    	<div class="entry-content" v-html="post.content.rendered"></div>
						</a>
					</div>
				</div> 
-->




			</div>

	    </div>


	</div>
	

@stop
