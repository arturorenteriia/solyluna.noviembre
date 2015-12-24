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
                      <blockquote class="grey-text text-darken-4" align="justify"><h4>{{ $text->title }}</h4></blockquote>
                      <div class="col s12 m5 l8">
                          <div class="card-panel white">
                              <img src="images/turismo.jpg" class="responsive-img" width="100%" alt="">
                          </div>
                      </div>
                      <p class="grey-text text-darken-4" align="justify">
                          {{ $text->text1 }}
                      </p>
                      <div class="col s5 m5 l5">
                          <div class="card-panel white">
                              <img src="images/turismo2.jpg" class="responsive-img" width="100%" alt="">

                          </div>
                      </div>
                      <p class="grey-text text-darken-4" align="justify">
                        {{ $text->text2 }}
                      </p>

                      <br>
                      
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