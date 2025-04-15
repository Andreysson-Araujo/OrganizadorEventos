<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $nome = 'Andrey';

    $arr = [10,20,30,40,50];

    $arrnomes = ['ZEZINHO', 'CHIQUINHO', 'TOINHO'];
    return view('welcome', 
    [
     'nome' => $nome,
     'arr' => $arr,
     'arrnomes' => $arrnomes
    ]);
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/produtos', function (){
    return view('produtos');
});