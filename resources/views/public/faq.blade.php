@extends('base')
@section('content')
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
    <div class="flex flex-col justify-center p-5 bg-white shadow-box-md rounded-xl mb-8">
      <h3 class="text-lg font-medium text-gray-800">سوالات پرتکرار</h3>
      <p class="text-sm font-light text-gray-600 my-3">
        اگه سوال مورد نظرتون رو پیدا نکردید به
        <a class="hover:text-red-600 text-red-500 transition" href="">پشتیبانی</a>
        پیام بدید
      </p>
      <div class="flex flex-col gap-y-5 w-11/12 mx-auto mt-4 pb-4">
        <button class="group border-t border-x border rounded-lg focus:outline-none">
          <div class="flex items-center justify-between h-14 px-3 rounded-lg text-zinc-700 hover:bg-gray-100">
            <span class="truncate">
              چطور سفارشمون رو تایید کنیم؟
            </span>
            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <div class="max-h-0 overflow-hidden duration-300 group-focus:max-h-40 hover:bg-gray-100 text-right text-sm">
            <div class="py-5 px-4 text-zinc-700">
              با تسویه کردن سبد خرید، سفارش به صورت خودکار تایید میشه.ونیاز به کار خاصی از طرف شما یا ما نیست.
            </div>
          </div>
        </button>
        <button class="group border-t border-x border rounded-lg focus:outline-none">
          <div class="flex items-center justify-between h-14 px-3 rounded-lg text-zinc-700 hover:bg-gray-100">
            <span class="truncate">
              شرایط گارانتی
            </span>
            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <div class="max-h-0 overflow-hidden duration-300 group-focus:max-h-40 hover:bg-gray-100 text-right text-sm">
            <div class="py-5 px-4 text-zinc-700">
              با تسویه کردن سبد خرید، سفارش به صورت خودکار تایید میشه.ونیاز به کار خاصی از طرف شما یا ما نیست.
            </div>
          </div>
        </button>
        <button class="group border-t border-x border rounded-lg focus:outline-none">
          <div class="flex items-center justify-between h-14 px-3 rounded-lg text-zinc-700 hover:bg-gray-100">
            <span class="truncate">
              شرایط استفاده از کد تخفیف اولین خرید چیست؟
            </span>
            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <div class="max-h-0 overflow-hidden duration-300 group-focus:max-h-40 hover:bg-gray-100 text-right text-sm">
            <div class="py-5 px-4 text-zinc-700">
              با تسویه کردن سبد خرید، سفارش به صورت خودکار تایید میشه.ونیاز به کار خاصی از طرف شما یا ما نیست.
            </div>
          </div>
        </button>
        <button class="group border-t border-x border rounded-lg focus:outline-none">
          <div class="flex items-center justify-between h-14 px-3 rounded-lg text-zinc-700 hover:bg-gray-100">
            <span class="truncate">
              هزینه ی ارسال چگونه محاسبه میشود؟
            </span>
            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <div class="max-h-0 overflow-hidden duration-300 group-focus:max-h-40 hover:bg-gray-100 text-right text-sm">
            <div class="py-5 px-4 text-zinc-700">
              با تسویه کردن سبد خرید، سفارش به صورت خودکار تایید میشه.ونیاز به کار خاصی از طرف شما یا ما نیست.
            </div>
          </div>
        </button>
        <button class="group border-t border-x border rounded-lg focus:outline-none">
          <div class="flex items-center justify-between h-14 px-3 rounded-lg text-zinc-700 hover:bg-gray-100">
            <span class="truncate">
              میتوانم سفارشم را بصورت اقساطی ( اعتباری ) پرداخت کنم؟
            </span>
            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <div class="max-h-0 overflow-hidden duration-300 group-focus:max-h-40 hover:bg-gray-100 text-right text-sm">
            <div class="py-5 px-4 text-zinc-700">
              با تسویه کردن سبد خرید، سفارش به صورت خودکار تایید میشه.ونیاز به کار خاصی از طرف شما یا ما نیست.
            </div>
          </div>
        </button>
        <button class="group border-t border-x border rounded-lg focus:outline-none">
          <div class="flex items-center justify-between h-14 px-3 rounded-lg text-zinc-700 hover:bg-gray-100">
            <span class="truncate">
              چطور میتوانم سفارشم را لغو کنم ؟
            </span>
            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
          <div class="max-h-0 overflow-hidden duration-300 group-focus:max-h-40 hover:bg-gray-100 text-right text-sm">
            <div class="py-5 px-4 text-zinc-700">
              با تسویه کردن سبد خرید، سفارش به صورت خودکار تایید میشه.ونیاز به کار خاصی از طرف شما یا ما نیست.
            </div>
          </div>
        </button>
      </div>
    </div>
  </main>
  <!-- footer -->
  @endsection
