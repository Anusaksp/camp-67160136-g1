<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});
Route::get('/se', function () {
    return view('template.default');
});

Route::post('/mycontroller', [App\Http\Controllers\MyController::class, 'index'])->name('mycontroller');
Route::get('/calculate', [App\Http\Controllers\MyController::class, 'info']);
Route::post('/calculate', [App\Http\Controllers\MyController::class, 'calculate']);


