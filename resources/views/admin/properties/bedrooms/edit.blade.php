@extends('admin.control.admin')

@section('logo')
    <a href="#" class="brand-logo center">Bedroom: {{ $bedrooms->bedroom_asigned }}</a>
@endsection

@section('add')
    <div class="row">
        <div class="col s12">
            <div class="col s12 z-depth-1">
                <div class="divider"></div>
                @include('admin.users.partial.messages')
                {!! Form::model($bedrooms, ['route' => ['admin.bedrooms.update', $bedrooms], 'files' => 'true', 'method' => 'PUT' ]) !!}
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="bedroom_asigned" class="validate" value="{{ $bedrooms->bedroom_asigned }}" placeholder="Like Principal">
                        <label for="bedroom_asigned">Name of bedroom</label>
                    </div>
                    <div class="input-field col s12">
                        <select name="status">
                            @if($bedrooms->status == 0)
                            <option value="0">Not available</option>
                            <option value="1">Available </option>
                            @else
                            <option value="1">Available </option>
                            <option value="0">Not available</option>
                            @endif

                        </select>
                        <label for="status">Status</label>
                    </div>
                    <div class="input-field col s12">
                        <select name="beds">
                            <option value="{{ $bedrooms->beds }}"> {{ $bedrooms->beds }}</option>
                            <option value="1">1</option>
                            <option value="2">2 </option>
                            <option value="3">3 </option>
                            <option value="4">4 </option>
                            <option value="5">5 </option>
                            <option value="6">6 </option>
                            <option value="7">7 </option>
                            <option value="8">8 </option>
                        </select>
                        <label for="beds">Beds</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="size_metrics" class="validate" value="{{ $bedrooms->size_metrics }}" placeholder="Like 10x15">
                        <label for="size_metrics">Measures</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" placeholder="" name="description">{{ $bedrooms->description }}</textarea>
                        <label for="description">Description</label>
                    </div>
                    <div class="form-group">
                        {!! Form::file('image', ['class' => 'form-control']) !!}
                    </div>
                    <center><button type="submit" class="btn waves-effect waves-light">Edit Bedroom</button></center>
                </div>
                {!! Form::close() !!}
                {!! Form::open(['route' => ['admin.bedrooms.destroy', $bedrooms], 'method' => 'DELETE' ]) !!}
                <div class="">
                    <button style="text-align:right" type="submit" onclick="return confirm('Seguro que desea eliminar el cuarto')" class="btn waves-effect waves-light red" ALIGN=RIGHT>Eliminar cuarto</button>
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
