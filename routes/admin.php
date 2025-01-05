<?php

use Illuminate\Support\Facades\Route;
Route::get('admin',[App\Http\Controllers\admin\admin_user::class,'index'])->name('admin');
Route::get('user/create',[App\Http\Controllers\admin\admin_user::class,'create'])->name('create');
Route::post('user/create',[App\Http\Controllers\admin\admin_user::class,'store'])->name('create_post');
Route::get('user/edit{id}',[App\Http\Controllers\admin\admin_user::class,'edit'])->name('edit_post');
Route::match(['put', 'patch'],'user/edit{id}',[App\Http\Controllers\admin\admin_user::class,'edituser'])->name('edituser');
Route::delete('user/destroy{id}',[App\Http\Controllers\admin\admin_user::class,'destroy'])->name('destroy_user');

Route::get('Charts/'  , [App\Http\Controllers\admin\AdminـDashboard::class , 'Charts'])->name('Charts-admin');



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