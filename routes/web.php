<?php

use App\Http\Controllers\comisariaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('comisaria/{comisaria}',[ comisariaController::class,'show' ])->middleware(['auth']);


Route::post('patrulla/new',[comisariaController::class,'nuevo_mensaje'])->middleware(['auth'])->name('nuevo_mensaje');
