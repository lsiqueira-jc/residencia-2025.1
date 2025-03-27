<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AgendaRequest;

class ExemploController extends Controller
{
    public function index(){
        return view('exemplo');
    }


}
