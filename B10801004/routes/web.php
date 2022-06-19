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
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;



Route::post('/store', [ServiceController::class, 'store']);
Route::get('/shopcart', [ServiceController::class, 'show']);
Route::post('/create', [ServiceController::class, 'create']);
Route::post('/update', [ServiceController::class, 'update']);
Route::post('/delete', [ServiceController::class, 'delete']);
Route::get('/', function () {
    return view('home');
});


Route::get('/menu', function () {
    return view('menu');
});


Route::get('/menu2', function () {
    return view('menu2');
});

Route::get('/menu3', function () {
    return view('menu3');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/shoppingList', function () {
    return view('shoppingList');
});
