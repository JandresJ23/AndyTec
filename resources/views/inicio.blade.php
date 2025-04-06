<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andytec Gaming Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0f172a;
            color: #ffffff;
        }
        .navbar {
            background-color: #1e293b;
        }
        .navbar-brand {
            color: #38bdf8 !important;
            font-weight: bold;
        }
        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link:hover {
            color: #38bdf8 !important;
        }
        .hero-section {
            background: url('https://wallpaperaccess.com/full/2449683.jpg') no-repeat center center/cover;
            color: white;
            padding: 6rem 2rem;
            text-align: center;
        }
        .hero-section h1 span {
            color: #38bdf8;
        }
        .category-box {
            background-color: #1e293b;
            border: 2px solid #38bdf8;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            color: #ffffff;
        }
        .category-box h5 {
            color: #38bdf8;
        }
        .btn-blue {
            background-color: #38bdf8;
            color: #0f172a;
            font-weight: bold;
        }
        footer {
            background-color: #1e293b;
            color: white;
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

    <section class="hero-section">
        <div class="container">
            <h1 class="display-5 fw-bold">Equípate como un <span>Gamer Pro</span></h1>
            <p class="lead mt-3">Descubre lo último en tecnología gamer solo en Andytec</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Categorías Gamer</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="category-box">
                        <h5>Computadores Gaming</h5>
                        <p>Potencia, velocidad y rendimiento para dominar cualquier juego.</p>
                        <a href="#" class="btn btn-blue">Ver más</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-box">
                        <h5>Periféricos</h5>
                        <p>Teclados mecánicos, mouse RGB y mucho más para tu setup ideal.</p>
                        <a href="#" class="btn btn-blue">Ver más</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-box">
                        <h5>Audio y Streaming</h5>
                        <p>Micrófonos, audífonos y equipos de grabación de alta calidad.</p>
                        <a href="#" class="btn btn-blue">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center py-4">
        <p>&copy; 2025 Andytec Gaming Store - Todos los derechos reservados</p>
    </footer>
</body>
</html>
