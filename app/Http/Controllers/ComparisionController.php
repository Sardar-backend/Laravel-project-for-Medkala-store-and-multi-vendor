<?php

namespace App\Http\Controllers;

use App\Helpers\Comparison\Comparison;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ComparisionController extends Controller
{
    public function comparision(){
        // $all=Comparison::remove(5);
        $all=Comparison::all();
        $productAttributes =$all->map(function($t){
            return $t->attribute()->get();
        });
        $commonAttributes = collect(array_intersect_key(...$productAttributes->toArray()));
        $r=$commonAttributes->map(function($t){
            return $t['id'];
        });

        return view('public.product-comparision' , compact('all' ,'commonAttributes')) ;
    }

        /**
     * Add a product to the shopping cart.
     * If the product already exists in the cart, update the quantity.
     *
     * @param \App\Models\Product $product
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add_to_box(Product $product, Request $request)
    {


            // Add the product to the cart with its quantity, price, and color
            Comparison::put($product);




        Alert::success('عملیات موفق آمیز بود',' محصول به سبد خرید شما اضافه شد');
        return back();
    }


    public function remove_from_box(int $id){
        Comparison::remove($id);
        return back();
    }
}
