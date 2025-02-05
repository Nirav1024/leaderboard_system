<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;




Route::get('', [DashboardController::class, 'index'])->name('deshbord');
Route::get('userdata/create', [DashboardController::class, 'create'])->name('create.data');
Route::post('create', [DashboardController::class, 'store'])->name('store.data');

Route::get('show/{id?}', [DashboardController::class, 'show'])->name('show.data');
Route::get('edit/{id?}', [DashboardController::class, 'edit'])->name('edit.data');
Route::post('update', [DashboardController::class, 'update'])->name('update.data');
Route::get('delete/{id?}', [DashboardController::class, 'delete'])->name('delete.data');
