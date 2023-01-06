<?php

use App\Http\Controllers\LivrosController;
use Illuminate\Support\Facades\Auth;
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
})->name('root');

Route::get('/produtos', [LivrosController::class,'index'])->name('products.index');
Route::get('/produtos/create', [LivrosController::class,'create'])->name('products.create')->middleware('auth');
Route::post('/produtos', [LivrosController::class,'store'])->name('products.store')->middleware('auth');
Route::get('/produtos/{id}', [LivrosController::class,'show'])->name('products.show');
Route::delete('/produtos/{id}',[LivrosController::class,'destroy'])->name('products.destroy')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
