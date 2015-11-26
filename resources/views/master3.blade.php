<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @include('Partials.script')


    <title>Sol&Luna</title>
  <!--Import materialize.css-->
<link rel="stylesheet" href="css/materialize.min.css" media="screen,projection">
<link rel="stylesheet" href="css/mystyle.css" media="screen,projection">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="grey lighten-4">

  <!--Dropdowns-->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
  </ul>

  <ul id="dropdown2" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
  </ul>

  <ul id="dropdown3" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
  </ul>

  <ul id="dropdown4" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
  </ul>
  <!--fin Dropdowns-->

   <!-- navbar -->
   <div class="navbar-fixed ">
    <nav>
      <div class="nav-wrapper blue darken-3">
          <a href="welcome" class="brand-logo"><center><img src="images/LogoSolyLuna.png" class="responsive-img" width="40%" alt=""></center></a>
        <ul id="" class="right hide-on-med-and-down">
        <li><a href="contacto">Contact Us<i class="material-icons left">call</i></a></li>
        <li><a href="welcome">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="independent">Independent Living</a></li>
        <li><a href="assisting">Assisted Living</a></li>
        <li><a href="memorycare">Memory Care</a></li>
        <li><a href="#"><i class="material-icons">person_pin</i></a></li>
      </ul>
      <!--Navar Movil-->
        <ul class="side-nav" id="slide-out">
          <li><a href="contacto.html">Contact us</a></li>
          <li><a href="welcome">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="independent.html">Independent Living</a></li>
          <li><a href="assisting.html">Assisted Living</a></li>
          <li><a href="memorycare">Memory Care</a></li>
        </ul>
          <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">reorder</i></a>
        <!--Fin Navar Movil-->
    </nav>
  </div>
  <h1 ALIGN="center">UNDER CONSTRUCTION</h1>
   <!-- navbar -->

      <!-- IMAGEN PORTADA -->

   <!-- IAMGEN PORTADA -->

@yield('navbar_menu')

   <!-- navbar -->

   <!-- navbar -->


  <!-- Page Layout here -->
  <div class="row">
    @include('Partials.serviceProvided')

      @yield('form_residencias')
       <footer class="page-footer grey lighten-3">

          

          <div class="footer-copyright">

            <div class="container">

            <b class="black-text text-ligthen-4">© 2015 Copyright Sol & Luna Health Exclusive Resorts</b>
            <a class="black-text text-lighten-3" href="#!">|About Us|</a>
            <a class="black-text text-lighten-3" href="#!">Inversionistas|</a>
            <a class="black-text text-lighten-3" href="#!">Terms|</a>
            <a class="black-text text-lighten-3" href="#!">Privacy|</a>
                <a class="black-text text-lighten-3" href="{{ url('/auth/login') }}"> ADM |</a>

            </div>

          </div>

        </footer>
        @yield('piedepagina')



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
        <script> $(document).ready(function(){
                $('.parallax').parallax();
            });
        </script>
</body>
</html>