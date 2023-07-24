<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ReviewController;

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

// Route::get('/', 'AuthController@index');
Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/loginPost',[UserController::class,'loginPost'])->name('loginPost');
// Route::post('/loginPost', 'UserController@loginPost');
Route::get('/register',[UserController::class,'register'])->name('register');
// Route::get('/register', 'UserController@register');
Route::post('/registerPost',[UserController::class,'registerPost'])->name('registerPost');
// Route::post('/registerPost', 'UserController@registerPost');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
// Route::get('/logout', 'UserController@logout');


Route::resource('article', ArticleController::class);
Route::resource('menu', MenuController::class);
Route::resource('ulasan', ReviewController::class);
Route::resource('home', HomeController::class);
Route::get('home', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');




Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create'); // Tambahkan baris ini
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews/{review}', [ReviewController::class, 'show'])->name('reviews.show');
Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
Route::put('/reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update');
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
