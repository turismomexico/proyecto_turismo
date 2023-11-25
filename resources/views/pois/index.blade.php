<!DOCTYPE html>
<html>
<head>
    <title>Listado de Puntos de Interés</title>
</head>
<body>

    <h1>Listado de Puntos de Interés</h1>

    <table>
        <thead>
            <tr>
                <th>Slug</th>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>URL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pois as $poi)
                <tr>
                    <td>{{ $poi->Slug }}</td>
                    <td><a href="{{ route('pois.show', ['id' => $poi->Id_Pois]) }}">{{ $poi->Nombre }}</a></td>
                    <td>{{ $poi->Ubicacion }}</td>
                    <td><a href="{{ $poi->Url }}" target="_blank">{{ $poi->Url }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
