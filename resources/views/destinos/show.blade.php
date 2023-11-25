<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destinos</title>
</head>
<body>
    <h1>Destinos</h1>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($destinos as $destino)
            <tr>
                <td>{{ $destino->Nombre }}</td>
                <td>{{ $destino->Descripcion }}</td>
                <td>{{ $destino->Status }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
