<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/staff', function () {
    return Inertia::render('Staff');
})->name('staff');

Route::get('/student', function () {
    return Inertia::render('Student');
})->name('student');

Route::get('/post', function () {
    return Inertia::render('Post/Index');
})->name('post');
# API ROUTES
Route::get('/api/assets', 'App\Http\Controllers\AssetController@index');
# Post
Route::get('/api/post', 'App\Http\Controllers\PostController@index');
Route::get('/api/post/{id}', 'App\Http\Controllers\PostController@show');
Route::post('/api/post', 'App\Http\Controllers\PostController@store');
# User
Route::get('/api/user', 'App\Http\Controllers\UserController@index');
Route::get('/api/user/{id}', 'App\Http\Controllers\UserController@show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
