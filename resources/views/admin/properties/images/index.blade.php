@extends('admin.control.admin')

@section('logo')
    <a href="#" class="brand-logo center">Images</a>
@endsection

@section('add')
    <div class="container">
        <div class="row">
            <div class="row">
                <blockquote><h4>Important</h4></blockquote>
                <p>Las fotos se mostraran en orden en que se van agregando.</p>
            </div>
            {!! Form::open(['route' => 'admin.properties.images.store', 'method' => 'POST' , 'files' => 'true', 'class' => 'col s12' ]) !!}
            <div class="row">
                {!! Form::hidden('property_id', $property_id,  ['class' => 'form-control']) !!}
                {!! Form::label('image1', 'image1') !!}
                {!! Form::file('image1', ['class' => 'form-control']) !!}
            </div>
            <div class="divider"></div>
            <div class="row">
                {!! Form::label('image12', 'image2') !!}
                {!! Form::file('image2', ['class' => 'form-control']) !!}
            </div>
            <div class="divider"></div>
            <div class="row">
                {!! Form::label('image3', 'image3') !!}
                {!! Form::file('image3', ['class' => 'form-control']) !!}
            </div>
            <div class="divider"></div>
            <div class="row">
                {!! Form::label('image4', 'image4') !!}
                {!! Form::file('image4', ['class' => 'form-control']) !!}
            </div>
            <div class="divider"></div>
            <div class="row">
                {!! Form::label('image5', 'image5') !!}
                {!! Form::file('image5', ['class' => 'form-control']) !!}
            </div>
            <div class="divider"></div>
            <div class="row">
                {!! Form::label('image6', 'image6') !!}
                {!! Form::file('image6', ['class' => 'form-control']) !!}
            </div>
            <div class="divider"></div>
            <div class="row">
                {!! Form::label('image7', 'image7') !!}
                {!! Form::file('image7', ['class' => 'form-control']) !!}
            </div>
            <div class="divider"></div>
            <div class="row">
                {!! Form::label('image8', 'image8') !!}
                {!! Form::file('image8', ['class' => 'form-control']) !!}
            </div>
            <div class="divider"></div>
            <div class="row">
                {!! Form::label('image9', 'image9') !!}
                {!! Form::file('image9', ['class' => 'form-control']) !!}
            </div>
            <div class="divider"></div>
            <div class="row">
                <center>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </center>
            </div>
        </div>
    </div>
@endsection
