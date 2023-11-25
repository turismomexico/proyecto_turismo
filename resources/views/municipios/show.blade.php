<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Municipio</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="municipio-background">

    @if ($municipio)
        <h1>{{ $municipio->Nombre }}</h1>
        <ul>
            <li>Nombre: {{ $municipio->Nombre }}</li>
            <li>Descripción: {{ $municipio->Descripcion }}</li>
            <li>Ubicación: {{ $municipio->Ubicacion }}</li>
            <li>Imagen: <img src="{{ $municipio->Url }}" alt="Imagen del municipio"></li>
        </ul>

        <!-- Mini template para mostrar algunos puntos de interés -->
        <h2>Selecciona tu Próxima Aventura</h2>
        @foreach ($somePois as $poi)
            <p>{{ $poi->Nombre }} - <a href="{{ route('pois.show', ['id' => $poi->Id_Pois]) }}">Detalles</a></p>
        @endforeach

        <a href="{{ route('pois.index') }}"><button>Mostrar más</button></a>

    @else
        <p>No se encontró el municipio con el ID especificado.</p>
    @endif

</body>
</html>
