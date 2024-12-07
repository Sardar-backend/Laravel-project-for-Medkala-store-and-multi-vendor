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
            <li class="px-3 py-3 group hover:bg-zinc-100 transition-all rounded-lg">
              <a class="flex gap-x-1 items-center text-zinc-700 text-sm group-hover:text-zinc-900" href="">
                <svg class="fill-zinc-700 group-hover:fill-zinc-800" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256"><path d="M160,112a32,32,0,1,1-32-32A32,32,0,0,1,160,112Z" opacity="0.2"></path><path d="M224,48V76a8,8,0,0,1-16,0V48H180a8,8,0,0,1,0-16h28A16,16,0,0,1,224,48Zm-8,124a8,8,0,0,0-8,8v28H180a8,8,0,0,0,0,16h28a16,16,0,0,0,16-16V180A8,8,0,0,0,216,172ZM76,208H48V180a8,8,0,0,0-16,0v28a16,16,0,0,0,16,16H76a8,8,0,0,0,0-16ZM40,84a8,8,0,0,0,8-8V48H76a8,8,0,0,0,0-16H48A16,16,0,0,0,32,48V76A8,8,0,0,0,40,84Zm136,92a8,8,0,0,1-6.41-3.19,52,52,0,0,0-83.2,0,8,8,0,1,1-12.8-9.62A67.94,67.94,0,0,1,101,141.51a40,40,0,1,1,53.94,0,67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,176,176Zm-48-40a24,24,0,1,0-24-24A24,24,0,0,0,128,136Z"></path></svg>
                پروفایل
              </a>
            </li>
            <li class="px-3 py-3 group bg-zinc-100 transition-all rounded-lg">
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
          <div class="">
            <div class="text-zinc-800 text-lg mb-4">
              جزئیات سفارش:
            </div>
            <!-- product -->
            <div class="mt-7 flex flex-col md:flex-row border-b pb-4">
              <div class="w-10/12 mx-auto md:max-w-32">
                <img src="./assets/image/products/1.webp" alt="">
              </div>
              <div class="mr-2 md:mr-5 w-full">
                <!-- title -->
                <div class="text-xs sm:text-sm text-zinc-700">
                  لپ تاپ ایسوس مدل ProArt Display PA329CV سایز 32 اینچ
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
                      <span>گارانتی 36 ماهه حامی خدمات رایانه و همراه پارت</span>
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
            <div class="mt-7 flex flex-col md:flex-row">
              <div class="w-10/12 mx-auto md:max-w-32">
                <img src="./assets/image/products/1.webp" alt="">
              </div>
              <div class="mr-2 md:mr-5 w-full">
                <!-- title -->
                <div class="text-xs sm:text-sm text-zinc-700">
                  لپ تاپ ایسوس مدل ProArt Display PA329CV سایز 32 اینچ
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
                      <span>گارانتی 36 ماهه حامی خدمات رایانه و همراه پارت</span>
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
            <!-- details -->
            <div class="px-2 sm:px-6 py-3 rounded-xl shadow-box-sm mx-auto my-5 max-w-md">
              <div class="flex gap-x-1 justify-center items-center text-zinc-700">
                <svg class="fill-zinc-500" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm-4,48a12,12,0,1,1-12,12A12,12,0,0,1,124,72Zm12,112a16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40a8,8,0,0,1,0,16Z"></path></svg>
                اطلاعات پرداخت
              </div>
              <div class="flex gap-x-1 justify-between items-center text-zinc-600 mt-5 bg-gray-100 rounded-lg px-2 py-3 text-sm">
                <div>
                  قیمت کالاها (2)
                </div>
                <div class="flex gap-x-1">
                  <div>
                    1,700,000
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
                    400,000
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
                    11 / 11 / 1402
                  </div>
                </div>
              </div>
              <div class="flex gap-x-1 justify-between items-center text-zinc-600 mt-3 bg-gray-100 rounded-lg px-2 py-3 text-sm">
                <div>
                  شماره پیگیری
                </div>
                <div class="flex gap-x-1">
                  <div>
                    f4hdf5TG34F
                  </div>
                </div>
              </div>
              <div class="flex gap-x-1 justify-between items-center text-zinc-800 mt-3 bg-gray-100 rounded-lg px-2 py-3 text-sm">
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
              </div>
              <div class="flex gap-x-1 justify-between items-center text-zinc-800 mt-3 bg-gray-100 rounded-lg px-2 py-3 text-sm">
                <div>
                  آدرس
                </div>
                <div>
                  خراسان رضوی - سبزوار - خیابان مرکزی
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
