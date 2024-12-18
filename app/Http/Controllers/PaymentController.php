<?php

namespace App\Http\Controllers;

use App\Helpers\Cart\Cart;
use App\Jobs\MonitorPendingOrderJob;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\address;

class PaymentController extends Controller
{

    public function checkout(Request $request){
        $this->seo()->setTitle('پیش فاکتور')
        ->setDescription('پیش فاکتور خود را اینجا مشاهده کنید')
        ->opengraph()->setTitle('پیش فاکتور')
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        $all=Cart::all();
        $adrres = address::where('is_selected',1)->first();
        $order=request()->user()->orders()->get()->last();
        $all=$order->products()->with('gallery')->get();
        if (!$adrres) {
            Alert::warning('هشدار','شما آدرسی برای سفارشات منتخب نکرده اید');
            return redirect('/Addresses');
        }
        if (!$all) {
            Alert::warning('هشدار','شما سفارشی ندارید');
            return redirect('/');
        }
            return view('public.payment.checkout',compact('all','adrres','order'));
        }


















    public function checkout_post(Request $request){
        $adrres = address::where('is_selected',1)->first();

        $All = Cart::all();
        $totalPrice=Cart::all()->sum(function($cart){
            return $cart['price'] * $cart['quantity'];
        });
        $totalDiscust =Cart::all()->sum(function($cart){return ((  $cart['discount_percent'] ?:  $cart['product']->discust)/100 * $cart['price'])* $cart['quantity'];});
        $FinalPrice = $totalPrice - $totalDiscust;

        $orders=request()->user()->orders();
        if (!count($orders->wherestatus('unpaid')->get())) {
            $orderitem =$All->mapWithKeys(function($cart){
                return [$cart['product']->id => [ 'quantity' => $cart['quantity']]];
            });
            $order=$orders->create([
                'status' => 'unpaid',
                'address_id'=>$adrres->id,
                'Discount' => $totalDiscust ,
                'price' => $FinalPrice
            ]);

            $products = $order->products();
            $products->sync($orderitem);

            MonitorPendingOrderJob::dispatch($order)->delay(5400);

            return redirect()->route('checkout');
        }
        # لیست محصولات اخرین سفارش میگیره و میبینه باسبد خرید چه فرقی داره اگه فرق داشت اون محصول میده
        $all=$orders->wherestatus('unpaid')->get()->last()->products()->get();
        $listOrder = $all->pluck('id')->toArray();
        $listCart = $All->pluck('product.id')->toArray();
        $notOrderedProducts = array_diff($listCart, $listOrder);
        $notOrderedProducts = collect($notOrderedProducts)->mapWithKeys(function($cart_id) use($All){
            $cart = $All->firstwhere('product.id',$cart_id);
            return [$cart['product']->id => [ 'quantity' => $cart['quantity']]];
        });

        # اگه اون محصول بالایی وجود داشت به سفارش اضافه میکنه ا

        if (count($notOrderedProducts)) {
            $order=$orders->wherestatus('unpaid')->get()->last();
            $order->update(['Discount'=>$order->Discount + $totalDiscust , 'price'=>$order->price + $totalPrice ]);
            $products = $order->products();
            $products->attach($notOrderedProducts);

        }
        # اگه اون محصول نبود  سفارش ایجاد میکنه
        else {
            if (!$adrres) {

                Alert::warning('هشدار','شما آدرسی برای سفارشات منتخب نکرده اید');
                return redirect('/Addresses');
            }
            $orderitem =$All->mapWithKeys(function($cart){
                return [$cart['product']->id => [ 'quantity' => $cart['quantity']]];
            });
            $order=$orders->create([
                'status' => 'unpaid',
                'address_id'=>$adrres->id,
                'price' => $FinalPrice
            ]);
            MonitorPendingOrderJob::dispatch($order)->delay(5400);
            $products = $order->products();
            $products->sync($orderitem);

        }
        session()->forget('cart');
        return redirect()->route('checkout');
    }



    public function UpdateCart ( Request $request ){

        if ($request->status ==="true") {
            Cart::update($request->id, 1);
            return response()->json(['success' => 'مقادیر سبد خرید با موفقیت به روزرسانی شد']);
        }else {
            Cart::update($request->id, -1);
            return response()->json(['success' => 'مقادیر سبد خرید با موفقیت به روزرسانی شد']);

        }
}
}
