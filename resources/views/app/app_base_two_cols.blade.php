@extends('app.app')


@section('script')

@stop


@section('content')

<div class="row">

	<div class="col-md-3">
	    @yield('col_1_text')
	</div>


    <div class="col-md-9">

		<div class="row">

			 <div class="col-md-12">
				<div class="tab-content">
					@yield('content_text')
				</div>
			</div>

		</div>
	
	</div>

</div>	

@stop
