<!DOCTYPE html>
<html>
<head>
    <title>Punto de Interés</title>
</head>
<body>

    <h1>Detalles del Punto de Interés</h1>

    @if ($poi)
        <ul>
            <li>Slug: {{ $poi->Slug }}</li>
            <li>Nombre: {{ $poi->Nombre }}</li>
            <li>Ubicación: {{ $poi->Ubicacion }}</li>
            <li>URL: <a href="{{ $poi->Url }}" target="_blank">{{ $poi->Url }}</a></li>
        </ul>
    @else
        <p>No se encontró el punto de interés con el ID especificado.</p>
    @endif

</body>
</html>
