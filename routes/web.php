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
    return view('app');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/profile', function () {
    return view('profile');
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

Route::get('/rotacomregras/{nome}/{n}', function ($nome, $n) {
    for ($i=0;$i<$n;$i++)  
        echo "Seja bem vindo, $nome!<br>";  
})
->where('nome','[A-Za-z]+')
->where('n','[0-9]+');

Route::prefix('/app')->group(function(){
    
    Route::get('/', function () {
        return view('app');
    })->name('app');

    Route::get('/profile/user', function () {
        return view('user');
    })->name('app.user');
    
    Route::get('/profile', function () {
        return view('profile');
    })->name('app.profile');
});

Route::get('/produtos', function () {
    echo "<ol>";
    echo "<li>Laranja</li>";
    echo "<li>Maça</li>";
    echo "<li>Pera</li>";
    echo "<li>Pessego</li>";
    echo "<li>Jabuticaba</li>";
    echo "</ol>";
})->name('meusprodutos');
Route::redirect('todosprodutos1', 'produtos', 301);

Route::get('todosprodutos2', function(){
    return redirect()->route('meusprodutos');
});