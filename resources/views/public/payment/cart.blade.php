@extends('base')
@section('content')
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
    <!-- top cart -->
    <div class="container mx-auto w-full h-full pt-9">
      <div class="relative pl-3 h-full">
        <div class="flex pt-3 *:border-2 md:*:border-4">
          <div class="border-opacity-90 border-green-500 w-1/4"></div>
          <div class="border-opacity-90 border-gray-300 w-1/4"></div>
          <div class="border-opacity-90 border-gray-300 w-1/4"></div>
          <div class="border-opacity-90 border-gray-300 w-1/4"></div>
        </div>
        <!-- text -->
        <div class="absolute -top-10 inline-flex w-full justify-between">
          <!-- not -->
          <div class="">
            <div class="w-8 h-8">
            </div>
          </div>
          <!-- 1 -->
          <div class="flex items-center">
            <div class="z-20 flex items-center order-1">
              <h1 class="mx-auto md:font-semibold text-zinc-700 pr-6 text-xs md:text-base">سبد خرید</h1>
            </div>
          </div>
          <!-- 2 -->
          <div class="flex items-center">
            <div class="z-20 flex items-center order-1">
              <h1 class="mx-auto md:font-semibold text-zinc-500 pr-4 text-xs md:text-base">جزئیات پرداخت</h1>
            </div>
          </div>
          <!-- 3 -->
          <div class="flex items-center">
            <div class="z-20 flex items-center order-1">
              <h1 class="mx-auto md:font-semibold text-zinc-500 pr-1 pl-2 text-xs md:text-base">تکمیل سفارش</h1>
            </div>
          </div>
          <!-- not -->
          <div class="pl-3">
            <div class="w-8 h-8">
            </div>
          </div>
        </div>
        <!-- dots -->
        <div class="absolute top-0 md:-top-1 inline-flex w-full justify-between">
          <!-- not -->
          <div class="flex items-center *:w-6 *:h-6 md:*:w-8 *:md:h-8">
            <div class="z-20 flex items-center order-1 bg-gray-200 shadow-box-md rounded-full">
              <h1 class="mx-auto font-semibold text-lg text-zinc-700"></h1>
            </div>
          </div>
          <!-- 1 -->
          <div class="flex items-center *:w-6 *:h-6 md:*:w-8 *:md:h-8">
            <div class="z-20 flex items-center order-1 bg-green-400 shadow-box-md rounded-full">
              <h1 class="mx-auto font-semibold text-base md:text-lg text-white">1</h1>
            </div>
          </div>
          <!-- 2 -->
          <div class="flex items-center *:w-6 *:h-6 md:*:w-8 *:md:h-8">
            <div class="z-20 flex items-center order-1 bg-white shadow-box-md rounded-full">
              <h1 class="mx-auto font-semibold text-base md:text-lg text-zinc-700">2</h1>
            </div>
          </div>
          <!-- 3 -->
          <div class="flex items-center *:w-6 *:h-6 md:*:w-8 *:md:h-8">
            <div class="z-20 flex items-center order-1 bg-white shadow-box-md rounded-full">
              <h1 class="mx-auto font-semibold text-base md:text-lg text-zinc-700">3</h1>
            </div>
          </div>
          <!-- not -->
          <div class="flex items-center pl-3 *:w-6 *:h-6 md:*:w-8 *:md:h-8">
            <div class="z-20 flex items-center order-1 bg-gray-200 shadow-box-md rounded-full">
              <h1 class="mx-auto font-semibold text-lg text-zinc-700"></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- main -->
    <div class="my-8 lg:my-10 py-5 lg:px-20 md:flex gap-5">
      <div class="md:w-8/12 bg-white shadow-box-md rounded-xl py-5 px-2 sm:px-6">
        <!-- name -->
        <div class="text-zinc-700">
          سبد خرید شما
        </div>
        <!-- count product -->
        <div class="text-zinc-400 text-xs mt-2">
          2 کالا
        </div>
        <!-- product -->
        <div class="mt-7 flex flex-col md:flex-row gap-y-5 border-b pb-4">
          <div class="w-10/12 mx-auto md:max-w-32">
            <img src="./assets/image/products/1.webp" alt="">
            <div class="flex h-10 w-24 items-center justify-between rounded-lg border border-gray-100 px-2 py-1 mt-5 mx-auto">
              <button type="button" data-action="increment">
                <svg class="fill-green-600" xlink:href="#plus" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path></svg>
              </button>
              <input value="1" disabled="" type="number" class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm text-zinc-700 outline-none">
              <button type="button" data-action="decrement">
                <svg class="fill-red-600" xlink:href="#minus" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path></svg>
              </button>
            </div>
          </div>
          <div class="mr-2 md:mr-5 w-full">
            <!-- title -->
            <div class="text-xs sm:text-sm text-zinc-700">
              لپ تاپ ایسوس مدل ProArt Display PA329CV سایز 32 اینچ
            </div>
            <div class="w-full space-y-2 mt-5">
              <!-- attribute -->
              <div class="flex items-center gap-x-2 text-xs text-zinc-500">
                <div class="flex items-center gap-x-2">
                  <span class="h-4 w-4 rounded-full bg-gray-900"></span>
                  <span>مشکی</span>
                </div>
              </div>
              <div class="flex items-center gap-x-2 text-xs text-zinc-500">
                <div class="flex items-center gap-x-2">
                  <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="" viewBox="0 0 256 256"><path d="M245.57,117.78l-14-35a13.93,13.93,0,0,0-13-8.8H182V64a6,6,0,0,0-6-6H24A14,14,0,0,0,10,72V184a14,14,0,0,0,14,14H42.6a30,30,0,0,0,58.8,0h53.2a30,30,0,0,0,58.8,0H232a14,14,0,0,0,14-14V120A6,6,0,0,0,245.57,117.78ZM182,86h36.58a2,2,0,0,1,1.86,1.26L231.14,114H182ZM22,72a2,2,0,0,1,2-2H170v68H22ZM72,210a18,18,0,1,1,18-18A18,18,0,0,1,72,210Zm82.6-24H101.4a30,30,0,0,0-58.8,0H24a2,2,0,0,1-2-2V150H170v15.48A30.1,30.1,0,0,0,154.6,186ZM184,210a18,18,0,1,1,18-18A18,18,0,0,1,184,210Zm50-26a2,2,0,0,1-2,2H213.4A30.05,30.05,0,0,0,184,162c-.67,0-1.34,0-2,.07V126h52Z"></path></svg>
                  <span>ارسال پست پیشتاز</span>
                </div>
              </div>
              <div class="flex items-center gap-x-2 text-xs text-zinc-500">
                <div class="flex items-center gap-x-2">
                  <svg class="fill-zinc-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="" viewBox="0 0 256 256"><path d="M208,42H48A14,14,0,0,0,34,56v58.77c0,88.24,74.68,117.52,89.65,122.49a13.5,13.5,0,0,0,8.7,0c15-5,89.65-34.25,89.65-122.49V56A14,14,0,0,0,208,42Zm2,72.79c0,80-67.84,106.59-81.44,111.1a1.55,1.55,0,0,1-1.12,0C113.84,221.38,46,194.79,46,114.79V56a2,2,0,0,1,2-2H208a2,2,0,0,1,2,2Z"></path></svg>
                  <span>گارانتی 36 ماهه حامی خدمات رایانه و همراه پارت</span>
                </div>
              </div>
              <div class="flex items-center gap-x-2 text-xs text-zinc-500">
                <div class="flex items-center gap-x-2">
                  <svg class="fill-zinc-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="" viewBox="0 0 256 256"><path d="M230,96a6.19,6.19,0,0,0-.22-1.65l-14.34-50.2A14.07,14.07,0,0,0,202,34H54A14.07,14.07,0,0,0,40.57,44.15L26.23,94.35A6.19,6.19,0,0,0,26,96v16A38,38,0,0,0,42,143V208a14,14,0,0,0,14,14H200a14,14,0,0,0,14-14V143A38,38,0,0,0,230,112ZM52.11,47.45A2,2,0,0,1,54,46H202a2,2,0,0,1,1.92,1.45L216.05,90H40ZM102,102h52v10a26,26,0,0,1-52,0Zm-64,0H90v10a26,26,0,0,1-52,0ZM202,208a2,2,0,0,1-2,2H56a2,2,0,0,1-2-2V148.66a38,38,0,0,0,42-16.21,37.95,37.95,0,0,0,64,0,38,38,0,0,0,42,16.21Zm-10-70a26,26,0,0,1-26-26V102h52v10A26,26,0,0,1,192,138Z"></path></svg>
                  <span>مای کامپیوتر</span>
                </div>
              </div>
              <div class="flex items-center gap-x-2 text-xs text-zinc-500">
                <div class="flex items-center gap-x-2">
                  <svg class="fill-orange-700" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="" viewBox="0 0 256 256"><path d="M243.6,148.8a6,6,0,0,1-8.4-1.2A53.58,53.58,0,0,0,192,126a6,6,0,0,1,0-12,26,26,0,1,0-25.18-32.5,6,6,0,0,1-11.62-3,38,38,0,1,1,59.91,39.63A65.69,65.69,0,0,1,244.8,140.4,6,6,0,0,1,243.6,148.8ZM189.19,213a6,6,0,0,1-2.19,8.2,5.9,5.9,0,0,1-3,.81,6,6,0,0,1-5.2-3,59,59,0,0,0-101.62,0,6,6,0,1,1-10.38-6A70.1,70.1,0,0,1,103,182.55a46,46,0,1,1,50.1,0A70.1,70.1,0,0,1,189.19,213ZM128,178a34,34,0,1,0-34-34A34,34,0,0,0,128,178ZM70,120a6,6,0,0,0-6-6A26,26,0,1,1,89.18,81.49a6,6,0,1,0,11.62-3,38,38,0,1,0-59.91,39.63A65.69,65.69,0,0,0,11.2,140.4a6,6,0,1,0,9.6,7.2A53.58,53.58,0,0,1,64,126,6,6,0,0,0,70,120Z"></path></svg>
                  <span>ارسال فروشنده</span>
                </div>
              </div>
              <!-- price -->
              <div class="text-gray-700 pt-4">
                <span class="text-xl font-bold">1,800,000</span>
                <span class="text-sm">تومان</span>
                <div class="text-xs text-red-400 mt-3">تنها 2 عدد در انبار باقی مانده</div>
              </div>
              <!-- next buy -->
              <div class="flex justify-end">
                <a class="text-blue-500 hover:text-blue-400 transition text-sm flex items-center w-fit" href="">
                  انتقال به خرید بعدی
                  <svg class="fill-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- product -->
        <div class="mt-7 flex flex-col md:flex-row gap-y-5 border-b pb-4">
          <div class="w-10/12 mx-auto md:max-w-32">
            <img src="./assets/image/products/1.webp" alt="">
            <div class="flex h-10 w-24 items-center justify-between rounded-lg border border-gray-100 px-2 py-1 mt-5 mx-auto">
              <button type="button" data-action="increment">
                <svg class="fill-green-600" xlink:href="#plus" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path></svg>
              </button>
              <input value="1" disabled="" type="number" class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm text-zinc-700 outline-none">
              <button type="button" data-action="decrement">
                <svg class="fill-red-600" xlink:href="#minus" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path></svg>
              </button>
            </div>
          </div>
          <div class="mr-2 md:mr-5 w-full">
            <!-- title -->
            <div class="text-xs sm:text-sm text-zinc-700">
              لپ تاپ ایسوس مدل ProArt Display PA329CV سایز 32 اینچ
            </div>
            <div class="w-full space-y-2 mt-5">
              <!-- attribute -->
              <div class="flex items-center gap-x-2 text-xs text-zinc-500">
                <div class="flex items-center gap-x-2">
                  <span class="h-4 w-4 rounded-full bg-gray-900"></span>
                  <span>مشکی</span>
                </div>
              </div>
              <div class="flex items-center gap-x-2 text-xs text-zinc-500">
                <div class="flex items-center gap-x-2">
                  <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="" viewBox="0 0 256 256"><path d="M245.57,117.78l-14-35a13.93,13.93,0,0,0-13-8.8H182V64a6,6,0,0,0-6-6H24A14,14,0,0,0,10,72V184a14,14,0,0,0,14,14H42.6a30,30,0,0,0,58.8,0h53.2a30,30,0,0,0,58.8,0H232a14,14,0,0,0,14-14V120A6,6,0,0,0,245.57,117.78ZM182,86h36.58a2,2,0,0,1,1.86,1.26L231.14,114H182ZM22,72a2,2,0,0,1,2-2H170v68H22ZM72,210a18,18,0,1,1,18-18A18,18,0,0,1,72,210Zm82.6-24H101.4a30,30,0,0,0-58.8,0H24a2,2,0,0,1-2-2V150H170v15.48A30.1,30.1,0,0,0,154.6,186ZM184,210a18,18,0,1,1,18-18A18,18,0,0,1,184,210Zm50-26a2,2,0,0,1-2,2H213.4A30.05,30.05,0,0,0,184,162c-.67,0-1.34,0-2,.07V126h52Z"></path></svg>
                  <span>ارسال پست پیشتاز</span>
                </div>
              </div>
              <div class="flex items-center gap-x-2 text-xs text-zinc-500">
                <div class="flex items-center gap-x-2">
                  <svg class="fill-zinc-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="" viewBox="0 0 256 256"><path d="M208,42H48A14,14,0,0,0,34,56v58.77c0,88.24,74.68,117.52,89.65,122.49a13.5,13.5,0,0,0,8.7,0c15-5,89.65-34.25,89.65-122.49V56A14,14,0,0,0,208,42Zm2,72.79c0,80-67.84,106.59-81.44,111.1a1.55,1.55,0,0,1-1.12,0C113.84,221.38,46,194.79,46,114.79V56a2,2,0,0,1,2-2H208a2,2,0,0,1,2,2Z"></path></svg>
                  <span>گارانتی 36 ماهه حامی خدمات رایانه و همراه پارت</span>
                </div>
              </div>
              <div class="flex items-center gap-x-2 text-xs text-zinc-500">
                <div class="flex items-center gap-x-2">
                  <svg class="fill-zinc-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="" viewBox="0 0 256 256"><path d="M230,96a6.19,6.19,0,0,0-.22-1.65l-14.34-50.2A14.07,14.07,0,0,0,202,34H54A14.07,14.07,0,0,0,40.57,44.15L26.23,94.35A6.19,6.19,0,0,0,26,96v16A38,38,0,0,0,42,143V208a14,14,0,0,0,14,14H200a14,14,0,0,0,14-14V143A38,38,0,0,0,230,112ZM52.11,47.45A2,2,0,0,1,54,46H202a2,2,0,0,1,1.92,1.45L216.05,90H40ZM102,102h52v10a26,26,0,0,1-52,0Zm-64,0H90v10a26,26,0,0,1-52,0ZM202,208a2,2,0,0,1-2,2H56a2,2,0,0,1-2-2V148.66a38,38,0,0,0,42-16.21,37.95,37.95,0,0,0,64,0,38,38,0,0,0,42,16.21Zm-10-70a26,26,0,0,1-26-26V102h52v10A26,26,0,0,1,192,138Z"></path></svg>
                  <span>مای کامپیوتر</span>
                </div>
              </div>
              <div class="flex items-center gap-x-2 text-xs text-zinc-500">
                <div class="flex items-center gap-x-2">
                  <svg class="fill-orange-700" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="" viewBox="0 0 256 256"><path d="M243.6,148.8a6,6,0,0,1-8.4-1.2A53.58,53.58,0,0,0,192,126a6,6,0,0,1,0-12,26,26,0,1,0-25.18-32.5,6,6,0,0,1-11.62-3,38,38,0,1,1,59.91,39.63A65.69,65.69,0,0,1,244.8,140.4,6,6,0,0,1,243.6,148.8ZM189.19,213a6,6,0,0,1-2.19,8.2,5.9,5.9,0,0,1-3,.81,6,6,0,0,1-5.2-3,59,59,0,0,0-101.62,0,6,6,0,1,1-10.38-6A70.1,70.1,0,0,1,103,182.55a46,46,0,1,1,50.1,0A70.1,70.1,0,0,1,189.19,213ZM128,178a34,34,0,1,0-34-34A34,34,0,0,0,128,178ZM70,120a6,6,0,0,0-6-6A26,26,0,1,1,89.18,81.49a6,6,0,1,0,11.62-3,38,38,0,1,0-59.91,39.63A65.69,65.69,0,0,0,11.2,140.4a6,6,0,1,0,9.6,7.2A53.58,53.58,0,0,1,64,126,6,6,0,0,0,70,120Z"></path></svg>
                  <span>ارسال فروشنده</span>
                </div>
              </div>
              <!-- price -->
              <div class="text-gray-700 pt-4">
                <span class="text-xl font-bold">1,800,000</span>
                <span class="text-sm">تومان</span>
                <div class="text-xs text-red-400 mt-3">تنها 2 عدد در انبار باقی مانده</div>
              </div>
              <!-- next buy -->
              <div class="flex justify-end">
                <a class="text-blue-500 hover:text-blue-400 transition text-sm flex items-center w-fit" href="">
                  انتقال به خرید بعدی
                  <svg class="fill-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="md:w-4/12 mt-8 md:mt-0">
        <div class="px-2 sm:px-6 py-3 bg-white rounded-xl shadow-box-sm">
          <div class="flex gap-x-1 items-center text-zinc-700">
            <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M216,66H174V64a46,46,0,0,0-92,0v2H40A14,14,0,0,0,26,80V200a14,14,0,0,0,14,14H216a14,14,0,0,0,14-14V80A14,14,0,0,0,216,66ZM94,64a34,34,0,0,1,68,0v2H94ZM218,200a2,2,0,0,1-2,2H40a2,2,0,0,1-2-2V80a2,2,0,0,1,2-2H216a2,2,0,0,1,2,2Z"></path></svg>
            سبد شما
          </div>
          <div class="flex gap-x-1 justify-between items-center text-zinc-600 mt-5 bg-gray-100 rounded-lg px-2 py-3 text-sm">
            <div>
              قیمت کالاها (2)
            </div>
            <div class="flex gap-x-1">
              <div>
                1,700,000
              </div>
              <div>
                تومان
              </div>
            </div>
          </div>
          <div class="flex gap-x-1 justify-between items-center text-zinc-600 mt-3 bg-gray-100 rounded-lg px-2 py-3 text-sm">
            <div>
              تخفیف
            </div>
            <div class="flex gap-x-1">
              <div>
                400,000
              </div>
              <div>
                تومان
              </div>
            </div>
          </div>
          <div class="flex gap-x-1 justify-between items-center text-zinc-800 mt-3 bg-gray-100 rounded-lg px-2 py-3 text-sm">
            <div>
              جمع سبد خرید
            </div>
            <div class="flex gap-x-1">
              <div>
                3,400,000
              </div>
              <div>
                تومان
              </div>
            </div>
          </div>
          <button class="mx-auto w-full px-2 py-3 mt-5 text-sm bg-red-500 hover:bg-red-400 transition text-gray-100 rounded-lg">
            تایید و تکمیل سفارش
          </button>
        </div>
      </div>
    </div>
  </main>
  <!-- footer -->
  @endsection
