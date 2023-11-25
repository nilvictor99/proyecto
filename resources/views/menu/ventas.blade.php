<!DOCTYPE html>
<html lang="en">

<head>
    <title>ventas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-...." crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/ventas.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: linear-gradient(to bottom, #2E95F0, #412EF0, #2E58F0, #2ED2F0, #812EF0);">
        <div class="container-fluid">
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
            </ul>
        </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="container mt-4">
            <div class="to">
                <h2>Ventas</h2>
                <form action="{{route('ventas')}}" method="post">
                    <div>
                        <label for="descripcion">Descripción:</label>
                        <input type="text" id="descripcion" name="descripcion" required>
                    </div>

                    <div>
                        <label for="codigo">Código:</label>
                        <input type="text" id="codigo" name="codigo" required>
                    </div>

                    <div>
                        <label for="categoria">Categoría:</label>
                        <input type="text" id="categoria" name="categoria" required>
                    </div>

                    <div>
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" id="cantidad" name="cantidad" required>
                    </div>

                    <div>
                        <label for="precio_venta">Precio de Venta:</label>
                        <input type="number" id="precio_venta" name="precio_venta" step="0.01" required>
                    </div>

                    <button type="submit">Registrar Venta</button>
                </form>
            </div>
        </div>
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
