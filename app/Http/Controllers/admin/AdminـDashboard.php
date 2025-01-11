<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Morilog\Jalali\Jalalian;
use Illuminate\Support\Facades\DB;

class AdminـDashboard extends Controller
{
    public function Charts(){
        $labels = [
            'فروردین', 'اردیبهشت', 'خرداد', 'تیر',
            'مرداد', 'شهریور', 'مهر', 'آبان',
            'آذر', 'دی', 'بهمن', 'اسفند'
        ];
        $user = request()->user();

        $counter = 1;
        $data_sell = [];
        $data_revenue = [] ;
        foreach ($labels as $value) {
            $month = str_pad($counter, 2, '0', STR_PAD_LEFT);
            $sum = Order::ofShamsiMonth( Jalalian::now()->getYear(), $month)->wherestatus('paid')->count();
            $counter ++ ;
            $data_sell[] = $sum;
        }
        $counter = 1;
        foreach ($labels as $value) {
            $month = str_pad($counter, 2, '0', STR_PAD_LEFT);
            $sum = Order::ofShamsiMonth( Jalalian::now()->getYear(), $month)->wherestatus('paid')->sum('price');
            $counter ++ ;
            $data_revenue[] = $sum;
        }
        $counter = 1; // مقدار اولیه برای شمارش ماه‌ها
        $data_user = [];
        foreach ($labels as $value) {
            $month = str_pad($counter, 2, '0', STR_PAD_LEFT);
            $sum = User::ofShamsiMonth(Jalalian::now()->getYear(), $month)->count();
            $counter++;
            $data_user[] = $sum; // افزودن به آرایه
        }
        $UserCount=User::count();
        $countNewOrder=Order::wherestatus('unpaid')->where('created_at','>' , Carbon::now()->subDays(2))->count();
        // $visits = Cache::get('visits_' . Carbon::today()->format(format: 'Y-m-d'), 0);
        // dd($data_revenue , $data_user , $data_sell );
        $data = [1,2,3];
        return view('admin.componnets.Dashboard.Charts'  , compact('countNewOrder','UserCount','labels' , 'data' , 'data_user' , 'data_revenue' , 'data_sell'));
    }






    public function Lowـstockـproducts(){
        $this->seo()->setTitle('مدیریت محصولات')
        ->setDescription('محصولات مدیریت کنید')
        ->opengraph()->setTitle('مدیریت محصولات')
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        $Products = Product::query();
        if ($keyword=request('search')) {
            $Products = $Products->where('name', 'LIKE', "%{$keyword}%")->orWhere('discription', 'LIKE', "%{$keyword}%")->orWhere('id', 'LIKE', "%{$keyword}%");
        }
        $users=$Products->where('price', '<=' , 7 )->paginate(10);
        return view('admin.componnets.product',compact('users'));
    }



    public function editor(){
        return view('admin.componnets.Dashboard.editor');
    }

    public function editor_post(Request $request){
        $request->validate([
            'content' => 'required',
        ]);
        DB::table('settings')->where('id', 1)->update(['about' => $request->content ]);
        return back();
    }

    public  function Commission(){
        return view('admin.componnets.commissions');
    }

    public function Commission_poat(Request $request){
        $request->validate([
            'Commission' => 'required',
        ]);
        DB::table('settings')->where('id', 1)->update(['Commission' => $request->Commission ]);
        return back();
    }

}
