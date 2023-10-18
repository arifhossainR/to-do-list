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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('dashboard',[\App\Http\Controllers\DashBoardController::class,'index'])->middleware('auth')->name('dashboard');
Route::get('create-task',[\App\Http\Controllers\DashBoardController::class,'createTask'])->middleware('auth')->name('createTask');
Route::get('edit-task/{Todo}',[\App\Http\Controllers\DashBoardController::class,'editTask'])->middleware('auth')->name('editTask');
Route::post('store-task',[\App\Http\Controllers\DashBoardController::class,'StoreTask'])->middleware('auth')->name('storeTask');
Route::get('delete/{Todo}',[\App\Http\Controllers\DashBoardController::class,'delete'])->middleware('auth')->name('deleteTask');
Route::post('login',[\App\Http\Controllers\AuthController::class,'loginPost'])->name('loginPost');
Route::get('logout',[\App\Http\Controllers\AuthController::class,'logout'])->name('logout');
