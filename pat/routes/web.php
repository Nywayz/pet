<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\ReadController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/ok', [IndexController::class, 'index']);

Route::get('/ok/{color?}', [IndexController::class, 'color']);

Route::get('/read/{series?}/{chapter?}/{page?}', [ReadController::class, 'reader']);

Route::inertia('/about', 'AboutComponent');

Route::prefix('1048596')->group(function () {
    Route::middleware('auth')->group(function (){

        Route::get('/', [IndexController::class, 'color']);

        Route::get('/users/generateToken/{id?}', [TokenController::class, 'generate']);

    });});



require __DIR__.'/auth.php';



// route('dashboard', undefined, undefined, Ziggy)
