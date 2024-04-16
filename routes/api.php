<?php

use App\Http\Controllers\traincontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/train', [traincontroller::class, 'read']);
Route::post('/train', [traincontroller::class, 'create']);
Route::get('/train/{id}', [traincontroller::class, 'detail']);
Route::put('/train/{id}', [traincontroller::class, 'update']);
Route::delete('/train/{id}', [traincontroller::class, 'destroy']);
