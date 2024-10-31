<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    @yield('css-registro')
    @vite(['resources/js/app.js'])
    

</head>
<body style="background-color: #6fa8ea;">
    
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="{{route('rutaHome')}}">Biblioteca</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white active" aria-current="page" href="{{route('rutaHome')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('rutaLibro')}}">Registro</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </nav>
    

    <div class="contenet">
        @yield('Inicio')
    </div>

    <div>
        @yield('contenidoLibro')
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-left">Centro Literario</div>
            <div class="footer-centrer">© 2024 Biblioteca</div>
            <div class="footer-right">31 de  Octubre, 2024</div>
        </div>
    </footer>

</body>
</html>