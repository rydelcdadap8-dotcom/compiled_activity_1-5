<?php
use App\Http\Controllers\FormController;

Route::get('/dashboard', [FormController::class, 'create']);
Route::post('/dashboard', [FormController::class, 'store']);
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
