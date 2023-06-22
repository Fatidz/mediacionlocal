<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediadorController;

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

// Route::get('/', function (MediadorController $mediador) {
//     $mediadores = $mediador->get();
//     return view('Mediador.index', compact('mediadores'));
// });

Route::get("/Mediador", function () {
    return view('Mediador.index');
});
 
