@extends('admin.control.admin')

@section('logo')
    <a href="#" class="brand-logo center">Edit Carousel</a>
@endsection

@section('add')
    <div class="container">
        <div class="row">
            <div class="row">
                <blockquote><h4>Deseas editar el Carousel</h4></blockquote>
            </div>
            @foreach($images as $id)
                <a href="{{ route('admin.images.edit', $id) }}"><h4>Editar</h4></a>
            @endforeach
        </div>
    </div>
@endsection
