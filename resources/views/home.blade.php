<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zona Turística de Temoaya</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><center>Temoaya Turismo</center></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
</nav>

<!-- Cabecera de la página -->
<header class="jumbotron jumbotron-fluid text-center">
  <div class="container">
    <h1 class="display-4">Descubriendo la belleza de Temoaya</h1>
  </div>
</header>

<!-- Sección de Atractivos Turísticos -->
<section class="container my-5">
  <h2 class="text-center mb-4">Municipios que tienes que visitar</h2>
  <div class="row">
    @foreach($municipios as $municipio)
      <div class="col-md-4">
        <div class="card">
          <img src="https://i0.wp.com/tradicionescultura.com.mx/wp-content/uploads/2023/03/images-1-1.jpeg?fit=640%2C480&ssl=1{{ $loop->index + 1 }}.jpg" class="card-img-top" alt="Atractivo {{ $loop->index + 1 }}">
          <div class="card-body">
            <h5 class="card-title">{{ $municipio->Nombre }}</h5>
            <p class="card-text">{{ $municipio->Descripcion }}</p>
            <a href="/municipios/{{ $municipio->Id_Municipio }}" class="btn btn-primary">Más información</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</section>

<!-- Galería de Imágenes -->

<!-- Pie de página -->
<footer class="bg-dark text-white text-center py-3">
  <p>&copy; 2023 Temoaya Turismo</p>
</footer>

<!-- Scripts de Bootstrap y jQuery (necesarios para el funcionamiento de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
