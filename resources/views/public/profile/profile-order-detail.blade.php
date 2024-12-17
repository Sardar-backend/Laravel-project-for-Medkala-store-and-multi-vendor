@extends('base')
@section('content')
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
    <div class="my-5 lg:my-10">
      <div class="md:flex gap-5">
      @include('public.profile.sidebar')

        <div class="md:w-9/12 bg-white shadow-box-md rounded-2xl p-5 mt-5 md:mt-0">
          <div class="">
            <div class="text-zinc-800 text-lg mb-4">
              جزئیات سفارش:
            </div>
            <!-- product -->
             @foreach ( $products as $product )

             <div class="mt-7 flex flex-col md:flex-row border-b pb-4">
               <div class="w-10/12 mx-auto md:max-w-32">
                 <img src="./assets/image/products/1.webp" alt="">
               </div>
               <div class="mr-2 md:mr-5 w-full">
                 <!-- title -->
                 <div class="text-xs sm:text-sm text-zinc-700">
                   {{$product->name}}
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
                       <span>{{$product->garant}}</span>
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
                   </div>
                 </div>
               </div>
             </div>

             @endforeach

            <!-- details -->
            <div class="px-2 sm:px-6 py-3 rounded-xl shadow-box-sm mx-auto my-5 max-w-md">
              <div class="flex gap-x-1 justify-center items-center text-zinc-700">
                <svg class="fill-zinc-500" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm-4,48a12,12,0,1,1-12,12A12,12,0,0,1,124,72Zm12,112a16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40a8,8,0,0,1,0,16Z"></path></svg>
                اطلاعات پرداخت
              </div>
              <div class="flex gap-x-1 justify-between items-center text-zinc-600 mt-5 bg-gray-100 rounded-lg px-2 py-3 text-sm">
                <div>
                  قیمت کالاها ({{count($products)}})
                </div>
                <div class="flex gap-x-1">
                  <div>
                    {{$order->price}}
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
                  {{$order->discount}}
                  </div>
                  <div>
                    تومان
                  </div>
                </div>
              </div>
              <div class="flex gap-x-1 justify-between items-center text-zinc-600 mt-3 bg-gray-100 rounded-lg px-2 py-3 text-sm">
                <div>
                  تاریخ
                </div>
                <div class="flex gap-x-1">
                  <div>
                    {{jdate($order->updated_at)->format('Y-m-d')}}
                  </div>
                </div>
              </div>
              <div class="flex gap-x-1 justify-between items-center text-zinc-600 mt-3 bg-gray-100 rounded-lg px-2 py-3 text-sm">
                <div>
                  شماره پیگیری
                </div>
                <div class="flex gap-x-1">
                  <div>
                    {{$order->tracking_serial}}
                  </div>
                </div>
              </div>
              <!-- <div class="flex gap-x-1 justify-between items-center text-zinc-800 mt-3 bg-gray-100 rounded-lg px-2 py-3 text-sm">
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
              </div> -->
              <div class="flex gap-x-1 justify-between items-center text-zinc-800 mt-3 bg-gray-100 rounded-lg px-2 py-3 text-sm">
                <div>
                  آدرس
                </div>
                <div>
                   {{$address->ostan}} - {{$address->city}} -   {{$address->street}}
                </div>
              </div>
              <button class="mx-auto w-full px-2 py-3 mt-5 text-sm bg-green-500 hover:bg-green-400 transition text-gray-100 rounded-lg">
                چاپ
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- footer -->
  @endsection
