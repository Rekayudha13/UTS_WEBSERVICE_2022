<?php

use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function(){

    Route::get('/biodata', [BiodataController::class, 'index']);
    Route::get('/biodata/create', [BiodataController::class, 'create']);
    Route::post('/biodata/store', [BiodataController::class, 'store']);
    Route::get('/biodata/edit/{id}', [BiodataController::class, 'edit'])->name('edit.biodata');
    Route::post('/biodata/update', [BiodataController::class, 'update'])->name('update.biodata');
    Route::get('/biodata/delete/{id}', [BiodataController::class, 'destroy']);
});
    