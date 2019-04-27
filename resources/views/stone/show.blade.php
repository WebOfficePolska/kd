@extends('app.default.one_col')



@section('default_content_text')


<style type="text/css">

.submenu li {
	background-color: ;
	height: 100%;
	padding: 20pt 0 20pt 0;

}

.active {
	background-color: #fff;
	border: 1px solid #e7e7e7;
}

.submenu li a {

	color: #999;
	padding: 20pt;

}

.breadcrumbs {
	color: #a0a0a0;
	font-family: "Metropolis Bold";
	font-size: 9pt;
	font-weight: bold;	
}

.muted {
	color: #999;
	font-family: "Metropolis Light";

}

.title {
	color: #999;
}


.bg_other {
	background-color:  #f9f9f9;
}

.bianko-font {
    font-family: Bjorn Regular;	
    text-decoration: underline;
}

.woc-font {
	font-family: Blanka;
}

.bb-font {
    font-family: Trajan;	
}


.lh-2 {
	line-height: 1.7rem;
}


.stone-info {
	/*font-family: "Metropolis Light";*/

}


.stone-info-bold {
	/*font-family: "Metropolis Bold";*/
}

</style>

<style type="text/css">

.carousel-indicators {
	bottom: -70pt;
	margin-right: 0;
	margin-left: 0%;
}

.carousel-thumbnails .carousel-indicators img {
    max-width: 100px;
    height: 50px;
    overflow: hidden;
    display: block;
}


.carousel-thumbnails .carousel-indicators li {
    height: auto;
    max-width: 100px;
    width: 100px;
    border: none;
	box-shadow: 1px 3px 5px 0px rgba(0,0,0,0.75);
	
	&.active {
		border-bottom: 4px solid #fff;
	}
}	
</style>



	<div id="kamienie" class="row mb-5">


			@include('components.submenu')


			<div class="offset-md-2"></div>

			<div class="col-md-8 col-sm-12">


	    		<div class="row">

					<div class="col-md-12 mt-1 mb-1">

						<p class="breadcrumbs"><span class="breadcrumbs">KAMIENIE</span> / <span style="font-weight: lighter;">{{ $stone->collections[0]->title }} / {{ $stone->title}}</span></p>


					    <!--Carousel Wrapper-->
					    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
					      <!--Slides-->
					      <div class="carousel-inner" role="listbox">
							  	@foreach($mediaresources as $slider)
							  	    @if ($loop->first)
		    							<div class="carousel-item active">
		      								<img class="d-block w-100" src="{{$slider->filepath}}/{{ $slider->filename}}" alt="{{ $stone->title }}">
		    							</div>
		    						@else 
		        						<div class="carousel-item">
		          							<img class="d-block w-100" src="{{$slider->filepath}}/{{ $slider->filename}}" alt="{{ $stone->title }}">
		        						</div>
		    						@endif
		    					@endforeach
					      </div>
					      <!--/.Slides-->
					      <!--Controls-->
					      <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
					        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					        <span class="sr-only">Previous</span>
					      </a>
					      <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
					        <span class="carousel-control-next-icon" aria-hidden="true"></span>
					        <span class="sr-only">Next</span>
					      </a>
					      <!--/.Controls-->

					      <!--/.Controls-->
					      <ol class="carousel-indicators">
							  	@foreach($mediaresources as $key => $slider)
							  	    @if ($loop->first)
								        <li data-target="#carousel-thumb" data-slide-to="0" class="active"> 
								        	<img class="d-block w-100" src="{{$slider->filepath}}/{{ $slider->filename}}" class="img-fluid">
								        </li>
		    						@else 
								        <li data-target="#carousel-thumb" data-slide-to="{{ $key }}">
								        	<img class="d-block w-100" src="{{$slider->filepath}}/{{ $slider->filename}}" class="img-fluid">
								        </li>
		    						@endif
		    					@endforeach
					      </ol>

					    </div>
					    <!--/.Carousel Wrapper-->

					</div>
					
				</div>				


			</div>

	</div>
	

	<div class="mt-5" style="margin-top: 100pt !important;">
		<hr />
	</div>


	<div class="row mt-5 pb-3">

			<div class="offset-md-2"></div>
			<div class="col-md-8 col-sm-12">

							
					<div class="row">

						<div class="col-md-12  class="mb-2"">


<a href="/kamienie/{{ $stone->id }}/getpdf">pobierz pdf</a>
							<p class="header-text text-capitalize"> {{ $stone->title }}</p>
					    	<div class="underline my-3"></div>	
					    	<h5>{{ $stonetype->title }}</h5>
						</div>


						<div class="col-md-6">							
							<p class="small lh-2">
									<b class="stone-info-bold">Dostępne struktury powierzchni: </b>

					@foreach($finishes as $key1)

					      @foreach($key1->toArray() as $key => $value)

					          	@if ($loop->last)
									<?php $i = '.'; ?>
					          	@else
						          	<?php $i = ','; ?>
					          	@endif


					        	@if($value=="1")

						          	@if($key=="polerowany") <span class="tags"> polerowany<?php echo $i; ?></span> @endif
						          	@if($key=="szlifowany") <span class="tags"> szlifowany<?php echo $i; ?></span> @endif

									@if($key=="satynowany") <span class="tags"> satynowany<?php echo $i; ?></span> @endif
									@if($key=="waterjet") <span class="tags"> waterjet<?php echo $i; ?></span> @endif
									@if($key=="waterjet_piaskowany") <span class="tags"> waterjet-piaskowany<?php echo $i; ?></span> @endif
									@if($key=="antykowany") <span class="tags"> antykowany<?php echo $i; ?></span> @endif
									@if($key=="płomieniowany") <span class="tags"> płomieniowany<?php echo $i; ?></span> @endif
									@if($key=="płomieniowany_szczotkowany") <span class="tags"> płomieniowany-szczotkowany<?php echo $i; ?></span> @endif
									@if($key=="piaskowany_szczotkowany") <span class="tags"> piaskowany-szczotkowany<?php echo $i; ?></span> @endif
									@if($key=="nacinany") <span class="tags"> nacinany<?php echo $i; ?></span> @endif

									@if($key=="corteccia") <span class="tags"> corteccia<?php echo $i; ?></span> @endif
									@if($key=="wenghe") <span class="tags"> wenghe<?php echo $i; ?></span> @endif
									@if($key=="juta") <span class="tags"> juta<?php echo $i; ?></span> @endif
									@if($key=="wood") <span class="tags"> wood<?php echo $i; ?></span> @endif
									@if($key=="canvas") <span class="tags"> canvas<?php echo $i; ?></span> @endif
									@if($key=="tranche") <span class="tags"> tranche<?php echo $i; ?></span> @endif

									@if($key=="jodełka") <span class="tags"> jodełka<?php echo $i; ?></span> @endif

					        	@endif 

					      @endforeach      

					      
					@endforeach

							</p>
						</div>

						

						<div class="col-md-6 small lh-2">
								<p class="pl-4">
									<b class="stone-info-bold">Wykorzystanie:</b> 

										@foreach($options as $key1)

										      @foreach($key1->toArray() as $key => $value)

										          	@if ($loop->last)
														<?php $i = '.'; ?>
										          	@else
											          	<?php $i = ','; ?>
										          	@endif


										        	@if($value=="1")

											          	@if($key=="top") <span class="tags"> blaty kuchenne<?php echo $i; ?></span> @endif
											          	@if($key=="floor") <span class="tags"> podłogi (także z ogrzewaniem)<?php echo $i; ?></span> @endif

											          	@if($key=="wall") <span class="tags"> ściany<?php echo $i; ?></span> @endif
											          	@if($key=="upstairs") <span class="tags"> schody<?php echo $i; ?></span> @endif
											          	@if($key=="bathroom") <span class="tags"> łazienki<?php echo $i; ?></span> @endif
											          	@if($key=="fireplace") <span class="tags"> kominki<?php echo $i; ?></span> @endif
											          	@if($key=="windowsill") <span class="tags"> parapety<?php echo $i; ?></span> @endif
											          	@if($key=="outide") <span class="tags"> do użytku zewnętrznego<?php echo $i; ?></span> @endif
											          	@if($key=="frost") <span class="tags"> 	na mróz<?php echo $i; ?></span> @endif


										        	@endif 

										      @endforeach      
										      
										@endforeach

								</p>		
						</div>
					</div>

			</div>	

	</div>




	<div class="row pt-3 pb-5">

			<div class="offset-md-2"></div>
			<div class="col-md-8 col-sm-12">


					<div class="row">
						<div class="col-md-12  class="mb-2"">
							<p class="header-text text-capitalize">Próbki</p>
					    	<div class="underline my-3"></div>	
						</div>
					</div>


					<div class="row">


						  	@foreach($samples as $sample)
							    <div class="col-4 p-2">
							    	<div>
										<a data-fancybox="gallery" href="{{$sample->filepath}}/{{ $sample->filename}}" data-caption="{{ $sample->title }}">
									    	<img class="img-fluid w-100" src="{{$sample->filepath}}/{{ $sample->filename_thumb}}" alt="" title="{{ $stone->title }}">
										</a>
									</div>
									<div>
				                        <p class="title text-lowercase small pt-1">{{ $sample->title }}</p>
				                    </div>

							  	</div>
							 @endforeach


					</div>
			</div>	

	</div>

	<div>
		<hr />
	</div>


@stop
