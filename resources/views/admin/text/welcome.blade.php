@extends('admin.control.admin')

@section('logo')
    <a href="#" class="brand-logo center">Edith text of welcome</a>
@endsection

@section('add')
    <div class="container">
        <div class="row">
            {!! Form::open(['route' => 'admin.text.store', 'method' => 'POST' , 'class' => 'col s12' ]) !!}
                <div class="row">
                    <div class="col s12">
                        <blockquote><h5>Title</h5></blockquote>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="title" class="validate" length="40">
                        <label for="title">Title</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <blockquote><h5>First Text</h5></blockquote>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="firstText" class="validate" length="700">
                        <label for="firstText">First Text</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <blockquote><h5>Second Text</h5></blockquote>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="secondText" class="validate" length="700">
                        <label for="secondText">Second Text</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <blockquote><h5>Phrase of image</h5></blockquote>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="phrase" class="validate" length="40">
                        <label for="phrase">Phrase of image</label>
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