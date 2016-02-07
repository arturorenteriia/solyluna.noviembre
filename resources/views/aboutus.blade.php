@extends('master3')
@section('navbar_menu')

  <div class="row">
      <div class="col s12 m12 l12 ">
        <div class="card-panel blue">
        <center><span class="white-text" ><h5>ABOUT US</h5>
          </span></center>

        </div>
      </div>
    </div>

@stop
@section('form_residencias')

  <!--Aqui va el contenido de la pagina-->
<div class="container">
  <div class="col s12 m12 l12"> <!-- Note that "m8 l9" was added -->
      <div class="row">
          <div class="card-panel col s12 m12 l12 ">
              @foreach($textA as $text)
                  <div class="col s12 m6 l12">
                      <div class="col s12 m12 l12">
                          <center><img class="responsive-img" width="20%" src="images/LogoSolyLuna.png"></center>
                      </div>
                      <div class="col s12 m12 l12">
                          <center><h5>{{ $text->title1 }}</h5></center>
                      </div>
                  </div>
                  <p class="grey-text text-darken-4" align="justify">{{$text->text1}} <em><a href="medicaltourism">Medical Tourism for Travelers</a></em> {{ $text->text2 }}</p>
                  <p class="grey-text text-darken-4" align="justify">{{ $text->text3 }}</p>
                  <p clap ="grey-text text-darken-4" align="justify"><b>{{ $text->title2 }}</b></p>
                  <p class="grey-text text-darken-4" align="justify">{{ $text->text4 }}</p>
                  <p class="blue-text text-lighten-2" align="justify"><b>{{ $text->title3 }}</b></p>
                  <p class="grey-text text-darken-4" align="justify">{{ $text->text5 }}</p>
                  <p class="grey-text text-darken-4" align="justify"><h5>{{ $text->title4 }}</h5></p>
                  <p class="blue-text text-lighten-2" align="justify"><b>{{ $text->title5 }}</b></p>
                  <p class="grey-text text-darken-4" align="justify">{{ $text->text6 }}</p>
                  <p class="grey-text text-darken-4" align="justify">{{ $text->text7 }}</p>
                  <p class="blue-text text-lighten-2" align="justify"><b>{{ $text->title6 }}</b></p>
                  <p class="grey-text text-darken-4" align="justify">{{ $text->text8 }}</p>
                  <p class="grey-text text-darken-4" align="justify">{{ $text->text9 }}</p>
                  <p class="grey-text text-darken-4" align="justify"><b>{{ $text->title7 }}</b></p>
                  <p class="grey-text text-darken-4" align="justify">{{ $text->text10 }}</p>
                  <p class="grey-text text-darken-4" align="justify">{{ $text->text11 }}</p>
                  <p class="grey-text text-darken-4" align="justify"><b>{{ $text->title8 }}</b></p>
                  <p class="grey-text text-darken-4" align="justify">{{ $text->text12 }}</p>
                  <p class="grey-text text-darken-4" align="justify">{{ $text->text13 }}</p>
                  <p class="grey-text text-darken-4" align="justify"><b>{{ $text->title9 }}</b></p>
                  <p class="grey-text text-darken-4" align="justify">{{ $text->text14 }}</p>
                  <p class="grey-text text-darken-4" align="justify">{{ $text->text15 }} <em><a href="contacto">Contact us</a></em></p>
                  <p class="grey-text text-darken-4" align="justify"><b>{{ $text->title10 }}</b></p>

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
  </div>
@stop


@section('piepagina')
@stop