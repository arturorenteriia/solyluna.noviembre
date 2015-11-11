@extends('admin.control.admin')

@section('logo')
    <a href="#" class="brand-logo center">Properties</a>
@endsection
@section('add')
    @if(Session::has('message'))
        <p class="card-panel white-text teal lighten-2">{{ Session::get('message') }}</p>
    @endif
    <div class="row">
        @foreach($properties as $property)
        <div class="col s12 m4 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('uploads') }}/{{ $property->image }}" height="180px">
                    <span class="card-title">{{ $property->name }}</span>
                </div>
                <div class="card-content">
                    @if($property->status == 0)
                    <li><p class="red-text">Not available</p></li>
                        @else
                        <li><p class="green-text accent-4">Available</p></li>
                    @endif
                    <li><b>Bedrooms: </b> {{ $property->num_bedrooms }}</li>
                    <li><b>Services: </b> {{ $property->service->service }}</li>
                    <li><b>Available rooms: </b></li>
                    <li><b>Type: </b> {{ $property->property_type->property_type }}</li>
                </div>
                <div class="card-action">
                    <a href="{{ route('admin.images.show', $property) }}" class="right-align" title="Agregar Carrusel de imagenes"><i class="material-icons">perm_media</i></a>
                    <a href="{{ route('admin.bedrooms.show',$property) }}" class="right-align" title="Ver Bedrooms"><i class="material-icons">visibility</i></a>
                    <a href="{{ route('admin.properties.bedrooms.create',$property) }}" class="right-align" title="Agregar bedrooms"><i class="material-icons">queue</i></a>
                    <a href="{{ route('admin.properties.characteristic.index',$property) }}" class="right-align" title="Agregar Amenities"><i class="material-icons">label</i></a>
                    <a href="{{ route('admin.properties.edit',$property)}}" class="right-align" title="Editar Propiedad"><i class="material-icons">settings</i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection