@extends('admin.panel.admin')

@section('logo')
    <a href="#" class="brand-logo center">Edith text of Professional Services.</a>
@endsection

@section('add')
    <div class="container">
        <div class="row">
            @foreach($edit as $independent)
                <a href="{{ route('admin.text.professional.edit'), 1 }}"><blockquote><h4>Editar texto</h4></blockquote></a>
            @endforeach
        </div>
    </div>
@endsection