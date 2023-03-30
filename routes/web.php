<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\BusController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Operator Routes
Route::Resource('operator', 'App\Http\Controllers\OperatorController');

//  Bus Route
Route::Resource('bus','App\Http\Controllers\BusController');

//  Region Route
Route::Resource('region','App\Http\Controllers\RegionController');

//  Sub Region Route
Route::Resource('sub-region','App\Http\Controllers\Sub_RegionController');