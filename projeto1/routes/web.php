<?php

use App\Http\Controllers\LivrosController;
use App\Http\Controllers\ProdutosController;
use Faker\Provider\Lorem;
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

Route::get('/produtos', [LivrosController::class,'index']);

Route::get('/produtos/{id}', [LivrosController::class,'show']);

// Route::get('/detalhes', function () {
//     return view('detalhes');
// });
