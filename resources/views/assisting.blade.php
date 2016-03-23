    @extends('master')
@section('navbar_menu')

  <div class="row">
      <div class="col s12 m12 l12 ">
        <div class="card-panel blue">
        <center><span class="white-text" ><h5>Assisted Living Exclusive Health Resorts</h5>
          </span></center>
          
        </div>
      </div>
    </div>

@stop
@section('form_residencias')

      <div class="col s12 m12 l9"> <!-- Note that "m8 l9" was added -->
         <div class="row">
             <!-- foreach -->
             @foreach($textA as $text)
          <div class="card-panel col s12 m12 l9 ">
          <div class="divider"></div>
              <div class="section">
                  <h5>{{ $text->title1 }}</h5>
                  <div class="divider"></div>
                  <div class="row">
                      <div class="col s12 m6 l8">
                          <div class="card-panel white">
                              <img src="images/assisted.jpg" class="responsive-img" width="100%" alt="">
                          </div>
                      </div>
                      <p class="grey-text text-darken-4" align="justify">{{ $text->text1 }}</p>
                      <p class="grey-text text-darken-4" align="justify">{{ $text->text2 }}</p>
                  </div>
                  <h5>{{ $text->title2 }}</h5>
                  <p class="grey-text text-darken-4" align="justify">{{ $text->text3 }}</p>
                  <p class="grey-text text-darken-4" align="justify">{{ $text->text4 }} For detail information on services provided, please visit the <a href="amenities"><em>Amenities and Services page.</em></a></p>
                  <p class="grey-text text-darken-4" align="justify">{{ $text->text5 }}</p>
                  <p class="grey-text text-darken-4" align="justify">Please <em><a href="contacto">Contact us</a></em> for <em><a href="contacto"> Reservation </a></em> or further assistance on the Assisted Living Program.</p>
                  <br>
                  <center><span><a class="btn" role="button" href="casasassisting"><i class="material-icons"></i>TO LOCATE AN ASSISTED LIVING RESORTS</a></span></center>
              </div>
          </div>
             <!-- foreach -->
                 @endforeach
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