@extends('admin.panel.admin')

@section('logo')
    <a href="#" class="brand-logo center">CHEF</a>
@endsection

@section('add')
    <div class="row">
        @foreach($properties as $property)
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('uploads') }}/{{ $property->image }}" height="180px">
                        <span class="card-title">{{ $property->name }}</span>
                    </div>
                    <div class="card-content">

                        <li><b>Chef´s Name </b> chef oropeza</li>
                        <li><b>Services: </b> {{ $property->service->service }}</li>
                        <li><b>Available rooms: </b></li>
                        <li><b>Type: </b> {{ $property->property_type->property_type }}</li>
                    </div>
                    <div class="card-action">

                        <a href="{{ route('admin.properties.chef.create', $property) }}" class="right-align" title="Agregar Chef a la propiedad"><i class="material-icons">note_add</i></a>
                        <a href="{{ route('admin.chef.edit',$property) }}" class="right-align" title="Actualizar Chef"><i class="material-icons">loop</i></a>
                        <a href="{{ route('admin.chef.edit',$property) }}" class="right-align" title="Eliminar Chef"><i class="material-icons">delete</i></a>

                   </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection