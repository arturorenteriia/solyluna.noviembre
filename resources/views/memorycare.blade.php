@extends('master')
@section('navbar_menu')

  <div class="row">
      <div class="col s12 m12 l12 ">
        <div class="card-panel blue">
        <center><span class="white-text" ><h5>MEMORY CARE</h5>
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
              <!-- foreach -->
              @foreach($textM as $text)
  <div class="section">
     <blockquote class="grey-text text-darken-4" align="justify"><h4>{{ $text->title1 }}</h4></blockquote>
    <div class="col s12 m5 l9">
        <div class="card-panel white col s12">
         <img src="images/memori-care.jpg" class="responsive-img" width="100%" alt="">
        </div>
    </div>
      <p class="grey-text text-darken-2" align="justify">{{ $text->text1 }}

    <div class="col s5 m5 l5">
        <div class="card-panel white">
         <img src="images/bysyl.jpg" class="responsive-img" width="100%" alt="">
             </div>
      </div>
      <h5>{{ $text->title2 }}</h5><p class="grey-text text-darken-2" align="justify">
        {{ $text->text2 }}
      </p>
      <br>
      <br>

      <br>
      <br>
        <a class="grey-text " href="Mcasas"><h5>Find out Independent Living Residences</h5></a>
        <span><a class="btn" role="button" href="Mcasas"><i class="material-icons">trending_flat</i></a></span>
  </div>
              <!-- foreach -->
                  @endforeach
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