@extends('master')
@section('navbar_menu')

  <div class="row">
      <div class="col s12 m12 l12 ">
        <div class="card-panel blue">
        <center><span class="white-text" ><h5>MEDICAL TOURISM</h5>
          </span></center>

        </div>
      </div>
    </div>

@stop
@section('form_residencias')

  <!--Aqui va el contenido de la pagina-->

  <div class="col s12 m12 l9"> <!-- Note that "m8 l9" was added -->
      <div class="row">
          <!-- foreach -->
          @foreach($textM as $text)
              <div class="card-panel col s12 m12 l9 ">
                  <div class="divider"></div>
                  <div class="section">
                     <div class="row">
                         <h4>{{ $text->title }}</h4>
                         <div class="divider"></div>
                         <br>
                         <div class="col s12 m5 l8">
                             <div class="card-panel white">
                                 <img src="images/turismo.jpg" class="responsive-img" width="100%" alt="">
                             </div>
                         </div>
                         <p class="grey-text text-darken-4" align="justify">{{ $text->text1 }}</p>
                         <p class="grey-text text-darken-4" align="justify">Ours <a href="assisting"><em>Assisted Living Program</em></a>{{ $text->text2 }} We also provide <a href="amenities"><em>Amenities and Services</em></a> to enrich their mind, body and spirit and a professional staff of dedicated healthcare provider that includes nutritionist, nurses, psychologists and physicians with access to hospitals services to insure a healthy stay at ours secured resorts.</p>
                         <p class="grey-text text-darken-4" align="justify">{{ $text->text3 }}</p>
                     </div>
                      <div class="col s12 m6 l5">
                          <div class="card-panel white">
                              <img src="images/turismo2.jpg" class="responsive-img" width="100%" alt="">
                          </div>
                      </div>
                      <p class="grey-text text-darken-4" align="justify">{{ $text->text4 }}</p>
                      <p class="grey-text text-darken-4" align="justify">{{ $text->text5 }}</p>
                      <p class="grey-text text-darken-4" align="justify">{{ $text->text6 }}</p>
                      <br>
                      <p class="grey-text text-darken-4" align="justify">Please <a href="contacto"><em>Contact us now </em></a> for <em><a href="contacto"> Reservation </a></em> or further assistance on the Medical Tourism Program for Travelers.</p>
                      </div>
              </div>
          @endforeach
              <!-- foreach -->

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