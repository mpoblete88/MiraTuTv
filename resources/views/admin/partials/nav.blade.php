<!-- Fixed navbar -->

<nav class="navbar navbar-toggleable-md navbar-inverse  bg-primary">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">MiraTuTv</a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Usuarios
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('app_admins.index')}}">Administradores</a>
                    <a class="dropdown-item" href="{{route('app_customers.index')}}">Clientes</a>
                    <a class="dropdown-item" href="{{route('users.index')}}">Vendedores</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('system_maintenance.index')}}">Mantenimiento</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Modulos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">About</a>
                    <a class="dropdown-item" href="#">Call to Action</a>
                    <a class="dropdown-item" href="#">Contact</a>
                    <a class="dropdown-item" href="{{route('sliders.index')}}">Sliders</a>
                </div>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Compañia
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('company.index')}}">Datos</a>
                    <a class="dropdown-item" href="#">Sucursales</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Catalogo
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('channel.index')}}">Canales</a>
                    <a class="dropdown-item" href="{{route('plan.index')}}">Planes</a>
                    <a class="dropdown-item" href="#">Servicios</a>
                    <a class="dropdown-item" href="{{route('types.index')}}">Tipo</a>
                    <a class="dropdown-item" href="{{route('category.index')}}">Categoria</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Bienvenido(a) {{\Auth::user()->first_name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Salir</a>
                </div>
            </li>
        </ul>


    </div>
</nav>
