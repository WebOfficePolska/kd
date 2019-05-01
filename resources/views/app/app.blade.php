<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content=" ">

    
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>



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

  padding-left: 0px !important;
  padding-right: 0px !important;
}


.social_media a:link {
    color: #808080 !important;
}

.social_media a:visited {
    color: #808080 !important;
}

</style>



</head>


<body>


  <div id="main_menu" class="container-fluid fixed-top bg_menu">
    <div class="row">
      <div class="offset-md-2 offset-sm-0"></div>
      <div class="col-12 col-md-8 col-sm-12">
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom">

          <div class="row col-12 col-md-12 col-sm-12 align-items-center" style="padding-right:0;">

              <div class="col-3 col-md-2 col-sm-4" style="padding-left:0;">

<<<<<<< HEAD
=======
                <!-- <div class="navbar-brand d-none d-lg-block">kamien^design</div> -->

>>>>>>> 48aaa973c8f2316a142a664e8ecb6d6ff8880e8a
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                                  <div class="navbar-brand d-none d-lg-block">kamien^design</div>

                </button>

              </div>
              <div class="col-6 col-md-8 col-sm-6">

                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                  <!-- <div class="navbar-brand d-none d-lg-block">kamien^design</div> -->
                  <ul class="navbar-nav ">
                    
                    <li class="nav-item mr-5">
                      <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item mr-5">
                      <a class="nav-link" href="/kamienie">KAMIENIE</a>
                    </li>


<!--                     <li class="nav-item mr-5">
                      <a class="nav-link" href="/zamowienie">SZYBKA WYCENA</a>
                    </li>
 -->
<!--                     <li class="nav-item mr-5">
                      <a class="nav-link" href="/inspiracje">INSPIRACJE</a>
                    </li> -->
                    <li class="nav-item">
                      <a class="nav-link" href="/kontakt">KONTAKT</a>
                    </li>
                  </ul>
                </div>

              </div>

    	    <div class="col-3 col-md-2 col-sm-2 social_media" style="padding-right: 0px;">
    		<a href="http://www.facebook.com/KamieÅ-design-2375571439122572" target="_blank"><i class="fab fa-1x fa-facebook float-right"></i> </a>
    		<a href="http://www.instagram.com/kamiendesign/" target="_blank"><i class="fab fa-1x fa-instagram mr-2 float-right"></i></a>
    	    </div>


          </div>




        </nav>      
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
                  60-506 PoznaÅ„ </br>
                  tel. 875 654 254 </br>
                  mail: <a href="mailto:info@kamiendesign.com">info@kamiendesign.com</a> -->
                </p>
              </div>
              <div class="col-md-3 col-sm-6">
                <h6>Showroom PoznaÅ„</h6>
                <p>
                  ul. CzechosÅ‚owacka 104A<br>
                  (w budynku Sofa & Friends)<br>
                  Pn-pt 10:00-18:00<br>
                  Sb 10:00-16:00 <br>
                  mail: <a href="mailto:poznan@kamiendesign.pl">poznan@kamiendesign.pl</a>
                </p>
              </div>
              <div class="col-md-3 col-sm-6">
                <h6>Showroom GdaÅ„sk</h6>
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
        <span class="copyright">&copy; 2018 All Rights Reserved </span> KamieÅ„ Design
      </div>
      <div class="col-md-2">
      </div>
    </div>

  </div>



</body>


</html>
