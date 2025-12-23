<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('events', [EventController::class, 'apiIndex']);
Route::post('events', [EventController::class, 'apiStore']);
Route::put('events/{id}', [EventController::class, 'apiUpdate']);
Route::delete('events/{id}', [EventController::class, 'apiDelete']);
