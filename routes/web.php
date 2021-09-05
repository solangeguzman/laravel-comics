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
// da web sto chiamando la reale pagine 'home'

// Route::get('/', function () {
//     return view('home');
// });



Route::get('/', function () {
    $comics = config('comics');
    return view('home', [
        'comics'=>$comics
    ]);     
})-> name('homepage'); 

Route::get('/product/{id}', function ($id) {
   $arrayIndex= $id -1;
    $comics= config('comics');

    return view('product', [
        'comicsIndex'=> $comics[$arrayIndex]
    ]);
})->name('product');