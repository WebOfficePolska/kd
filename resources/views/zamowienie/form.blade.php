@extends('app.default.one_col')



@section('default_content_text')



	<div id="section_oferta" class="row mt-5" >

		<div class="offset-md-2"></div>

		<div class="col-md-8 col-sm-12 d-flex align-items-center">

		    <div class="row" style="margin-top: 50pt;">
				<div class="col-md-12 col-sm-12">
				    <p class="header-text ">Proces składania ofert</p>
				    <div class="underline my-3"></div>	
				    <p>
						Wypełnij te pola, których jesteś pewien. Im więcej informacji uzyskamy, tym sprawniej przygotujemy wycenę. Jeżeli nie masz wszystkich informacji, to śmiało skontaktuj się z nami drogą emailową, w ciągu 24h odpowiemy.				    
					</p>
	
				    <div class="mt-5 mb-5">
					    	

<form>

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
    	<select id="" class="form-control" name="stone_name">
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




	     
		  <div class="form-group col-md-2">
		    <div class="form-check">
		       <input class="form-check-input" type="radio" name="stone_edge" id="stone_edge_radio_0" value="0" checked>
		       <label class="form-check-label" for="stone_edge_radio_0">
		           <img src="/images/narozniki/k0.png" class="img-fluid" />
		        </label>
		     </div>
		  </div>

		  <div class="form-group col-md-2">
		    <div class="custom-control custom-radio">      			
      			<input class="custom-control-input" type="radio" name="stone_edge" value="1" id="stone_edge_radio_1">
      			<label class="custom-control-label" for="stone_edge_radio_1">
      				<img src="/images/narozniki/k1.png" class="img-fluid"/>
      			</label>
		     </div>
		  </div>

		  <div class="form-group col-md-2">
		    <div class="form-check">
		       <input class="form-check-input" type="radio" name="stone_edge" value="2" id="stone_edge_radio_2">
		       <label class="form-check-label" for="stone_edge_radio_2">
		           <img src="/images/narozniki/k2.png" class="img-fluid"/>
		        </label>
		     </div>
		  </div>
		  

		  <div class="form-group col-md-2">
		    <div class="form-check">
		       <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
		       <label class="form-check-label" for="gridRadios1">
		           <img src="/images/narozniki/k3.png" class="img-fluid"/>
		        </label>
		     </div>
		  </div>
		  <div class="form-group col-md-2">
		    <div class="form-check">
		       <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
		       <label class="form-check-label" for="gridRadios1">
		           <img src="/images/narozniki/k4.png" class="img-fluid"/>
		        </label>
		     </div>
		  </div>
		  <div class="form-group col-md-2">
		    <div class="form-check">
		       <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
		       <label class="form-check-label" for="gridRadios1">
		           <img src="/images/narozniki/k5.png" class="img-fluid"/>
		        </label>
		     </div>
		  </div>
		  <div class="form-group col-md-2">
		    <div class="form-check">
		       <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
		       <label class="form-check-label" for="gridRadios1">
		           <img src="/images/narozniki/k6.png" class="img-fluid"/>
		        </label>
		     </div>
		  </div>
		  <div class="form-group col-md-2">
		    <div class="form-check">
		       <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
		       <label class="form-check-label" for="gridRadios1">
		           <img src="/images/narozniki/k7.png" class="img-fluid"/>
		        </label>
		     </div>
		  </div>
		  <div class="form-group col-md-2">
		    <div class="form-check">
		       <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
		       <label class="form-check-label" for="gridRadios1">
		           <img src="/images/narozniki/k8.png" class="img-fluid"/>
		        </label>
		     </div>
		  </div>
		  <div class="form-group col-md-2">
		    <div class="form-check">
		       <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
		       <label class="form-check-label" for="gridRadios1">
		           <img src="/images/narozniki/k9.png" class="img-fluid"/>
		        </label>
		     </div>
		  </div>
		  <div class="form-group col-md-2">
		    <div class="form-check">
		       <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
		       <label class="form-check-label" for="gridRadios1">
		           <img src="/images/narozniki/k10.png" class="img-fluid"/>
		        </label>
		     </div>
		  </div>
	</div>


  	<div class="form-row mt-5">
		<div class="form-group col-md-6">
			<label><strong>Obróbka otworów:</strong></label>  
		</div>
  	</div>

	<div class="form-row">

		<div class="form-group col-md-3">
	    	<label for="frm_grubosc">Rodzaj płyty grzewczej</label>
	    	<select id="" class="form-control">
				<option selected> wybierz </option>	    		
	        	<option> nakładany </option>
	        	<option> na równi z blatem </option>
	      </select>
		</div>

		<div class="form-group col-md-3">
	    	<label for="frm_grubosc">Rodzaj zlewozmywaka</label>
	    	<select id="" class="form-control">
				<option selected> wybierz </option>	    		
	        	<option> nakładany </option>
	        	<option> podwieszany </option>
	        	<option> na równi z blatem </option>
	      </select>
		</div>

		<div class="form-group col-md-3">
	    	<label for="frm_grubosc">Liczba komór zlewozmywaka</label>
	    	<select id="" class="form-control">
				<option selected> wybierz </option>	    		
	        	<option> 1 komora </option>
	        	<option> 2 komory </option>
	        	<option> 3 komory </option>
	      </select>
		</div>

		<div class="form-group col-md-3">
	    	<label for="frm_grubosc">Rodzaj ociekacza</label>
	    	<select id="" class="form-control">
				<option selected> wybierz </option>	    		
	        	<option> w zlewozmywaku </option>
	        	<option> w blacie (kamieniu / frezowane rowki) </option>
	      </select>
		</div>


		<div class="form-group col-md-3">
	    	<label for="frm_grubosc">
	    		Baterie, dozowniki
				<i class="far fa-question-circle" data-toggle="tooltip" data-html="true" title="Proszę podać liczbę otworów, które będą wykorzystane do montażu baterii, dozowników"></i>	    			    		
	    	</label>
	    	<select id="" class="form-control">
				<option selected> wybierz </option>	    		
	        	<option> 1 otwór </option>
	        	<option> 2 otwory </option>
	        	<option> 3 otwory </option>
	      </select>
		</div>

		<div class="form-group col-md-3">
	    	<label for="frm_grubosc">
	    		Kontakty
				<i class="far fa-question-circle" data-toggle="tooltip" data-html="true" title="Proszę podać liczbę otworów przeznaczonych na kontakty, gniazda elektryczne"></i>	    		
	    	</label>
	    	<select id="" class="form-control">
				<option selected> wybierz </option>	    		
	        	<option> 1 otwór </option>
	        	<option> 2 otwory  </option>
	        	<option> 3 otwory </option>
	      </select>
		</div>

		<div class="form-group col-md-3">
	    	<label for="frm_grubosc">
	    		Pozostałe otwory 
	    		<i class="far fa-question-circle" data-toggle="tooltip" data-html="true" title="Proszę podać liczbę pozostałych otworów np. pod okap wysuwany z blatu"></i>
	    	</label>
	    	<select id="" class="form-control">
				<option selected> wybierz </option>	    		
	        	<option> 1 otwór </option>
	        	<option> 2 otwory</option>
	        	<option> 3 otwory</option>
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
	    	<label for="frm_grubosc">Wysokość cokołu</label>
	    	<select id="" class="form-control">
				<option selected> wybierz </option>
	        	<option> 1 cm </option>
	        	<option> 2 cm</option>
	        	<option> 3 cm </option>
	      	</select>
		</div>

		<div class="form-group col-md-3">
	    	<label for="frm_grubosc">Grubość cokołu</label>
	    	<select id="" class="form-control">
				<option selected> wybierz </option>
	        	<option> 1 cm </option>
	        	<option> 2 cm </option>
	        	<option> 3 cm </option>
	      	</select>
		</div>

		<div class="form-group col-md-3">
	    	<label for="frm_grubosc">Przygotowanie materiału</label>
	    	<select id="" class="form-control">
	        	<option selected> wybierz </option>
	        	<option> na podstawie naszego pomiaru </option>
	        	<option> na podstawie przesłanego szablonu </option>
	        	<option> na podstawie przesłanego rysunku </option>
	      	</select>
		</div>

		<div class="form-group col-md-3">
	    	<label for="frm_grubosc">Adres montażu</label>
	    	<select id="" class="form-control">
	    		<option selected> wybierz </option>
	        	<option> dom jednorodzinny </option>
	        	<option> blok, parter </option>
	        	<option> blok, 1 piętro </option>
	        	<option> blok, 2 piętro </option>
	        	<option> blok, 3 piętro </option>
	        	<option> blok, 4 piętro </option>
	        	<option> blok, 5 piętro </option>
	        	<option> blok, 6 piętro </option>
	        	<option> blok, 7 piętro </option>
	        	<option> blok, 8 piętro </option>
	        	<option> blok, 9 piętro </option>
	        	<option> blok, 10 piętro </option>
	        	<option> blok, 11 piętro </option>
	        	<option> blok, 12 piętro </option>
	        	<option> blok, 13 piętro </option>
	        	<option> blok, 14 piętro </option>
	        	<option> blok, 15 piętro </option>
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
