<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
   
    return view('welcome');
});
Route::get('/dulce', function () {
    $playlist = DB:: select ('select * from Municipios');
    print_r($playlist);

    }
);


Route::get('/home_', function () {
    $municipios = DB::select('SELECT * FROM Municipios');
    return view('home', ['municipios' => $municipios]);
});



Route::get('/municipios', function () {
    $municipios = DB::select('SELECT * FROM Municipios');
    return view('municipios_index', ['municipios' => $municipios]);
});

Route::get('/municipios/{Id_Municipio}', function ($Id_Municipio) {
    $municipio = DB::table('Municipios')->where('Id_Municipio', $Id_Municipio)->first();

    if (!$municipio) {
        abort(404); 
    }

    $promociones = DB::table('Promos')->where('Id_Municipio', $Id_Municipio)->get();
    
    $puntosInteres = DB::table('Puntos_Interes')->where('Id_Municipios', $Id_Municipio)->pluck('Nombre');

    $descripcion = DB::table('Puntos_Interes')->where('Id_Municipios', $Id_Municipio)->pluck('Descripcion');

    return view('municipios_show', ['municipio' => $municipio, 'promociones' => $promociones, 'puntosInteres' => $puntosInteres]);
});


Route::get('/municipios/{Id_Municipio}/puntos-interes/{Nombre_Poi}', function ($Id_Municipio, $Nombre_Poi) {
    $puntoInteres = DB::table('Puntos_Interes')
        ->where('Nombre', $Nombre_Poi)
        ->first();

    if (!$puntoInteres) {
        abort(404); 
    }

    return view('punto_interes', ['puntoInteres' => $puntoInteres]);
});




