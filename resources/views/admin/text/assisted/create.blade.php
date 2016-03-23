@extends('admin.panel.admin')

@section('logo')
    <a href="#" class="brand-logo center">Edith text of Assisted</a>
@endsection

@section('add')
    <div class="container">
        <div class="row">
            {!! Form::open(['route' => 'admin.text.assisted.store', 'method' => 'POST', 'class' => 'col s12' ]) !!}
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Title 1</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="title1" value="" class="validate" length="40">
                    <label for="title1">Title1</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 1</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text1" class="materialize-textarea" length="700"></textarea>
                    <label for="text1">Text1</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Title 2</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="title2" value="" class="validate" length="40">
                    <label for="title2">Title2</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 2</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text2" class="materialize-textarea" length="700"></textarea>
                    <label for="text2">Text2</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 3</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text3" class="materialize-textarea" length="700"></textarea>
                    <label for="text3">Text3</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 4</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text4" class="materialize-textarea" length="700"></textarea>
                    <label for="text4">Text4</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 5</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text5" class="materialize-textarea" length="700"></textarea>
                    <label for="text5">Text5</label>
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