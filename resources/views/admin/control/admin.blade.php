<!doctype html>

<head>
    <meta charset="UTF-8">
    <title>Sol&Luna</title>
    <!--Import materialize.css-->
    <link href="{{ asset('/css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/materialize.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
        header, main, footer {
            padding-left: 240px;
        }

        @media only screen and (max-width : 992px) {
            header, main, footer {
                padding-left: 0;
            }
        }
    </style>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header>
    <ul id="slide-out" class="side-nav fixed grey lighten-5">
         <div class="section">
             <center><a href="{{ route('admin.control.index') }}" class="brand-logo"><img src="{{ asset('/images/LogoSolyLuna.png') }}" class="responsive-img" width="120px" alt=""></a></center>
         </div>
         <br><br><br><br>
         <div class="divider"></div>

        @if($user_role->role == 'superadmin')
         <li><a class="dropdown-button" href="#!" data-activates="dropdown7">Text</a></li>
            <ul id="dropdown7" class="dropdown-content">
                <li><a href="{{ route('admin.text.create') }}">Welcome</a></li>
                <li><a href="{{ route('admin.text.independent.create') }}">Independent</a></li>
                <li><a href="{{ route('admin.text.assisted.create') }}">Assisting</a></li>
                <li><a href="{{ route('admin.text.memory.create') }}">Memory</a></li>
                <li><a href="{{ route('admin.text.professional.create') }}">Professional</a></li>
                <li><a href="{{ route('admin.text.medical.create') }}">Medical</a></li>
                <li><a href="{{ route('admin.text.about.create') }}">About us</a></li>
            </ul>
         <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Users</a></li>
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
                <li><a href="{{ route('admin.users.create') }}">Crear Usuarios</a></li>
            </ul>
         <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Resideces</a></li>
            <ul id="dropdown2" class="dropdown-content">
                <li class="divider"></li>
                <li><a href="{{ route('admin.properties.create') }}">Add residences</a></li>
                <li><a href="{{ route('admin.properties.show') }}">Show</a></li>
            </ul>
         <li><a class="dropdown-button" href="#!" data-activates="dropdown3">Edit amenities</a></li>
            <ul id="dropdown3" class="dropdown-content">
                <li class="divider"></li>
                <li><a href="{{ route('admin.ameneties.show') }}">Edit</a></li>
                <li><a class="button" href="{{ route('admin.chef.show') }}" data-activates="dropdown6">Edit Chef</a></li>
            </ul>
            <li><a href="/welcome" target="_blank">Sol&Luna</a></li>
        @endif

        @if($user_role->role == 'realstate')
            <li><a class="dropdown-button" href="#!" data-activates="dropdown5">Residences</a></li>
            <ul id  ="dropdown5" class="dropdown-content">
                <li class="divider"></li>
                <li><a href="{{ route('admin.properties.create') }}">Add residences</a></li>
                <li><a href="{{ route('admin.properties.show') }}">Show</a></li>
            </ul>
            <li><a href="/welcome" target="_blank">Sol&Luna</a></li>
        @endif

        @if($user_role->role == 'admin')
            <li><a class="dropdown-button" href="#!" data-activates="dropdown6">Edit amenities</a></li>
            <ul id="dropdown6" class="dropdown-content">
                <li class="divider"></li>
                 <li><a href="{{ route('admin.ameneties.show') }}">Edit</a></li>
            </ul>
            <li><a class="button" href="{{ route('admin.chef.show') }}" data-activates="dropdown6">Edit Chef</a></li>
            <li><a href="/welcome" target="_blank">Sol&Luna</a></li>
        @endif
         </ul>
    <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only"><i class="small material-icons">view_headline</i></a>
</header>

<main>
    <nav>
       <div class="nav-wrapper light-blue darken-4">
           @yield('logo')
           <ul class="right hide-on-med-and-down">
               <li><a class="dropdown-button" href="#!" data-activates="dropdown4">{{ Auth::user()->last_name }}<i class="material-icons right">arrow_drop_down</i></a></li>
               <!-- Dropdown Structure -->
               <ul id="dropdown4" class="dropdown-content">
                   <li class="divider"></li>
                   <li><a href="{{ route('change') }}">Cambiar password</a></li>
                   <li><a href="{{ url('/auth/logout') }}">log out</a></li>
               </ul>
           </ul>
       </div>
    </nav>
    <br>
    @if(Session::has('message'))
        <p class="card-panel white-text teal lighten-2">{{ Session::get('message') }}</p>
    @endif

    @yield('add')
</main>

<footer>

</footer>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/materialize.js') }}"></script>
<script src="dist/sweetalert.min.js"></script>

@yield('scripts')
<script>
    $(".button-collapse").sideNav();
</script>
<script>
    $(".dropdown-button").dropdown();
</script>

</body>
</html>