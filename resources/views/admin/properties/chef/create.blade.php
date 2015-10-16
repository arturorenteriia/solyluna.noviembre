@extends('admin.control.admin')

@section('logo')
    <a href="#" class="brand-logo center">ADD A CHEF</a>
@endsection

@section('add')
        <div class="row">
            <div class="col s12 m8 l6">
                <div class="col s12 z-depth-1">
                    <h5>CHEF</h5>

                    <div class="divider"></div>
                    @include('admin.users.partial.messages')
                    {!! Form::open(['route' => 'admin.gastronomy.store', 'method' => 'POST', 'files' => 'true', 'class' => 'col s12' ]) !!}
                    <div class="input-field">
                    {!!Form::label('nombre', 'Nombre del chef')!!}
                    {!!Form::text('nombre' , null, ['class' => 'validate'])!!}
                    </div>
                    <div class="input-field">
                    {!!Form::label('nombre', 'Nombre del chef')!!}
                    {!!Form::text('nombre' , null, ['class' => 'validate'])!!}
                    </div>
                    <div class="input-field">
                    {!!Form::label('nombre', 'Nombre del chef')!!}
                    {!!Form::text('nombre' , null, ['class' => 'validate'])!!}
                    </div>
                    <div class="input-field">
                    {!!Form::label('nombre', 'Nombre del chef')!!}
                    {!!Form::text('nombre' , null, ['class' => 'validate'])!!}
                    </div>
 					{!!Form::label('image', 'Imagen del Chef ')!!}
                    {!!Form::file('image')!!}

                   
                    {!! Form::close() !!}

                     {!!Form::submit('Add chef')!!}
                </div>
            </div>
        </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
@endsection

