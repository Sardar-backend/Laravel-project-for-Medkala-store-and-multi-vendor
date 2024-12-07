@extends('base')
@section('content')
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
    <div class="my-5 lg:my-10">
      <div class="md:flex gap-5">
        <div class="md:w-3/12 bg-white shadow-box-md rounded-2xl py-3">
          <svg class="fill-zinc-700 mx-auto" xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="" viewBox="0 0 256 256"><path d="M224,128a95.76,95.76,0,0,1-31.8,71.37A72,72,0,0,0,128,160a40,40,0,1,0-40-40,40,40,0,0,0,40,40,72,72,0,0,0-64.2,39.37h0A96,96,0,1,1,224,128Z" opacity="0.2"></path><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path></svg>
          <div class="text-center text-lg text-zinc-800">
            امیررضا کریمی
          </div>
          <ul class="px-5 py-3 space-y-1">
            <li class="px-3 py-3 group bg-zinc-100 transition-all rounded-lg">
              <a class="flex gap-x-1 items-center text-zinc-700 text-sm group-hover:text-zinc-900" href="">
                <svg class="fill-zinc-700 group-hover:fill-zinc-800" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256"><path d="M160,112a32,32,0,1,1-32-32A32,32,0,0,1,160,112Z" opacity="0.2"></path><path d="M224,48V76a8,8,0,0,1-16,0V48H180a8,8,0,0,1,0-16h28A16,16,0,0,1,224,48Zm-8,124a8,8,0,0,0-8,8v28H180a8,8,0,0,0,0,16h28a16,16,0,0,0,16-16V180A8,8,0,0,0,216,172ZM76,208H48V180a8,8,0,0,0-16,0v28a16,16,0,0,0,16,16H76a8,8,0,0,0,0-16ZM40,84a8,8,0,0,0,8-8V48H76a8,8,0,0,0,0-16H48A16,16,0,0,0,32,48V76A8,8,0,0,0,40,84Zm136,92a8,8,0,0,1-6.41-3.19,52,52,0,0,0-83.2,0,8,8,0,1,1-12.8-9.62A67.94,67.94,0,0,1,101,141.51a40,40,0,1,1,53.94,0,67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,176,176Zm-48-40a24,24,0,1,0-24-24A24,24,0,0,0,128,136Z"></path></svg>
                پروفایل
              </a>
            </li>
            <li class="px-3 py-3 group hover:bg-zinc-100 transition-all rounded-lg">
              <a class="flex gap-x-1 items-center text-zinc-700 text-sm group-hover:text-zinc-900" href="">
                <svg class="fill-zinc-700 group-hover:fill-zinc-800" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256"><path d="M224,56V200a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V56a8,8,0,0,1,8-8H216A8,8,0,0,1,224,56Z" opacity="0.2"></path><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,160H40V56H216V200ZM176,88a48,48,0,0,1-96,0,8,8,0,0,1,16,0,32,32,0,0,0,64,0,8,8,0,0,1,16,0Z"></path></svg>
                سفارش ها
              </a>
            </li>
            <li class="px-3 py-3 group hover:bg-zinc-100 transition-all rounded-lg">
              <a class="flex gap-x-1 items-center text-zinc-700 text-sm group-hover:text-zinc-900" href="">
                <svg class="fill-zinc-700 group-hover:fill-zinc-800" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256"><path d="M232,94c0,66-104,122-104,122S24,160,24,94A54,54,0,0,1,78,40c22.59,0,41.94,12.31,50,32,8.06-19.69,27.41-32,50-32A54,54,0,0,1,232,94Z" opacity="0.2"></path><path d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path></svg>
                علاقه مندی ها
              </a>
            </li>
            <li class="px-3 py-3 group hover:bg-zinc-100 transition-all rounded-lg">
              <a class="flex gap-x-1 items-center text-zinc-700 text-sm group-hover:text-zinc-900" href="">
                <svg class="fill-zinc-700 group-hover:fill-zinc-800" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256"><path d="M224,128A96,96,0,0,1,79.93,211.11h0L42.54,223.58a8,8,0,0,1-10.12-10.12l12.47-37.39h0A96,96,0,1,1,224,128Z" opacity="0.2"></path><path d="M181.66,106.34a8,8,0,0,1,0,11.32l-32,32a8,8,0,0,1-11.32,0L112,123.31,85.66,149.66a8,8,0,0,1-11.32-11.32l32-32a8,8,0,0,1,11.32,0L144,132.69l26.34-26.35A8,8,0,0,1,181.66,106.34ZM232,128A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-16,0A88,88,0,1,0,51.81,172.06a8,8,0,0,1,.66,6.54L40,216,77.4,203.52a8,8,0,0,1,6.54.67A88,88,0,0,0,216,128Z"></path></svg>
                پیغام ها
              </a>
            </li>
            <li class="px-3 py-3 group hover:bg-zinc-100 transition-all rounded-lg">
              <a class="flex gap-x-1 items-center text-zinc-700 text-sm group-hover:text-zinc-900" href="">
                <svg class="fill-zinc-700 group-hover:fill-zinc-800" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256"><path d="M208,32H64a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H208a8,8,0,0,0,8-8V40A8,8,0,0,0,208,32ZM136,144a32,32,0,1,1,32-32A32,32,0,0,1,136,144Z" opacity="0.2"></path><path d="M83.19,174.4a8,8,0,0,0,11.21-1.6,52,52,0,0,1,83.2,0,8,8,0,1,0,12.8-9.6A67.88,67.88,0,0,0,163,141.51a40,40,0,1,0-53.94,0A67.88,67.88,0,0,0,81.6,163.2,8,8,0,0,0,83.19,174.4ZM112,112a24,24,0,1,1,24,24A24,24,0,0,1,112,112Zm96-88H64A16,16,0,0,0,48,40V64H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v24a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V40A16,16,0,0,0,208,24Zm0,192H64V40H208Z"></path></svg>
                آدرس های من
              </a>
            </li>
            <li class="px-3 py-3 group hover:bg-zinc-100 transition-all rounded-lg">
              <a class="flex gap-x-1 items-center text-zinc-700 text-sm group-hover:text-zinc-900" href="">
                <svg class="fill-zinc-700 group-hover:fill-zinc-800" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256"><path d="M224,128a96,96,0,1,1-96-96A96,96,0,0,1,224,128Z" opacity="0.2"></path><path d="M144,176a8,8,0,0,1-8,8,16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40A8,8,0,0,1,144,176Zm88-48A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128ZM124,96a12,12,0,1,0-12-12A12,12,0,0,0,124,96Z"></path></svg>
                اطلاعات شخصی
              </a>
            </li>
            <li class="px-3 py-3 group hover:bg-red-200 transition-all rounded-lg">
              <a class="flex gap-x-1 items-center text-red-500 text-sm group-hover:text-red-600" href="">
                <svg class="fill-red-500 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256"><path d="M216,128l-40,40V88Z" opacity="0.2"></path><path d="M112,216a8,8,0,0,1-8,8H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32h56a8,8,0,0,1,0,16H48V208h56A8,8,0,0,1,112,216Zm109.66-82.34-40,40A8,8,0,0,1,168,168V136H104a8,8,0,0,1,0-16h64V88a8,8,0,0,1,13.66-5.66l40,40A8,8,0,0,1,221.66,133.66Zm-17-5.66L184,107.31v41.38Z"></path></svg>
                خروج
              </a>
            </li>
          </ul>
        </div>
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
                      <p class="text-yellow-500">
                       درانتظار پرداخت
                      </p>
                    </td>
                  </tr>
                  <tr class="hover:bg-zinc-100 text-xs md:text-sm">
                    <td class="px-3 py-4 border-b">
                      <p class="text-zinc-700">
                        #2H5Y5u
                      </p>
                    </td>
                    <td class="p-3 border-b">
                      <p class="text-zinc-700">
                        1402/11/08
                      </p>
                    </td>
                    <td class="p-3 border-b">
                      <p class="text-zinc-700">
                        730,000 تومان
                      </p>
                    </td>
                    <td class="p-3 border-b">
                      <p class="text-green-600">
                       پرداخت شده
                      </p>
                    </td>
                  </tr>
                  <tr class="hover:bg-zinc-100 text-xs md:text-sm">
                    <td class="px-3 py-4 border-b">
                      <p class="text-zinc-700">
                        #R34trU
                      </p>
                    </td>
                    <td class="p-3 border-b">
                      <p class="text-zinc-700">
                        1402/11/01
                      </p>
                    </td>
                    <td class="p-3 border-b">
                      <p class="text-zinc-700">
                        1,900,000 تومان
                      </p>
                    </td>
                    <td class="p-3 border-b">
                      <p class="text-red-500">
                        لغو شده
                      </p>
                    </td>
                  </tr>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- footer -->
  @endsection
