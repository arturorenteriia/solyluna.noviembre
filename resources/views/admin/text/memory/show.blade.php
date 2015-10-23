@extends('admin.control.admin')

@section('logo')
    <a href="#" class="brand-logo center">Edith text of Memory</a>
@endsection

@section('add')
    <div class="container">
        <div class="row">
            @foreach($edit as $memory)
                <a href="{{ route('admin.text.memory.edit'), $memory->id }}"><blockquote><h4>Editar texto</h4></blockquote></a>
            @endforeach
        </div>
    </div>
@endsection