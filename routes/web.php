<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// 🏠 Portfolio main page
Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');

// 📄 Resume download route (fixed)
Route::get('/resume/download', [PortfolioController::class, 'downloadResume'])->name('resume.download');
