

<h1>Lista de Municipios</h1>
<ul>
    @foreach($municipios as $municipio)
        <li><a href="/municipios/{{ $municipio->Id_Municipio }}">{{ $municipio->Nombre }}</a></li>
    @endforeach
</ul>
<!--