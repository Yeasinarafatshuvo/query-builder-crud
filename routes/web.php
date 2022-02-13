<?php

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


Route::get('/user', [HomeController::class, 'index']);  
Route::post('/user/store', [HomeController::class, 'store'])->name('user.store');  
Route::get('/user/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');  
Route::post('/user/update/{id}', [HomeController::class, 'update'])->name('user.update');  
Route::get('/user/delete/{id}', [HomeController::class, 'delete'])->name('user.delete');  
