<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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



#Ruta para mostar la vista de los municipios almacenados 
Route::get('/municipios', function () {
    $municipios = DB::table('municipios')->get();

    return view('municipios.index', ['municipios' => $municipios]);
})->name('municipios.index');

#Ruta para mistrar la vista en espesifico de valle de Bravo mediante id

Route::get('/municipios/{id}', function ($id) {
    $municipio = DB::table('municipios')->where('Id_Municipio', $id)->first();

    #Obtiene algunos puntos de interés relacionados con este municipio
    $somePois = DB::table('puntos_interes')->where('Id_Municipios', $id)->limit(3)->get();

    return view('municipios.show', ['municipio' => $municipio, 'somePois' => $somePois]);
})->name('municipios.show');

# Ruta para mostrar Puntos de Interés 
Route::get('/pois', function () {
    $idMunicipio = '2fa4ab94-49c1-4f9d-a535-bdf662abc6c9';
    $pois = DB::table('puntos_interes')->where('Id_Municipios', $idMunicipio)->get();

    return view('pois.index', ['pois' => $pois]);
})->name('pois.index');
#Ruta para mostar una ruta en la que solo muestra pois mediante id
Route::get('/pois/{id}', function ($id) {
    $poi = DB::table('puntos_interes')->where('Id_Pois', $id)->first();

    return view('pois.show', ['poi' => $poi]);
})->name('pois.show');

#ruta para mostrar los destinos respectivos a cada municipio
use Illuminate\Support\Facades\View;

Route::get('/mostrar-destinos', function () {
    $idMunicipio = '2fa4ab94-49c1-4f9d-a535-bdf662abc6c9';
    $destinos = DB::table('destinos')
                ->where('Id_Municipio', $idMunicipio)
                ->select('Id_Municipio', 'Id_Destino', 'Nombre', 'Descripcion', 'Status')
                ->get();

    // Retornar la vista con los destinos
    return View::make('destinos.show', compact('destinos'));
});



