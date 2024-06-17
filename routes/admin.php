<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;



Route::get('admin/login', function () {
    return view('backend.login');
})->name('admin.login');

Route::controller(AdminController::class)
    ->prefix('admin')
    ->as('admin.')
    ->middleware('aut')
    ->group(function () {
        Route::get('/dashboard','dashboard')->name('dashboard');

    });







require __DIR__.'/auth.php';
