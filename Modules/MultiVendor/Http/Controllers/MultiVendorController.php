<?php

namespace Modules\MultiVendor\Http\Controllers;

// use App\Http\Controllers\Controller;

use App\Jobs\SmartDiscountJob;
use App\Jobs\TimerJob;
use App\Models\Brand;
use App\Models\comment;
use App\Models\fine;
use App\Models\Order;
use App\Models\Product;
use App\Models\productcategory;
use App\Models\Question;
use Carbon\Carbon;
use DateTime;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Morilog\Jalali\Jalalian;
use Illuminate\Support\Facades\DB;

class MultiVendorController extends Controller
{


    public function seller_guidance(){
        return view('multivendor::seller.seller-guidance');
    }

    public function seller_revenue(){
        $labels = [
            'فروردین', 'اردیبهشت', 'خرداد', 'تیر',
            'مرداد', 'شهریور', 'مهر', 'آبان',
            'آذر', 'دی', 'بهمن', 'اسفند'
        ];
        // dd(Jalalian::now()->getMonth() - 1);
        $counter = 1;
        $data = [];
        $Commission=DB::table('settings')->first()->Commission ;
        foreach ($labels as $value) {
            $month = str_pad($counter, 2, '0', STR_PAD_LEFT); // مقدار 10 را به "10" تبدیل می‌کند
            $sum = request()->user()->orders_sellers()->ofShamsiMonth( Jalalian::now()->getYear(), $month)->wherestatus('paid')->sum('price');
            $SUM=$sum*((100 - $Commission)/100) ;
            $counter ++ ;
            $data[] = $SUM;

        }
        $Sumrevenue=array_sum(array: $data);
        $sum = request()->user()->orders_sellers()->ofShamsiMonth( Jalalian::now()->getYear(), str_pad(Jalalian::now()->getMonth(), 2, '0', STR_PAD_LEFT))->wherestatus('paid')->sum('price');
        $SumThisMonth=$sum*((100 - $Commission)/100);
        $Sum = request()->user()->orders_sellers()->ofShamsiMonth( Jalalian::now()->getYear(), str_pad(Jalalian::now()->getMonth(), 2, '0', STR_PAD_LEFT))->wherestatus('paid')->sum('price');
        $SumLastMonth=$Sum*((100 - $Commission)/100);
        return view('multivendor::seller.seller-revenue'  , compact('SumLastMonth','SumThisMonth','Sumrevenue','labels' , 'data'));
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
        $labels = [
            'فروردین', 'اردیبهشت', 'خرداد', 'تیر',
            'مرداد', 'شهریور', 'مهر', 'آبان',
            'آذر', 'دی', 'بهمن', 'اسفند'
        ];
        $user = request()->user();
        $counter = 1;
        $data = [];
        foreach ($labels as $value) {
            $Commission=DB::table('settings')->first()->Commission ;
            $month = str_pad($counter, 2, '0', STR_PAD_LEFT); // مقدار 10 را به "10" تبدیل می‌کند
            $sum = $user->orders_sellers()->ofShamsiMonth( Jalalian::now()->getYear(), $month)->wherestatus('paid')->sum('price');
            $SUM=$sum*((100 - $Commission)/100);
            $counter ++ ;
            $data[] = $SUM;
        }
        $Sumrevenue=array_sum($data);
        $comments = comment::whereIn('commenttable_id', request()->user()->products()->pluck('id') )->where('commenttable_type' , Product::class)->orderBy('failed_at')->take(4)->get();
        return view('multivendor::seller.seller-index' , compact('Sumrevenue','comments' , 'labels' , 'data'));
    }

    public function seller_products(){
        $products= request()->user()->products()->orderby('failed_at')->get();
        return view('multivendor::seller.seller-products' , compact('products'));
    }
    public function seller_smart_discount(){
        $products= request()->user()->products()->orderby('failed_at')->get();
        return view('multivendor::seller.seller-smart-discount' , compact('products'));
    }


    public function seller_smart_discount_post(Request $request ){
        $data = $request->validate([
            'product' => ['required'] ,
            'discust' => ['required' ],
            'start' => [ 'required' ],
            'end' => ['required']
        ]);
        $product=Product::findOrFail($data['product']);
        $now = new DateTime();
        $interval = $data['start']->totalSeconds($now);
        $time = Carbon::now()->addSeconds($interval);
        SmartDiscountJob::dispatch($product , $data['end'] , $data['discust'])->delay($time);
        return back();
    }
    public function seller_orders(){
        $orders=request()->user()->SellerOrders()->wherestatus('unpaid')->get();
        return view('multivendor::seller.seller-orders' , compact('orders'));
    }
    public function seller_checkout(){
        return view('multivendor::seller.seller-checkout');
    }
    public function seller_fines(){
        $fines=request()->user()->fines()->get();
        return view('multivendor::seller.seller-fines',compact('fines'));
    }
    public function seller_orders_previous(){
        $orders=request()->user()->SellerOrders()->where('status' , '!=' ,  'unpaid')->get();
        return view('multivendor::seller.seller-orders-previous' , compact('orders'));
    }
    public function seller_orders_details_previous(int $id){
        $order=request()->user()->SellerOrders()->find($id)->first();
        $user=$order->user()->first();
        $Address=$order->Addresses()->first();
        return view('multivendor::seller.seller-orders-details-previous' , compact('Address','user','order'));
    }


    public function seller_comments(){
        $user = request()->user();
        $comments =comment::whereHas('commenttable' , function ($query) use($user) {
            $query->where('user_id', $user->id);
        })->get();
        $questions = Question::where('Seller_id', $user->id)->get();
        //  comment::whereIn('commenttable_id', request()->user()->products()->pluck('id') )->where('commenttable_type' , Product::class)->orderBy('failed_at')->get();
        return view('multivendor::seller.seller-comments'  , compact('comments', 'questions'));
    }

    // public function respond ( int $id , string $type , Request $request ) {
    //     $modelClass = "App\\Models\\$type";
    //     app($modelClass)::findOrFail($id)->update(['Answer' => $request->Answer]);
    //     return back();
    // }

    public function respond(int $id, string $type, Request $request)
{
    $data = $request->validate([
        'Answer' => 'required|string|max:5000',
    ]);

    $modelClass = "App\\Models\\$type";


    if (!class_exists($modelClass)) {
        abort(404, "The specified type does not exist.");
    }

    $model = app($modelClass)::findOrFail($id);

    $model->update(['Answer' => $data['Answer']]);
    Alert::success('پاسخ شما ارسال شد', ' پاسخ شما  نمایش داده خواهد شد');
    return back()->with('success', 'Answer updated successfully.');
}

}
