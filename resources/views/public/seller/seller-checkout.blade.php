@extends('public.seller.base')
@section('Content')
    <main>
      <div class="flex flex-col lg:flex-row gap-5 p-2 lg:p-5">
        <!-- right notification -->
        <div class="lg:w-4/12 bg-white rounded-lg drop-shadow-lg border p-3 pt-5 h-fit">
          <div class="flex justify-between items-center">
            <p class="text-gray-700 flex items-center justify-center gap-x-1">
              <svg class="fill-gray-700" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M228.44,89.34l-96-64a8,8,0,0,0-8.88,0l-96,64A8,8,0,0,0,24,96V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V96A8,8,0,0,0,228.44,89.34ZM128,41.61l81.91,54.61-67,47.78H113.11l-67-47.78ZM40,200V111.53l65.9,47a8,8,0,0,0,4.65,1.49h34.9a8,8,0,0,0,4.65-1.49l65.9-47V200Z"></path></svg>
              اطلاعیه های شما
            </p>
            <a href="">
              <svg class="fill-gray-700" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="" viewBox="0 0 256 256"><path d="M128,26A102,102,0,1,0,230,128,102.12,102.12,0,0,0,128,26Zm0,192a90,90,0,1,1,90-90A90.1,90.1,0,0,1,128,218ZM138,84a10,10,0,1,1-10-10A10,10,0,0,1,138,84Zm0,44a10,10,0,1,1-10-10A10,10,0,0,1,138,128Zm0,44a10,10,0,1,1-10-10A10,10,0,0,1,138,172Z"></path></svg>
            </a>
          </div>
          <div class="grid grid-cols-1 gap-4 mt-6">
            <a href="" class="border border-gray-300 p-3 rounded-md text-gray-800 text-sm hover:bg-gray-200 transition">
              تسویه 1403/04/18 انجام شد.
            </a>
            <a href="" class="border border-gray-300 p-3 rounded-md text-gray-800 text-sm hover:bg-gray-200 transition">
              تسویه 1403/04/18 تایید شد.
            </a>
            <a href="" class="border border-gray-300 p-3 rounded-md text-gray-800 text-sm hover:bg-gray-200 transition">
              تسویه 1403/04/18 ارسال شد.
            </a>
          </div>
        </div>
        <!-- left -->
        <div class="lg:w-8/12 h-auto bg-white rounded-lg drop-shadow-lg border p-5">
          <!-- 2 box -->
          <div class="mb-5">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:flex gap-5">
              <a href="" class="flex gap-x-2 items-center bg-white border border-gray-300 rounded-lg p-3 text-xs sm:text-sm w-full">
                <svg class="fill-zinc-800 bg-gray-200 rounded-xl p-1" xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#000000" viewBox="0 0 256 256"><path d="M16,152H48v56H16a8,8,0,0,1-8-8V160A8,8,0,0,1,16,152ZM204,56a28,28,0,0,0-12,2.71h0A28,28,0,1,0,176,85.29h0A28,28,0,1,0,204,56Z" opacity="0.2"></path><path d="M230.33,141.06a24.43,24.43,0,0,0-21.24-4.23l-41.84,9.62A28,28,0,0,0,140,112H89.94a31.82,31.82,0,0,0-22.63,9.37L44.69,144H16A16,16,0,0,0,0,160v40a16,16,0,0,0,16,16H120a7.93,7.93,0,0,0,1.94-.24l64-16a6.94,6.94,0,0,0,1.19-.4L226,182.82l.44-.2a24.6,24.6,0,0,0,3.93-41.56ZM16,160H40v40H16Zm203.43,8.21-38,16.18L119,200H56V155.31l22.63-22.62A15.86,15.86,0,0,1,89.94,128H140a12,12,0,0,1,0,24H112a8,8,0,0,0,0,16h32a8.32,8.32,0,0,0,1.79-.2l67-15.41.31-.08a8.6,8.6,0,0,1,6.3,15.9ZM164,96a36,36,0,0,0,5.9-.48,36,36,0,1,0,28.22-47A36,36,0,1,0,164,96Zm60-12a20,20,0,1,1-20-20A20,20,0,0,1,224,84ZM164,40a20,20,0,0,1,19.25,14.61,36,36,0,0,0-15,24.93A20.42,20.42,0,0,1,164,80a20,20,0,0,1,0-40Z"></path></svg>
                <div class="text-zinc-500 space-y-1">
                  <div>
                    موجودی فعلی
                  </div>
                  <div class="text-gray-800">
                    6,870,000 تومان
                  </div>
                </div>
              </a>
              <a href="" class="flex gap-x-2 items-center bg-white border border-gray-300 rounded-lg p-3 text-xs sm:text-sm w-full">
                <svg class="fill-zinc-800 bg-gray-200 rounded-xl p-1" xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#000000" viewBox="0 0 256 256"><path d="M16,152H48v56H16a8,8,0,0,1-8-8V160A8,8,0,0,1,16,152ZM204,56a28,28,0,0,0-12,2.71h0A28,28,0,1,0,176,85.29h0A28,28,0,1,0,204,56Z" opacity="0.2"></path><path d="M230.33,141.06a24.43,24.43,0,0,0-21.24-4.23l-41.84,9.62A28,28,0,0,0,140,112H89.94a31.82,31.82,0,0,0-22.63,9.37L44.69,144H16A16,16,0,0,0,0,160v40a16,16,0,0,0,16,16H120a7.93,7.93,0,0,0,1.94-.24l64-16a6.94,6.94,0,0,0,1.19-.4L226,182.82l.44-.2a24.6,24.6,0,0,0,3.93-41.56ZM16,160H40v40H16Zm203.43,8.21-38,16.18L119,200H56V155.31l22.63-22.62A15.86,15.86,0,0,1,89.94,128H140a12,12,0,0,1,0,24H112a8,8,0,0,0,0,16h32a8.32,8.32,0,0,0,1.79-.2l67-15.41.31-.08a8.6,8.6,0,0,1,6.3,15.9ZM164,96a36,36,0,0,0,5.9-.48,36,36,0,1,0,28.22-47A36,36,0,1,0,164,96Zm60-12a20,20,0,1,1-20-20A20,20,0,0,1,224,84ZM164,40a20,20,0,0,1,19.25,14.61,36,36,0,0,0-15,24.93A20.42,20.42,0,0,1,164,80a20,20,0,0,1,0-40Z"></path></svg>
                <div class="text-zinc-500 space-y-1">
                  <div>
                    تسویه شده کل
                  </div>
                  <div class="text-gray-800">
                    86,459,000 تومان
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- BTN checkout -->
          <a href="" class="block text-center shadow-lg px-2 py-3 text-sm bg-green-500 hover:bg-green-700 transition text-gray-100 rounded-lg">
            تسویه حساب
          </a>
          <!-- table -->
          <div class=" overflow-x-auto">
            <table class="w-full whitespace-nowrap">
              <tbody>
                <tr tabindex="0" class="focus:outline-none h-16 rounded text-sm md:text-base">
                  <td class="pr-7">
                    شماره
                  </td>
                  <td class="pl-20">
                    مبلغ
                  </td>
                  <td class="pl-5">
                    تاریخ
                  </td>
                  <td>
                    وضعیت
                  </td>
                </tr>
                <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 hover:bg-gray-100 transition text-xs md:text-sm">
                      <td class="pr-5">
                        <p class="text-gray-700 mr-2">
                          534535
                        </p>
                      </td>
                      <td class="pl-24">
                        <p class="text-gray-600 ml-2">
                          3,760,000 تومان
                        </p>
                      </td>
                      <td class="pl-5">
                        <a href="" class="text-red-500 hover:text-red-600 transition">
                          1403/04/18
                        </a>
                      </td>
                      <td>
                        <span class="text-xs text-yellow-500">
                          درانتظار واریز
                        </span>
                      </td>
                </tr>
                <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 hover:bg-gray-100 transition text-xs md:text-sm">
                  <td class="pr-5">
                    <p class="text-gray-700 mr-2">
                      35525
                    </p>
                  </td>
                  <td class="pl-24">
                    <p class="text-gray-600 ml-2">
                      1,560,000 تومان
                    </p>
                  </td>
                  <td class="pl-5">
                    <a href="" class="text-red-500 hover:text-red-600 transition">
                      1403/04/13
                    </a>
                  </td>
                  <td>
                    <span class="text-xs text-red-500">
                      لغو شده
                    </span>
                  </td>
                </tr>
                <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 hover:bg-gray-100 transition text-xs md:text-sm">
                  <td class="pr-5">
                    <p class="text-gray-700 mr-2">
                      847675
                    </p>
                  </td>
                  <td class="pl-24">
                    <p class="text-gray-600 ml-2">
                      3,760,000 تومان
                    </p>
                  </td>
                  <td class="pl-5">
                    <a href="" class="text-red-500 hover:text-red-600 transition">
                      1403/04/18
                    </a>
                  </td>
                  <td>
                    <span class="text-xs text-green-500">
                      تکمیل شده
                    </span>
                  </td>
            </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
@endsection
