@extends('master')
@section('navbar_menu')

<div class="row">
    <div class="col s12 m12 l12 ">
        <div class="card-panel blue">
            <center><span class="white-text" ><h5>MEMORY CARE</h5>
          </span></center>

        </div>
    </div>
</div>

@stop
@section('form_residencias')

<!--Aqui va el contenido de la pagina-->

<div class="row">


    @foreach($properties as $property)
    <div class="col s12 m12 l3">
        <div class="card small hoverable">
            <div class="card-image"  alt="">
                <a href="#" class="brand-logo"> <img src="{{ asset('uploads') }}/{{ $property->image }}" height="180px"></a>
                <a href="#" class="brand-logo"><span class="card-title ">{{ $property->name }}</span></a>
            </div>
            <div class="card-content">
                <a href="#" class="brand-logo">  <p class="grey-text text-darken-2">{{ $property->slogan }}  </p></a>
            </div>
            <div class="card-action">
                {!! Form::open(['route' => 'vistas.vistapropiedad', 'method' => 'POST', 'files' => 'true', 'class' => 'col s12 m12 s3' ]) !!}
                {!! Form::hidden('property_id', $property->id,  ['class' => 'form-control']) !!}

                <center> <button type="submit" class="btn waves-effect waves-light">See More</button></center>

                {!! Form::close() !!}


            </div>
        </div>
    </div>
    @endforeach




</div>




@stop


@section('piepagina')
@stop