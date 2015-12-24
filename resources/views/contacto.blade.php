@extends('master3')
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
  </div>
<!-- Formulario de contact US-->
 <div class="container">
    <div class="row card-panel hoverable col s12 m9 l9">
        @include('admin.users.partial.messages')
        {!! Form::open(['route' => 'send', 'method' => 'post']) !!}
        <div class="row">
            <div class="input-field col s6 m6 l6">
                <select required class="browser-default" name="subject">
                    <option value="" disabled selected>Please select subject</option>
                    <option value="Independent Living">Independent Living</option>
                    <option value="Assisted Living">Assisted Living</option>
                    <option value="Memory Care">Memory Care</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="input-field col s6 m6 l6">
                <i class="material-icons prefix">info</i>
                <input id="icon_prefix" name="other" type="text" class="validate" placeholder="If you choose 'other'">
                <label for="icon_prefix">Other</label>
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
          <div class="input-field col s12 m6 l3">
            <i class="material-icons prefix">call</i>
                <input id="icon_prefix" name="telephone" type="tel" class="" placeholder="" required>
                <label for="icon_prefix">Telephone</label>
          </div>
          <div class="input-field col s12 m6 l4">
              <input type="date" class="datepicker" placeholder="">
              <label for="icon_prefix">Best day and time for contacting</label>
          </div>
          <div class="input-field col s6 m6 l2">
              <select class="browser-default" name="country">
                  <option value="" disabled selected>Time</option>
                  <option value="08">08 am</option>
                  <option value="09">09 am</option>
                  <option value="10">10 am</option>
                  <option value="11">11 am</option>
                  <option value="12">12 pm</option>
                  <option value="13">1 pm</option>
                  <option value="14">2 pm</option>
                  <option value="15">3 pm</option>
                  <option value="16">4 pm</option>
                  <option value="17">5 pm</option>
                  <option value="18">6 pm</option>
                  <option value="19">7 pm</option>
                  <option value="20">8 pm</option>
                  <option value="21">9 pm</option>
                  <option value="22">10 pm</option>
                  <option value="23">11 pm</option>
              </select>
          </div>
          <div class="input-field col s12 m6 l2">
              <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
              <label for="filled-in-box">contact</label>
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
 </div>
  <!--Fin del frm Contat US-->

  <!-- Page Layout here -->

  </div>
 
      </div>

    </div>


@stop


@section('piedepagina')
@stop