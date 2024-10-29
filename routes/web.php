<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortyController;

Route::get('/{shortUrl}', [ShortyController::class, 'show'])->name('link.show');