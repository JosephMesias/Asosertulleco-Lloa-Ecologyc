<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANEL DE CONTROL</title>
    <link rel="stylesheet" href="{{asset('SitioWeb/css/paneldecontrol.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{asset('SitioWeb/js/script.js')}}"></script>
</head>
<body>
    <header>
        <nav>
            <div class="nav-img">
                <img src="https://placehold.co/100" alt="Logo empresa">
            </div>
            <h3>PANEL DE CONTROL</h3>
        </nav>
    </header>
    <main>
        <div class="opciones">
            <ul class="opc-ul">
                <li><a href="#">
                    INICIO
                </a></li>
                <li><a href="/misvis">
                    MISIÓN Y VISIÓN
                </a></li>
                <li><a href="#servicios">
                    SERVICIOS
                </a></li>
                <li><a href="#footer">
                    REDES Y CONTACTOS
                </a></li>
            </ul>
        </div>
        <div class="contenido">
            @yield('content')
        </div>
    </main>
</body>
</html>