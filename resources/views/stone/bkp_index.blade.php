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



		<div class="col-md-12 col-sm-12">


				<div class="row submenu bg_submenu mb-4" style="margin-top: 50pt;">

					<div class="col-md-12">
						<div class="row align-items-center h-100">

						<div class="col-md-4"></div>
						<div class="col-md-8">
						    <ul class="list-inline" style="margin-bottom: 0px;">
						    	<label class="mr-3 pl-2">POKAŻ: </label>
						    	<li class="list-inline-item  @if($active==0) active @endif"><a href="/kamienie"> Wszystko </a></li>
						    	<li class="list-inline-item  bianko-font @if($active==1) active @endif"><a href="/kamienie/solobianko"> Solo Bianko </a> </li>
						    	<li class="list-inline-item  woc-font @if($active==2) active @endif"><a href="/kamienie/woc"> W O C </a></li>
						    	<li class="list-inline-item  bb-font @if($active==3) active @endif"><a href="/kamienie/bezebrazy"> BeżeBrązy </a></li>
						    </ul>
						</div>

						</div>

					</div>

				</div>

			</div>

			<div class="offset-md-1"></div>

			<div class="col-md-10 col-sm-12">


				@if (count($collections) > 0)
					@foreach ($collections as $collection)

						@if($collection->id != 4)

				    		<div class="row">

								<div class="col-md-12 mt-1 mb-1">
			                        <span class="breadcrumbs"> KAMIENIE / <span class="muted">{{ $collection->title }}</span></span>
								</div>


								@foreach ($collection['stones'] as $stone)

									<div class="col-md-3 col-sm-3 col-6 mb-4">
										<div>
											@if ($stone->thumbnail == null)
												<img src="/storage/stones/main_default.jpg" class="img-fluid w-100" />
											@else
												<img src="{{ $stone->thumbnail_path}}/{{ $stone->thumbnail}}" class="img-fluid w-100" />
											@endif
										</div>
										<div>
				                        	<a href="" class="title text-capitalize small ml-1">{{ $stone->title }}</a> <BR>
				                        </div>
									</div>

								@endforeach

				    		</div>

			    		@endif

					@endforeach					

				@endif



		</div>

	</div>
	

	<!--pozostałe -->
	<div class="row bg_other">

		<div class="offset-md-1"></div>

		<div class="col-md-10 col-sm-12">
			
				@if (count($collections) > 0)
					@foreach ($collections as $collection)

						@if($collection->id==4)

			    		<div class="row">

							<div class="col-md-12 mt-1 mb-1">
		                        <span class="breadcrumbs"> KAMIENIE / <span class="muted">{{ $collection->title }}</span></span>
							</div>


							@foreach ($collection['stones'] as $stone)

								<div class="col-md-3 col-sm-3 col-6 mb-4">
									<div>
										@if ($stone->thumbnail == null)
											<img src="/storage/stones/main_default.jpg" class="img-fluid w-100" />
										@else
											<img src="{{ $stone->thumbnail_path}}/{{ $stone->thumbnail}}" class="img-fluid w-100" />
										@endif
									</div>
									<div>
			                        	<a href="" class="title text-capitalize small ml-1">{{ $stone->title }}</a> <BR>
			                        </div>
								</div>

							@endforeach

			    		</div>

			    		@endif

					@endforeach

				@endif



		</div>
		
	</div>


@stop
