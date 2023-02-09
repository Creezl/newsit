<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stController;
use App\Http\Controllers\prepController;


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
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/speciality', function () {
    return view('speciality');
});
Route::get('/idv', function () {
    return view('idv');
});
Route::get('/app', function () {
    return view('app');
});
Route::get('studTable',[stController::class, 'index'] );
Route::get('prepTable',[prepController::class, 'index'] );


