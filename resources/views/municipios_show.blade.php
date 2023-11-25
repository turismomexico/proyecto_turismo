<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de {{ $municipio->Nombre }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4 text-center">

    <h2 class="mb-4">¿Qué hay en {{ $municipio->Nombre }}?</h2>

    <ul class="list-group mx-auto" style="max-width: 400px;">
        @foreach($puntosInteres as $puntoInteres)
            <li class="list-group-item">
                <a href="{{ url("/municipios/{$municipio->Id_Municipio}/puntos-interes/{$puntoInteres}") }}">
                    {{ $puntoInteres }}
                </a>
            </li>
        @endforeach
    </ul>

    <h2 class="mt-4">Promociones de {{ $municipio->Nombre }}</h2>
    <ul class="list-group mx-auto" style="max-width: 400px;">
        @foreach($promociones as $promocion)
            <li class="list-group-item">
                <strong>{{ $promocion->Nombre }}</strong> 
                <p>{{ $promocion->Descripcion }}</p>
                <p>ID Municipio: {{ $promocion->Id_Municipio }}</p>
                <p>Slug: {{ $promocion->Slug }}</p>
            </li>
        @endforeach
    </ul>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
