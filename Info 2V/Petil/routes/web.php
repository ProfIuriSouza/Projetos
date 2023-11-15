<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvaliacaoController;
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
    return view ('index');
});
Route::view('/agendamento', 'agendamento')->name('agendamento');
Route::view('/cafezinho', 'cafezinho')->name('cafezinho');
Route::view('/caramelo', 'caramelo')->name('caramelo');
Route::view('/compras', 'compras')->name('compras');
Route::view('/flocos', 'flocos')->name('flocos');
Route::view('/pets', 'pets')->name('pets');
Route::get('/index', [AvaliacaoController::class, 'index'])->name('index');
Route::get('/avaliacao/{id}', [AvaliacaoController::class, 'show']);
Route::post('/avaliacao', [AvaliacaoController::class, 'store'])->name('avaliacao');