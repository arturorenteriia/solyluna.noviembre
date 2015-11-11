
    @if($errors->any())
        <div class="card-panel teal lighten-2">
            <p>Por favor corrija los errores: </p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
