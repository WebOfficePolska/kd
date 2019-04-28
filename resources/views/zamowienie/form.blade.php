@extends('app.default.one_col')



@section('default_content_text')



	<div id="section_oferta" class="row mt-5" >

		<div class="offset-md-2"></div>

		<div class="col-md-8 col-sm-12 d-flex align-items-center">

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




		    <div class="row" style="margin-top: 50pt;">
				<div class="col-md-12 col-sm-12">
				    <p class="header-text ">Proces składania ofert</p>
				    <div class="underline my-3"></div>	
				    <p>
						Wypełnij te pola, których jesteś pewien. Im więcej informacji uzyskamy, tym sprawniej przygotujemy wycenę. Jeżeli nie masz wszystkich informacji, to śmiało skontaktuj się z nami drogą emailową, w ciągu 24h odpowiemy.				    
					</p>
	
				    <div class="mt-5 mb-5">
					    	

						<form method="POST" action="{{ url('zamowienie/wyslij') }}">

							<div class="form-row">

							  	{{ csrf_field() }}
							  	<div class="form-group col-md-12">		  
									<label for="showroom_city">Lokalizacja</label>	  		
								  	<select name="showroom_city" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
								    	<option selected>Wybierz najbliższy showroom <b>kamien^design</b> ...</option>
								    	<option value="1"> Showroom Poznań </option>
								    	<option value="2"> Showroom Gdańsk </option>
								    	<option value="3"> Showroom Gdynia </option>
								  	</select>
							  	</div>


							    <div class="form-group col-md-6">
							      <label for="customer_name">Imię, Nazwisko</label>
							      <input type="text" class="form-control" id="" name="customer_name" placeholder="Imię, Nazwisko">
							    </div>

								<div class="col-md-6">
							      <label for="customer_mail">Email</label>
							      	<div class="input-group">
							        	<div class="input-group-prepend">
							          		<span class="input-group-text" id="inputGroupPrepend">@</span>
							        	</div>
							        	<input type="text" class="form-control" id="validationCustomUsername" name="customer_mail" placeholder="Email" aria-describedby="inputGroupPrepend">
									</div>
							    </div>

							</div>


							<div class="form-row">
							   	<div class="form-group col-md-6">
							    	<label for="stone_name">Nazwa kamienia</label>
							    	<select class="form-control" name="stone_name">
										<option selected> wybierz </option>
							    		@foreach($stones as $stone)
							        	<option value="{{ $stone->id }}"> {{$stone->title}} </option>
							        	@endforeach
							      	</select>
								</div>

								<div class="form-group col-md-3">
							    	<label for="stone_thickness">Grubość blatu</label>
							    	<select id="" class="form-control" name="stone_thickness">
										<option selected> wybierz </option>
										@for ($i = 1; $i < 11; $i++)
											<option value="{{ $i }}"> {{ $i }} cm </option>
										@endfor			
							      </select>
								</div>

								<div class="form-group col-md-3">
							    	<label for="stone_elements">Ilość elementów</label>
							    	<select id="" class="form-control" name="stone_elements">
										<option selected> wybierz </option>    		
										@for ($i = 1; $i < 11; $i++)
											<option value="{{ $i }}"> {{ $i }} </option>
										@endfor			
							      </select>
								</div>
							</div>


							<div class="form-row mt-5">
								<div class="form-group col-md-6">
									<label><strong>Obróbka krawędzi blatu:</strong></label>  
								</div>
							</div>
						  

							<div class="form-row">
								@for ($i = 0; $i < 11; $i++)
								<div class="form-group col-md-2">
								    <div class="custom-control custom-radio">      			
						      			<input class="custom-control-input" type="radio" name="stone_edge" value="{{ $i }}" id="stone_edge_radio_{{ $i }}">
						      			<label class="custom-control-label" for="stone_edge_radio_{{ $i }}">
						      				<img src="/images/narozniki/k{{ $i }}.png" class="img-fluid"/>
						      			</label>
								     </div>
								</div>
								@endfor			
							</div>


						  	<div class="form-row mt-5">
								<div class="form-group col-md-6">
									<label><strong>Obróbka otworów:</strong></label>  
								</div>
						  	</div>

							<div class="form-row">

								<div class="form-group col-md-3">
							    	<label for="plate_type">Rodzaj płyty grzewczej</label>
							    	<select class="form-control" name="plate_type">
										<option selected> wybierz </option>	    		
							        	<option value="nakładany"> nakładany </option>
							        	<option value="na równi z blatem"> na równi z blatem </option>
							      </select>
								</div>

								<div class="form-group col-md-3">
							    	<label for="sink_type">Rodzaj zlewozmywaka</label>
							    	<select class="form-control" name="sink_type">
										<option selected> wybierz </option>	    		
							        	<option value="nakładany"> nakładany </option>
							        	<option value="podwieszany"> podwieszany </option>
							        	<option value="na równi z blatem"> na równi z blatem </option>
							      </select>
								</div>

								<div class="form-group col-md-3">
							    	<label for="sink_chamber_count">Liczba komór zlewozmywaka</label>
							    	<select class="form-control" name="sink_chamber_count">
										<option selected> wybierz </option>	    		
							        	<option value="1 komora"> 1 komora </option>
							        	<option value="2 komory"> 2 komory </option>
							        	<option value="3 komory"> 3 komory </option>
							      </select>
								</div>

								<div class="form-group col-md-3">
							    	<label for="sink_driner_type">Rodzaj ociekacza</label>
							    	<select class="form-control" name="sink_driner_type">
										<option selected> wybierz </option>	    		
							        	<option value="w zlewozmywaku"> w zlewozmywaku </option>
							        	<option value="w blacie (kamieniu / frezowane rowki)"> w blacie (kamieniu / frezowane rowki) </option>
							      </select>
								</div>


								<div class="form-group col-md-3">
							    	<label for="sink_tap_count">
							    		Baterie, dozowniki
										<i class="far fa-question-circle" data-toggle="tooltip" data-html="true" title="Proszę podać liczbę otworów, które będą wykorzystane do montażu baterii, dozowników"></i>	    			    		
							    	</label>
							    	<select class="form-control" name="sink_tap_count">
										<option selected> wybierz </option>	    		
							        	<option value="1 otwór"> 1 otwór </option>
							        	<option value="2 otwory"> 2 otwory </option>
							        	<option value="3 otwory"> 3 otwory </option>
							      </select>
								</div>

								<div class="form-group col-md-3">
							    	<label for="electric_contact_hole">
							    		Kontakty
										<i class="far fa-question-circle" data-toggle="tooltip" data-html="true" title="Proszę podać liczbę otworów przeznaczonych na kontakty, gniazda elektryczne"></i>	    		
							    	</label>
							    	<select class="form-control" name="electric_contact_hole">
										<option selected> wybierz </option>	    		
							        	<option value="1 otwór"> 1 otwór </option>
							        	<option value="2 otwory"> 2 otwory  </option>
							        	<option value="3 otwory"> 3 otwory </option>
							        	<option value="4 otwory"> 3 otwory </option>
							        	<option value="5 otworów"> 5 otworów </option>
							        	<option value="6 otworów"> 6 otworów </option>
							      </select>
								</div>


								<div class="form-group col-md-3">
							    	<label for="other_hole">
							    		Pozostałe otwory 
							    		<i class="far fa-question-circle" data-toggle="tooltip" data-html="true" title="Proszę podać liczbę pozostałych otworów np. pod okap wysuwany z blatu"></i>
							    	</label>
							    	<select class="form-control" name="other_hole">
										<option selected> wybierz </option>	    		
							        	<option value="1 otwór"> 1 otwór </option>
							        	<option value="2 otwory"> 2 otwory  </option>
							        	<option value="3 otwory"> 3 otwory </option>
							        	<option value="4 otwory"> 3 otwory </option>
							        	<option value="5 otworów"> 5 otworów </option>
							        	<option value="6 otworów"> 6 otworów </option>
							      </select>
								</div>

						  	</div>



							<div class="form-row mt-5">
								<div class="form-group col-md-6">
									<label><strong>Elementy ścienne, przygotowanie i montaż:</strong></label>  
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-3">
							    	<label for="socle_height">Wysokość cokołu</label>
							    	<select class="form-control">
										<option selected> wybierz </option>
							        	<option value="10 cm"> 10 cm </option>
							        	<option value="15 cm"> 15 cm</option>
							        	<option value="20 cm"> 20 cm </option>
							        	<option value="25 cm"> 25 cm </option>
							        	<option value="30 cm"> 30 cm </option>
							        	<option value="35 cm"> 35 cm </option>
							      	</select>
								</div>

								<div class="form-group col-md-3">
							    	<label for="socle_thickness">Grubość cokołu</label>
							    	<select class="form-control" name="socle_thickness">
										<option selected> wybierz </option>
							        	<option value="1 cm"> 1 cm </option>
							        	<option value="2 cm"> 2 cm </option>
							        	<option value="3 cm"> 3 cm </option>
							      	</select>
								</div>

								<div class="form-group col-md-3">
							    	<label for="prepare">Przygotowanie materiału</label>
							    	<select class="form-control" name="prepare">
							        	<option selected> wybierz </option>
							        	<option value="na podstawie naszego pomiaru"> na podstawie naszego pomiaru </option>
							        	<option value="na podstawie przesłanego szablonu"> na podstawie przesłanego szablonu </option>
							        	<option value="na podstawie przesłanego rysunku"> na podstawie przesłanego rysunku </option>
							      	</select>
								</div>

								<div class="form-group col-md-3">
							    	<label for="address">Adres montażu</label>
							    	<select class="form-control" name="address">
							    		<option selected> wybierz </option>
							        	<option value="dom jednorodzinny"> dom jednorodzinny </option>
							        	<option value="blok, parter"> blok, parter </option>
							        	<option value="blok, 1 piętro"> blok, 1 piętro </option>
							        	<option value="blok, 2 piętro"> blok, 2 piętro </option>
							        	<option value="blok, 3 piętro"> blok, 3 piętro </option>
							        	<option value="blok, 4 piętro"> blok, 4 piętro </option>
							        	<option value="blok, 5 piętro"> blok, 5 piętro </option>
							        	<option value="blok, 6 piętro"> blok, 6 piętro </option>
							        	<option value="blok, 7 piętro"> blok, 7 piętro </option>
							        	<option value="blok, 8 piętro"> blok, 8 piętro </option>
							        	<option value="blok, 9 piętro"> blok, 9 piętro </option>
							        	<option value="blok, 10 piętro"> blok, 10 piętro </option>
							        	<option value="blok, 11 piętro"> blok, 11 piętro </option>
							        	<option value="blok, 12 piętro"> blok, 12 piętro </option>
							        	<option value="blok, 13 piętro"> blok, 13 piętro </option>
							        	<option value="blok, 14 piętro"> blok, 14 piętro </option>
							        	<option value="blok, 15 piętro"> blok, 15 piętro </option>
							      </select>
								</div>
							</div>



							<div class="form-row mt-5">
								<div class="col-sm-12">
						  			<button type="submit" class="button1 mt-3"> WYŚLIJ FORMULARZ </button>
						  		</div>
							</div>


						</form>



				    </div>


				</div>
		    </div>



		</div>

	</div>
	



@stop
