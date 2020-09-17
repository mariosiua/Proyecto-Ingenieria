<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paginasControlador;
use App\Models\Usuario;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario', [paginasControlador::class, 'formulario']);
Route::get('/login', [paginasControlador::class, 'login']);
Route::get('/contacto', [paginasControlador::class, 'contactar']);
Route::get('/galeria', [paginasControlador::class, 'galeria']);

Route::get('/leer', function(){
    $usuario = Usuario::all();
    foreach($usuario as $usuari){
        echo "Nombre: " . $usuari-> usuario . "<br>";
        echo "Contra: " . $usuari-> contrasenna . "<br>";
        echo "Rol: " . $usuari-> rol . "<br>";
        echo "-----------------------------". "<br>";

    }
});

Route::get('/leerRol', function(){
    $usuarios = Usuario::where([['usuario', '12345678'] , ['contrasenna','clave123']])->get();
    return $usuarios;
});

Route::get("/insertar", function(){
    $usuarioInser = new Usuario;
    $usuarioInser->usuario = "9090";
    $usuarioInser->contrasenna = "lilo";
    $usuarioInser->rol = 1;

    $usuarioInser->save();
});
