<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Gamer - Andytec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0f172a;
            color: #ffffff;
        }
        .navbar {
            background-color: #1e293b;
        }
        .navbar-brand img {
            height: 40px;
        }
        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link:hover {
            color: #38bdf8 !important;
        }
        .product-card {
            background-color: #1e293b;
            border: 2px solid #38bdf8;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            height: 100%;
        }
        .product-card img {
            max-width: 100%;
            max-height: 120px;
            object-fit: contain;
            margin-bottom: 10px;
        }
        .product-title {
            color: #38bdf8;
            font-size: 1.2rem;
            font-weight: bold;
        }
        .product-category {
            color: #94a3b8;
            font-size: 0.95rem;
        }
        .product-price {
            color: #22d3ee;
            font-weight: bold;
            margin: 10px 0;
            font-size: 1.2rem;
        }
        .btn-cart {
            background-color: #38bdf8;
            color: #0f172a;
            font-weight: bold;
            border: none;
        }
        .btn-cart:hover {
            background-color: #38bdf8;
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
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Nuestros Productos</h2>
            <div class="row g-4">
                @foreach ($listProducts as $producto)
                    <div class="col-md-4 col-lg-4">
                        <div class="product-card">
                            <img src="{{ asset('img/productos/' . $producto['imagen']) }}" alt="{{ $producto['nombre'] }}">
                            <div class="product-title">{{ $producto['nombre'] }}</div>
                            <div class="product-category">Categoría: {{ $producto['categoria'] }}</div>
                            <div class="product-price">${{ $producto['precio'] }}</div>
                            <button class="btn btn-cart">Agregar al Carrito</button>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <footer class="text-center py-4">
        <p>&copy; 2025 Andytec Gaming Store - Todos los derechos reservados</p>
    </footer>

</body>
</html>
