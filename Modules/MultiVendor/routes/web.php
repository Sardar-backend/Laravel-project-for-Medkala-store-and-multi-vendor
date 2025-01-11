<?php

use App\Http\Middleware\AuthSeller;
use App\Http\Middleware\CheckFine;
use Illuminate\Support\Facades\Route;
use Modules\MultiVendor\Http\Controllers\MultiVendorAuthenticationController;
use Modules\MultiVendor\Http\Controllers\MultiVendorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('seller-login', action: [MultiVendorAuthenticationController::class,'seller_login'])->name('seller-login');
Route::get('seller-authentication', action: [MultiVendorAuthenticationController::class,'seller_authentication'])->name('seller-authentication');
Route::get('seller-guidance', action: [MultiVendorController::class,'seller_guidance'])->name('seller-guidance');
Route::group(['middleware' => AuthSeller::class ] , function () {
    // Route::resource('multivendor', MultiVendorController::class)->names('multivendor');
    // seller
    Route::get('seller-index', action: [MultiVendorController::class,'seller_index'])->name('seller-index');
    Route::get('seller-revenue', action: [MultiVendorController::class,'seller_revenue'])->name('seller-revenue');
    Route::get('seller-checkout', action: [MultiVendorController::class,'seller_checkout'])->name('seller_checkout');
    Route::get('seller-product-insert', action: [MultiVendorController::class,'seller_product_insert'])->name('seller-product-insert')->middleware(CheckFine::class);
    Route::get('seller-product-edit-{id}', action: [MultiVendorController::class,'seller_product_edit'])->name('seller-product-edit')->middleware(CheckFine::class);;
    Route::get('seller-products', action: [MultiVendorController::class,'seller_products'])->name('seller-products');
    Route::get('seller-orders', action: [MultiVendorController::class,'seller_orders'])->name('seller-orders');
    Route::get('seller-fines', action: [MultiVendorController::class,'seller_fines'])->name('seller-fines');
    Route::get('seller-comments', action: [MultiVendorController::class,'seller_comments'])->name('seller-comments');
    Route::get('seller-smart-discount', action: [MultiVendorController::class,'seller_smart_discount'])->name('seller-smart-discount')->middleware(CheckFine::class);
    Route::post('seller-smart-discount', action: [MultiVendorController::class,'seller_smart_discount_post'])->name('seller-smart-discount-post')->middleware(CheckFine::class);
    Route::get('seller-orders-previous', action: [MultiVendorController::class,'seller_orders_previous'])->name('seller-orders-previous');
    Route::get('seller-orders-details-previous-{id}', action: [MultiVendorController::class,'seller_orders_details_previous'])->name( 'seller-orders-details-previous');
    Route::post('/respond/{id}/{type}', [MultiVendorController::class, 'respond'])->name('respond');
});
