@extends('base')
@section('content')
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32 mb-6">
    <div class="bg-white shadow-box-sm rounded-xl py-5 px-2 sm:px-6">
      <!-- products -->
      <div class="grid grid-cols-2 lg:grid-cols-4 border-b pb-4">
        <div>
          <svg class="fill-red-400 cursor-pointer hover:fill-red-500 transition mr-5" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="" viewBox="0 0 256 256"><path d="M165.66,101.66,139.31,128l26.35,26.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
          <img class="w-10/12 mx-auto" src="./assets/image/products/l1.webp" alt="">
          <div class="flex items-start justify-center gap-x-1 text-xs text-zinc-500">
            <span>
              4.7
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
          </div>
          <div class="flex justify-center gap-x-1 text-sm text-zinc-800 my-2">
            <div>29,800,000</div>
            <div>تومان</div>
          </div>
          <div class="text-center text-zinc-600 text-xs lg:text-sm">
            لپ تاپ 15.6 اینچی ایسوس مدل Aspire Vero
          </div>
        </div>
        <div>
          <svg class="fill-red-400 cursor-pointer hover:fill-red-500 transition mr-5" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="" viewBox="0 0 256 256"><path d="M165.66,101.66,139.31,128l26.35,26.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
          <img class="w-10/12 mx-auto" src="./assets/image/products/l9.webp" alt="">
          <div class="flex items-start justify-center gap-x-1 text-xs text-zinc-500">
            <span>
              4.5
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
          </div>
          <div class="flex justify-center gap-x-1 text-sm text-zinc-800 my-2">
            <div>29,800,000</div>
            <div>تومان</div>
          </div>
          <div class="text-center text-zinc-600  text-xs lg:text-sm">
            لپ تاپ ایسوس مدل A42 plus
          </div>
        </div>
        <div class="hidden lg:block">
          <svg class="fill-red-400 cursor-pointer hover:fill-red-500 transition mr-5" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="" viewBox="0 0 256 256"><path d="M165.66,101.66,139.31,128l26.35,26.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
          <img class="w-10/12 mx-auto" src="./assets/image/products/2.webp" alt="">
          <div class="flex items-start justify-center gap-x-1 text-xs text-zinc-500">
            <span>
              4.8
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
          </div>
          <div class="flex justify-center gap-x-1 text-sm text-zinc-800 my-2">
            <div>29,800,000</div>
            <div>تومان</div>
          </div>
          <div class="text-center text-zinc-600 text-sm">
            لپ تاپ ایسوس مدل A42 plus
          </div>
        </div>
        <div class="justify-center items-center flex">
          <!-- btn select modal -->
          <button data-modal-toggle="authentication-modal" class="hidden lg:block mx-auto border-2 border-dashed border-zinc-300 text-zinc-600 hover:text-zinc-700 px-8 py-3 rounded-lg hover:bg-gray-100 transition">
            انتخاب
          </button>
          <!-- select modal -->
          <div class="max-w-2xl mx-auto relative">
              <!-- Main modal -->
              <div id="authentication-modal" class="overflow-x-hidden overflow-y-auto z-50 fixed h-modal h-full inset-0 justify-end items-end hidden" aria-hidden="true">
                <div id="authentication-modal" data-modal-toggle="authentication-modal" aria-hidden="true" class="overflow-x-hidden overflow-y-auto fixed h-modal h-full inset-0 z-10 bg-gray-600 bg-opacity-50 w-full">
                </div>
                <div class="relative w-12/12 sm:w-10/12 lg:w-6/12 px-4 h-auto mb-4 z-50 mt-96">
                  <!-- Modal content -->
                  <div class="bg-white rounded-lg shadow-lg relative overflow-y-visible">
                      <div class="flex justify-between items-center p-4 border-b">
                        <h3 class="text-gray-700">انتخاب کالا برای مقایسه</h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex items-center" data-modal-toggle="authentication-modal">
                          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                      </div>
                      <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 pt-4" action="#">
                        <div class="flex items-center justify-between rounded-lg border-gray-200 px-2 border bg-white dark:bg-zinc-900">
                          <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#636363" viewBox="0 0 256 256"><path d="M228.24,219.76l-51.38-51.38a86.15,86.15,0,1,0-8.48,8.48l51.38,51.38a6,6,0,0,0,8.48-8.48ZM38,112a74,74,0,1,1,74,74A74.09,74.09,0,0,1,38,112Z"></path></svg>
                          </div>
                          <input class="flex grow rounded-lg border-none px-2 py-3 text-zinc-600 outline-none placeholder:text-xs placeholder:text-zinc-500 focus:ring-0 bg-white dark:bg-zinc-900" placeholder="جستجو کالا" type="text">
                        </div>
                      </form>
                      <div class="px-8 grid grid-cols-2 gap-5">
                        <a href="" class="my-2 p-2 md:p-4 bg-white hover:shadow-md">
                          <div class="flex justify-between">
                            <div class="bg-red-200 rounded-lg px-2 py-1 text-red-500 flex items-center gap-x-1 text-xs">
                              <div>
                                17%
                              </div>
                              <div>
                                تخفیف
                              </div>
                            </div>
                          </div>
                          <div class="image-box mb-6 ">
                            <div>
                              <img class="mx-auto" src="./assets/image/products/l2.webp" alt="">
                            </div>
                          </div>
                          <div class="space-y-2">
                            <span class="h-auto md:h-10 flex justify-between">
                              <div>
                                <span class="text-sm text-zinc-800">
                                  لپ تاپ 15.6 اینچی ایسوس مدل Aspire Vero
                                </span>
                              </div>
                            </span>
                            <div class="flex justify-between items-center flex-wrap">
                              <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                                <span>
                                  <span>
                                    (35+)
                                  </span>
                                  <span>
                                    4.7
                                  </span>
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                              </div>
                              <div class="flex justify-center gap-x-1 text-sm text-zinc-700">
                                <div>1,200,000</div>
                                <div>تومان</div>
                              </div>
                            </div>
                          </div>
                        </a>
                        <a href="" class="my-2 p-2 md:p-4 bg-white hover:shadow-md">
                          <div class="flex justify-between">
                            <div class="bg-red-200 rounded-lg px-2 py-1 text-red-500 flex items-center gap-x-1 text-xs">
                              <div>
                                17%
                              </div>
                              <div>
                                تخفیف
                              </div>
                            </div>
                          </div>
                          <div class="image-box mb-6 ">
                            <div>
                              <img class="mx-auto" src="./assets/image/products/l5.webp" alt="">
                            </div>
                          </div>
                          <div class="space-y-2">
                            <span class="h-auto md:h-10 flex justify-between">
                              <div>
                                <span class="text-sm text-zinc-800">
                                  لپ تاپ 15.6 اینچی ایسوس مدل Aspire Vero
                                </span>
                              </div>
                            </span>
                            <div class="flex justify-between items-center flex-wrap">
                              <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                                <span>
                                  <span>
                                    (35+)
                                  </span>
                                  <span>
                                    4.7
                                  </span>
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                              </div>
                              <div class="flex justify-center gap-x-1 text-sm text-zinc-700">
                                <div>1,200,000</div>
                                <div>تومان</div>
                              </div>
                            </div>
                          </div>
                        </a>
                        <a href="" class="my-2 p-2 md:p-4 bg-white hover:shadow-md">
                          <div class="flex justify-between">
                            <div class="bg-red-200 rounded-lg px-2 py-1 text-red-500 flex items-center gap-x-1 text-xs">
                              <div>
                                17%
                              </div>
                              <div>
                                تخفیف
                              </div>
                            </div>
                          </div>
                          <div class="image-box mb-6 ">
                            <div>
                              <img class="mx-auto" src="./assets/image/products/l7.webp" alt="">
                            </div>
                          </div>
                          <div class="space-y-2">
                            <span class="h-auto md:h-10 flex justify-between">
                              <div>
                                <span class="text-sm text-zinc-800">
                                  لپ تاپ 15.6 اینچی ایسوس مدل Aspire Vero
                                </span>
                              </div>
                            </span>
                            <div class="flex justify-between items-center flex-wrap">
                              <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                                <span>
                                  <span>
                                    (35+)
                                  </span>
                                  <span>
                                    4.7
                                  </span>
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                              </div>
                              <div class="flex justify-center gap-x-1 text-sm text-zinc-700">
                                <div>1,200,000</div>
                                <div>تومان</div>
                              </div>
                            </div>
                          </div>
                        </a>
                        <a href="" class="my-2 p-2 md:p-4 bg-white hover:shadow-md">
                          <div class="flex justify-between">
                            <div class="bg-red-200 rounded-lg px-2 py-1 text-red-500 flex items-center gap-x-1 text-xs">
                              <div>
                                17%
                              </div>
                              <div>
                                تخفیف
                              </div>
                            </div>
                          </div>
                          <div class="image-box mb-6 ">
                            <div>
                              <img class="mx-auto" src="./assets/image/products/l9.webp" alt="">
                            </div>
                          </div>
                          <div class="space-y-2">
                            <span class="h-auto md:h-10 flex justify-between">
                              <div>
                                <span class="text-sm text-zinc-800">
                                  لپ تاپ 15.6 اینچی ایسوس مدل Aspire Vero
                                </span>
                              </div>
                            </span>
                            <div class="flex justify-between items-center flex-wrap">
                              <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                                <span>
                                  <span>
                                    (35+)
                                  </span>
                                  <span>
                                    4.7
                                  </span>
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                              </div>
                              <div class="flex justify-center gap-x-1 text-sm text-zinc-700">
                                <div>1,200,000</div>
                                <div>تومان</div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- details all -->
      <div class="text-zinc-600 mt-5 mb-8 text-sm lg:text-base">
        مشخصات
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 text-sm flex justify-center lg:justify-start">
        ظرفیت حافظه داخلی
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center">
          256 گیگابایت
        </div>
        <div class="text-zinc-700 text-center border-r">
          512 گیگابایت
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block">
          512 گیگابایت
        </div>
        <div>
        </div>
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 mt-7 text-sm flex justify-center lg:justify-start">
        مدل پردازنده گرافیکی
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center">
          Iris Xe
        </div>
        <div class="text-zinc-700 text-center border-r">
          Iris Xf
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block">
          Ires sf22
        </div>
        <div>
        </div>
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 mt-7 text-sm flex justify-center lg:justify-start">
        مشخصات اسپیکر
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center">
          دو عدد اسپیکر استریو
        </div>
        <div class="text-zinc-700 text-center border-r">
          دو عدد اسپیکر ایسشات
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block">
          دو عدد اسپیکر توکار
        </div>
        <div>
        </div>
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 mt-7 text-sm flex justify-center lg:justify-start">
        سیستم عامل
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center">
          Microsoft Windows ۱۱
        </div>
        <div class="text-zinc-700 text-center border-r">
          Microsoft Windows ۱۱
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block">
          Microsoft Windows 10
        </div>
        <div>
        </div>
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 mt-7 text-sm flex justify-center lg:justify-start">
        اندازه صفحه نمایش
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center">
          ۱۵.۶ اینچ
        </div>
        <div class="text-zinc-700 text-center border-r">
          ۱6.۶ اینچ
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block">
          ۱7 اینچ
        </div>
        <div>
        </div>
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 mt-7 text-sm flex justify-center lg:justify-start">
        توضیحات صفحه نمایش
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center">
          نرخ بروز رسانی: ۶۰ هرتز / نسبت تصویر ۱۶:۹
        </div>
        <div class="text-zinc-700 text-center border-r">
          نرخ بروز رسانی: 120 هرتز / نسبت تصویر ۱۶:5
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block">
          نرخ بروز رسانی: ۶۰ هرتز / نسبت تصویر ۱7
        </div>
        <div>
        </div>
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 mt-7 text-sm flex justify-center lg:justify-start">
        سازنده پردازنده
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center">
          Intel
        </div>
        <div class="text-zinc-700 text-center border-r">
          AMD
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block">
          Intel
        </div>
        <div>
        </div>
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 mt-7 text-sm flex justify-center lg:justify-start">
        مدل پردازنده
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center">
          ۱۱۵۵G۷
        </div>
        <div class="text-zinc-700 text-center border-r">
          ۱0۵۵G۷
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block">
          7۵5۵G5
        </div>
        <div>
        </div>
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 mt-7 text-sm flex justify-center lg:justify-start">
        سری پردازنده
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center">
          Core i۵
        </div>
        <div class="text-zinc-700 text-center border-r">
          Core i7
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block">
          Core i9
        </div>
        <div>
        </div>
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 mt-7 text-sm flex justify-center lg:justify-start">
        محدوده سرعت پردازنده
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center">
          ۲.۸ گیگاهرتز و بیشتر
        </div>
        <div class="text-zinc-700 text-center border-r">
          ۲.9 گیگاهرتز و بیشتر
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block">
          ۲.7 گیگاهرتز و بیشتر
        </div>
        <div>
        </div>
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 mt-7 text-sm flex justify-center lg:justify-start">
        فرکانس پردازنده
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center">
          ۲.۵ تا ۴.۵ گیگاهرتز
        </div>
        <div class="text-zinc-700 text-center border-r">
          ۲.6 تا ۴.3 گیگاهرتز
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block">
          ۲.7 تا 5 گیگاهرتز
        </div>
        <div>
        </div>
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 mt-7 text-sm flex justify-center lg:justify-start">
        حافظه Cache
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center">
          ۱۲ مگابایت
        </div>
        <div class="text-zinc-700 text-center border-r">
          6 مگابایت
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block">
          10 مگابایت
        </div>
        <div>
        </div>
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 mt-7 text-sm flex justify-center lg:justify-start">
        ظرفیت حافظه RAM
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center">
          هشت گیگابایت
        </div>
        <div class="text-zinc-700 text-center border-r">
          شانزده گیگابایت
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block">
          هشت گیگابایت
        </div>
        <div>
        </div>
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 mt-7 text-sm flex justify-center lg:justify-start">
        نوع حافظه RAM
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center">
          DDR۴
        </div>
        <div class="text-zinc-700 text-center border-r">
          DDR6
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block">
          DDR5
        </div>
        <div>
        </div>
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 mt-7 text-sm flex justify-center lg:justify-start">
        مشخصات حافظه داخلی
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center">
          PCIe NVMe
        </div>
        <div class="text-zinc-700 text-center border-r">
          PCIe PHFr
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block">
          3R5TG 12
        </div>
        <div>
        </div>
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 mt-7 text-sm flex justify-center lg:justify-start">
        سازنده پردازنده گرافیکی
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center">
          Intel
        </div>
        <div class="text-zinc-700 text-center border-r">
          AMD
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block">
          Intel
        </div>
        <div>
        </div>
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 mt-7 text-sm flex justify-center lg:justify-start">
        امکانات دیگر
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center px-4 leading-8">
          نورپردازی بدنه / بدنه آلومینیوم و پلاستیکی / Bluetooth ۵.۲ / HDMI ۲.0 / سیستم خنک کنندگی با سه فن و فلز مایع
        </div>
        <div class="text-zinc-700 text-center border-r px-4 leading-8">
          نورپردازی بدنه / بدنه  پلاستیکی / Bluetooth ۵.۲ / HDMI ۲.2 / سیستم خنک کنندگی با یک فن و فلز مایع
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block px-4 leading-8">
          نورپردازی بدنه / بدنه آلومینیوم و پلاستیکی / Bluetooth ۵.۲ / HDMI ۲.۱ / سیستم خنک کنندگی با دو فن و فلز مایع
        </div>
        <div>
        </div>
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 mt-7 text-sm flex justify-center lg:justify-start">
        طبقه‌بندی
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center">
          بازی
        </div>
        <div class="text-zinc-700 text-center border-r">
          اداری
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block">
          طراحی
        </div>
        <div>
        </div>
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 mt-7 text-sm flex justify-center lg:justify-start">
        اقلام همراه
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center px-4 leading-8">
          دفترچه راهنما / شارژر / آنتی ویروس / برچسب کیبورد فارسی / ماوس
        </div>
        <div class="text-zinc-700 text-center border-r px-4 leading-8">
          ماوس / کیبورد
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block px-4 leading-8">
          دفترچه راهنما / شارژر / آنتی ویروس / ماوس
        </div>
        <div>
        </div>
      </div>
      <!-- title -->
      <div class="text-zinc-500 mb-4 mt-7 text-sm flex justify-center lg:justify-start">
        قابلیت‌های دستگاه
      </div>
      <!-- details -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm border-b pb-7">
        <div class="text-zinc-700 text-center">
          صفحه نمایش مات وبکم
        </div>
        <div class="text-zinc-700 text-center border-r">
          صفحه نمایش مات کیبورد با نور پس زمینه
        </div>
        <div class="text-zinc-700 text-center border-r hidden lg:block">
          صفحه نمایش مات وبکم
        </div>
        <div>
        </div>
      </div>
      <!-- buy button -->
      <div class="grid grid-cols-2 lg:grid-cols-4 text-xs lg:text-sm py-7">
        <div class="">
          <button class="flex mx-auto items-center gap-x-1 text-sm py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition shadow-lg shadow-red-500/50">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ededed" viewBox="0 0 256 256"><path d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z"></path></svg>
            خرید محصول
          </button>
        </div>
        <div class="border-r">
          <button class="flex mx-auto items-center gap-x-1 text-sm py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition shadow-lg shadow-red-500/50">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ededed" viewBox="0 0 256 256"><path d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z"></path></svg>
            خرید محصول
          </button>
        </div>
        <div class="border-r hidden lg:block">
          <button class="flex mx-auto items-center gap-x-1 text-sm py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition shadow-lg shadow-red-500/50">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ededed" viewBox="0 0 256 256"><path d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z"></path></svg>
            خرید محصول
          </button>
        </div>
        <div>
        </div>
      </div>
    </div>
  </main>
  <!-- footer -->
  @endsection
