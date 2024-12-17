<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendNotificationCodeJob;
use App\Models\User;
use App\Models\ActiveCode;
use App\Notifications\notificationCode;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
class AuthController extends Controller
{
        /**
     * Show the login page with SEO settings.
     *
     * @return \Illuminate\View\View
     */
    public function login()
    {
        $this->seo()
            ->setTitle('صفحه ورود')
            ->setDescription('به صفحه ورود خوش آمدید')
            ->opengraph()
            ->setTitle('صفحه ورود')
            ->addImage(asset('img/logo.png'), [
                'height' => 200,
                'width' => 200,
            ]);
        return view('public.Auth.login-register');
    }

    /**
 * Show the login page with SEO settings.
 *
 * @return \Illuminate\View\View
 */
public function password(Request $request)
{
    Cookie::queue('key', $request->number , 120);
    return view('public.Auth.password');
}


    /**
 * Show the login page with SEO settings.
 *
 * @return \Illuminate\View\View
 */
public function password_confrim(Request $request)
{
    $data=$this->validate($request, [
        'password' => ['required', 'string', 'min:6'],
    ], [
        'password.required' => 'وارد کردن رمز عبور الزامی است.',
        'password.string' => 'رمز عبور باید یک رشته متنی باشد.',
        'password.min' => 'رمز عبور نباید کمتر از ۶ کاراکتر باشد.',
    ]);
    $key = Cookie::get('key');
    $user=User::orWhere('phonenumber',$key)->orWhere('email',$key)->first()->attempt(['phonenumber' => $key, 'password' => $data['password']]);
    if ($user) {
        return back();
    }
    if (!Hash::check($request->password , $user->password)) {
        return back();
    }
    Alert::success('ورود', text: 'با موفقیت وارد شدید');
    return view('public.index');
}

    /**
     * Handle phone number submission and send verification code.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function verify_confrim_post()
    {
        $sessionCode = session()->get('code') ?? collect([]);
        $phoneNumber = Cookie::get('key');

        $user = User::where('phonenumber', $phoneNumber)->first();

        $userId = $user->id ?? null;

        $existingUser = User::find($userId);

        if ($existingUser) {
            $now = Carbon::now();
            $expiredAt = Carbon::parse($existingUser->activecode[0]->expired_at);

            if (isset($existingUser->activecode[0]->code) && !$expiredAt->lessThan($now)) {
                $code = $existingUser->activecode[0]->code;
                // Send notification here if needed
            } else {
                ActiveCode::where('code', $existingUser->activecode[0]->code)->delete();
                $code = ActiveCode::createCode();

                ActiveCode::create([
                    'user_id' => $existingUser->id,
                    'code' => $code,
                    'expired_at' => now()->addMinutes(10),
                ]);
            }
            // $existingUser->notify(new notificationCode($code,$phoneNumber , 'Ghasedak'));
            SendNotificationCodeJob::dispatch($code,$phoneNumber,$existingUser);
            session()->put('code', value: $code);
            return view('public.Auth.verify', compact('phoneNumber'));
        } else {
            $newUser = User::create([
                'phonenumber' => $phoneNumber,
            ])->get();

            $code = ActiveCode::createCode();

            ActiveCode::create([
                'user_id' => $newUser->id,
                'code' => $code,
                'expired_at' => now()->addMinutes(10),
            ]);
            // $newUser->notify(new notificationCode($code,$phoneNumber , 'Ghasedak'));
            SendNotificationCodeJob::dispatch($code,$phoneNumber,$existingUser);
            session()->put('code', $code);

            return view('public.Auth.verify', compact('phoneNumber'));
        }
    }

    /**
     * Display the verification page.
     *
     * @return \Illuminate\View\View
     */
    public function verify()
    {
        $this->seo()
            ->setTitle('صفحه ورود')
            ->setDescription('به صفحه ورود خوش آمدید')
            ->opengraph()
            ->setTitle('صفحه ورود')
            ->addImage(asset('img/logo.png'), [
                'height' => 200,
                'width' => 200,
            ]);

        return view('public.Auth.verify');
    }

    /**
     * Check if a verification code exists.
     *
     * @return bool
     */
    public function log()
    {
        $activeCode = ActiveCode::where('code', 1111)->first();
        return (bool)$activeCode;
    }


    /**
     * Verify the code and log the user in.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */


    public function verify_confrim(Request $request)
    {
        if ($request->code == session()->get('code')) {
            $activeCode = ActiveCode::where('code', $request->code)->first();

            if ($activeCode) {
                $userId = $activeCode->user->id;
                Auth::loginUsingId($userId);

                Alert::success('ورود', text: 'با موفقیت وارد شدید');
                return redirect('/');
            }
        }
        $phoneNumber = Cookie::get('key');


        return view('public.Auth.verify', compact('phoneNumber'));
    }


    /**
     * Log the user out and redirect to the index page.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
