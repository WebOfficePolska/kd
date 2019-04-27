@extends('app.app')


@section('script')

@stop



@section('content')

  <div class="col-md-3">

      @yield('col_1_text')

  </div>


  <div class="col-md-6">

		 <div class="col-md-12">
			<div class="tab-content">
				@yield('content_text')
			</div>
		</div>

	</div>


<!-- PRAWA STRONA -->


    <div class="col-md-3">

		  @yield('col_3_text')

    </div>

@stop
