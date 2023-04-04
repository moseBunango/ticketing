<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\BusController;
use illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'redirect'])->name('home');
Route::get('/out', [App\Http\Controllers\HomeController::class, 'logout'])->name('out');

    Route::Resource('bus','App\Http\Controllers\BusController');
    Route::Resource('operator', 'App\Http\Controllers\OperatorController');
Route::Resource('region','App\Http\Controllers\RegionController');
Route::Resource('sub-region','App\Http\Controllers\Sub_RegionController');