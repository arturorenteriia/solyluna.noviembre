@extends('admin.panel.admin')

@section('logo')
    <a href="#" class="brand-logo center">Agregar Chef</a>
@endsection

@section('add')
        <div class="row">
            <div class="col s12 m8 l6">
                <div class="col s12 z-depth-1">
                    <h5>Agregar Chef</h5>

                    <div class="divider"></div>
                    @include('admin.users.partial.messages')
                    {!! Form::open(['route' => 'admin.properties.chef.store', 'method' => 'POST', 'files' => 'true', 'class' => 'col s12' ]) !!}
                    <div class="form-group">
                        {!! Form::hidden('property_id', $id_property,  ['class' => 'form-control']) !!}
                    </div>
                    <div class="input-field">
                    {!!Form::label('nombre', 'Nombre del chef')!!}
                    {!!Form::text('nombre' , null, ['class' => 'validate'])!!}
                    </div>
                    <div class="input-field">
                    {!!Form::label('apellidos', 'Apellidos del chef')!!}
                    {!!Form::text('apellidos' , null, ['class' => 'validate'])!!}
                    </div>
                    <div class="input-field col s12">
                        <textarea name="acerca" id="acerca" class="materialize-textarea" length="1000"></textarea>
                        <label for="acercas">Acerca del Chef</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea name="docencia" id="docencia" class="materialize-textarea" length="500"></textarea>
                        <label for="docencias">Docencia del Chef</label>
                    </div>
                        {!!Form::label('image', 'Imagen del Chef ')!!}
                        {!!Form::file('image')!!}
                    <br>
                    <br>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Agregar Chef</button>
                    {!! Form::close() !!}


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

