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

    $users= ["gianni","roberto","carmelino","ugo","dino","calogero",];






    return view('homepage',[
        "users"=>$users
    ]);
})->name("homepage");
