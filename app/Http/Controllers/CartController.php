<?php

namespace App\Http\Controllers;

use App\Helpers\Cart\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{

/**
 * Displays the user's shopping cart.
 */
public function cart() {
    // Set SEO and OpenGraph meta tags for the cart page
    $this->seo()->setTitle('سبد خرید')
        ->setDescription('سبد خود را اینجا مشاهده کنید')
        ->opengraph()->setTitle('سبد خرید')
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        $cart=Cart::all();
        // dd($cart);
        // $totalPrice=$cart->sum(function($cart){
        //     return $cart['price'] * $cart['quantity'];
        // });
        // $totalDiscust =$cart->sum(function($cart){return ((  $cart['discount_percent'] ?:  $cart['product']->discust)/100 * $cart['price'])* $cart['quantity'];});
        // $FinalPrice = $totalPrice - $totalDiscust;

        $totalPrice=Cart::all()->sum(function($cart){
            return $cart['price'] * $cart['quantity'];
        });
        $totalDiscust =Cart::all()->sum(function($cart){return ((  $cart['discount_percent'] ?:  $cart['product']->discust)/100 * $cart['price'])* $cart['quantity'];});
        $FinalPrice = $totalPrice - $totalDiscust;

        // dd($cart);

        if (count($cart)) {
            // Return the view for the cart page
            return view('public.payment.cart' , compact('cart','totalPrice','FinalPrice','totalDiscust'));
        }
        return view('public.payment.cart-empty');

}


    /**
     * Add a product to the shopping cart.
     * If the product already exists in the cart, update the quantity.
     *
     * @param \App\Models\Product $product
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addToCart(Product $product, Request $request)
    {
        // Check if the product is already in the cart
        if (Cart::has($product)) {
            // Update quantity if the product is already in the cart
            Cart::update($product, $request->quantity);
        } else {
            // Add the product to the cart with its quantity, price, and color
            Cart::put(
                [
                    'quantity' => $request->quantity,
                    'price' => $product->price,
                    'color' => $request->color
                ],
                $product
            );

            // Show success alert after adding the product

            // Redirect back to the previous page
        Alert::success('عملیات موفق آمیز بود',' محصول به سبد خرید شما اضافه شد');        }
        return back();
    }

    /**
     * Remove a product from the cart.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteFromCart(Product $product)
    {
        // Delete the product from the cart
        Cart::delete($product);

        // Redirect back to the previous page
        return back();
    }

    /**
     * Remove all items from the cart.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteAll()
    {
        // Clear the entire cart
        session()->forget('cart');

        // Redirect back to the previous page
        return back();
    }

    /**
     * Update the quantity of a product in the cart.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateCart(Request $request)
    {
        // Get product ID and quantity from the request
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        // Find the product in the cart
        $cartItem = Cart::where('product_id', $productId)->first();

        // Update the quantity if the product exists in the cart
        if ($cartItem) {
            $cartItem->quantity = $quantity;
            $cartItem->save();

            return response()->json(['success' => true]);
        }

        // Return an error if the product is not found
        return response()->json(['success' => false], 400);
    }
}
