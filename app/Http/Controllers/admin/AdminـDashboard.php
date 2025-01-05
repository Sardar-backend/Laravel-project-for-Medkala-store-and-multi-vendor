<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;

class AdminـDashboard extends Controller
{
    public function Charts(){
        $labels = [
            'فروردین', 'اردیبهشت', 'خرداد', 'تیر',
            'مرداد', 'شهریور', 'مهر', 'آبان',
            'آذر', 'دی', 'بهمن', 'اسفند'
        ];
        $counter = 1;
        $data = [];
        foreach ($labels as $value) {
            $month = str_pad($counter, 2, '0', STR_PAD_LEFT); // مقدار 10 را به "10" تبدیل می‌کند
            $sum = request()->user()->orders_sellers()->ofShamsiMonth( Jalalian::now()->getYear(), $month)->wherestatus('paid')->sum('price');
            $counter ++ ;
            $data[] = $sum;
        }
        return view('admin.componnets.Dashboard.Charts'  , compact('labels' , 'data'));
    }
}
