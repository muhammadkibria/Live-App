<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\customer\CustomerProfilerController;


Route::group([
    'prefix'=>'customer',
    'middleware' => ['customer']
], function(){

    Route::get('/dashboard',[CustomerDashboardController::class, 'dashboard'])->name('Customer.Dashboard');
    Route::post('/create/shipping', [CustomerProfilerController::class, 'createAddress'])->name('Customer.CreateAddress');
    Route::post('/update/shipping/{id}', [CustomerProfilerController::class, 'updateAddress'])->name('Customer.UpdateAddress');
    Route::post('update/profile', [CustomerProfilerController::class, 'updateProfile'])->name('Customer.UpdateProfile');
    Route::post('update/password', [CustomerProfilerController::class, 'updatePassword'])->name('Customer.UpdatePassword');

});


