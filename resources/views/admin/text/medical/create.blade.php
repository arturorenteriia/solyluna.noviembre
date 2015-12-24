@extends('admin.control.admin')

@section('logo')
    <a href="#" class="brand-logo center">Edith text of Medical Tourism</a>
@endsection

@section('add')
    <div class="container">
        <div class="row">
            {!! Form::open(['route' => 'admin.text.medical.store', 'method' => 'POST', 'class' => 'col s12' ]) !!}
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Title</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="title" value="" class="validate" length="40">
                    <label for="title1">Title1</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 1</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text1" class="materialize-textarea"></textarea>
                    <label for="text1">Text1</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 2</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea2" name="text2" class="materialize-textarea"></textarea>
                    <label for="text1">Text2</label>
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