<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Noticias_DestaquesController;
use App\Http\Controllers\ExemploController;


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

// GET |POST | PUT| DELETE

Route::get('/',[ExemploController::class,'index']);
// Route::post('/',[ExemploController::class,'cadastrar']);


// Route::get('/', function () {
//     return view('exemplo');
// });


// Route::get('/cadastrar',[Noticias_DestaquesController::class,'novo']);
