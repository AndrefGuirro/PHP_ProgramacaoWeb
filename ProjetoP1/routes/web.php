<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('inicial'); // 
});


// Rotas para o CRUD de produtos
Route::resource('produtos', ProdutoController::class);
