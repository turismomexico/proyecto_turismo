<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Municipios</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="municipios-index-background">

    <h1>Listado de Municipios</h1>

    <div class="municipios-container">

        @foreach ($municipios as $municipio)

            <div class="municipio-card">
                <tr>
                    <td><a href="{{ route('municipios.show', ['id' => $municipio->Id_Municipio]) }}">{{ $municipio->Nombre }}</a></td>
                    <td>{{ $municipio->Descripcion }}</td>
                    <td>{{ $municipio->Ubicacion }}</td>
                    <td><img src="{{ $municipio->Url }}" alt="Imagen del municipio"></td>
                </tr>
            </div>

        @endforeach

    </div>

</body>
</html>
