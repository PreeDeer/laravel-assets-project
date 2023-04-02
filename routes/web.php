<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/employee', function () {
    return view('employee');
})->name('employee');
Route::get('/employeeadd', function () {
    return view('employeeAdd');
})->name('employeeAdd');
Route::get('/add', function () {
    return view('adddurable_articles');
})->name('adddurable_articles');