<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href='{{ asset('css/styles.css') }}'>
    <title>Protafolio web</title>
</head>
<body style="background-color: #2c2c2c;">
    @section('sidebar')
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Portafolio web</h3>
        </div>

        <ul class="list-unstyled components">
            <img class="rounded mx-auto d-block" style="width: 50%;" src="img/foto_perfil.jpg">
            <p class="text-center">
                Daniel Rodriguez Lopez
                Desarrollador
            </p>
            <li>
                <a href="/inicio">Inicio</a>
            </li>
            <li>
                <a href="/">Sobre mi</a>
            </li>
            <li>
                <a href="/proyectos">Proyectos</a>
            </li>
        </ul>
    </nav>
    @show
    @yield('contenido')
</body>
</html>