<?php

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
// route defaut

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

//use Illuminate\Routing\Route;

Route::get('/contato', function() {
    return view('fr_teste');
});

Route::get('/', function () {
    return view('/welcome');
});