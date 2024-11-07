<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'is_gestor'])->group(function () {
Route::resource('salas', SalaController::class);
});



Route::middleware(['auth', 'role:gestor'])->group(function () {
  
});

