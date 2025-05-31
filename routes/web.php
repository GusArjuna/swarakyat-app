<?php

use App\Http\Controllers\CompanyProfileController;
use Illuminate\Support\Facades\Route;

Route::controller(CompanyProfileController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/team', 'team');
    Route::get('/testimonials', 'testimonials');
    Route::get('/contact', 'contact');
});
