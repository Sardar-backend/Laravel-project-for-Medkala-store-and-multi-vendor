@extends('base')
@section('content')
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
    <div class="my-8 lg:my-10 lg:px-5">
      <div class="bg-white shadow-box-sm rounded-xl py-5 px-2 sm:px-6">
        <div class="flex flex-col lg:flex-row gap-3">
          <!-- photo -->
          <div class="lg:w-4/12">
              <div class="flex gap-x-4">
                <a href="">
                  <svg class="fill-zinc-700 hover:fill-red-400 transition" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="" viewBox="0 0 256 256"><path d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path></svg>
                </a>
                <a href="">
                  <svg class="fill-zinc-700 hover:fill-zinc-800 transition" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#000000" viewBox="0 0 256 256"><path d="M112,152a8,8,0,0,0-8,8v28.69L75.72,160.4A39.71,39.71,0,0,1,64,132.12V95a32,32,0,1,0-16,0v37.13a55.67,55.67,0,0,0,16.4,39.6L92.69,200H64a8,8,0,0,0,0,16h48a8,8,0,0,0,8-8V160A8,8,0,0,0,112,152ZM40,64A16,16,0,1,1,56,80,16,16,0,0,1,40,64Zm168,97V123.88a55.67,55.67,0,0,0-16.4-39.6L163.31,56H192a8,8,0,0,0,0-16H144a8,8,0,0,0-8,8V96a8,8,0,0,0,16,0V67.31L180.28,95.6A39.71,39.71,0,0,1,192,123.88V161a32,32,0,1,0,16,0Zm-8,47a16,16,0,1,1,16-16A16,16,0,0,1,200,208Z"></path></svg>
                </a>
                <a href="">
                  <svg class="fill-zinc-700 hover:fill-zinc-800 transition" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#000000" viewBox="0 0 256 256"><path d="M176,160a39.89,39.89,0,0,0-28.62,12.09l-46.1-29.63a39.8,39.8,0,0,0,0-28.92l46.1-29.63a40,40,0,1,0-8.66-13.45l-46.1,29.63a40,40,0,1,0,0,55.82l46.1,29.63A40,40,0,1,0,176,160Zm0-128a24,24,0,1,1-24,24A24,24,0,0,1,176,32ZM64,152a24,24,0,1,1,24-24A24,24,0,0,1,64,152Zm112,72a24,24,0,1,1,24-24A24,24,0,0,1,176,224Z"></path></svg>
                </a>
              </div>
              <img class="mySlides w-8/12 lg:w-full mx-auto" src="./assets/image/products/9.webp">
              <img class="mySlides w-8/12 lg:w-full mx-auto" src="./assets/image/products/91.jpg" style="display:none">
              <img class="mySlides w-8/12 lg:w-full mx-auto" src="./assets/image/products/92.jpg" style="display:none">
              <img class="mySlides w-8/12 lg:w-full mx-auto" src="./assets/image/products/93.jpg" style="display:none">
              <div class="flex">
                <div class="">
                  <img class="opacity-50 hover:opacity-90 transition-all cursor-pointer w-10/12 lg:w-12/12" src="./assets/image/products/9.webp" onclick="currentDiv(1)">
                </div>
                <div class="">
                  <img class="opacity-50 hover:opacity-90 transition-all cursor-pointer w-10/12 lg:w-12/12" src="./assets/image/products/91.jpg" onclick="currentDiv(2)">
                </div>
                <div class="">
                  <img class="opacity-50 hover:opacity-90 transition-all cursor-pointer w-10/12 lg:w-12/12" src="./assets/image/products/92.jpg" onclick="currentDiv(3)">
                </div>
                <div class="">
                  <img class="opacity-50 hover:opacity-90 transition-all cursor-pointer w-10/12 lg:w-12/12" src="./assets/image/products/93.jpg" onclick="currentDiv(4)">
                </div>
              </div>
          </div>
          <!-- info -->
          <div class="lg:w-5/12">
            <div class="mb-7 text-sm flex items-center gap-x-2 opacity-90">
              <a href="" class="text-zinc-800 hover:text-red-400 transition">
                خانه
              </a>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
              </div>
              <a href="" class="text-zinc-800 hover:text-red-400 transition">
                محصولات
              </a>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
              </div>
              <a class="text-red-400" href="">
                لپ تاپ ایسوس
              </a>
            </div>
            <div class="text-zinc-700 text-lg md:text-xl">
              لپ تاپ 13.3 اینچی ایسوس مدل Zenbook S 13 OLED UX5304VA
            </div>
            <div class="text-zinc-400 text-xs mt-4">
              Asus Zenbook S 13 OLED UX5304VA-NQ003 13.3 Inch Laptop
            </div>
            <div class="flex gap-x-4 mt-3">
              <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                <span>
                  <span>
                    (28+)
                  </span>
                  <span>
                    4.3
                  </span>
                </span>
              </div>
              <a href="" class="flex items-start gap-x-1 text-xs text-red-400">
                <svg class="fill-red-400" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M140,128a12,12,0,1,1-12-12A12,12,0,0,1,140,128ZM84,116a12,12,0,1,0,12,12A12,12,0,0,0,84,116Zm88,0a12,12,0,1,0,12,12A12,12,0,0,0,172,116Zm60,12A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-16,0A88,88,0,1,0,51.81,172.06a8,8,0,0,1,.66,6.54L40,216,77.4,203.53a7.85,7.85,0,0,1,2.53-.42,8,8,0,0,1,4,1.08A88,88,0,0,0,216,128Z"></path></svg>
                <span>
                  <span>
                    2
                  </span>
                  <span>
                    دیدگاه
                  </span>
                </span>
              </a>
            </div>
            <div class="mt-8 text-zinc-700">
              ویژگی های محصول:
            </div>
            <div class="grid grid-cols-3 max-w-md py-3 mb-5 gap-3">
              <div class="flex flex-col gap-x-2 justufy-center bg-gray-100 rounded-md px-2 py-3">
                <div class="text-zinc-500 text-xs">
                  جنس بدنه:
                </div>
                <div class="text-zinc-700 text-sm">
                  تیتانیوم
                </div>
              </div>
              <div class="flex flex-col gap-x-2 justufy-center bg-gray-100 rounded-md px-2 py-3">
                <div class="text-zinc-500 text-xs">
                  مقدار حافظه RAM:
                </div>
                <div class="text-zinc-700 text-sm">
                 12 گیگابایت
                </div>
              </div>
              <div class="flex flex-col gap-x-2 justufy-center bg-gray-100 rounded-md px-2 py-3">
                <div class="text-zinc-500 text-xs">
                  باتری
                </div>
                <div class="text-zinc-700 text-sm">
                  لیتیوم 6000 میلی
                </div>
              </div>
            </div>
          </div>
          <!-- buy -->
          <div class="lg:w-3/12">
            <div class="lg:mt-8 lg:mb-8">
              <div class="text-zinc-700">
                رنگ:
              </div>
              <ul class="flex flex-wrap gap-2">
                <li>
                  <input type="radio" id="1" name="hosting" value="1" class="hidden peer" required="">
                  <label for="1" class="inline-flex items-center justify-center px-2 py-3 text-gray-600 bg-white border border-gray-200 rounded-full cursor-pointer peer-checked:border-red-400 peer-checked:text-red-400 hover:text-gray-600 hover:bg-gray-100">
                    <div class="flex gap-x-2">
                      <div class="w-5 h-5 bg-gray-400 rounded-full"></div>
                      <div class="text-sm">خاکستری</div>
                    </div>
                  </label>
                </li>
                <li>
                  <input type="radio" id="2" name="hosting" value="2" class="hidden peer" required="">
                  <label for="2" class="inline-flex items-center justify-center px-2 py-3 text-gray-600 bg-white border border-gray-200 rounded-full cursor-pointer peer-checked:border-red-400 peer-checked:text-red-400 hover:text-gray-600 hover:bg-gray-100">
                    <div class="flex gap-x-2">
                      <div class="w-5 h-5 bg-gray-900 rounded-full"></div>
                      <div class="text-sm">مشکی</div>
                    </div>
                  </label>
                </li>
                <li>
                  <input type="radio" id="3" name="hosting" value="3" class="hidden peer" required="">
                  <label for="3" class="inline-flex items-center justify-center px-2 py-3 text-gray-600 bg-white border border-gray-200 rounded-full cursor-pointer peer-checked:border-red-400 peer-checked:text-red-400 hover:text-gray-600 hover:bg-gray-100">
                    <div class="flex gap-x-2">
                      <div class="w-5 h-5 bg-blue-400 rounded-full"></div>
                      <div class="text-sm">آبی روشن</div>
                    </div>
                  </label>
                </li>
              </ul>
            </div>
            <div class="p-3 border rounded-xl mx-auto divide-y hidden lg:block">
              <div class="flex gap-x-1 items-center text-zinc-600 text-sm pb-5 pt-3">
                <svg class="fill-zinc-700" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M208,40H48A16,16,0,0,0,32,56v58.78c0,89.61,75.82,119.34,91,124.39a15.53,15.53,0,0,0,10,0c15.2-5.05,91-34.78,91-124.39V56A16,16,0,0,0,208,40Zm0,74.79c0,78.42-66.35,104.62-80,109.18-13.53-4.51-80-30.69-80-109.18V56H208ZM82.34,141.66a8,8,0,0,1,11.32-11.32L112,148.68l50.34-50.34a8,8,0,0,1,11.32,11.32l-56,56a8,8,0,0,1-11.32,0Z"></path></svg>
                <div>
                  گارانتی 18 ماهه
                </div>
              </div>
              <div class="flex gap-x-1 items-center text-zinc-600 text-sm py-5">
                <svg class="fill-zinc-700" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M247.42,117l-14-35A15.93,15.93,0,0,0,218.58,72H184V64a8,8,0,0,0-8-8H24A16,16,0,0,0,8,72V184a16,16,0,0,0,16,16H41a32,32,0,0,0,62,0h50a32,32,0,0,0,62,0h17a16,16,0,0,0,16-16V120A7.94,7.94,0,0,0,247.42,117ZM184,88h34.58l9.6,24H184ZM24,72H168v64H24ZM72,208a16,16,0,1,1,16-16A16,16,0,0,1,72,208Zm81-24H103a32,32,0,0,0-62,0H24V152H168v12.31A32.11,32.11,0,0,0,153,184Zm31,24a16,16,0,1,1,16-16A16,16,0,0,1,184,208Zm48-24H215a32.06,32.06,0,0,0-31-24V128h48Z"></path></svg>
                <div>
                  ارسال 2 روز کاری
                </div>
              </div>
              <div class="flex flex-col justify-center py-5">
                <div class="text-zinc-600 text-left">
                  <span class="font-semibold text-xl">1,200,000</span>
                  <span class="text-xs">تومان</span>
                </div>
                <div class="text-xs text-red-400">
                  0 موچودی
                </div>
              </div>
              <button class="mx-auto w-full px-2 py-3 text-sm bg-red-400 transition text-gray-100 rounded-lg">
                فعلا این محصول موجود نمیباشد
              </button>
            </div>
            <!-- fixed div buy -->
            <div class="fixed flex bottom-0 right-0 lg:hidden bg-white shadow-box-md w-full px-5 py-3 gap-x-2">
              <button class="mx-auto 5 w-1/2 px-2 py-3 text-sm bg-red-400 transition text-gray-100 rounded-lg">
                فعلا این محصول موجود نمیباشد
              </button>
              <span class="flex flex-col justify-center items-end w-1/2">
                <div class="text-zinc-600 text-left">
                  <span class="font-semibold text-lg">1,200,000</span>
                  <span class="text-xs">تومان</span>
                </div>
                <div class="text-xs text-red-400">
                  0 موجودی
                </div>
              </span>
            </div>
          </div>
        </div>
        <!-- service -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mt-7 lg:mt-10">
          <div class="border rounded-lg flex gap-x-2 items-center pr-4 py-3 text-sm md:text-base">
            <svg class="fill-zinc-700" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="" viewBox="0 0 256 256"><path d="M232,160v24a8,8,0,0,1-8,8H32a8,8,0,0,1-8-8V161.13C24,103.65,70.15,56.2,127.63,56A104,104,0,0,1,232,160Z" opacity="0.2"></path><path d="M207.06,80.67A111.24,111.24,0,0,0,128,48h-.4C66.07,48.21,16,99,16,161.13V184a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V160A111.25,111.25,0,0,0,207.06,80.67ZM224,184H119.71l54.76-75.3a8,8,0,0,0-12.94-9.42L99.92,184H32V161.13c0-3.08.15-6.12.43-9.13H56a8,8,0,0,0,0-16H35.27c10.32-38.86,44-68.24,84.73-71.66V88a8,8,0,0,0,16,0V64.33A96.14,96.14,0,0,1,221,136H200a8,8,0,0,0,0,16h23.67c.21,2.65.33,5.31.33,8Z"></path></svg>
            <div class="text-zinc-700">
              تحویل اکسپرس
            </div>
          </div>
          <div class="border rounded-lg flex gap-x-2 items-center pr-4 py-3 text-sm md:text-base">
            <svg class="fill-zinc-700" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="" viewBox="0 0 256 256"><path d="M80,144v40a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V128H64A16,16,0,0,1,80,144Zm112-16a16,16,0,0,0-16,16v40a16,16,0,0,0,16,16h32V128Z" opacity="0.2"></path><path d="M201.89,54.66A104.08,104.08,0,0,0,24,128v56a24,24,0,0,0,24,24H64a24,24,0,0,0,24-24V144a24,24,0,0,0-24-24H40.36A88.12,88.12,0,0,1,190.54,65.93,87.39,87.39,0,0,1,215.65,120H192a24,24,0,0,0-24,24v40a24,24,0,0,0,24,24h24a24,24,0,0,1-24,24H136a8,8,0,0,0,0,16h56a40,40,0,0,0,40-40V128A103.41,103.41,0,0,0,201.89,54.66ZM64,136a8,8,0,0,1,8,8v40a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V136Zm128,56a8,8,0,0,1-8-8V144a8,8,0,0,1,8-8h24v56Z"></path></svg>
            <div class="text-zinc-700">
              تحویل اکسپرس
            </div>
          </div>
          <div class="border rounded-lg flex gap-x-2 items-center pr-4 py-3 text-sm md:text-base">
            <svg class="fill-zinc-700" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="" viewBox="0 0 256 256"><path d="M216,56v58.77c0,84.18-71.31,112.07-85.54,116.8a7.54,7.54,0,0,1-4.92,0C111.31,226.86,40,199,40,114.79V56a8,8,0,0,1,8-8H208A8,8,0,0,1,216,56Z" opacity="0.2"></path><path d="M208,40H48A16,16,0,0,0,32,56v58.77c0,89.61,75.82,119.34,91,124.39a15.53,15.53,0,0,0,10,0c15.2-5.05,91-34.78,91-124.39V56A16,16,0,0,0,208,40Zm0,74.79c0,78.42-66.35,104.62-80,109.18-13.53-4.51-80-30.69-80-109.18V56l160,0Z"></path></svg>
            <div class="text-zinc-700">
              تحویل اکسپرس
            </div>
          </div>
          <div class="border rounded-lg flex gap-x-2 items-center pr-4 py-3 text-sm md:text-base">
            <svg class="fill-zinc-700" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="" viewBox="0 0 256 256"><path d="M240,120v64a8,8,0,0,1-8,8H208a24,24,0,0,0-32-22.63h0A24,24,0,0,0,160,192H96a24,24,0,0,0-48,0H24a8,8,0,0,1-8-8V144H176V120Z" opacity="0.2"></path><path d="M247.42,117l-14-35A15.93,15.93,0,0,0,218.58,72H184V64a8,8,0,0,0-8-8H24A16,16,0,0,0,8,72V184a16,16,0,0,0,16,16H41a32,32,0,0,0,62,0h50a32,32,0,0,0,62,0h17a16,16,0,0,0,16-16V120A7.94,7.94,0,0,0,247.42,117ZM184,88h34.58l9.6,24H184ZM24,72H168v64H24ZM72,208a16,16,0,1,1,16-16A16,16,0,0,1,72,208Zm81-24H103a32,32,0,0,0-62,0H24V152H168v12.31A32.11,32.11,0,0,0,153,184Zm31,24a16,16,0,1,1,16-16A16,16,0,0,1,184,208Zm48-24H215a32.06,32.06,0,0,0-31-24V128h48Z"></path></svg>
            <div class="text-zinc-700">
              تحویل اکسپرس
            </div>
          </div>
        </div>
        <!-- tabs -->
        <div class="flex gap-x-8 mt-20 pb-2 border-b">
          <a class="text-zinc-600 hover:text-zinc-800 transition" href="#proper">
            مشخصات
          </a>
          <a class="text-zinc-600 hover:text-zinc-800 transition" href="#comments">
            دیدگاه ها
          </a>
          <a class="text-zinc-600 hover:text-zinc-800 transition" href="#quest">
            پرسش ها
          </a>
        </div>
        <div class="p-4" id="proper">
          <span class="border-b-red-300 border-b text-zinc-800">
            مشخصات محصول
          </span>
          <div class="text-gray-500 text-sm grid grid-cols-1 md:w-1/2">
            <div class="flex items-center justify-between border p-3 w-full my-3 mx-auto rounded-xl">
              <div class="text-xs text-zinc-700">
                پردازنده:
              </div>
              <div class="text-xs text-zinc-700">
                AM32x new product
              </div>
            </div>
            <div class="flex items-center justify-between border p-3 w-full my-3 mx-auto rounded-xl">
              <div class="text-xs text-zinc-700">
                فرکانس پردازنده:
              </div>
              <div class="text-xs text-zinc-700">
                32HR
              </div>
            </div>
            <div class="flex items-center justify-between border p-3 w-full my-3 mx-auto rounded-xl">
              <div class="text-xs text-zinc-700">
                وزن:
              </div>
              <div class="text-xs text-zinc-700">
                230 گرم
              </div>
            </div>
            <div class="flex items-center justify-between border p-3 w-full my-3 mx-auto rounded-xl">
              <div class="text-xs text-zinc-700">
                نسخه بلوتوث:
              </div>
              <div class="text-xs text-zinc-700">
                7r
              </div>
            </div>
            <div class="flex items-center justify-between border p-3 w-full my-3 mx-auto rounded-xl">
              <div class="text-xs text-zinc-700">
                نسخه وای فای:
              </div>
              <div class="text-xs text-zinc-700">
                3prm new test
              </div>
            </div>
            <div class="flex items-center justify-between border p-3 w-full my-3 mx-auto rounded-xl">
              <div class="text-xs text-zinc-700">
                سیستم عامل:
              </div>
              <div class="text-xs text-zinc-700">
                IOS
              </div>
            </div>
            <div class="flex items-center justify-between border p-3 w-full my-3 mx-auto rounded-xl">
              <div class="text-xs text-zinc-700">
                پردازنده گرافیکی:
              </div>
              <div class="text-xs text-zinc-700">
                Hiliston 7200
              </div>
            </div>
            <div class="flex items-center justify-between border p-3 w-full my-3 mx-auto rounded-xl">
              <div class="text-xs text-zinc-700">
                دوربین جلو:
              </div>
              <div class="text-xs text-zinc-700">
                12 MP
              </div>
            </div>
            <div class="flex items-center justify-between border p-3 w-full my-3 mx-auto rounded-xl">
              <div class="text-xs text-zinc-700">
                دوربین عقب:
              </div>
              <div class="text-xs text-zinc-700">
                24MP
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 border-b" id="comments">
          <span class="border-b-red-300 border-b text-zinc-800">
            دیدگاه ها
          </span>
          <div class="lg:flex gap-5">
            <div class="lg:w-3/12 py-5">
              <div class="flex items-start gap-x-1 text-sm text-zinc-600">
                <span>
                  <span>
                    (از 28 امتیاز)
                  </span>
                  <span>
                    4.3
                  </span>
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
              </div>
              <div class="mt-6 mb-2 text-sm text-zinc-700">
                شما هم دیدگاه خود را ثبت کنید
              </div>
              <input type="text" placeholder="عنوان دیدگاه" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
              <ul class="grid my-3 gap-5 grid-cols-2">
                <li>
                  <input type="radio" id="yes" name="hosting" value="yes" class="hidden peer" required="">
                  <label for="yes" class="inline-flex items-center justify-center w-full px-2 py-3 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-green-400 peer-checked:text-green-500 hover:text-gray-600 hover:bg-gray-100">
                    <div class="flex items-center gap-x-1">
                      <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                      <div class="text-sm">پیشنهاد میشود</div>
                    </div>
                  </label>
                </li>
                <li>
                  <input type="radio" id="no" name="hosting" value="no" class="hidden peer" required="">
                  <label for="no" class="inline-flex items-center justify-center w-full px-2 py-3 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 peer-checked:text-red-400 hover:text-gray-600 hover:bg-gray-100">
                    <div class="flex items-center gap-x-1">
                      <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                      <div class="text-sm">پیشنهاد نمیشود</div>
                    </div>
                  </label>
                </li>
              </ul>
              <textarea placeholder="متن دیدگاه" name="mailTicket" cols="30" rows="7" class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-400 focus:outline-none"></textarea>
              <button class="mx-auto w-full px-2 py-3 mt-5 text-sm bg-red-500 hover:bg-red-400 transition text-gray-100 rounded-lg">
                ارسال
              </button>
            </div>
            <div class="lg:w-9/12 divide-y">
              <div class="px-8 pt-5">
                <div class="text-lg text-zinc-700">
                  خوب بود ارزش خرید داره
                </div>
                <div class="mt-2 flex gap-x-4 items-center border-b pb-3">
                  <div class="text-xs text-zinc-600">
                    11 بهمن 1402
                  </div>
                  <div class="text-xs text-zinc-600">
                    امیررضا کریمی
                  </div>
                  <div class="text-xs text-zinc-50 bg-green-400 rounded-full px-2 py-1">
                    خریدار
                  </div>
                </div>
                <div class="flex items-center gap-x-1 pt-3">
                  <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                  <div class="text-sm text-green-500">پیشنهاد میشود</div>
                </div>
                <div class="mt-2 text-zinc-600 text-sm">
                  واقعا لپ تاپ عالی از هر نظر نسبت به قیمتش
                </div>
                <div class="flex justify-end items-center gap-x-5 mt-3">
                  <div class="text-sm text-zinc-400">
                    آیا این دیدگاه برایتان مفید بود؟
                  </div>
                  <ul class="grid my-3 gap-5 grid-cols-2">
                    <li>
                      <input type="radio" id="isgood" name="what" value="isgood" class="hidden peer" required="">
                      <label for="isgood" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-green-400 hover:bg-gray-100">
                        <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                      </label>
                    </li>
                    <li>
                      <input type="radio" id="isbad" name="what" value="isbad" class="hidden peer" required="">
                      <label for="isbad" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 hover:bg-gray-100">
                        <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                      </label>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="px-8 pt-5">
                <div class="text-lg text-zinc-700">
                  تاچ پدش خراب بود، اجازه ی مرجوعی هم ندادن
                </div>
                <div class="mt-2 flex gap-x-4 items-center border-b pb-3">
                  <div class="text-xs text-zinc-600">
                    10 بهمن 1402
                  </div>
                  <div class="text-xs text-zinc-600">
                    امیررضا کریمی
                  </div>
                  <div class="text-xs text-zinc-50 bg-green-400 rounded-full px-2 py-1">
                    خریدار
                  </div>
                </div>
                <div class="flex items-center gap-x-1 pt-3">
                  <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill=""  viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                  <div class="text-sm text-red-500">پیشنهاد نمیشود</div>
                </div>
                <div class="mt-2 text-zinc-600 text-sm">
                  واقعا لپ تاپ عالی از هر نظر نسبت به قیمتش
                </div>
                <div class="flex justify-end items-center gap-x-5 mt-3">
                  <div class="text-sm text-zinc-400">
                    آیا این دیدگاه برایتان مفید بود؟
                  </div>
                  <ul class="grid my-3 gap-5 grid-cols-2">
                    <li>
                      <input type="radio" id="isgood2" name="what2" value="isgood2" class="hidden peer" required="">
                      <label for="isgood2" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-green-400 hover:bg-gray-100">
                        <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                      </label>
                    </li>
                    <li>
                      <input type="radio" id="isbad2" name="what2" value="isbad2" class="hidden peer" required="">
                      <label for="isbad2" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 hover:bg-gray-100">
                        <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                      </label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 border-b" id="quest">
          <span class="border-b-red-300 border-b text-zinc-800">
            پرسش ها
          </span>
          <div class="lg:flex gap-5">
            <div class="lg:w-3/12 py-5">
              <div class="mt-6 mb-2 text-sm text-zinc-700">
                اگر سوالی دارید بپرسید
              </div>
              <textarea placeholder="متن پرسش" name="mailTicket" cols="30" rows="7" class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-400 focus:outline-none"></textarea>
              <button class="mx-auto w-full px-2 py-3 mt-5 text-sm bg-red-500 hover:bg-red-400 transition text-gray-100 rounded-lg">
                ارسال
              </button>
            </div>
            <div class="lg:w-9/12 divide-y">
              <div class="px-8 pt-5">
                <div class="mt-2 flex gap-x-4 items-center border-b pb-3">
                  <div class="text-xs text-zinc-600">
                    11 بهمن 1402
                  </div>
                  <div class="text-xs text-zinc-600">
                    امیررضا کریمی
                  </div>
                </div>
                <div class="mt-2 mb-4 text-zinc-600 text-sm">
                  سلام صفحه نمایش واقعا ipsهستش ممنون میشم راهنمایی کنید چقدر با tnفرق میکنه
                </div>
                <a href="">
                  <div class="transition px-2 flex items-center text-xs text-zinc-600 hover:text-zinc-700">
                    پاسخ
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#292929" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                  </div>
                </a>
                <div class="flex justify-end items-center gap-x-5 mt-3">
                  <div class="text-sm text-zinc-400">
                    آیا این جواب برایتان مفید بود؟
                  </div>
                  <ul class="grid my-3 gap-5 grid-cols-2">
                    <li>
                      <input type="radio" id="isgoodquest" name="quest" value="isgoodquest" class="hidden peer" required="">
                      <label for="isgoodquest" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-green-400 hover:bg-gray-100">
                        <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                      </label>
                    </li>
                    <li>
                      <input type="radio" id="isbadquest" name="quest" value="isbadquest" class="hidden peer" required="">
                      <label for="isbadquest" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 hover:bg-gray-100">
                        <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                      </label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- product slider 1 -->
      <div class="mt-14">
        <!-- TOP SLIDER -->
        <div class="flex justify-between px-5 md:px-10 items-center bg-white py-3 rounded-xl shadow-box">
          <div class="px-4 py-2 flex justify-center items-center gap-x-1 text-sm text-zinc-700">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#dc2626" viewBox="0 0 256 256"><path d="M222.72,67.91l-88-48.18a13.9,13.9,0,0,0-13.44,0l-88,48.18A14,14,0,0,0,26,80.18v95.64a14,14,0,0,0,7.28,12.27l88,48.18a13.92,13.92,0,0,0,13.44,0l88-48.18A14,14,0,0,0,230,175.82V80.18A14,14,0,0,0,222.72,67.91ZM127,30.25a2,2,0,0,1,1.92,0L212.51,76,178.57,94.57,94.05,48.31ZM122,223,39,177.57a2,2,0,0,1-1-1.75V86.66l84,46ZM43.49,76,81.56,55.15l84.51,46.26L128,122.24ZM218,175.82a2,2,0,0,1-1,1.75h0L134,223V132.64l36-19.71V152a6,6,0,0,0,12,0V106.37l36-19.71Z"></path></svg>
            <span class="text-red-500">
              پرفروش ترین
            </span>
            محصولات
          </div>
          <a href="">
            <div class="transition px-4 py-2 flex justify-center items-center text-sm text-zinc-700 hover:text-zinc-600">
              مشاهده همه
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#292929" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
            </div>
          </a>
        </div>
        <!-- SLIDER -->
        <div class="containerPSlider swiper">
          <div class="product-slider1 px-1">
            <div class="card-wrapper swiper-wrapper py-2">
              <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
                <div class="flex justify-between">
                  <div class="bg-red-200 rounded-lg px-2 py-1 text-red-500 flex items-center gap-x-1 text-xs">
                    <div>
                      12%
                    </div>
                    <div>
                      تخفیف
                    </div>
                  </div>
                  <div class="flex gap-x-1">
                    <div>
                      <svg class="bg-gray-200 rounded-full p-1 hover:fill-red-500 transition" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                    </div>
                    <div>
                      <svg class="bg-gray-200 rounded-full p-1 hover:fill-zinc-500 transition" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M236.24,179.76a6,6,0,0,1,0,8.48l-24,24a6,6,0,0,1-8.48-8.48L217.52,190H200.94a70.16,70.16,0,0,1-57-29.31l-41.71-58.4A58.11,58.11,0,0,0,55.06,78H32a6,6,0,0,1,0-12H55.06a70.16,70.16,0,0,1,57,29.31l41.71,58.4A58.11,58.11,0,0,0,200.94,178h16.58l-13.76-13.76a6,6,0,0,1,8.48-8.48Zm-92.06-74.41a5.91,5.91,0,0,0,3.48,1.12,6,6,0,0,0,4.89-2.51l1.19-1.67A58.11,58.11,0,0,1,200.94,78h16.58L203.76,91.76a6,6,0,1,0,8.48,8.48l24-24a6,6,0,0,0,0-8.48l-24-24a6,6,0,0,0-8.48,8.48L217.52,66H200.94a70.16,70.16,0,0,0-57,29.31L142.78,97A6,6,0,0,0,144.18,105.35Zm-32.36,45.3a6,6,0,0,0-8.37,1.39l-1.19,1.67A58.11,58.11,0,0,1,55.06,178H32a6,6,0,0,0,0,12H55.06a70.16,70.16,0,0,0,57-29.31l1.19-1.67A6,6,0,0,0,111.82,150.65Z"></path></svg>
                    </div>
                  </div>
                </div>
                <div class="image-box mb-6 ">
                  <div>
                    <img class="max-w-52 mx-auto" src="./assets/image/products/1.webp" alt="" />
                  </div>
                </div>
                <div class="space-y-6">
                  <span class="mb-2 h-8 md:h-10 flex justify-between">
                    <div class="flex flex-col gap-y-2">
                      <span class="text-sm font-semibold text-zinc-800">
                        لپ تاپ ایسوس مدل a12
                      </span>
                      <span class="text-xs text-zinc-500">
                        ASUS a12
                      </span>
                    </div>
                    <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                      <span>
                        <span>
                          (21+)
                        </span>
                        <span>
                          4.4
                        </span>
                      </span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                    </div>
                  </span>
                  <div class="bg-gray-100 rounded-xl py-3 px-2 flex justify-between items-center">
                    <div class="flex flex-col gap-y-2">
                      <div class="flex justify-center gap-x-1 font-semibold text-sm text-zinc-800">
                        <div>12,000,000</div>
                        <div>تومان</div>
                      </div>
                      <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                        <div class="line-through">12,700,000</div>
                        <div class="line-through">تومان</div>
                      </div>
                    </div>
                    <div>
                      <button class="flex items-center gap-x-1 text-sm py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition shadow-lg shadow-red-500/50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ededed" viewBox="0 0 256 256"><path d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z"></path></svg>
                        خرید محصول
                      </button>
                    </div>
                  </div>
                </div>
              </a>
              <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
                <div class="flex justify-between">
                  <div class="bg-red-200 rounded-lg px-2 py-1 text-red-500 flex items-center gap-x-1 text-xs">
                    <div>
                      12%
                    </div>
                    <div>
                      تخفیف
                    </div>
                  </div>
                  <div class="flex gap-x-1">
                    <div>
                      <svg class="bg-gray-200 rounded-full p-1 hover:fill-red-500 transition" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                    </div>
                    <div>
                      <svg class="bg-gray-200 rounded-full p-1 hover:fill-zinc-500 transition" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M236.24,179.76a6,6,0,0,1,0,8.48l-24,24a6,6,0,0,1-8.48-8.48L217.52,190H200.94a70.16,70.16,0,0,1-57-29.31l-41.71-58.4A58.11,58.11,0,0,0,55.06,78H32a6,6,0,0,1,0-12H55.06a70.16,70.16,0,0,1,57,29.31l41.71,58.4A58.11,58.11,0,0,0,200.94,178h16.58l-13.76-13.76a6,6,0,0,1,8.48-8.48Zm-92.06-74.41a5.91,5.91,0,0,0,3.48,1.12,6,6,0,0,0,4.89-2.51l1.19-1.67A58.11,58.11,0,0,1,200.94,78h16.58L203.76,91.76a6,6,0,1,0,8.48,8.48l24-24a6,6,0,0,0,0-8.48l-24-24a6,6,0,0,0-8.48,8.48L217.52,66H200.94a70.16,70.16,0,0,0-57,29.31L142.78,97A6,6,0,0,0,144.18,105.35Zm-32.36,45.3a6,6,0,0,0-8.37,1.39l-1.19,1.67A58.11,58.11,0,0,1,55.06,178H32a6,6,0,0,0,0,12H55.06a70.16,70.16,0,0,0,57-29.31l1.19-1.67A6,6,0,0,0,111.82,150.65Z"></path></svg>
                    </div>
                  </div>
                </div>
                <div class="image-box mb-6 ">
                  <div>
                    <img class="max-w-52 mx-auto" src="./assets/image/products/l1.webp" alt="" />
                  </div>
                </div>
                <div class="space-y-6">
                  <span class="mb-2 h-8 md:h-10 flex justify-between">
                    <div class="flex flex-col gap-y-2">
                      <span class="text-sm font-semibold text-zinc-800">
                        لپ تاپ ایسوس مدل a12
                      </span>
                      <span class="text-xs text-zinc-500">
                        ASUS a12
                      </span>
                    </div>
                    <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                      <span>
                        <span>
                          (21+)
                        </span>
                        <span>
                          4.4
                        </span>
                      </span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                    </div>
                  </span>
                  <div class="bg-gray-100 rounded-xl py-3 px-2 flex justify-between items-center">
                    <div class="flex flex-col gap-y-2">
                      <div class="flex justify-center gap-x-1 font-semibold text-sm text-zinc-800">
                        <div>12,000,000</div>
                        <div>تومان</div>
                      </div>
                      <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                        <div class="line-through">12,700,000</div>
                        <div class="line-through">تومان</div>
                      </div>
                    </div>
                    <div>
                      <button class="flex items-center gap-x-1 text-sm py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition shadow-lg shadow-red-500/50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ededed" viewBox="0 0 256 256"><path d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z"></path></svg>
                        خرید محصول
                      </button>
                    </div>
                  </div>
                </div>
              </a>
              <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
                <div class="flex justify-between">
                  <div class="bg-red-200 rounded-lg px-2 py-1 text-red-500 flex items-center gap-x-1 text-xs">
                    <div>
                      12%
                    </div>
                    <div>
                      تخفیف
                    </div>
                  </div>
                  <div class="flex gap-x-1">
                    <div>
                      <svg class="bg-gray-200 rounded-full p-1 hover:fill-red-500 transition" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                    </div>
                    <div>
                      <svg class="bg-gray-200 rounded-full p-1 hover:fill-zinc-500 transition" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M236.24,179.76a6,6,0,0,1,0,8.48l-24,24a6,6,0,0,1-8.48-8.48L217.52,190H200.94a70.16,70.16,0,0,1-57-29.31l-41.71-58.4A58.11,58.11,0,0,0,55.06,78H32a6,6,0,0,1,0-12H55.06a70.16,70.16,0,0,1,57,29.31l41.71,58.4A58.11,58.11,0,0,0,200.94,178h16.58l-13.76-13.76a6,6,0,0,1,8.48-8.48Zm-92.06-74.41a5.91,5.91,0,0,0,3.48,1.12,6,6,0,0,0,4.89-2.51l1.19-1.67A58.11,58.11,0,0,1,200.94,78h16.58L203.76,91.76a6,6,0,1,0,8.48,8.48l24-24a6,6,0,0,0,0-8.48l-24-24a6,6,0,0,0-8.48,8.48L217.52,66H200.94a70.16,70.16,0,0,0-57,29.31L142.78,97A6,6,0,0,0,144.18,105.35Zm-32.36,45.3a6,6,0,0,0-8.37,1.39l-1.19,1.67A58.11,58.11,0,0,1,55.06,178H32a6,6,0,0,0,0,12H55.06a70.16,70.16,0,0,0,57-29.31l1.19-1.67A6,6,0,0,0,111.82,150.65Z"></path></svg>
                    </div>
                  </div>
                </div>
                <div class="image-box mb-6 ">
                  <div>
                    <img class="max-w-52 mx-auto" src="./assets/image/products/l3.webp" alt="" />
                  </div>
                </div>
                <div class="space-y-6">
                  <span class="mb-2 h-8 md:h-10 flex justify-between">
                    <div class="flex flex-col gap-y-2">
                      <span class="text-sm font-semibold text-zinc-800">
                        لپ تاپ ایسوس مدل a12
                      </span>
                      <span class="text-xs text-zinc-500">
                        ASUS a12
                      </span>
                    </div>
                    <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                      <span>
                        <span>
                          (21+)
                        </span>
                        <span>
                          4.4
                        </span>
                      </span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                    </div>
                  </span>
                  <div class="bg-gray-100 rounded-xl py-3 px-2 flex justify-between items-center">
                    <div class="flex flex-col gap-y-2">
                      <div class="flex justify-center gap-x-1 font-semibold text-sm text-zinc-800">
                        <div>12,000,000</div>
                        <div>تومان</div>
                      </div>
                      <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                        <div class="line-through">12,700,000</div>
                        <div class="line-through">تومان</div>
                      </div>
                    </div>
                    <div>
                      <button class="flex items-center gap-x-1 text-sm py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition shadow-lg shadow-red-500/50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ededed" viewBox="0 0 256 256"><path d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z"></path></svg>
                        خرید محصول
                      </button>
                    </div>
                  </div>
                </div>
              </a>
              <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
                <div class="flex justify-between">
                  <div class="bg-red-200 rounded-lg px-2 py-1 text-red-500 flex items-center gap-x-1 text-xs">
                    <div>
                      12%
                    </div>
                    <div>
                      تخفیف
                    </div>
                  </div>
                  <div class="flex gap-x-1">
                    <div>
                      <svg class="bg-gray-200 rounded-full p-1 hover:fill-red-500 transition" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                    </div>
                    <div>
                      <svg class="bg-gray-200 rounded-full p-1 hover:fill-zinc-500 transition" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M236.24,179.76a6,6,0,0,1,0,8.48l-24,24a6,6,0,0,1-8.48-8.48L217.52,190H200.94a70.16,70.16,0,0,1-57-29.31l-41.71-58.4A58.11,58.11,0,0,0,55.06,78H32a6,6,0,0,1,0-12H55.06a70.16,70.16,0,0,1,57,29.31l41.71,58.4A58.11,58.11,0,0,0,200.94,178h16.58l-13.76-13.76a6,6,0,0,1,8.48-8.48Zm-92.06-74.41a5.91,5.91,0,0,0,3.48,1.12,6,6,0,0,0,4.89-2.51l1.19-1.67A58.11,58.11,0,0,1,200.94,78h16.58L203.76,91.76a6,6,0,1,0,8.48,8.48l24-24a6,6,0,0,0,0-8.48l-24-24a6,6,0,0,0-8.48,8.48L217.52,66H200.94a70.16,70.16,0,0,0-57,29.31L142.78,97A6,6,0,0,0,144.18,105.35Zm-32.36,45.3a6,6,0,0,0-8.37,1.39l-1.19,1.67A58.11,58.11,0,0,1,55.06,178H32a6,6,0,0,0,0,12H55.06a70.16,70.16,0,0,0,57-29.31l1.19-1.67A6,6,0,0,0,111.82,150.65Z"></path></svg>
                    </div>
                  </div>
                </div>
                <div class="image-box mb-6 ">
                  <div>
                    <img class="max-w-52 mx-auto" src="./assets/image/products/l9.webp" alt="" />
                  </div>
                </div>
                <div class="space-y-6">
                  <span class="mb-2 h-8 md:h-10 flex justify-between">
                    <div class="flex flex-col gap-y-2">
                      <span class="text-sm font-semibold text-zinc-800">
                        لپ تاپ ایسوس مدل a12
                      </span>
                      <span class="text-xs text-zinc-500">
                        ASUS a12
                      </span>
                    </div>
                    <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                      <span>
                        <span>
                          (21+)
                        </span>
                        <span>
                          4.4
                        </span>
                      </span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                    </div>
                  </span>
                  <div class="bg-gray-100 rounded-xl py-3 px-2 flex justify-between items-center">
                    <div class="flex flex-col gap-y-2">
                      <div class="flex justify-center gap-x-1 font-semibold text-sm text-zinc-800">
                        <div>12,000,000</div>
                        <div>تومان</div>
                      </div>
                      <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                        <div class="line-through">12,700,000</div>
                        <div class="line-through">تومان</div>
                      </div>
                    </div>
                    <div>
                      <button class="flex items-center gap-x-1 text-sm py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition shadow-lg shadow-red-500/50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ededed" viewBox="0 0 256 256"><path d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z"></path></svg>
                        خرید محصول
                      </button>
                    </div>
                  </div>
                </div>
              </a>
              <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
                <div class="flex justify-between">
                  <div class="bg-red-200 rounded-lg px-2 py-1 text-red-500 flex items-center gap-x-1 text-xs">
                    <div>
                      12%
                    </div>
                    <div>
                      تخفیف
                    </div>
                  </div>
                  <div class="flex gap-x-1">
                    <div>
                      <svg class="bg-gray-200 rounded-full p-1 hover:fill-red-500 transition" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                    </div>
                    <div>
                      <svg class="bg-gray-200 rounded-full p-1 hover:fill-zinc-500 transition" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M236.24,179.76a6,6,0,0,1,0,8.48l-24,24a6,6,0,0,1-8.48-8.48L217.52,190H200.94a70.16,70.16,0,0,1-57-29.31l-41.71-58.4A58.11,58.11,0,0,0,55.06,78H32a6,6,0,0,1,0-12H55.06a70.16,70.16,0,0,1,57,29.31l41.71,58.4A58.11,58.11,0,0,0,200.94,178h16.58l-13.76-13.76a6,6,0,0,1,8.48-8.48Zm-92.06-74.41a5.91,5.91,0,0,0,3.48,1.12,6,6,0,0,0,4.89-2.51l1.19-1.67A58.11,58.11,0,0,1,200.94,78h16.58L203.76,91.76a6,6,0,1,0,8.48,8.48l24-24a6,6,0,0,0,0-8.48l-24-24a6,6,0,0,0-8.48,8.48L217.52,66H200.94a70.16,70.16,0,0,0-57,29.31L142.78,97A6,6,0,0,0,144.18,105.35Zm-32.36,45.3a6,6,0,0,0-8.37,1.39l-1.19,1.67A58.11,58.11,0,0,1,55.06,178H32a6,6,0,0,0,0,12H55.06a70.16,70.16,0,0,0,57-29.31l1.19-1.67A6,6,0,0,0,111.82,150.65Z"></path></svg>
                    </div>
                  </div>
                </div>
                <div class="image-box mb-6 ">
                  <div>
                    <img class="max-w-52 mx-auto" src="./assets/image/products/l4.webp" alt="" />
                  </div>
                </div>
                <div class="space-y-6">
                  <span class="mb-2 h-8 md:h-10 flex justify-between">
                    <div class="flex flex-col gap-y-2">
                      <span class="text-sm font-semibold text-zinc-800">
                        لپ تاپ ایسوس مدل a12
                      </span>
                      <span class="text-xs text-zinc-500">
                        ASUS a12
                      </span>
                    </div>
                    <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                      <span>
                        <span>
                          (21+)
                        </span>
                        <span>
                          4.4
                        </span>
                      </span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                    </div>
                  </span>
                  <div class="bg-gray-100 rounded-xl py-3 px-2 flex justify-between items-center">
                    <div class="flex flex-col gap-y-2">
                      <div class="flex justify-center gap-x-1 font-semibold text-sm text-zinc-800">
                        <div>12,000,000</div>
                        <div>تومان</div>
                      </div>
                      <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                        <div class="line-through">12,700,000</div>
                        <div class="line-through">تومان</div>
                      </div>
                    </div>
                    <div>
                      <button class="flex items-center gap-x-1 text-sm py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition shadow-lg shadow-red-500/50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ededed" viewBox="0 0 256 256"><path d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z"></path></svg>
                        خرید محصول
                      </button>
                    </div>
                  </div>
                </div>
              </a>
              <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
                <div class="flex justify-between">
                  <div class="bg-red-200 rounded-lg px-2 py-1 text-red-500 flex items-center gap-x-1 text-xs">
                    <div>
                      12%
                    </div>
                    <div>
                      تخفیف
                    </div>
                  </div>
                  <div class="flex gap-x-1">
                    <div>
                      <svg class="bg-gray-200 rounded-full p-1 hover:fill-red-500 transition" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                    </div>
                    <div>
                      <svg class="bg-gray-200 rounded-full p-1 hover:fill-zinc-500 transition" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M236.24,179.76a6,6,0,0,1,0,8.48l-24,24a6,6,0,0,1-8.48-8.48L217.52,190H200.94a70.16,70.16,0,0,1-57-29.31l-41.71-58.4A58.11,58.11,0,0,0,55.06,78H32a6,6,0,0,1,0-12H55.06a70.16,70.16,0,0,1,57,29.31l41.71,58.4A58.11,58.11,0,0,0,200.94,178h16.58l-13.76-13.76a6,6,0,0,1,8.48-8.48Zm-92.06-74.41a5.91,5.91,0,0,0,3.48,1.12,6,6,0,0,0,4.89-2.51l1.19-1.67A58.11,58.11,0,0,1,200.94,78h16.58L203.76,91.76a6,6,0,1,0,8.48,8.48l24-24a6,6,0,0,0,0-8.48l-24-24a6,6,0,0,0-8.48,8.48L217.52,66H200.94a70.16,70.16,0,0,0-57,29.31L142.78,97A6,6,0,0,0,144.18,105.35Zm-32.36,45.3a6,6,0,0,0-8.37,1.39l-1.19,1.67A58.11,58.11,0,0,1,55.06,178H32a6,6,0,0,0,0,12H55.06a70.16,70.16,0,0,0,57-29.31l1.19-1.67A6,6,0,0,0,111.82,150.65Z"></path></svg>
                    </div>
                  </div>
                </div>
                <div class="image-box mb-6 ">
                  <div>
                    <img class="max-w-52 mx-auto" src="./assets/image/products/l7.webp" alt="" />
                  </div>
                </div>
                <div class="space-y-6">
                  <span class="mb-2 h-8 md:h-10 flex justify-between">
                    <div class="flex flex-col gap-y-2">
                      <span class="text-sm font-semibold text-zinc-800">
                        لپ تاپ ایسوس مدل a12
                      </span>
                      <span class="text-xs text-zinc-500">
                        ASUS a12
                      </span>
                    </div>
                    <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                      <span>
                        <span>
                          (21+)
                        </span>
                        <span>
                          4.4
                        </span>
                      </span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                    </div>
                  </span>
                  <div class="bg-gray-100 rounded-xl py-3 px-2 flex justify-between items-center">
                    <div class="flex flex-col gap-y-2">
                      <div class="flex justify-center gap-x-1 font-semibold text-sm text-zinc-800">
                        <div>12,000,000</div>
                        <div>تومان</div>
                      </div>
                      <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                        <div class="line-through">12,700,000</div>
                        <div class="line-through">تومان</div>
                      </div>
                    </div>
                    <div>
                      <button class="flex items-center gap-x-1 text-sm py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition shadow-lg shadow-red-500/50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ededed" viewBox="0 0 256 256"><path d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z"></path></svg>
                        خرید محصول
                      </button>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="bg-red-400 w-full h-72 rounded-2xl -mt-60 relative">
          </div>
          <div class="swiper-btn-next swiper-navbtn"></div>
          <div class="swiper-btn-prev swiper-navbtn"></div>
        </div>
      </div>
    </div>
  </main>
  <!-- footer -->
  @endsection

