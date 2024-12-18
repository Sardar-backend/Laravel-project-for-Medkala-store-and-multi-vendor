@extends('multivendor::seller.base')
@section('Content')
    <main class="p-3 md:p-5">
      <div class="bg-white rounded-lg border drop-shadow-lg p-5">
        <p class="text-center text-lg md:text-2xl text-gray-700">
          سفارشات ثبت شده
        </p>
        <div class="mt-7 overflow-x-auto w-full">
          <table class="w-full whitespace-nowrap">
              <tbody>
                <tr tabindex="0" class="focus:outline-none h-16 rounded text-sm md:text-base">
                  <td class="pr-7">
                     شماره رهگیری
                  </td>
                  <td class="pl-5">
                    درخواست رد سفارش
                  </td>
                  <td class="pl-10">
                    ارسال شده | درحال ارسال
                  </td>
                  <td>
                    اطلاعات
                  </td>
                </tr>
                @foreach ( $orders as $order )

                <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 hover:bg-gray-100 transition text-xs md:text-sm">
                      <td class="pr-5">
                        <p class="text-gray-700 mr-2">
                          {{$order->tracking_serial}}
                        </p>
                      </td>
                      <td class="pl-5">
                        <a href="" class="text-red-500 hover:text-red-600 transition">
                          حذف سفارش
                        </a>
                      </td>
                      <td class="pl-10">
                        <label class="relative inline-flex cursor-pointer items-center">
                          <input id="switch-2" type="checkbox" class="peer sr-only" />
                          <label for="switch-2" class="hidden"></label>
                          <div class="peer h-4 w-11 rounded-full border bg-green-500 after:absolute after:-top-1 after:left-0 after:h-6 after:w-6 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-red-500 peer-checked:after:translate-x-full peer-focus:ring-red-500"></div>
                        </label>
                      </td>
                      <td>
                          <a href="" class="text-gray-600 py-2 px-4 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none">
                            جزئیات
                          </a>
                      </td>
                </tr>

                @endforeach
              </tbody>
          </table>
      </div>
      </div>
    </main>
@endsection
