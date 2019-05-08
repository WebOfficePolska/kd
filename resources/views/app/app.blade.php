<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content=" ">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">




    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />



    <title>@yield('title')</title>


    <style></style>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96974681-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-96974681-4');
</script>


<style>

.navbar {
}


.navbar-brand {
    margin-right: 0px !important;
    font-size: 18pt; 
    padding-left:0px; 
    padding-right: 0px;
}

.social_media a:link {
    color: #808080 !important;
}

.social_media a:visited {
    color: #808080 !important;
}


@media (min-width: 768px) {
    .text-sm-left {
        text-align: left !important;
    }

    .text-sm-right {
        text-align: right !important;
    }

    .text-sm-center {
        text-align: center !important;
    }

    .text-sm-justify {
        text-align: justify !important;
    }
}



</style>



</head>


<body>


  <div id="main_menu" class="container-fluid fixed-top bg_menu">

    <div class="row">

      <div class="offset-md-2 offset-sm-0"></div>

      <div class="col-12 col-md-8 col-sm-12">

        <nav class="navbar navbar-expand-lg navbar-light navbar-custom">            
            <div class="col-md-0" style="padding-left: 0px;">
              <button class="navbar-toggler order-first" type="button" data-toggle="collapse" data-target="#navbarNavLinks" aria-controls="navbarNavLinks" aria-expanded="false" aria-label="Toggle navigation">
          	     <span class="navbar-toggler-icon"></span>
              </button>
            </div>

            <a class="navbar-brand col-md-1 col-sm-4 col-6 text-center" href="/" style="">kamien^design</a>

            <div class="collapse navbar-collapse justify-content-center  d-none d-lg-block" id="navbarNavLinks2">
              <ul class="navbar-nav pl-0">
                
                <li class="nav-item active mr-4">
                  <a class="nav-link" href="/">HOME</a>
                </li>

                <li class="nav-item mr-4">
                  <a class="nav-link" href="/#oferta">OFERTA</a>
                </li>

                <li class="nav-item mr-4">
                  <a class="nav-link" href="/kamienie">KAMIENIE</a>
                </li>

                <li class="nav-item mr-4">
                  <a class="nav-link" href="/galeria">GALERIA</a>
                </li>


                <li class="nav-item" style="border: 1px solid #ccc">
                  <a class="nav-link" href="/kontakt" >KONTAKT</a>
                </li>
              </ul>
            </div>

            <div class="social_media order-last col-md-0" style="padding-right: 11pt; _padding-left:0;">
            	<ul class="list-inline" style="width: 60px;">
            	    <li><a href="http://www.facebook.com/KamieÃ…-design-2375571439122572" target="_blank"><i class="fab fa-1x fa-facebook float-right"></i> </a></li>
            	    <li><a href="http://www.instagram.com/kamiendesign/" target="_blank"><i class="fab fa-1x fa-instagram mr-2 float-right"></i></a></li>
            	</ul>
            </div>
        </nav>

        <div class="collapse navbar-collapse order-last navbar-custom" id="navbarNavLinks">
            <ul class="navbar-nav d-lg-none">
              <li class="nav-item">
                <a class="nav-link" href="/">HOME </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/#oferta">OFERTA</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/kamienie">KAMIENIE</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/galeria">GALERIA</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/kontakt">KONTAKT</a>
              </li>
            </ul>

        </div>



      </div>



    </div>
  </div>


  <div id="main_content" class="container-fluid">

      @yield('content')

  </div>


  <div>
    <hr />
  </div>


  <div id="section_bottom" class="container-fluid">

    <div class="row bottom1 pt-5 pb-5">      
        
        <div class="offset-md-2"></div>
        <div class="col-md-8 col-sm-12">
          <div class="row align-items-center">
            
              <div class="col-md-3 col-sm-6 text-center">
                <h4 class="kd-font">kamien^design</h4>
                <p class="text-center">
                  <span class="" style="font-size: 10pt; color: #000;"><!-- iCon by oNlineWebFonts.Com --> 
                    <img src="/images/phone.png" width="16" height="16"> +48 668 838 638</span> <br>
                  &nbsp; <br>
                  &nbsp; <br>
                  &nbsp;
<!--                   ul. Mickiewicza 30/3</br>
                  60-506 PoznaÃ…â€ž </br>
                  tel. 875 654 254 </br>
                  mail: <a href="mailto:info@kamiendesign.com">info@kamiendesign.com</a> -->
                </p>
              </div>
              <div class="col-md-3 col-sm-6">
                <h6>Showroom Poznań</h6>
                <p>
                  ul. Czechosłowacka 104A<br>
                  (w budynku Sofa & Friends)<br>
                  Pn-pt 10:00-18:00<br>
                  Sb 10:00-16:00 <br>
                  mail: <a href="mailto:poznan@kamiendesign.pl">poznan@kamiendesign.pl</a>
                </p>
              </div>
              <div class="col-md-3 col-sm-6">
                <h6>Showroom Gdańsk</h6>
                <p>
                  al. Grunwaldzka 303</br>
                  (przy CH Oliwa)</br>
                  Pn-pt 10:00-19:00</br>
                  Sb 11:00-15:00<br>
                  mail: <a href="mailto:gdansk@kamiendesign.pl">gdansk@kamiendesign.pl</a>
                </p>        
              </div>
              <div class="col-md-3 col-sm-6">
                <h6>Showroom Gdynia</h6>
                <p>
                  ul. Wielkopolska 268</br>
                  (przy stacji Lukoil)</br>
                  Pn-pt 10:00-18:00</br>
                  Sb 10:00-14:00 <br>
                  mail: <a href="mailto:gdynia@kamiendesign.pl">gdynia@kamiendesign.pl</a>
                </p>        
              </div>


          </div>          
        </div>
    </div>


  <div class="row">
    <div class="col-md-12">
      <hr />
    </div>    
  </div>

    <div class="row bottom2 pt-3 pb-3">
      <div class="offset-md-2"></div>
      <div class="col-md-8 col-sm-12>
        <span class="copyright">&copy; 2018 All Rights Reserved </span> Kamień Design
      </div>
      <div class="col-md-2">
      </div>
    </div>

  </div>


  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
<!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script> -->


  <script type="text/javascript" src="{{ asset('js/jquery.mask.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/valida.2.1.5.js') }}"></script>


  <script>

      $(document).ready(function(){

          $('#form_zamowienie').valida();

          $('[id="customer_phone"]').mask("+48-000-000-000", {
                placeholder: "Nr telefonu"
          });

      });

  </script>



</body>


</html>
