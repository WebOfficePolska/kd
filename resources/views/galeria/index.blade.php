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


	<div id="kamienie" class="row mt-5 pt-5 ">



			<div class="offset-md-1"></div>

			<div class="col-md-10 col-sm-12">




				    		<div class="row">
<!-- 
								<div class="col-md-12 mt-1 mb-1">
			                        <span class="breadcrumbs"> KAMIENIE / <span class="muted"></span></span>
								</div>
 -->

				@if (count($stones) > 0)
					@foreach ($stones as $stone)

							@if ($stone->filename == "slider_5c7933c8708aa.jpg" || 
								$stone->filename == "slider_5c7933c9e26b1.jpg" || 
								$stone->filename == "slider_5c7933d1e8f6d.jpg" ||
								$stone->filename == "slider_5c7933d2e0da1.jpg" ||
								$stone->filename == "slider_5c7933cb284b9.jpg" ||
$stone->filename == "slider_5c7933cdaee0c.jpg" || 
$stone->filename == "slider_5c7933d0c5505.jpg" || 
$stone->filename == "slider_5c7933d3d33bb.jpg" || 
$stone->filename == "slider_5c7933d4d36a5.jpg" || 
$stone->filename == "slider_5c7933d8ad41e.jpg" || 
$stone->filename == "slider_5c7933d9a1b11.jpg" || 
$stone->filename == "slider_5c7933da8dd3f.jpg" || 
$stone->filename == "slider_5c7933dc17852.jpg" || 
$stone->filename == "slider_5c7933df68790.jpg" || 
$stone->filename == "slider_5c7933e3e8e1d.jpg" || 
$stone->filename == "slider_5c7933e4ebd45.jpg" || 
$stone->filename == "slider_5c7933e5ec787.jpg" || 
$stone->filename == "slider_5c7933e710a41.jpg" ||

$stone->filename == "slider_5c7933d67aff3.jpg" || 
$stone->filename == "slider_5c7933e14a58f.jpg" || 
$stone->filename == "slider_5c7933e81033e.jpg" || 
$stone->filename == "slider_5c7933e90b02a.jpg" || 
$stone->filename == "slider_5c7933ea1b44b.jpg" || 
$stone->filename == "slider_5c7933eb109ea.jpg" || 
$stone->filename == "slider_5c7933ecd7322.jpg" || 
$stone->filename == "slider_5c7933eddcf75.jpg" || 
$stone->filename == "slider_5c7933eee23ed.jpg" || 
$stone->filename == "slider_5c7933efc7eed.jpg" || 
$stone->filename == "slider_5c7933f0d17b7.jpg" || 
$stone->filename == "slider_5c7933f1d8609.jpg" || 
$stone->filename == "slider_5c7933f2cf56a.jpg" || 
$stone->filename == "slider_5c7933f3ca477.jpg" || 
$stone->filename == "slider_5c7933f420504.jpg" || 
$stone->filename == "slider_5c7933f524c22.jpg" || 
$stone->filename == "slider_5c7933f66ab2b.jpg" || 
$stone->filename == "slider_5c7933f813ba5.jpg" || 
$stone->filename == "slider_5c7933fb9a391.jpg" || 
$stone->filename == "slider_5c79340075458.jpg" || 
$stone->filename == "slider_5c7934044b57d.jpg" || 
$stone->filename == "slider_5c793405ec845.jpg" || 
$stone->filename == "slider_5c793407309ea.jpg" || 
$stone->filename == "slider_5c79340887e47.jpg" || 
$stone->filename == "slider_5c793408d35b3.jpg" || 
$stone->filename == "slider_5c79340d39b49.jpg" ||

$stone->filename == "slider_5c7934101765b.jpg" ||
$stone->filename == "slider_5c793412d943e.jpg" ||
$stone->filename == "slider_5c793413cb836.jpg" ||
$stone->filename == "slider_5c7934159e04b.jpg" ||
$stone->filename == "slider_5c7934164e48a.jpg" ||
$stone->filename == "slider_5c79341775c4c.jpg" ||
$stone->filename == "slider_5c7934187e901.jpg" ||
$stone->filename == "slider_5c79341986ab5.jpg" 


								)

							@else
									<div class="col-md-3 col-sm-3 col-6 mb-4">
										<div>
											<a href="">
												<img src="{{ $stone->thumbnail_path}}/{{ $stone->filename }}" class="img-fluid w-100" />
											</a>
										</div>
										<div>
				                        	<a href="" class="title text-capitalize small">{{ $stone->title }}</a> <BR>
				                        </div>
									</div>
							@endif


					@endforeach					
				@endif

				    		</div>








		</div>

	</div>
	




@stop
