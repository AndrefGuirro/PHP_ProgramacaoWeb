<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return "Olá mundo";
});

Route::get('/form', [FormController::class, 'mostrarForm']);

Route::get('/form', function(){
    return view('form');
});

Route::post('/processarForm', [FormController::class, 'receberValor']);