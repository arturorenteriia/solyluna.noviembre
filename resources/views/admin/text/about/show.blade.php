@extends('admin.control.admin')

@section('logo')
    <a href="#" class="brand-logo center">Edith text of About Us</a>
@endsection

@section('add')
    <div class="container">
        <div class="row">
            @foreach($edit as $about)
                <a href="{{ route('admin.text.about.edit'), $about->id }}"><blockquote><h4>Editar texto</h4></blockquote></a>
            @endforeach
        </div>
    </div>
@endsection