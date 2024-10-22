<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ptracker',[TrackerController::class, 'index'])->name('tracker.index');
Route::get('/ptracker/create',[TrackerController::class, 'create'])->name('tracker.create');
Route::post('/ptracker',[TrackerController::class, 'store'])->name('tracker.store');
Route::get('/ptracker/{tracker}/edit',[TrackerController::class, 'edit'])->name('tracker.edit');
Route::put('/ptracker/{tracker}/update',[TrackerController::class, 'update'])->name('tracker.update');
Route::delete('/ptracker/{tracker}/destroy',[TrackerController::class, 'destroy'])->name('tracker.destroy');