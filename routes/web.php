<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderlistController;
use App\Http\Controllers\Auth\LoginController;




Auth::routes();

//landingpage
Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');
// Route::get('/', 'HomeController@index')->name('landingpage');
Route::get('/property', [PropertyController::class, 'property'])->name('property');
Route::get('/services', 'ServicesController@index')->name('services');
Route::get('/detailproperty/{property}', [PropertyController::class, 'detailproperty'])->name('detailproperty');



Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
#dashboard
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

#property
// Route::resource('/properties', PropertyController::class);

Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
Route::get('/properties/create', [PropertyController::class, 'create'])->name('properties.create');
Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
Route::get('/properties/{property}', [PropertyController::class, 'show'])->name('properties.show');
Route::get('/properties/{property}/edit', [PropertyController::class, 'edit'])->name('properties.edit');
Route::put('/properties/{id}', [PropertyController::class, 'update'])->name('properties.update');
Route::delete('/properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy');

 
#customer
Route::resource('/customers', CustomerController::class);
Route::post('/submit-customer', 'PropertyController@submitCustomer')->name('customer.submit');

// Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
// Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
// Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
// Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');
// Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
// Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
// Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');

#orderlist
Route::resource('/orderlist', OrderlistController::class);

// Route::get('/orderlist', [OrderlistController::class, 'index'])->name('orderlist.index');
// Route::get('/orderlist/create', [OrderlistController::class, 'create'])->name('orderlist.create');
// Route::post('/orderlist', [OrderlistController::class, 'store'])->name('orderlist.store');
// Route::get('/orderlist/{orderlist}', [OrderlistController::class, 'show'])->name('orderlist.show');
// Route::get('/orderlist/{orderlist}/edit', [OrderlistController::class, 'edit'])->name('orderlist.edit');
// Route::put('/orderlist/{orderlist}', [OrderlistController::class, 'update'])->name('orderlist.update');
// Route::delete('/orderlist/{orderlist}', [OrderlistController::class, 'destroy'])->name('orderlist.destroy');


//upload hambar
Route::post('/uploadgambar', [PropertyController::class, 'uploadgambar'])->name('uploadgambar');