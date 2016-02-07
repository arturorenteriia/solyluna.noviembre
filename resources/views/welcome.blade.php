<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sol&Luna</title>
  <!--Import materialize.css-->
<link rel="stylesheet" href="css/materialize.min.css" media="screen,projection">
<link rel="stylesheet" href="css/mystyle.css" media="screen,projection">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     
    @include('Partials.script')

</head>

<body class="grey lighten-4">
<!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
     @include('Partials.CarrouselScript')

   <!-- navbar -->
    <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper blue darken-3">
            <a href="welcome" class="brand-logo"><center><img src="images/LogoSolyLuna.png" class="responsive-img" width="40%" alt=""></center></a>

            <ul class="right hide-on-med-and-down">

              <li><a href="contacto">Contact Us<i class="material-icons left">call</i></a></li>
            </ul>
            <!--Navar Movil-->
            <ul class="side-nav" id="slide-out">
              <li><a href="contacto">Contact us</a></li>
                <li><a href="aboutus">About Us</a></li>
                <li><a href="independent">Independent Living</a></li>
                <li><a href="assisting">Assisted Living</a></li>
                <li><a href="memorycare">Memory Care</a></li>
                <li><a href="medicaltourism">Medical Tourism</a></li>
              <li><a href="#">Login</a></li>
            </ul>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">reorder</i></a>
            <!--Fin Navar Movil-->
          </div>
        </nav>
    </div>
   <!-- navbar -->

    <!-- Carrusel-->
    @include('Partials.Carrusel')
    <!-- Fin del carrusel -->

    <!-- Carrusel movil -->
    @include('Partials.CarruselMovil')
    <!-- Fin carrusel movil -->

   <!-- navbar -->
   <nav>
    <div class="nav-wrapper blue ">
      <a href="#" class="brand-logo hide-on-small-only" style="

    padding-left: 20px;

">Sol & Luna Exclusive Health Resorts</a>
      <a href="#" class="brand-logo hide-on-med-and-up"><h5>Sol&Luna Exclusive HealthResorts</h5></a>
      <ul id="" class="right hide-on-med-and-down">
        <li><a href="aboutus">About Us</a></li>
        <li><a href="independent">Independent Living</a></li>
        <li><a href="assisting">Assisted Living</a></li>
        <li><a href="memorycare">Memory Care</a></li>
        <li><a href="medicaltourism">Medical Tourism</a></li>
        <li><a href="#"><i class="material-icons">person_pin</i></a></li>
      </ul>
    </div>
  </nav>
  <br>
   <br>
   <!-- navbar -->

    <!-- Page Layout here -->
    <div class="row">
        @include('Partials.serviceProvided')

          <CENTER><h1> SITE UNDER CONSTRUCTION </h1></CENTER>
       <div class="col s12 m12 l9"> <!-- Note that "m8 l9" was added -->
         <div class="row">
            <div class="card-panel col s12 m12 l9 ">
                <div class="divider"></div>
                <div class="section">
                    @foreach($textW as $text)
                    <h5 class="grey-text text-darken-4">{{ $text->title }}</h5>
                    <p class="grey-text text-darken-3" align="justify"> {{ $text->firstText }} </p>
                    <div class="row">
                        <div class="col s12 l4">
                            <div class="card-panel white">
                                <img src="images/anciana.jpg" class="responsive-img" width="100%" alt="">
                            </div>
                             {{ $text->description }}
                        </div>
                        <div class="col s12 l4">
                            <p class="flow-text blue-text text-darken-2" align=''>{{ $text->phrase }}</p>
                        </div>
                        <p class="grey-text text-darken-3" align="justify">{{ $text->secondText }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
         </div>
         <div class="divider col s12 m8 l9 "></div>
         <!--Section-->
         <div class="section ">
          <div class="row">
              <div class="col s12 m12 l3">
                  <div class="card big hoverable">
                      <div class="card-image">
                          <a href="independent" class="brand-logo"> <img src="images/viejos.jpg" height="150"></a>
                          <a href="independent" class="brand-logo">   <span class="card-title ">Independent Living</span></a>
                      </div>
                      <div class="card-content">
                          <a href="independent" class="brand-logo">  <p class="grey-text text-darken-2" align="" >Lifelong dreams in a secured and engaging social environment.</p></a>
                      </div>

                      <div class="card-action">
                          <a href="independent">See more...</a>
                      </div>
                  </div>
              </div>

            <div class="col s12 m12 l3">
              <div class="card big hoverable">
                <div class="card-image">
                  <a href="assisting" class="brand-logo"> <img src="images/vidaasistida.jpg" height="150"></a>
                  <a href="assisting" class="brand-logo"> <span class="card-title ">Assisted Living</span></a>
                </div>
                <div class="card-content">
                  <a href="assisting" class="brand-logo"> <p class="grey-text text-darken-2">The ideal solution to insure a healthy life style of care for your love ones.</p></a>
                </div>
                <div class="card-action">
                  <a href="assisting">See more...</a>
                </div>
              </div>
            </div>
            <div class="col s12 m12 l3 ">
              <div class="card big hoverable ">
                <div class="card-image">
                    <a href="memorycare" class="brand-logo"><img src="images/memoria.jpg" height="150"></a>
                    <a href="memorycare" class="brand-logo">   <span class="card-title">Memory Care</span></a>
                </div>
                <div class="card-content">
                    <a href="memorycare" class="brand-logo">   <p class="grey-text text-darken-2">Supporting environments for those with Cognitive Challenges.</p></a>
                </div>
                <div class="card-action">
                  <a href="memorycare">See more...</a>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
              <div class="col s12 m12 l3">
                  <div class="card big hoverable">
                      <div class="card-image">
                          <a href="ProfessionalServices" class="brand-logo"> <img src="images/healthcare-outsourcing-reasons.jpg" height="150"></a>
                          <a href="ProfessionalServices" class="brand-logo">  <span class="card-title">..Professional Services</span></a>
                      </div>
                      <div class="card-content">
                          <a href="ProfessionalServices" class="brand-logo">   <p class="grey-text text-darken-2">Healthcare Professionals like Nurses, Psychologist and Physicians</p></a>
                      </div>
                      <div class="card-action">
                          <a href="ProfessionalServices">See more...</a>
                      </div>
                  </div>
              </div>

              <div class="col s12 m12 l3">
                  <div class="card big hoverable">
                      <div class="card-image">
                          <a href="medicaltourism" class="brand-logo"> <img src="images/Turismo medico.png" height="150"></a>
                          <a href="medicaltourism" class="brand-logo">   <span class="card-title ">Medical Tourism</span></a>
                      </div>
                      <div class="card-content">
                          <a href="medicaltourism" class="brand-logo"><p class="grey-text text-darken-2">For the Traveler in need of Professional Care and Relaxation</p></a>
                      </div>
                      <div class="card-action">
                          <a href="medicaltourism">See more...</a>
                      </div>
                  </div>
              </div>

            <div class="col s12 m12 l3 ">
              <div class="card big hoverable ">
                <div class="card-image">
                  <a href="amenities" class="brand-logo"><img src="images/amenities.jpg" height="150"></a>
                 <a href="amenities" class="brand-logo"> <span class="card-title">Amenities and Services</span></a>
                </div>
                <div class="card-content">
                 <a href="amenities" class="brand-logo"> <p class="grey-text text-darken-2">A Lifestyle with Amenities and Services to enhance your life experiences</p></a>
                </div>
                <div class="card-action">
                  <a href="amenities">See more...</a>
                </div>
              </div>
            </div>
          </div>

             <div class="divider col s12 m8 l9 "></div>
             <div class="section ">
                <a href="http://solylunahealthresorts.com/" TARGET="_BLANK"><img src="images/LogoSolyLuna.png" class="responsive-img" width="6%" alt=""></a>
                <a href="http://www.sanjavier.com.mx/"TARGET="_BLANK" ><img src="images/sanjavier.png" class="responsive-img" width="5%" alt=""></a>
                <a href="http://www.jalisco.gob.mx/es/jalisco/municipios/puerto-vallarta"TARGET="_BLANK" ><img src="images/pv.jpg" class="responsive-img" width="8%" alt=""></a>
                <a href="http://www.hospitalmedasist.com/?lang=en"TARGET="_BLANK" ><img src="images/medasist.png" class="responsive-img" width="12%" alt=""></a>
                <a href="http://www.vallartafitness.com.mx/"TARGET="_BLANK" ><img src="images/logoa.png" class="responsive-img" width="12%" alt=""></a>
             </div>
        </div><!--Section-->
  <!-- Note that "m8 l9" was added -->
      </div>

  <!-- Page Layout here -->
  </div>
        <footer class="page-footer grey lighten-3">
          <div class="footer-copyright">
            <div class="container">
            <b class="black-text text-ligthen-4">© 2015 Copyright Sol & Luna Health Exclusive Resorts</b>
            <a class="black-text text-lighten-3" href="aboutus">| About Us |</a>
            <a class="black-text text-lighten-3" href="{{ asset('/uploads/Terms.pdf') }}" TARGET="_blank"> Terms |</a>
            <a class="black-text text-lighten-3" href="#!"> Privacy |</a>
            <a class="black-text text-lighten-3" href="{{ url('/auth/login') }}"> ADM |</a>
            </div>
          </div>
        </footer>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script>
    $(function()
    {
      //inicializar slider
      $(".slider").slider();
    });
  </script>

  <script>
  //selects
  $(document).ready(function() {
    $('select').material_select();
  });
  </script>

  <script>
  // Initialize collapse button
  $(".button-collapse").sideNav();
  </script>

</body>
</html>