<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\PostController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/home', [HomeController::class, 'index'])->name('home'); 
    Route::get('/food/index', [FoodController::class, 'index'])->name('food.index');
    Route::get('/food/{food}', [FoodController::class, 'show'])->name('food.show');
    Route::get('/foods/create', [FoodController::class, 'create'])->name('food.create');
    Route::get('/foods/rank', [FoodController::class, 'rank'])->name('food.rank');
    Route::post('/food', [FoodController::class,'store'])->name('food.store');
    Route::post('/food/{food}/like', [FoodController::class, 'like'])->name('food.like');
    Route::delete('/food/{food}/like', [FoodController::class, 'unlike'])->name('food.unlike');
    Route::get('/posts/index', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
});


require __DIR__.'/auth.php';
