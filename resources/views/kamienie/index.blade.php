@extends('app.default.one_col')



@section('default_content_text')



	<div id="kamienie" class="row fullscreen">

		<div class="offset-2"></div>

		<div class="col-8">

		    <div class="row  mt-5 pt-5">
			<div class="col-md-12">
			    <p>KAMIENIE/{{ $category->title }}</p>
			</div>
		    </div>


		    <div class="row">

                        @if (count($products) > 0)
                            @foreach ($products as $product)
				<div class="col-md-3">
				<img src="/images/kamienie/{{ $product->id }}.png" class="img-fluid img-thumbnail float-left" alt="...">
                                <a href="{{ route('kamienie.show', ['id'=>$product->id] ) }}" class="dropdown-item">C: {{ $product->title }}</a> <BR>
				</div>
                            @endforeach
                        @endif

                        @if (count($products) > 0)
                            @foreach ($products as $product)
				<div class="col-md-3">
				<img src="/images/kamienie/{{ $product->id }}.png" class="img-fluid img-thumbnail float-left" alt="...">
                                <a class="dropdown-item">{{ $product->title }}</a> 
				</div>
                            @endforeach
                        @endif


                        @if (count($products) > 0)
                            @foreach ($products as $product)
				<div class="col-md-3">
				<img src="/images/kamienie/{{ $product->id }}.png" class="img-fluid img-thumbnail float-left" alt="...">
                                <a class="dropdown-item">TT: {{ $product->category->title }}</a> 
				</div>
                            @endforeach
                        @endif

                        @if (count($products) > 0)
                            @foreach ($products as $product)
				<div class="col-md-3">
				<img src="/images/kamienie/{{ $product->id }}.png" class="img-fluid img-thumbnail float-left" alt="...">
                                <a class="dropdown-item">{{ $product->title }}</a> 
				</div>
                            @endforeach
                        @endif


                        @if (count($products) > 0)
                            @foreach ($products as $product)
				<div class="col-md-3">
				<img src="/images/kamienie/{{ $product->id }}.png" class="img-fluid img-thumbnail float-left" alt="...">
                                <a class="dropdown-item">{{ $product->title }}</a> 
				</div>
                            @endforeach
                        @endif


                        @if (count($products) > 0)
                            @foreach ($products as $product)
				<div class="col-md-3">
				<img src="/images/kamienie/{{ $product->id }}.png" class="img-fluid img-thumbnail float-left" alt="...">
                                <a class="dropdown-item">{{ $product->title }}</a> 
				</div>
                            @endforeach
                        @endif


		    </div>
		</div>

	</div>
	

@stop
