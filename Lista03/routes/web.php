<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ListaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [FormController::class, 'mostrarForm']);

Route::post('/processarForm', [FormController::class, 
                'receberValor']);

Route::get('/exer1', [ListaController::class, 'mostrarExer1']);
Route::post('/respostaexer1', [ListaController::class, 'calcularExer1']);

Route::get('/exer2', [ListaController::class, 'mostrarExer2']);
Route::post('/respostaexer2', [ListaController::class, 'calcularExer2']);

Route::get('/exer3', [ListaController::class, 'mostrarExer3']);
Route::post('/respostaexer3', [ListaController::class, 'calcularExer3']);

Route::get('/exer4', [ListaController::class, 'mostrarExer4']);
Route::post('/respostaexer4', [ListaController::class, 'calcularExer4']);

Route::get('/exer5', [ListaController::class, 'mostrarExer5']);
Route::post('/respostaexer5', [ListaController::class, 'calcularExer5']);

Route::get('/exer6', [ListaController::class, 'mostrarExer6']);
Route::post('/respostaexer6', [ListaController::class, 'calcularExer6']);

Route::get('/exer7', [ListaController::class, 'mostrarExer7']);
Route::post('/respostaexer7', [ListaController::class, 'calcularExer7']);

Route::get('/exer8', [ListaController::class, 'mostrarExer8']);
Route::post('/respostaexer8', [ListaController::class, 'calcularExer8']);

Route::get('/exer9', [ListaController::class, 'mostrarExer9']);
Route::post('/respostaexer9', [ListaController::class, 'calcularExer9']);

Route::get('/exer10', [ListaController::class, 'mostrarExer10']);
Route::post('/respostaexer10', [ListaController::class, 'calcularExer10']);

Route::get('/exer11', [ListaController::class, 'mostrarExer11']);
Route::post('/respostaexer11', [ListaController::class, 'calcularExer11']);

Route::get('/exer12', [ListaController::class, 'mostrarExer12']);
Route::post('/respostaexer12', [ListaController::class, 'calcularExer12']);

Route::get('/exer13', [ListaController::class, 'mostrarExer13']);
Route::post('/respostaexer13', [ListaController::class, 'calcularExer13']);

Route::get('/exer14', [ListaController::class, 'mostrarExer14']);
Route::post('/respostaexer14', [ListaController::class, 'calcularExer14']);

Route::get('/exer15', [ListaController::class, 'mostrarExer15']);
Route::post('/respostaexer15', [ListaController::class, 'calcularExer15']);

Route::get('/exer16', [ListaController::class, 'mostrarExer16']);
Route::post('/respostaexer16', [ListaController::class, 'calcularExer16']);

Route::get('/exer17', [ListaController::class, 'mostrarExer17']);
Route::post('/respostaexer17', [ListaController::class, 'calcularExer17']);

Route::get('/exer18', [ListaController::class, 'mostrarExer18']);
Route::post('/respostaexer18', [ListaController::class, 'calcularExer18']);

Route::get('/exer19', [ListaController::class, 'mostrarExer19']);
Route::post('/respostaexer19', [ListaController::class, 'calcularExer19']);

Route::get('/exer20', [ListaController::class, 'mostrarExer20']);
Route::post('/respostaexer20', [ListaController::class, 'calcularExer20']);


