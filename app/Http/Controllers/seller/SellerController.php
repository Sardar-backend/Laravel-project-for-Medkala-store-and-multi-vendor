<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function seller_authentication(){
        return view('public.seller.seller-authentication');
    }

    public function seller_guidance(){
        return view('public.seller.seller-guidance');
    }

    public function seller_revenue(){
        return view('public.seller.seller-revenue');
    }

    public function seller_product_insert(){
        return view('public.seller.seller-product-insert');
    }

    public function seller_products(){
        return view('public.seller.seller-products');
    }
}
