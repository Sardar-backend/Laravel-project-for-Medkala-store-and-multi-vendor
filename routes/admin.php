<?php
use Illuminate\Support\Facades\Route;
Route::get('admin',[App\Http\Controllers\admin\admin_user::class,'index']);
Route::get('Users',[App\Http\Controllers\admin\admin_user::class,'index'])->name('Users');
Route::get('user/create',[App\Http\Controllers\admin\admin_user::class,'create'])->name('create');
Route::post('user/create',[App\Http\Controllers\admin\admin_user::class,'store'])->name('create_post');
Route::get('user/edit{id}',[App\Http\Controllers\admin\admin_user::class,'edit'])->name('edit_post');
Route::match(['put', 'patch'],'user/edit{id}',[App\Http\Controllers\admin\admin_user::class,'edituser'])->name('edituser');
Route::delete('user/destroy{id}',[App\Http\Controllers\admin\admin_user::class,'destroy'])->name('destroy_user');

Route::get(uri: 'Charts/'  , action: [App\Http\Controllers\admin\AdminـDashboard::class , 'Charts'])->name('Charts-admin');
Route::get(uri: 'Low-stock-products/'  , action: [App\Http\Controllers\admin\AdminـDashboard::class , 'Lowـstockـproducts'])->name('Low_stock_products');
Route::get(uri: 'admin/editor'  , action: [App\Http\Controllers\admin\AdminـDashboard::class , 'editor'])->name('editor');
Route::post(uri: 'admin/editor'  , action: [App\Http\Controllers\admin\AdminـDashboard::class , 'editor_post']);
Route::resource('admin/Banner',controller: App\Http\Controllers\admin\Admin_Banners::class);
Route::get(uri: 'admin/Logo',action: [App\Http\Controllers\admin\Admin_Banners::class, 'create_logo' ])->name('logo');
Route::post(uri: 'Logo',action: [App\Http\Controllers\admin\Admin_Banners::class, 'create_logo' ])->name('logo.store');

Route::resource('product.gallery',App\Http\Controllers\admin\gallery::class);
Route::resource('admin_Orders',App\Http\Controllers\admin\admin_Orders::class);
Route::resource('admin_PRODUCT',App\Http\Controllers\admin\admin_product::class);
Route::resource('admin_comment',App\Http\Controllers\admin\admin_comment::class);
Route::resource('admin_category',App\Http\Controllers\admin\admin_category::class);
Route::resource('admin_blog',App\Http\Controllers\admin\admin_blog::class);
Route::resource('admin_blogCategory',App\Http\Controllers\admin\admin_blogCategory::class);
Route::resource('ACL/permissions',App\Http\Controllers\admin\AdminPermissions::class);
Route::resource('ACL/Roles',controller: App\Http\Controllers\admin\AdminRole::class);

Route::get('massage',[App\Http\Controllers\admin\admin_comment::class,'massage'])->name('massage');
Route::get('admin/Reports',[App\Http\Controllers\admin\admin_Reports::class,'Reports'])->name('Reports');
Route::get('Commission',[App\Http\Controllers\admin\AdminـDashboard::class,'Commission'])->name('Commission');
Route::post('Commission',[App\Http\Controllers\admin\AdminـDashboard::class,'Commission_poat']);
