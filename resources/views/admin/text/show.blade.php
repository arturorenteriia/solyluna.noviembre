@extends('admin.control.admin')

@section('logo')
    <a href="#" class="brand-logo center">Edith text of welcome</a>
@endsection

@section('add')
    <div class="container">
        <div class="row">
            @foreach($edit as $independent)
                <a href="{{ route('admin.text.edit', $independent) }}"><blockquote><h4>Editar texto</h4></blockquote></a>
            @endforeach
        </div>
    </div>
    @endsection