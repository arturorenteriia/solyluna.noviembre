@extends('master')
@section('navbar_menu')

  <div class="row">
      <div class="col s12 m12 l12 ">
        <div class="card-panel blue">
        <center><span class="white-text" ><h5>Memory Care Exclusive Health Resorts</h5>
          </span></center>
          
        </div>
      </div>
    </div>

@stop
@section('form_residencias')


    <div class="col s12 m12 l9"> <!-- Note that "m8 l9" was added -->
        @foreach($textM as $text)
            <div class="card-panel col s12 m12 l9">
                <div class="row">
                    <h5>{{ $text->title1 }}</h5>
                    <div class="divider"></div>
                    <br>
                    <div class="col s12 m12 l7">
                        <img src="images/memori-care.jpg" class="responsive-img" width="100%" alt="">
                    </div>
                    <p class="grey-text text-darken-4" align="justify">{{ $text->text1 }}</p>
                    <p class="grey-text text-darken-4" align="justify">{{ $text->text2 }}</p>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12">
                        <h5>{{ $text->title2 }}</h5>
                        <p class="grey-text text-darken-4" align="justify">{{ $text->text3 }}</p>
                        <p class="grey-text text-darken-4" align="justify">{{ $text->text4 }} A Lifestyle is also provided with <em><a href="amenities">Amenities and Services</a></em> to fulfill their needs and enhance their sense of self. </p>
                        <p class="grey-text text-darken-4" align="justify">{{ $text->text5 }}</p>
                        <p class="grey-text text-darken-4" align="justify">Please <em><a href="contacto">Contact us</a></em> for <em><a href="contacto"> Reservation </a></em> or further assistance on the Memory Care Program.</p>
                    </div>
                </div>
                <center><span><a class="btn" role="button" href="memoryhouses"><i class="material-icons"></i>To locate a Memory Care Resorts</a></span></center>
                <br>
            </div>
        @endforeach
    </div><!-- Note that "m8 l9" was added -->

 
@stop


@section('piepagina')
@stop