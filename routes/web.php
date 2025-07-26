<?php

use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.Frontend.layouts.index');
})->name('home');
//add a new food
Route::get('add-property', [PageController::class, 'addProperty'])->name('add-property');
Route::get('properties', [PageController::class, 'properties'])->name('properties');
Route::get('single-property', [PageController::class, 'singleProperty'])->name('single-property');
Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
