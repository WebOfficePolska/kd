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


</style>


	<div id="kamienie" class="row">


			@include('components.submenu')


			<div class="offset-md-1"></div>

			<div class="col-md-10 col-sm-12">


							@if (count($stones) > 0)

					    		<div class="row">

									<div class="col-md-12 mt-1 mb-1">
				                        
									</div>

									@foreach ($stones as $stone)

										<div class="col-md-3 col-sm-3 col-6 mb-4">
											<div>
												<a href="/kamienie/{{ $stone->id }}/{{ $stone->title}}">
												@if ($stone->thumbnail == null)
													<img src="/storage/stones/main_default.jpg" class="img-fluid w-100" />
												@else
													<img src="{{ $stone->thumbnail_path}}/{{ $stone->thumbnail}}" class="img-fluid w-100" />
												@endif
												</a>

					                        	<a href="/kamienie/{{ $stone->id }}/{{ $stone->title}}" class="title text-capitalize small">{{ $stone->title }}</a> <BR>
					                        </div>
										</div>

									@endforeach					


					    		</div>
				

							@endif


			</div>

	</div>
	

	<!--pozostałe -->


	<div class="row">

		<div class="offset-md-1"></div>

		<div class="col-md-10 col-sm-12">

    		<div class="row">

				<div class="col-md-12 mt-1 mb-1">
                    <span class="breadcrumbs"> POZOSTAŁE: </span>
				</div>

    		</div>

		</div>
			
	</div>



	<div class="row bg_other">

		<div class="offset-md-1"></div>

		<div class="col-md-10 col-sm-12">
			

    		<div class="row">


				@if (count($stones_pozostale) > 0)
					@foreach ($stones_pozostale as $stone)


					<div class="col-md-3 col-sm-3 col-6 mb-4">
						<div>
							<a href="/kamienie/{{ $stone->id }}/{{ $stone->title}}">
							@if ($stone->thumbnail == null)
								<img src="/storage/stones/main_default.jpg" class="img-fluid w-100" />
							@else
								<img src="{{ $stone->thumbnail_path}}/{{ $stone->thumbnail}}" class="img-fluid w-100" />
							@endif
							</a>
						</div>
						<div>
                        	<a href="/kamienie/{{ $stone->id }}/{{ $stone->title}}" class="title text-capitalize small">{{ $stone->title }}</a> <BR>
                        </div>
					</div>

					@endforeach

				@endif



    		</div>



		</div>
			
	</div>



@stop
