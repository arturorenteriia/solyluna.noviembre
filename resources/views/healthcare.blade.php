@extends('master3')
@section('navbar_menu')

    <div class="row">
        <div class="col s12 m12 l12 ">
            <div class="card-panel blue">
                <center><span class="white-text" ><h5>Professional Services</h5>
          </span></center>

            </div>
        </div>
    </div>

    @stop
    @section('form_residencias')

            <!--Aqui va el contenido de la pagina-->
    <div class="container">
        @foreach($textM as $text)
        <div class="col s12 m12 l12 card-panel with">
            <div class="row">
                <div class="col s12 m6 l12">
                    <div class="col s12 m12 l12">
                        <center><img class="responsive-img" width="20%" src="images/LogoSolyLuna.png"></center>
                    </div>
                    <div class="col s12 m12 l12">
                        <center><h5>Professional Services</h5></center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6 l3">
                    <img class="responsive-img" width="" src="images/Profesional Services.jpg">
                </div>
                <div class="col s12 m6 l9">
                    <h5 class="left-align">{{ $text->title1 }}</h5>
                    <p class="grey-text text-darken-4" align="justify">
                        {{ $text->text1 }}
                    </p>
                    <p class="grey-text text-darken-4" align="justify">
                        {{ $text->text2 }}
                    </p>
                    <p class="grey-text text-darken-4" align="justify">
                        {{ $text->text3 }}
                    </p>
                    <p class="grey-text text-darken-4" align="justify">
                        {{ $text->text4 }}
                    </p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col s12 m6 l3">
                    <img class="responsive-img" width="" src="images/Telehealth picture.jpg">
                </div>
                <h5 class="left-align">{{ $text->title2 }}</h5>
                <div class="col s12 m6 l9">
                    <p class="grey-text text-darken-4" align="justify">
                        {{ $text->text5 }}
                    </p>
                    <p class="grey-text text-darken-4" align="justify">
                        {{ $text->text6 }}
                    </p>
                    <p class="grey-text text-darken-4" align="justify">
                        {{ $text->text7 }}
                    </p>
                </div>
            </div>
        </div>
            @endforeach
    </div>
@stop

@section('piepagina')
@stop