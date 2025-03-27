<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Tokencontroller;
use App\Http\Controllers\ExemploController;





Route::get('/',[ExemploController::class ,'index']);


Route::group(['middleware' => ['JWTToken']], function () {

  Route::post('/',[AgendaController::class ,'cadastrar']);

});



