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

Route::options('/{any}', function () {
    return response('', 200)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization');
})->where('any', '.*');

Route::get('/counties', [\App\Http\Controllers\CountyController::class, 'index'])->middleware('cors');
Route::get('/counties/{county}', [\App\Http\Controllers\CountyController::class, 'show']);
Route::get('/counties/{county}/cities', [\App\Http\Controllers\CityController::class, 'index'])->middleware('cors');
Route::post('/new_city', [\App\Http\Controllers\CityController::class, 'store'])->middleware('cors');
Route::post('/delete_city/{city}', [\App\Http\Controllers\CityController::class, 'destroy'])->middleware('cors');;
Route::post('/update_city/{city}', [\App\Http\Controllers\CityController::class, 'update']);



//function asd(string &$val)
//{
//
//}
