@extends('public.seller.base')
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
                <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 hover:bg-gray-100 transition text-xs md:text-sm">
                      <td class="pr-5">
                        <p class="text-gray-700 mr-2">
                          15435fdc45c
                        </p>
                      </td>
                      <td class="pl-24">
                        <p class="text-gray-600 ml-2">
                          amirrr
                        </p>
                      </td>
                      <td class="pl-5">
                        <a href="" class="text-red-500 hover:text-red-600 transition">
                          1403/04/18
                        </a>
                      </td>
                      <td class="pl-10">
                        <span class="bg-green-500 rounded-full py-1 px-2 text-white">
                          ارسال شده
                        </span>
                      </td>
                      <td>
                        <a href="" class="text-gray-600 py-2 px-4 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none">
                          جزئیات
                        </a>
                      </td>
                </tr>
                <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 hover:bg-gray-100 transition text-xs md:text-sm">
                  <td class="pr-5">
                    <p class="text-gray-700 mr-2">
                      34n5n35io5
                    </p>
                  </td>
                  <td class="pl-24">
                    <p class="text-gray-600 ml-2">
                      fu44
                    </p>
                  </td>
                  <td class="pl-5">
                    <a href="" class="text-red-500 hover:text-red-600 transition">

                    </a>
                  </td>
                  <td class="pl-10">
                    <span class="bg-red-500 rounded-full py-1 px-2 text-white">
                      لغو شده
                    </span>
                  </td>
                  <td>
                    <a href="" class="text-gray-600 py-2 px-4 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none">
                      جزئیات
                    </a>
                  </td>
            </tr>
              </tbody>
          </table>
      </div>
      </div>
    </main>
@endsection
