@extends('app.default.one_col')



@section('default_content_text')



	<div id="app">

	<div id="section_kontakt" class="row mt-5" >

		<div class="offset-md-2"></div>

		<div class="col-md-8 col-sm-12">

	
		    <div class="row" style="margin-top: 50pt;">
				<div class="col-md-12 col-sm-12">
				    <p class="header-text ">Proces składania ofert</p>
				    <div class="underline my-3"></div>	
				    <p>
						Wypełnij te pola, których jesteś pewien. Im więcej informacji uzyskamy, tym sprawniej przygotujemy wycenę. Jeżeli nie masz wszystkich informacji, to śmiało skontaktuj się z nami drogą e-mailową, w ciągu 24h odpowiemy.				    
					</p>
	
				    <div class="mt-5 mb-5">
					    	

				    	<form action="/zamowienie/wyslij" method="POST" id="form_zamowienie">

							<div class="form-row">

								@csrf

 							  	<div class="form-group col-md-12">		  
								  	<select name="showroom_city" class="form-control my-1 mr-sm-2" id="showroom_city" required="true" filter="email">
								    	<option value="" selected>Wybierz najbliższą filię <b>kamien^design</b> ...</option>
								    	<option value="poznan@kamiendesign.pl"> Poznań </option>
								    	<option value="gdansk@kamiendesign.pl"> Gdańsk </option>
								    	<option value="gdynia@kamiendesign.pl"> Gdynia </option>
								  	</select>
								  	<b-form-invalid-feedback id="customer_mail_err_message"> To pole jest wymagane, proszę wskazać najbliższą filię kamien^design</b-form-invalid-feedback>
							  	</div>


							    <div class="form-group col-md-4">							  
									<input type="text" class="form-control" id="customer_name" name="customer_name" value="" required="true" filter="char" placeholder="Imię, Nazwisko" />
									<b-form-invalid-feedback id="customer_mail_err_message"> To pole jest wymagane, proszę podać imię i nazwisko</b-form-invalid-feedback>					
							    </div>

								<div class="form-group col-md-4">
							      	<div class="input-group">
							        	<div class="input-group-prepend">
							          		<span class="input-group-text" id="inputGroupPrepend">@</span>
							        	</div>
										<input type="mail" class="form-control" id="customer_mail" name="customer_mail" required="true" filter="email" placeholder="E-mail">
										<b-form-invalid-feedback id="customer_mail_err_message"> To pole jest wymagane, proszę podać e-mail</b-form-invalid-feedback>					
									</div>							
							        
							    </div>

							    <div class="form-group col-md-4">							      
										<input type="tel" class="form-control" id="customer_phone" name="customer_phone" required="true" filter="telefon" placeholder="Nr telefonu" />
								        <b-form-invalid-feedback id="customer_phone_err_message">
								          To pole jest wymagane, proszę podać nr telefonu
								        </b-form-invalid-feedback>
							    </div>
							</div>


							<div class="form-row">
							   	<div class="form-group col-md-3">
							    	<label for="stone_name">Nazwa kamienia</label>
							    	<select class="form-control" name="stone_name" id="stone_name">
							    		<option selected> wybierz </option>
							    		@foreach($stones as $stone)
							        	<option value="{{ $stone->id }}"> {{$stone->title}} </option>
							        	@endforeach
							      	</select>
								</div>

							   	<div class="form-group col-md-3">
							    	<label for="stone_name">Struktura powierzchni</label>
							    	<select class="form-control" name="stone_type" id="stone_type">
										<option selected> wybierz </option>
							    		@foreach($stones as $stone)
							        	<option value="{{ $stone->title }}"> {{$stone->title}} </option>
							        	@endforeach
							      	</select>
								</div>



								<div class="form-group col-md-3">
							    	<label for="stone_thickness">Grubość blatu</label>
							    	<select id="" class="form-control" name="stone_thickness">
										<option selected> wybierz </option>
										@for ($i = 2; $i < 4; $i++)
											<option value="{{ $i }}"> {{ $i }} cm </option>
										@endfor			
							      </select>
								</div>

								<div class="form-group col-md-3">
							    	<label for="stone_elements">Sugerowana ilość elementów</label>
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
						  
							<div>
								<p>Standardowa</p>
							</div>

							<div class="form-row">
								@for ($i = 0; $i < 1; $i++)
								<div class="form-group col-md-2">
								    <div class="custom-control custom-radio">      			
						      			<input class="custom-control-input" type="radio" name="stone_edge" value="{{ $i }}" id="stone_edge_radio_{{ $i }}" checked>
						      			<label class="custom-control-label" for="stone_edge_radio_{{ $i }}">
						      				<img src="/images/narozniki/k{{ $i }}.png" class="img-fluid"/>
						      			</label>
								     </div>
								</div>
								@endfor			
							</div>


							<div>
								<p>Niestandardowa</p>
							</div>
	

							<div class="form-row">
								@for ($i = 1; $i < 11; $i++)
								<div class="form-group col-md-2">
								    <div class="custom-control custom-radio">      			
						      			<input class="custom-control-input" type="radio" name="stone_edge" value="{{ $i }}" id="stone_edge_radio_{{ $i }}">
						      			<label class="custom-control-label" for="stone_edge_radio_{{ $i }}">
						      				{{ $i }} <img src="/images/narozniki/k{{ $i }}.png" class="img-fluid"/>
				      					</label>
						      			

								     </div>
								</div>
								@endfor			
							</div>


							<div>
								<p>Pogrubienie</p>
							</div>

							<div class="form-row">
								<div class="col-md-12">
										<p>Rodzaj pogrubianej krawędzi</p>	
								</div>
								
								@for ($i = 1; $i < 5; $i++)
								<div class="form-group col-md-2">
								    <div class="custom-control custom-radio">      			
						      			<input class="custom-control-input" type="radio" name="stone_width_type" value="{{ $i }}" id="stone_width_radio_{{ $i }}">
						      			<label class="custom-control-label" for="stone_width_radio_{{ $i }}">
						      				{{ $i }} <img src="/images/narozniki/p{{ $i }}.png" class="img-fluid"/>
				      					</label>
								     </div>
								</div>
								@endfor
								<div class="col-md-12">
								Docelowa grubość krawędzi: <input type="number" name="stone_width_size"> (cm)
								</div>

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
										<option value="" selected> wybierz </option>	    		
							        	<option value="nakładany"> nakładany </option>
							        	<option value="podwieszany"> podwieszany </option>
							        	<option value="na równi z blatem"> na równi z blatem </option>
							      </select>
								</div>

								<div class="form-group col-md-3">
							    	<label for="sink_chamber_count">Liczba komór zlewozmywaka</label>
							    	<select class="form-control" name="sink_chamber_count">
										<option value="" selected> wybierz </option>	    		
							        	<option value="1 komora"> 1 komora </option>
							        	<option value="2 komory"> 2 komory </option>
							        	<option value="3 komory"> 3 komory </option>
							      </select>
								</div>

								<div class="form-group col-md-3">
							    	<label for="sink_driner_type">Rodzaj ociekacza</label>
							    	<select class="form-control" name="sink_driner_type">
										<option value="" selected> wybierz </option>	    		
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
										<option value="" selected> wybierz </option>	    		
							        	<option value="1 otwór"> 1 otwór </option>
							        	<option value="2 otwory"> 2 otwory </option>
							        	<option value="3 otwory"> 3 otwory </option>
							        	<option value="4 otwory"> więcej </option>
							      </select>
								</div>

								<div class="form-group col-md-3">
							    	<label for="electric_contact_hole">
							    		Kontakty
										<i class="far fa-question-circle" data-toggle="tooltip" data-html="true" title="Proszę podać liczbę otworów przeznaczonych na kontakty, gniazda elektryczne"></i>	    		
							    	</label>
							    	<select class="form-control" name="electric_contact_hole">
										<option value="" selected> wybierz </option>	    		
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
										<option value="" selected> wybierz </option>	    		
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
							    	<label for="socle_height">Wysokość cokołu (cm)</label>
							    	<input type="number" name="socle_height" class="form-control" min="1">
								</div>

								<div class="form-group col-md-3">
							    	<label for="socle_thickness">Grubość cokołu (cm)</label>
							    	<input type="number" name="socle_thickness" class="form-control" min="1">
								</div>


								<div class="form-group col-md-3">
							    	<label for="prepare">Przygotowanie materiału</label>
							    	<select class="form-control" name="prepare">
							        	<option value="" selected> wybierz </option>
							        	<option value="na podstawie naszego pomiaru"> na podstawie naszego pomiaru </option>
							        	<option value="na podstawie przesłanego szablonu"> na podstawie przesłanego szablonu </option>
							        	<option value="na podstawie przesłanego rysunku"> na podstawie przesłanego rysunku </option>
							      	</select>
								</div>

								<div class="form-group col-md-3">
							    	<label for="address">Miejsce montażu</label>
							    	<select class="form-control" name="address">
							    		<option value="" selected> wybierz </option>
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


							<div class="form-row">
								<div class="form-group col-md-12">
							    	<label for="place_invest">Miejsce inwestycji</label>
							    	<textarea class="form-control" id="place_invest" name="place_invest" rows="3" placeholder="Proszę opisać miejsce imwestycji, address"></textarea>
								</div>								
							</div>

							<div class="form-row">
								<div class="form-group col-md-12">
							    	<label for="place_invest">Inne informacje</label>
							    	<textarea class="form-control" id="other_info" name="other_info" rows="3" placeholder="Inne informacje, które mogą być przydatne przy wycenie"></textarea>
								</div>								
							</div>



							<div class="form-row mt-5">
								<div class="form-group col-md-6">
									<label><strong>Dołącz pliki projektu:</strong></label>  
								</div>
							</div>

							<div class="form-row">

								<div class="form-group col-md-12">
									    <label>
									    	Pliki typu .zip, .jpg, .pdf (maksymalnie 20MB)
									    </label>
    									<b-form-file  
    										name="project_file" id="project_file" 
    										v-model="project_file" 
    										placeholder="Wybierz plik ..." drop-placeholder="Drop file here..."
											accept=".jpg, .pdf, .zip">   											
    									</b-form-file>
    									<input type="hidden" name="project_file_after_" :value="project_file">
    									<progress :value="percent" max="100"></progress> @{{percent}}%
    									<br>
    									<b-button class="mt-3 btn-light btn-outline-secondary" @click="uploadFile">Załaduj plik projektu</b-button>
    									<b-button class="mt-3 btn-light btn-outline-secondary" @click="project_file = null; percent=0">Wyczyść pole pliki projektu</b-button>
    									<!-- <input type="file" class="form-control pt-3 pb-5" name="project_file" id="project_file"> -->
								</div>								
	
<!-- 								<div class="form-group col-md-12">
									<b-progress :value="percent" :max="max" show-progress animated></b-progress>
								</div>
 -->							</div>






							<div class="form-row mt-5">
								<div class="col-sm-12">
						  			<button type="submit" class="button1 btn-dark mt-3"> WYŚLIJ FORMULARZ </button>
						  		</div>
							</div>

						</form>

				    </div>


				</div>
		    </div>



		</div>

	</div>
	

	</div>




@stop
