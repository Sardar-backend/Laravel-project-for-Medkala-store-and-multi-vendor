@extends('base')
@section('content')
    <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
      <!-- main -->
      <div class="my-8 lg:my-10 py-2 lg:px-20">
        <div class="bg-white shadow-box-md rounded-xl py-5 px-2 sm:px-6">
          <!-- top cart -->
          <div class="container mx-auto w-full h-full pt-9">
            <div class="relative pl-3 h-full">
              <div class="flex pt-3 *:border-2 md:*:border-4">
                <div class="border-opacity-90 border-green-500 w-1/4"></div>
                <div class="border-opacity-90 border-green-500 w-1/4"></div>
                <div class="border-opacity-90 border-red-500 w-1/4"></div>
                <div class="border-opacity-90 border-red-500 w-1/4"></div>
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
                    <h1 class="mx-auto md:font-semibold text-zinc-500 pr-6 text-xs md:text-base">سبد خرید</h1>
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
                    <h1 class="mx-auto md:font-semibold text-zinc-700 pr-1 pl-2 text-xs md:text-base">تکمیل سفارش</h1>
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
                  <div class="z-20 flex items-center order-1 bg-white shadow-box-md rounded-full">
                    <h1 class="mx-auto font-semibold text-base md:text-lg text-zinc-700">1</h1>
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
                  <div class="z-20 flex items-center order-1 bg-red-400 shadow-box-md rounded-full">
                    <h1 class="mx-auto font-semibold text-base md:text-lg text-white">3</h1>
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
          <!-- name -->
          <svg
            class="mx-auto fill-red-500 mt-12"
            xmlns="http://www.w3.org/2000/svg"
            width="70"
            height="70"
            fill="#30d025"
            viewBox="0 0 256 256">
            <path
              d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm37.66,130.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path>
          </svg>
          <div class="text-red-500 text-center text-lg font-semibold mt-2">
            پرداخت با شکست انجام شد
          </div>
          <div class="text-red-400 text-center text-sm mt-2">
            لطفا دوباره سعی کنید
          </div>
          <div
            class="px-2 sm:px-6 py-3 rounded-xl shadow-box-sm mx-auto my-5 max-w-md">
            <div class="flex gap-x-1 justify-center items-center text-zinc-700">
              <svg
                class="fill-zinc-500"
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                fill=""
                viewBox="0 0 256 256">
                <path
                  d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm-4,48a12,12,0,1,1-12,12A12,12,0,0,1,124,72Zm12,112a16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40a8,8,0,0,1,0,16Z"></path>
              </svg>
              اطلاعات پرداخت
            </div>
            <div
              class="flex gap-x-1 justify-between items-center text-zinc-600 mt-5 bg-gray-100 rounded-lg px-2 py-3 text-sm">
              <div>قیمت کالاها (2)</div>
              <div class="flex gap-x-1">
                <div>1,700,000</div>
                <div>تومان</div>
              </div>
            </div>
            <div
              class="flex gap-x-1 justify-between items-center text-zinc-600 mt-3 bg-gray-100 rounded-lg px-2 py-3 text-sm">
              <div>تخفیف</div>
              <div class="flex gap-x-1">
                <div>400,000</div>
                <div>تومان</div>
              </div>
            </div>
            <div
              class="flex gap-x-1 justify-between items-center text-zinc-600 mt-3 bg-gray-100 rounded-lg px-2 py-3 text-sm">
              <div>تاریخ</div>
              <div class="flex gap-x-1">
                <div>11 / 11 / 1402</div>
              </div>
            </div>
            <div
              class="flex gap-x-1 justify-between items-center text-zinc-800 mt-3 bg-gray-100 rounded-lg px-2 py-3 text-sm">
              <div>جمع سبد خرید</div>
              <div class="flex gap-x-1">
                <div>3,400,000</div>
                <div>تومان</div>
              </div>
            </div>
            <button
              class="mx-auto w-full px-2 py-3 mt-5 text-sm bg-green-500 hover:bg-green-400 transition text-gray-100 rounded-lg">
              بازگشت به سبد خرید
            </button>
          </div>
        </div>
      </div>
    </main>
    <!-- footer -->
    @endsection
