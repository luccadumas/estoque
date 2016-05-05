<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
   return '<h2 style="color: #269abc;">Primeira lógica com Laravel</h2>';
});

Route::get('segunda', function(){
    return '<h3 style="color: #2ca02c";>Segunda lógica com Laravel</h3>';
});


Route::get('home', function(){
    return '<h1 style="color:#ac2925;">pgHome</h1>';
});

Route::get('login', function(){
   return '<h1 style="color: #c7254e;">pgLogin</h1>';
});

Route::get('/produtos', 'ProdutoController@lista');