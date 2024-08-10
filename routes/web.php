<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderlistController;
use App\Http\Controllers\Auth\LoginController;




Auth::routes();

//protectroutes

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'index'])->name('landing.page');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('role:admin')->name('dashboard');


//landingpage
Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');

Route::get('/property', [PropertyController::class, 'property'])->name('property');
Route::get('/services', 'ServicesController@index')->name('services');
Route::get('/detailproperty/{property}', [PropertyController::class, 'detailproperty'])->name('detailproperty');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
#dashboard



// logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Dashboard accessible only to admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    
    // routes/web.php
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //property
    Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
    Route::get('/properties/create', [PropertyController::class, 'create'])->name('properties.create');
    Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
    Route::get('/properties/{property}', [PropertyController::class, 'show'])->name('properties.show');
    Route::get('/properties/{property}/edit', [PropertyController::class, 'edit'])->name('properties.edit');
    Route::put('/properties/{id}', [PropertyController::class, 'update'])->name('properties.update');
    Route::delete('/properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy');

    //customer
    Route::resource('/customers', CustomerController::class);

    //orderlist
    Route::resource('/orderlist', OrderlistController::class);

    //upload hambar
    Route::post('/uploadgambar', [PropertyController::class, 'uploadgambar'])->name('uploadgambar');
});




