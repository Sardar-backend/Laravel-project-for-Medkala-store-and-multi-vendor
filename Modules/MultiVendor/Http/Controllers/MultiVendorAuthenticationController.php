<?php

namespace Modules\MultiVendor\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class MultiVendorAuthenticationController extends Controller

{

    public function seller_authentication(){
        return view('multivendor::seller.seller-authentication');
    }

    public function seller_login(){
        return view('multivendor::seller.seller-login');
    }
}
