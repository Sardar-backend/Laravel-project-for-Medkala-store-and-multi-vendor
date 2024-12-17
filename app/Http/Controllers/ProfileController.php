<?php

namespace App\Http\Controllers;

use App\Models\address;
use App\Models\message;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function address (Request $request){
        $Addresses = $request->user()->Addresses()->get();
        return view('public\profile\profile-address',compact('Addresses'));
    }
    public function delete_adresses (Request $request , string $id){
        $request->user()->Addresses()->where('id',$id)->delete();
        Alert::success('عملیات موفق آمیز بود','آدرس شما حذف شد');
        return back();
    }
    public function adresses_post (Request $request){
        $data = $request->validate([
            'ostan' => ['required'],
            'user_id' => ['required'],
            'tahvil' => ['required'],
            'city' => ['required'],
            'adress' => ['required'],
            'number' => ['required'],
            'post_number' => ['required'],
        ]);
        try {
            address::create($data);
            Alert::success('عملیات موفق آمیز بود','آدرس شما اضافه شد');

        } catch (\Throwable $th) {
            //Alert::error('خطا','عملیات موفقیت آمیز نبود');
            Alert::error('خطا',$th->getMessage());
        }
        return back();
    }

    public function factors (Request $request){
        $orders =  $request->user()->orders()->get();
        return view('public.profile.profile-order' , compact(
            // 'unpaid','paid','posted','recieved'
            'orders'
        ));
    }

    public function favorites (Request $request){
        $id=$request->user()->id;
        $favorite=User::find($id);

        $favorites=$favorite->favorite()->get();



        return view('public\profile\profile-favorites',compact('favorites'));
    }

    public function personal (Request $request){
        $orders = $request->user()->orders()->orderBy('updated_at')->take(3)->get();

        return view('public\profile\profile' , compact('orders'));
    }

    public function message(){
        // message::all();
        return view('public\profile\profile-message');
    }

/**
 * Displays the user edit page with SEO and OpenGraph meta tags.
 */
public function edit_user() {
    // Set SEO title and description for the edit user page
    $this->seo()->setTitle('ویرایش اطلاعات')
        ->setDescription('اینجا میتوانید اطلاعت خود را ویرایش کنید')
        ->opengraph()->setTitle('ویرایش اطلاعات')
        // Add image for OpenGraph sharing
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
    // Return the view for the edit user page
    return view('public\profile\profile-personal-info');
}

public function single_factors(int $id){

    $order=Order::findOrFail($id);
    $products=$order->products()->get();
    $address = $order->Addresses()->first();
    return view('public\profile\profile-order-detail' , compact('order','products','address'));

}


}
