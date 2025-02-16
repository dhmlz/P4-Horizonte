<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/motos', [TaskController::class, 'motos']);  // Rota para motos
Route::get('/carros', [TaskController::class, 'carros']);  // Rota para carros
Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login'); 
Route::post('login', [AuthenticatedSessionController::class, 'store']); 
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/register', function () {
    return view('');
});
