<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::controller(CompanyProfileController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/portofolio', 'portofolio');
    Route::get('/portofolio-details/{portofolio}', 'portofolio_details');
    Route::get('/services/{category}', 'service');
});

Route::controller(AdminDashboardController::class)->group(function () {
    Route::get('/admdashboard', 'index');
});

Route::controller(ServiceController::class)->group(function () {
    Route::get('/admdashboard/services', 'index');
});
