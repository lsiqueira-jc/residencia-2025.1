<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Tokencontroller;
use App\Http\Controllers\ExemploController;
use App\Http\Controllers\ComentarioController;

use App\Http\Controllers\ProdutoController;




Route::get('/produtos',[ProdutoController::class , 'listar'] );




















// Route::get('/',[ExemploController::class ,'index']);

Route::get('/comentarios',[ComentarioController::class ,'buscar']);
Route::post('/comentarios',[ComentarioController::class ,'comentar']);
Route::get('/comentarios/{id}',[ComentarioController::class ,'buscarPorId']);
Route::put('/comentarios/{id}',[ComentarioController::class ,'atualizar']);
Route::delete('/comentarios/{id}',[ComentarioController::class ,'deletar']);


Route::group(['middleware' => ['JWTToken']], function () {

  Route::post('/',[AgendaController::class ,'cadastrar']);

});



