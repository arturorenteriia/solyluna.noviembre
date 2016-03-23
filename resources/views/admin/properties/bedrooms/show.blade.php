@extends('admin.panel.admin')

@section('logo')
    <a href="#" class="brand-logo center">Habitaciones</a>
@endsection

@section('add')
        <div class="row">
            @foreach($properties as $house)
                <div class="col s12 m4 l4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('uploads') }}/{{ $house->image }}" height="180px">
                            <span class="card-title">{{ $house->bedroom_asigned }}</span>
                        </div>
                        <div class="card-content">
                            @if($house->status == 0)
                                <li><p class="red-text">No Disponible</p></li>
                            @else
                                <li><p class="green-text accent-4">Disponible</p></li>
                            @endif
                            <li><b>Camas: </b> {{ $house->beds }}</li>
                            <li><b>Medidas: </b> {{ $house->size_metrics }}</li>
                            <li><p>{{ $house->description }}</li>
                        </div>
                        <div class="card-action">
                            <a href="{{ route('admin.images.show') }}" class="waves-effect waves-light btn  grey lighten-4" title="">Rent</a>
                            <a href="{{ route('admin.bedrooms.edit',$house) }}" class="waves-effect waves-light btn  grey lighten-4" title="">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@endsection