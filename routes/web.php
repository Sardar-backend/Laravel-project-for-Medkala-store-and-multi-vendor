<?php

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Modules\Discount\Http\Controllers\Frontend\DisableAbleController;
use App\Http\Middleware\adminmiddleware;

use OpenApi\Annotations\Patch;

Route::get('/download',[\App\Http\Controllers\HomeController::class,'download'])->name('download');
// Route::get('/home',[\App\Http\Controllers\HomeController::class,'index'])->name('index');
Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('index');

Route::get('/about',[\App\Http\Controllers\HomeController::class,'about'])->name('about');

Route::get('/contact',[\App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::post('/contact',[\App\Http\Controllers\HomeController::class,'contact_post'])->name('contact_post');



Route::get('/faq',[\App\Http\Controllers\HomeController::class,'faq'])->name('faq');

Route::get('/products',[\App\Http\Controllers\ProductListcontroller::class,'products'])->name('products');

Route::get('/product-{id}',[\App\Http\Controllers\HomeController::class,'product'])->name('product');


Route::get('/Pro-{name}',[\App\Http\Controllers\ProductListcontroller::class,'Cat_products'])->name('Cat_products');

// Route::get('/compare',[\App\Http\Controllers\HomeController::class,'compare'])->name('compare');


Route::get('/checkout',[\App\Http\Controllers\PaymentController::class,'checkout'])->name('checkout')->middleware('auth');

Route::post('/checkout',[\App\Http\Controllers\PaymentController::class,'checkout_post'])->name('checkout_post')->middleware('auth');

Route::get('/auth2',[\App\Http\Controllers\HomeController::class,'getauth2'])->name('auth2');
Route::post('/auth2',[\App\Http\Controllers\HomeController::class,'postauth2'])->name('postauth2');

Route::get('/t_auth2',[\App\Http\Controllers\HomeController::class,'tokengetauth2'])->name('t_auth2');
Route::post('/t_auth2',[\App\Http\Controllers\HomeController::class,'tokenpostauth2']);







// Auth::routes();


// Route::get('/auth/google',[\App\Http\Controllers\Auth\googleAuthcontroller::class,'redirect'])->name('auth.google');
// Route::get('/auth/google/callback',[\App\Http\Controllers\Auth\googleAuthcontroller::class,'callback']);


Route::post('/create_comment',[\App\Http\Controllers\HomeController::class,'craete_comment'])->name('create_comment');


Route::get('/blog',[\App\Http\Controllers\HomeController::class,'blog_list'])->name('blog_list');
Route::get('/blog-single-{id}',[\App\Http\Controllers\HomeController::class,'blog_single'])->name('blog_single');


Route::get('/edit',[\App\Http\Controllers\HomeController::class,'edit_user'])->name('edit_user')->middleware('auth');
Route::patch('/edit_post{id}',[\App\Http\Controllers\HomeController::class,'edit_user_post'])->name('aaaaaaaaaa')->middleware('auth');
// Route::resource('edit_user', App\Http\Controllers\authcontroll\edit_user::class);


Route::post('/like',[\App\Http\Controllers\HomeController::class,'like_post'])->name('like_post')->middleware('auth');

Route::post('/dislike',[\App\Http\Controllers\HomeController::class,'dislike_post'])->name('dislike_post')->middleware('auth');

Route::get('/blogs-{category}',[\App\Http\Controllers\HomeController::class,'blog_category'])->name('blog_category');


// Route::get('/show/{user}/file' , function($file){
//     return Storage::download(request('path'));
// }
// )->name('categorys');



// Authentication
Route::get('/verify_confrim',[\App\Http\Controllers\AuthController::class,'verify_confrim_post'])->middleware('guest')->name('verify_confrim_post');
Route::get('/verify',[\App\Http\Controllers\AuthController::class,'verify'])->middleware('guest');
Route::get('/login',[\App\Http\Controllers\AuthController::class,'login'])->name('login')->middleware('guest');
Route::get('/password',[\App\Http\Controllers\AuthController::class,'password'])->name('password')->middleware('guest');
Route::get('/logout',[\App\Http\Controllers\AuthController::class,'logout'])->name('logout')->middleware('auth');
Route::post('/verify_confrim',[\App\Http\Controllers\AuthController::class,'verify_confrim'])->middleware('guest')->name('verify_confrim');
// Authentication
// //Route::get('/y',[\App\Http\Controllers\authcontroll\authcontorel::class,'log'])->name('x');
// Cart
Route::post('/add_to_card{product}',[\App\Http\Controllers\cartcontroller::class,'addToCart'])->name('add_to_card');
Route::get('/cart',[\App\Http\Controllers\HomeController::class,'cart'])->name('cart')->middleware(['auth','password.confirm']);
Route::delete('/delete_cart{product}',[\App\Http\Controllers\cartcontroller::class,'deleteFromCart'])->name('delete_cart');
Route::post('/delete_cartAll',[\App\Http\Controllers\cartcontroller::class,'deleteAll'])->name('delete_cart_All');
Route::get('/cart',[\App\Http\Controllers\cartcontroller::class,'Cart'])->name('cart');
// Cart

// Profile
Route::post('/selectaddress{id}',[\App\Http\Controllers\HomeController::class,'selectaddress'])->name('selectaddress')->middleware('auth');
Route::get('/Addresses',[\App\Http\Controllers\ProfileController::class,'address'])->name('address')->middleware('auth');
Route::post('/Addresses',[\App\Http\Controllers\ProfileController::class,'address_post'])->name('address_post')->middleware('auth');
Route::get('/factors',[\App\Http\Controllers\ProfileController::class,'factors'])->name('factors')->middleware('auth');
Route::get('/single-factors-{id}',[\App\Http\Controllers\ProfileController::class,'single_factors'])->name('single_factors')->middleware('auth');
Route::get('/message',[\App\Http\Controllers\ProfileController::class,'message'])->name('message')->middleware('auth');
Route::get('/favorites',[\App\Http\Controllers\ProfileController::class,'favorites'])->name('favorites')->middleware('auth');
Route::get('/personal',[\App\Http\Controllers\ProfileController::class,'personal'])->middleware('auth')->name('personal');
Route::post('/deleteaddress/{id}', [\App\Http\Controllers\ProfileController::class, 'delete_address'])->name('delete_address')->middleware('auth');
Route::get('/edit',[\App\Http\Controllers\ProfileController::class,'edit_user'])->name('edit_user')->middleware('auth');
Route::patch('/edit_post{id}',[\App\Http\Controllers\ProfileController::class,'edit_user_post'])->name('edit_user_post')->middleware('auth');
// Profile






Route::get('/products-list',[\App\Http\Controllers\ProductListcontroller::class,'products_list'])->name('products-list');
Route::get('/products',[\App\Http\Controllers\ProductListcontroller::class,'products'])->name('products');








Route::get('/comparision',[\App\Http\Controllers\ComparisionController::class,'comparision'])->name('comparision');
Route::post('/add_to_box{product}',[\App\Http\Controllers\ComparisionController::class,'add_to_box'])->name('add_to_box');
Route::post('/remove_from_box{id}',[\App\Http\Controllers\ComparisionController::class,'remove_from_box'])->name('remove_from_box');











Route::get('rules',[\App\Http\Controllers\HomeController::class,'rules'])->name('rules');







Route::get('/sitemap.xml', function () {
    return response()->file(public_path('sitemap.xml'));
});


// Route::withoutMiddleware([VerifyCsrfToken::class])->group(function () {

//     // Route::post('/graphql', [GraphQLController::class, 'query']);
//     // Route::post('Login_step2',App\Http\Controllers\Api\LoginController::class);
//     Route::delete('Logoutt',App\Http\Controllers\Api\LogoutController::class)->middleware('auth:sanctum');
// });



// ajax
Route::post('/reply_comment',[\App\Http\Controllers\JsRequestController::class,'reply_comment'])->name('reply_comment');
Route::post('/ajax-request', [\App\Http\Controllers\JsRequestController::class, 'handleRequest'])->name('ajax.request');
Route::get('/filter-by-price', action: [\App\Http\Controllers\JsRequestController::class, 'filterByPrice'])->name('products.filter');
Route::get('/UpdateCart', action: [\App\Http\Controllers\JsRequestController::class, 'UpdateCart'])->name('products.UpdateCart');
// ajax


// Route::get('current_user',App\Http\Controllers\Api\GetCurrentUserController::class)->middleware('auth:sanctum');
// Route::get('able', [DisableAbleController::class,'able'])->name('discount.able');


