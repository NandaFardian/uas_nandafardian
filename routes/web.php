<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatberatController;
use App\Http\Controllers\MerkController;
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

// Route::get('/', function () {
//     return view('layouts.master');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route alatberat
Route::get('/alatberat',[AlatberatController::class, 'index']);
Route::get('/alatberat/form',[AlatberatController::class, 'create']);
Route::post('/alatberat/store',[AlatberatController::class, 'store']);
Route::get('/alatberat/edit/{id}',[AlatberatController::class, 'edit']);
Route::put('/alatberat/{id}',[AlatberatController::class, 'update']);
Route::delete('/alatberat/{id}',[AlatberatController::class, 'destroy']);

//route merk
Route::get('/merk',[MerkController::class, 'index']);
Route::get('/merk/form',[MerkController::class, 'create']);
Route::post('/merk/store',[MerkController::class, 'store']);
Route::get('/merk/edit/{id}',[MerkController::class, 'edit']);
Route::put('/merk/{id}',[MerkController::class, 'update']);
Route::delete('/merk/{id}',[MerkController::class, 'destroy']);