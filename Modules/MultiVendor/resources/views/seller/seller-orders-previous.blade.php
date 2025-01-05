@extends('multivendor::seller.base')
@section('Content')
    <main class="p-3 md:p-5">
      <div class="bg-white rounded-lg border drop-shadow-lg p-5">
        <p class="text-center text-lg md:text-2xl text-gray-700">
          سفارشات قبلی
        </p>
        <div class="mt-7 overflow-x-auto w-full">
          <table class="w-full whitespace-nowrap">
              <tbody>
                <tr tabindex="0" class="focus:outline-none h-16 rounded text-sm md:text-base">
                  <td class="pr-7">
                    شماره سفارش
                  </td>
                  <td class="pl-20">
                    نام کاربری
                  </td>
                  <td class="pl-5">
                    تاریخ سفارش
                  </td>
                  <td class="pl-10">
                    وضعیت
                  </td>
                  <td>

                  </td>
                </tr>
                @foreach ( $orders as $order )

                <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 hover:bg-gray-100 transition text-xs md:text-sm">
                      <td class="pr-5">
                        <p class="text-gray-700 mr-2">
                        {{$order->tracking_serial}}
                        </p>
                      </td>
                      <td class="pl-24">
                        <p class="text-gray-600 ml-2">
                          amirrr
                        </p>
                      </td>
                      <td class="pl-5">
                        <a href="" class="text-red-500 hover:text-red-600 transition">
                        {{jdate($order->updated_at)->format('%B %d، %Y')}}
                        </a>
                      </td>
                      <td class="pl-10">
                      @if($order->status == 'paid')
                            <span class="text-green-600">
                                پرداخت شده
                            </span>
                            @elseif($order->status == 'cancelled')
                            <span class="bg-red-500 rounded-full py-1 px-2 text-white">
                                لغو شده
                            </span>
                            @elseif($order->status == 'posted')

                            <span class="bg-blue-500 rounded-full py-1 px-2 text-white">
                                ارسال شده
                            </span>
                            @elseif($order->status == 'recieved')


                            <span class="bg-green-500 rounded-full py-1 px-2 text-white">
                                دریافت شده
                            </span>

                            @endif

                      </td>
                      <td>
                        <a href="{{route('seller-orders-details-previous' , ['id'=> $order->id])}}" class="text-gray-600 py-2 px-4 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none">
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
