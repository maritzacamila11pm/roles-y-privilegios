<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OficinaController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::get('/users/{id}/export-pdf', [UserController::class, 'exportPdf'])->name('users.exportPdf');
    Route::get('roles/export/pdf', [UserController::class, 'exportPdf2'])->name('roles.export.pdf');
    Route::get('/usuarios/excel', [UserController::class, 'exportExcel'])->name('usuarios.excel');
    // Rutas de oficinas
    Route::resource('oficinas', OficinaController::class);
    Route::get('/oficinas/pdf', [OficinaController::class, 'exportPdf'])->name('oficinas.exportPdf');

    // Oroles
    Route::get('roles/export/pdf', [UserController::class, 'exportPdf2'])->name('roles.export.pdf');
});
