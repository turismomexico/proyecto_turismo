<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
    <nav>
        <button><a href="/">Home</a></button> 
        <button><a href="{{ route('municipios.index') }}">Municipios</a></button>
    </nav>

    <main>
        <h1>@yield('title')</h1>
        @yield('content')
    </main>
</body>
</html>
