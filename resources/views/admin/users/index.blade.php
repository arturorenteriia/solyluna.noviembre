@extends('admin.panel.admin')

@section('logo')
    <a href="#" class="brand-logo center">Usuarios</a>
@endsection

@section('add')
    <div class="row">
        <div class="container">
            @include('admin.users.partial.table')
        </div>
    </div>
@endsection