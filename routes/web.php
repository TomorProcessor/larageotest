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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/counties', [\App\Http\Controllers\CountyController::class, 'index']);
Route::get('/counties/{county}', [\App\Http\Controllers\CountyController::class, 'show']);
Route::get('/counties/{county}/cities', [\App\Http\Controllers\CityController::class, 'index']);
Route::post('/new_city', [\App\Http\Controllers\CityController::class, 'store']);
Route::post('/delete_city/{city}', [\App\Http\Controllers\CityController::class, 'destroy']);



//function asd(string &$val)
//{
//
//}
