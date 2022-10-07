<?php

use App\Http\Controllers\{BoatsController, ContactController, CovidController, HomeController, LegalController, ReviewsController, WeController};
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

//Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('nosotros', [WeController::class, 'index'])->name('we');
Route::get('opiniones', [ReviewsController::class, 'index'])->name('reviews');
Route::get('contacto', [ContactController::class, 'index'])->name('contact');
Route::resource('embarcaciones', BoatsController::class)->only(["index", 'show']);
Route::get('aviso-legal', [LegalController::class, 'index'])->name('legal');
Route::get('covid19', [CovidController::class, 'index'])->name('covid');
