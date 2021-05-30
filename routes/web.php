<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OcamentosController;
use App\Http\Controllers\ContactosController;

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

Route::get('/index', function () {
    return view('index');
});


Route::get('/home', function () {
    return view('home');
});



Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('/servicos', function () {
    return view('servicos');
});

//

Route::get('/orcamentos-save', 'OcamentosController@store')->name('orcamentos.store');
Route::get('/contactos-save', 'ContactosController@store')->name('contactos.store');

Route::get('/sobrenos', function () {
    return view('sobrenos');
});

Route::get('/orcamentos', function () {
    return view('orcamentos');
});
Route::get('/contactos', function () {
    return view('contactos');
});


Route::get('/orcamentos/admin', [App\Http\Controllers\OcamentosController::class, 'index'])->name('orcamentos.admin');

Route::get('/contactos/admin', [App\Http\Controllers\ContactosController::class, 'index'])->name('contactos.admin');




Route::post('/orcamentos-store', [App\Http\Controllers\OcamentosController::class, 'store'])->name('orcamentos.store');
Route::post('/contactos-store', [App\Http\Controllers\ContactosController::class, 'store'])->name('contactos.store');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
