    @extends('master')
@section('navbar_menu')

  <div class="row">
      <div class="col s12 m12 l12 ">
        <div class="card-panel blue">
        <center><span class="white-text" ><h5>ASSISTED LIVING</h5>
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
     <blockquote class="grey-text text-darken-4" align="justify"><h4>{{ $text->title1 }}</h4></blockquote>
    <div class="col s12 m5 l9">
        <div class="card-panel white">
         <img src="images/assisted.jpg" class="responsive-img" width="100%" alt="">
        </div>
      </div>
    <p class="grey-text text-darken-2" align="justify">{{ $text->text1 }}
    <br>
      Services offered in assisted living are:
        <li class="grey-text text-darken-2" align="justify">
          Three meals a day served in a common dining area.
        </li >
        <li class="grey-text text-darken-2" align="justify">
        Housekeeping services.
        </li>
        <li class="grey-text text-darken-2" align="justify">
        Transportation.
        </li>
        <li class="grey-text text-darken-2" align="justify">
        24-hour security
        </li>
        <li class="grey-text text-darken-2" align="justify">
        Exercise and wellness programs
        </li>
        <li class="grey-text text-darken-2" align="justify">
        Personal laundry services
        </li>
        <li class="grey-text text-darken-2" align="justify">
        Social and recreational activities
        </li>
    <br>
Personal care in assisted living includes:
    <br><br>
<li class="grey-text text-darken-2" align="justify">
Staff available to respond to both scheduled and unscheduled needs
</li>
<li class="grey-text text-darken-2" align="justify">
Assistance with eating, bathing, dressing, toileting, and walking
</li>
<li class="grey-text text-darken-2" align="justify">
Access to health and medical services, such as physical therapy and hospice
</li>
<li class="grey-text text-darken-2" align="justify">
Emergency call systems for each resident’s apartment
</li>
<li class="grey-text text-darken-2" align="justify">
Medication management
</li>
<li class="grey-text text-darken-2" align="justify">
Care for residents with cognitive impairments
</li>
<br>
    </p>
    <div class="col s5 m5 l5">
        <div class="card-panel white">
         <img src="images/ILbaraja.jpg" class="responsive-img" width="100%" alt="">

        </div>
      </div>
      <h5>{{ $text->title2 }}</h5><p class="grey-text text-darken-2" align="justify">
        {{ $text->text2 }}
      </p>
      <br>
      <br>

      <br>
      <br>
        <a class="grey-text " href="Acasas"><h5>Find out Independent Living Residences</h5></a>
         <span><a class="btn" role="button" href="casasassisting"><i class="material-icons">trending_flat</i></a></span>
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

