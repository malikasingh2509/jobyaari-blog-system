<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;

/*
 Frontend Routes
*/

Route::get('/', [FrontendController::class, 'home']);

Route::get('/about', [FrontendController::class, 'about']);

Route::get('/contact', [FrontendController::class, 'contact']);

Route::get('/blog/{id}', [FrontendController::class, 'show'])->name('blog.show');
Route::get('/category/{category}', [FrontendController::class, 'category']);

Route::get('/search', [FrontendController::class, 'search']);

/*
 Admin Protected Routes
*/

Route::middleware(['auth'])->group(function () {

    Route::resource('blogs', BlogController::class);

    Route::get('/dashboard', function () {
    return redirect('/blogs');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

/*
 Auth Routes
*/
Route::get('/', [FrontendController::class, 'home'])->name('frontend.home');

Route::get('/blog/{id}', [FrontendController::class, 'show'])
    ->name('frontend.blog.show');

Route::get('/category/{category}', [FrontendController::class, 'category'])
    ->name('frontend.category');

Route::get('/about', [FrontendController::class, 'about'])
    ->name('frontend.about');

Route::get('/contact', [FrontendController::class, 'contact'])
    ->name('frontend.contact');

Route::get('/search', [FrontendController::class, 'search'])
    ->name('frontend.search');

require __DIR__.'/auth.php';
