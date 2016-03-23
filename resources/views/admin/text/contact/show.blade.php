@extends('admin.panel.admin')

@section('logo')
    <a href="#" class="brand-logo center">Edith text of Contact Us</a>
@endsection

@section('add')
    <div class="container">
        <div class="row">
            @foreach($edit as $contact)
                <a href="{{ route('admin.contact.edit', $contact) }}"><blockquote><h4>Editar texto</h4></blockquote></a>
            @endforeach
        </div>
    </div>
    @endsection