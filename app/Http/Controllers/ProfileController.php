<?php

namespace App\Http\Controllers;

use App\Models\address;
use App\Models\message;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rule;
class ProfileController extends Controller
{
    public function address (Request $request){
        $Addresses = $request->user()->Addresses()->get();
        return view('public.profile.profile-address',compact('Addresses'));
    }
    public function delete_adresses (Request $request , string $id){
        $request->user()->Addresses()->where('id',$id)->delete();
        Alert::success('عملیات موفق آمیز بود','آدرس شما حذف شد');
        return back();
    }
    public function adresses_post (Request $request , address $id=null){

        $data =$request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'ostan' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'number' => 'required|integer|min:1|max:999999',
            'post_number' => 'required|integer|digits:10',
            'plate' => 'required|integer|min:1|max:9999',
            'explanation' => 'nullable|string|max:500',
        ]);

        try {
            if ($id) {
                $id->update($data);
                Alert::success('عملیات موفق آمیز بود','آدرس شما ویرایش شد');

            }else {
                address::create($data);
                Alert::success('عملیات موفق آمیز بود','آدرس شما اضافه شد');
            }

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



        return view('public.profile.profile-favorites',compact('favorites'));
    }

    public function personal (Request $request){
        $orders = $request->user()->orders()->orderBy('updated_at')->take(3)->get();

        return view('public.profile.profile' , compact('orders'));
    }

    public function message(){
        $user = request()->user();

        $messages = $user->messages()->orderBy('failed_at','desc')->paginate(10);

        $user->messages()->update(['Seen' => 1]);
        return view('public.profile.profile-message' , compact('messages'));
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
    return view('public.profile.profile-personal-info');
}

public function single_factors(int $id){

    $order=Order::findOrFail($id);
    $products=$order->products()->get();
    $address = $order->Addresses()->first();
    return view('public.profile.profile-order-detail' , compact('order','products','address'));

}

public function edit_user_post(Request $request, int $id) {
    // Find the user by ID
    // Validate the incoming request data
    // dd($user);
    $user = User::findOrFail($id);
    $data = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'phonenumber' => ['required', 'digits_between:10,13'],
        'meli_code' => ['required', 'digits:10'],
        'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        'cart_number' => ['required', 'digits:16'],
        'home_number' => ['required', 'digits_between:7,11'],
        'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
        'birthday' => ['required', 'date'],
        'Gender' => ['required', 'in:male,female'],
        'about' => ['required', 'string', 'max:1000']
    ], [
        // Custom error messages for validation
        'name.required' => 'لطفاً نام خود را وارد کنید.',
        'name.string' => 'نام باید یک رشته متنی باشد.',
        'name.max' => 'نام نباید بیش از ۲۵۵ کاراکتر باشد.',

        'phonenumber.required' => 'لطفاً شماره تلفن خود را وارد کنید.',
        'phonenumber.digits_between' => 'شماره تلفن باید بین ۱۰ تا ۱۳ رقم باشد.',

        'meli_code.required' => 'لطفاً کد ملی خود را وارد کنید.',
        'meli_code.digits' => 'کد ملی باید دقیقاً ۱۰ رقم باشد.',

        'image.required' => 'لطفاً تصویر خود را بارگذاری کنید.',
        'image.image' => 'فایل انتخاب شده باید یک تصویر باشد.',
        'image.mimes' => 'فرمت تصویر باید jpeg, png, jpg یا gif باشد.',
        'image.max' => 'حجم تصویر نباید بیشتر از ۲ مگابایت باشد.',

        'cart_number.required' => 'لطفاً شماره کارت بانکی خود را وارد کنید.',
        'cart_number.digits' => 'شماره کارت بانکی باید دقیقاً ۱۶ رقم باشد.',

        'home_number.required' => 'لطفاً شماره منزل خود را وارد کنید.',
        'home_number.digits_between' => 'شماره منزل باید بین ۷ تا ۱۱ رقم باشد.',

        'email.required' => 'لطفاً ایمیل خود را وارد کنید.',
        'email.email' => 'لطفاً یک آدرس ایمیل معتبر وارد کنید.',
        'email.max' => 'ایمیل نباید بیش از ۲۵۵ کاراکتر باشد.',
        'email.unique' => 'این ایمیل قبلاً ثبت شده است.',

        'birthday.required' => 'لطفاً تاریخ تولد خود را وارد کنید.',
        'birthday.date' => 'لطفاً یک تاریخ معتبر وارد کنید.',

        'Gender.required' => 'لطفاً جنسیت خود را مشخص کنید.',
        'Gender.in' => 'جنسیت انتخاب شده معتبر نیست.',

        'about.required' => 'لطفاً توضیحاتی درباره خود وارد کنید.',
        'about.string' => 'توضیحات باید به صورت متن باشد.',
        'about.max' => 'توضیحات نباید بیش از ۱۰۰۰ کاراکتر باشد.',
    ]);

    // dd(vars: request()->file('image'));
    // Store the uploaded image and get the file path
    $f = Storage::disk('public')->putFile('ProfilePhoto', request()->file('image'));
    $data['image'] = $f;

    // Update the user with the validated data
    $user->update($data);
    // Show a success alert after the update
    Alert::success('عملیات موفق آمیز بود', 'اطلاعات کاربری شما با موفق ویرایش شد');

    // Redirect to the personal information page
    return redirect()->route('personal');
}
}
