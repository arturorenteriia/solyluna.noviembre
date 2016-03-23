@extends('admin.panel.admin')

@section('logo')
    <a href="#" class="brand-logo center">ACTUALIZAR A CHEF</a>
@endsection

@section('add')
    <div class="row">
        <div class="col s12 m8 l6">
            <div class="col s12 z-depth-1">
                 <h5>Uptadte Chef</h5>
                <div class="divider"></div>
                @include('admin.users.partial.messages')
                @foreach($datos as $campo)
                {!! Form::open(['route' => ['admin.chef.update', $campo], 'method' => 'PUT', 'files' => 'true', 'class' => 'col s12' ]) !!}
                <div class="form-group">
                    {!! Form::hidden('property_id', $id,  ['class' => 'form-control']) !!}
                </div>
                <div class="input-field">
                    {!!Form::label('nombre', 'Nombre del chef')!!}
                    {!!Form::text('nombre' , $campo->nombre, ['class' => 'validate'])!!}
                </div>
                <div class="input-field">
                    {!!Form::label('apellidos', 'Apellidos del chef')!!}
                    {!!Form::text('apellidos' , $campo->apellidos, ['class' => 'validate'])!!}
                </div>
                <div class="input-field col s12">
                    <textarea name="acerca"  id="acerca" class="materialize-textarea" length="1000">{{$campo->acerca}}</textarea>
                    <label for="acercas">Acerca del Chef</label>
                </div>
                <div class="input-field col s12">
                    <textarea name="docencia" id="docencia" class="materialize-textarea" length="500">{{$campo->docencia}}</textarea>
                    <label for="docencias">Docencia del Chef</label>
                </div>
                {!!Form::label('image', 'Imagen del Chef ')!!}
                {!!Form::file('image',$campo->image, ['class' => 'validate'])!!}
                <br>
                <br>
                <button class="btn waves-effect waves-light" type="submit" name="action">Actualizar</button>
                {!! Form::close() !!}
                    @endforeach


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

