@extends('base')
@section('content')
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
    <div class="my-5 lg:my-10">
      <div class="md:flex gap-5">

        @include('public.profile.sidebar')

        <div class="md:w-9/12 bg-white shadow-box-md rounded-2xl p-5 mt-5 md:mt-0">
          <div class="grid grid-cols-2 md:flex gap-5">
            <div class="flex md:w-1/4 gap-x-2 items-center bg-red-500 rounded-2xl px-3 py-2 text-xs sm:text-base">
              <svg class="fill-zinc-100 bg-red-600 rounded-xl p-1" xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="" viewBox="0 0 256 256"><path d="M232,96v96a8,8,0,0,1-8,8H32a8,8,0,0,1-8-8V96Z" opacity="0.2"></path><path d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z"></path></svg>
              <div class="text-zinc-50 space-y-1">
                <div>
                  موجودی حساب
                </div>
                <div>
                  75,000 تومان
                </div>
              </div>
            </div>
            <div class="flex md:w-1/4 gap-x-2 items-center bg-yellow-500 rounded-2xl px-3 py-2 text-xs sm:text-base">
              <svg class="fill-zinc-100 bg-yellow-600 rounded-xl p-1" xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#000000" viewBox="0 0 256 256"><path d="M240,104,128,224,80,104l48-64h56Z" opacity="0.2"></path><path d="M246,98.73l-56-64A8,8,0,0,0,184,32H72a8,8,0,0,0-6,2.73l-56,64a8,8,0,0,0,.17,10.73l112,120a8,8,0,0,0,11.7,0l112-120A8,8,0,0,0,246,98.73ZM222.37,96H180L144,48h36.37ZM74.58,112l30.13,75.33L34.41,112Zm89.6,0L128,202.46,91.82,112ZM96,96l32-42.67L160,96Zm85.42,16h40.17l-70.3,75.33ZM75.63,48H112L76,96H33.63Z"></path></svg>
              <div class="text-zinc-100 space-y-1">
                <div>
                  امتیاز ها
                </div>
                <div>
                  735 امتیاز
                </div>
              </div>
            </div>
            <div class="flex md:w-1/4 gap-x-2 items-center bg-green-500 rounded-2xl px-3 py-2 text-xs sm:text-base">
              <svg class="fill-zinc-100 bg-green-600 rounded-xl p-1" xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#000000" viewBox="0 0 256 256"><path d="M216,64l-12.16,66.86A16,16,0,0,1,188.1,144H62.55L48,64Z" opacity="0.2"></path><path d="M222.14,58.87A8,8,0,0,0,216,56H54.68L49.79,29.14A16,16,0,0,0,34.05,16H16a8,8,0,0,0,0,16h18L59.56,172.29a24,24,0,0,0,5.33,11.27,28,28,0,1,0,44.4,8.44h45.42A27.75,27.75,0,0,0,152,204a28,28,0,1,0,28-28H83.17a8,8,0,0,1-7.87-6.57L72.13,152h116a24,24,0,0,0,23.61-19.71l12.16-66.86A8,8,0,0,0,222.14,58.87ZM96,204a12,12,0,1,1-12-12A12,12,0,0,1,96,204Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,192,204Zm4-74.57A8,8,0,0,1,188.1,136H69.22L57.59,72H206.41Z"></path></svg>
              <div class="text-zinc-100 space-y-1">
                <div>
                 سفارشات کل
                </div>
                <div>
                  16
                </div>
              </div>
            </div>
            <div class="flex md:w-1/4 gap-x-2 items-center bg-blue-500 rounded-2xl px-3 py-2 text-xs sm:text-base">
              <svg class="fill-zinc-100 bg-blue-600 rounded-xl p-1" xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#000000" viewBox="0 0 256 256"><path d="M16,152H48v56H16a8,8,0,0,1-8-8V160A8,8,0,0,1,16,152ZM204,56a28,28,0,0,0-12,2.71h0A28,28,0,1,0,176,85.29h0A28,28,0,1,0,204,56Z" opacity="0.2"></path><path d="M230.33,141.06a24.43,24.43,0,0,0-21.24-4.23l-41.84,9.62A28,28,0,0,0,140,112H89.94a31.82,31.82,0,0,0-22.63,9.37L44.69,144H16A16,16,0,0,0,0,160v40a16,16,0,0,0,16,16H120a7.93,7.93,0,0,0,1.94-.24l64-16a6.94,6.94,0,0,0,1.19-.4L226,182.82l.44-.2a24.6,24.6,0,0,0,3.93-41.56ZM16,160H40v40H16Zm203.43,8.21-38,16.18L119,200H56V155.31l22.63-22.62A15.86,15.86,0,0,1,89.94,128H140a12,12,0,0,1,0,24H112a8,8,0,0,0,0,16h32a8.32,8.32,0,0,0,1.79-.2l67-15.41.31-.08a8.6,8.6,0,0,1,6.3,15.9ZM164,96a36,36,0,0,0,5.9-.48,36,36,0,1,0,28.22-47A36,36,0,1,0,164,96Zm60-12a20,20,0,1,1-20-20A20,20,0,0,1,224,84ZM164,40a20,20,0,0,1,19.25,14.61,36,36,0,0,0-15,24.93A20.42,20.42,0,0,1,164,80a20,20,0,0,1,0-40Z"></path></svg>
              <div class="text-zinc-100 space-y-1">
                <div>
                  تحویل داده شده
                </div>
                <div>
                  16
                </div>
              </div>
            </div>
          </div>
          <a class="my-5 md:w-1/4 rounded-full bg-zinc-800 hover:bg-zinc-700 transition text-sm md:text-base text-zinc-50 flex gap-x-2 items-center justify-center px-5 py-3" href="">
            شارژ کیف پول
            <svg class="fill-zinc-100" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm48-88a8,8,0,0,1-8,8H136v32a8,8,0,0,1-16,0V136H88a8,8,0,0,1,0-16h32V88a8,8,0,0,1,16,0v32h32A8,8,0,0,1,176,128Z"></path></svg>
          </a>
          <div class="mt-10">
            <div class="text-zinc-800 text-lg mb-4">
              سفارش های اخیر من:
            </div>
            <table class="w-full">
                <thead>
                  <tr class="border-y">
                    <th>
                      <p class="text-xs md:text-sm font-normal flex items-center text-zinc-400 py-3">
                        شماره سفارش
                      </p>
                    </th>
                    <th>
                      <p class="text-xs md:text-sm font-normal flex items-center text-zinc-400">
                        تاریخ
                      </p>
                    </th>
                    <th>
                      <p class="text-xs md:text-sm font-normal flex items-center text-zinc-400">
                        مبلغ
                      </p>
                    </th>
                    <th>
                      <p class="text-xs md:text-sm font-normal flex items-center text-zinc-400">
                        وضعیت
                      </p>
                    </th>
                  </tr>
                </thead>
                <tbody>
                @foreach ( $orders as $order )
                  <tr class="hover:bg-zinc-100 text-xs md:text-sm">
                    <td class="px-3 py-4 border-b">
                      <p class="text-zinc-700">
                        #1f3G4t
                      </p>
                    </td>
                    <td class="p-3 border-b">
                      <p class="text-zinc-700">
                        1402/11/11
                      </p>
                    </td>
                    <td class="p-3 border-b">
                      <p class="text-zinc-700">
                        742,000 تومان
                      </p>
                    </td>
                    <td class="p-3 border-b">
                    @if ($order->status == 'unpaid')
                            <p class="text-yellow-500">درانتظار پرداخت</p>

                            @elseif($order->status == 'paid')
                            <p class="text-green-600">
                                پرداخت شده
                            </p>
                            @elseif($order->status == 'cancelled')
                            <p class="text-red-500">
                                لغو شده
                            </p>
                            @elseif($order->status == 'posted')

                            <p class="text-blue-500">
                                ارسال شده
                            </p>
                            @elseif($order->status == 'recieved')


                            <p class="text-gray-500">
                                دریافت شده
                            </p>

                            @endif
                    </td>
                  </tr>
                @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- footer -->
  @endsection
