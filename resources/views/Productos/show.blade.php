<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalle del Producto</title>
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
    .btn-blue {
      background-color: #38bdf8;
      color: #0f172a;
      font-weight: bold;
    }
    footer {
      background-color: #1e293b;
      color: white;
    }
    .product-card {
      background-color: #1e293b;
      border: 2px solid #38bdf8;
      border-radius: 15px;
      padding: 2rem;
    }
    .product-image {
      max-width: 100%;
      border-radius: 10px;
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('inicio') }}">Andytec</a>
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

  <!-- PRODUCT DETAIL -->
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-8 product-card">
        <div class="row">
          <div class="col-md-6">
            <img src="{{ asset('img/productos/producto1.jpg') }}" alt="Imagen del Producto" class="product-image">
          </div>
          <div class="col-md-6">
            <h2 class="mb-3">Nombre del Producto</h2>
            <h5 class="text-info">Categoría: Electrónica</h5>
            <p class="mt-3">Este es un producto de alta calidad diseñado especialmente para gamers. Su diseño ergonómico y su rendimiento lo convierten en la mejor opción.</p>
            <h4 class="mt-4">$199.99</h4>
            <button class="btn btn-blue mt-3">Agregar al Carrito</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="text-center py-4">
    <p>&copy; 2025 Andytec Gaming Store - Todos los derechos reservados</p>
  </footer>

</body>
</html>
