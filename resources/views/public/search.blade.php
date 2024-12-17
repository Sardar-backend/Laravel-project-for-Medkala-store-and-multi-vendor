<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./assets/css/output.css">
  <link rel="stylesheet" href="./assets/css/font.css">

  <link href="./assets/css/app.css" rel="stylesheet"/>
  <link href="./assets/css/dependencies/nouislider.min.css" rel="stylesheet"/>

  <title>جستجو</title>
</head>
<body class="bg-[#fcfcfc]">
<form action="{{route('products')}}" id="form" method="get">
  <input id="desktopHeaderSearch2" name="search" type="text"/>
  </form>
  <!-- header -->
  <header>
    <div class="fixed left-0 right-0 top-0 z-50 bg-white">
      <!-- Header Desktop -->
        <div>
          <!-- Top Header -->
          <div class="container relative px-5 z-30 flex max-w-[1680px] items-center justify-between gap-x-4 bg-white py-4">
            <button aria-controls="mobile-menu-drawer-navigation" class="cursor-pointer text-zinc-700 md:hidden" data-drawer-show="mobile-menu-drawer-navigation" data-drawer-target="mobile-menu-drawer-navigation" type="button">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128ZM40,70H216a6,6,0,0,0,0-12H40a6,6,0,0,0,0,12ZM216,186H40a6,6,0,0,0,0,12H216a6,6,0,0,0,0-12Z"></path></svg>
            </button>
            <!-- LOGO -->
            <div class="hidden md:block z-0">
              <a href=''>
                <img
                  alt=""
                  class="w-44 text-red-700"
                  src="./assets/image/logo.png"
                />
              </a>
            </div>
            <!-- Search Box -->
            <div
              class="relative max-w-xl flex-1 hidden md:block"
              id="desktopHeaderSearchBase">
              <div
                id="desktopHeaderSearchWrapper"
                class="flex items-center justify-between rounded-lg border-gray-200 border-b-transparent bg-gray-100 px-2">
                <div onclick="document.getElementById('form').submit();document.getElementById('desktopHeaderSearch').value =document.getElementById('desktopHeaderSearch2').value;" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#636363" viewBox="0 0 256 256"><path d="M228.24,219.76l-51.38-51.38a86.15,86.15,0,1,0-8.48,8.48l51.38,51.38a6,6,0,0,0,8.48-8.48ZM38,112a74,74,0,1,1,74,74A74.09,74.09,0,0,1,38,112Z"></path></svg>
                </div>
                <input
                  id="desktopHeaderSearch"
                  class="flex grow rounded-lg border-none bg-gray-100 px-2 py-3 text-zinc-600 outline-none placeholder:text-xs placeholder:text-zinc-500 focus:ring-0"
                  placeholder="جستجو"
                  type="text"/>
              </div>
              <div
                id="desktopHeaderSearchResult"
                class="absolute inset-x-0 top-full hidden w-full overflow-hidden rounded-b-lg border border-gray-200 border-t-transparent bg-white">
                <div class="max-h-[450px] overflow-y-auto py-5">
                  <!-- Result Serach -->
                  <div class="mb-8 px-5">
                    <div class="swiper search-result-desktop">
                      <div class="swiper-wrapper grid grid-cols-1 lg:grid-cols-3 gap-2">
                        <div>
                          <a
                            href="#"
                            class="flex items-center gap-x-2 rounded-xl border border-gray-100 px-4 py-2 text-zinc-500 hover:border-gray-200"
                          >
                            <img
                              src="./assets/image/products/1.webp"
                              alt=""
                              class="w-16"
                            />
                            <p class="line-clamp-2 text-sm">
                               لپ تاپ لنوو مدل IdeaPad
                            </p>
                          </a>
                        </div>
                        <div>
                          <a
                            href="#"
                            class="flex items-center gap-x-2 rounded-xl border border-gray-100 px-4 py-2 text-zinc-500 hover:border-gray-200"
                          >
                            <img
                              src="./assets/image/products/1.webp"
                              alt=""
                              class="w-16"
                            />
                            <p class="line-clamp-2 text-sm">
                               لپ تاپ لنوو مدل IdeaPad
                            </p>
                          </a>
                        </div>
                        <div>
                          <a
                            href="#"
                            class="flex items-center gap-x-2 rounded-xl border border-gray-100 px-4 py-2 text-zinc-500 hover:border-gray-200"
                          >
                            <img
                              src="./assets/image/products/1.webp"
                              alt=""
                              class="w-16"
                            />
                            <p class="line-clamp-2 text-sm">
                               لپ تاپ لنوو مدل IdeaPad
                            </p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="space-y-6">
                    <!-- Recent searches -->
                    <div class="px-5">
                      <div
                        class="mb-2 flex items-center gap-x-2 text-zinc-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#4f4f4f" viewBox="0 0 256 256"><path d="M134,80v44.6l37.09,22.25a6,6,0,0,1-6.18,10.3l-40-24A6,6,0,0,1,122,128V80a6,6,0,0,1,12,0Zm90-22a6,6,0,0,0-6,6V87.36c-7.48-8.83-14.94-17.13-23.53-25.83a94,94,0,1,0-1.95,134.83,6,6,0,0,0-8.24-8.72A82,82,0,1,1,186,70c9.24,9.36,17.18,18.3,25.31,28H184a6,6,0,0,0,0,12h40a6,6,0,0,0,6-6V64A6,6,0,0,0,224,58Z"></path></svg>
                        <p class="text-sm">جستجو های اخیر </p>
                      </div>
                      <div class="swiper">
                        <div class="swiper-wrapper">
                          <div class="flex gap-x-2">
                            <a
                              href="#"
                              class="flex border rounded-xl border-gray-100 p-2 text-zinc-500 hover:border-gray-200">
                              <p class="text-xs">گوشی سامسونگ</p>
                            </a>
                            <a
                              href="#"
                              class="flex border rounded-xl border-gray-100 p-2 text-zinc-500 hover:border-gray-200">
                              <p class="text-xs">گوشی اپل</p>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Top searches -->
                    <div class="px-5">
                      <div
                        class="mb-2 flex items-center gap-x-2 text-zinc-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#4f4f4f" viewBox="0 0 256 256"><path d="M181.92,153A55.58,55.58,0,0,1,137,197.92a7,7,0,0,1-1,.08,6,6,0,0,1-1-11.92c17.38-2.92,32.13-17.68,35.08-35.08a6,6,0,1,1,11.84,2ZM214,144a86,86,0,0,1-172,0c0-27.47,10.85-55.61,32.25-83.64a6,6,0,0,1,9-.67l26.34,25.56,23.09-63.31a6,6,0,0,1,9.47-2.56C163.72,37.33,214,85.4,214,144Zm-12,0c0-48.4-38.65-89.84-61.07-109.8L117.64,98.06a6,6,0,0,1-9.82,2.25l-28-27.22C62.67,97.13,54,121,54,144a74,74,0,0,0,148,0Z"></path></svg>
                        <p class="text-sm">جستجو های پرطرفدار</p>
                      </div>
                      <div class="search-result-desktop">
                        <div class="swiper-wrapper">
                          <div class="flex gap-x-2">
                            <a
                              href="#"
                              class="flex border rounded-xl border-gray-100 p-2 text-zinc-500 hover:border-gray-200">
                              <p class="text-xs">پاور بانک</p>
                            </a>
                            <a
                              href="#"
                              class="flex border rounded-xl border-gray-100 p-2 text-zinc-500 hover:border-gray-200">
                              <p class="text-xs">شارژر 200 وات</p>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Mobile Desktop -->
            <div>
              <div class="md:hidden">
                <!-- Top Section -->
                <div
                  class="container relative z-30 flex h-16 items-center justify-between gap-x-4 bg-white">
                  <!-- logo -->
                  <div>
                    <a href=''>
                      <img
                        alt=""
                        class="h-6 w-full rounded-lg xs:h-10"
                        src="./assets/image/logo.png"/>
                    </a>
                  </div>
                </div>
                <!-- Bottom Section -->
                <div
                  class="absolute left-0 right-0 top-full z-40 bg-white pb-4 pt-5 transition-transform duration-300"
                  id="mobile-header-bottom">
                  <div class="container">
                    <div class="relative" id="mobileHeaderSearchBase">
                      <div
                        id="mobileHeaderSearchWrapper"
                        class="flex items-center justify-between rounded-lg border-gray-200 border-b-transparent bg-gray-100 px-2">
                        <div>
                        </div>
                        <input
                          id="mobileHeaderSearch"
                          class="flex grow rounded-lg border-none bg-gray-100 px-2 py-3 text-zinc-700 outline-none placeholder:text-xs placeholder:text-zinc-500 focus:ring-0"
                          placeholder="جستجو"
                          type="text"/>
                      </div>
                      <div
                        id="mobileHeaderSearchResult"
                        class="absolute inset-x-0 top-full hidden w-full overflow-hidden rounded-b-lg border border-gray-200 border-t-transparent bg-white">
                        <div class="max-h-[450px] overflow-y-auto py-5">
                          <!-- Result -->
                          <div class="mb-8 px-5">
                            <div class="swiper search-result-desktop">
                              <div class="swiper-wrapper grid grid-cols-1 gap-y-2">
                                <div>
                                  <a
                                    href="#"
                                    class="flex items-center gap-x-2 rounded-xl border border-gray-100 px-4 py-2 text-zinc-500 hover:border-gray-200"
                                  >
                                    <img
                                      src="./assets/image/products/1.webp"
                                      alt=""
                                      class="w-16"
                                    />
                                    <p class="line-clamp-2 text-sm">
                                       لپ تاپ لنوو مدل IdeaPad
                                    </p>
                                  </a>
                                </div>
                                <div>
                                  <a
                                    href="#"
                                    class="flex items-center gap-x-2 rounded-xl border border-gray-100 px-4 py-2 text-zinc-500 hover:border-gray-200"
                                  >
                                    <img
                                      src="./assets/image/products/1.webp"
                                      alt=""
                                      class="w-16"
                                    />
                                    <p class="line-clamp-2 text-sm">
                                       لپ تاپ لنوو مدل IdeaPad
                                    </p>
                                  </a>
                                </div>
                                <div>
                                  <a
                                    href="#"
                                    class="flex items-center gap-x-2 rounded-xl border border-gray-100 px-4 py-2 text-zinc-500 hover:border-gray-200"
                                  >
                                    <img
                                      src="./assets/image/products/1.webp"
                                      alt=""
                                      class="w-16"
                                    />
                                    <p class="line-clamp-2 text-sm">
                                       لپ تاپ لنوو مدل IdeaPad
                                    </p>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="space-y-6">
                            <!-- Recent searches -->
                            <div class="px-5">
                              <div
                                class="mb-2 flex items-center gap-x-2 text-zinc-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#4f4f4f" viewBox="0 0 256 256"><path d="M134,80v44.6l37.09,22.25a6,6,0,0,1-6.18,10.3l-40-24A6,6,0,0,1,122,128V80a6,6,0,0,1,12,0Zm90-22a6,6,0,0,0-6,6V87.36c-7.48-8.83-14.94-17.13-23.53-25.83a94,94,0,1,0-1.95,134.83,6,6,0,0,0-8.24-8.72A82,82,0,1,1,186,70c9.24,9.36,17.18,18.3,25.31,28H184a6,6,0,0,0,0,12h40a6,6,0,0,0,6-6V64A6,6,0,0,0,224,58Z"></path></svg>
                                <p class="text-sm">جستجو های اخیر </p>
                              </div>
                              <div class="swiper search-result-desktop">
                                <div class="swiper-wrapper flex gap-x-2">
                                  <a
                                    href="#"
                                    class="flex border rounded-xl border-gray-100 p-2 text-zinc-500 hover:border-gray-200">
                                    <p class="text-xs">گوشی سامسونگ</p>
                                  </a>
                                  <a
                                    href="#"
                                    class="flex border rounded-xl border-gray-100 p-2 text-zinc-500 hover:border-gray-200">
                                    <p class="text-xs">گوشی اپل</p>
                                  </a>
                                </div>
                              </div>
                            </div>
                            <!-- Top searches -->
                            <div class="px-5">
                              <div
                                class="mb-2 flex items-center gap-x-2 text-zinc-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#4f4f4f" viewBox="0 0 256 256"><path d="M181.92,153A55.58,55.58,0,0,1,137,197.92a7,7,0,0,1-1,.08,6,6,0,0,1-1-11.92c17.38-2.92,32.13-17.68,35.08-35.08a6,6,0,1,1,11.84,2ZM214,144a86,86,0,0,1-172,0c0-27.47,10.85-55.61,32.25-83.64a6,6,0,0,1,9-.67l26.34,25.56,23.09-63.31a6,6,0,0,1,9.47-2.56C163.72,37.33,214,85.4,214,144Zm-12,0c0-48.4-38.65-89.84-61.07-109.8L117.64,98.06a6,6,0,0,1-9.82,2.25l-28-27.22C62.67,97.13,54,121,54,144a74,74,0,0,0,148,0Z"></path></svg>
                                <p class="text-sm">جستجو های پرطرفدار</p>
                              </div>
                              <div class="swiper search-result-desktop">
                                <div class="swiper-wrapper flex gap-x-2">
                                  <a
                                    href="#"
                                    class="flex border rounded-xl border-gray-100 p-2 text-zinc-500 hover:border-gray-200">
                                    <p class="text-xs">گوشی سامسونگ</p>
                                  </a>
                                  <a
                                    href="#"
                                    class="flex border rounded-xl border-gray-100 p-2 text-zinc-500 hover:border-gray-200">
                                    <p class="text-xs">گوشی اپل</p>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Cart and Account -->
            <div class="flex items-center justify-center gap-x-6">
              <!-- Account -->
              <div class="flex items-center py-2 px-2 rounded-xl bg-red-500 hover:bg-red-400 transition shadow-lg shadow-red-500/50">
                <button
                  class="text-gray-100 flex gap-x-1"
                  data-dropdown-toggle="dropdownAccountDesktop"
                  id="dropdownDefaultButton"
                  type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ffffff" viewBox="0 0 256 256"><path d="M229.19,213c-15.81-27.32-40.63-46.49-69.47-54.62a70,70,0,1,0-63.44,0C67.44,166.5,42.62,185.67,26.81,213a6,6,0,1,0,10.38,6C56.4,185.81,90.34,166,128,166s71.6,19.81,90.81,53a6,6,0,1,0,10.38-6ZM70,96a58,58,0,1,1,58,58A58.07,58.07,0,0,1,70,96Z"></path></svg>
                <span class="hidden md:block text-sm">
                  حساب کاربری
                </span>
                </button>
                <div
                  class="z-50 !ml-5 hidden w-60 rounded-lg bg-white shadow-lg"
                  id="dropdownAccountDesktop">
                  <ul class="space-y-2 p-2">
                    <li>
                      <a class='flex items-center justify-between gap-x-2 rounded-lg p-2 text-zinc-700 hover:text-zinc-800 transition hover:bg-gray-100' href=''>
                        <span class="flex items-center gap-x-2">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M229.19,213c-15.81-27.32-40.63-46.49-69.47-54.62a70,70,0,1,0-63.44,0C67.44,166.5,42.62,185.67,26.81,213a6,6,0,1,0,10.38,6C56.4,185.81,90.34,166,128,166s71.6,19.81,90.81,53a6,6,0,1,0,10.38-6ZM70,96a58,58,0,1,1,58,58A58.07,58.07,0,0,1,70,96Z"></path></svg>
                          </span>
                          <span class="text-sm">امیررضا کریمی</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a class='flex items-center justify-between gap-x-2 rounded-lg p-2 text-zinc-700 hover:text-zinc-800 transition hover:bg-gray-100' href=''>
                        <span class="flex items-center gap-x-2">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M237.9,198.36l-14.25-120a14.06,14.06,0,0,0-14-12.36H174V64a46,46,0,0,0-92,0v2H46.33a14.06,14.06,0,0,0-14,12.36l-14.25,120a14,14,0,0,0,14,15.64H223.92a14,14,0,0,0,14-15.64ZM94,64a34,34,0,0,1,68,0v2H94ZM225.5,201.3a2.07,2.07,0,0,1-1.58.7H32.08a2.07,2.07,0,0,1-1.58-.7,1.92,1.92,0,0,1-.49-1.53l14.26-120A2,2,0,0,1,46.33,78H209.67a2,2,0,0,1,2.06,1.77l14.26,120A1.92,1.92,0,0,1,225.5,201.3Z"></path></svg>
                          </span>
                          <span class="text-sm">سفارش ها</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a class='flex items-center justify-between gap-x-2 rounded-lg p-2 text-zinc-700 hover:text-zinc-800 transition hover:bg-gray-100' href=''>
                        <span class="flex items-center gap-x-2">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                          </span>
                          <span class="text-sm">لیست ها</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a class='flex items-center justify-between gap-x-2 rounded-lg p-2 text-zinc-700 hover:text-zinc-800 transition hover:bg-gray-100' href=''>
                        <span class="flex items-center gap-x-2">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M227.33,91l-96-64a6,6,0,0,0-6.66,0l-96,64A6,6,0,0,0,26,96V200a14,14,0,0,0,14,14H216a14,14,0,0,0,14-14V96A6,6,0,0,0,227.33,91ZM100.18,152,38,195.9V107.65Zm12.27,6h31.1l62.29,44H50.16Zm43.37-6L218,107.65V195.9ZM128,39.21l85.43,57L143.53,146H112.47L42.57,96.17Z"></path></svg>
                          <span>پیغام ها</span>
                        </span>
                        <span class="relative flex h-5 w-5">
                          <span
                            class="absolute inline-flex h-full w-full animate-ping rounded-full bg-rose-500 opacity-75"
                          ></span>
                          <span
                            class="relative inline-flex h-5 w-5 items-center justify-center rounded-full bg-rose-500 text-sm text-white">
                            4
                          </span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a class='flex items-center justify-between gap-x-2 rounded-lg p-2 text-red-500 hover:text-red-600 transition hover:bg-red-100' href=''>
                        <div class="flex items-center gap-x-2">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M110,216a6,6,0,0,1-6,6H48a14,14,0,0,1-14-14V48A14,14,0,0,1,48,34h56a6,6,0,0,1,0,12H48a2,2,0,0,0-2,2V208a2,2,0,0,0,2,2h56A6,6,0,0,1,110,216Zm110.24-92.24-40-40a6,6,0,0,0-8.48,8.48L201.51,122H104a6,6,0,0,0,0,12h97.51l-29.75,29.76a6,6,0,1,0,8.48,8.48l40-40A6,6,0,0,0,220.24,123.76Z"></path></svg>
                          <span>خروج از حساب کاربری</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- card -->
              <div class="flex items-center p-2 rounded-xl bg-red-500 hover:bg-red-400 transition shadow-lg shadow-red-500/50">
                <button
                  class="group relative"
                  data-dropdown-toggle="dropdownBasketDesktop"
                  type="button">
                  <span
                    class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ffffff" viewBox="0 0 256 256"><path d="M134,120v56a6,6,0,0,1-12,0V120a6,6,0,0,1,12,0ZM237.88,97.85,224,201.85A14,14,0,0,1,210.13,214H45.87A14,14,0,0,1,32,201.85l-13.87-104A14,14,0,0,1,32,82H69.28l54.2-61.95a6,6,0,0,1,9,0l54.2,62H224a14,14,0,0,1,13.87,15.85ZM85.22,82h85.56L128,33.11ZM225.5,94.68A2,2,0,0,0,224,94H32a2,2,0,0,0-1.51.68A2,2,0,0,0,30,96.26l13.86,104a2,2,0,0,0,2,1.73H210.13a2,2,0,0,0,2-1.73L226,96.26A1.93,1.93,0,0,0,225.5,94.68ZM181.4,114a6,6,0,0,0-6.57,5.37l-5.6,56A6,6,0,0,0,174.6,182l.61,0a6,6,0,0,0,6-5.4l5.6-56A6,6,0,0,0,181.4,114ZM81.17,119.4a6,6,0,0,0-11.94,1.2l5.6,56a6,6,0,0,0,6,5.4l.61,0a6,6,0,0,0,5.37-6.57Z"></path></svg>
                  </span>
                  <span
                    class="absolute -right-3 -top-3 flex h-5 w-5 drop-shadow-lg cursor-pointer items-center justify-center rounded-lg bg-white text-sm font-semibold text-red-500">
                    2
                  </span>
                </button>
                <div
                  class="z-50 mx-5 md:!ml-5 hidden w-auto md:w-[400px] rounded-lg bg-white shadow-lg"
                  id="dropdownBasketDesktop">
                  <!-- Head -->
                  <div class="flex items-center justify-between p-4 pb-2 border-b mx-5">
                    <div class="text-sm text-zinc-500">
                      2 کالا
                    </div>
                  </div>
                  <!-- Items -->
                  <div class="h-60">
                    <ul
                      class="main-scroll h-full space-y-2 divide-y divide-gray-100 overflow-y-auto p-5 pl-2">
                      <li>
                        <div class="flex gap-x-2 py-5">
                          <!-- Product -->
                          <div class="relative min-w-fit">
                            <a href=''>
                              <img
                                alt=""
                                class="h-[120px] w-[120px]"
                                loading="lazy"
                                src="./assets/image/products/1.webp"/>
                            </a>
                          </div>
                          <div class="w-full space-y-1.5">
                            <!-- Title -->
                            <a class='line-clamp-2 h-12 text-zinc-700' href=''>
                              لپ تاپ مدل لنوو
                            </a>
                            <!-- Attribute -->
                            <div
                              class="flex items-center gap-x-2 text-xs text-zinc-500">
                              <div class="flex items-center gap-x-2">
                                <span
                                  class="h-4 w-4 rounded-full bg-gray-900"></span>
                                <span>مشکی</span>
                              </div>
                            </div>
                            <div
                              class="flex items-center gap-x-2 text-xs text-zinc-500">
                              <div class="flex items-center gap-x-2">
                                <svg class="fill-red-700" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M245.57,117.78l-14-35a13.93,13.93,0,0,0-13-8.8H182V64a6,6,0,0,0-6-6H24A14,14,0,0,0,10,72V184a14,14,0,0,0,14,14H42.6a30,30,0,0,0,58.8,0h53.2a30,30,0,0,0,58.8,0H232a14,14,0,0,0,14-14V120A6,6,0,0,0,245.57,117.78ZM182,86h36.58a2,2,0,0,1,1.86,1.26L231.14,114H182ZM22,72a2,2,0,0,1,2-2H170v68H22ZM72,210a18,18,0,1,1,18-18A18,18,0,0,1,72,210Zm82.6-24H101.4a30,30,0,0,0-58.8,0H24a2,2,0,0,1-2-2V150H170v15.48A30.1,30.1,0,0,0,154.6,186ZM184,210a18,18,0,1,1,18-18A18,18,0,0,1,184,210Zm50-26a2,2,0,0,1-2,2H213.4A30.05,30.05,0,0,0,184,162c-.67,0-1.34,0-2,.07V126h52Z"></path></svg>
                                <span>ارسال پست پیشتاز</span>
                              </div>
                            </div>
                            <div
                              class="flex items-center justify-between gap-x-2">
                              <!-- Price -->
                              <div
                                class="text-gray-700">
                                <span class="text-lg font-bold">1,800,000</span>
                                <span class="text-sm">تومان</span>
                              </div>
                              <!-- Quantity -->
                              <div
                                class="flex h-10 w-24 items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                                <button
                                  type="button"
                                  data-action="increment">
                                  <svg xlink:href="#plus" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path></svg>
                                </button>
                                <input
                                  value="1"
                                  disabled
                                  type="number"
                                  class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm text-zinc-700 outline-none"/>
                                <button
                                  type="button"
                                  data-action="decrement">
                                  <svg xlink:href="#minus" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path></svg>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="flex gap-x-2 py-5">
                          <!-- Product -->
                          <div class="relative min-w-fit">
                            <a href=''>
                              <img
                                alt=""
                                class="h-[120px] w-[120px]"
                                loading="lazy"
                                src="./assets/image/products/1.webp"/>
                            </a>
                          </div>
                          <div class="w-full space-y-1.5">
                            <!-- Title -->
                            <a class='line-clamp-2 h-12 text-zinc-700' href=''>
                              لپ تاپ مدل لنوو
                            </a>
                            <!-- Attribute -->
                            <div
                              class="flex items-center gap-x-2 text-xs text-zinc-500">
                              <div class="flex items-center gap-x-2">
                                <span
                                  class="h-4 w-4 rounded-full bg-gray-900"></span>
                                <span>مشکی</span>
                              </div>
                            </div>
                            <div
                              class="flex items-center gap-x-2 text-xs text-zinc-500">
                              <div class="flex items-center gap-x-2">
                                <svg class="fill-red-700" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M245.57,117.78l-14-35a13.93,13.93,0,0,0-13-8.8H182V64a6,6,0,0,0-6-6H24A14,14,0,0,0,10,72V184a14,14,0,0,0,14,14H42.6a30,30,0,0,0,58.8,0h53.2a30,30,0,0,0,58.8,0H232a14,14,0,0,0,14-14V120A6,6,0,0,0,245.57,117.78ZM182,86h36.58a2,2,0,0,1,1.86,1.26L231.14,114H182ZM22,72a2,2,0,0,1,2-2H170v68H22ZM72,210a18,18,0,1,1,18-18A18,18,0,0,1,72,210Zm82.6-24H101.4a30,30,0,0,0-58.8,0H24a2,2,0,0,1-2-2V150H170v15.48A30.1,30.1,0,0,0,154.6,186ZM184,210a18,18,0,1,1,18-18A18,18,0,0,1,184,210Zm50-26a2,2,0,0,1-2,2H213.4A30.05,30.05,0,0,0,184,162c-.67,0-1.34,0-2,.07V126h52Z"></path></svg>
                                <span>ارسال پست پیشتاز</span>
                              </div>
                            </div>
                            <div
                              class="flex items-center justify-between gap-x-2">
                              <!-- Price -->
                              <div
                                class="text-gray-700">
                                <span class="text-lg font-bold">1,800,000</span>
                                <span class="text-sm">تومان</span>
                              </div>
                              <!-- Quantity -->
                              <div
                                class="flex h-10 w-24 items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                                <button
                                  type="button"
                                  data-action="increment">
                                  <svg xlink:href="#plus" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path></svg>
                                </button>
                                <input
                                  value="1"
                                  disabled
                                  type="number"
                                  class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm text-zinc-700 outline-none"/>
                                <button
                                  type="button"
                                  data-action="decrement">
                                  <svg xlink:href="#minus" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path></svg>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- Down Price -->
                  <div
                    class="flex items-center justify-between border-t border-gray-100 p-5">
                    <div class="flex flex-col items-center gap-y-1">
                      <div class="text-sm text-zinc-600">
                        مبلغ قابل پرداخت
                      </div>
                      <div class="text-zinc-600">
                        <span class="font-bold">1,200,000</span>
                        <span class="text-xs">تومان</span>
                      </div>
                    </div>
                    <a href="" class="w-28 py-3 text-sm bg-red-500 hover:bg-red-400 transition text-gray-100 rounded-xl text-center">
                      <button
                        type="button">
                        ثبت سفارش
                      </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Bottom Header -->
          <div
            class="absolute left-0 right-0 top-full z-20 bg-white shadow-sm transition-transform duration-300"
            id="desktop-header-bottom">
            <div
              class="container relative flex max-w-[1680px] items-center gap-x-2 px-5">
              <div class="group" id="desktopMegamenuWrapper">
                <div
                  class="relative flex cursor-pointer items-center gap-x-2 pb-2 text-zinc-700">
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128ZM40,70H216a6,6,0,0,0,0-12H40a6,6,0,0,0,0,12ZM216,186H40a6,6,0,0,0,0,12H216a6,6,0,0,0,0-12Z"></path></svg>
                  </div>
                  <div class="text-sm">دسته‌ بندی‌ ها</div>
                  <div class="absolute bottom-0 flex w-full justify-center">
                    <div
                      class="left-0 h-[1px] animate-border-width-reverse rounded-full bg-gradient-to-r from-red-400 to-red-400 transition-all duration-200 group-hover:animate-border-width">
                    </div>
                  </div>
                </div>
                <!-- menu -->
                <div class="absolute top-full w-full max-w-[1000px]">
                  <div
                    class="relative hidden rounded-b-lg bg-white shadow-base"
                    id="desktopMegamenu">
                    <div
                      class="flex h-[450px] max-h-[450px] w-full overflow-hidden rounded-b-lg pt-0.5">
                      <!-- Right -->
                      <div
                        class="main-scroll w-50 border-gray-100 bg-gray-100 border-l-2">
                        <ul id="mega-menu-parents">
                          <li>
                            <a class='flex items-center gap-x-1 py-4 pr-4 text-zinc-700 hover:text-zinc-600 hover:bg-white transition min-w-24 border-b' data-category-parent='1' href=''>
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M176,18H80A22,22,0,0,0,58,40V216a22,22,0,0,0,22,22h96a22,22,0,0,0,22-22V40A22,22,0,0,0,176,18Zm10,198a10,10,0,0,1-10,10H80a10,10,0,0,1-10-10V40A10,10,0,0,1,80,30h96a10,10,0,0,1,10,10ZM138,60a10,10,0,1,1-10-10A10,10,0,0,1,138,60Z"></path></svg>
                              </span>
                              <span class="text-sm">
                                موبایل
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class='flex items-center gap-x-1 py-4 pr-4 text-zinc-700 hover:text-zinc-600 hover:bg-white transition min-w-24 border-b' data-category-parent='2' href=''>
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M232,170H222V72a22,22,0,0,0-22-22H56A22,22,0,0,0,34,72v98H24a6,6,0,0,0-6,6v16a22,22,0,0,0,22,22H216a22,22,0,0,0,22-22V176A6,6,0,0,0,232,170ZM46,72A10,10,0,0,1,56,62H200a10,10,0,0,1,10,10v98H46ZM226,192a10,10,0,0,1-10,10H40a10,10,0,0,1-10-10V182H226ZM150,88a6,6,0,0,1-6,6H112a6,6,0,0,1,0-12h32A6,6,0,0,1,150,88Z"></path></svg>
                              </span>
                              <span class="text-sm">
                                کالای دیجیتال
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class='flex items-center gap-x-1 py-4 pr-4 text-zinc-700 hover:text-zinc-600 hover:bg-white transition min-w-24 border-b' data-category-parent='3' href=''>
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M217.47,105.24l-80-75.5-.09-.08a13.94,13.94,0,0,0-18.83,0l-.09.08-80,75.5A14,14,0,0,0,34,115.55V208a14,14,0,0,0,14,14H96a14,14,0,0,0,14-14V160a2,2,0,0,1,2-2h32a2,2,0,0,1,2,2v48a14,14,0,0,0,14,14h48a14,14,0,0,0,14-14V115.55A14,14,0,0,0,217.47,105.24ZM210,208a2,2,0,0,1-2,2H160a2,2,0,0,1-2-2V160a14,14,0,0,0-14-14H112a14,14,0,0,0-14,14v48a2,2,0,0,1-2,2H48a2,2,0,0,1-2-2V115.55a2,2,0,0,1,.65-1.48l.09-.08,79.94-75.48a2,2,0,0,1,2.63,0L209.26,114l.08.08a2,2,0,0,1,.66,1.48Z"></path></svg>
                              </span>
                              <span class="text-sm">
                                لوازم خانه
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class='flex items-center gap-x-1 py-4 pr-4 text-zinc-700 hover:text-zinc-600 hover:bg-white transition min-w-24 border-b' data-category-parent='4' href=''>
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M200,50H178.48L164.24,35.76A6,6,0,0,0,160,34H96a6,6,0,0,0-4.21,1.76L77.52,50H56A14,14,0,0,0,42,64V216a14,14,0,0,0,14,14H200a14,14,0,0,0,14-14V64A14,14,0,0,0,200,50Zm-30,8.49V112a2,2,0,0,1-3.25,1.56L135.93,86.92l25-37.5ZM128,77.18,107.21,46h41.58ZM95.07,49.42l25,37.5L89.25,113.54A2,2,0,0,1,86,112V58.49ZM54,216V64a2,2,0,0,1,2-2H74v50a13.87,13.87,0,0,0,8.06,12.68A14.11,14.11,0,0,0,88,126,13.87,13.87,0,0,0,97,122.74l.08-.07,25-21.56V218H56A2,2,0,0,1,54,216Zm148,0a2,2,0,0,1-2,2H134V101.11l25,21.56.08.07A13.87,13.87,0,0,0,168,126a14.08,14.08,0,0,0,6-1.35A13.87,13.87,0,0,0,182,112V62h18a2,2,0,0,1,2,2Z"></path></svg>
                              </span>
                              <span class="text-sm">
                                مد و پوشاک
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class='flex items-center gap-x-1 py-4 pr-4 text-zinc-700 hover:text-zinc-600 hover:bg-white transition min-w-24 border-b' data-category-parent='5' href=''>
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M72,134H32a6,6,0,0,1,0-12H68.79L83,100.67a6,6,0,0,1,10,0l27,40.51,11-16.51a6,6,0,0,1,5-2.67h24a6,6,0,0,1,0,12H139.21L125,155.33a6,6,0,0,1-10,0L88,114.82,77,131.33A6,6,0,0,1,72,134ZM178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94q0,1.09,0,2.19a6,6,0,1,0,12-.38c0-.6,0-1.21,0-1.81A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48c0,55.73-81.61,105.65-98,115.11-9.84-5.66-43.09-25.82-68.16-53.16a6,6,0,1,0-8.84,8.1c30.94,33.77,72.41,56.29,74.16,57.23a6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34Z"></path></svg>
                              </span>
                              <span class="text-sm">
                                زیبایی و سلامت
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class='flex items-center gap-x-1 py-4 pr-4 text-zinc-700 hover:text-zinc-600 hover:bg-white transition min-w-24 border-b' data-category-parent='6' href=''>
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M134,120v56a6,6,0,0,1-12,0V120a6,6,0,0,1,12,0ZM237.88,97.85,224,201.85A14,14,0,0,1,210.13,214H45.87A14,14,0,0,1,32,201.85l-13.87-104A14,14,0,0,1,32,82H69.28l54.2-61.95a6,6,0,0,1,9,0l54.2,62H224a14,14,0,0,1,13.87,15.85ZM85.22,82h85.56L128,33.11ZM225.5,94.68A2,2,0,0,0,224,94H32a2,2,0,0,0-1.51.68A2,2,0,0,0,30,96.26l13.86,104a2,2,0,0,0,2,1.73H210.13a2,2,0,0,0,2-1.73L226,96.26A1.93,1.93,0,0,0,225.5,94.68ZM181.4,114a6,6,0,0,0-6.57,5.37l-5.6,56A6,6,0,0,0,174.6,182l.61,0a6,6,0,0,0,6-5.4l5.6-56A6,6,0,0,0,181.4,114ZM81.17,119.4a6,6,0,0,0-11.94,1.2l5.6,56a6,6,0,0,0,6,5.4l.61,0a6,6,0,0,0,5.37-6.57Z"></path></svg>
                              </span>
                              <span class="text-sm">
                                کالای سوپر مارکت
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class='flex items-center gap-x-1 py-4 pr-4 text-zinc-700 hover:text-zinc-600 hover:bg-white transition min-w-24 border-b' data-category-parent='7' href=''>
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M128,26A102,102,0,1,0,230,128,102.12,102.12,0,0,0,128,26Zm77.67,147.42H169.89L159.41,159l13.29-38.72,17-5.51,27.94,21.43A89.38,89.38,0,0,1,205.67,173.42Zm-119.56,0H50.33A89.38,89.38,0,0,1,38.38,136.2l27.94-21.43,17,5.51L96.59,159ZM51,81.42l7.24,24.41-20,15.34A89.47,89.47,0,0,1,51,81.42ZM107.56,154,95.15,117.86,128,95.28l32.85,22.58L148.44,154Zm90.19-48.17L205,81.42a89.47,89.47,0,0,1,12.75,39.75Zm-1.66-36.62L186,103.35l-17,5.53-35-24V67.16l30.9-21.24A90.3,90.3,0,0,1,196.09,69.21ZM150.92,41,128,56.72,105.08,41a90.22,90.22,0,0,1,45.84,0ZM91.11,45.91,122,67.16V84.84l-35,24-17-5.53L59.91,69.21A90.4,90.4,0,0,1,91.11,45.91ZM58.75,185.42H84.93l9.19,26A90.37,90.37,0,0,1,58.75,185.42Zm49.68,30.43L95.88,180.39,106.34,166h43.32l10.46,14.39-12.55,35.46a90.14,90.14,0,0,1-39.14,0Zm53.45-4.48,9.19-26h26.18A90.37,90.37,0,0,1,161.88,211.37Z"></path></svg>
                              </span>
                              <span class="text-sm">
                                ورزش و سفر
                              </span>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <!-- Left -->
                      <div
                        class="main-scroll h-[450px] max-h-[450px] w-full overflow-auto"
                        dir="ltr">
                        <div
                          class="flex flex-grow"
                          dir="rtl"
                          id="mega-menu-childs">
                          <!-- Childs -->
                          <div class="hidden p-5" data-category-child="1">
                            <!-- head -->
                            <div class="mb-4">
                              <a class='flex items-center gap-x-1 py-2 text-xs text-red-400 hover:text-red-500 transition' href=''>
                                <div>مشاهده همه محصولات موبایل</div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                              </a>
                            </div>
                            <div
                              class="flex flex-grow flex-wrap gap-x-14 gap-y-8">
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">برند های مختلف موبایل</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                       گوشی اپل
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی سامسونگ
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی شیائومی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی هاوائی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی ال جی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی آنر
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی نوکیا
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی آنر
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی جی پلاس
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">گوشی براساس قیمت</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                       گوشی ارزان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی قسطی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 2 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 5 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 7 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 10 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 15 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 20 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی بالای 20 میلیون تومان
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">لوازم جانبی موبایل</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلس و قاب گوشی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      شارژر گوشی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هولدر گوشی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      کابل شارژ و مبدل
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">داغ ترین ها</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلکسی S21 FE
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلکسی A54
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلکسی A34 plus
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلکسی A14
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      پوکو C40
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      آنر X9a
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <!-- Childs -->
                          <div class="hidden p-5" data-category-child="2">
                            <!-- head -->
                            <div class="mb-4">
                              <a class='flex items-center gap-x-1 py-2 text-xs text-red-400 hover:text-red-500 transition' href=''>
                                <div>مشاهده همه محصولات کالای دیجیتال</div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                              </a>
                            </div>
                            <div
                              class="flex flex-grow flex-wrap gap-x-14 gap-y-8">
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">برند های مختلف لپ تاپ</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ ایسوس
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ لنوو
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ HP
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ دل
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ اپل
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ ایسر
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ ام اس آی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ فوجیتسو
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ کاستوم
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">هدفون براساس قیمت</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هدفون بیسیم
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هدفون اپل
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هدفون سامسونگ
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هدفون بیتس
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هدفون ریزر
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هدفون سونی
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">لوازم جانبی لپ تاپ</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      شارژر لپ تاپ
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      کیف لپ تاپ
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      موس و کیبورد
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      برچسب کیبورد و تاچ پد
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">لوازم جانبی دیجیتال</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      پرینتر
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      اسکنر و فاکس
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      ساعت و مچ بند
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هنذفری بلوتوثی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      بارکدخوان
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <!-- Childs -->
                          <div class="hidden p-5" data-category-child="3">
                            <!-- head -->
                            <div class="mb-4">
                              <a class='flex items-center gap-x-1 py-2 text-xs text-red-400 hover:text-red-500 transition' href=''>
                                <div>مشاهده همه محصولات موبایل</div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                              </a>
                            </div>
                            <div
                              class="flex flex-grow flex-wrap gap-x-14 gap-y-8">
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">برند های مختلف موبایل</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                       گوشی اپل
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی سامسونگ
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی شیائومی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی هاوائی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی ال جی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی آنر
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی نوکیا
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی آنر
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی جی پلاس
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">گوشی براساس قیمت</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                       گوشی ارزان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی قسطی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 2 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 5 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 7 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 10 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 15 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 20 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی بالای 20 میلیون تومان
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">لوازم جانبی موبایل</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلس و قاب گوشی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      شارژر گوشی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هولدر گوشی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      کابل شارژ و مبدل
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">داغ ترین ها</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلکسی S21 FE
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلکسی A54
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلکسی A34 plus
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلکسی A14
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      پوکو C40
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      آنر X9a
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <!-- Childs -->
                          <div class="hidden p-5" data-category-child="4">
                            <!-- head -->
                            <div class="mb-4">
                              <a class='flex items-center gap-x-1 py-2 text-xs text-red-400 hover:text-red-500 transition' href=''>
                                <div>مشاهده همه محصولات کالای دیجیتال</div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                              </a>
                            </div>
                            <div
                              class="flex flex-grow flex-wrap gap-x-14 gap-y-8">
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">برند های مختلف لپ تاپ</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ ایسوس
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ لنوو
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ HP
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ دل
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ اپل
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ ایسر
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ ام اس آی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ فوجیتسو
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ کاستوم
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">هدفون براساس قیمت</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هدفون بیسیم
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هدفون اپل
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هدفون سامسونگ
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هدفون بیتس
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هدفون ریزر
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هدفون سونی
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">لوازم جانبی لپ تاپ</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      شارژر لپ تاپ
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      کیف لپ تاپ
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      موس و کیبورد
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      برچسب کیبورد و تاچ پد
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">لوازم جانبی دیجیتال</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      پرینتر
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      اسکنر و فاکس
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      ساعت و مچ بند
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هنذفری بلوتوثی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      بارکدخوان
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <!-- Childs -->
                          <div class="hidden p-5" data-category-child="5">
                            <!-- head -->
                            <div class="mb-4">
                              <a class='flex items-center gap-x-1 py-2 text-xs text-red-400 hover:text-red-500 transition' href=''>
                                <div>مشاهده همه محصولات موبایل</div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                              </a>
                            </div>
                            <div
                              class="flex flex-grow flex-wrap gap-x-14 gap-y-8">
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">برند های مختلف موبایل</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                       گوشی اپل
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی سامسونگ
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی شیائومی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی هاوائی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی ال جی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی آنر
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی نوکیا
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی آنر
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی جی پلاس
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">گوشی براساس قیمت</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                       گوشی ارزان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی قسطی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 2 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 5 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 7 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 10 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 15 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 20 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی بالای 20 میلیون تومان
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">لوازم جانبی موبایل</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلس و قاب گوشی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      شارژر گوشی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هولدر گوشی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      کابل شارژ و مبدل
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">داغ ترین ها</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلکسی S21 FE
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلکسی A54
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلکسی A34 plus
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلکسی A14
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      پوکو C40
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      آنر X9a
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <!-- Childs -->
                          <div class="hidden p-5" data-category-child="6">
                            <!-- head -->
                            <div class="mb-4">
                              <a class='flex items-center gap-x-1 py-2 text-xs text-red-400 hover:text-red-500 transition' href=''>
                                <div>مشاهده همه محصولات کالای دیجیتال</div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                              </a>
                            </div>
                            <div
                              class="flex flex-grow flex-wrap gap-x-14 gap-y-8">
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">برند های مختلف لپ تاپ</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ ایسوس
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ لنوو
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ HP
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ دل
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ اپل
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ ایسر
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ ام اس آی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ فوجیتسو
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      لپ تاپ کاستوم
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">هدفون براساس قیمت</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هدفون بیسیم
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هدفون اپل
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هدفون سامسونگ
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هدفون بیتس
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هدفون ریزر
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هدفون سونی
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">لوازم جانبی لپ تاپ</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      شارژر لپ تاپ
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      کیف لپ تاپ
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      موس و کیبورد
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      برچسب کیبورد و تاچ پد
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">لوازم جانبی دیجیتال</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      پرینتر
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      اسکنر و فاکس
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      ساعت و مچ بند
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هنذفری بلوتوثی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      بارکدخوان
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <!-- Childs -->
                          <div class="hidden p-5" data-category-child="7">
                            <!-- head -->
                            <div class="mb-4">
                              <a class='flex items-center gap-x-1 py-2 text-xs text-red-400 hover:text-red-500 transition' href=''>
                                <div>مشاهده همه محصولات موبایل</div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                              </a>
                            </div>
                            <div
                              class="flex flex-grow flex-wrap gap-x-14 gap-y-8">
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">برند های مختلف موبایل</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                       گوشی اپل
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی سامسونگ
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی شیائومی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی هاوائی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی ال جی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی آنر
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی نوکیا
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی آنر
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی جی پلاس
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">گوشی براساس قیمت</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                       گوشی ارزان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی قسطی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 2 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 5 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 7 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 10 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 15 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی تا 20 میلیون تومان
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گوشی بالای 20 میلیون تومان
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">لوازم جانبی موبایل</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلس و قاب گوشی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      شارژر گوشی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      هولدر گوشی
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      کابل شارژ و مبدل
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">داغ ترین ها</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلکسی S21 FE
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلکسی A54
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلکسی A34 plus
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      گلکسی A14
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      پوکو C40
                                    </a>
                                  </li>
                                  <li>
                                    <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                      آنر X9a
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a class="group relative" href="">
                  <div class="p-2 pt-0 text-sm text-zinc-700">
                    شگفت انگیزها
                  </div>
                  <div class="absolute bottom-0 flex w-full justify-center">
                    <div
                      class="left-0 h-[1px] animate-border-width-reverse rounded-full bg-gradient-to-r from-red-400 to-red-400 transition-all duration-200 group-hover:animate-border-width">
                    </div>
                  </div>
                </a>
              </div>
              <div>
                <a class="group relative" href="">
                  <div class="p-2 pt-0 text-sm text-zinc-700 flex items-center gap-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M230,96a6.19,6.19,0,0,0-.22-1.65l-14.34-50.2A14.07,14.07,0,0,0,202,34H54A14.07,14.07,0,0,0,40.57,44.15L26.23,94.35A6.19,6.19,0,0,0,26,96v16A38,38,0,0,0,42,143V208a14,14,0,0,0,14,14H200a14,14,0,0,0,14-14V143A38,38,0,0,0,230,112ZM52.11,47.45A2,2,0,0,1,54,46H202a2,2,0,0,1,1.92,1.45L216.05,90H40ZM102,102h52v10a26,26,0,0,1-52,0Zm-64,0H90v10a26,26,0,0,1-52,0ZM202,208a2,2,0,0,1-2,2H56a2,2,0,0,1-2-2V148.66a38,38,0,0,0,42-16.21,37.95,37.95,0,0,0,64,0,38,38,0,0,0,42,16.21Zm-10-70a26,26,0,0,1-26-26V102h52v10A26,26,0,0,1,192,138Z"></path></svg>
                    سوپر مارکت
                  </div>
                  <div class="absolute bottom-0 flex w-full justify-center">
                    <div
                      class="left-0 h-[1px] animate-border-width-reverse rounded-full bg-gradient-to-r from-red-400 to-red-400 transition-all duration-200 group-hover:animate-border-width">
                    </div>
                  </div>
                </a>
              </div>
              <div>
                <a class="group relative" href="">
                  <div class="p-2 pt-0 text-sm text-zinc-700 flex items-center gap-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M181.92,153A55.58,55.58,0,0,1,137,197.92a7,7,0,0,1-1,.08,6,6,0,0,1-1-11.92c17.38-2.92,32.13-17.68,35.08-35.08a6,6,0,1,1,11.84,2ZM214,144a86,86,0,0,1-172,0c0-27.47,10.85-55.61,32.25-83.64a6,6,0,0,1,9-.67l26.34,25.56,23.09-63.31a6,6,0,0,1,9.47-2.56C163.72,37.33,214,85.4,214,144Zm-12,0c0-48.4-38.65-89.84-61.07-109.8L117.64,98.06a6,6,0,0,1-9.82,2.25l-28-27.22C62.67,97.13,54,121,54,144a74,74,0,0,0,148,0Z"></path></svg>
                    پرفروش ترین ها
                  </div>
                  <div class="absolute bottom-0 flex w-full justify-center">
                    <div
                      class="left-0 h-[1px] animate-border-width-reverse rounded-full bg-gradient-to-r from-red-400 to-red-400 transition-all duration-200 group-hover:animate-border-width">
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Mobile Main Menu Drawer -->
        <div
          aria-labelledby="mobile-menu-drawer-navigation"
          class="fixed right-0 top-0 z-50 h-full w-80 translate-x-full overflow-y-auto bg-white p-4 transition-transform duration-300"
          id="mobile-menu-drawer-navigation"
          tabindex="-1">
          <div
            class="mb-6 flex items-center justify-between gap-x-4 border-b border-gray-100 pb-5">
            <!-- Logo -->
            <div>
              <a href=''>
                <img
                  alt=""
                  class="h-10 w-full rounded-lg"
                  src="./assets/image/logo.png"/>
              </a>
            </div>
            <!-- Close Button -->
            <button
              aria-controls="mobile-menu-drawer-navigation"
              class="text-zinc-700"
              data-drawer-hide="mobile-menu-drawer-navigation"
              type="button">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M204.24,195.76a6,6,0,1,1-8.48,8.48L128,136.49,60.24,204.24a6,6,0,0,1-8.48-8.48L119.51,128,51.76,60.24a6,6,0,0,1,8.48-8.48L128,119.51l67.76-67.75a6,6,0,0,1,8.48,8.48L136.49,128Z"></path></svg>
              <span class="sr-only">Close menu</span>
            </button>
          </div>
          <!-- Mobile Toggle Theme -->
          <div class="mb-4">
          </div>
          <div class="overflow-y-auto">
            <ul class="space-y-2">
              <li>
                <a class='flex items-center justify-between rounded-lg px-4 py-3 text-zinc-700 hover:text-red-500 hover:bg-gray-100 transition' href=''>
                  <span class="flex items-center gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M217.47,105.24l-80-75.5-.09-.08a13.94,13.94,0,0,0-18.83,0l-.09.08-80,75.5A14,14,0,0,0,34,115.55V208a14,14,0,0,0,14,14H96a14,14,0,0,0,14-14V160a2,2,0,0,1,2-2h32a2,2,0,0,1,2,2v48a14,14,0,0,0,14,14h48a14,14,0,0,0,14-14V115.55A14,14,0,0,0,217.47,105.24ZM210,208a2,2,0,0,1-2,2H160a2,2,0,0,1-2-2V160a14,14,0,0,0-14-14H112a14,14,0,0,0-14,14v48a2,2,0,0,1-2,2H48a2,2,0,0,1-2-2V115.55a2,2,0,0,1,.65-1.48l.09-.08,79.94-75.48a2,2,0,0,1,2.63,0L209.26,114l.08.08a2,2,0,0,1,.66,1.48Z"></path></svg>
                    <span class="text-sm">صفحه اصلی</span>
                  </span>
                </a>
              </li>
              <li>
                <a class='flex items-center justify-between rounded-lg px-4 py-3 text-zinc-700 hover:text-red-500 hover:bg-gray-100 transition' href=''>
                  <span class="flex items-center gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M221.59,160.3l-47.24-21.17a14,14,0,0,0-13.28,1.22,4.81,4.81,0,0,0-.56.42l-24.69,21a1.88,1.88,0,0,1-1.68.06c-15.87-7.66-32.31-24-40-39.65a1.91,1.91,0,0,1,0-1.68l21.07-25a6.13,6.13,0,0,0,.42-.58,14,14,0,0,0,1.12-13.27L95.73,34.49a14,14,0,0,0-14.56-8.38A54.24,54.24,0,0,0,34,80c0,78.3,63.7,142,142,142a54.25,54.25,0,0,0,53.89-47.17A14,14,0,0,0,221.59,160.3ZM176,210C104.32,210,46,151.68,46,80A42.23,42.23,0,0,1,82.67,38h.23a2,2,0,0,1,1.84,1.31l21.1,47.11a2,2,0,0,1,0,1.67L84.73,113.15a4.73,4.73,0,0,0-.43.57,14,14,0,0,0-.91,13.73c8.87,18.16,27.17,36.32,45.53,45.19a14,14,0,0,0,13.77-1c.19-.13.38-.27.56-.42l24.68-21a1.92,1.92,0,0,1,1.6-.1l47.25,21.17a2,2,0,0,1,1.21,2A42.24,42.24,0,0,1,176,210Z"></path></svg>
                    <span class="text-sm">تماس با ما</span>
                  </span>
                </a>
              </li>
              <li>
                <a class='flex items-center justify-between rounded-lg px-4 py-3 text-zinc-700 hover:text-red-500 hover:bg-gray-100 transition' href=''>
                  <span class="flex items-center gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M240,210H222V96a14,14,0,0,0-14-14H142V32a14,14,0,0,0-21.77-11.64l-80,53.33A14,14,0,0,0,34,85.34V210H16a6,6,0,0,0,0,12H240a6,6,0,0,0,0-12ZM208,94a2,2,0,0,1,2,2V210H142V94ZM46,85.34a2,2,0,0,1,.89-1.66l80-53.34A2,2,0,0,1,130,32V210H46ZM110,112v16a6,6,0,0,1-12,0V112a6,6,0,0,1,12,0Zm-32,0v16a6,6,0,0,1-12,0V112a6,6,0,0,1,12,0Zm0,56v16a6,6,0,0,1-12,0V168a6,6,0,0,1,12,0Zm32,0v16a6,6,0,0,1-12,0V168a6,6,0,0,1,12,0Z"></path></svg>
                    <span class="text-sm">درباره با ما</span>
                  </span>
                </a>
              </li>
              <li>
                <a class='flex items-center justify-between rounded-lg px-4 py-3 text-zinc-700 hover:text-red-500 hover:bg-gray-100 transition' href=''>
                  <span class="flex items-center gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M138,180a10,10,0,1,1-10-10A10,10,0,0,1,138,180ZM128,74c-21,0-38,15.25-38,34v4a6,6,0,0,0,12,0v-4c0-12.13,11.66-22,26-22s26,9.87,26,22-11.66,22-26,22a6,6,0,0,0-6,6v8a6,6,0,0,0,12,0v-2.42c18.11-2.58,32-16.66,32-33.58C166,89.25,149,74,128,74Zm102,54A102,102,0,1,1,128,26,102.12,102.12,0,0,1,230,128Zm-12,0a90,90,0,1,0-90,90A90.1,90.1,0,0,0,218,128Z"></path></svg>
                    <span class="text-sm">سوالات متداول</span>
                  </span>
                </a>
              </li>
              <!-- Shop -->
              <li>
                <div class="flex items-center">
                  <div
                    class="h-px w-full flex-grow rounded-full bg-gray-100"></div>
                  <div class="p-2 text-gray-300">
                    <span class="flex items-center gap-x-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#878787" viewBox="0 0 256 256"><path d="M230,96a6.19,6.19,0,0,0-.22-1.65l-14.34-50.2A14.07,14.07,0,0,0,202,34H54A14.07,14.07,0,0,0,40.57,44.15L26.23,94.35A6.19,6.19,0,0,0,26,96v16A38,38,0,0,0,42,143V208a14,14,0,0,0,14,14H200a14,14,0,0,0,14-14V143A38,38,0,0,0,230,112ZM52.11,47.45A2,2,0,0,1,54,46H202a2,2,0,0,1,1.92,1.45L216.05,90H40ZM102,102h52v10a26,26,0,0,1-52,0Zm-64,0H90v10a26,26,0,0,1-52,0ZM202,208a2,2,0,0,1-2,2H56a2,2,0,0,1-2-2V148.66a38,38,0,0,0,42-16.21,37.95,37.95,0,0,0,64,0,38,38,0,0,0,42,16.21Zm-10-70a26,26,0,0,1-26-26V102h52v10A26,26,0,0,1,192,138Z"></path></svg>
                    </span>
                  </div>
                  <div
                    class="h-px w-full flex-grow rounded-full bg-gray-100"></div>
                </div>
              </li>
              <!-- Categories -->
              <li>
                <div class="border-b pb-2" data-accordion="open">
                  <div class="space-y-2">
                    <h2 id="category-1">
                      <button
                        aria-controls="category-body-1"
                        aria-expanded="false"
                        class="flex w-full items-center justify-between rounded-lg px-4 py-3 text-zinc-700"
                        data-accordion-target="#category-body-1"
                        type="button">
                        <span class="flex items-center text-sm">موبایل</span>
                        <svg aria-hidden="true" data-accordion-icon xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#878787" viewBox="0 0 256 256"><path d="M212.24,100.24l-80,80a6,6,0,0,1-8.48,0l-80-80a6,6,0,0,1,8.48-8.48L128,167.51l75.76-75.75a6,6,0,0,1,8.48,8.48Z"></path></svg>
                      </button>
                    </h2>
                    <div
                      aria-labelledby="category-1"
                      class="hidden"
                      id="category-body-1">
                      <ul class="mr-4 space-y-2">
                        <li>
                          <a class='flex w-full items-center justify-between rounded-lg px-4 py-3 text-zinc-700' href=''>
                            <span class="flex items-center gap-x-2">
                              <span class="line-clamp-1 text-sm text-gray-700">همه</span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#878787" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                            </span>
                          </a>
                        </li>
                        <li>
                          <div data-accordion="open">
                            <div class="space-y-2">
                              <h2 id="sub-category-1-1">
                                <button
                                  aria-controls="sub-category-body-1-1"
                                  aria-expanded="false"
                                  class="flex w-full items-center justify-between rounded-lg px-4 py-3 text-zinc-700"
                                  data-accordion-target="#sub-category-body-1-1"
                                  type="button">
                                  <span class="line-clamp-1 flex items-center text-sm">
                                    گوشی سامسونگ
                                  </span>
                                  <svg aria-hidden="true" data-accordion-icon xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#878787" viewBox="0 0 256 256"><path d="M212.24,100.24l-80,80a6,6,0,0,1-8.48,0l-80-80a6,6,0,0,1,8.48-8.48L128,167.51l75.76-75.75a6,6,0,0,1,8.48,8.48Z"></path></svg>
                                </button>
                              </h2>
                              <div
                                aria-labelledby="sub-category-1-1"
                                class="hidden"
                                id="sub-category-body-1-1">
                                <ul class="mr-4 space-y-2">
                                  <li>
                                    <a class='flex w-full items-center justify-between rounded-lg px-4 py-3 text-zinc-700' href=''>
                                      <span class="flex items-center gap-x-2">
                                        <span class="line-clamp-1 text-sm text-gray-700">همه</span>
                                        <svg class="h-5 w-5">
                                          <use xlink:href="#chevron-left" />
                                        </svg>
                                      </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class='flex rounded-lg px-4 py-3 text-zinc-700' href=''>
                                      <span class="line-clamp-1 text-sm text-gray-700">گلکسی S21 FE</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class='flex rounded-lg px-4 py-3 text-zinc-700' href=''>
                                      <span class="line-clamp-1 text-sm text-gray-700">
                                        گلکسی A51
                                      </span>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div data-accordion="open">
                            <div class="space-y-2">
                              <h2 id="sub-category-1-2">
                                <button
                                  aria-controls="sub-category-body-1-2"
                                  aria-expanded="false"
                                  class="flex w-full items-center justify-between rounded-lg px-4 py-3 text-zinc-700"
                                  data-accordion-target="#sub-category-body-1-2"
                                  type="button">
                                  <span class="line-clamp-1 flex items-center text-sm">
                                    گوشی شیائومی
                                  </span>
                                  <svg aria-hidden="true" data-accordion-icon xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#878787" viewBox="0 0 256 256"><path d="M212.24,100.24l-80,80a6,6,0,0,1-8.48,0l-80-80a6,6,0,0,1,8.48-8.48L128,167.51l75.76-75.75a6,6,0,0,1,8.48,8.48Z"></path></svg>
                                </button>
                              </h2>
                              <div
                                aria-labelledby="sub-category-1-2"
                                class="hidden"
                                id="sub-category-body-1-2">
                                <ul class="mr-4 space-y-2">
                                  <li>
                                    <a class='flex w-full items-center justify-between rounded-lg px-4 py-3 text-zinc-700' href=''>
                                      <span class="flex items-center gap-x-2">
                                        <span class="line-clamp-1 text-sm text-gray-700">همه</span>
                                        <svg class="h-5 w-5">
                                          <use xlink:href="#chevron-left" />
                                        </svg>
                                      </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class='flex rounded-lg px-4 py-3 text-zinc-700' href=''>
                                      <span class="line-clamp-1">
                                        POCO X3
                                      </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class='flex rounded-lg px-4 py-3 text-zinc-700' href=''>
                                      <span class="line-clamp-1">
                                        P45 plus
                                      </span>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="border-b pb-2" data-accordion="open">
                  <div class="space-y-2">
                    <h2 id="category-2">
                      <button
                        aria-controls="category-body-2"
                        aria-expanded="false"
                        class="flex w-full items-center justify-between rounded-lg px-4 py-3 text-zinc-700"
                        data-accordion-target="#category-body-2"
                        type="button">
                        <span class="flex items-center text-sm">کالای دیجیتال</span>
                        <svg aria-hidden="true" data-accordion-icon xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#878787" viewBox="0 0 256 256"><path d="M212.24,100.24l-80,80a6,6,0,0,1-8.48,0l-80-80a6,6,0,0,1,8.48-8.48L128,167.51l75.76-75.75a6,6,0,0,1,8.48,8.48Z"></path></svg>
                      </button>
                    </h2>
                    <div
                      aria-labelledby="category-2"
                      class="hidden"
                      id="category-body-2">
                      <ul class="mr-4 space-y-2">
                        <li>
                          <a class='flex w-full items-center justify-between rounded-lg px-4 py-3 text-zinc-700' href=''>
                            <span class="flex items-center gap-x-2">
                              <span class="line-clamp-1 text-sm text-gray-700">همه</span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#878787" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                            </span>
                          </a>
                        </li>
                        <li>
                          <div data-accordion="open">
                            <div class="space-y-2">
                              <h2 id="sub-category-2-1">
                                <button
                                  aria-controls="sub-category-body-2-1"
                                  aria-expanded="false"
                                  class="flex w-full items-center justify-between rounded-lg px-4 py-3 text-zinc-700"
                                  data-accordion-target="#sub-category-body-2-1"
                                  type="button">
                                  <span class="line-clamp-1 flex items-center text-sm">
                                    گوشی سامسونگ
                                  </span>
                                  <svg aria-hidden="true" data-accordion-icon xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#878787" viewBox="0 0 256 256"><path d="M212.24,100.24l-80,80a6,6,0,0,1-8.48,0l-80-80a6,6,0,0,1,8.48-8.48L128,167.51l75.76-75.75a6,6,0,0,1,8.48,8.48Z"></path></svg>
                                </button>
                              </h2>
                              <div
                                aria-labelledby="sub-category-2-1"
                                class="hidden"
                                id="sub-category-body-2-1">
                                <ul class="mr-4 space-y-2">
                                  <li>
                                    <a class='flex w-full items-center justify-between rounded-lg px-4 py-3 text-zinc-700' href=''>
                                      <span class="flex items-center gap-x-2">
                                        <span class="line-clamp-1 text-sm text-gray-700">همه</span>
                                        <svg class="h-5 w-5">
                                          <use xlink:href="#chevron-left" />
                                        </svg>
                                      </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class='flex rounded-lg px-4 py-3 text-zinc-700' href=''>
                                      <span class="line-clamp-1 text-sm text-gray-700">گلکسی S21 FE</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class='flex rounded-lg px-4 py-3 text-zinc-700' href=''>
                                      <span class="line-clamp-1 text-sm text-gray-700">
                                        گلکسی A51
                                      </span>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div data-accordion="open">
                            <div class="space-y-2">
                              <h2 id="sub-category-2-2">
                                <button
                                  aria-controls="sub-category-body-2-2"
                                  aria-expanded="false"
                                  class="flex w-full items-center justify-between rounded-lg px-4 py-3 text-zinc-700"
                                  data-accordion-target="#sub-category-body-2-2"
                                  type="button">
                                  <span class="line-clamp-1 flex items-center text-sm">
                                    گوشی شیائومی
                                  </span>
                                  <svg aria-hidden="true" data-accordion-icon xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#878787" viewBox="0 0 256 256"><path d="M212.24,100.24l-80,80a6,6,0,0,1-8.48,0l-80-80a6,6,0,0,1,8.48-8.48L128,167.51l75.76-75.75a6,6,0,0,1,8.48,8.48Z"></path></svg>
                                </button>
                              </h2>
                              <div
                                aria-labelledby="sub-category-2-2"
                                class="hidden"
                                id="sub-category-body-2-2">
                                <ul class="mr-4 space-y-2">
                                  <li>
                                    <a class='flex w-full items-center justify-between rounded-lg px-4 py-3 text-zinc-700' href=''>
                                      <span class="flex items-center gap-x-2">
                                        <span class="line-clamp-1 text-sm text-gray-700">همه</span>
                                        <svg class="h-5 w-5">
                                          <use xlink:href="#chevron-left" />
                                        </svg>
                                      </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class='flex rounded-lg px-4 py-3 text-zinc-700' href=''>
                                      <span class="line-clamp-1">
                                        POCO X3
                                      </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class='flex rounded-lg px-4 py-3 text-zinc-700' href=''>
                                      <span class="line-clamp-1">
                                        P45 plus
                                      </span>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
    </div>
    <!-- background gray -->
    <div
      class="fixed inset-0 z-20 hidden bg-black/40 backdrop-blur-md"
      id="header-overlay">
    </div>
  </header>
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
    <div class="my-8 lg:my-10 py-5 lg:px-10 flex flex-col md:flex-row gap-5">
      <div class="md:w-4/12 lg:w-3/12">
        <div class="mb-4 rounded-2xl bg-white shadow-box-md">
          <div class="flex flex-col overflow-y-auto overflow-x-hidden px-4 py-3">
            <div>
              <!-- title -->
              <div class="mb-6 flex items-center justify-between">
                <h3 class="text-zinc-700">
                  فیلتر ها
                </h3>
                <button class="py-2 text-sm text-red-400 hover:text-red-500 transition">
                  حذف همه
                </button>
              </div>
              <ul class="space-y-6 divide-y">
                <!-- category -->
                <li>
                  <details class="group">
                    <summary class="flex cursor-pointer items-center justify-between rounded-lg py-3 text-zinc-700">
                      <span> دسته بندی </span>
                      <span class="shrink-0 transition duration-200 group-open:-rotate-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
                      </span>
                    </summary>
                    <div class="mt-2 max-h-60 overflow-y-auto pl-1">
                      <ul class="space-y-2 rounded-lg">
                        <li>
                          <a class="flex items-center gap-x-2 rounded-lg px-4 py-2 text-zinc-700" href="#">
                            <span>موبایل</span>
                            <svg class="h-5 w-5">
                              <use xlink:href="#chevron-left"></use>
                            </svg>
                          </a>
                        </li>
                        <li>
                          <a class="flex items-center gap-x-2 rounded-lg px-4 py-2 text-zinc-700" href="#">
                            <span> کالای دیجیتال</span>
                            <svg class="h-5 w-5">
                              <use xlink:href="#chevron-left"></use>
                            </svg>
                          </a>
                        </li>
                        <li>
                          <a class="flex items-center gap-x-2 rounded-lg px-4 py-2 text-zinc-700" href="#">
                            <span> آرایشی بهداشتی</span>
                            <svg class="h-5 w-5">
                              <use xlink:href="#chevron-left"></use>
                            </svg>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </details>
                </li>
                <!-- price -->
                <li>
                  <div>
                    <p class="mb-4 text-zinc-700">
                      محدوده قیمت
                    </p>
                    <div class="space-y-4">
                      <div id="shop-price-slider"></div>
                      <div class="flex items-center justify-between">
                        <div
                          class="text-red-400">
                          <span
                            class="text-xs font-semibold xl:text-sm"
                            id="shop-price-slider-min">
                          </span>
                          <span class="text-xs">تومان</span>
                        </div>
                        <div
                          class="text-red-400">
                          <span
                            class="text-xs font-semibold xl:text-sm"
                            id="shop-price-slider-max">
                          </span>
                          <span class="text-xs">تومان</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- brand -->
                <li>
                  <details class="group">
                    <summary class="flex cursor-pointer items-center justify-between rounded-lg pt-3 text-zinc-700">
                      <span> برند </span>
                      <span class="shrink-0 transition duration-200 group-open:-rotate-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
                      </span>
                    </summary>
                    <div class="max-h-60 overflow-y-auto pl-1">
                      <ul class="space-y-2 rounded-lg" id="brandListFilterDesktop">
                        <li class="p-2 relative">
                          <input id="brandListFilterDesktopSearchInput" class="w-full pr-10 rounded-lg border border-none bg-gray-100 px-7 py-3 text-zinc-600 outline-none placeholder:text-sm placeholder:text-zinc-500 focus:ring-0" placeholder="جستجوی برند ..." type="text">
                          <svg class="absolute top-6 right-4 fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path></svg>
                        </li>
                        <li>
                          <div class="flex w-full items-center gap-x-2 pr-4 bg-gray-50 rounded-md">
                            <input id="brand-nike" type="checkbox" value="" class="h-4 w-4 cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                            <label for="brand-nike" class="flex w-full cursor-pointer items-center justify-between py-2 pl-4 font-medium text-zinc-600">
                              <span>نایک</span>
                              <span>nike</span>
                            </label>
                          </div>
                        </li>
                        <li>
                          <div class="flex w-full items-center gap-x-2 pr-4 bg-gray-50 rounded-md">
                            <input id="brand-adidas" type="checkbox" value="" class="h-4 w-4 cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                            <label for="brand-adidas" class="flex w-full cursor-pointer items-center justify-between py-2 pl-4 font-medium text-zinc-600">
                              <span>آدیداس</span>
                              <span>adidas</span>
                            </label>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </details>
                </li>
                <!-- type seller -->
                <li>
                  <details class="group">
                    <summary class="flex cursor-pointer items-center justify-between rounded-lg pt-3 text-zinc-700">
                      <span> نوع فروشنده </span>
                      <span class="shrink-0 transition duration-200 group-open:-rotate-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
                      </span>
                    </summary>
                    <div class="mt-2 max-h-60 overflow-y-auto pl-1">
                      <ul class="space-y-2 rounded-lg" id="colorListFilterDesktop">
                        <li>
                          <div class="flex w-full items-center gap-x-2 pr-4">
                            <input id="color-red" type="checkbox" value="" class="h-4 w-4 cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                            <label for="color-red" class="flex w-full cursor-pointer items-center py-2 pl-4 font-medium text-zinc-600">
                              <span>مدکالا</span>
                            </label>
                          </div>
                        </li>
                        <li>
                          <div class="flex w-full items-center gap-x-2 pr-4">
                            <input id="color-blue" type="checkbox" value="" class="h-4 w-4 cursor-pointer rounded-xl border-gray-300 bg-gray-100">
                            <label for="color-blue" class="flex w-full cursor-pointer items-center py-2 pl-4 font-medium text-zinc-600">
                              <span>فروشنده رسمی</span>
                            </label>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </details>
                </li>
                <!-- available -->
                <li>
                  <label class="flex cursor-pointer items-center justify-between py-3" for="onlyAvailableDesktop">
                    <div class="text-zinc-700 dark:text-white">
                      فقط کالا های موجود
                    </div>
                    <div class="relative inline-flex cursor-pointer items-center">
                      <input class="peer sr-only" id="onlyAvailableDesktop" type="checkbox">
                      <div class="peer h-6 w-11 rounded-full bg-gray-200 after:absolute after:left-[2px] after:top-0.5 after:h-5 after:w-5 after:rounded-full after:bg-white after:transition-all after:content-[''] peer-checked:bg-red-400 peer-checked:after:translate-x-full peer-focus:ring-red-400"></div>
                    </div>
                  </label>
                </li>
                <!-- special -->
                <li>
                  <label class="flex cursor-pointer items-center justify-between py-3" for="onlySpecialDesktop">
                    <div class="text-zinc-700 dark:text-white">
                     فقط محصولات دارای گارانتی
                    </div>
                    <div class="relative inline-flex cursor-pointer items-center">
                      <input class="peer sr-only" id="onlySpecialDesktop" type="checkbox">
                      <div class="peer h-6 w-11 rounded-full bg-gray-200 after:absolute after:left-[2px] after:top-0.5 after:h-5 after:w-5 after:rounded-full after:bg-white after:transition-all after:content-[''] peer-checked:bg-red-400 peer-checked:after:translate-x-full peer-focus:ring-red-400"></div>
                    </div>
                  </label>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="md:w-8/12 lg:w-9/12">
        <!-- filter -->
        <div class="bg-white shadow-box-sm rounded-2xl grid place-items-start p-5">
          <div class="flex flex-wrap gap-5 justify-start items-center">
                <div class="text-zinc-600 text-sm">
                  مرتب سازی:
                </div>
                <div id="filter-options" class="flex gap-2">
                <div class="filter-item text-xs hover:text-red-500 transition cursor-pointer text-red-500">
                    محبوب ترین
                </div>
                <div class="filter-item text-zinc-500 text-xs hover:text-red-400 transition cursor-pointer">
                    پرفروش ترین
                </div>
                <div class="filter-item text-zinc-500 text-xs hover:text-red-400 transition cursor-pointer">
                    ارزان ترین
                </div>
                <div class="filter-item text-zinc-500 text-xs hover:text-red-400 transition cursor-pointer">
                    گران ترین
                </div>
                <div class="filter-item text-zinc-500 text-xs hover:text-red-400 transition cursor-pointer">
                    جدیدترین
                </div>
                <div class="filter-item text-zinc-500 text-xs hover:text-red-400 transition cursor-pointer">
                    پربازدیدترین
                </div>
                </div>



          </div>
        </div>
        <!-- products -->

        <div id="productListt" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 mt-5 ">
            @foreach ( $products as $product )
                <a href="{{route('product' , ['id'=>$product->id])}}" class=" bg-white rounded-xl shadow-box hover:drop-shadow-lg transition px-4 py-4">
                <img class="mx-auto" src="./assets/image/products/2.webp" alt="">
                <div class="text-zinc-600 text-sm">
                    {{ $product->name }}
                </div>
                <div class="flex items-start justify-end gap-x-1 text-xs text-zinc-500 mt-3">
                    <span>
                    4.8
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                </div>
                <div class="flex justify-between items-center mt-3">
                    @if ($product->discust)
                    <div class="bg-red-500 rounded-full px-2 py-1 text-white flex items-center gap-x-1 text-xs">
                    {{$product->discust}}%
                    </div>
                    @endif
                    <div class="flex justify-center gap-x-1 text-sm text-zinc-700">
                    <div>29,800,000</div>
                    <div>تومان</div>
                    </div>
                </div>
                </a>
            @endforeach

        </div>

        <div class="mt-8" id="pageinate">
            <ul class="flex items-center justify-center gap-x-2 md:gap-x-3 h-8 text-sm">
                {{-- دکمه قبلی --}}
                @if ($products->onFirstPage())
                    <li>
                        <span class="flex items-center justify-center transition shadow-lg px-3 h-8 ms-0 text-gray-300 bg-white rounded-lg">
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"></path>
                            </svg>
                        </span>
                    </li>
                @else
                    <li>
                        <a href="{{ $products->previousPageUrl() }}" class="flex items-center justify-center transition shadow-lg px-3 h-8 ms-0 text-gray-500 bg-white rounded-lg hover:bg-red-100 hover:text-red-400">
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"></path>
                            </svg>
                        </a>
                    </li>
                @endif

                {{-- شماره صفحات --}}
                @foreach ($products->links()->elements[0] as $page => $url)
                    @if ($page == $products->currentPage())
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
                @if ($products->hasMorePages())
                    <li>
                        <a href="{{ $products->nextPageUrl() }}" class="flex items-center justify-center transition shadow-lg px-3 h-8 text-gray-500 bg-white rounded-lg hover:bg-red-100 hover:text-red-400">
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
    </div>
  </main>
  <!-- footer -->
  <div class="bg-white border-t pt-8 max-w-[1680px] mx-auto">
    <!-- top footer -->
    <div class="flex flex-wrap gap-y-4 justify-between items-center px-6">
      <div class="flex flex-col">
        <div>
          <img class="w-32 md:w-48" src="./assets/image/logo.png" alt="">
        </div>
        <div class="text-xs text-zinc-600 mt-3">
          تلفن پشتیبانی 44444444-021
        </div>
      </div>
      <div>
        <button type="button" class="flex items-center gap-x-1 border rounded-lg px-3 py-2 text-zinc-500 text-sm md:text-base" id="btn-back-to-top">
          برو به بالا
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#9c9c9c" viewBox="0 0 256 256"><path d="M128,26A102,102,0,1,0,230,128,102.12,102.12,0,0,0,128,26Zm0,192a90,90,0,1,1,90-90A90.1,90.1,0,0,1,128,218Zm44.24-78.24a6,6,0,1,1-8.48,8.48L128,112.49,92.24,148.24a6,6,0,0,1-8.48-8.48l40-40a6,6,0,0,1,8.48,0Z"></path></svg>
        </button>
      </div>
    </div>
    <!-- services -->
    <div class="flex flex-wrap items-center gap-y-5 justify-around mb-10">
        <div class="flex justify-center items-center flex-col rounded-3xl w-28 h-24">
          <img class="w-12 md:w-14" src="./assets/image/services/cash-on-delivery.svg" alt="">
          <span class="text-xs text-zinc-600">
          پرداخت درب منزل
          </span>
        </div>
        <div class="flex justify-center items-center flex-col rounded-3xl w-28 h-24">
          <img class="w-12 md:w-14" src="./assets/image/services/days-return.svg" alt="">
          <span class="text-xs text-zinc-600">
          ضمانت 7 روزه
          </span>
        </div>
        <div class="flex justify-center items-center flex-col rounded-3xl w-28 h-24">
          <img class="w-12 md:w-14" src="./assets/image/services/express-delivery.svg" alt="">
          <span class="text-xs text-zinc-600">
          پست پیشتاز
          </span>
        </div>
        <div class="flex justify-center items-center flex-col rounded-3xl w-28 h-24">
          <img class="w-12 md:w-14" src="./assets/image/services/original-products.svg" alt="">
          <span class="text-xs text-zinc-600">
          ضمانت کالا
          </span>
        </div>
        <div class="flex justify-center items-center flex-col rounded-3xl w-28 h-24">
          <img class="w-12 md:w-14" src="./assets/image/services/support.svg" alt="">
          <span class="text-xs text-zinc-600">
          پشتیبانی 24 ساعته
          </span>
        </div>
    </div>
    <!-- links -->
    <div class="mx-auto shadow-lg">
      <div class="flex flex-wrap">
        <div class="px-4 sm:w-1/2 lg:w-3/12">
          <div class="mb-10 w-full">
            <h4 class="mb-3 text-zinc-700">با مدکالا</h4>
            <ul class="grid gap-y-3">
              <li>
                <a
                  href="./index.html"
                  class="mb-2 hover:text-zinc-600 transition text-zinc-500 text-xs md:text-sm">
                وبلاگ مدکالا
                </a>
              </li>
              <li>
                <a
                  href="./index.html"
                  class="mb-2 hover:text-zinc-600 transition text-zinc-500 text-xs md:text-sm">
                فروش در مدکالا
                </a>
              </li>
              <li>
                <a
                  href="./index.html"
                  class="mb-2 hover:text-zinc-600 transition text-zinc-500 text-xs md:text-sm">
                گزارش تخلف در مدکالا
                </a>
              </li>
              <li>
                <a
                  href="./index.html"
                  class="mb-2 hover:text-zinc-600 transition text-zinc-500 text-xs md:text-sm">
                تماس با مدکالا
                </a>
              </li>
              <li>
                <a
                  href="./index.html"
                  class="mb-2 hover:text-zinc-600 transition text-zinc-500 text-xs md:text-sm">
                درباره مدکالا
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="px-4 sm:w-1/2 lg:w-3/12">
          <div class="mb-10 w-full">
            <h4 class="mb-3 text-zinc-700">خدمات مشتریان</h4>
            <ul class="grid gap-y-3">
              <li>
                <a
                  href="./index.html"
                  class="mb-2 hover:text-zinc-600 transition text-zinc-500 text-xs md:text-sm">
                پرسش های متداول
                </a>
              </li>
              <li>
                <a
                  href="./index.html"
                  class="mb-2 hover:text-zinc-600 transition text-zinc-500 text-xs md:text-sm">
                رویه مرجوع کردن کالا
                </a>
              </li>
              <li>
                <a
                  href="./index.html"
                  class="mb-2 hover:text-zinc-600 transition text-zinc-500 text-xs md:text-sm">
                شرایط استفاده
                </a>
              </li>
              <li>
                <a
                  href="./index.html"
                  class="mb-2 hover:text-zinc-600 transition text-zinc-500 text-xs md:text-sm">
                حریم خصوصی
                </a>
              </li>
              <li>
                <a
                  href="./index.html"
                  class="mb-2 hover:text-zinc-600 transition text-zinc-500 text-xs md:text-sm">
                گزارش باگ
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="px-4 sm:w-1/2 lg:w-3/12">
          <div class="mb-10 w-full">
            <h4 class="mb-3 text-zinc-700">راهنمای خرید از مدکالا</h4>
            <ul class="grid gap-y-3">
              <li>
                <a
                  href="./index.html"
                  class="mb-2 hover:text-zinc-600 transition text-zinc-500 text-xs md:text-sm">
                نحوه ثبت سفارش
                </a>
              </li>
              <li>
                <a
                  href="./index.html"
                  class="mb-2 hover:text-zinc-600 transition text-zinc-500 text-xs md:text-sm">
                رویه ارسال سفارش
                </a>
              </li>
              <li>
                <a
                  href="./index.html"
                  class="mb-2 hover:text-zinc-600 transition text-zinc-500 text-xs md:text-sm">
                شیوه های پرداخت
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="px-4 sm:w-1/2 lg:w-3/12">
          <div class="mb-10 w-full">
            <h4 class="mb-2 text-right text-zinc-700">همراه ما باشید!</h4>
            <div class="mb-5 flex items-center justify-start">
              <a href="#" title="instagram" class="mr-3 flex h-11 md:h-12 w-11 md:w-12 items-center justify-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#575757" viewBox="0 0 256 256"><path d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"></path></svg>                </a>
              <a href="#" title="telegram" class="mr-3 flex h-11 md:h-12 w-11 md:w-12 items-center justify-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#575757" viewBox="0 0 256 256"><path d="M236.88,26.19a9,9,0,0,0-9.16-1.57L25.06,103.93a14.22,14.22,0,0,0,2.43,27.21L80,141.45V200a15.92,15.92,0,0,0,10,14.83,15.91,15.91,0,0,0,17.51-3.73l25.32-26.26L173,220a15.88,15.88,0,0,0,10.51,4,16.3,16.3,0,0,0,5-.79,15.85,15.85,0,0,0,10.67-11.63L239.77,35A9,9,0,0,0,236.88,26.19Zm-61.14,36L86.15,126.35l-49.6-9.73ZM96,200V152.52l24.79,21.74Zm87.53,8L100.85,135.5l119-85.29Z"></path></svg>                </a>
              <a href="#" title="whatsapp" class="mr-3 flex h-11 md:h-12 w-11 md:w-12 items-center justify-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#575757" viewBox="0 0 256 256"><path d="M187.58,144.84l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88,40,40,0,0,0,40-40A8,8,0,0,0,187.58,144.84ZM152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155l14.61-9.74,23,11.48A24,24,0,0,1,152,176ZM128,24A104,104,0,0,0,36.18,176.88L24.83,210.93a16,16,0,0,0,20.24,20.24l34.05-11.35A104,104,0,1,0,128,24Zm0,192a87.87,87.87,0,0,1-44.06-11.81,8,8,0,0,0-6.54-.67L40,216,52.47,178.6a8,8,0,0,0-.66-6.54A88,88,0,1,1,128,216Z"></path></svg>                </a>
            </div>
            <div class="text-sm text-zinc-700">
              با ثبت ایمیل، از آخرین تخفیف‌ها با‌خبر شوید!
              <div class="flex gap-x-2 mt-5">
                <input class="w-9/12 p-3 border rounded-xl focus:outline-none" placeholder="ایمیل شما..." type="email" name="" id="">
                <button disabled class="text-sm disabled:bg-zinc-300 py-2 px-3 h-auto rounded-lg text-white bg-red-500 hover:bg-red-400 transition">
                  ارسال
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="px-4 lg:flex pb-5">
        <div class="lg:w-9/12">
          <p class="mb-2 text-lg text-zinc-700">
            فروشگاه اینترنتی مدکالا
          </p>
          <p class="mb-7 text-zinc-600 text-sm leading-7">
            یک خرید اینترنتی مطمئن، نیازمند فروشگاهی است که بتواند کالاهایی متنوع، باکیفیت و دارای قیمت مناسب را در مدت زمان ی کوتاه به دست مشتریان خود برساند و ضمانت بازگشت کالا هم داشته باشد؛ ویژگی‌هایی که فروشگاه اینترنتی دیجی‌کالا سال‌هاست بر روی آن‌ها کار کرده و توانسته از این طریق مشتریان ثابت خود را داشته باشد.
            <br>یکی از مهم‌ترین دغدغه‌های کاربران دیجی‌کالا یا هر فروشگاه‌ اینترنتی دیگری، این است که کالای خریداری شده چه زمانی به دستشان می‌رسد. دیجی‌کالا شیوه‌های مختلفی از ارسال را متناسب با فروشنده کالا،‌ مقصد کالا و همچنین نوع کالا در اختیار کاربران خود قرار می‌دهد.</p>
        </div>
        <div class="lg:w-3/12 flex justify-center">
          <a href="#">
            <img class="w-28 h-auto" src="./assets/image/services/symbol-01.png">
          </a>
          <a href="#">
            <img class="w-28 h-auto" src="./assets/image/services/symbol-02.png">
          </a>
          <a href="#">
            <img class="w-28 h-auto" src="./assets/image/services/symbol-01.png">
          </a>
        </div>
      </div>
    </div>
    <!-- COPYRIGHT -->
    <div class="px-4 grid grid-cols-1 sm:grid-cols-2 py-5 border-t text-gray-400">
      <span class="text-xs text-center sm:text-right">
        تمامی حقوق محفوظ است 2023
      </span>
    </div>
  </div>
</body>
<!-- HEADER -->
<script defer src="./assets/js/dependencies/flowbite.min.js"></script>
<script defer src="./assets/js/app.js"></script>
<!-- price slider -->
<script defer src="./assets/js/dependencies/nouislider.min.js"></script>
<script>
  // انتخاب تمام المنت‌های فیلتر
  const filterItems = document.querySelectorAll('.filter-item');

  // افزودن event listener برای هر گزینه
  filterItems.forEach(item => {
    item.addEventListener('click', () => {
      // حذف کلاس فعال از همه آیتم‌ها
      filterItems.forEach(el => {
        el.classList.remove('text-red-500');
        el.classList.add('text-zinc-500');
      });

      // افزودن کلاس فعال به گزینه کلیک‌شده
      item.classList.remove('text-zinc-500');
      item.classList.add('text-red-500');
    });
  });
</script>
<script>
let form =document.querySelector('#formrange');
let from =document.querySelector('#encode4365gbf265g43d-range-from');
let to =document.querySelector('#encode4365gbf265g43d-range-to');
let aaa =document.querySelector('#button');
let input_from =document.querySelector('#input-from');
let input_to =document.querySelector('#input-up');
// console.log(d.innerHTML);
aaa.addEventListener('click', function(){
    // console.log(d.innerHTML);
    let r =from.innerHTML
    input_from.value = r
    let g =to.innerHTML
    input_to.value= g
    // document.getElementById('input1').value = "1";
})
</script>
<script>
document.getElementById('onlyAvailableDesktop').addEventListener('click', function () {


    const checkbox = document.getElementById('onlyAvailableDesktop').checked;
    const checkboxw = document.getElementById('onlySpecialDesktop').checked;

    const xhr = new XMLHttpRequest();
    const HasWarranty = 1;
    const readyToShip = 1;
    if (checkboxw && checkbox) {
        xhr.open('GET', `/filter-by-price?HasWarranty=${HasWarranty}&ready_to_ship=${readyToShip}`, true);
    }else if(checkbox && !checkboxw){
        xhr.open('GET', `/filter-by-price?ready_to_ship=${readyToShip}`, true);
    }
    else if(!checkbox & checkboxw){
        xhr.open('GET', `/filter-by-price?HasWarranty=${HasWarranty}`, true);
    }else{
        window.location.href = '/products';
        throw new Error('');
    }

    // ارسال درخواست
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // پردازش پاسخ سرور
            const response = JSON.parse(xhr.responseText);

            console.log(response);
            if (response.status === 'success') {
                document.getElementById('pageinate').remove();


                // document.getElementById('total').innerHTML = response.all + ' کالا';
                const productList = document.getElementById('productListt');

                productList.innerHTML = ''; // پاک کردن محصولات قدیمی

                response.products.forEach(product => {
                    productList.innerHTML += `
                <a href="" class=" bg-white rounded-xl shadow-box hover:drop-shadow-lg transition px-4 py-4">
                <img class="mx-auto" src="./assets/image/products/2.webp" alt="">
                <div class="text-zinc-600 text-sm">
                    لپ تاپ ایسوس مدل A42 plus مخصوص طراحی
                </div>
                <div class="flex items-start justify-end gap-x-1 text-xs text-zinc-500 mt-3">
                    <span>
                    4.8
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                </div>
                <div class="flex justify-between items-center mt-3">
                    <div class="bg-red-500 rounded-full px-2 py-1 text-white flex items-center gap-x-1 text-xs">
                    10%
                    </div>
                    <div class="flex justify-center gap-x-1 text-sm text-zinc-700">
                    <div>29,800,000</div>
                    <div>تومان</div>
                    </div>
                </div>
                </a>
                    `;
                });
            } else {
                console.error('Failed to load products');
            }
        } else if (xhr.readyState === 4) {
            console.error('Error:', xhr.statusText);
        }
    };

    xhr.onerror = function () {
        console.error('Request failed.');
    };

    xhr.send();
});

// تابع برای تولید ستاره‌ها
function generateStars(stars) {
    let starsHTML = '';
    for (let i = 0; i < stars; i++) {
        starsHTML += '<i class="fa fa-star"></i>';
    }
    return starsHTML;
}
</script>
<script>
document.getElementById('onlySpecialDesktop').addEventListener('click', function () {
    const xhr = new XMLHttpRequest();
    const HasWarranty = 1;
    const readyToShip = 1;
    const checkbox = document.getElementById('onlyAvailableDesktop').checked;
    const checkboxw = document.getElementById('onlySpecialDesktop').checked;
    if (checkboxw && checkbox) {
        xhr.open('GET', `/filter-by-price?HasWarranty=${HasWarranty}&ready_to_ship=${readyToShip}`, true);
    }else if(checkboxw && !checkbox){
        xhr.open('GET', `/filter-by-price?HasWarranty=${HasWarranty}`, true);
    }
    else if(!checkboxw && checkbox){
        xhr.open('GET', `/filter-by-price?ready_to_ship=${readyToShip}`, true);
    }else{
        window.location.href = '/products';
        throw new Error('');
    }
    // ارسال درخواست
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // پردازش پاسخ سرور
            const response = JSON.parse(xhr.responseText);

            console.log(response);
            if (response.status === 'success') {
                console.log('ok');
                // document.getElementById('total').innerHTML = response.all + ' کالا';
                const productList = document.getElementById('productListt');
               document.getElementById('pageinate').remove();

                productList.innerHTML = ''; // پاک کردن محصولات قدیمی

                response.products.forEach(product => {
                    productList.innerHTML += `
                <a href="" class=" bg-white rounded-xl shadow-box hover:drop-shadow-lg transition px-4 py-4">
                <img class="mx-auto" src="./assets/image/products/2.webp" alt="">
                <div class="text-zinc-600 text-sm">
                    لپ تاپ ایسوس مدل A42 plus مخصوص طراحی
                </div>
                <div class="flex items-start justify-end gap-x-1 text-xs text-zinc-500 mt-3">
                    <span>
                    4.8
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                </div>
                <div class="flex justify-between items-center mt-3">
                    <div class="bg-red-500 rounded-full px-2 py-1 text-white flex items-center gap-x-1 text-xs">
                    10%
                    </div>
                    <div class="flex justify-center gap-x-1 text-sm text-zinc-700">
                    <div>29,800,000</div>
                    <div>تومان</div>
                    </div>
                </div>
                </a>
                    `;
                });
            } else {
                console.error('Failed to load products');
            }
        } else if (xhr.readyState === 4) {
            console.error('Error:', xhr.statusText);
        }
    };

    xhr.onerror = function () {
        console.error('Request failed.');
    };

    xhr.send();
});

// تابع برای تولید ستاره‌ها
function generateStars(stars) {
    let starsHTML = '';
    for (let i = 0; i < stars; i++) {
        starsHTML += '<i class="fa fa-star"></i>';
    }
    return starsHTML;
}
</script>
<script>
document.getElementById('button').addEventListener('click', function () {
    // دریافت مقادیر بازه قیمتی
    const xhr = new XMLHttpRequest();
    const minPrice = document.getElementById('input-from').value;
    const maxPrice = document.getElementById('input-up').value;
    const HasWarranty = 1;
    const readyToShip = 1;
    const checkbox = document.getElementById('onlyAvailableDesktop').checked;
    const checkboxw = document.getElementById('onlySpecialDesktop').checked;
    if (checkboxw && checkbox) {
        xhr.open('GET', `/filter-by-price?HasWarranty=${HasWarranty}&ready_to_ship=${readyToShip}&min_price=${minPrice}&max_price=${maxPrice}`, true);
    }else if(checkboxw && !checkbox){
        xhr.open('GET', `/filter-by-price?HasWarranty=${HasWarranty}&min_price=${minPrice}&max_price=${maxPrice}`, true);
    }
    else if(!checkboxw && checkbox){
        xhr.open('GET', `/filter-by-price?ready_to_ship=${readyToShip}&min_price=${minPrice}&max_price=${maxPrice}`, true);
    }else{
        xhr.open('GET', `/filter-by-price?min_price=${minPrice}&max_price=${maxPrice}`, true);
    }

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);

            console.log(response);
            if (response.status === 'success') {
                const delElement = document.getElementById('del');


                if (delElement) delElement.remove();
                document.getElementById('total').innerHTML=response.all + 'کالا';
                const productList = document.getElementById('productListt');
                console.log(productList);
                productList.innerHTML = ''; // پاک کردن محصولات قدیمی

                response.products.forEach(product => {
                    productList.innerHTML += `
                        <div class="col">
                            <!-- Product Box -->
                            <div class="encode4326654321vfb">
                                <a href="/product-${product.id}">
                                    <div class="image" style="background-image: url('${product.gallery[0].image}')"></div>
                                </a>
                                <div class="details p-3">
                                    <div class="category">
                                        <a href="/products?search=${product.brand}">${product.Brand}</a>
                                    </div>
                                    <a href="/product-${product.id}">
                                        <h2>${product.name}</h2>
                                    </a>
                                    <div class="encode4365gbf265g43d">${product.price * (100-product.discust)/100} تومان</div>
                                    <div class="rate">
                                        ${generateStars(product.stars)}

                                    </div>
                                </div>
                            </div>
                            <!-- /Product Box -->
                        </div>
                    `;
                });
            } else {
                console.error('Failed to load products');
            }
        } else if (xhr.readyState === 4) {
            console.error('Error:', xhr.statusText);
        }
    };

    xhr.onerror = function () {
        console.error('Request failed.');
    };

    xhr.send();
});

// تابع برای تولید ستاره‌ها
function generateStars(stars) {
    let starsHTML = '';
    for (let i = 0; i < stars; i++) {
        starsHTML += '<i class="fa fa-star"></i>';
    }
    return starsHTML;
}



</script>
<script>
    Array.from(document.getElementsByClassName("cat")).forEach(function(el) {
            el.addEventListener("click", function(){
            let cat = el.nextElementSibling.innerHTML
            const xhr = new XMLHttpRequest();

            const HasWarranty = 1;
            const readyToShip = 1;
            const checkbox = document.getElementById('onlyAvailableDesktop').checked;
            const checkboxw = document.getElementById('onlySpecialDesktop').checked;
            if (checkboxw && checkbox) {
                xhr.open('GET', `/filter-by-price?HasWarranty=${HasWarranty}&ready_to_ship=${readyToShip}&cat=${cat}`, true);

            }else if(checkboxw && !checkbox){
                xhr.open('GET', `/filter-by-price?HasWarranty=${HasWarranty}&cat=${cat}`, true);

            }
            else if(!checkboxw && checkbox){
                xhr.open('GET', `/filter-by-price?ready_to_ship=${readyToShip}&cat=${cat}`, true);
            }else if(el.checked){
                xhr.open('GET', `/filter-by-price?cat=${cat}`, true);

            }else{
                window.location.href = '/products';
                throw new Error('');
            }

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);

                    if (response.status === 'success') {
                        const delElement = document.getElementById('del');


                        if (delElement) delElement.remove();
                        document.getElementById('total').innerHTML=response.all + 'کالا';
                        const productList = document.getElementById('productListt');
                        productList.innerHTML = ''; // پاک کردن محصولات قدیمی

                        response.products.forEach(product => {
                            productList.innerHTML += `
                                <div class="col">
                                    <!-- Product Box -->
                                    <div class="encode4326654321vfb">
                                        <a href="/product-${product.id}">
                                            <div class="image" style="background-image: url('${product.gallery[0].image}')"></div>
                                        </a>
                                        <div class="details p-3">
                                            <div class="category">
                                                <a href="/products?search=${product.brand}">${product.Brand}</a>
                                            </div>
                                            <a href="/product-${product.id}">
                                                <h2>${product.name}</h2>
                                            </a>
                                            <div class="encode4365gbf265g43d">${product.price * (100-product.discust)/100} تومان</div>
                                            <div class="rate">
                                                ${generateStars(product.stars)}

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Product Box -->
                                </div>
                            `;
                        });
                    } else {
                        console.error('Failed to load products');
                    }
                } else if (xhr.readyState === 4) {
                    console.error('Error:', xhr.statusText);
                }
            };

            xhr.onerror = function () {
                console.error('Request failed.');
            };

            xhr.send();
                });
            });

            function generateStars(stars) {
                let starsHTML = '';
                for (let i = 0; i < stars; i++) {
                    starsHTML += '<i class="fa fa-star"></i>';
                }
                return starsHTML;
            }
</script>
<script>
// انتخاب تمام المنت‌های فیلتر
const filterItems = document.querySelectorAll('.filter-item');

// افزودن event listener برای هر گزینه
filterItems.forEach(item => {
  item.addEventListener('click', () => {
    // حذف کلاس فعال از همه آیتم‌ها
    filterItems.forEach(el => {
      el.classList.remove('text-red-500');
      el.classList.add('text-zinc-500');
    });

    // افزودن کلاس فعال به گزینه کلیک‌شده
    item.classList.remove('text-zinc-500');
    item.classList.add('text-red-500');
  });
});
</script>

</html>
