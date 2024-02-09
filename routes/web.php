<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('filieres', FiliereController::class)->middleware('auth');
Route::resource('etudiants', EtudiantController::class)->middleware('auth');
Route::resource('users', UserController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/profiles/{user}', [UserController::class, 'show'])->name('profiles.show')->middleware('auth');
Route::get('/profiles/{user}/edit', [UserController::class, 'edit'])->name('profiles.edit')->middleware('auth');
Route::put('/profiles/{user}', [UserController::class, 'update'])->name('profiles.update')->middleware('auth');




Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');

Route::get('/profile/edit-name', [ProfileController::class, 'editName'])->name('profile.editName');
Route::put('/profile/update-name', [ProfileController::class, 'updateName'])->name('profile.updateName');

Route::get('/profile/edit-email', [ProfileController::class, 'editEmail'])->name('profile.editEmail');
Route::put('/profile/update/email', [ProfileController::class, 'updateEmail'])->name('profile.update.email');

Route::get('/profile/edit-password', [ProfileController::class, 'editPassword'])->name('profile.editPassword');
Route::put('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
