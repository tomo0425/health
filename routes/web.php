<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FoodController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home'); 
Route::get('/food/index', [FoodController::class, 'index'])->name('food.index');
Route::get('/food/{food}', [FoodController::class, 'show'])->name('food.show');
Route::get('/foods/create', [FoodController::class, 'create'])->name('food.create');
Route::post('/food', [FoodController::class,'store'])->name('food.store');