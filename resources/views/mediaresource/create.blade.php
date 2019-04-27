@extends('app.default.one_col')



@section('default_content_text')


	<div class="row fullscreen">
	    <div class="offset-2"></div>
	    <div class="col-10 d-flex align-items-center">
		<div class="row">
		    <div class="col-6">


			<form action="{{ url('/mediaresource/store') }}" method="post" enctype="multipart/form-data">

				<div class="form-group">

					<select>

				    @if ($stones->count())

				        @foreach($stones as $stone)
				        
				            <option value="{{ $stone->id }}" {{ $selectedStone == $stone->id ? 'selected="selected"' : '' }}>{{ $stone->title }}</option>    

				    	@endforeach

				    @endif	

				    </select>				
				
				</div>


			    <div class="form-group">
			        <label for="exampleInputFile">File input</label>
			        <input type="file" name="profile_image[]" id="exampleInputFile" multiple />
			    </div>
			    {{ csrf_field() }}
			    <button type="submit" class="btn btn-default">Submit</button>
			</form>		    	



		    </div>
            </div>
	</div>
	

@stop
