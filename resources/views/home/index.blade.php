@extends('app.default.one_col')



@section('default_content_text')

	<style type="">

#carouselExampleIndicators .carousel .carousel-item {
    width: 100%; /*slider width*/
    max-height: 65vh; /*slider height*/
}
#carouselExampleIndicators .carousel .carousel-item img {
    width: 100%; /*img width*/
}


#carouselExampleIndicators .carousel-caption a:link, .carousel-caption a:visited {
	color: #fff;
}

.idea li {
	list-style-type: none;
}

.li:before {
  content: "\f00c"; /* FontAwesome Unicode */
  font-family: FontAwesome;
  list-style-type: : none;
  display: inline-block;
  margin-left: -1.3em; /* same as padding-left set on li */
  width: 1.3em; /* same as padding-left set on li */
}


/*full width container*/
@media (max-width: 767px) {
    .block {
        margin-left: -20px;
        margin-right: -20px;
    }

	.carousel .carousel-item {
		/*height: 100vh; slider height*/
		/*max-height: 40vh;*/
	    /*width: 200%; slider width*/
	}
	.carousel .carousel-item img {
	    /*height: 100vh; /*img width*/*/
	}


	.carousel-caption a:link, .carousel-caption a:visited {
		color: #fff;
	}
}


#solo a:link, #solo a:visited {
		color: #343a40 !important;
}

#czern a:link, #czern a:visited {
	color: #f8f9fa !important;
		text-decoration: none;

}


#bez a:link, #bez a:visited {
	color: #343a40 !important;
	text-decoration: none;
}


	</style>


<!-- <img src="http://lorempixel.com/1024/750" alt="Slide1" /> -->


	<!-- <div class="row d-none d-md-block d-lg-block d-xl-block"> -->
	<div class="row d-none d-md-block">

		<div class="col-md-12">
		
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

						  </ol>
						  

						  <div class="carousel-inner">					  	
   							
							    <div class="carousel-item active">
								  <a href="/kamienie/35"><img class="d-block w-100" src="/images/slider/slider2.jpg" alt="KATUBA BLUE SODALITE" title="KATUBA BLUE SODALITE"></a>
							      <div class="carousel-caption">
									<h3><u><a href="/kamienie/35">KATUBA BLUE SODALITE</a></u></h3>
							      </div>

							  	</div>
							    <div class="carousel-item">
								  <a href="/kamienie/36"><img class="d-block w-100" src="/images/slider/slider3.jpg" alt="MOONROCK" title="MOONROCK"></a>
							      <div class="carousel-caption">
							      	<h3><u><a href="/kamienie/36">MOONROCK</a></u></h3>
							      </div>

							  	</div>
							    <div class="carousel-item">
								  <a href="/kamienie/3"><img class="d-block w-100" src="/images/slider/slider4.jpg" alt="ATLANTIC STONE" title="ATLANTIC STONE"></a>
							      <div class="carousel-caption">
							      	<h3><u><a href="/kamienie/3">ATLANTIC STONE</a></u></h3>
							      </div>

							  	</div>
								

						  </div>

						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>

						</div>

		</div>

	</div>



	<div class="row d-block d-md-none">


		<div class="col-md-12">
		
						<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>

						  </ol>
						  

						  <div class="carousel-inner">					  	
   							
							    <div class="carousel-item active">
								  <a href="/kamienie/35"><img class="d-block w-100" src="/images/slider/slider2_big.jpg" alt="KATUBA BLUE SODALITE" title="KATUBA BLUE SODALITE"></a>
							      <div class="carousel-caption">
									<h3><u><a href="/kamienie/35">KATUBA BLUE SODALITE</a></u></h3>
							      </div>

							  	</div>
							    <div class="carousel-item">
								  <a href="/kamienie/36"><img class="d-block w-100" src="/images/slider/slider3_big.jpg" alt="MOONROCK" title="MOONROCK"></a>
							      <div class="carousel-caption">
							      	<h3><u><a href="/kamienie/36">MOONROCK</a></u></h3>
							      </div>

							  	</div>
							    <div class="carousel-item">
								  <a href="/kamienie/3"><img class="d-block w-100" src="/images/slider/slider4_big.jpg" alt="ATLANTIC STONE" title="ATLANTIC STONE"></a>
							      <div class="carousel-caption">
							      	<h3><u><a href="/kamienie/3">ATLANTIC STONE</a></u></h3>
							      </div>

							  	</div>
								

						  </div>

<!-- 						  <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a> -->

						</div>

		</div>

	</div>




<!-- 	<div id="section_woc" class="row fullscreen">

	    <div class="col d-flex position-fixed h-100">

	    		<div class="d-flex flex-column justify-content-center align-items-center w-100">
	    			<p class="motto1">W O C</p> 
	    			<p class="motto2">Wszystkie odcienie czerni. Lorem ipsum coś tam dajej.</p>
					<p class="button1">
						<a href="/kamienie/woc" class="text-light"> ZOBACZ KOLEKCJE </a>
					</p>					
	    		</div>

	    </div>
		
	</div>
 -->


	<div id="section2" class="row mt-5 mb-5 idea">
		<div class="offset-md-2"></div>
		<div class="col-md-8">
	
			<div class="row" >
				<div class="col-md-12 text-center align-self-center ">

					<div>
						<p class="header-text header-text-color2">Ideaaaaaaaaa</p>		
					</div>				    

					<div class="d-flex justify-content-center mb-3">
						<div class="underline"></div>
					</div>				    


					<div class="row idea-content1 pt-4 pb-4">

						<div class="col-md-4">
							<div class="row ">
								<div class="col-md-12">
									<img src="/images/icon1.png" >
								</div>
							</div>							
							<div class="row mt-3">
								<div class="col-md-12 col-sm-10 text-left">								
									<ul>
										<li><span class="li">showroomy w Poznaniu, Gdyni i Gdańsku </span></li>
  										<li><span class="li">przykładowe instalacje i aranżacje kamieni</span></li>
  									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="row ">
								<div class="col-md-12 col-sm-12">
									<img src="/images/icon2.png" >
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-md-12 col-sm-10 text-left">								
									<ul>
										<li><span class="li">obsługa projektów od koncepcji do oddania realizacji oraz opieka posprzedażowa</span></li>
  										<li><span class="li">szybka wycena i wsparcie merytoryczne na każdym etapie</span></li>
  									</ul>
  								</div>
							</div>
						</div>


						<div class="col-md-4">
							<div class="row ">
								<div class="col-md-12">
									<img src="/images/icon3.png" >
								</div>
							</div>

							<div class="row mt-3">
								<div class="col-md-12 col-sm-10 text-left">								
									<ul>
										<li><span class="li">ponad 60 kamieni w stałej ofercie</span></li>
  										<li><span class="li">dostępne bezpłatne próbki</span></li>
  									</ul>
  								</div>
							</div>
						</div>


					</div>


				    <div class="idea-content2 justify-content-left mt-3">
					    <p class="text-left">
							Dostarczamy kamień naturalny na potrzeby inwestycji indywidualnych i komercyjnych. Nasz
							zespół składa się ze specjalistów w dziedzinie kamienia naturalnego: selekcji materiałów,
							doradztwa technicznego, obróbki i montażu. W ofercie znajdziesz kilkadziesiąt gatunków
							kamienia, dobranych tak, by zaspokoić Twoje wymagania względem jakości, estetyki oraz
							funkcjonalności. Nasze materiały możesz obejrzeć i porównać z innymi, będącymi w ofercie
							marki partnerskiej <a href="http://deskadesign.pl" target="_blank"> Deska Design</a>, w każdym z naszych showroomów w <a href="/kontakt"> Gdańsku, Gdyni i
							Poznaniu</a>.
					    </p>

				    </div>


<!-- 					<div class="d-flex justify-content-center mb-3">
						<div class="button1 mt-5" style="width: 130pt">
							<a href="/" class="text-dark"> ZAPYTAJ EKSPERTA </a>
						</div>					    
					</div>
 -->				
				</div>
			</div>

		</div>
	</div>



	<div>
		<hr />
	</div>


<!-- 	<div id="section_kolekcje" class="row mt-5 mb-5">

		<div class="col-12">
	
			<div class="row">
				<div class="col-md-12 text-center align-self-center ">
					<div>
						<p class="header-text header-text-color2">Zobacz nasze kolekcje</p>		
					</div>				    

					<div class="d-flex justify-content-center mb-3">
						<div class="underline"></div>
					</div>				    

				    <div>
					    <p class="mute-color">
					    	Tijhsdfgh dfjh dfkhdfkdhsfgsk ddfgh sdfkhkfg sdkfjhsdf kjh sdkjh fsdkjhsd
					    </p>				    	
					    <p class="mute-color">
					    	Tijhsdfgh dfjh dfkhdfkdhsfgsk ddfgh sdfkhkfg sdkfjhsdf kjh sdkjh fsdkjhsd
					    </p>				    	

				    </div>
				</div>
			</div>

		</div>

	</div>
 -->

<div class="row">
	
	<div class="col-md-12">

            <div class="big-font row d-flex align-items-end text-dark" style="">
                    <div id="solo" class="col-md-4 col-sm-12 d-flex justify-content-center align-items-center  p-0 bianko-font"><a href="/kamienie/solobianko"> Solo Bianco </a></div>
                    <div id="czern" class="col-md-4 col-sm-12 d-flex justify-content-center align-items-center p-0 woc-font text-light"><a href="/kamienie/woc"> W O C </a></div>
                    <div id="bez" class="col-md-4 col-sm-12 d-flex justify-content-center align-items-center p-0 bb-font"><a href="/kamienie/bezebrazy"> BeżeBrązy </a></div>
            </div>
		
	</div>

</div>


@stop
