
    @if($errors->any())
        <div class="card-panel  red darken-1">
            <p class="white-text text-darken-2">Por favor corrija los errores: </p>
            <ul>
                @foreach($errors->all() as $error)
                    <li class="white-text text-darken-2">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
