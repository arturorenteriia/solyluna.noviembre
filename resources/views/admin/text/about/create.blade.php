@extends('admin.control.admin')

@section('logo')
    <a href="#" class="brand-logo center">Edith text of About Us</a>
@endsection

@section('add')
    <div class="container">
        <div class="row">
            {!! Form::open(['route' => 'admin.text.about.store', 'method' => 'POST', 'class' => 'col s12' ]) !!}
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Title 1</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="title1" value="" class="validate" >
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
                    <blockquote><h5>Title 2</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="title2" value="" class="validate">
                    <label for="title2">Title2</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 2</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text2" class="materialize-textarea"></textarea>
                    <label for="text2">Text2</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Title 3</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="title3" value="" class="validate">
                    <label for="title3">Title3</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 3</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text3" class="materialize-textarea"></textarea>
                    <label for="text3">Text3</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Title 4</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="title4" value="" class="validate">
                    <label for="title4">Title4</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Title 5</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="title5" value="" class="validate">
                    <label for="title5">Title5</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 4</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text4" class="materialize-textarea"></textarea>
                    <label for="text4">Text4</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 5</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text5" class="materialize-textarea"></textarea>
                    <label for="text5">Text5</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Title 6</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="title6" value="" class="validate">
                    <label for="title6">Title6</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 6</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text6" class="materialize-textarea"></textarea>
                    <label for="text6">Text6</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 7</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text7" class="materialize-textarea"></textarea>
                    <label for="text7">Text7</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Title 7</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="title7" value="" class="validate">
                    <label for="title7">Title7</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 8</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text8" class="materialize-textarea"></textarea>
                    <label for="text8">Text8</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 9</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text9" class="materialize-textarea"></textarea>
                    <label for="text9">Text9</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Title 8</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="title8" value="" class="validate">
                    <label for="title8">Title8</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 10</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text10" class="materialize-textarea"></textarea>
                    <label for="text10">Text10</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 11</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text11" class="materialize-textarea"></textarea>
                    <label for="text11">Text11</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Title 9</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="title9" value="" class="validate">
                    <label for="title10">Title9</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 12</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text12" class="materialize-textarea"></textarea>
                    <label for="text12">Text12</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 13</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text13" class="materialize-textarea"></textarea>
                    <label for="text13">Text13</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Title 10</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="title10" value="" class="validate">
                    <label for="title10">Title10</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 14</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text14" class="materialize-textarea"></textarea>
                    <label for="text14">Text14</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <blockquote><h5>Text 15</h5></blockquote>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="text15" class="materialize-textarea"></textarea>
                    <label for="text15">Text15</label>
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