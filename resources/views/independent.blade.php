@extends('master')
@section('navbar_menu')

  <div class="row">
      <div class="col s12 m12 l12 ">
        <div class="card-panel blue">
        <center><span class="white-text" ><h5>Independent Living Exclusive Health Resorts</h5>
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
     <h5>{{ $text->title1 }}</h5>
      <div class="divider"></div>
    <div class="row">
        <div class="col s12 m5 l9">
            <div class="card-panel white">
                <img src="images/ILgrupo.jpg" class="responsive-img" width="100%" alt="">
            </div>
        </div>
        <p class="grey-text text-darken-4" align="justify">{{ $text->text1 }}</p>
        <p class="grey-text text-darken-4" align="justify">{{ $text->text2 }}</p>
        <p class="grey-text text-darken-4" align="justify">{{ $text->text3 }}</p>

    </div>
          <h5>{{ $text->title2 }}</h5>
    <div class="col s12 m6 l5">
        <div class="card-panel white">
            <img src="images/ILbaraja.jpg" class="responsive-img" width="100%" alt="">
        </div>
    </div>
          <p class="grey-text text-darken-4" align="justify">{{ $text->text4 }} For detail information on services provided, please visit the <em><a href="amenities">Amenities and Services page.</a></em></p>
          <p class="grey-text text-darken-4" align="justify">{{ $text->text5 }}</p>
          <p class="grey-text text-darken-4" align="justify">Please <em><a href="contacto">Contact us</a></em> for further assistance on the Independent Living Program.</p>
       
        <center><span><a class="btn" role="button" href="independenthouses"><i class="material-icons"></i>TO LOCATE AN INDEPENDENT LIVING RESORTS</a></span></center>
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