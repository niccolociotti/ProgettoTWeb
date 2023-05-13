<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
Route::get('/', [PublicController::class,'showHome'])
        ->name('Home');

Route::view('/dovesiamo', 'dovesiamo')
        ->name('dovesiamo');

Route::view('/chisiamo', 'chisiamo')
        ->name('chisiamo');

Route::view('/contatti', 'contatti')
        ->name('contatti');

Route::get('/catalogo', [PublicController::class,'showCatalogo'])
        ->name('catalogo');

Route::get('/login', [PublicController::class,'showLogin'])
        ->name('login');

Route::get('/aziende', [PublicController::class,'showAziende'])
        ->name('aziende');

Route::get('/registrati', [PublicController::class,'showRegistrati'])
        ->name('registrati');
