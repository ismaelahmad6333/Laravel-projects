<?php

use App\Http\Controllers\PostController;
use Barryvdh\Debugbar\Facades\Debugbar as FacadesDebugbar;
use DebugBar\DebugBar;
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

Route::get('/blog', [PostController::class, 'index']);
