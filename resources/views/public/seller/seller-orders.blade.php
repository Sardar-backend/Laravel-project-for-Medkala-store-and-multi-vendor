<!DOCTYPE html>
<html lang="fa" dir="rtl" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./assets/css/output.css" />
    <link rel="stylesheet" href="./assets/css/seller-font.css" />

    <title>سفارشات</title>

  </head>
  <body class="bg-[#fcfcfc] max-w-[1800px] mx-auto">
    <!-- header -->
    <header class="w-full flex p-3 border-b bg-white items-center justify-between">
      <!-- mobile menu logo -->
      <svg class="fill-zinc-700 md:hidden" onclick="showNavbar()" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path></svg>
      <!-- navbar moblie -->
      <div class="flex absolute w-full h-screen z-50 -right-full top-0 transition-all ease-out duration-500" id="navbar">
        <div class="bg-white w-9/12 h-screen py-5 drop-shadow-2xl max-w-md">
          <div class="mx-auto mb-5">
            <a href="#">
              <img class="w-44 mx-auto" src="./assets/image/logo.png" alt="">
            </a>
          </div>
          <ul class="flex flex-col gap-y-3 px-2">
              <li class="text-zinc-700 hover:text-zinc-900 hover:bg-gray-200 transition p-2 rounded-lg">
                <a href="#">
                  صفحه اصلی فروشنده
                </a>
              </li>
              <li class="text-zinc-700 hover:text-zinc-900 group">
                <div class="relative">
                  <div class="flex gap-x-1 items-center hover:bg-gray-200 transition p-2 rounded-lg">
                    کالا ها
                    <svg class="group-hover:rotate-180 transition-all duration-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
                  </div>
                  <div class="bg-white hidden group-hover:flex flex-col p-2 top-5 w-full rounded-lg shadow-xl">
                    <a href="" class="hover:bg-gray-100 text-zinc-600 hover:text-zinc-800 transition p-2 rounded-md flex gap-x-1 items-center justify-between">
                      ثبت کالای جدید
                      <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
                    </a>
                    <a href="" class="hover:bg-gray-100 text-zinc-600 hover:text-zinc-800 transition p-2 rounded-md flex gap-x-1 items-center justify-between">
                      کالا های ثبت شده
                      <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
                    </a>
                  </div>
                </div>
              </li>
              <li class="text-zinc-700 hover:text-zinc-900 group/two">
                <div class="relative">
                  <div class="flex gap-x-1 items-center hover:bg-gray-200 transition p-2 rounded-lg">
                    سفارشات
                    <svg class="group-hover/two:rotate-180 transition-all duration-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
                  </div>
                  <div class="bg-white hidden group-hover/two:flex flex-col p-2 top-5 w-full rounded-lg shadow-xl">
                    <a href="" class="hover:bg-gray-100 text-zinc-600 hover:text-zinc-800 transition p-2 rounded-md flex gap-x-1 items-center justify-between">
                      سفارشات من
                      <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
                    </a>
                    <a href="" class="hover:bg-gray-100 text-zinc-600 hover:text-zinc-800 transition p-2 rounded-md flex gap-x-1 items-center justify-between">
                      سفارشات قبلی
                      <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
                    </a>
                  </div>
                </div>
              </li>
              <li class="text-zinc-700 hover:text-zinc-900 group/two">
                <div class="relative">
                  <div class="flex gap-x-1 items-center hover:bg-gray-200 transition p-2 rounded-lg">
                    مالی
                    <svg class="group-hover/two:rotate-180 transition-all duration-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
                  </div>
                  <div class="bg-white hidden group-hover/two:flex flex-col p-2 top-5 w-full rounded-lg shadow-xl">
                    <a href="" class="hover:bg-gray-100 text-zinc-600 hover:text-zinc-800 transition p-2 rounded-md flex gap-x-1 items-center justify-between">
                      درآمد ها
                      <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
                    </a>
                    <a href="" class="hover:bg-gray-100 text-zinc-600 hover:text-zinc-800 transition p-2 rounded-md flex gap-x-1 items-center justify-between">
                      تسویه حساب
                      <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
                    </a>
                    <a href="" class="hover:bg-gray-100 text-zinc-600 hover:text-zinc-800 transition p-2 rounded-md flex gap-x-1 items-center justify-between">
                      جریمه ها
                      <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
                    </a>
                  </div>
                </div>
              </li>
              <li class="text-zinc-700 hover:text-zinc-900 group/two">
                <div class="relative">
                  <div class="flex gap-x-1 items-center hover:bg-gray-200 transition p-2 rounded-lg">
                    بازاریابی
                    <svg class="group-hover/two:rotate-180 transition-all duration-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
                  </div>
                  <div class="bg-white hidden group-hover/two:flex flex-col p-2 top-5 w-full rounded-lg shadow-xl">
                    <a href="" class="hover:bg-gray-100 text-zinc-600 hover:text-zinc-800 transition p-2 rounded-md flex gap-x-1 items-center justify-between">
                      تخفیف هوشمند
                      <svg class="fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
                    </a>
                  </div>
                </div>
              </li>
              <li class="text-zinc-700 hover:text-zinc-900 group/two">
                <div class="relative">
                  <div class="flex gap-x-1 items-center hover:bg-gray-200 transition p-2 rounded-lg">
                    احراز هویت
                    <svg class="group-hover/two:rotate-180 transition-all duration-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
                  </div>
                  <div class="bg-white hidden group-hover/two:flex flex-col p-2 top-5 w-full rounded-lg shadow-xl">
                    <a href="" class="hover:bg-gray-100 text-red-600 transition p-2 rounded-md flex gap-x-1 items-center justify-between">
                      کارت ملی
                      <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256"><path d="M165.66,101.66,139.31,128l26.35,26.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
                    </a>
                    <a href="" class="hover:bg-gray-100 text-red-600 transition p-2 rounded-md flex gap-x-1 items-center justify-between">
                      شناسنامه
                      <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256"><path d="M165.66,101.66,139.31,128l26.35,26.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
                    </a>
                    <a href="" class="hover:bg-gray-100 text-red-600 transition p-2 rounded-md flex gap-x-1 items-center justify-between">
                      قرار داد
                      <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256"><path d="M165.66,101.66,139.31,128l26.35,26.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
                    </a>
                    <a href="" class="hover:bg-gray-100 text-green-600 transition p-2 rounded-md flex gap-x-1 items-center justify-between">
                      مجوز کسب و کار
                      <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256"><path d="M173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
                    </a>
                  </div>
                </div>
              </li>
          </ul>
        </div>
        <div class="bg-white/30 w-3/12 sm:w-5/12 backdrop-blur-sm" onclick="bgNavbar()">
        </div>
      </div>
      <!-- logo -->
      <a href="./seller-index.html">
        <img class="max-w-40 md:max-w-48 md:ml-10" src="./assets/image/logo.png" alt="">
      </a>
      <!-- menu -->
      <div class="gap-x-10 hidden md:flex text-sm lg:text-base">
        <div class="flex gap-x-1 group items-center cursor-pointer">
          <span class="text-zinc-700">
            کالا ها
          </span>
          <svg class="group-hover:rotate-180 transition-all duration-500 fill-zinc-700" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="" viewBox="0 0 256 256"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
          <div class="w-48 h-auto border p-2 text-sm bg-white hidden group-hover:flex absolute top-10 shadow-lg rounded-lg flex-col gap-y-2 z-50">
            <a href="" class="hover:bg-gray-100 text-zinc-600 hover:text-zinc-800 transition p-2 rounded-md flex gap-x-1 items-center justify-between group/edit">
              ثبت کالای جدید
              <svg class="fill-zinc-600 group-hover/edit:-translate-x-0.5 transition" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
            </a>
            <a href="" class="hover:bg-gray-100 text-zinc-600 hover:text-zinc-800 transition p-2 rounded-md flex gap-x-1 items-center justify-between group/edit">
              کالا های ثبت شده
              <svg class="fill-zinc-600 group-hover/edit:-translate-x-0.5 transition" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
            </a>
          </div>
        </div>
        <div class="flex gap-x-1 group items-center cursor-pointer">
          <span class="text-zinc-700">
            سفارشات
          </span>
          <svg class="group-hover:rotate-180 transition-all duration-500 fill-zinc-700" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="" viewBox="0 0 256 256"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
          <div class="w-48 h-auto text-sm border p-2 bg-white hidden group-hover:flex absolute top-10 shadow-lg rounded-lg flex-col gap-y-2 z-50">
            <a href="" class="hover:bg-gray-100 text-zinc-600 hover:text-zinc-800 transition p-2 rounded-md flex gap-x-1 items-center justify-between group/edit">
              سفارشات من
              <svg class="fill-zinc-600 group-hover/edit:-translate-x-0.5 transition" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
            </a>
            <a href="" class="hover:bg-gray-100 text-zinc-600 hover:text-zinc-800 transition p-2 rounded-md flex gap-x-1 items-center justify-between group/edit">
              سفارشات قبلی
              <svg class="fill-zinc-600 group-hover/edit:-translate-x-0.5 transition" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
            </a>
          </div>
        </div>
        <div class="flex gap-x-1 group items-center cursor-pointer">
          <span class="text-zinc-700">
            مالی
          </span>
          <svg class="group-hover:rotate-180 transition-all duration-500 fill-zinc-700" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="" viewBox="0 0 256 256"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
          <div class="w-48 h-auto text-sm border p-2 bg-white hidden group-hover:flex absolute top-10 shadow-lg rounded-lg flex-col gap-y-2 z-50">
            <a href="" class="hover:bg-gray-100 text-zinc-600 hover:text-zinc-800 transition p-2 rounded-md flex gap-x-1 items-center justify-between group/edit">
              درآمد ها
              <svg class="fill-zinc-600 group-hover/edit:-translate-x-0.5 transition" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
            </a>
            <a href="" class="hover:bg-gray-100 text-zinc-600 hover:text-zinc-800 transition p-2 rounded-md flex gap-x-1 items-center justify-between group/edit">
              تسویه حساب
              <svg class="fill-zinc-600 group-hover/edit:-translate-x-0.5 transition" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
            </a>
            <a href="" class="hover:bg-gray-100 text-zinc-600 hover:text-zinc-800 transition p-2 rounded-md flex gap-x-1 items-center justify-between group/edit">
              جریمه ها
              <svg class="fill-zinc-600 group-hover/edit:-translate-x-0.5 transition" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
            </a>
          </div>
        </div>
        <div class="flex gap-x-1 group items-center cursor-pointer">
          <span class="text-zinc-700">
            بازاریابی
          </span>
          <svg class="group-hover:rotate-180 transition-all duration-500 fill-zinc-700" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="" viewBox="0 0 256 256"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
          <div class="w-48 h-auto text-sm border p-2 bg-white hidden group-hover:flex absolute top-10 shadow-lg rounded-lg flex-col gap-y-2 z-50">
            <a href="" class="hover:bg-gray-100 text-zinc-600 hover:text-zinc-800 transition p-2 rounded-md flex gap-x-1 items-center justify-between group/edit">
              تخفیف هوشمند
              <svg class="fill-zinc-600 group-hover/edit:-translate-x-0.5 transition" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
            </a>
          </div>
        </div>
        <div class="flex gap-x-1 group items-center cursor-pointer">
          <span class="text-zinc-700">
            احراز هویت
          </span>
          <svg class="group-hover:rotate-180 transition-all duration-500 fill-zinc-700" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="" viewBox="0 0 256 256"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
          <div class="w-48 h-auto text-sm border p-2 bg-white hidden group-hover:flex absolute top-10 shadow-lg rounded-lg flex-col gap-y-2 z-50">
            <a href="" class="hover:bg-gray-100 text-red-600 transition p-2 rounded-md flex gap-x-1 items-center justify-between">
              کارت ملی
              <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256"><path d="M165.66,101.66,139.31,128l26.35,26.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
            </a>
            <a href="" class="hover:bg-gray-100 text-red-600 transition p-2 rounded-md flex gap-x-1 items-center justify-between">
              شناسنامه
              <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256"><path d="M165.66,101.66,139.31,128l26.35,26.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
            </a>
            <a href="" class="hover:bg-gray-100 text-red-600 transition p-2 rounded-md flex gap-x-1 items-center justify-between">
              قرار داد
              <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256"><path d="M165.66,101.66,139.31,128l26.35,26.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
            </a>
            <a href="" class="hover:bg-gray-100 text-green-600 transition p-2 rounded-md flex gap-x-1 items-center justify-between">
              مجوز کسب و کار
              <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256"><path d="M173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
            </a>
          </div>
        </div>
      </div>
      <!-- btn account & notification -->
      <div class="md:mr-auto flex gap-x-3">
        <div class="group relative">
          <svg class="fill-zinc-700" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="" viewBox="0 0 256 256"><path d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"></path></svg>
          <div class="absolute -top-2 -right-1 bg-red-500 rounded-full px-1.5 text-white text-sm">
            2
          </div>
          <div class="w-48 h-auto border p-2 text-sm bg-white hidden group-hover:flex absolute top-8 left-1 shadow-lg rounded-lg flex-col gap-y-2 z-50">
            <p class="text-center text-zinc-800 py-2 border-b">
              پیغام های شما
            </p>
            <a href="" class="hover:bg-red-100 text-red-600 hover:text-red-500 transition p-2 rounded-md">
              <span>
                1-
              </span>
              <span>
                رد مدارک
              </span>
            </a>
            <a href="" class="hover:bg-green-100 text-green-600 hover:text-green-500 transition p-2 rounded-md">
              <span>
                2-
              </span>
              <span>
                تایید درخواست
              </span>
            </a>
          </div>
        </div>
        <div class="group relative">
          <svg class="fill-zinc-700 group" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path></svg>
          <div class="w-48 h-auto border p-2 text-sm bg-white hidden group-hover:flex absolute top-8 left-1 shadow-lg rounded-lg flex-col gap-y-2 z-50">
            <a href="" class="hover:bg-gray-100 text-zinc-600 hover:text-zinc-800 transition p-2 rounded-md border-b border-dashed">
              امیررضا کریمی
            </a>
            <a href="" class="hover:bg-red-100 text-red-500 hover:text-red-600 transition p-2 rounded-md flex gap-x-1 items-center">
              <svg class="fill-red-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256"><path d="M120,216a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h64a8,8,0,0,1,0,16H56V208h56A8,8,0,0,1,120,216Zm109.66-93.66-40-40a8,8,0,0,0-11.32,11.32L204.69,120H112a8,8,0,0,0,0,16h92.69l-26.35,26.34a8,8,0,0,0,11.32,11.32l40-40A8,8,0,0,0,229.66,122.34Z"></path></svg>
              خروج
            </a>
          </div>
        </div>
      </div>
    </header>
    <!-- main -->
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
                    آیدی سفارش
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
                <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 hover:bg-gray-100 transition text-xs md:text-sm">
                      <td class="pr-5">
                        <p class="text-gray-700 mr-2">
                          t4ud893k
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
              </tbody>
          </table>
      </div>
      </div>
    </main>
    <!-- footer -->
    <footer class="bg-cyan-800 text-white p-3 md:p-5">
      <div class="flex justify-between">
        <a href="./seller-index.html" class="bg-white rounded-xl p-1">
          <img class="max-w-40" src="./assets/image/logo.png" alt="">
        </a>
        <button type="button" class="flex items-center gap-x-1 border rounded-lg px-3 py-2 text-sm md:text-base hover:bg-white hover:text-zinc-600 transition-all group hover:border-zinc-600" id="btn-back-to-top">
          برو به بالا
          <svg class="fill-white group-hover:fill-zinc-600 transition-all" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="" viewBox="0 0 256 256"><path d="M196,88a27.86,27.86,0,0,0-13.35,3.39A28,28,0,0,0,144,74.7V44a28,28,0,0,0-56,0v80l-3.82-6.13A28,28,0,0,0,35.73,146l4.67,8.23C74.81,214.89,89.05,240,136,240a88.1,88.1,0,0,0,88-88V116A28,28,0,0,0,196,88Zm12,64a72.08,72.08,0,0,1-72,72c-37.63,0-47.84-18-81.68-77.68l-4.69-8.27,0-.05A12,12,0,0,1,54,121.61a11.88,11.88,0,0,1,6-1.6,12,12,0,0,1,10.41,6,1.76,1.76,0,0,0,.14.23l18.67,30A8,8,0,0,0,104,152V44a12,12,0,0,1,24,0v68a8,8,0,0,0,16,0V100a12,12,0,0,1,24,0v20a8,8,0,0,0,16,0v-4a12,12,0,0,1,24,0Z"></path></svg>
        </button>
      </div>
      <div class="flex justify-between mt-7 mb-5">
        <a href="" class="flex gap-x-1 items-center group p-1">
          راهنمایی
          <svg class="fill-white group-hover:-translate-x-1 transition-all" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
        </a>
        <div class="flex gap-x-5 flex-wrap">
          <div class="flex gap-x-1 items-center">
            modkala@
            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="" viewBox="0 0 256 256"><path d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"></path></svg>
          </div>
          <div class="flex gap-x-1 items-center">
            modkala@
            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="" viewBox="0 0 256 256"><path d="M228.88,26.19a9,9,0,0,0-9.16-1.57L17.06,103.93a14.22,14.22,0,0,0,2.43,27.21L72,141.45V200a15.92,15.92,0,0,0,10,14.83,15.91,15.91,0,0,0,17.51-3.73l25.32-26.26L165,220a15.88,15.88,0,0,0,10.51,4,16.3,16.3,0,0,0,5-.79,15.85,15.85,0,0,0,10.67-11.63L231.77,35A9,9,0,0,0,228.88,26.19Zm-61.14,36L78.15,126.35l-49.6-9.73ZM88,200V152.52l24.79,21.74Zm87.53,8L92.85,135.5l119-85.29Z"></path></svg>
          </div>
        </div>
      </div>
      <div class="text-xs text-center border-t pt-5">
        تمامی حقوق محفوظ است. 2024
      </div>
    </footer>
  </body>
  <script src="./assets/js/app.js"></script>
</html>
