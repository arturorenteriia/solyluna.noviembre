@extends('admin.control.admin')

@section('logo')
    <a href="#" class="brand-logo center">Cambiar password</a>
@endsection

@section('add')
    <div class="container">
        <div class="row">
            {!! Form::open(['route' => 'reset_password', 'method' => 'post']) !!}
                <div class="row">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            {!! Form::password('password', ['class' => 'validate', 'id' => 'icon_prefix']) !!}
                            <label for="icon_prefix">Password Actual</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <input name="clave" id="icon_prefix" type="password" class="validate">
                            <label for="icon_prefix">Password nuevo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <input name="confirmar" id="icon_prefix" type="password" class="validate" required>
                            <label for="icon_prefix">Confirmar Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Cambiar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection