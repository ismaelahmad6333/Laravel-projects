<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Barryvdh\Debugbar\Facades\Debugbar as FacadesDebugbar;
use DebugBar\DebugBar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/


Route::prefix('blog',)->group(function () {
    // GET
    Route::get('/', [PostController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [PostController::class, 'show'])->whereNumber('id');

    //POST
    Route::get('/create', [PostController::class, 'create'])->name('blog.create');
    Route::post('/', [PostController::class, 'store'])->name('blog.store');

    //PUT or PATCH
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}', [PostController::class, 'update'])->name('blog.update');

    //DELTE
    Route::delete('/{id}', [PostController::class, 'destroy'])->name('blog.destroy');
});

//FALLBACK ROUT OR 404 PAGE NOT FOUND
Route::fallback(FallbackController::class);


//MULTIPLE HTTP verbs
// Route::match(['GET', 'POST'], '/blog', [PostController::class, 'index']);
//OR
// Route::any('/blog', [PostController::class, 'index']);



// Route::resource('/blog', PostController::class);

// ROute for invoke method
Route::get("/", HomeController::class);
