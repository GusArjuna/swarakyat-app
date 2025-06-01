<?php

use App\Http\Controllers\CompanyProfileController;
use Illuminate\Support\Facades\Route;

Route::controller(CompanyProfileController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/portofolio', 'portofolio');
    Route::get('/portofolio-details/{portofolio}', 'portofolio_details');
    Route::get('/services/{category}', 'service');
});
