<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\PortofolioCategoryController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::controller(CompanyProfileController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/portofolio', 'portofolio');
    Route::get('/portofolio-details/{portofolio}', 'portofolio_details');
    Route::get('/services/{service}', 'service');
});

Route::controller(AdminDashboardController::class)->group(function () {
    Route::get('/admdashboard', 'index');
});

Route::controller(ServiceController::class)->group(function () {
    Route::get('/admdashboard/services', 'index');
    Route::get('/admdashboard/services/add', 'create');
    Route::post('/admdashboard/services/add', 'store');
    Route::get('/admdashboard/services/{service}/edit', 'edit');
    Route::patch('/admdashboard/services/{service}', 'update');
    Route::delete('/admdashboard/services/{service}', 'destroy');
});

Route::controller(MitraController::class)->group(function () {
    Route::get('/admdashboard/mitra', 'index');
    Route::get('/admdashboard/mitra/add', 'create');
    Route::post('/admdashboard/mitra/add', 'store');
    Route::get('/admdashboard/mitra/{mitra}/edit', 'edit');
    Route::patch('/admdashboard/mitra/{mitra}', 'update');
    Route::delete('/admdashboard/mitra/{mitra}', 'destroy');
});

Route::controller(ClientController::class)->group(function () {
    Route::get('/admdashboard/clients', 'index');
});

Route::controller(APIController::class)->group(function () {
    Route::get('/admdashboard/api', 'index');
});

Route::controller(PortofolioController::class)->group(function () {
    Route::get('/admdashboard/portofolio', 'index');
});

Route::controller(PortofolioCategoryController::class)->group(function () {
    Route::get('/admdashboard/portofolio-categories', 'index');
});