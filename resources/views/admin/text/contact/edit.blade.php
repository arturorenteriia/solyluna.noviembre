@extends('admin.panel.admin')

@section('logo')
    <a href="#" class="brand-logo center">Edith text of Contact Us</a>
@endsection

@section('add')
    <div class="container">
        <div class="row">
            {!! Form::model($edit, ['route' => ['admin.contact.update', $edit->id], 'method' => 'PUT' ]) !!}
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Title 1</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="title1" value="{{ $edit->title1 }}" class="validate" length="40">
                    <label for="title1">Title1</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 1</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text1" class="materialize-textarea" length="700">{{ $edit->text1 }}</textarea>
                    <label for="text1">Text1</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 2</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text2" class="materialize-textarea" length="700">{{ $edit->text2 }}</textarea>
                    <label for="text2">Text2</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 3</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text3" class="materialize-textarea" length="700">{{ $edit->text3 }}</textarea>
                    <label for="text3">Text3</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <center>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </center>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection