<?php

use App\Http\Controllers\API\V1\FormController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('v1/save', [FormController::class,'save'])
    ->name('form.save');