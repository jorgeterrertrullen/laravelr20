<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;

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


Route::get('/hello', function(){
    echo "Hola mundo <br>";
    for ($i=0; $i < 10; $i++) { 
        echo "$i<br>";
    }
});

// Route::get('/prueba', [PruebaController::class, 'hello']);
// Route::get('/prueba/hello', [PruebaController::class, 'hello']);
Route::get('/prueba/hello/{name?}', [PruebaController::class, 'hello']);
Route::get('/prueba/potencias2', [PruebaController::class, 'potencias2']);

//post, delete, put, patch
//resource --> se traduce por 7 rutas