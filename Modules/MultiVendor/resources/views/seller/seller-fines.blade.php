@extends('multivendor::seller.base')
@section('Content')
    <main class="p-3 md:p-5">
      <div class="bg-white rounded-lg border drop-shadow-lg p-5">
        <p class="text-center text-lg md:text-2xl text-gray-700">
          جریمه ها
        </p>
        <div class="mt-7 overflow-x-auto w-full">
          <table class="w-full whitespace-nowrap">
              <tbody>
                <tr tabindex="0" class="focus:outline-none h-16 rounded text-sm md:text-base">
                  <td class="pr-7">
                    شماره
                  </td>
                  <td class="pl-20">
                    مبلغ جریمه
                  </td>
                  <td class="pl-5">
                    تاریخ
                  </td>
                  <td>
                    علت جریمه
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
                          75,000 تومان
                        </p>
                      </td>
                      <td class="pl-5">
                        <a href="" class="text-red-500 hover:text-red-600 transition">
                          1403/04/18
                        </a>
                      </td>
                      <td class="w-40 pl-4">
                        دیر کرد در موجود کردن محصول گوشی موبایل اپل
                      </td>
                </tr>
              </tbody>
          </table>
      </div>
      </div>
    </main>
@endsection
