<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NewController;


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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

Route::get('/new', [App\Http\Controllers\NewController::class, 'new'])->name('new');

Route::post('/races', [App\Http\Controllers\NewController::class, 'races'])->name('races');
Route::post('/categories', [App\Http\Controllers\NewController::class, 'categories'])->name('categories');
Route::post('/professions', [App\Http\Controllers\NewController::class, 'professions'])->name('professions');
Route::post('/age', [App\Http\Controllers\NewController::class, 'age'])->name('age');
Route::post('/height', [App\Http\Controllers\NewController::class, 'height'])->name('height');
Route::post('/hair', [App\Http\Controllers\NewController::class, 'hair'])->name('hair');
Route::post('/eyes', [App\Http\Controllers\NewController::class, 'eyes'])->name('eyes');
Route::post('/status', [App\Http\Controllers\NewController::class, 'status'])->name('status');
Route::post('/choose_eyes', [App\Http\Controllers\NewController::class, 'choose_eyes'])->name('choose_eyes');
Route::post('/characteristics', [App\Http\Controllers\NewController::class, 'characteristics'])->name('characteristics');

/*
Route::post('/new-swap-race', [App\Http\Controllers\NewController::class, 'race'])->name('new-swap-race');
Route::post('/new-swap-class', [App\Http\Controllers\NewController::class, 'category'])->name('new-swap-class');
Route::post('/new-swap-profession', [App\Http\Controllers\NewController::class, 'profession'])->name('new-swap-profession');
Route::post('/new-random-age', [App\Http\Controllers\NewController::class, 'age'])->name('new-random-age');
Route::post('/new-random-height', [App\Http\Controllers\NewController::class, 'height'])->name('new-random-height');
Route::post('/new-random-hair', [App\Http\Controllers\NewController::class, 'hair'])->name('new-random-hair');
Route::post('/new-random-eye', [App\Http\Controllers\NewController::class, 'eye'])->name('new-random-eye');
Route::post('/new-random-characteristic', [App\Http\Controllers\NewController::class, 'characteristic'])->name('new-random-characteristic');
Route::post('/new-random-roll', [App\Http\Controllers\NewController::class, 'characteristic'])->name('new-random-roll');
*/