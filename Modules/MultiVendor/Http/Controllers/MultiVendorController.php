<?php

namespace Modules\MultiVendor\Http\Controllers;

// use App\Http\Controllers\Controller;

use App\Models\Brand;
use App\Models\comment;
use App\Models\Product;
use App\Models\productcategory;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class MultiVendorController extends Controller
{


    public function seller_guidance(){
        return view('multivendor::seller.seller-guidance');
    }

    public function seller_revenue(){
        return view('multivendor::seller.seller-revenue');
    }

    public function seller_product_insert(){
        $categories = productcategory::orderBy('updated_at')->get();
        $Brands = Brand::orderBy('updated_at')->get();
        return view('multivendor::seller.seller-product-insert' , compact('categories', 'Brands'));
    }
    public function seller_product_edit(int $id){
        $product= request()->user()->products()->find($id)->first();
        $categories = productcategory::orderBy('updated_at')->get();
        $Brands = Brand::orderBy('updated_at')->get();
        return view('multivendor::seller.seller-product-edit' , compact('product', 'categories' , 'Brands'));
    }

    public function seller_index(){
        $user = request()->user();
        $comments = comment::whereIn('commenttable_id', request()->user()->products()->pluck('id') )->where('commenttable_type' , Product::class)->orderBy('failed_at')->take(4)->get();
        return view('multivendor::seller.seller-index' , compact('comments'));
    }

    public function seller_products(){
        $products= request()->user()->products()->orderby('failed_at')->get();
        return view('multivendor::seller.seller-products' , compact('products'));
    }
    public function seller_smart_discount(){
        return view('multivendor::seller.seller-smart-discount');
    }
    public function seller_orders(){
        $orders=request()->user()->SellerOrders()->wherestatus('unpaid')->get();
        return view('multivendor::seller.seller-orders' , compact('orders'));
    }
    public function seller_checkout(){
        return view('multivendor::seller.seller-checkout');
    }
    public function seller_fines(){
        return view('multivendor::seller.seller-fines');
    }
    public function seller_orders_previous(){
        $orders=request()->user()->SellerOrders()->where('status' , '!=' ,  'unpaid')->get();
        return view('multivendor::seller.seller-orders-previous' , compact('orders'));
    }
    public function seller_orders_details_previous(int $id){
        $order=request()->user()->SellerOrders()->find($id)->first();
        return view('multivendor::seller.seller-orders-details-previous' , compact('order'));
    }


    public function seller_comments(){
        $user = request()->user();
        $comments = productcategory::all();
        //  comment::whereIn('commenttable_id', request()->user()->products()->pluck('id') )->where('commenttable_type' , Product::class)->orderBy('failed_at')->get();
        $questions = productcategory::all();
        //  comment::whereIn('commenttable_id', request()->user()->products()->pluck('id') )->where('commenttable_type' , Product::class)->orderBy('failed_at')->get();
        return view('multivendor::seller.seller-comments'  , compact('comments', 'questions'));
    }

}
