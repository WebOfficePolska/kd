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
								$stone->filename == "slider_5c793a28a7318.jpg" || 
								$stone->filename == "slider_5c793a2738537.jpg" ||
$stone->filename == "slider_5c793a29da6af.jpg" || 
$stone->filename == "slider_5c793a316085a.jpg" || 
$stone->filename == "slider_5c793a3256c53.jpg" || 
$stone->filename == "slider_5c793a335730a.jpg" || 
$stone->filename == "slider_5c793a35023ae.jpg" || 
$stone->filename == "slider_5c793a37459cc.jpg" || 
$stone->filename == "slider_5c793a3830a52.jpg" || 
$stone->filename == "slider_5c793a391eba6.jpg" || 
$stone->filename == "slider_5c793a3a8972d.jpg" || 
$stone->filename == "slider_5c793a3d9ec15.jpg" || 
$stone->filename == "slider_5c793a3f8367b.jpg" || 
$stone->filename == "slider_5c793a424d399.jpg" || 
$stone->filename == "slider_5c793a433789b.jpg" || 
$stone->filename == "slider_5c793a441be08.jpg" || 
$stone->filename == "slider_5c793a4505ed1.jpg" || 
$stone->filename == "slider_5c793a45f05e1.jpg" || 
$stone->filename == "slider_5c793a46d64e7.jpg" || 
$stone->filename == "slider_5c793a47c8713.jpg" || 
$stone->filename == "slider_5c793a48c73d0.jpg" || 
$stone->filename == "slider_5c793a49d7f29.jpg" || 
$stone->filename == "slider_5c793a4b9b7fb.jpg" || 
$stone->filename == "slider_5c793a4c97cfd.jpg" || 
$stone->filename == "slider_5c793a4d948bb.jpg" || 
$stone->filename == "slider_5c793a4ea95a5.jpg" || 
$stone->filename == "slider_5c793a4fadf60.jpg" || 
$stone->filename == "slider_5c793a50a8374.jpg" || 
$stone->filename == "slider_5c793a51a4e4d.jpg" || 
$stone->filename == "slider_5c793a52971f6.jpg" || 
$stone->filename == "slider_5c793a52dc398.jpg" || 
$stone->filename == "slider_5c793a53ded36.jpg" || 
$stone->filename == "slider_5c793a5536608.jpg" || 
$stone->filename == "slider_5c793a56bdb71.jpg" || 
$stone->filename == "slider_5c793a5a8a24b.jpg" || 
$stone->filename == "slider_5c793a5f38b0c.jpg" || 
$stone->filename == "slider_5c793a62ed683.jpg" || 
$stone->filename == "slider_5c793a648e94b.jpg" || 
$stone->filename == "slider_5c793a65b61a4.jpg" || 
$stone->filename == "slider_5c793a66f3a27.jpg" || 
$stone->filename == "slider_5c793a6746d3e.jpg" || 
$stone->filename == "slider_5c793a6ea3cd9.jpg" || 
$stone->filename == "slider_5c793a71825c1.jpg" || 
$stone->filename == "slider_5c793a726a5d4.jpg" || 
$stone->filename == "slider_5c793a7395e4a.jpg" || 
$stone->filename == "slider_5c793a7455702.jpg" || 
$stone->filename == "slider_5c793a757860d.jpg" || 
$stone->filename == "slider_5c793a7672b90.jpg" || 
$stone->filename == "slider_5c793a7771819.jpg" ||

$stone->filename == "slider_5c793a2c5954e.jpg" || 
$stone->filename == "slider_5c793a2f7fc29.jpg" || 
$stone->filename == "slider_5c793a3061a68.jpg" || 
$stone->filename == "slider_5c793a6bc0db2.jpg" 


								)

							@else
									<div class="col-md-3 col-sm-3 col-6 mb-4">
										<div>
											<a href="/kamienie/{{ $stone->stone_id }}/{{ $stone->title }}">
												<img src="{{ $stone->thumbnail_path}}/{{ $stone->filename }}" class="img-fluid w-100" />
											</a>
										</div>
										<div>
				                        	<a href="/kamienie/{{ $stone->stone_id }}/{{ $stone->title }}" class="title text-capitalize small">{{ $stone->title }}</a> <BR>
				                        </div>
									</div>
							@endif


					@endforeach					
				@endif

				    		</div>








		</div>

	</div>
	




@stop
