<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto - Andytec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0f172a;
            color: white;
        }
        .form-container {
            background-color: #1e293b;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            margin: 2rem auto;
            border: 2px solid #38bdf8;
        }
        .form-label {
            color: #38bdf8;
            font-weight: bold;
        }
        .btn-submit {
            background-color: #38bdf8;
            color: #0f172a;
            font-weight: bold;
        }
        .btn-submit:hover {
            background-color: #0ea5e9;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/logos/AndyTec Logo 3.png') }}" alt="Logo AndyTec" width="100">
            </a>            
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="text-center py-4">
        <p>&copy; 2025 Andytec Gaming Store - Todos los derechos reservados</p>
    </footer>

</body>
</html>
