<!DOCTYPE html>
<html lang="en">

<head>
    <title>home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-...." crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap">

    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: linear-gradient(to bottom, #2E95F0, #412EF0, #2E58F0, #2ED2F0, #812EF0);">
        <div class="container-fluid" >
        <a class="navbar-brand"><i class="fas fa-1x fa-dragon"></i>Bienvenido</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}"><i class="fas fa-home"></i>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clientes') }}"><i class="fas fa-users"></i>clientes</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fas fa-box"></i>productos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('productos') }}">categorias</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('productos') }}">ingresar productos</a></li>
                </ul>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fas fa-calculator"></i>contable
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('contable') }}">registro</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('contable') }}">arqueo</a></li>
                </ul>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fas fa-shopping-bag"></i>ventas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('ventas') }}">venta</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('ventas') }}">registrar_venta</a></li>
                </ul>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fas fa-shopping-basket"></i>comprar
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('compras') }}">compra</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('compras') }}">registrar_compra</a></li>
                </ul>
            </li>
            </ul>
            <div class="busca">
                <input class="busca" type="search" placeholder="Buscar" aria-label="Search">
                <button class="busca" type="submit"><i class="fas fa-search"></i>Buscar</button>
            </div>

            <a class="salir" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>{{ __('SALIR') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
            </form>



        </div>
        </div>
    </nav>

    <div class="container mt-10" >
        <div class="row">
    <div class="col-4">
        <img src="{{asset ('img/pri.png')}}" alt="Imagen Ejemplo" class="img-fluid">
        <p>Explora nuestro mundo de innovación y diseño futurista. ¡Descubre lo que está por venir!</p>
    </div>
    <div class="col-4 text-center">
        <img src="{{asset ('img/me.jpg')}}" alt="Imagen Ejemplo" class="img-fluid">
        <p>Sumérgete en un universo de tecnología avanzada y conceptos futuristas. La ciencia ficción cobra vida.</p>
    </div>
    <div class="col-4">
        <img src="{{asset ('img/lad.png')}}" alt="Imagen Ejemplo" class="img-fluid">
        <p>Imagina las ciudades del mañana, donde la arquitectura futurista se fusiona con la naturaleza.</p>
    </div>

        </div>
    </div>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <!-- Contenido del Menú Desplegable -->
    </div>

    <!-- Bootstrap y JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
