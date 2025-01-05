@extends('base')
@section('content')
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
    <div class="my-5 lg:my-10">
      <div class="md:flex gap-5">
      @include('public.profile.sidebar')

        <div class="md:w-9/12 bg-white shadow-box-md rounded-2xl p-5 mt-5 md:mt-0">
          <div>
                    <!-- @if ($errors->any())
            <div class="mb-4 p-4 bg-red-50 border-l-4 border-red-500 text-red-700">
                <p class="font-medium">خطاهایی رخ داده است:</p>
                <ul class="mt-2 list-disc list-inside text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif -->

            <form action="{{route('edit_user_post',['id'=>request()->user()->id])}}" enctype="multipart/form-data" method="post">
            @method('patch','put')
            @csrf
            <!-- inputs -->
            <div class="sm:flex gap-x-5 mt-5">
              <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                <label class="text-sm text-zinc-700 flex">
                  نام و نام خانوادگی
                  <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                </label>
                <!-- <input type="text" name="name" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none"> -->
                <input
    type="text"
    name="name"
    class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all {{ $errors->has('meli_code') ? 'border-red-500 placeholder-red-500' : 'border-gray-300' }}"
    placeholder="{{ $errors->has('name') ? $errors->first('name') : 'نام  خود را وارد کنید' }}"
    value="{{ old('name') }}"
/>


              </div>
              <div class="sm:w-1/2 flex flex-col gap-y-1">
                <label class="text-sm text-zinc-700 flex">
                    کد ملی
                  <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                </label>
                <input
    type="number"
    name="meli_code"
    class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all {{ $errors->has('meli_code') ? 'border-red-500 placeholder-red-500' : 'border-gray-300' }}"
    placeholder="{{ $errors->has('meli_code') ? $errors->first('meli_code') : 'کد ملی خود را وارد کنید' }}"
    value="{{ old('meli_code') }}"
/>
              </div>
            </div>
            <div class="sm:flex gap-x-5 mt-5">
              <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                <label class="text-sm text-zinc-700 flex">
                  ایمیل
                  <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                </label>
                <input
    type="email"
    name="email"
    class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all {{ $errors->has('email') ? 'border-red-500 placeholder-red-500' : 'border-gray-300' }}"
    placeholder="{{ $errors->has('email') ? $errors->first('email') : 'ایمیل خود را وارد کنید' }}"
    value="{{ old('email') }}"
/>
              </div>
              <div class="sm:w-1/2 flex flex-col gap-y-1">
                <label class="text-sm text-zinc-700 flex">
                  شماره کارت جهت مرجوع وجه
                  <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                </label>
                <input
    type="text"
    name="cart_number"
    class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all {{ $errors->has('cart_number') ? 'border-red-500 placeholder-red-500' : 'border-gray-300' }}"
    placeholder="{{ $errors->has('cart_number') ? $errors->first('cart_number') : 'شماره کارت خود را وارد کنید' }}"
    value="{{ old('cart_number') }}"
/>
              </div>
            </div>
            <div class="sm:flex gap-x-5 mt-5">
              <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                <label class="text-sm text-zinc-700 flex">
                  شماره منزل
                  <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                </label>
                <input
    type="text"
    name="home_number"
    class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all {{ $errors->has('home_number') ? 'border-red-500 placeholder-red-500' : 'border-gray-300' }}"
    placeholder="{{ $errors->has('home_number') ? $errors->first('home_number') : 'شماره تلفن ثابت خود را وارد کنید' }}"
    value="{{ old('home_number') }}"
/>
              </div>
              <div class="sm:w-1/2 flex flex-col gap-y-1">
                <label class="text-sm text-zinc-700 flex">
                    تاریخ تولد
                  <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                </label>
                <input type="date" name="birthday" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
              </div>
            </div>
            <div class="sm:flex gap-x-5 mt-5">
              <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                <label class="text-sm text-zinc-700 flex">
                  تلفن همراه
                  <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                </label>
                <input
    type="number"
    name="phonenumber"
    class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all {{ $errors->has('phonenumber') ? 'border-red-500 placeholder-red-500' : 'border-gray-300' }}"
    placeholder="{{ $errors->has('phonenumber') ? $errors->first('phonenumber') : 'شماره موبایل خود را وارد کنید' }}"
    value="{{ old('phonenumber') }}"
/>
              </div>
              <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                <label class="text-sm text-zinc-700 flex">
                  جنسیت
                  <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                </label>
                <select name="Gender" class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                  <option value="">-</option>
                  <option value="male">مرد</option>
                  <option value="female">زن</option>
                </select>
              </div>
            </div>
            <div class="sm:flex items-center gap-x-5 mt-5">
              <div class="sm:w-1/2 flex flex-col gap-y-1">
                <label class="text-sm text-zinc-700 flex">
                  درباره من
                </label>
                <textarea
    name="about"
    cols="30"
    rows="7"
    class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all {{ $errors->has('about') ? 'border-red-500 placeholder-red-500' : 'border-gray-300' }}"
    placeholder="{{ $errors->has('about') ? $errors->first('about') : 'خودتان را به صورت مختصر معرفی کنید.' }}"
>{{ old('about') }}</textarea>
              </div>
              <div class="sm:w-1/2 flex gap-x-2 justify-center items-center pt-7 h-16">
                <span class="w-auto text-sm text-zinc-700">
                  تغییر عکس پروفایل
                </span>
                <label for="dropzone-file" class="w-8/12 sm:w-1/3 flex flex-col items-center justify-center border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                  <div class="flex flex-col items-center justify-center p-1">
                    <svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"></path>
                    </svg>
                  </div>
                  <input id="dropzone-file" name="image" accept="image/*" type="file" class="hidden">
                </label>
              </div>
            </div>
            <button class="mx-auto w-1/3 px-2 py-3 mt-8 text-sm bg-red-500 hover:bg-red-400 transition text-gray-100 rounded-lg">
              ثبت اطلاعات
            </button>
        </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- footer -->
  @endsection
