<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VendorController;




Route::group([
    'prefix'=>'vendor'
], function(){
    Route::get('/create' , [VendorController::class, 'pageVendorCreate'])->name('Vendor.CreatePage');
    Route::get('/index' , [VendorController::class, 'pageVendorIndex'])->name('Vendor.IndexPage');
    Route::post('/store' , [VendorController::class, 'processVendorCreate'])->name('Vendor.CreateProcess');
    Route::get('/edit/{id}' , [VendorController::class, 'pageVendorEdit'])->name('Vendor.EditPage');
    Route::post('/update/{id}' , [VendorController::class, 'pageVendorUpdate'])->name('Vendor.UpdateProcess');
    Route::get('/view/{id}' , [VendorController::class, 'pageVendorView'])->name('Vendor.ViewPage');
    Route::post('status/change/{id}', [VendorController::class, 'statusChange'])->name('Vendor.StatusChange');


    Route::get('/{id}/products', [VendorController::class, 'vendorProductList'])->name('Vendor.Products');
    Route::get('list',[VendorController::class, 'vendorList'])->name('Vendor.List');
    Route::get('request/list',[VendorController::class, 'vendorRequestList'])->name('Vendor.Request.List');

});
