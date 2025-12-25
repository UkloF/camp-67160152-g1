<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('html101');
// });
route::get('/', [App\Http\Controllers\MyController::class, 'firstpage']);

Route::get('/se',function (){
    return view('template.default');
});

Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);
Route::get('/calculate', [App\Http\Controllers\MyController::class, 'info']);
Route::post('/calculate', [App\Http\Controllers\MyController::class, 'calculate']);
Route::post('/', [App\Http\Controllers\MyController::class, 'store']);
