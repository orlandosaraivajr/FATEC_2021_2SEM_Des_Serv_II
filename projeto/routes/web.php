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

Route::get('/teste', function(){
    return '<h1>olá </h1>';
    });

Route::get('/ola/{nome?}', function($nome=null) {
    if (isset($nome)){
        return 'Olá '.$nome.' <br>';
    } else {
        return 'Olá anônimo';
    }
});

Route::get('/rotascomregras/{nome}/{n}',
    function($nome, $n){
        for($x=0;$x<$n;$x++){
            echo "Olá $nome <br>";
        }
        })->where('nome','[A-Za-z]+')->where('n','[0-9]+');

Route::prefix('/app')->group(function(){
    Route::get('/', function () {
        return 'App';
    })->name('app');
    Route::get('/user', function () {
        return 'App User';
    })->name('app.user');;
    Route::get('/profile', function () {
        return 'App Profile';
    })->name('app.profile');;
    });

Route::redirect('bla', '/app', 301);