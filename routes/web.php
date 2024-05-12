<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'index']);
Route::get('/{post_slug?}', [BlogController::class, 'blogDetail'])->name('blog');
 
Route::post('/like', [BlogController::class, 'fetchLike']);
Route::post('/like/{id}', [BlogController::class, 'handleLike']);
 
Route::post('/dislike', [BlogController::class, 'fetchDislike']);
Route::post('/dislike/{id}', [BlogController::class, 'handleDislike']);
