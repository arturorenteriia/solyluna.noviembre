@extends('admin.control.admin')

@section('logo')
    <a href="#" class="brand-logo center">Characteristics</a>
@endsection

@section('add')
    <div class="container">
        @include('admin.properties.characteristics.partial.table')
        {!! $amenities->render() !!}
        <br>
        <div class="row card-panel">
            {!! Form::open(['route' => 'admin.properties.characteristic.store', 'method' => 'POST' , 'files' => 'true', 'class' => 'col s12 ' ]) !!}
                @include('admin.properties.characteristics.partial.form')
            {!! Form::close() !!}
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