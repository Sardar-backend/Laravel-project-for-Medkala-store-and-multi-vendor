@extends('base')
@section('content')
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
    <!-- top section -->
    <div class="lg:mr-8 lg:ml-16 h-full p-5 text-sm bg-white rounded-xl shadow-box-sm flex items-center gap-x-2">
      <a href="" class="text-zinc-800 hover:text-red-400 transition">
        خانه
      </a>
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
      </div>
      <a href="" class="text-zinc-800 hover:text-red-400 transition">
        صفحه
      </a>
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
      </div>
      <a class="text-red-400" href="">
        وبلاگ
      </a>
    </div>
    <!-- category -->
    <div class="my-2 py-5 lg:px-10 md:flex">
      <div class="md:w-3/12">
        <div class="px-2 sm:px-3 py-3 bg-white rounded-xl shadow-box-sm">
          <button class="mx-auto flex gap-x-1 group items-center text-right w-full px-2 py-3 text-sm hover:bg-red-400 hover:text-white transition text-gray-700 rounded-lg">
            <svg class="group-hover:fill-white transition-colors" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M88,112a8,8,0,0,1,8-8h80a8,8,0,0,1,0,16H96A8,8,0,0,1,88,112Zm8,40h80a8,8,0,0,0,0-16H96a8,8,0,0,0,0,16ZM232,64V184a24,24,0,0,1-24,24H32A24,24,0,0,1,8,184.11V88a8,8,0,0,1,16,0v96a8,8,0,0,0,16,0V64A16,16,0,0,1,56,48H216A16,16,0,0,1,232,64Zm-16,0H56V184a23.84,23.84,0,0,1-1.37,8H208a8,8,0,0,0,8-8Z"></path></svg>
            جدیدترین ها
          </button>
          <button class="mx-auto mt-3 flex gap-x-1 group items-center text-right w-full px-2 py-3 text-sm hover:bg-red-400 hover:text-white transition text-gray-700 rounded-lg">
            <svg class="group-hover:fill-white transition-colors" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M248,124a56.11,56.11,0,0,0-32-50.61V72a48,48,0,0,0-88-26.49A48,48,0,0,0,40,72v1.39a56,56,0,0,0,0,101.2V176a48,48,0,0,0,88,26.49A48,48,0,0,0,216,176v-1.41A56.09,56.09,0,0,0,248,124ZM88,208a32,32,0,0,1-31.81-28.56A55.87,55.87,0,0,0,64,180h8a8,8,0,0,0,0-16H64A40,40,0,0,1,50.67,86.27,8,8,0,0,0,56,78.73V72a32,32,0,0,1,64,0v68.26A47.8,47.8,0,0,0,88,128a8,8,0,0,0,0,16,32,32,0,0,1,0,64Zm104-44h-8a8,8,0,0,0,0,16h8a55.87,55.87,0,0,0,7.81-.56A32,32,0,1,1,168,144a8,8,0,0,0,0-16,47.8,47.8,0,0,0-32,12.26V72a32,32,0,0,1,64,0v6.73a8,8,0,0,0,5.33,7.54A40,40,0,0,1,192,164Zm16-52a8,8,0,0,1-8,8h-4a36,36,0,0,1-36-36V80a8,8,0,0,1,16,0v4a20,20,0,0,0,20,20h4A8,8,0,0,1,208,112ZM60,120H56a8,8,0,0,1,0-16h4A20,20,0,0,0,80,84V80a8,8,0,0,1,16,0v4A36,36,0,0,1,60,120Z"></path></svg>
            تکنولوژی و کالای دیجیتال
          </button>
          <button class="mx-auto mt-3 flex gap-x-1 group items-center text-right w-full px-2 py-3 text-sm hover:bg-red-400 hover:text-white transition text-gray-700 rounded-lg">
            <svg class="group-hover:fill-white transition-colors" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M176,112H152a8,8,0,0,1,0-16h24a8,8,0,0,1,0,16ZM104,96H96V88a8,8,0,0,0-16,0v8H72a8,8,0,0,0,0,16h8v8a8,8,0,0,0,16,0v-8h8a8,8,0,0,0,0-16ZM241.48,200.65a36,36,0,0,1-54.94,4.81c-.12-.12-.24-.24-.35-.37L146.48,160h-37L69.81,205.09l-.35.37A36.08,36.08,0,0,1,44,216,36,36,0,0,1,8.56,173.75a.68.68,0,0,1,0-.14L24.93,89.52A59.88,59.88,0,0,1,83.89,40H172a60.08,60.08,0,0,1,59,49.25c0,.06,0,.12,0,.18l16.37,84.17a.68.68,0,0,1,0,.14A35.74,35.74,0,0,1,241.48,200.65ZM172,144a44,44,0,0,0,0-88H83.89A43.9,43.9,0,0,0,40.68,92.37l0,.13L24.3,176.59A20,20,0,0,0,58,194.3l41.92-47.59a8,8,0,0,1,6-2.71Zm59.7,32.59-8.74-45A60,60,0,0,1,172,160h-4.2L198,194.31a20.09,20.09,0,0,0,17.46,5.39,20,20,0,0,0,16.23-23.11Z"></path></svg>
            بازی و سرگرمی
          </button>
          <button class="mx-auto mt-3 flex gap-x-1 group items-center text-right w-full px-2 py-3 text-sm hover:bg-red-400 hover:text-white transition text-gray-700 rounded-lg">
            <svg class="group-hover:fill-white transition-colors" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M231.65,194.55,198.46,36.75a16,16,0,0,0-19-12.39L132.65,34.42a16.08,16.08,0,0,0-12.3,19l33.19,157.8A16,16,0,0,0,169.16,224a16.25,16.25,0,0,0,3.38-.36l46.81-10.06A16.09,16.09,0,0,0,231.65,194.55ZM136,50.15c0-.06,0-.09,0-.09l46.8-10,3.33,15.87L139.33,66Zm6.62,31.47,46.82-10.05,3.34,15.9L146,97.53Zm6.64,31.57,46.82-10.06,13.3,63.24-46.82,10.06ZM216,197.94l-46.8,10-3.33-15.87L212.67,182,216,197.85C216,197.91,216,197.94,216,197.94ZM104,32H56A16,16,0,0,0,40,48V208a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V48A16,16,0,0,0,104,32ZM56,48h48V64H56Zm0,32h48v96H56Zm48,128H56V192h48v16Z"></path></svg>
            کتاب و ادبیات
          </button>
          <button class="mx-auto mt-3 flex gap-x-1 group items-center text-right w-full px-2 py-3 text-sm hover:bg-red-400 hover:text-white transition text-gray-700 rounded-lg">
            <svg class="group-hover:fill-white transition-colors" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M224,216H183.36A103.95,103.95,0,1,0,128,232h96a8,8,0,0,0,0-16ZM40,128a88,88,0,1,1,88,88A88.1,88.1,0,0,1,40,128Zm88-24a24,24,0,1,0-24-24A24,24,0,0,0,128,104Zm0-32a8,8,0,1,1-8,8A8,8,0,0,1,128,72Zm24,104a24,24,0,1,0-24,24A24,24,0,0,0,152,176Zm-32,0a8,8,0,1,1,8,8A8,8,0,0,1,120,176Zm56-24a24,24,0,1,0-24-24A24,24,0,0,0,176,152Zm0-32a8,8,0,1,1-8,8A8,8,0,0,1,176,120ZM80,104a24,24,0,1,0,24,24A24,24,0,0,0,80,104Zm0,32a8,8,0,1,1,8-8A8,8,0,0,1,80,136Z"></path></svg>
            فیلم و سریال
          </button>
          <button class="mx-auto mt-3 flex gap-x-1 group items-center text-right w-full px-2 py-3 text-sm hover:bg-red-400 hover:text-white transition text-gray-700 rounded-lg">
            <svg class="group-hover:fill-white transition-colors" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M223.45,40.07a8,8,0,0,0-7.52-7.52C139.8,28.08,78.82,51,52.82,94a87.09,87.09,0,0,0-12.76,49c.57,15.92,5.21,32,13.79,47.85l-19.51,19.5a8,8,0,0,0,11.32,11.32l19.5-19.51C81,210.73,97.09,215.37,113,215.94q1.67.06,3.33.06A86.93,86.93,0,0,0,162,203.18C205,177.18,227.93,116.21,223.45,40.07ZM153.75,189.5c-22.75,13.78-49.68,14-76.71.77l88.63-88.62a8,8,0,0,0-11.32-11.32L65.73,179c-13.19-27-13-54,.77-76.71,22.09-36.47,74.6-56.44,141.31-54.06C210.2,114.89,190.22,167.41,153.75,189.5Z"></path></svg>
            سبک زندگی
          </button>
        </div>
      </div>
      <div class="md:w-9/12 px-2 sm:px-6 mt-5 md:mt-0">
        <div>
          <img class="rounded-lg" src="./assets/image/blog/Banner.jpg" alt="">
        </div>
        <!-- section blog -->
        <div class="rounded-2xl mx-auto text-gray-100 mt-5">
          <!-- main blog -->
          <div class="flex flex-col md:flex-row gap-5">
            <div class="relative md:w-1/3 flex items-end justify-start text-left bg-center bg-cover group">
              <img class="rounded-xl" src="./assets/image/blog/1.jpg" alt="">
              <div class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b via-transparent from-gray-900 to-gray-900 rounded-xl"></div>
              <div class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3">
                <a rel="noopener noreferrer" href="#" class="px-3 py-2 text-xs font-semibold tracki uppercase text-gray-100 bgundefined">
                  ساعت هوشمند
                </a>
                <div class="flex flex-col justify-start text-center text-gray-100">
                  <span class="text-2xl font-semibold leadi tracki">04</span>
                  <span class="text-sm">فروردین</span>
                </div>
              </div>
              <h2 class="z-10 p-5 absolute -bottom-1 group-hover:bottom-0 group-hover:block transition-all text-right">
                <a href="#" class="text-md opacity-90 text-gray-100 transition-all">
                  بررسی ساعت هوشمند گلوریمی M1 پرو
                </a>
                <br>
                <a href="#" class="text-sm bg-gray-300 bg-opacity-30 hover:bg-opacity-45 w-fit rounded-lg px-3 py-1 opacity-90 text-gray-100 mt-2 hidden group-hover:block transition-all">
                  مطالعه بیشتر
                </a>
              </h2>
            </div>
            <div class="relative md:w-1/3 flex items-end justify-start text-left bg-center bg-cover group">
              <img class="rounded-xl" src="./assets/image/blog/2.jpg" alt="">
              <div class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b via-transparent from-gray-900 to-gray-900 rounded-xl"></div>
              <div class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3">
                <a rel="noopener noreferrer" href="#" class="px-3 py-2 text-xs font-semibold tracki uppercase text-gray-100 bgundefined">
                  غذا و نوشیدنی
                </a>
                <div class="flex flex-col justify-start text-center text-gray-100">
                  <span class="text-2xl font-semibold leadi tracki">06</span>
                  <span class="text-sm">فروردین</span>
                </div>
              </div>
              <h2 class="z-10 p-5 absolute -bottom-1 group-hover:bottom-0 group-hover:block transition-all text-right">
                <a href="#" class="text-md opacity-90 text-gray-100 transition-all">
                  پختن تاکو مثل خود مکزیکی ها
                </a>
                <br>
                <a href="#" class="text-sm bg-gray-300 bg-opacity-30 hover:bg-opacity-45 w-fit rounded-lg px-3 py-1 opacity-90 text-gray-100 mt-2 hidden group-hover:block transition-all">
                  مطالعه بیشتر
                </a>
              </h2>
            </div>
            <div class="relative md:w-1/3 flex items-end justify-start text-left bg-center bg-cover group">
              <img class="rounded-xl" src="./assets/image/blog/4.jpg" alt="">
              <div class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b via-transparent from-gray-900 to-gray-900 rounded-xl"></div>
              <div class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3">
                <a rel="noopener noreferrer" href="#" class="px-3 py-2 text-xs font-semibold tracki uppercase text-gray-100 bgundefined">
                  خانه و آشپرخانه
                </a>
                <div class="flex flex-col justify-start text-center text-gray-100">
                  <span class="text-2xl font-semibold leadi tracki">03</span>
                  <span class="text-sm">اردیبهشت</span>
                </div>
              </div>
              <h2 class="z-10 p-5 absolute -bottom-1 group-hover:bottom-0 group-hover:block transition-all text-right">
                <a href="#" class="text-md opacity-90 text-gray-100 transition-all">
                  چه رنگی رو برای آشپزخانه استفاده کنیم؟
                </a>
                <br>
                <a href="#" class="text-sm bg-gray-300 bg-opacity-30 hover:bg-opacity-45 w-fit rounded-lg px-3 py-1 opacity-90 text-gray-100 mt-2 hidden group-hover:block transition-all">
                  مطالعه بیشتر
                </a>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- blog slider -->
    <div class="mt-10 px-2 sm:px-6 md:px-16">
      <!-- TOP SLIDER -->
      <div class="flex justify-between px-5 md:px-10 items-center bg-white py-3 rounded-xl shadow-box">
        <div class="px-4 py-2 flex justify-center items-center gap-x-1 text-sm text-zinc-700">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#dc2626" viewBox="0 0 256 256"><path d="M100,56H40A16,16,0,0,0,24,72v64a16,16,0,0,0,16,16h60v8a32,32,0,0,1-32,32,8,8,0,0,0,0,16,48.05,48.05,0,0,0,48-48V72A16,16,0,0,0,100,56Zm0,80H40V72h60ZM216,56H156a16,16,0,0,0-16,16v64a16,16,0,0,0,16,16h60v8a32,32,0,0,1-32,32,8,8,0,0,0,0,16,48.05,48.05,0,0,0,48-48V72A16,16,0,0,0,216,56Zm0,80H156V72h60Z"></path></svg>
          <span class="text-red-500">
            جدیدترین مقالات
          </span>
        </div>
        <a href="">
          <div class="transition px-4 py-2 flex justify-center items-center text-sm text-zinc-700 hover:text-zinc-600">
            مشاهده همه
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#292929" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
          </div>
        </a>
      </div>
      <!-- SLIDER -->
      <div class="containerPSlider swiper mb-10">
        <div class="blog-slider px-1">
          <div class="card-wrapper swiper-wrapper py-2">
            <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
              <div class="image-box mb-6 ">
                <div class="relative">
                  <img class="mx-auto rounded-xl " src="./assets/image/blog/3.jpg" alt="" />
                  <div class="absolute top-2 left-2">
                    <svg class="bg-gray-200 rounded-full p-1 hover:fill-gray-500 transition" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,177.57-51.77-32.35a8,8,0,0,0-8.48,0L72,209.57V48H184Z"></path></svg>
                  </div>
                </div>
              </div>
              <div class="">
                <span class="mb-2 h-6 flex justify-between items-center">
                  <div class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      مزیت های یک ساعت هوشمند
                    </span>
                  </div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span>
                      <span>
                        2 دقیقه
                      </span>
                    </span>
                    <svg class="fill-gray-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                  </div>
                </span>
              </div>
            </a>
            <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
              <div class="image-box mb-6 ">
                <div class="relative">
                  <img class="mx-auto rounded-xl " src="./assets/image/blog/5.jpg" alt="" />
                  <div class="absolute top-2 left-2">
                    <svg class="bg-gray-200 rounded-full p-1 hover:fill-gray-500 transition" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,177.57-51.77-32.35a8,8,0,0,0-8.48,0L72,209.57V48H184Z"></path></svg>
                  </div>
                </div>
              </div>
              <div class="">
                <span class="mb-2 h-6 flex justify-between items-center">
                  <div class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      مزیت های یک ساعت هوشمند
                    </span>
                  </div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span>
                      <span>
                        2 دقیقه
                      </span>
                    </span>
                    <svg class="fill-gray-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                  </div>
                </span>
              </div>
            </a>
            <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
              <div class="image-box mb-6 ">
                <div class="relative">
                  <img class="mx-auto rounded-xl " src="./assets/image/blog/6.jpg" alt="" />
                  <div class="absolute top-2 left-2">
                    <svg class="bg-gray-200 rounded-full p-1 hover:fill-gray-500 transition" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,177.57-51.77-32.35a8,8,0,0,0-8.48,0L72,209.57V48H184Z"></path></svg>
                  </div>
                </div>
              </div>
              <div class="">
                <span class="mb-2 h-6 flex justify-between items-center">
                  <div class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      مزیت های یک ساعت هوشمند
                    </span>
                  </div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span>
                      <span>
                        2 دقیقه
                      </span>
                    </span>
                    <svg class="fill-gray-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                  </div>
                </span>
              </div>
            </a>
            <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
              <div class="image-box mb-6 ">
                <div class="relative">
                  <img class="mx-auto rounded-xl " src="./assets/image/blog/7.jpg" alt="" />
                  <div class="absolute top-2 left-2">
                    <svg class="bg-gray-200 rounded-full p-1 hover:fill-gray-500 transition" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,177.57-51.77-32.35a8,8,0,0,0-8.48,0L72,209.57V48H184Z"></path></svg>
                  </div>
                </div>
              </div>
              <div class="">
                <span class="mb-2 h-6 flex justify-between items-center">
                  <div class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      مزیت های یک ساعت هوشمند
                    </span>
                  </div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span>
                      <span>
                        2 دقیقه
                      </span>
                    </span>
                    <svg class="fill-gray-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                  </div>
                </span>
              </div>
            </a>
            <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
              <div class="image-box mb-6 ">
                <div class="relative">
                  <img class="mx-auto rounded-xl " src="./assets/image/blog/8.jpg" alt="" />
                  <div class="absolute top-2 left-2">
                    <svg class="bg-gray-200 rounded-full p-1 hover:fill-gray-500 transition" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,177.57-51.77-32.35a8,8,0,0,0-8.48,0L72,209.57V48H184Z"></path></svg>
                  </div>
                </div>
              </div>
              <div class="">
                <span class="mb-2 h-6 flex justify-between items-center">
                  <div class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      مزیت های یک ساعت هوشمند
                    </span>
                  </div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span>
                      <span>
                        2 دقیقه
                      </span>
                    </span>
                    <svg class="fill-gray-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                  </div>
                </span>
              </div>
            </a>
            <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
              <div class="image-box mb-6 ">
                <div class="relative">
                  <img class="mx-auto rounded-xl " src="./assets/image/blog/9.jpg" alt="" />
                  <div class="absolute top-2 left-2">
                    <svg class="bg-gray-200 rounded-full p-1 hover:fill-gray-500 transition" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,177.57-51.77-32.35a8,8,0,0,0-8.48,0L72,209.57V48H184Z"></path></svg>
                  </div>
                </div>
              </div>
              <div class="">
                <span class="mb-2 h-6 flex justify-between items-center">
                  <div class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      مزیت های یک ساعت هوشمند
                    </span>
                  </div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span>
                      <span>
                        2 دقیقه
                      </span>
                    </span>
                    <svg class="fill-gray-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                  </div>
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="bg-red-400 w-full h-72 rounded-2xl -mt-60 relative">
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
    <!-- new blogs -->
    <div class="my-2 py-5 lg:px-10 flex flex-col lg:flex-row gap-4">
      <div class="lg:w-4/12">
        <div class="p-3 bg-white rounded-xl shadow-box-sm">
          <div class="mx-auto flex gap-x-1 group items-center text-right w-full px-2 py-3 text-sm text-gray-600 rounded-lg mb-2 font-semibold">
            <span class="w-44">
              جدیدترین مقالات
            </span>
            <span class="bg-red-400 w-full h-px"></span>
          </div>
          <ul class="grid w-full gap-3">
            <li>
              <label class="flex items-center justify-start gap-x-2 w-full p-2 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer hover:text-gray-600 hover:bg-gray-100">
                <img class="max-w-20 rounded-md" src="./assets/image/blog/2.jpg" alt="">
                <div class="text-center flex flex-col space-y-3">
                  <div class="text-xs sm:text-sm">طرز پخت تاکو مثل مکزیکی ها</div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-400">
                    <svg class="fill-gray-400" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                    <span>
                      2 دقیقه
                    </span>
                  </div>
                </div>
              </label>
            </li>
            <li>
              <label class="flex items-center justify-start gap-x-2 w-full p-2 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer hover:text-gray-600 hover:bg-gray-100">
                <img class="max-w-20 rounded-md" src="./assets/image/blog/3.jpg" alt="">
                <div class="text-center flex flex-col space-y-3">
                  <div class="text-xs sm:text-sm">طرز پخت تاکو مثل مکزیکی ها</div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-400">
                    <svg class="fill-gray-400" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                    <span>
                      2 دقیقه
                    </span>
                  </div>
                </div>
              </label>
            </li>
            <li>
              <label class="flex items-center justify-start gap-x-2 w-full p-2 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer hover:text-gray-600 hover:bg-gray-100">
                <img class="max-w-20 rounded-md" src="./assets/image/blog/1.jpg" alt="">
                <div class="text-center flex flex-col space-y-3">
                  <div class="text-xs sm:text-sm">طرز پخت تاکو مثل مکزیکی ها</div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-400">
                    <svg class="fill-gray-400" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                    <span>
                      2 دقیقه
                    </span>
                  </div>
                </div>
              </label>
            </li>
            <li>
              <label class="flex items-center justify-start gap-x-2 w-full p-2 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer hover:text-gray-600 hover:bg-gray-100">
                <img class="max-w-20 rounded-md" src="./assets/image/blog/5.jpg" alt="">
                <div class="text-center flex flex-col space-y-3">
                  <div class="text-xs sm:text-sm">طرز پخت تاکو مثل مکزیکی ها</div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-400">
                    <svg class="fill-gray-400" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                    <span>
                      2 دقیقه
                    </span>
                  </div>
                </div>
              </label>
            </li>
            <li>
              <label class="flex items-center justify-start gap-x-2 w-full p-2 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer hover:text-gray-600 hover:bg-gray-100">
                <img class="max-w-20 rounded-md" src="./assets/image/blog/4.jpg" alt="">
                <div class="text-center flex flex-col space-y-3">
                  <div class="text-xs sm:text-sm">طرز پخت تاکو مثل مکزیکی ها</div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-400">
                    <svg class="fill-gray-400" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                    <span>
                      2 دقیقه
                    </span>
                  </div>
                </div>
              </label>
            </li>
            <li>
              <label class="flex items-center justify-start gap-x-2 w-full p-2 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer hover:text-gray-600 hover:bg-gray-100">
                <img class="max-w-20 rounded-md" src="./assets/image/blog/6.jpg" alt="">
                <div class="text-center flex flex-col space-y-3">
                  <div class="text-xs sm:text-sm">طرز پخت تاکو مثل مکزیکی ها</div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-400">
                    <svg class="fill-gray-400" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                    <span>
                      2 دقیقه
                    </span>
                  </div>
                </div>
              </label>
            </li>
          </ul>
        </div>
      </div>
      <div class="lg:w-10/12">
        <div class="border rounded-xl p-4">
          <img class="rounded-lg" src="./assets/image/blog/switch-2.jpg" alt="">
          <div class="mt-7">
            <a href="" class="text-xl md:text-2xl text-zinc-500 hover:text-zinc-600 transition">
              معرفی بازی فکری کلاغ پر؛ بازی برای تقویت حافظه کوتاه مدت
            </a>
            <div class="bg-red-400 w-6/12 h-px mt-5"></div>
            <div class="text-zinc-500 text-sm my-7 flex flex-wrap">
              <span class="leading-7 font-normal">
                بازی فکری کلاغ پر یک بازی فکری حافظه‌ای است که برای 2 تا 6 نفر طراحی شده است. اگرچه بازی می‌تواند برای همه‌ی سنین خوب باشد اما مشخصاً هدف اصلی آن کمک به تقویت حافظه کوتاه مدت کودکان است و به آن‌ها کمک خواهد کرد. در بازی توکن‌هایی سف...
                <a href="" class="text-blue-500 hover:text-blue-400 transition text-sm">
                   خواندن بیشتر
                </a>
              </span>
            </div>
            <div class="flex items-center justify-between">
              <a href="" class="text-zinc-100 text-sm bg-gray-400 hover:bg-gray-300 transition px-3 py-2 rounded-md">
                امیررضا کریمی
              </a>
              <div class="flex items-start gap-x-1 text-xs text-zinc-400">
                <svg class="fill-gray-400" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                <span>
                  3 ساعت پیش
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 5 section blog -->
    <div>
      <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3 lg:gap-5 mt-5 mb-10">
        @foreach ($blogs as $blog)
            <a href="{{route('blog_single' , ['id'=> $blog->id])}}" class="my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg h-fit">
            <div class="image-box mb-6">
                <div class="relative">
                <img class="mx-auto rounded-xl " src="./assets/image/blog/1.jpg" alt="" />
                <div class="absolute top-2 left-2">
                    <svg class="bg-gray-200 rounded-full p-1 hover:fill-gray-500 transition" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,177.57-51.77-32.35a8,8,0,0,0-8.48,0L72,209.57V48H184Z"></path></svg>
                </div>
                </div>
            </div>
            <div class="">
                <span class="mb-2 flex justify-between items-center flex-wrap gap-y-2">
                <div class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                    مزیت های یک ساعت هوشمند
                    </span>
                </div>
                <div class="flex items-start gap-x-1 text-xs text-zinc-400">
                    <span>
                    2 دقیقه
                    </span>
                    <svg class="fill-gray-400" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                </div>
                </span>
            </div>
            </a>

        @endforeach
      </div>
      <!-- number pages -->
      <!-- <div class="mb-14">
        <ul class="flex items-center justify-center gap-x-2 md:gap-x-3 h-8 text-sm">
          <li>
            <a href="#" class="flex items-center justify-center transition shadow-lg px-3 h-8 ms-0 text-gray-500 bg-white rounded-lg  hover:bg-red-100 hover:text-red-400">
              <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"></path>
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="flex items-center justify-center transition shadow-lg px-3 h-8 text-red-500 bg-red-200 rounded-lg hover:bg-red-100">1</a>
          </li>
          <li>
            <a href="#" class="flex items-center justify-center transition shadow-lg px-3 h-8 text-gray-500 bg-white rounded-lg hover:bg-red-100 hover:text-red-400">2</a>
          </li>
          <li>
            <a href="#" class="flex items-center justify-center transition shadow-lg px-3 h-8 rounded-lg text-gray-500 bg-white  hover:bg-red-100 hover:text-red-400">3</a>
          </li>
          <li>
            <a href="#" class="flex items-center justify-center transition shadow-lg px-3 h-8 text-gray-500 bg-white rounded-lg  hover:bg-red-100 hover:text-red-400">...</a>
          </li>
          <li>
            <a href="#" class="flex items-center justify-center transition shadow-lg px-3 h-8 text-gray-500 bg-white rounded-lg  hover:bg-red-100 hover:text-red-400">8</a>
          </li>
          <li>
            <a href="#" class="flex items-center justify-center transition shadow-lg px-3 h-8 text-gray-500 bg-white rounded-lg  hover:bg-red-100 hover:text-red-400">
              <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
              </svg>
            </a>
          </li>
        </ul>
      </div> -->
      <div class="mb-14">
    <ul class="flex items-center justify-center gap-x-2 md:gap-x-3 h-8 text-sm">
        {{-- دکمه قبلی --}}
        @if ($blogs->onFirstPage())
            <li>
                <span class="flex items-center justify-center transition shadow-lg px-3 h-8 ms-0 text-gray-300 bg-white rounded-lg">
                    <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"></path>
                    </svg>
                </span>
            </li>
        @else
            <li>
                <a href="{{ $blogs->previousPageUrl() }}" class="flex items-center justify-center transition shadow-lg px-3 h-8 ms-0 text-gray-500 bg-white rounded-lg hover:bg-red-100 hover:text-red-400">
                    <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"></path>
                    </svg>
                </a>
            </li>
        @endif

        {{-- شماره صفحات --}}
        @foreach ($blogs->links()->elements[0] as $page => $url)
            @if ($page == $blogs->currentPage())
                <li>
                    <span class="flex items-center justify-center transition shadow-lg px-3 h-8 text-red-500 bg-red-200 rounded-lg">{{ $page }}</span>
                </li>
            @else
                <li>
                    <a href="{{ $url }}" class="flex items-center justify-center transition shadow-lg px-3 h-8 text-gray-500 bg-white rounded-lg hover:bg-red-100 hover:text-red-400">{{ $page }}</a>
                </li>
            @endif
        @endforeach

        {{-- دکمه بعدی --}}
        @if ($blogs->hasMorePages())
            <li>
                <a href="{{ $blogs->nextPageUrl() }}" class="flex items-center justify-center transition shadow-lg px-3 h-8 text-gray-500 bg-white rounded-lg hover:bg-red-100 hover:text-red-400">
                    <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                    </svg>
                </a>
            </li>
        @else
            <li>
                <span class="flex items-center justify-center transition shadow-lg px-3 h-8 text-gray-300 bg-white rounded-lg">
                    <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                    </svg>
                </span>
            </li>
        @endif
    </ul>
</div>

    </div>
  </main>
  <!-- footer -->
  @endsection
