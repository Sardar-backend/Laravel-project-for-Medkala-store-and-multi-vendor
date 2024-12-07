@extends('base')
@section('content')
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
    <div class="flex flex-col justify-center p-5 bg-white shadow-box-md rounded-xl mb-8">
      <div class="flex flex-col gap-y-5 w-11/12 mx-auto mt-4 pb-4">
        <h3 class="text-lg font-medium text-gray-800">
          <img class="mb-2" src="./assets/image/rules.svg" alt="">
          شرایط و قوانین استفاده از سرویس‌ها و خدمات مدکالا
        </h3>
        <p class="text-sm font-light text-gray-600 my-3">
          کاربر گرامی لطفاً موارد زیر را جهت استفاده بهینه از خدمات و برنامه‌‏های کاربردی مد کالا به دقت ملاحظه فرمایید.
        </p>
        <button class="group border-t border-x border rounded-lg focus:outline-none">
          <div class="flex items-center justify-between h-14 px-3 rounded-lg text-zinc-700 hover:bg-gray-100">
            <span class="truncate">
              قوانین عمومی
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
              تعریف مشتری یا کاربر
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
              سیاست‏‌های رعایت حریم شخصی
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
              ثبت، پردازش و ارسال سفارش
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
              خسارت در هنگام حمل و نقل
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
              سرویس مهلت تست ۷ روزه دیجی‌کالا
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
