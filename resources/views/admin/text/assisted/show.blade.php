@extends('admin.control.admin')

@section('logo')
    <a href="#" class="brand-logo center">Edith text of Assisted</a>
@endsection

@section('add')
    <div class="container">
        <div class="row">
            @foreach($edit as $assisted)
                <a href="{{ route('admin.text.assisted.edit'), $assisted }}"><blockquote><h4>Editar texto</h4></blockquote></a>
            @endforeach
        </div>
    </div>
@endsection