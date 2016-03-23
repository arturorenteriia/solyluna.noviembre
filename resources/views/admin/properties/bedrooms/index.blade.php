@extends('admin.panel.admin')

@section('logo')
    <a href="#" class="brand-logo center">Habitaciones</a>
@endsection

@section('add')
        <div class="row">
            <div class="col s12">
                <div class="col s12 z-depth-1">
                    <h5>{{ $bedroom->name }} Habitaciones</h5>
                    <div class="divider"></div>
                    @include('admin.users.partial.messages')
                    {!! Form::open(['route' => 'admin.properties.bedrooms.store', 'method' => 'POST', 'files' => 'true', 'class' => 'col s12' ]) !!}
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="hidden" name="property_id" value="{{ $bedroom->id }}" class="validate">
                        </div>
                        <div class="input-field col s12">
                            <input type="text" name="bedroom_asigned" class="validate" placeholder="Like Principal">
                            <label for="bedroom_asigned">Nombre de la Habitacion</label>
                        </div>
                        <div class="input-field col s12">
                            <select name="status">
                                <option value="" disabled selected></option>
                                <option value="0">No Disponible</option>
                                <option value="1">Disponible </option>
                            </select>
                            <label for="status">Estatus</label>
                        </div>
                        <div class="input-field col s12">
                            <select name="beds">
                                <option value="" disabled selected></option>
                                <option value="1">1</option>
                                <option value="2">2 </option>
                                <option value="3">3 </option>
                                <option value="4">4 </option>
                                                        </select>
                            <label for="beds">Camas</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" name="size_metrics" class="validate" placeholder="Like 10x15">
                            <label for="size_metrics">Medidas</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" placeholder="" name="description"></textarea>
                            <label for="description">Descripción</label>
                        </div>
                        <div class="form-group">
                            {!! Form::file('image', ['class' => 'form-control']) !!}
                        </div>
                        <center><button type="submit" class="btn waves-effect waves-light">Crear</button></center>
                    </div>
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

