<?php

use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;
use App\Http\Controllers;
use App\Http\Controllers\MeuControlador;
use App\Http\Controllers\ClienteControlador;


Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos', function () {
    return view('outras.produtos');
})->name('produtos');

Route::get('departamentos', function () {
    return view('outras.departamentos');
})->name('departamentos');

//Route::get('produtos', [MeuControlador::class, 'produtos']);
Route::get('nome', [MeuControlador::class, 'getNome']);
Route::get('idade', [MeuControlador::class, 'getIdade']);
Route::get('multiplicar/{n1}/{n2}', [MeuControlador::class, 'multiplicar']);

// Route::resource('clientes', [ClienteControlador::class]);
Route::resource('clientes', 'App\Http\Controllers\ClienteControlador');