@extends('master')
@section('navbar_menu')

  <div class="row">
      <div class="col s12 m12 l12 ">
        <div class="card-panel blue">
        <center><span class="white-text" ><h5>INDEPENDENT LIVING</h5>
          </span></center>

        </div>
      </div>
    </div>

@stop
@section('form_residencias')


  <div class="col s12 m12 l9"> <!-- Note that "m8 l9" was added -->
         <div class="row">
          <div class="card-panel col s12 m12 l9 ">
          <div class="divider"></div>
  <div class="section">
      @foreach($textI as $text)
     <blockquote class="grey-text text-darken-4" align="justify"><h4>{{ $text->title1 }}</h4></blockquote>
    <div class="col s12 m5 l9">
        <div class="card-panel white">
         <img src="images/ILgrupo.jpg" class="responsive-img" width="100%" alt="">
        </div>
      </div>
    <p class="grey-text text-darken-2" align="justify">
<li class="grey-text text-darken-2" align="justify">
  Only minor assistance is needed with activities of daily living.
</li >

<li class="grey-text text-darken-2" align="justify">
You want a place to live that requires little or no home maintenance and yard work.
</li>


<li class="grey-text text-darken-2" align="justify">
You want to socialize with your peers and broaden your social network.
</li>


<li class="grey-text text-darken-2" align="justify">
You want to enjoy activities and meals in the company of others.
</li>

<br>
    </p>
    <div class="col s5 m5 l5">
        <div class="card-panel white">
         <img src="images/ILbaraja.jpg" class="responsive-img" width="100%" alt="">

        </div>
      </div>
      <h5>Why Sol & Luna Health Resorts?</h5><p class="grey-text text-darken-2" align="justify">
        @yield('letras')
      </p>
      <br>
      <br>

      <br>
      <br>
        <a class="grey-text " href="Icasas"><h5>Find out Independent Living Residences</h5></a>
        <span><a class="btn" role="button" href="Icasas"><i class="material-icons">trending_flat</i></a></span>
          @endforeach
  </div>
  </div>
  </div>
<div class="divider col s12 m8 l9 "></div>
<!--Section-->
  <div class="section ">

  <!--Section-->
      </div>
  <!-- Note that "m8 l9" was added -->
    </div>
     </div>
@stop


@section('piepagina')
@stop