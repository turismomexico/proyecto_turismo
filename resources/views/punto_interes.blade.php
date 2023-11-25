

<h1>Descripción de {{ $puntoInteres->Nombre }} </h1>

@if(isset($puntoInteres))
    <p>{{ $puntoInteres->Descripcion }}</p>
@else
    <p>Punto de interés no encontrado</p>
@endif