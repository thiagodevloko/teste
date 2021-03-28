<?php

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

Route::get('/teste', function () {
    echo "Olá Seja bem vindo!!!";
});

Route::get('/teste/{nome}', function ($nome) {
    echo "Olá Seja bem vindo, " . $nome;
});

Route::get('/seunome/{nome?}', function ($nome=null) {
    if (isset ($nome))
    echo "Olá Seja bem vindo, " . $nome;
    else
    echo "voce nao digitou nenhum nome";
});
