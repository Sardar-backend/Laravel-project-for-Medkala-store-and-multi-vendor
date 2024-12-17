@extends('base')
@section('content')
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
    <div class="my-5 lg:my-10">
      <div class="md:flex gap-5">
      @include('public.profile.sidebar')

        <div class="md:w-9/12 bg-white shadow-box-md rounded-2xl p-2 md:p-5 mt-5 md:mt-0">
          <div class="">
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

                            </p>
                        </td>
                        <td class="p-3 border-b">
                            <p class="text-zinc-700">
                            {{ jdate($order->updated_at)->format('%B %d، %Y')}}
                            </p>
                        </td>
                        <td class="p-3 border-b">
                            <p class="text-zinc-700">
                            {{$order->price}} تومان
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
                        <td class="border-b">
                            <a href="{{route('single_factors' , ['id' => $order->id])}}" class="text-zinc-50 hover:text-zinc-100 transition bg-red-400 hover:bg-red-500 px-2 py-1 text-xs rounded-lg">
                            جزئیات
                            </a>
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
