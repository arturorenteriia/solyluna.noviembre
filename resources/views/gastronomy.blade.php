@extends('master')
@section('navbar_menu')
@foreach($properties as $property)
  @if($property->id == $property_id)
  <div class="row">
    <div class="parallax-container">
      <div class="parallax"><img src="images/parallax.jpg"></div>
      <div class="caption center-align">
            <h3 class="white-text text-darken-2" style="margin-top: 250px">Gastronomy of ...</h3>
            <h1 class="light grey-text text-lighten-3">{{ $property->name }}</h1>
        </div>
    </div>
  </div>

@stop
@section('form_residencias')

  <!--Aqui va el contenido de la pagina-->

<div class="row"> <!-- row derecho -->
  <div class="col s12 m12 l7   "> <!-- cols -->
    <div class="card-panel white"> <!-- Card panel -->
      <center>
        @foreach($chef as $Chef)
        <img src="{{ asset('uploads') }}/{{ $Chef->image }}" alt="" class="circle responsive-img" width="30%" >
          <h5>Chef {{$Chef->apellidos}}</h5>
      </center>
      <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class="collapsible-header"><i class="material-icons">perm_identity</i>Acerca del chef</div>
          <div class="collapsible-body"><p align="justify">

              {{$Chef->acerca}}

             </p></div>
        </li>
                <li>
          <div class="collapsible-header"><i class="material-icons">work</i>Docencia</div>
          <div class="collapsible-body"><p>{{$Chef->docencia}} </p></div>
        </li>



      </ul>
      @endforeach
      <br>
      @foreach($files as $file)
      <div class="row">
        <div class="col s12">

          <div class="col s12 m4 l4 hoverable">
            <div class="col s12 m12 l12 ">

             <center> <a href="menus/{{ $file->menu}}" TARGET="_blank"><img src="images/personaliza tu menu.jpg" class="responsive-img z-depth-2" alt="" style="width: 207px; height: 231px;"></a></center>
            </div>
            <div class="col s12 m12 l12 ">
              <p class="center-align">You can see the menu for this week</p>
            </div>
          </div>
          <div class="col s12 m4 l4 hoverable">
            <div class="col s12 m12 l12 ">
              <center><a href="{{ asset('drinks') }}/{{ $file->drinks }}" TARGET="_blank"><img src="images/drinks.jpg" class="responsive-img z-depth-2" alt="" style="width: 207px; height: 231px;"></a></center>
            </div>
            <div class="col s12 m12 l12 ">
              <p class="center-align">Wine, Beer, Alcoholic Drinks, beverages prepared...!</p>
            </div>

          </div>

        </div>
      </div>
      @endforeach

    </div> <!-- Card Panel fin -->
  </div> <!-- cols -->
</div> <!-- fin row derecho -->




@stop
@endif
@endforeach
@section('piepagina')
@stop