<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content=" ">

    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>


    <title>@yield('title')</title>


    <style></style>




</head>


<body>


  <div id="main_menu" class="container-fluid fixed-top bg_menu">
    <div class="row">
      <div class="offset-2"></div>
      <div class="col-8">
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom p-2">          
          <div class="navbar-brand pr-5" href="#"><strong>kamien^design</strong></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav nav-fill w-100">
              
              <li class="nav-item">
                <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/kamienie">KAMIENIE</a>
              </li>


              <li class="nav-item">
                <a class="nav-link" href="/oferta">ZŁÓŻ OFERTĘ</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/inspiracje">INSPIRACJE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/kontakt">KONTAKT</a>
              </li>
            </ul>
          </div>
        </nav>      
      </div>      
    </div>
  </div>


  <div id="main_content" class="container-fluid">

      @yield('content')

  </div>


  <div id="bottom" class="container-fluid">

    <div class="row bottom1 pt-5 pb-5">      
        
        <div class="offset-2"></div>
        <div class="col-8">
          <div class="row">
            
              <div class="col-md-3 col-sm-6">
                <h4>kamien^design</h4>
                <p>
                  ul. Mickiewicza 30/3</br>
                  60-506 Poznań </br>
                  tel. 875 654 254 </br>
                  mail: info@kamiendesign.com
                </p>
              </div>
              <div class="col-md-3 col-sm-6">
                <h6>Showroom Poznań</h6>
                <p>
                  ul. Czechosłowacka 104A</br>
                  (w budynku Sofa & Friends)</br>
                  Pn-pt 10:00-18:00</br>
                  Sb 10:00-16:00
                </p>
              </div>
              <div class="col-md-3 col-sm-6">
                <h6>Showroom Gdańsk</h6>
                <p>
                  ul. Czechosłowacka 104A</br>
                  (w budynku Sofa & Friends)</br>
                  Pn-pt 10:00-18:00</br>
                  Sb 10:00-16:00
                </p>        
              </div>
              <div class="col-md-3 col-sm-6">
                <h6>Showroom Gdynia</h6>
                <p>
                  ul. Czechosłowacka 104A</br>
                  (w budynku Sofa & Friends)</br>
                  Pn-pt 10:00-18:00</br>
                  Sb 10:00-16:00
                </p>        
              </div>


          </div>          
        </div>
    </div>

    <div class="row bottom2 pt-3 pb-3">
      <div class="offset-2"></div>
      <div class="col-8">
        <span class="copyright">&copy; 2018 All Rights Reserved </span> Kamień Design
      </div>
    </div>

  </div>


</body>


</html>
