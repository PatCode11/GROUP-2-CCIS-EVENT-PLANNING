<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\EventController;

Route::get('/', [FrontController::class, 'index'])->name('index1');
Route::get('/about', [FrontController::class, 'about'])->name('about2');
Route::get('/schedule', [EventController::class, 'eventshow'])->name('schedule3');
Route::get('/speaker', [FrontController::class, 'speaker'])->name('speaker4');
Route::get('/venue', [FrontController::class, 'venue'])->name('venue5');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallery6');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact7');
Route::get('/view', [FrontController::class, 'viewevent'])->name('view');

// Event CRUD
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/view/sched', [EventController::class, 'viewe'])->name('view');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');
