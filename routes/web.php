<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

Route::get('/', HomeController::class)->name('home');

// Permite administrar las rutas desde el controlador
Route::resource('users', UserController::class);

// Creo una vista (Las vistas son estaticas y no acceden a la base de datos)
Route::view('about','about')->name('about');

Route::get('contact', function () {
    $email = new ContactMailable();
    Mail::to('demg.working@gmail.com')->send($email);

    return 'Email send success.';
});

/*
Route::get('users', [UserController::class, 'index'])->name('users.index');

Route::get('users/create', [UserController::class,'create'])->name('users.create');

Route::post('users/store', [UserController::class,'store'])->name('users.store');

Route::get('users/{user}', [UserController::class,'show'])->name('users.show');

Route::get('users/{user}/edit', [UserController::class,'edit'])->name('users.edit');

Route::put('users/{user}/update', [UserController::class,'update'])->name('users.update');

Route::delete('users/{user}/destroy', [UserController::class,'destroy'])->name('users.destroy');
*/
