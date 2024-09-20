<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

//Home route 

Route::get('/', function () {
    return view('welcome');
});

//Apply middleware on the following routes

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/upload',[FileController::class, 'uploadFile'])->name('upload.file');
Route::delete('/file/delete/{id}',[FileController::class, 'destroy'])->name('file.delete');
Route::get('/vault',[FileController::class, 'showFiles'])->name('vault');
Route::get('/file/download/{id}',[FileController::class, 'download'])->name('file.download');
Route::get('/files/open/uploads/{name}',[FileController::class, 'open'])->name('files.open');
Route::get('/vault/search', [FileController::class, 'search'])->name('files.search');
});

require __DIR__.'/auth.php';



