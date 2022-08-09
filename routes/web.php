<?php

use App\Http\Controllers\ChickenController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\IngredientController;
use App\Http\Middleware\HandleInertiaRequests;
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

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
    

Route::get('/chickens', [ChickenController::class, 'index']);
Route::get('/ingredients', [IngredientController::class, 'index']);