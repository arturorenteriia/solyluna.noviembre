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


<!-- navbar -->
<div class="navbar-fixed ">
  <nav>
    <div class="nav-wrapper blue darken-3">
      <a href="welcome" class="brand-logo"><center><img src="images/LogoSolyLuna.png" class="responsive-img" width="40%" alt=""></center></a>
      <ul id="" class="right hide-on-med-and-down">
        <li><a href="contacto">Contact Us<i class="material-icons left">call</i></a></li>
        <li><a href="welcome">Home</a></li>
        <li><a href="aboutus">About Us</a></li>
        <li><a href="independent">Independent Living</a></li>
        <li><a href="assisting">Assisted Living</a></li>
        <li><a href="memorycare">Memory Care</a></li>
        <li><a href="medicaltourism">Medical Tourism</a></li>
        <li><a href="#"><i class="material-icons">person_pin</i></a></li>
      </ul>
      <!--Navar Movil-->
      <ul class="side-nav" id="slide-out">
        <li><a href="contacto.html">Contact us</a></li>
        <li><a href="welcome">Home</a></li>
        <li><a href="aboutus">About Us</a></li>
        <li><a href="independent.html">Independent Living</a></li>
        <li><a href="assisting.html">Assisted Living</a></li>
        <li><a href="memorycare">Memory Care</a></li>
        <li><a href="medicaltourism">Medical Tourism</a></li>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">reorder</i></a>
      <!--Fin Navar Movil-->
      </div>
  </nav>
</div>

@yield('navbar_menu')


  @yield('form_residencias')

  <center> <span><a class="btn" role="button" href="javascript:history.back(-1,1)"><i class="material-icons"></i>Previous Page</a></span></center>
  <footer class="page-footer grey lighten-3">



    <div class="footer-copyright">

      <div class="container">

        <b class="black-text text-ligthen-4">© 2015 Copyright Sol & Luna Health Exclusive Resorts</b>
        <a class="black-text text-lighten-3" href="aboutus">|About Us|</a>
        <a class="black-text text-lighten-3" href="{{ asset('/uploads/Terms.pdf') }}" TARGET="_blank"> Terms |</a>
        <a class="black-text text-lighten-3" href="#!">Privacy|</a>
        <a class="black-text text-lighten-3" href="{{ url('/auth/login') }}"> ADM |</a>

      </div>

    </div>

  </footer>
  @yield('piedepagina')



  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script>
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15 // Creates a dropdown of 15 years to control year
    });
  </script>
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