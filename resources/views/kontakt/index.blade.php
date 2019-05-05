@extends('app.default.one_col')


@section('default_content_text')



	<div id="section_kontakt" class="row d-flex flex-column align-items-center mt-5">

    @if (count($errors) > 0)
      <div class="col-md-6 alert alert-danger mt-5">
          <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif


    @if ($message = Session::get('success'))
          <div class="col-md-6 alert alert-success mt-5">
              <p>{{ $message }}</p>
          </div>
    @endif


		<div class="col-md-6 text-center mt-5 mb-1">
			<p class="header-text text-dark">Co możemy dla Ciebie zrobić?</p>
		    
		    <p class="lead1">
		    	Nie znalazłeś tego czego potrzebujesz? Masz pytania odnośnie kamienia? <br>
		    	Napisz do nas a odpowiedź otrzymasz maksymalnie w ciągu 24 godzin.
		    </p>

		</div>


		<div class="col-md-4 mb-4">

			<form  method="POST" action="{{ url('kontakt/wyslij') }}">
			  {{ csrf_field() }}
			  <div class="form-group">
				  
				  <select name="mail_city" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
				    <option selected>Wybierz najbliższy showroom <b>kamien^design</b> ...</option>
				    <option value="1"> Showroom Poznań </option>
				    <option value="2"> Showroom Gdańsk </option>
				    <option value="3"> Showroom Gdynia </option>
				  </select>
			  </div>

			  <div class="form-group">
			    <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Imię" name="mail_name">
			   	@if ($errors->has('mail_name'))
                <span class="text-danger">{{ $errors->first('mail_name') }}</span>
            	@endif
			  </div>

			  <div class="form-group">
			    <input type="email" class="form-control" id="email" placeholder="adres@mailowy" name="mail_address" value="{{ old('mail_address') }}">
	          	@if ($errors->has('mail_address'))
                <span class="text-danger">{{ $errors->first('mail_address') }}</span>
            	@endif
			  </div>
			  <div class="form-group">
			    <input type="text" class="form-control" id="telefon" aria-describedby="telefon" placeholder="Telefon" name="mail_phone">
	          	@if ($errors->has('mail_phone'))
                <span class="text-danger">{{ $errors->first('mail_phone') }}</span>
            	@endif			    
			  </div>
			  <div class="form-group">
			    <input type="text" class="form-control" id="nazwa_firmy" aria-describedby="nazwa_firmy" placeholder="Nazwa firmy" name="mail_busines_name">		    
			  </div>
  			  <div class="form-group">
			    <input type="text" class="form-control" id="temat" aria-describedby="temat" placeholder="Temat" name="mail_title">
			  </div>

  			  <div class="form-group">
			    <textarea class="form-control" id="text" aria-describedby="text" name="mail_text"></textarea>
			  </div>

			  <button type="submit" class="btn btn-dark form-control">Wyślij</button>
			</form>

		</div>

	</div>
	

@stop
