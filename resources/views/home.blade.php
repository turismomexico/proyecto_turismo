<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<!-- Imagen de fondo-->
<body style="background-image: url('/images/fondo.png'); background-size: cover; background-position: center;">


    <nav>
        <button><a href="/">Home</a></button> 
        <button><a href="{{ route('municipios.index') }}">Municipios</a></button> 
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
