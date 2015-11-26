@extends('master')
@section('navbar_menu')

  <div class="row">
      <div class="col s12 m12 l12 ">
        <div class="card-panel blue">
        <center><span class="white-text" ><h5>CONTACT US</h5>
          </span></center>
          
        </div>
      </div>
      @if(Session::has('message'))
          <p class="card-panel white-text teal lighten-2 center-align">{{ Session::get('message') }}</p>
      @endif
    </div>

@stop
@section('form_residencias')

<div class="col s12 m12 l9"> <!-- Note that "m8 l9" was added -->
         <div class="row">
          <div class="card-panel col s12 m12 l9 ">
          <div class="divider"></div>
  <div class="section">
      @foreach($textC as $text)
      <blockquote class="grey-text text-darken-4"><h4>{{ $text->title1 }}</h4></blockquote><div class="col s12 m5">
        <div class="card-panel white">
         <img src="images/ancianotelefono.jpg" class="responsive-img" width="100%" alt="">
        </div>
      </div>
    <p class="grey-text text-darken-2 " align="justify">{{ $text->text1 }}
    <br> 
    <br> 
    {{ $text->text2 }}
        <br>
    <br>
        {{ $text->text3}}.</p>
    @endforeach
  </div>
  </div>
  </div>
<div class="divider col s12 m8 l9 "></div>
<!--Section-->
  <div class="section ">

   
 
<!-- Formulario de contact US-->
 
    <div class="row card-panel hoverable col s12 m9 l9">
        @include('admin.users.partial.messages')
        {!! Form::open(['route' => 'send', 'method' => 'post']) !!}
        <div class="row">
            <div class="input-field col s6 m6 l6">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" name="subject" type="text" class="validate" placeholder="" required>
                <label for="icon_prefix">Subject</label>
            </div>
            <div class="input-field col s6 m6 l6">
                <select required class="browser-default" name="country">
                    <option value="" disabled selected>Exclusive Service Provided</option>
                    <option value="Independent Living">Independent Living</option>
                    <option value="Assisted Living">Assisted Living</option>
                    <option value="Memory Care">Memory Care</option>
                    <option value="All">All Service</option>
                </select>
            </div>
        </div>

        <div class="row ">
          <div class="input-field col s6 m6 l6">
            <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" name="first_name" type="text" class="validate" placeholder="" required>
                <label for="icon_prefix">First Name</label>
          </div>
          <div class="input-field col s6   m6 l6">
            <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" name="last_name" type="text" class="validate" placeholder="" required>
                <label for="icon_prefix">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="col s12 input-field">
            <i class="material-icons prefix">email</i>
                <input name="email" id="email" type="email" class="validate" placeholder="" required>
                <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">call</i>
                <input id="icon_prefix" name="telephone" type="tel" class="" placeholder="" required>
                <label for="icon_prefix">Telephone</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
          <select required class="browser-default" name="country">
            <option value="" disabled selected>Country</option>
            <option value="1">EUA</option>
            <option value="2">Canada</option>
            <option value="3">Mexico</option>
          </select>
          </div>
          <div class="input-field col s6 m6 l6">
              <i class="material-icons prefix">location_on</i>
              <input type="text" name="state" class="validate" placeholder="" required>
              <label for="icon_prefix">State</label>
          </div>
          <div class="input-field col s6 m6 l6">
              <i class="material-icons prefix">location_on</i>
              <input type="text" name="city" class="validate" placeholder="" required>
              <label for="icon_prefix">City</label>
          </div>
          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">location_on</i>
                <input id="icon_prefix" name="zip_code" type="text" class="validate" placeholder="" required>
                <label for="icon_prefix">ZIP Code</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">mode_edit</i>
                <textarea required name="body" id="icon_prefix2" class="materialize-textarea" placeholder="Write here..."></textarea>
                <label for="icon_prefix2">Message</label>
          </div>
        </div>
        <div class="row">
          <center><button class="btn waves-effect waves-light" type="submit" name="action">Submit</button></center>
        </div>
        {!! Form::close() !!}

  </div>
  <!--Fin del frm Contat US-->
    </div>
  <!-- Page Layout here -->

  </div>
 
      </div>

    </div>


@stop


@section('piedepagina')
@stop