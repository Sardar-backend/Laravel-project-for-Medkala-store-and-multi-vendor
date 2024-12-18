@extends('multivendor::seller.base')
@section('Content')
    <main class="p-3 md:p-5">
      <div class="bg-white rounded-lg border drop-shadow-lg p-5">
        <p class="text-center text-lg md:text-2xl text-gray-700 flex justify-center items-center">
          <img class="mb-2" src="./assets/image/rules.svg" alt="">
          راهنمایی های لازم جهت فروش محصولات شما
        </p>
        <div class="mt-7 overflow-x-auto w-full flex flex-col gap-y-5">
          <button class="group border-t border-x border rounded-lg focus:outline-none w-full">
            <div class="flex items-center justify-between h-14 px-3 rounded-lg text-zinc-700 hover:bg-gray-100">
              <span class="truncate">
                1- قوانین اولیه فروش در مد کالا
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
          <button class="group border-t border-x border rounded-lg focus:outline-none w-full">
            <div class="flex items-center justify-between h-14 px-3 rounded-lg text-zinc-700 hover:bg-gray-100">
              <span class="truncate">
                2- ارسال محصول
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
          <button class="group border-t border-x border rounded-lg focus:outline-none w-full">
            <div class="flex items-center justify-between h-14 px-3 rounded-lg text-zinc-700 hover:bg-gray-100">
              <span class="truncate">
                3- انبار داری توسط مد کالا
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
          <button class="group border-t border-x border rounded-lg focus:outline-none w-full">
            <div class="flex items-center justify-between h-14 px-3 rounded-lg text-zinc-700 hover:bg-gray-100">
              <span class="truncate">
                4- تخفیف هوشمند
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
          <button class="group border-t border-x border rounded-lg focus:outline-none w-full">
            <div class="flex items-center justify-between h-14 px-3 rounded-lg text-zinc-700 hover:bg-gray-100">
              <span class="truncate">
                5- بازاریابی توسط مد کالا یا فروشنده
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
          <button class="group border-t border-x border rounded-lg focus:outline-none w-full">
            <div class="flex items-center justify-between h-14 px-3 rounded-lg text-zinc-700 hover:bg-gray-100">
              <span class="truncate">
                6- مرجوع کردن کالا ها
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
          <button class="group border-t border-x border rounded-lg focus:outline-none w-full">
            <div class="flex items-center justify-between h-14 px-3 rounded-lg text-zinc-700 hover:bg-gray-100">
              <span class="truncate">
                7- ثبت شکایات یا پیشنهادات توسط خریدار محصول
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
          <button class="group border-t border-x border rounded-lg focus:outline-none w-full">
            <div class="flex items-center justify-between h-14 px-3 rounded-lg text-zinc-700 hover:bg-gray-100">
              <span class="truncate">
                8- ارسال مدارک برای احراز هویت
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
          <button class="group border-t border-x border rounded-lg focus:outline-none w-full">
            <div class="flex items-center justify-between h-14 px-3 rounded-lg text-zinc-700 hover:bg-gray-100">
              <span class="truncate">
                9- ایجاد حساب کاربری یا پیشرفته
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
@endsection
