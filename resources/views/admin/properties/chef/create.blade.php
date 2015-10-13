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
                   
                    {!!Form::label('nombre', 'Nombre del chef');!!}
                    {!!Form::text('nombre');!!}

                    {!!Form::label('apellido', 'Apellidos del chef');!!}
                    {!!Form::text('apellido');!!}

                    {!!Form::label('acerca', 'Acerca del Chef (historia)');!!}
                    {!!Form::text('acerca');!!}


                    {!!Form::label('docencia', 'docencia del Chef ');!!}
                    {!!Form::text('acerca');!!}

 					{!!Form::label('image', 'Imagen del Chef ');!!}
                    {!!Form::file('image');!!}

                   
                    {!! Form::close() !!}

                     {!!Form::submit('Add chef');!!}
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

