  <!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./assets/css/output.css">
  <link rel="stylesheet" href="./assets/css/font.css">

  <link href="./assets/css/dependencies/swiper.min.css" rel="stylesheet"/>
  <link href="./assets/css/app.css" rel="stylesheet"/>

  <link rel="stylesheet" href="./assets/css/dependencies/swiper-product.css">
  <link href="./assets/css/main.css" rel="stylesheet"/>

  <title>صفحه اصلی</title>
</head>
<body class="bg-[#fcfcfc]">
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
                <div>
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
              <div class="group relative cursor-pointer">
                <div class="p-2 pt-0 text-sm text-zinc-700 flex items-center gap-x-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M96,104a8,8,0,0,1,8-8h64a8,8,0,0,1,0,16H104A8,8,0,0,1,96,104Zm8,40h64a8,8,0,0,0,0-16H104a8,8,0,0,0,0,16Zm128,48a32,32,0,0,1-32,32H88a32,32,0,0,1-32-32V64a16,16,0,0,0-32,0c0,5.74,4.83,9.62,4.88,9.66h0A8,8,0,0,1,24,88a7.89,7.89,0,0,1-4.79-1.61h0C18.05,85.54,8,77.61,8,64A32,32,0,0,1,40,32H176a32,32,0,0,1,32,32V168h8a8,8,0,0,1,4.8,1.6C222,170.46,232,178.39,232,192ZM96.26,173.48A8.07,8.07,0,0,1,104,168h88V64a16,16,0,0,0-16-16H67.69A31.71,31.71,0,0,1,72,64V192a16,16,0,0,0,32,0c0-5.74-4.83-9.62-4.88-9.66A7.82,7.82,0,0,1,96.26,173.48ZM216,192a12.58,12.58,0,0,0-3.23-8h-94a26.92,26.92,0,0,1,1.21,8,31.82,31.82,0,0,1-4.29,16H200A16,16,0,0,0,216,192Z"></path></svg>
                  صفحات
                </div>
                <div class="absolute bottom-0 flex w-full justify-center">
                  <div
                    class="left-0 h-[1px] animate-border-width-reverse rounded-full bg-gradient-to-r from-red-400 to-red-400 transition-all duration-200 group-hover:animate-border-width">
                  </div>
                </div>
                <div class="absolute top-full hidden group-hover:block bg-white rounded-lg drop-shadow-xl w-56 z-50 p-2 text-sm text-zinc-600">
                  <a class="block hover:text-zinc-800 hover:bg-zinc-100 rounded-md transition p-2 my-1" href="./404.html">
                    404
                  </a>
                  <a class="block hover:text-zinc-800 hover:bg-zinc-100 rounded-md transition p-2 my-1" href="./blog.html">
                    بلاگ
                  </a>
                  <a class="block hover:text-zinc-800 hover:bg-zinc-100 rounded-md transition p-2 my-1" href="./blog(single).html">
                    بلاگ تکی
                  </a>
                  <a class="block hover:text-zinc-800 hover:bg-zinc-100 rounded-md transition p-2 my-1" href="./cart.html">
                    سبد خرید
                  </a>
                  <a class="block hover:text-zinc-800 hover:bg-zinc-100 rounded-md transition p-2 my-1" href="./category-index.html">
                   دسته بندی
                  </a>
                  <a class="block hover:text-zinc-800 hover:bg-zinc-100 rounded-md transition p-2 my-1" href="./checkout.html">
                    پرداخت
                  </a>
                  <a class="block hover:text-zinc-800 hover:bg-zinc-100 rounded-md transition p-2 my-1" href="./login-register.html">
                    ورود یا ثبت نام
                  </a>
                  <a class="block hover:text-zinc-800 hover:bg-zinc-100 rounded-md transition p-2 my-1" href="./profile.html">
                    پروفایل کاربر
                  </a>
                  <a class="block hover:text-zinc-800 hover:bg-zinc-100 rounded-md transition p-2 my-1" href="./search.html">
                    جستجو محصولات
                  </a>
                  <a class="block hover:text-zinc-800 hover:bg-zinc-100 rounded-md transition p-2 my-1" href="./single-product.html">
                    جزئیات محصول
                  </a>
                </div>
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
  <!-- BOTTOM NAVIGATION -->
  <div class="px-4 bg-white shadow-2xl w-full border fixed bottom-0 left-1/2 -translate-x-1/2 md:hidden z-50">
    <div class="grid grid-cols-5">
      <div class="flex-1 group">
        <a href="#" class="flex items-end justify-center text-center mx-auto pt-2 w-full text-gray-800 group-hover:text-red-500">
          <span class="block pt-1 pb-1">
            <svg class="mx-auto fill-gray-800 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"></path></svg>
            <span class="block text-xs py-1">پروفایل</span>
            <span class="block w-5 mx-auto h-1 group-hover:bg-red-500 rounded-full"></span>
          </span>
        </a>
      </div>
      <div class="flex-1 group">
        <a href="#" class="flex items-end justify-center text-center mx-auto pt-2 w-full text-gray-800 group-hover:text-red-500">
          <span class="block pt-1 pb-1">
            <svg class="mx-auto fill-gray-800 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#000000" viewBox="0 0 256 256"><path d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path></svg>
            <span class="block text-xs py-1">علاقه مندی</span>
            <span class="block w-5 mx-auto h-1 group-hover:bg-red-500 rounded-full"></span>
          </span>
        </a>
      </div>
      <div class="flex-1 group">
        <a href="#" class="flex items-end justify-center text-center mx-auto pt-2 w-full text-red-500">
          <span class="block pt-1 pb-1">
            <svg class="mx-auto fill-red-600" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#000000" viewBox="0 0 256 256"><path d="M218.83,103.77l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208a16,16,0,0,0,16,16H96a16,16,0,0,0,16-16V160h32v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V115.55A16,16,0,0,0,218.83,103.77ZM208,208H160V160a16,16,0,0,0-16-16H112a16,16,0,0,0-16,16v48H48V115.55l.11-.1L128,40l79.9,75.43.11.1Z"></path></svg>
            <span class="block text-xs py-1">صفحه اصلی</span>
            <span class="block w-5 mx-auto h-1 bg-red-500 rounded-full"></span>
          </span>
        </a>
      </div>
      <div class="flex-1 group">
        <a href="#" class="flex items-end justify-center text-center mx-auto pt-2 w-full text-gray-800 group-hover:text-red-500">
          <span class="block pt-1 pb-1">
            <svg class="mx-auto fill-gray-800 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#000000" viewBox="0 0 256 256"><path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path></svg>
            <span class="block text-xs py-1">جستجو</span>
            <span class="block w-5 mx-auto h-1 group-hover:bg-red-500 rounded-full"></span>
          </span>
        </a>
      </div>
      <div class="flex-1 group">
        <a href="#" class="flex items-end justify-center text-center mx-auto pt-2 w-full text-gray-800 group-hover:text-red-500">
          <span class="block pt-1 pb-1">
            <svg class="mx-auto fill-gray-800 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#000000" viewBox="0 0 256 256"><path d="M222.14,58.87A8,8,0,0,0,216,56H54.68L49.79,29.14A16,16,0,0,0,34.05,16H16a8,8,0,0,0,0,16h18L59.56,172.29a24,24,0,0,0,5.33,11.27,28,28,0,1,0,44.4,8.44h45.42A27.75,27.75,0,0,0,152,204a28,28,0,1,0,28-28H83.17a8,8,0,0,1-7.87-6.57L72.13,152h116a24,24,0,0,0,23.61-19.71l12.16-66.86A8,8,0,0,0,222.14,58.87ZM96,204a12,12,0,1,1-12-12A12,12,0,0,1,96,204Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,192,204Zm4-74.57A8,8,0,0,1,188.1,136H69.22L57.59,72H206.41Z"></path></svg>
            <span class="block text-xs py-1">سبد خرید</span>
            <span class="block w-5 mx-auto h-1 group-hover:bg-red-500 rounded-full"></span>
          </span>
        </a>
      </div>
    </div>
  </div>
  <!-- hero slider -->
  <div class="mt-44 md:mt-28">
    <!-- desktop -->
    <div class="swiper heroSlider hidden md:block">
      <div class="swiper-wrapper">
        <a href="" class="swiper-slide">
          <img src="./assets/image/heroSlider/1.jpg" alt="">
        </a>
        <a href="" class="swiper-slide">
          <img src="./assets/image/heroSlider/2.webp" alt="">
        </a>
        <a href="" class="swiper-slide">
          <img src="./assets/image/heroSlider/3.webp" alt="">
        </a>
        <a href="" class="swiper-slide">
          <img src="./assets/image/heroSlider/4.webp" alt="">
        </a>
        <a href="" class="swiper-slide">
          <img src="./assets/image/heroSlider/5.webp" alt="">
        </a>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
    <!-- mobile -->
    <div class="swiper heroSlider md:hidden">
      <div class="swiper-wrapper">
        <a href="" class="swiper-slide px-4">
          <img class="rounded-lg" src="./assets/image/heroSlider/1m.png" alt="">
        </a>
        <a href="" class="swiper-slide px-4">
          <img class="rounded-lg" src="./assets/image/heroSlider/2m.png" alt="">
        </a>
        <a href="" class="swiper-slide px-4">
          <img class="rounded-lg" src="./assets/image/heroSlider/3m.png" alt="">
        </a>
        <a href="" class="swiper-slide px-4">
          <img class="rounded-lg" src="./assets/image/heroSlider/4m.png" alt="">
        </a>
        <a href="" class="swiper-slide px-4">
          <img class="rounded-lg" src="./assets/image/heroSlider/5m.png" alt="">
        </a>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <main class="max-w-[1500px] mx-auto px-3 md:px-5">
    <!-- amazing slider -->
    <div class="swiper mySwiper bg-red-500 rounded-2xl my-10">
      <div class="swiper-wrapper items-center">
        <div class="card swiper-slide flex flex-col justify-center items-center">
          <img class="w-5/12" src="./assets/image/FeaturedPromos.svg" alt="">
          <img class="w-10/12" src="./assets/image/box.webp" alt="">
        </div>
        <a href="" class="card swiper-slide my-2 p-2 md:p-3 bg-white rounded-xl">
          <svg class="mt-2 mb-3" xmlns="http://www.w3.org/2000/svg" width="108" height="13" viewBox="0 0 108 13" fill="none">
            <path d="M47.9052 0.128687C47.965 0.047491 48.057 0 48.1545 0H48.4702C48.5359 0 48.5729 0.0797569 48.5325 0.134495L46.5159 2.87132C46.4561 2.95251 46.3641 3 46.2666 3H45.9509C45.8852 3 45.8483 2.92024 45.8886 2.86551L47.9052 0.128687Z" fill="#E6123D"/>
            <path d="M43.7366 0.333334C43.9073 0.333334 44.0332 0.45282 44.0503 0.624605L44.0523 0.665145V1.66058C44.0523 1.84008 43.9386 1.97233 43.7752 1.9903L43.7366 1.99239H42.6316C42.4608 1.99239 42.3349 1.87296 42.3178 1.70113L42.3158 1.66058V0.665145C42.3158 0.485712 42.4295 0.353409 42.593 0.335424L42.6316 0.333334H43.7366Z" fill="#E6123D"/>
            <path d="M58.1319 2.71664C57.9554 2.71664 57.8101 2.57622 57.7915 2.39607L57.7895 2.35689L57.7896 0.693083C57.7896 0.507632 57.9231 0.35498 58.0946 0.335451L58.1319 0.333341H59.0911C59.2677 0.333341 59.413 0.473628 59.4316 0.653882L59.4336 0.693083L59.4339 1.16267L60.537 1.16259C60.7135 1.16259 60.8588 1.30288 60.8774 1.48314L60.8794 1.52234V2.35689C60.8794 2.54221 60.7459 2.69498 60.5744 2.71452L60.537 2.71664H58.1319Z" fill="#E6123D"/>
            <path d="M105.757 10.6167C105.934 10.6167 106.079 10.7571 106.098 10.9373L106.1 10.9764L106.099 12.6403C106.099 12.8257 105.966 12.9784 105.794 12.9979L105.757 13H104.798C104.621 13 104.476 12.8597 104.457 12.6795L104.455 12.6403L104.455 12.1707L103.352 12.1707C103.175 12.1707 103.03 12.0305 103.012 11.8502L103.01 11.811V10.9764C103.01 10.7911 103.143 10.6384 103.315 10.6188L103.352 10.6167H105.757Z" fill="#E6123D"/>
            <path d="M93.4757 2.7294C93.4943 2.90956 93.6396 3.04997 93.8161 3.04997H96.2213L96.2586 3.04786C96.4301 3.02831 96.5637 2.87555 96.5637 2.69023V1.85567L96.5616 1.81647C96.5431 1.63622 96.3978 1.49593 96.2213 1.49593L95.1182 1.49601L95.1179 1.02642L95.1159 0.987215C95.0973 0.806962 94.952 0.666674 94.7754 0.666674H93.8162L93.7788 0.668785C93.6073 0.688314 93.4738 0.840965 93.4738 1.02642L93.4737 2.69023L93.4757 2.7294Z" fill="#E6123D"/>
            <path d="M34.4205 3C34.5913 3 34.7172 3.11949 34.7343 3.29127L34.7363 3.33181V4.32725C34.7363 4.50674 34.6226 4.63899 34.4591 4.65697L34.4205 4.65906H31.8947C31.7239 4.65906 31.5981 4.53963 31.581 4.3678L31.579 4.32725V3.33181C31.579 3.15238 31.6926 3.02008 31.8561 3.00209L31.8947 3H34.4205Z" fill="#E6123D"/>
            <path d="M101.366 10.9168C101.349 10.7451 101.223 10.6256 101.052 10.6256H98.5263L98.4877 10.6277C98.3242 10.6457 98.2106 10.778 98.2106 10.9574V11.9528L98.2126 11.9934C98.2297 12.1652 98.3555 12.2846 98.5263 12.2846H101.052L101.091 12.2825C101.254 12.2646 101.368 12.1323 101.368 11.9528V10.9574L101.366 10.9168Z" fill="#E6123D"/>
            <path d="M9.15737 10.6256C9.32816 10.6256 9.454 10.7451 9.47111 10.9168L9.4731 10.9574V11.9528C9.4731 12.1323 9.35946 12.2646 9.19596 12.2825L9.15737 12.2846H6.63154C6.46074 12.2846 6.3349 12.1652 6.3178 11.9934L6.31581 11.9528V10.9574C6.31581 10.778 6.42945 10.6457 6.59295 10.6277L6.63154 10.6256H9.15737Z" fill="#E6123D"/>
            <path d="M86.3662 1.62461C86.349 1.45282 86.2232 1.33333 86.0524 1.33333H84.9474L84.9088 1.33542C84.7453 1.35341 84.6316 1.48571 84.6316 1.66515V2.66058L84.6336 2.70113C84.6507 2.87296 84.7766 2.99239 84.9474 2.99239H86.0524L86.091 2.9903C86.2545 2.97233 86.3681 2.84008 86.3681 2.66058V1.66515L86.3662 1.62461Z" fill="#E6123D"/>
            <path d="M4.42113 1.33333C4.59187 1.33333 4.71776 1.45282 4.73487 1.62461L4.73686 1.66515V2.66058C4.73686 2.84008 4.62317 2.97233 4.45971 2.9903L4.42113 2.99239H3.47364C3.30291 2.99239 3.17701 2.87296 3.1599 2.70113L3.15791 2.66058V1.66515C3.15791 1.48571 3.27161 1.35341 3.43507 1.33542L3.47364 1.33333H4.42113Z" fill="#E6123D"/>
            <path d="M21.6293 1.62461C21.6122 1.45282 21.4863 1.33333 21.3155 1.33333H20.2105L20.1719 1.33542C20.0085 1.35341 19.8948 1.48571 19.8948 1.66515V2.66058L19.8968 2.70113C19.9139 2.87296 20.0398 2.99239 20.2105 2.99239H21.3155L21.3541 2.9903C21.5176 2.97233 21.6313 2.84008 21.6313 2.66058V1.66515L21.6293 1.62461Z" fill="#E6123D"/>
            <path d="M71.3663 5.22941C71.3309 3.87346 70.4667 2.99392 69.1573 2.99392H66.3158L66.2772 2.99601C66.1139 3.01401 66 3.14642 66 3.32573V4.32117L66.002 4.36167C66.0192 4.53332 66.1452 4.65298 66.3158 4.65298H69.1573L69.2122 4.65418C69.6049 4.67181 69.7888 4.884 69.7888 5.3166V7.30747L69.7877 7.36509C69.7709 7.77766 69.569 7.9711 69.1573 7.9711H66.3158L66.2772 7.97319C66.1139 7.99118 66 8.12354 66 8.30291V9.29834L66.002 9.33886C66.0192 9.51056 66.1452 9.63016 66.3158 9.63016H69.1573L69.2403 9.62897C70.5305 9.59172 71.3674 8.68351 71.3674 7.30747V5.3166L71.3663 5.22941Z" fill="#E6123D"/>
            <path d="M13.7334 0C13.636 0 13.544 0.047491 13.4841 0.128687L11.4675 2.86551C11.4272 2.92024 11.4642 3 11.5299 3H11.8456C11.943 3 12.035 2.95251 12.0948 2.87132L14.1114 0.134495C14.1518 0.0797569 14.1148 0 14.0491 0H13.7334Z" fill="#E6123D"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M75.4737 6V8H74.8422C74.3189 8 73.8948 7.55229 73.8948 7V1.33333C73.8948 1.14924 73.7534 1 73.579 1H72.6316C72.4572 1 72.3158 1.14924 72.3158 1.33333V7C72.3158 8.47276 73.4469 9.66667 74.8422 9.66667H81.6316C82.2044 9.66667 82.7297 9.45207 83.1392 9.09489L83.4201 9.52308C83.479 9.61301 83.5761 9.66667 83.6797 9.66667H85.5669C86.2855 9.66667 86.9341 9.34994 87.3941 8.84151L87.8411 9.52308C87.9001 9.61301 87.9971 9.66667 88.1008 9.66667H89.9879C90.6121 9.66667 91.1834 9.42775 91.6242 9.03183L91.9464 9.52308C92.0054 9.61301 92.1024 9.66667 92.206 9.66667H93.4571C94.0839 9.66667 94.6575 9.42566 95.0991 9.02664L95.4247 9.52308C95.4837 9.61301 95.5807 9.66667 95.6843 9.66667H95.988C96.6462 9.66667 97.2455 9.40101 97.6951 8.96573L97.9633 9.49137C98.0184 9.59934 98.1251 9.66667 98.2413 9.66667H100.421C101.044 9.66667 101.607 9.39474 102.008 8.95722L102.38 9.52308C102.439 9.61301 102.536 9.66667 102.639 9.66667H104.526C105.922 9.66667 107.053 8.47276 107.053 7V5C107.053 4.81591 106.911 4.66667 106.737 4.66667H105.79C105.615 4.66667 105.474 4.81591 105.474 5V7C105.474 7.55229 105.05 8 104.526 8H102.54C102.6 7.78877 102.632 7.565 102.632 7.33334V5C102.632 4.81591 102.49 4.66667 102.316 4.66667H101.368C101.194 4.66667 101.053 4.81591 101.053 5V7.33334C101.053 7.70153 100.77 8 100.421 8H98.5264V5C98.5264 4.81591 98.385 4.66667 98.2106 4.66667H97.2512C97.0767 4.66667 96.9354 4.81591 96.9354 5V7C96.9354 7.55229 96.5112 8 95.988 8H95.7997C95.9182 7.69119 95.9834 7.35364 95.9834 7V5C95.9834 4.81591 95.842 4.66667 95.6676 4.66667H94.7202C94.5458 4.66667 94.4044 4.81591 94.4044 5V7C94.4044 7.55229 93.9803 8 93.4571 8H92.3306C92.449 7.69119 92.5142 7.35364 92.5142 7V5C92.5142 4.81591 92.3729 4.66667 92.1984 4.66667H91.2511C91.0767 4.66667 90.9353 4.81591 90.9353 5V7C90.9353 7.55229 90.5111 8 89.9879 8H87.9096C88.028 7.69119 88.0932 7.35364 88.0932 7V5C88.0932 4.81591 87.9518 4.66667 87.7774 4.66667H86.83C86.6556 4.66667 86.5142 4.81591 86.5142 5V7C86.5142 7.55229 86.0901 8 85.5669 8H83.8653C83.9526 7.73936 84.0001 7.45887 84.0001 7.16667C84.0001 5.78596 82.9397 4.66667 81.6316 4.66667L80.1884 4.66667C79.7516 3.8696 78.9352 3.33334 78.0001 3.33334C76.6048 3.33334 75.4737 4.52724 75.4737 6ZM78.0001 5C77.4768 5 77.0527 5.44772 77.0527 6V8H78.9474V6C78.9474 5.44772 78.5233 5 78.0001 5ZM80.5264 8V6.33334H81.6316C82.0677 6.33334 82.4211 6.70643 82.4211 7.16667C82.4211 7.62691 82.0677 8 81.6316 8H80.5264Z" fill="#E6123D"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M45.7895 7C45.7895 7.35364 45.7243 7.69119 45.6059 8H50.2092C51.1128 8 51.7879 7.2873 51.7879 6.33334V6C51.7879 5.04604 51.1128 4.33334 50.2092 4.33334H46.5783C46.2942 4.33334 46.2394 4.06452 46.4205 3.83334L49.0795 0.248221C49.2026 0.0910277 49.3858 0 49.579 0H50.7919C51.0359 0 51.1696 0.3 51.0141 0.498498L49.4199 2.66667H50.2092C52.0197 2.66667 53.3665 4.08855 53.3665 6V6.33334C53.3665 6.95036 53.2262 7.51637 52.9752 8H54.6195C55.1427 8 55.5668 7.55229 55.5668 7V5C55.5668 4.81591 55.7082 4.66667 55.8826 4.66667H56.83C57.0044 4.66667 57.1458 4.81591 57.1458 5V7C57.1458 7.35364 57.0806 7.69119 56.9622 8H58.0886C58.6118 8 59.036 7.55229 59.036 7V5C59.036 4.81591 59.1774 4.66667 59.3518 4.66667H60.2991C60.4735 4.66667 60.6149 4.81591 60.6149 5V7C60.6149 7.35364 60.5497 7.69119 60.4313 8H60.6195C61.1428 8 61.5669 7.55229 61.5669 7V5C61.5669 4.81591 61.7083 4.66667 61.8827 4.66667H62.8301C63.0045 4.66667 63.1459 4.81591 63.1459 5V7C63.1459 8.47276 62.0148 9.66667 60.6195 9.66667H60.3159C60.2122 9.66667 60.1152 9.61301 60.0562 9.52308L59.7306 9.02664C59.289 9.42566 58.7155 9.66667 58.0886 9.66667H56.8376C56.7339 9.66667 56.6369 9.61301 56.5779 9.52308L56.2557 9.03183C55.8149 9.42775 55.2436 9.66667 54.6195 9.66667H52.7323C52.6287 9.66667 52.5316 9.61301 52.4727 9.52308L52.1396 9.01528C51.6143 9.42819 50.9507 9.66667 50.2092 9.66667H38.5218C38.4181 9.66667 38.3211 9.61301 38.2621 9.52308L37.9399 9.03181C37.4991 9.42774 36.9278 9.66667 36.3036 9.66667H30.0001C28.6048 9.66667 27.4738 8.47276 27.4738 7V5C27.4738 4.81591 27.6151 4.66667 27.7895 4.66667H28.7369C28.9113 4.66667 29.0527 4.81591 29.0527 5V7C29.0527 7.55229 29.4769 8 30.0001 8H36.3036C36.8269 8 37.251 7.55229 37.251 7V5C37.251 4.81591 37.3924 4.66667 37.5668 4.66667H38.5142C38.6886 4.66667 38.83 4.81591 38.83 5V7C38.83 7.35364 38.7647 7.69119 38.6463 8H40.9205C40.8021 7.69119 40.7369 7.35364 40.7369 7V6C40.7369 4.52724 41.868 3.33334 43.2632 3.33334C44.6584 3.33334 45.7895 4.52724 45.7895 6V7ZM44.2106 6V7C44.2106 7.55229 43.7864 8 43.2632 8C42.74 8 42.3158 7.55229 42.3158 7V6C42.3158 5.44772 42.74 5 43.2632 5C43.7864 5 44.2106 5.44772 44.2106 6Z" fill="#E6123D"/>
            <path d="M18.9454 6.33334C18.9454 6.95036 18.8051 7.51637 18.5541 8H21.1458C21.669 8 22.0931 7.55229 22.0931 7V5C22.0931 4.81591 22.2345 4.66667 22.4089 4.66667H23.3563C23.5307 4.66667 23.6721 4.81591 23.6721 5V7C23.6721 8.47276 22.541 9.66667 21.1458 9.66667H18.9428C18.8392 9.66667 18.7422 9.61301 18.6832 9.52308L18.1091 8.64779C17.5427 9.28358 16.7279 9.66667 15.7882 9.66667H10.3384L9.85431 9.014C9.41088 9.42057 8.83187 9.66667 8.1984 9.66667H5.36386C5.26023 9.66667 5.1632 9.61301 5.10422 9.52308L4.75745 8.99435V9C4.75745 10.9115 3.41059 12.3333 1.60015 12.3333H1.27757C1.08338 12.3333 0.899977 12.239 0.780267 12.0776L0.104618 11.1667C-0.0764254 10.9355 -0.0216732 10.6667 0.262483 10.6667H1.60015C2.50374 10.6667 3.1788 9.95397 3.1788 9L3.1785 5C3.1785 4.81591 3.31988 4.66667 3.49429 4.66667H4.44166C4.61606 4.66667 4.75745 4.81591 4.75745 5V8H8.1984C8.72162 8 9.14577 7.55229 9.14577 7V5C9.14577 4.81591 9.28715 4.66667 9.46156 4.66667H10.4089C10.5833 4.66667 10.7247 4.81591 10.7247 5V7C10.7247 7.35364 10.6595 7.69119 10.5411 8H15.7882C16.6917 8 17.3668 7.2873 17.3668 6.33334V6C17.3668 5.04604 16.6917 4.33334 15.7882 4.33334H12.1573C11.8731 4.33334 11.8184 4.06452 11.9994 3.83334L14.6584 0.248221C14.7816 0.0910277 14.9648 0 15.1579 0H16.3708C16.6149 0 16.7486 0.3 16.5931 0.498498L14.9988 2.66667H15.7882C17.5986 2.66667 18.9454 4.08855 18.9454 6V6.33334Z" fill="#E6123D"/>
            <path d="M24.6316 1.33333C24.6316 1.14924 24.773 1 24.9474 1H25.8948C26.0692 1 26.2106 1.14924 26.2106 1.33333V9.33334C26.2106 9.51743 26.0692 9.66667 25.8948 9.66667H24.9474C24.773 9.66667 24.6316 9.51743 24.6316 9.33334V1.33333Z" fill="#E6123D"/>
            </svg>
          <div class="image-box mb-6 ">
            <div>
              <img class="hover:scale-105 transition rounded-3xl w-full mx-auto" src="./assets/image/products/1.webp" alt="" />
            </div>
          </div>
          <div class="space-y-2 text-right">
            <div class="flex justify-end mt-1 mb-1 text-sm text-zinc-800">
              <div>1.100.000</div>
              <div>تومان</div>
            </div>
            <div class="flex justify-end text-xs opacity-65">
              <div class="line-through">1.350.000</div>
              <div class="line-through">تومان</div>
            </div>
          </div>
        </a>
        <a href="" class="card swiper-slide my-2 p-2 md:p-3 bg-white rounded-xl">
          <svg class="mt-2 mb-3" xmlns="http://www.w3.org/2000/svg" width="108" height="13" viewBox="0 0 108 13" fill="none">
            <path d="M47.9052 0.128687C47.965 0.047491 48.057 0 48.1545 0H48.4702C48.5359 0 48.5729 0.0797569 48.5325 0.134495L46.5159 2.87132C46.4561 2.95251 46.3641 3 46.2666 3H45.9509C45.8852 3 45.8483 2.92024 45.8886 2.86551L47.9052 0.128687Z" fill="#E6123D"/>
            <path d="M43.7366 0.333334C43.9073 0.333334 44.0332 0.45282 44.0503 0.624605L44.0523 0.665145V1.66058C44.0523 1.84008 43.9386 1.97233 43.7752 1.9903L43.7366 1.99239H42.6316C42.4608 1.99239 42.3349 1.87296 42.3178 1.70113L42.3158 1.66058V0.665145C42.3158 0.485712 42.4295 0.353409 42.593 0.335424L42.6316 0.333334H43.7366Z" fill="#E6123D"/>
            <path d="M58.1319 2.71664C57.9554 2.71664 57.8101 2.57622 57.7915 2.39607L57.7895 2.35689L57.7896 0.693083C57.7896 0.507632 57.9231 0.35498 58.0946 0.335451L58.1319 0.333341H59.0911C59.2677 0.333341 59.413 0.473628 59.4316 0.653882L59.4336 0.693083L59.4339 1.16267L60.537 1.16259C60.7135 1.16259 60.8588 1.30288 60.8774 1.48314L60.8794 1.52234V2.35689C60.8794 2.54221 60.7459 2.69498 60.5744 2.71452L60.537 2.71664H58.1319Z" fill="#E6123D"/>
            <path d="M105.757 10.6167C105.934 10.6167 106.079 10.7571 106.098 10.9373L106.1 10.9764L106.099 12.6403C106.099 12.8257 105.966 12.9784 105.794 12.9979L105.757 13H104.798C104.621 13 104.476 12.8597 104.457 12.6795L104.455 12.6403L104.455 12.1707L103.352 12.1707C103.175 12.1707 103.03 12.0305 103.012 11.8502L103.01 11.811V10.9764C103.01 10.7911 103.143 10.6384 103.315 10.6188L103.352 10.6167H105.757Z" fill="#E6123D"/>
            <path d="M93.4757 2.7294C93.4943 2.90956 93.6396 3.04997 93.8161 3.04997H96.2213L96.2586 3.04786C96.4301 3.02831 96.5637 2.87555 96.5637 2.69023V1.85567L96.5616 1.81647C96.5431 1.63622 96.3978 1.49593 96.2213 1.49593L95.1182 1.49601L95.1179 1.02642L95.1159 0.987215C95.0973 0.806962 94.952 0.666674 94.7754 0.666674H93.8162L93.7788 0.668785C93.6073 0.688314 93.4738 0.840965 93.4738 1.02642L93.4737 2.69023L93.4757 2.7294Z" fill="#E6123D"/>
            <path d="M34.4205 3C34.5913 3 34.7172 3.11949 34.7343 3.29127L34.7363 3.33181V4.32725C34.7363 4.50674 34.6226 4.63899 34.4591 4.65697L34.4205 4.65906H31.8947C31.7239 4.65906 31.5981 4.53963 31.581 4.3678L31.579 4.32725V3.33181C31.579 3.15238 31.6926 3.02008 31.8561 3.00209L31.8947 3H34.4205Z" fill="#E6123D"/>
            <path d="M101.366 10.9168C101.349 10.7451 101.223 10.6256 101.052 10.6256H98.5263L98.4877 10.6277C98.3242 10.6457 98.2106 10.778 98.2106 10.9574V11.9528L98.2126 11.9934C98.2297 12.1652 98.3555 12.2846 98.5263 12.2846H101.052L101.091 12.2825C101.254 12.2646 101.368 12.1323 101.368 11.9528V10.9574L101.366 10.9168Z" fill="#E6123D"/>
            <path d="M9.15737 10.6256C9.32816 10.6256 9.454 10.7451 9.47111 10.9168L9.4731 10.9574V11.9528C9.4731 12.1323 9.35946 12.2646 9.19596 12.2825L9.15737 12.2846H6.63154C6.46074 12.2846 6.3349 12.1652 6.3178 11.9934L6.31581 11.9528V10.9574C6.31581 10.778 6.42945 10.6457 6.59295 10.6277L6.63154 10.6256H9.15737Z" fill="#E6123D"/>
            <path d="M86.3662 1.62461C86.349 1.45282 86.2232 1.33333 86.0524 1.33333H84.9474L84.9088 1.33542C84.7453 1.35341 84.6316 1.48571 84.6316 1.66515V2.66058L84.6336 2.70113C84.6507 2.87296 84.7766 2.99239 84.9474 2.99239H86.0524L86.091 2.9903C86.2545 2.97233 86.3681 2.84008 86.3681 2.66058V1.66515L86.3662 1.62461Z" fill="#E6123D"/>
            <path d="M4.42113 1.33333C4.59187 1.33333 4.71776 1.45282 4.73487 1.62461L4.73686 1.66515V2.66058C4.73686 2.84008 4.62317 2.97233 4.45971 2.9903L4.42113 2.99239H3.47364C3.30291 2.99239 3.17701 2.87296 3.1599 2.70113L3.15791 2.66058V1.66515C3.15791 1.48571 3.27161 1.35341 3.43507 1.33542L3.47364 1.33333H4.42113Z" fill="#E6123D"/>
            <path d="M21.6293 1.62461C21.6122 1.45282 21.4863 1.33333 21.3155 1.33333H20.2105L20.1719 1.33542C20.0085 1.35341 19.8948 1.48571 19.8948 1.66515V2.66058L19.8968 2.70113C19.9139 2.87296 20.0398 2.99239 20.2105 2.99239H21.3155L21.3541 2.9903C21.5176 2.97233 21.6313 2.84008 21.6313 2.66058V1.66515L21.6293 1.62461Z" fill="#E6123D"/>
            <path d="M71.3663 5.22941C71.3309 3.87346 70.4667 2.99392 69.1573 2.99392H66.3158L66.2772 2.99601C66.1139 3.01401 66 3.14642 66 3.32573V4.32117L66.002 4.36167C66.0192 4.53332 66.1452 4.65298 66.3158 4.65298H69.1573L69.2122 4.65418C69.6049 4.67181 69.7888 4.884 69.7888 5.3166V7.30747L69.7877 7.36509C69.7709 7.77766 69.569 7.9711 69.1573 7.9711H66.3158L66.2772 7.97319C66.1139 7.99118 66 8.12354 66 8.30291V9.29834L66.002 9.33886C66.0192 9.51056 66.1452 9.63016 66.3158 9.63016H69.1573L69.2403 9.62897C70.5305 9.59172 71.3674 8.68351 71.3674 7.30747V5.3166L71.3663 5.22941Z" fill="#E6123D"/>
            <path d="M13.7334 0C13.636 0 13.544 0.047491 13.4841 0.128687L11.4675 2.86551C11.4272 2.92024 11.4642 3 11.5299 3H11.8456C11.943 3 12.035 2.95251 12.0948 2.87132L14.1114 0.134495C14.1518 0.0797569 14.1148 0 14.0491 0H13.7334Z" fill="#E6123D"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M75.4737 6V8H74.8422C74.3189 8 73.8948 7.55229 73.8948 7V1.33333C73.8948 1.14924 73.7534 1 73.579 1H72.6316C72.4572 1 72.3158 1.14924 72.3158 1.33333V7C72.3158 8.47276 73.4469 9.66667 74.8422 9.66667H81.6316C82.2044 9.66667 82.7297 9.45207 83.1392 9.09489L83.4201 9.52308C83.479 9.61301 83.5761 9.66667 83.6797 9.66667H85.5669C86.2855 9.66667 86.9341 9.34994 87.3941 8.84151L87.8411 9.52308C87.9001 9.61301 87.9971 9.66667 88.1008 9.66667H89.9879C90.6121 9.66667 91.1834 9.42775 91.6242 9.03183L91.9464 9.52308C92.0054 9.61301 92.1024 9.66667 92.206 9.66667H93.4571C94.0839 9.66667 94.6575 9.42566 95.0991 9.02664L95.4247 9.52308C95.4837 9.61301 95.5807 9.66667 95.6843 9.66667H95.988C96.6462 9.66667 97.2455 9.40101 97.6951 8.96573L97.9633 9.49137C98.0184 9.59934 98.1251 9.66667 98.2413 9.66667H100.421C101.044 9.66667 101.607 9.39474 102.008 8.95722L102.38 9.52308C102.439 9.61301 102.536 9.66667 102.639 9.66667H104.526C105.922 9.66667 107.053 8.47276 107.053 7V5C107.053 4.81591 106.911 4.66667 106.737 4.66667H105.79C105.615 4.66667 105.474 4.81591 105.474 5V7C105.474 7.55229 105.05 8 104.526 8H102.54C102.6 7.78877 102.632 7.565 102.632 7.33334V5C102.632 4.81591 102.49 4.66667 102.316 4.66667H101.368C101.194 4.66667 101.053 4.81591 101.053 5V7.33334C101.053 7.70153 100.77 8 100.421 8H98.5264V5C98.5264 4.81591 98.385 4.66667 98.2106 4.66667H97.2512C97.0767 4.66667 96.9354 4.81591 96.9354 5V7C96.9354 7.55229 96.5112 8 95.988 8H95.7997C95.9182 7.69119 95.9834 7.35364 95.9834 7V5C95.9834 4.81591 95.842 4.66667 95.6676 4.66667H94.7202C94.5458 4.66667 94.4044 4.81591 94.4044 5V7C94.4044 7.55229 93.9803 8 93.4571 8H92.3306C92.449 7.69119 92.5142 7.35364 92.5142 7V5C92.5142 4.81591 92.3729 4.66667 92.1984 4.66667H91.2511C91.0767 4.66667 90.9353 4.81591 90.9353 5V7C90.9353 7.55229 90.5111 8 89.9879 8H87.9096C88.028 7.69119 88.0932 7.35364 88.0932 7V5C88.0932 4.81591 87.9518 4.66667 87.7774 4.66667H86.83C86.6556 4.66667 86.5142 4.81591 86.5142 5V7C86.5142 7.55229 86.0901 8 85.5669 8H83.8653C83.9526 7.73936 84.0001 7.45887 84.0001 7.16667C84.0001 5.78596 82.9397 4.66667 81.6316 4.66667L80.1884 4.66667C79.7516 3.8696 78.9352 3.33334 78.0001 3.33334C76.6048 3.33334 75.4737 4.52724 75.4737 6ZM78.0001 5C77.4768 5 77.0527 5.44772 77.0527 6V8H78.9474V6C78.9474 5.44772 78.5233 5 78.0001 5ZM80.5264 8V6.33334H81.6316C82.0677 6.33334 82.4211 6.70643 82.4211 7.16667C82.4211 7.62691 82.0677 8 81.6316 8H80.5264Z" fill="#E6123D"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M45.7895 7C45.7895 7.35364 45.7243 7.69119 45.6059 8H50.2092C51.1128 8 51.7879 7.2873 51.7879 6.33334V6C51.7879 5.04604 51.1128 4.33334 50.2092 4.33334H46.5783C46.2942 4.33334 46.2394 4.06452 46.4205 3.83334L49.0795 0.248221C49.2026 0.0910277 49.3858 0 49.579 0H50.7919C51.0359 0 51.1696 0.3 51.0141 0.498498L49.4199 2.66667H50.2092C52.0197 2.66667 53.3665 4.08855 53.3665 6V6.33334C53.3665 6.95036 53.2262 7.51637 52.9752 8H54.6195C55.1427 8 55.5668 7.55229 55.5668 7V5C55.5668 4.81591 55.7082 4.66667 55.8826 4.66667H56.83C57.0044 4.66667 57.1458 4.81591 57.1458 5V7C57.1458 7.35364 57.0806 7.69119 56.9622 8H58.0886C58.6118 8 59.036 7.55229 59.036 7V5C59.036 4.81591 59.1774 4.66667 59.3518 4.66667H60.2991C60.4735 4.66667 60.6149 4.81591 60.6149 5V7C60.6149 7.35364 60.5497 7.69119 60.4313 8H60.6195C61.1428 8 61.5669 7.55229 61.5669 7V5C61.5669 4.81591 61.7083 4.66667 61.8827 4.66667H62.8301C63.0045 4.66667 63.1459 4.81591 63.1459 5V7C63.1459 8.47276 62.0148 9.66667 60.6195 9.66667H60.3159C60.2122 9.66667 60.1152 9.61301 60.0562 9.52308L59.7306 9.02664C59.289 9.42566 58.7155 9.66667 58.0886 9.66667H56.8376C56.7339 9.66667 56.6369 9.61301 56.5779 9.52308L56.2557 9.03183C55.8149 9.42775 55.2436 9.66667 54.6195 9.66667H52.7323C52.6287 9.66667 52.5316 9.61301 52.4727 9.52308L52.1396 9.01528C51.6143 9.42819 50.9507 9.66667 50.2092 9.66667H38.5218C38.4181 9.66667 38.3211 9.61301 38.2621 9.52308L37.9399 9.03181C37.4991 9.42774 36.9278 9.66667 36.3036 9.66667H30.0001C28.6048 9.66667 27.4738 8.47276 27.4738 7V5C27.4738 4.81591 27.6151 4.66667 27.7895 4.66667H28.7369C28.9113 4.66667 29.0527 4.81591 29.0527 5V7C29.0527 7.55229 29.4769 8 30.0001 8H36.3036C36.8269 8 37.251 7.55229 37.251 7V5C37.251 4.81591 37.3924 4.66667 37.5668 4.66667H38.5142C38.6886 4.66667 38.83 4.81591 38.83 5V7C38.83 7.35364 38.7647 7.69119 38.6463 8H40.9205C40.8021 7.69119 40.7369 7.35364 40.7369 7V6C40.7369 4.52724 41.868 3.33334 43.2632 3.33334C44.6584 3.33334 45.7895 4.52724 45.7895 6V7ZM44.2106 6V7C44.2106 7.55229 43.7864 8 43.2632 8C42.74 8 42.3158 7.55229 42.3158 7V6C42.3158 5.44772 42.74 5 43.2632 5C43.7864 5 44.2106 5.44772 44.2106 6Z" fill="#E6123D"/>
            <path d="M18.9454 6.33334C18.9454 6.95036 18.8051 7.51637 18.5541 8H21.1458C21.669 8 22.0931 7.55229 22.0931 7V5C22.0931 4.81591 22.2345 4.66667 22.4089 4.66667H23.3563C23.5307 4.66667 23.6721 4.81591 23.6721 5V7C23.6721 8.47276 22.541 9.66667 21.1458 9.66667H18.9428C18.8392 9.66667 18.7422 9.61301 18.6832 9.52308L18.1091 8.64779C17.5427 9.28358 16.7279 9.66667 15.7882 9.66667H10.3384L9.85431 9.014C9.41088 9.42057 8.83187 9.66667 8.1984 9.66667H5.36386C5.26023 9.66667 5.1632 9.61301 5.10422 9.52308L4.75745 8.99435V9C4.75745 10.9115 3.41059 12.3333 1.60015 12.3333H1.27757C1.08338 12.3333 0.899977 12.239 0.780267 12.0776L0.104618 11.1667C-0.0764254 10.9355 -0.0216732 10.6667 0.262483 10.6667H1.60015C2.50374 10.6667 3.1788 9.95397 3.1788 9L3.1785 5C3.1785 4.81591 3.31988 4.66667 3.49429 4.66667H4.44166C4.61606 4.66667 4.75745 4.81591 4.75745 5V8H8.1984C8.72162 8 9.14577 7.55229 9.14577 7V5C9.14577 4.81591 9.28715 4.66667 9.46156 4.66667H10.4089C10.5833 4.66667 10.7247 4.81591 10.7247 5V7C10.7247 7.35364 10.6595 7.69119 10.5411 8H15.7882C16.6917 8 17.3668 7.2873 17.3668 6.33334V6C17.3668 5.04604 16.6917 4.33334 15.7882 4.33334H12.1573C11.8731 4.33334 11.8184 4.06452 11.9994 3.83334L14.6584 0.248221C14.7816 0.0910277 14.9648 0 15.1579 0H16.3708C16.6149 0 16.7486 0.3 16.5931 0.498498L14.9988 2.66667H15.7882C17.5986 2.66667 18.9454 4.08855 18.9454 6V6.33334Z" fill="#E6123D"/>
            <path d="M24.6316 1.33333C24.6316 1.14924 24.773 1 24.9474 1H25.8948C26.0692 1 26.2106 1.14924 26.2106 1.33333V9.33334C26.2106 9.51743 26.0692 9.66667 25.8948 9.66667H24.9474C24.773 9.66667 24.6316 9.51743 24.6316 9.33334V1.33333Z" fill="#E6123D"/>
            </svg>
          <div class="image-box mb-6 ">
            <div>
              <img class="hover:scale-105 transition rounded-3xl w-full mx-auto" src="./assets/image/products/2.webp" alt="" />
            </div>
          </div>
          <div class="space-y-2 text-right">
            <div class="flex justify-end mt-1 mb-1 text-sm text-zinc-800">
              <div>1.100.000</div>
              <div>تومان</div>
            </div>
            <div class="flex justify-end text-xs opacity-65">
              <div class="line-through">1.350.000</div>
              <div class="line-through">تومان</div>
            </div>
          </div>
        </a>
        <a href="" class="card swiper-slide my-2 p-2 md:p-3 bg-white rounded-xl">
          <svg class="mt-2 mb-3" xmlns="http://www.w3.org/2000/svg" width="108" height="13" viewBox="0 0 108 13" fill="none">
            <path d="M47.9052 0.128687C47.965 0.047491 48.057 0 48.1545 0H48.4702C48.5359 0 48.5729 0.0797569 48.5325 0.134495L46.5159 2.87132C46.4561 2.95251 46.3641 3 46.2666 3H45.9509C45.8852 3 45.8483 2.92024 45.8886 2.86551L47.9052 0.128687Z" fill="#E6123D"/>
            <path d="M43.7366 0.333334C43.9073 0.333334 44.0332 0.45282 44.0503 0.624605L44.0523 0.665145V1.66058C44.0523 1.84008 43.9386 1.97233 43.7752 1.9903L43.7366 1.99239H42.6316C42.4608 1.99239 42.3349 1.87296 42.3178 1.70113L42.3158 1.66058V0.665145C42.3158 0.485712 42.4295 0.353409 42.593 0.335424L42.6316 0.333334H43.7366Z" fill="#E6123D"/>
            <path d="M58.1319 2.71664C57.9554 2.71664 57.8101 2.57622 57.7915 2.39607L57.7895 2.35689L57.7896 0.693083C57.7896 0.507632 57.9231 0.35498 58.0946 0.335451L58.1319 0.333341H59.0911C59.2677 0.333341 59.413 0.473628 59.4316 0.653882L59.4336 0.693083L59.4339 1.16267L60.537 1.16259C60.7135 1.16259 60.8588 1.30288 60.8774 1.48314L60.8794 1.52234V2.35689C60.8794 2.54221 60.7459 2.69498 60.5744 2.71452L60.537 2.71664H58.1319Z" fill="#E6123D"/>
            <path d="M105.757 10.6167C105.934 10.6167 106.079 10.7571 106.098 10.9373L106.1 10.9764L106.099 12.6403C106.099 12.8257 105.966 12.9784 105.794 12.9979L105.757 13H104.798C104.621 13 104.476 12.8597 104.457 12.6795L104.455 12.6403L104.455 12.1707L103.352 12.1707C103.175 12.1707 103.03 12.0305 103.012 11.8502L103.01 11.811V10.9764C103.01 10.7911 103.143 10.6384 103.315 10.6188L103.352 10.6167H105.757Z" fill="#E6123D"/>
            <path d="M93.4757 2.7294C93.4943 2.90956 93.6396 3.04997 93.8161 3.04997H96.2213L96.2586 3.04786C96.4301 3.02831 96.5637 2.87555 96.5637 2.69023V1.85567L96.5616 1.81647C96.5431 1.63622 96.3978 1.49593 96.2213 1.49593L95.1182 1.49601L95.1179 1.02642L95.1159 0.987215C95.0973 0.806962 94.952 0.666674 94.7754 0.666674H93.8162L93.7788 0.668785C93.6073 0.688314 93.4738 0.840965 93.4738 1.02642L93.4737 2.69023L93.4757 2.7294Z" fill="#E6123D"/>
            <path d="M34.4205 3C34.5913 3 34.7172 3.11949 34.7343 3.29127L34.7363 3.33181V4.32725C34.7363 4.50674 34.6226 4.63899 34.4591 4.65697L34.4205 4.65906H31.8947C31.7239 4.65906 31.5981 4.53963 31.581 4.3678L31.579 4.32725V3.33181C31.579 3.15238 31.6926 3.02008 31.8561 3.00209L31.8947 3H34.4205Z" fill="#E6123D"/>
            <path d="M101.366 10.9168C101.349 10.7451 101.223 10.6256 101.052 10.6256H98.5263L98.4877 10.6277C98.3242 10.6457 98.2106 10.778 98.2106 10.9574V11.9528L98.2126 11.9934C98.2297 12.1652 98.3555 12.2846 98.5263 12.2846H101.052L101.091 12.2825C101.254 12.2646 101.368 12.1323 101.368 11.9528V10.9574L101.366 10.9168Z" fill="#E6123D"/>
            <path d="M9.15737 10.6256C9.32816 10.6256 9.454 10.7451 9.47111 10.9168L9.4731 10.9574V11.9528C9.4731 12.1323 9.35946 12.2646 9.19596 12.2825L9.15737 12.2846H6.63154C6.46074 12.2846 6.3349 12.1652 6.3178 11.9934L6.31581 11.9528V10.9574C6.31581 10.778 6.42945 10.6457 6.59295 10.6277L6.63154 10.6256H9.15737Z" fill="#E6123D"/>
            <path d="M86.3662 1.62461C86.349 1.45282 86.2232 1.33333 86.0524 1.33333H84.9474L84.9088 1.33542C84.7453 1.35341 84.6316 1.48571 84.6316 1.66515V2.66058L84.6336 2.70113C84.6507 2.87296 84.7766 2.99239 84.9474 2.99239H86.0524L86.091 2.9903C86.2545 2.97233 86.3681 2.84008 86.3681 2.66058V1.66515L86.3662 1.62461Z" fill="#E6123D"/>
            <path d="M4.42113 1.33333C4.59187 1.33333 4.71776 1.45282 4.73487 1.62461L4.73686 1.66515V2.66058C4.73686 2.84008 4.62317 2.97233 4.45971 2.9903L4.42113 2.99239H3.47364C3.30291 2.99239 3.17701 2.87296 3.1599 2.70113L3.15791 2.66058V1.66515C3.15791 1.48571 3.27161 1.35341 3.43507 1.33542L3.47364 1.33333H4.42113Z" fill="#E6123D"/>
            <path d="M21.6293 1.62461C21.6122 1.45282 21.4863 1.33333 21.3155 1.33333H20.2105L20.1719 1.33542C20.0085 1.35341 19.8948 1.48571 19.8948 1.66515V2.66058L19.8968 2.70113C19.9139 2.87296 20.0398 2.99239 20.2105 2.99239H21.3155L21.3541 2.9903C21.5176 2.97233 21.6313 2.84008 21.6313 2.66058V1.66515L21.6293 1.62461Z" fill="#E6123D"/>
            <path d="M71.3663 5.22941C71.3309 3.87346 70.4667 2.99392 69.1573 2.99392H66.3158L66.2772 2.99601C66.1139 3.01401 66 3.14642 66 3.32573V4.32117L66.002 4.36167C66.0192 4.53332 66.1452 4.65298 66.3158 4.65298H69.1573L69.2122 4.65418C69.6049 4.67181 69.7888 4.884 69.7888 5.3166V7.30747L69.7877 7.36509C69.7709 7.77766 69.569 7.9711 69.1573 7.9711H66.3158L66.2772 7.97319C66.1139 7.99118 66 8.12354 66 8.30291V9.29834L66.002 9.33886C66.0192 9.51056 66.1452 9.63016 66.3158 9.63016H69.1573L69.2403 9.62897C70.5305 9.59172 71.3674 8.68351 71.3674 7.30747V5.3166L71.3663 5.22941Z" fill="#E6123D"/>
            <path d="M13.7334 0C13.636 0 13.544 0.047491 13.4841 0.128687L11.4675 2.86551C11.4272 2.92024 11.4642 3 11.5299 3H11.8456C11.943 3 12.035 2.95251 12.0948 2.87132L14.1114 0.134495C14.1518 0.0797569 14.1148 0 14.0491 0H13.7334Z" fill="#E6123D"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M75.4737 6V8H74.8422C74.3189 8 73.8948 7.55229 73.8948 7V1.33333C73.8948 1.14924 73.7534 1 73.579 1H72.6316C72.4572 1 72.3158 1.14924 72.3158 1.33333V7C72.3158 8.47276 73.4469 9.66667 74.8422 9.66667H81.6316C82.2044 9.66667 82.7297 9.45207 83.1392 9.09489L83.4201 9.52308C83.479 9.61301 83.5761 9.66667 83.6797 9.66667H85.5669C86.2855 9.66667 86.9341 9.34994 87.3941 8.84151L87.8411 9.52308C87.9001 9.61301 87.9971 9.66667 88.1008 9.66667H89.9879C90.6121 9.66667 91.1834 9.42775 91.6242 9.03183L91.9464 9.52308C92.0054 9.61301 92.1024 9.66667 92.206 9.66667H93.4571C94.0839 9.66667 94.6575 9.42566 95.0991 9.02664L95.4247 9.52308C95.4837 9.61301 95.5807 9.66667 95.6843 9.66667H95.988C96.6462 9.66667 97.2455 9.40101 97.6951 8.96573L97.9633 9.49137C98.0184 9.59934 98.1251 9.66667 98.2413 9.66667H100.421C101.044 9.66667 101.607 9.39474 102.008 8.95722L102.38 9.52308C102.439 9.61301 102.536 9.66667 102.639 9.66667H104.526C105.922 9.66667 107.053 8.47276 107.053 7V5C107.053 4.81591 106.911 4.66667 106.737 4.66667H105.79C105.615 4.66667 105.474 4.81591 105.474 5V7C105.474 7.55229 105.05 8 104.526 8H102.54C102.6 7.78877 102.632 7.565 102.632 7.33334V5C102.632 4.81591 102.49 4.66667 102.316 4.66667H101.368C101.194 4.66667 101.053 4.81591 101.053 5V7.33334C101.053 7.70153 100.77 8 100.421 8H98.5264V5C98.5264 4.81591 98.385 4.66667 98.2106 4.66667H97.2512C97.0767 4.66667 96.9354 4.81591 96.9354 5V7C96.9354 7.55229 96.5112 8 95.988 8H95.7997C95.9182 7.69119 95.9834 7.35364 95.9834 7V5C95.9834 4.81591 95.842 4.66667 95.6676 4.66667H94.7202C94.5458 4.66667 94.4044 4.81591 94.4044 5V7C94.4044 7.55229 93.9803 8 93.4571 8H92.3306C92.449 7.69119 92.5142 7.35364 92.5142 7V5C92.5142 4.81591 92.3729 4.66667 92.1984 4.66667H91.2511C91.0767 4.66667 90.9353 4.81591 90.9353 5V7C90.9353 7.55229 90.5111 8 89.9879 8H87.9096C88.028 7.69119 88.0932 7.35364 88.0932 7V5C88.0932 4.81591 87.9518 4.66667 87.7774 4.66667H86.83C86.6556 4.66667 86.5142 4.81591 86.5142 5V7C86.5142 7.55229 86.0901 8 85.5669 8H83.8653C83.9526 7.73936 84.0001 7.45887 84.0001 7.16667C84.0001 5.78596 82.9397 4.66667 81.6316 4.66667L80.1884 4.66667C79.7516 3.8696 78.9352 3.33334 78.0001 3.33334C76.6048 3.33334 75.4737 4.52724 75.4737 6ZM78.0001 5C77.4768 5 77.0527 5.44772 77.0527 6V8H78.9474V6C78.9474 5.44772 78.5233 5 78.0001 5ZM80.5264 8V6.33334H81.6316C82.0677 6.33334 82.4211 6.70643 82.4211 7.16667C82.4211 7.62691 82.0677 8 81.6316 8H80.5264Z" fill="#E6123D"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M45.7895 7C45.7895 7.35364 45.7243 7.69119 45.6059 8H50.2092C51.1128 8 51.7879 7.2873 51.7879 6.33334V6C51.7879 5.04604 51.1128 4.33334 50.2092 4.33334H46.5783C46.2942 4.33334 46.2394 4.06452 46.4205 3.83334L49.0795 0.248221C49.2026 0.0910277 49.3858 0 49.579 0H50.7919C51.0359 0 51.1696 0.3 51.0141 0.498498L49.4199 2.66667H50.2092C52.0197 2.66667 53.3665 4.08855 53.3665 6V6.33334C53.3665 6.95036 53.2262 7.51637 52.9752 8H54.6195C55.1427 8 55.5668 7.55229 55.5668 7V5C55.5668 4.81591 55.7082 4.66667 55.8826 4.66667H56.83C57.0044 4.66667 57.1458 4.81591 57.1458 5V7C57.1458 7.35364 57.0806 7.69119 56.9622 8H58.0886C58.6118 8 59.036 7.55229 59.036 7V5C59.036 4.81591 59.1774 4.66667 59.3518 4.66667H60.2991C60.4735 4.66667 60.6149 4.81591 60.6149 5V7C60.6149 7.35364 60.5497 7.69119 60.4313 8H60.6195C61.1428 8 61.5669 7.55229 61.5669 7V5C61.5669 4.81591 61.7083 4.66667 61.8827 4.66667H62.8301C63.0045 4.66667 63.1459 4.81591 63.1459 5V7C63.1459 8.47276 62.0148 9.66667 60.6195 9.66667H60.3159C60.2122 9.66667 60.1152 9.61301 60.0562 9.52308L59.7306 9.02664C59.289 9.42566 58.7155 9.66667 58.0886 9.66667H56.8376C56.7339 9.66667 56.6369 9.61301 56.5779 9.52308L56.2557 9.03183C55.8149 9.42775 55.2436 9.66667 54.6195 9.66667H52.7323C52.6287 9.66667 52.5316 9.61301 52.4727 9.52308L52.1396 9.01528C51.6143 9.42819 50.9507 9.66667 50.2092 9.66667H38.5218C38.4181 9.66667 38.3211 9.61301 38.2621 9.52308L37.9399 9.03181C37.4991 9.42774 36.9278 9.66667 36.3036 9.66667H30.0001C28.6048 9.66667 27.4738 8.47276 27.4738 7V5C27.4738 4.81591 27.6151 4.66667 27.7895 4.66667H28.7369C28.9113 4.66667 29.0527 4.81591 29.0527 5V7C29.0527 7.55229 29.4769 8 30.0001 8H36.3036C36.8269 8 37.251 7.55229 37.251 7V5C37.251 4.81591 37.3924 4.66667 37.5668 4.66667H38.5142C38.6886 4.66667 38.83 4.81591 38.83 5V7C38.83 7.35364 38.7647 7.69119 38.6463 8H40.9205C40.8021 7.69119 40.7369 7.35364 40.7369 7V6C40.7369 4.52724 41.868 3.33334 43.2632 3.33334C44.6584 3.33334 45.7895 4.52724 45.7895 6V7ZM44.2106 6V7C44.2106 7.55229 43.7864 8 43.2632 8C42.74 8 42.3158 7.55229 42.3158 7V6C42.3158 5.44772 42.74 5 43.2632 5C43.7864 5 44.2106 5.44772 44.2106 6Z" fill="#E6123D"/>
            <path d="M18.9454 6.33334C18.9454 6.95036 18.8051 7.51637 18.5541 8H21.1458C21.669 8 22.0931 7.55229 22.0931 7V5C22.0931 4.81591 22.2345 4.66667 22.4089 4.66667H23.3563C23.5307 4.66667 23.6721 4.81591 23.6721 5V7C23.6721 8.47276 22.541 9.66667 21.1458 9.66667H18.9428C18.8392 9.66667 18.7422 9.61301 18.6832 9.52308L18.1091 8.64779C17.5427 9.28358 16.7279 9.66667 15.7882 9.66667H10.3384L9.85431 9.014C9.41088 9.42057 8.83187 9.66667 8.1984 9.66667H5.36386C5.26023 9.66667 5.1632 9.61301 5.10422 9.52308L4.75745 8.99435V9C4.75745 10.9115 3.41059 12.3333 1.60015 12.3333H1.27757C1.08338 12.3333 0.899977 12.239 0.780267 12.0776L0.104618 11.1667C-0.0764254 10.9355 -0.0216732 10.6667 0.262483 10.6667H1.60015C2.50374 10.6667 3.1788 9.95397 3.1788 9L3.1785 5C3.1785 4.81591 3.31988 4.66667 3.49429 4.66667H4.44166C4.61606 4.66667 4.75745 4.81591 4.75745 5V8H8.1984C8.72162 8 9.14577 7.55229 9.14577 7V5C9.14577 4.81591 9.28715 4.66667 9.46156 4.66667H10.4089C10.5833 4.66667 10.7247 4.81591 10.7247 5V7C10.7247 7.35364 10.6595 7.69119 10.5411 8H15.7882C16.6917 8 17.3668 7.2873 17.3668 6.33334V6C17.3668 5.04604 16.6917 4.33334 15.7882 4.33334H12.1573C11.8731 4.33334 11.8184 4.06452 11.9994 3.83334L14.6584 0.248221C14.7816 0.0910277 14.9648 0 15.1579 0H16.3708C16.6149 0 16.7486 0.3 16.5931 0.498498L14.9988 2.66667H15.7882C17.5986 2.66667 18.9454 4.08855 18.9454 6V6.33334Z" fill="#E6123D"/>
            <path d="M24.6316 1.33333C24.6316 1.14924 24.773 1 24.9474 1H25.8948C26.0692 1 26.2106 1.14924 26.2106 1.33333V9.33334C26.2106 9.51743 26.0692 9.66667 25.8948 9.66667H24.9474C24.773 9.66667 24.6316 9.51743 24.6316 9.33334V1.33333Z" fill="#E6123D"/>
            </svg>
          <div class="image-box mb-6 ">
            <div>
              <img class="hover:scale-105 transition rounded-3xl w-full mx-auto" src="./assets/image/products/3.webp" alt="" />
            </div>
          </div>
          <div class="space-y-2 text-right">
            <div class="flex justify-end mt-1 mb-1 text-sm text-zinc-800">
              <div>1.100.000</div>
              <div>تومان</div>
            </div>
            <div class="flex justify-end text-xs opacity-65">
              <div class="line-through">1.350.000</div>
              <div class="line-through">تومان</div>
            </div>
          </div>
        </a>
        <a href="" class="card swiper-slide my-2 p-2 md:p-3 bg-white rounded-xl">
          <svg class="mt-2 mb-3" xmlns="http://www.w3.org/2000/svg" width="108" height="13" viewBox="0 0 108 13" fill="none">
            <path d="M47.9052 0.128687C47.965 0.047491 48.057 0 48.1545 0H48.4702C48.5359 0 48.5729 0.0797569 48.5325 0.134495L46.5159 2.87132C46.4561 2.95251 46.3641 3 46.2666 3H45.9509C45.8852 3 45.8483 2.92024 45.8886 2.86551L47.9052 0.128687Z" fill="#E6123D"/>
            <path d="M43.7366 0.333334C43.9073 0.333334 44.0332 0.45282 44.0503 0.624605L44.0523 0.665145V1.66058C44.0523 1.84008 43.9386 1.97233 43.7752 1.9903L43.7366 1.99239H42.6316C42.4608 1.99239 42.3349 1.87296 42.3178 1.70113L42.3158 1.66058V0.665145C42.3158 0.485712 42.4295 0.353409 42.593 0.335424L42.6316 0.333334H43.7366Z" fill="#E6123D"/>
            <path d="M58.1319 2.71664C57.9554 2.71664 57.8101 2.57622 57.7915 2.39607L57.7895 2.35689L57.7896 0.693083C57.7896 0.507632 57.9231 0.35498 58.0946 0.335451L58.1319 0.333341H59.0911C59.2677 0.333341 59.413 0.473628 59.4316 0.653882L59.4336 0.693083L59.4339 1.16267L60.537 1.16259C60.7135 1.16259 60.8588 1.30288 60.8774 1.48314L60.8794 1.52234V2.35689C60.8794 2.54221 60.7459 2.69498 60.5744 2.71452L60.537 2.71664H58.1319Z" fill="#E6123D"/>
            <path d="M105.757 10.6167C105.934 10.6167 106.079 10.7571 106.098 10.9373L106.1 10.9764L106.099 12.6403C106.099 12.8257 105.966 12.9784 105.794 12.9979L105.757 13H104.798C104.621 13 104.476 12.8597 104.457 12.6795L104.455 12.6403L104.455 12.1707L103.352 12.1707C103.175 12.1707 103.03 12.0305 103.012 11.8502L103.01 11.811V10.9764C103.01 10.7911 103.143 10.6384 103.315 10.6188L103.352 10.6167H105.757Z" fill="#E6123D"/>
            <path d="M93.4757 2.7294C93.4943 2.90956 93.6396 3.04997 93.8161 3.04997H96.2213L96.2586 3.04786C96.4301 3.02831 96.5637 2.87555 96.5637 2.69023V1.85567L96.5616 1.81647C96.5431 1.63622 96.3978 1.49593 96.2213 1.49593L95.1182 1.49601L95.1179 1.02642L95.1159 0.987215C95.0973 0.806962 94.952 0.666674 94.7754 0.666674H93.8162L93.7788 0.668785C93.6073 0.688314 93.4738 0.840965 93.4738 1.02642L93.4737 2.69023L93.4757 2.7294Z" fill="#E6123D"/>
            <path d="M34.4205 3C34.5913 3 34.7172 3.11949 34.7343 3.29127L34.7363 3.33181V4.32725C34.7363 4.50674 34.6226 4.63899 34.4591 4.65697L34.4205 4.65906H31.8947C31.7239 4.65906 31.5981 4.53963 31.581 4.3678L31.579 4.32725V3.33181C31.579 3.15238 31.6926 3.02008 31.8561 3.00209L31.8947 3H34.4205Z" fill="#E6123D"/>
            <path d="M101.366 10.9168C101.349 10.7451 101.223 10.6256 101.052 10.6256H98.5263L98.4877 10.6277C98.3242 10.6457 98.2106 10.778 98.2106 10.9574V11.9528L98.2126 11.9934C98.2297 12.1652 98.3555 12.2846 98.5263 12.2846H101.052L101.091 12.2825C101.254 12.2646 101.368 12.1323 101.368 11.9528V10.9574L101.366 10.9168Z" fill="#E6123D"/>
            <path d="M9.15737 10.6256C9.32816 10.6256 9.454 10.7451 9.47111 10.9168L9.4731 10.9574V11.9528C9.4731 12.1323 9.35946 12.2646 9.19596 12.2825L9.15737 12.2846H6.63154C6.46074 12.2846 6.3349 12.1652 6.3178 11.9934L6.31581 11.9528V10.9574C6.31581 10.778 6.42945 10.6457 6.59295 10.6277L6.63154 10.6256H9.15737Z" fill="#E6123D"/>
            <path d="M86.3662 1.62461C86.349 1.45282 86.2232 1.33333 86.0524 1.33333H84.9474L84.9088 1.33542C84.7453 1.35341 84.6316 1.48571 84.6316 1.66515V2.66058L84.6336 2.70113C84.6507 2.87296 84.7766 2.99239 84.9474 2.99239H86.0524L86.091 2.9903C86.2545 2.97233 86.3681 2.84008 86.3681 2.66058V1.66515L86.3662 1.62461Z" fill="#E6123D"/>
            <path d="M4.42113 1.33333C4.59187 1.33333 4.71776 1.45282 4.73487 1.62461L4.73686 1.66515V2.66058C4.73686 2.84008 4.62317 2.97233 4.45971 2.9903L4.42113 2.99239H3.47364C3.30291 2.99239 3.17701 2.87296 3.1599 2.70113L3.15791 2.66058V1.66515C3.15791 1.48571 3.27161 1.35341 3.43507 1.33542L3.47364 1.33333H4.42113Z" fill="#E6123D"/>
            <path d="M21.6293 1.62461C21.6122 1.45282 21.4863 1.33333 21.3155 1.33333H20.2105L20.1719 1.33542C20.0085 1.35341 19.8948 1.48571 19.8948 1.66515V2.66058L19.8968 2.70113C19.9139 2.87296 20.0398 2.99239 20.2105 2.99239H21.3155L21.3541 2.9903C21.5176 2.97233 21.6313 2.84008 21.6313 2.66058V1.66515L21.6293 1.62461Z" fill="#E6123D"/>
            <path d="M71.3663 5.22941C71.3309 3.87346 70.4667 2.99392 69.1573 2.99392H66.3158L66.2772 2.99601C66.1139 3.01401 66 3.14642 66 3.32573V4.32117L66.002 4.36167C66.0192 4.53332 66.1452 4.65298 66.3158 4.65298H69.1573L69.2122 4.65418C69.6049 4.67181 69.7888 4.884 69.7888 5.3166V7.30747L69.7877 7.36509C69.7709 7.77766 69.569 7.9711 69.1573 7.9711H66.3158L66.2772 7.97319C66.1139 7.99118 66 8.12354 66 8.30291V9.29834L66.002 9.33886C66.0192 9.51056 66.1452 9.63016 66.3158 9.63016H69.1573L69.2403 9.62897C70.5305 9.59172 71.3674 8.68351 71.3674 7.30747V5.3166L71.3663 5.22941Z" fill="#E6123D"/>
            <path d="M13.7334 0C13.636 0 13.544 0.047491 13.4841 0.128687L11.4675 2.86551C11.4272 2.92024 11.4642 3 11.5299 3H11.8456C11.943 3 12.035 2.95251 12.0948 2.87132L14.1114 0.134495C14.1518 0.0797569 14.1148 0 14.0491 0H13.7334Z" fill="#E6123D"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M75.4737 6V8H74.8422C74.3189 8 73.8948 7.55229 73.8948 7V1.33333C73.8948 1.14924 73.7534 1 73.579 1H72.6316C72.4572 1 72.3158 1.14924 72.3158 1.33333V7C72.3158 8.47276 73.4469 9.66667 74.8422 9.66667H81.6316C82.2044 9.66667 82.7297 9.45207 83.1392 9.09489L83.4201 9.52308C83.479 9.61301 83.5761 9.66667 83.6797 9.66667H85.5669C86.2855 9.66667 86.9341 9.34994 87.3941 8.84151L87.8411 9.52308C87.9001 9.61301 87.9971 9.66667 88.1008 9.66667H89.9879C90.6121 9.66667 91.1834 9.42775 91.6242 9.03183L91.9464 9.52308C92.0054 9.61301 92.1024 9.66667 92.206 9.66667H93.4571C94.0839 9.66667 94.6575 9.42566 95.0991 9.02664L95.4247 9.52308C95.4837 9.61301 95.5807 9.66667 95.6843 9.66667H95.988C96.6462 9.66667 97.2455 9.40101 97.6951 8.96573L97.9633 9.49137C98.0184 9.59934 98.1251 9.66667 98.2413 9.66667H100.421C101.044 9.66667 101.607 9.39474 102.008 8.95722L102.38 9.52308C102.439 9.61301 102.536 9.66667 102.639 9.66667H104.526C105.922 9.66667 107.053 8.47276 107.053 7V5C107.053 4.81591 106.911 4.66667 106.737 4.66667H105.79C105.615 4.66667 105.474 4.81591 105.474 5V7C105.474 7.55229 105.05 8 104.526 8H102.54C102.6 7.78877 102.632 7.565 102.632 7.33334V5C102.632 4.81591 102.49 4.66667 102.316 4.66667H101.368C101.194 4.66667 101.053 4.81591 101.053 5V7.33334C101.053 7.70153 100.77 8 100.421 8H98.5264V5C98.5264 4.81591 98.385 4.66667 98.2106 4.66667H97.2512C97.0767 4.66667 96.9354 4.81591 96.9354 5V7C96.9354 7.55229 96.5112 8 95.988 8H95.7997C95.9182 7.69119 95.9834 7.35364 95.9834 7V5C95.9834 4.81591 95.842 4.66667 95.6676 4.66667H94.7202C94.5458 4.66667 94.4044 4.81591 94.4044 5V7C94.4044 7.55229 93.9803 8 93.4571 8H92.3306C92.449 7.69119 92.5142 7.35364 92.5142 7V5C92.5142 4.81591 92.3729 4.66667 92.1984 4.66667H91.2511C91.0767 4.66667 90.9353 4.81591 90.9353 5V7C90.9353 7.55229 90.5111 8 89.9879 8H87.9096C88.028 7.69119 88.0932 7.35364 88.0932 7V5C88.0932 4.81591 87.9518 4.66667 87.7774 4.66667H86.83C86.6556 4.66667 86.5142 4.81591 86.5142 5V7C86.5142 7.55229 86.0901 8 85.5669 8H83.8653C83.9526 7.73936 84.0001 7.45887 84.0001 7.16667C84.0001 5.78596 82.9397 4.66667 81.6316 4.66667L80.1884 4.66667C79.7516 3.8696 78.9352 3.33334 78.0001 3.33334C76.6048 3.33334 75.4737 4.52724 75.4737 6ZM78.0001 5C77.4768 5 77.0527 5.44772 77.0527 6V8H78.9474V6C78.9474 5.44772 78.5233 5 78.0001 5ZM80.5264 8V6.33334H81.6316C82.0677 6.33334 82.4211 6.70643 82.4211 7.16667C82.4211 7.62691 82.0677 8 81.6316 8H80.5264Z" fill="#E6123D"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M45.7895 7C45.7895 7.35364 45.7243 7.69119 45.6059 8H50.2092C51.1128 8 51.7879 7.2873 51.7879 6.33334V6C51.7879 5.04604 51.1128 4.33334 50.2092 4.33334H46.5783C46.2942 4.33334 46.2394 4.06452 46.4205 3.83334L49.0795 0.248221C49.2026 0.0910277 49.3858 0 49.579 0H50.7919C51.0359 0 51.1696 0.3 51.0141 0.498498L49.4199 2.66667H50.2092C52.0197 2.66667 53.3665 4.08855 53.3665 6V6.33334C53.3665 6.95036 53.2262 7.51637 52.9752 8H54.6195C55.1427 8 55.5668 7.55229 55.5668 7V5C55.5668 4.81591 55.7082 4.66667 55.8826 4.66667H56.83C57.0044 4.66667 57.1458 4.81591 57.1458 5V7C57.1458 7.35364 57.0806 7.69119 56.9622 8H58.0886C58.6118 8 59.036 7.55229 59.036 7V5C59.036 4.81591 59.1774 4.66667 59.3518 4.66667H60.2991C60.4735 4.66667 60.6149 4.81591 60.6149 5V7C60.6149 7.35364 60.5497 7.69119 60.4313 8H60.6195C61.1428 8 61.5669 7.55229 61.5669 7V5C61.5669 4.81591 61.7083 4.66667 61.8827 4.66667H62.8301C63.0045 4.66667 63.1459 4.81591 63.1459 5V7C63.1459 8.47276 62.0148 9.66667 60.6195 9.66667H60.3159C60.2122 9.66667 60.1152 9.61301 60.0562 9.52308L59.7306 9.02664C59.289 9.42566 58.7155 9.66667 58.0886 9.66667H56.8376C56.7339 9.66667 56.6369 9.61301 56.5779 9.52308L56.2557 9.03183C55.8149 9.42775 55.2436 9.66667 54.6195 9.66667H52.7323C52.6287 9.66667 52.5316 9.61301 52.4727 9.52308L52.1396 9.01528C51.6143 9.42819 50.9507 9.66667 50.2092 9.66667H38.5218C38.4181 9.66667 38.3211 9.61301 38.2621 9.52308L37.9399 9.03181C37.4991 9.42774 36.9278 9.66667 36.3036 9.66667H30.0001C28.6048 9.66667 27.4738 8.47276 27.4738 7V5C27.4738 4.81591 27.6151 4.66667 27.7895 4.66667H28.7369C28.9113 4.66667 29.0527 4.81591 29.0527 5V7C29.0527 7.55229 29.4769 8 30.0001 8H36.3036C36.8269 8 37.251 7.55229 37.251 7V5C37.251 4.81591 37.3924 4.66667 37.5668 4.66667H38.5142C38.6886 4.66667 38.83 4.81591 38.83 5V7C38.83 7.35364 38.7647 7.69119 38.6463 8H40.9205C40.8021 7.69119 40.7369 7.35364 40.7369 7V6C40.7369 4.52724 41.868 3.33334 43.2632 3.33334C44.6584 3.33334 45.7895 4.52724 45.7895 6V7ZM44.2106 6V7C44.2106 7.55229 43.7864 8 43.2632 8C42.74 8 42.3158 7.55229 42.3158 7V6C42.3158 5.44772 42.74 5 43.2632 5C43.7864 5 44.2106 5.44772 44.2106 6Z" fill="#E6123D"/>
            <path d="M18.9454 6.33334C18.9454 6.95036 18.8051 7.51637 18.5541 8H21.1458C21.669 8 22.0931 7.55229 22.0931 7V5C22.0931 4.81591 22.2345 4.66667 22.4089 4.66667H23.3563C23.5307 4.66667 23.6721 4.81591 23.6721 5V7C23.6721 8.47276 22.541 9.66667 21.1458 9.66667H18.9428C18.8392 9.66667 18.7422 9.61301 18.6832 9.52308L18.1091 8.64779C17.5427 9.28358 16.7279 9.66667 15.7882 9.66667H10.3384L9.85431 9.014C9.41088 9.42057 8.83187 9.66667 8.1984 9.66667H5.36386C5.26023 9.66667 5.1632 9.61301 5.10422 9.52308L4.75745 8.99435V9C4.75745 10.9115 3.41059 12.3333 1.60015 12.3333H1.27757C1.08338 12.3333 0.899977 12.239 0.780267 12.0776L0.104618 11.1667C-0.0764254 10.9355 -0.0216732 10.6667 0.262483 10.6667H1.60015C2.50374 10.6667 3.1788 9.95397 3.1788 9L3.1785 5C3.1785 4.81591 3.31988 4.66667 3.49429 4.66667H4.44166C4.61606 4.66667 4.75745 4.81591 4.75745 5V8H8.1984C8.72162 8 9.14577 7.55229 9.14577 7V5C9.14577 4.81591 9.28715 4.66667 9.46156 4.66667H10.4089C10.5833 4.66667 10.7247 4.81591 10.7247 5V7C10.7247 7.35364 10.6595 7.69119 10.5411 8H15.7882C16.6917 8 17.3668 7.2873 17.3668 6.33334V6C17.3668 5.04604 16.6917 4.33334 15.7882 4.33334H12.1573C11.8731 4.33334 11.8184 4.06452 11.9994 3.83334L14.6584 0.248221C14.7816 0.0910277 14.9648 0 15.1579 0H16.3708C16.6149 0 16.7486 0.3 16.5931 0.498498L14.9988 2.66667H15.7882C17.5986 2.66667 18.9454 4.08855 18.9454 6V6.33334Z" fill="#E6123D"/>
            <path d="M24.6316 1.33333C24.6316 1.14924 24.773 1 24.9474 1H25.8948C26.0692 1 26.2106 1.14924 26.2106 1.33333V9.33334C26.2106 9.51743 26.0692 9.66667 25.8948 9.66667H24.9474C24.773 9.66667 24.6316 9.51743 24.6316 9.33334V1.33333Z" fill="#E6123D"/>
            </svg>
          <div class="image-box mb-6 ">
            <div>
              <img class="hover:scale-105 transition rounded-3xl w-full mx-auto" src="./assets/image/products/4.webp" alt="" />
            </div>
          </div>
          <div class="space-y-2 text-right">
            <div class="flex justify-end mt-1 mb-1 text-sm text-zinc-800">
              <div>1.100.000</div>
              <div>تومان</div>
            </div>
            <div class="flex justify-end text-xs opacity-65">
              <div class="line-through">1.350.000</div>
              <div class="line-through">تومان</div>
            </div>
          </div>
        </a>
        <a href="" class="card swiper-slide my-2 p-2 md:p-3 bg-white rounded-xl">
          <svg class="mt-2 mb-3" xmlns="http://www.w3.org/2000/svg" width="108" height="13" viewBox="0 0 108 13" fill="none">
            <path d="M47.9052 0.128687C47.965 0.047491 48.057 0 48.1545 0H48.4702C48.5359 0 48.5729 0.0797569 48.5325 0.134495L46.5159 2.87132C46.4561 2.95251 46.3641 3 46.2666 3H45.9509C45.8852 3 45.8483 2.92024 45.8886 2.86551L47.9052 0.128687Z" fill="#E6123D"/>
            <path d="M43.7366 0.333334C43.9073 0.333334 44.0332 0.45282 44.0503 0.624605L44.0523 0.665145V1.66058C44.0523 1.84008 43.9386 1.97233 43.7752 1.9903L43.7366 1.99239H42.6316C42.4608 1.99239 42.3349 1.87296 42.3178 1.70113L42.3158 1.66058V0.665145C42.3158 0.485712 42.4295 0.353409 42.593 0.335424L42.6316 0.333334H43.7366Z" fill="#E6123D"/>
            <path d="M58.1319 2.71664C57.9554 2.71664 57.8101 2.57622 57.7915 2.39607L57.7895 2.35689L57.7896 0.693083C57.7896 0.507632 57.9231 0.35498 58.0946 0.335451L58.1319 0.333341H59.0911C59.2677 0.333341 59.413 0.473628 59.4316 0.653882L59.4336 0.693083L59.4339 1.16267L60.537 1.16259C60.7135 1.16259 60.8588 1.30288 60.8774 1.48314L60.8794 1.52234V2.35689C60.8794 2.54221 60.7459 2.69498 60.5744 2.71452L60.537 2.71664H58.1319Z" fill="#E6123D"/>
            <path d="M105.757 10.6167C105.934 10.6167 106.079 10.7571 106.098 10.9373L106.1 10.9764L106.099 12.6403C106.099 12.8257 105.966 12.9784 105.794 12.9979L105.757 13H104.798C104.621 13 104.476 12.8597 104.457 12.6795L104.455 12.6403L104.455 12.1707L103.352 12.1707C103.175 12.1707 103.03 12.0305 103.012 11.8502L103.01 11.811V10.9764C103.01 10.7911 103.143 10.6384 103.315 10.6188L103.352 10.6167H105.757Z" fill="#E6123D"/>
            <path d="M93.4757 2.7294C93.4943 2.90956 93.6396 3.04997 93.8161 3.04997H96.2213L96.2586 3.04786C96.4301 3.02831 96.5637 2.87555 96.5637 2.69023V1.85567L96.5616 1.81647C96.5431 1.63622 96.3978 1.49593 96.2213 1.49593L95.1182 1.49601L95.1179 1.02642L95.1159 0.987215C95.0973 0.806962 94.952 0.666674 94.7754 0.666674H93.8162L93.7788 0.668785C93.6073 0.688314 93.4738 0.840965 93.4738 1.02642L93.4737 2.69023L93.4757 2.7294Z" fill="#E6123D"/>
            <path d="M34.4205 3C34.5913 3 34.7172 3.11949 34.7343 3.29127L34.7363 3.33181V4.32725C34.7363 4.50674 34.6226 4.63899 34.4591 4.65697L34.4205 4.65906H31.8947C31.7239 4.65906 31.5981 4.53963 31.581 4.3678L31.579 4.32725V3.33181C31.579 3.15238 31.6926 3.02008 31.8561 3.00209L31.8947 3H34.4205Z" fill="#E6123D"/>
            <path d="M101.366 10.9168C101.349 10.7451 101.223 10.6256 101.052 10.6256H98.5263L98.4877 10.6277C98.3242 10.6457 98.2106 10.778 98.2106 10.9574V11.9528L98.2126 11.9934C98.2297 12.1652 98.3555 12.2846 98.5263 12.2846H101.052L101.091 12.2825C101.254 12.2646 101.368 12.1323 101.368 11.9528V10.9574L101.366 10.9168Z" fill="#E6123D"/>
            <path d="M9.15737 10.6256C9.32816 10.6256 9.454 10.7451 9.47111 10.9168L9.4731 10.9574V11.9528C9.4731 12.1323 9.35946 12.2646 9.19596 12.2825L9.15737 12.2846H6.63154C6.46074 12.2846 6.3349 12.1652 6.3178 11.9934L6.31581 11.9528V10.9574C6.31581 10.778 6.42945 10.6457 6.59295 10.6277L6.63154 10.6256H9.15737Z" fill="#E6123D"/>
            <path d="M86.3662 1.62461C86.349 1.45282 86.2232 1.33333 86.0524 1.33333H84.9474L84.9088 1.33542C84.7453 1.35341 84.6316 1.48571 84.6316 1.66515V2.66058L84.6336 2.70113C84.6507 2.87296 84.7766 2.99239 84.9474 2.99239H86.0524L86.091 2.9903C86.2545 2.97233 86.3681 2.84008 86.3681 2.66058V1.66515L86.3662 1.62461Z" fill="#E6123D"/>
            <path d="M4.42113 1.33333C4.59187 1.33333 4.71776 1.45282 4.73487 1.62461L4.73686 1.66515V2.66058C4.73686 2.84008 4.62317 2.97233 4.45971 2.9903L4.42113 2.99239H3.47364C3.30291 2.99239 3.17701 2.87296 3.1599 2.70113L3.15791 2.66058V1.66515C3.15791 1.48571 3.27161 1.35341 3.43507 1.33542L3.47364 1.33333H4.42113Z" fill="#E6123D"/>
            <path d="M21.6293 1.62461C21.6122 1.45282 21.4863 1.33333 21.3155 1.33333H20.2105L20.1719 1.33542C20.0085 1.35341 19.8948 1.48571 19.8948 1.66515V2.66058L19.8968 2.70113C19.9139 2.87296 20.0398 2.99239 20.2105 2.99239H21.3155L21.3541 2.9903C21.5176 2.97233 21.6313 2.84008 21.6313 2.66058V1.66515L21.6293 1.62461Z" fill="#E6123D"/>
            <path d="M71.3663 5.22941C71.3309 3.87346 70.4667 2.99392 69.1573 2.99392H66.3158L66.2772 2.99601C66.1139 3.01401 66 3.14642 66 3.32573V4.32117L66.002 4.36167C66.0192 4.53332 66.1452 4.65298 66.3158 4.65298H69.1573L69.2122 4.65418C69.6049 4.67181 69.7888 4.884 69.7888 5.3166V7.30747L69.7877 7.36509C69.7709 7.77766 69.569 7.9711 69.1573 7.9711H66.3158L66.2772 7.97319C66.1139 7.99118 66 8.12354 66 8.30291V9.29834L66.002 9.33886C66.0192 9.51056 66.1452 9.63016 66.3158 9.63016H69.1573L69.2403 9.62897C70.5305 9.59172 71.3674 8.68351 71.3674 7.30747V5.3166L71.3663 5.22941Z" fill="#E6123D"/>
            <path d="M13.7334 0C13.636 0 13.544 0.047491 13.4841 0.128687L11.4675 2.86551C11.4272 2.92024 11.4642 3 11.5299 3H11.8456C11.943 3 12.035 2.95251 12.0948 2.87132L14.1114 0.134495C14.1518 0.0797569 14.1148 0 14.0491 0H13.7334Z" fill="#E6123D"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M75.4737 6V8H74.8422C74.3189 8 73.8948 7.55229 73.8948 7V1.33333C73.8948 1.14924 73.7534 1 73.579 1H72.6316C72.4572 1 72.3158 1.14924 72.3158 1.33333V7C72.3158 8.47276 73.4469 9.66667 74.8422 9.66667H81.6316C82.2044 9.66667 82.7297 9.45207 83.1392 9.09489L83.4201 9.52308C83.479 9.61301 83.5761 9.66667 83.6797 9.66667H85.5669C86.2855 9.66667 86.9341 9.34994 87.3941 8.84151L87.8411 9.52308C87.9001 9.61301 87.9971 9.66667 88.1008 9.66667H89.9879C90.6121 9.66667 91.1834 9.42775 91.6242 9.03183L91.9464 9.52308C92.0054 9.61301 92.1024 9.66667 92.206 9.66667H93.4571C94.0839 9.66667 94.6575 9.42566 95.0991 9.02664L95.4247 9.52308C95.4837 9.61301 95.5807 9.66667 95.6843 9.66667H95.988C96.6462 9.66667 97.2455 9.40101 97.6951 8.96573L97.9633 9.49137C98.0184 9.59934 98.1251 9.66667 98.2413 9.66667H100.421C101.044 9.66667 101.607 9.39474 102.008 8.95722L102.38 9.52308C102.439 9.61301 102.536 9.66667 102.639 9.66667H104.526C105.922 9.66667 107.053 8.47276 107.053 7V5C107.053 4.81591 106.911 4.66667 106.737 4.66667H105.79C105.615 4.66667 105.474 4.81591 105.474 5V7C105.474 7.55229 105.05 8 104.526 8H102.54C102.6 7.78877 102.632 7.565 102.632 7.33334V5C102.632 4.81591 102.49 4.66667 102.316 4.66667H101.368C101.194 4.66667 101.053 4.81591 101.053 5V7.33334C101.053 7.70153 100.77 8 100.421 8H98.5264V5C98.5264 4.81591 98.385 4.66667 98.2106 4.66667H97.2512C97.0767 4.66667 96.9354 4.81591 96.9354 5V7C96.9354 7.55229 96.5112 8 95.988 8H95.7997C95.9182 7.69119 95.9834 7.35364 95.9834 7V5C95.9834 4.81591 95.842 4.66667 95.6676 4.66667H94.7202C94.5458 4.66667 94.4044 4.81591 94.4044 5V7C94.4044 7.55229 93.9803 8 93.4571 8H92.3306C92.449 7.69119 92.5142 7.35364 92.5142 7V5C92.5142 4.81591 92.3729 4.66667 92.1984 4.66667H91.2511C91.0767 4.66667 90.9353 4.81591 90.9353 5V7C90.9353 7.55229 90.5111 8 89.9879 8H87.9096C88.028 7.69119 88.0932 7.35364 88.0932 7V5C88.0932 4.81591 87.9518 4.66667 87.7774 4.66667H86.83C86.6556 4.66667 86.5142 4.81591 86.5142 5V7C86.5142 7.55229 86.0901 8 85.5669 8H83.8653C83.9526 7.73936 84.0001 7.45887 84.0001 7.16667C84.0001 5.78596 82.9397 4.66667 81.6316 4.66667L80.1884 4.66667C79.7516 3.8696 78.9352 3.33334 78.0001 3.33334C76.6048 3.33334 75.4737 4.52724 75.4737 6ZM78.0001 5C77.4768 5 77.0527 5.44772 77.0527 6V8H78.9474V6C78.9474 5.44772 78.5233 5 78.0001 5ZM80.5264 8V6.33334H81.6316C82.0677 6.33334 82.4211 6.70643 82.4211 7.16667C82.4211 7.62691 82.0677 8 81.6316 8H80.5264Z" fill="#E6123D"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M45.7895 7C45.7895 7.35364 45.7243 7.69119 45.6059 8H50.2092C51.1128 8 51.7879 7.2873 51.7879 6.33334V6C51.7879 5.04604 51.1128 4.33334 50.2092 4.33334H46.5783C46.2942 4.33334 46.2394 4.06452 46.4205 3.83334L49.0795 0.248221C49.2026 0.0910277 49.3858 0 49.579 0H50.7919C51.0359 0 51.1696 0.3 51.0141 0.498498L49.4199 2.66667H50.2092C52.0197 2.66667 53.3665 4.08855 53.3665 6V6.33334C53.3665 6.95036 53.2262 7.51637 52.9752 8H54.6195C55.1427 8 55.5668 7.55229 55.5668 7V5C55.5668 4.81591 55.7082 4.66667 55.8826 4.66667H56.83C57.0044 4.66667 57.1458 4.81591 57.1458 5V7C57.1458 7.35364 57.0806 7.69119 56.9622 8H58.0886C58.6118 8 59.036 7.55229 59.036 7V5C59.036 4.81591 59.1774 4.66667 59.3518 4.66667H60.2991C60.4735 4.66667 60.6149 4.81591 60.6149 5V7C60.6149 7.35364 60.5497 7.69119 60.4313 8H60.6195C61.1428 8 61.5669 7.55229 61.5669 7V5C61.5669 4.81591 61.7083 4.66667 61.8827 4.66667H62.8301C63.0045 4.66667 63.1459 4.81591 63.1459 5V7C63.1459 8.47276 62.0148 9.66667 60.6195 9.66667H60.3159C60.2122 9.66667 60.1152 9.61301 60.0562 9.52308L59.7306 9.02664C59.289 9.42566 58.7155 9.66667 58.0886 9.66667H56.8376C56.7339 9.66667 56.6369 9.61301 56.5779 9.52308L56.2557 9.03183C55.8149 9.42775 55.2436 9.66667 54.6195 9.66667H52.7323C52.6287 9.66667 52.5316 9.61301 52.4727 9.52308L52.1396 9.01528C51.6143 9.42819 50.9507 9.66667 50.2092 9.66667H38.5218C38.4181 9.66667 38.3211 9.61301 38.2621 9.52308L37.9399 9.03181C37.4991 9.42774 36.9278 9.66667 36.3036 9.66667H30.0001C28.6048 9.66667 27.4738 8.47276 27.4738 7V5C27.4738 4.81591 27.6151 4.66667 27.7895 4.66667H28.7369C28.9113 4.66667 29.0527 4.81591 29.0527 5V7C29.0527 7.55229 29.4769 8 30.0001 8H36.3036C36.8269 8 37.251 7.55229 37.251 7V5C37.251 4.81591 37.3924 4.66667 37.5668 4.66667H38.5142C38.6886 4.66667 38.83 4.81591 38.83 5V7C38.83 7.35364 38.7647 7.69119 38.6463 8H40.9205C40.8021 7.69119 40.7369 7.35364 40.7369 7V6C40.7369 4.52724 41.868 3.33334 43.2632 3.33334C44.6584 3.33334 45.7895 4.52724 45.7895 6V7ZM44.2106 6V7C44.2106 7.55229 43.7864 8 43.2632 8C42.74 8 42.3158 7.55229 42.3158 7V6C42.3158 5.44772 42.74 5 43.2632 5C43.7864 5 44.2106 5.44772 44.2106 6Z" fill="#E6123D"/>
            <path d="M18.9454 6.33334C18.9454 6.95036 18.8051 7.51637 18.5541 8H21.1458C21.669 8 22.0931 7.55229 22.0931 7V5C22.0931 4.81591 22.2345 4.66667 22.4089 4.66667H23.3563C23.5307 4.66667 23.6721 4.81591 23.6721 5V7C23.6721 8.47276 22.541 9.66667 21.1458 9.66667H18.9428C18.8392 9.66667 18.7422 9.61301 18.6832 9.52308L18.1091 8.64779C17.5427 9.28358 16.7279 9.66667 15.7882 9.66667H10.3384L9.85431 9.014C9.41088 9.42057 8.83187 9.66667 8.1984 9.66667H5.36386C5.26023 9.66667 5.1632 9.61301 5.10422 9.52308L4.75745 8.99435V9C4.75745 10.9115 3.41059 12.3333 1.60015 12.3333H1.27757C1.08338 12.3333 0.899977 12.239 0.780267 12.0776L0.104618 11.1667C-0.0764254 10.9355 -0.0216732 10.6667 0.262483 10.6667H1.60015C2.50374 10.6667 3.1788 9.95397 3.1788 9L3.1785 5C3.1785 4.81591 3.31988 4.66667 3.49429 4.66667H4.44166C4.61606 4.66667 4.75745 4.81591 4.75745 5V8H8.1984C8.72162 8 9.14577 7.55229 9.14577 7V5C9.14577 4.81591 9.28715 4.66667 9.46156 4.66667H10.4089C10.5833 4.66667 10.7247 4.81591 10.7247 5V7C10.7247 7.35364 10.6595 7.69119 10.5411 8H15.7882C16.6917 8 17.3668 7.2873 17.3668 6.33334V6C17.3668 5.04604 16.6917 4.33334 15.7882 4.33334H12.1573C11.8731 4.33334 11.8184 4.06452 11.9994 3.83334L14.6584 0.248221C14.7816 0.0910277 14.9648 0 15.1579 0H16.3708C16.6149 0 16.7486 0.3 16.5931 0.498498L14.9988 2.66667H15.7882C17.5986 2.66667 18.9454 4.08855 18.9454 6V6.33334Z" fill="#E6123D"/>
            <path d="M24.6316 1.33333C24.6316 1.14924 24.773 1 24.9474 1H25.8948C26.0692 1 26.2106 1.14924 26.2106 1.33333V9.33334C26.2106 9.51743 26.0692 9.66667 25.8948 9.66667H24.9474C24.773 9.66667 24.6316 9.51743 24.6316 9.33334V1.33333Z" fill="#E6123D"/>
            </svg>
          <div class="image-box mb-6 ">
            <div>
              <img class="hover:scale-105 transition rounded-3xl w-full mx-auto" src="./assets/image/products/5.webp" alt="" />
            </div>
          </div>
          <div class="space-y-2 text-right">
            <div class="flex justify-end mt-1 mb-1 text-sm text-zinc-800">
              <div>1.100.000</div>
              <div>تومان</div>
            </div>
            <div class="flex justify-end text-xs opacity-65">
              <div class="line-through">1.350.000</div>
              <div class="line-through">تومان</div>
            </div>
          </div>
        </a>
        <a href="" class="card swiper-slide my-2 p-2 md:p-3 bg-white rounded-xl">
          <svg class="mt-2 mb-3" xmlns="http://www.w3.org/2000/svg" width="108" height="13" viewBox="0 0 108 13" fill="none">
            <path d="M47.9052 0.128687C47.965 0.047491 48.057 0 48.1545 0H48.4702C48.5359 0 48.5729 0.0797569 48.5325 0.134495L46.5159 2.87132C46.4561 2.95251 46.3641 3 46.2666 3H45.9509C45.8852 3 45.8483 2.92024 45.8886 2.86551L47.9052 0.128687Z" fill="#E6123D"/>
            <path d="M43.7366 0.333334C43.9073 0.333334 44.0332 0.45282 44.0503 0.624605L44.0523 0.665145V1.66058C44.0523 1.84008 43.9386 1.97233 43.7752 1.9903L43.7366 1.99239H42.6316C42.4608 1.99239 42.3349 1.87296 42.3178 1.70113L42.3158 1.66058V0.665145C42.3158 0.485712 42.4295 0.353409 42.593 0.335424L42.6316 0.333334H43.7366Z" fill="#E6123D"/>
            <path d="M58.1319 2.71664C57.9554 2.71664 57.8101 2.57622 57.7915 2.39607L57.7895 2.35689L57.7896 0.693083C57.7896 0.507632 57.9231 0.35498 58.0946 0.335451L58.1319 0.333341H59.0911C59.2677 0.333341 59.413 0.473628 59.4316 0.653882L59.4336 0.693083L59.4339 1.16267L60.537 1.16259C60.7135 1.16259 60.8588 1.30288 60.8774 1.48314L60.8794 1.52234V2.35689C60.8794 2.54221 60.7459 2.69498 60.5744 2.71452L60.537 2.71664H58.1319Z" fill="#E6123D"/>
            <path d="M105.757 10.6167C105.934 10.6167 106.079 10.7571 106.098 10.9373L106.1 10.9764L106.099 12.6403C106.099 12.8257 105.966 12.9784 105.794 12.9979L105.757 13H104.798C104.621 13 104.476 12.8597 104.457 12.6795L104.455 12.6403L104.455 12.1707L103.352 12.1707C103.175 12.1707 103.03 12.0305 103.012 11.8502L103.01 11.811V10.9764C103.01 10.7911 103.143 10.6384 103.315 10.6188L103.352 10.6167H105.757Z" fill="#E6123D"/>
            <path d="M93.4757 2.7294C93.4943 2.90956 93.6396 3.04997 93.8161 3.04997H96.2213L96.2586 3.04786C96.4301 3.02831 96.5637 2.87555 96.5637 2.69023V1.85567L96.5616 1.81647C96.5431 1.63622 96.3978 1.49593 96.2213 1.49593L95.1182 1.49601L95.1179 1.02642L95.1159 0.987215C95.0973 0.806962 94.952 0.666674 94.7754 0.666674H93.8162L93.7788 0.668785C93.6073 0.688314 93.4738 0.840965 93.4738 1.02642L93.4737 2.69023L93.4757 2.7294Z" fill="#E6123D"/>
            <path d="M34.4205 3C34.5913 3 34.7172 3.11949 34.7343 3.29127L34.7363 3.33181V4.32725C34.7363 4.50674 34.6226 4.63899 34.4591 4.65697L34.4205 4.65906H31.8947C31.7239 4.65906 31.5981 4.53963 31.581 4.3678L31.579 4.32725V3.33181C31.579 3.15238 31.6926 3.02008 31.8561 3.00209L31.8947 3H34.4205Z" fill="#E6123D"/>
            <path d="M101.366 10.9168C101.349 10.7451 101.223 10.6256 101.052 10.6256H98.5263L98.4877 10.6277C98.3242 10.6457 98.2106 10.778 98.2106 10.9574V11.9528L98.2126 11.9934C98.2297 12.1652 98.3555 12.2846 98.5263 12.2846H101.052L101.091 12.2825C101.254 12.2646 101.368 12.1323 101.368 11.9528V10.9574L101.366 10.9168Z" fill="#E6123D"/>
            <path d="M9.15737 10.6256C9.32816 10.6256 9.454 10.7451 9.47111 10.9168L9.4731 10.9574V11.9528C9.4731 12.1323 9.35946 12.2646 9.19596 12.2825L9.15737 12.2846H6.63154C6.46074 12.2846 6.3349 12.1652 6.3178 11.9934L6.31581 11.9528V10.9574C6.31581 10.778 6.42945 10.6457 6.59295 10.6277L6.63154 10.6256H9.15737Z" fill="#E6123D"/>
            <path d="M86.3662 1.62461C86.349 1.45282 86.2232 1.33333 86.0524 1.33333H84.9474L84.9088 1.33542C84.7453 1.35341 84.6316 1.48571 84.6316 1.66515V2.66058L84.6336 2.70113C84.6507 2.87296 84.7766 2.99239 84.9474 2.99239H86.0524L86.091 2.9903C86.2545 2.97233 86.3681 2.84008 86.3681 2.66058V1.66515L86.3662 1.62461Z" fill="#E6123D"/>
            <path d="M4.42113 1.33333C4.59187 1.33333 4.71776 1.45282 4.73487 1.62461L4.73686 1.66515V2.66058C4.73686 2.84008 4.62317 2.97233 4.45971 2.9903L4.42113 2.99239H3.47364C3.30291 2.99239 3.17701 2.87296 3.1599 2.70113L3.15791 2.66058V1.66515C3.15791 1.48571 3.27161 1.35341 3.43507 1.33542L3.47364 1.33333H4.42113Z" fill="#E6123D"/>
            <path d="M21.6293 1.62461C21.6122 1.45282 21.4863 1.33333 21.3155 1.33333H20.2105L20.1719 1.33542C20.0085 1.35341 19.8948 1.48571 19.8948 1.66515V2.66058L19.8968 2.70113C19.9139 2.87296 20.0398 2.99239 20.2105 2.99239H21.3155L21.3541 2.9903C21.5176 2.97233 21.6313 2.84008 21.6313 2.66058V1.66515L21.6293 1.62461Z" fill="#E6123D"/>
            <path d="M71.3663 5.22941C71.3309 3.87346 70.4667 2.99392 69.1573 2.99392H66.3158L66.2772 2.99601C66.1139 3.01401 66 3.14642 66 3.32573V4.32117L66.002 4.36167C66.0192 4.53332 66.1452 4.65298 66.3158 4.65298H69.1573L69.2122 4.65418C69.6049 4.67181 69.7888 4.884 69.7888 5.3166V7.30747L69.7877 7.36509C69.7709 7.77766 69.569 7.9711 69.1573 7.9711H66.3158L66.2772 7.97319C66.1139 7.99118 66 8.12354 66 8.30291V9.29834L66.002 9.33886C66.0192 9.51056 66.1452 9.63016 66.3158 9.63016H69.1573L69.2403 9.62897C70.5305 9.59172 71.3674 8.68351 71.3674 7.30747V5.3166L71.3663 5.22941Z" fill="#E6123D"/>
            <path d="M13.7334 0C13.636 0 13.544 0.047491 13.4841 0.128687L11.4675 2.86551C11.4272 2.92024 11.4642 3 11.5299 3H11.8456C11.943 3 12.035 2.95251 12.0948 2.87132L14.1114 0.134495C14.1518 0.0797569 14.1148 0 14.0491 0H13.7334Z" fill="#E6123D"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M75.4737 6V8H74.8422C74.3189 8 73.8948 7.55229 73.8948 7V1.33333C73.8948 1.14924 73.7534 1 73.579 1H72.6316C72.4572 1 72.3158 1.14924 72.3158 1.33333V7C72.3158 8.47276 73.4469 9.66667 74.8422 9.66667H81.6316C82.2044 9.66667 82.7297 9.45207 83.1392 9.09489L83.4201 9.52308C83.479 9.61301 83.5761 9.66667 83.6797 9.66667H85.5669C86.2855 9.66667 86.9341 9.34994 87.3941 8.84151L87.8411 9.52308C87.9001 9.61301 87.9971 9.66667 88.1008 9.66667H89.9879C90.6121 9.66667 91.1834 9.42775 91.6242 9.03183L91.9464 9.52308C92.0054 9.61301 92.1024 9.66667 92.206 9.66667H93.4571C94.0839 9.66667 94.6575 9.42566 95.0991 9.02664L95.4247 9.52308C95.4837 9.61301 95.5807 9.66667 95.6843 9.66667H95.988C96.6462 9.66667 97.2455 9.40101 97.6951 8.96573L97.9633 9.49137C98.0184 9.59934 98.1251 9.66667 98.2413 9.66667H100.421C101.044 9.66667 101.607 9.39474 102.008 8.95722L102.38 9.52308C102.439 9.61301 102.536 9.66667 102.639 9.66667H104.526C105.922 9.66667 107.053 8.47276 107.053 7V5C107.053 4.81591 106.911 4.66667 106.737 4.66667H105.79C105.615 4.66667 105.474 4.81591 105.474 5V7C105.474 7.55229 105.05 8 104.526 8H102.54C102.6 7.78877 102.632 7.565 102.632 7.33334V5C102.632 4.81591 102.49 4.66667 102.316 4.66667H101.368C101.194 4.66667 101.053 4.81591 101.053 5V7.33334C101.053 7.70153 100.77 8 100.421 8H98.5264V5C98.5264 4.81591 98.385 4.66667 98.2106 4.66667H97.2512C97.0767 4.66667 96.9354 4.81591 96.9354 5V7C96.9354 7.55229 96.5112 8 95.988 8H95.7997C95.9182 7.69119 95.9834 7.35364 95.9834 7V5C95.9834 4.81591 95.842 4.66667 95.6676 4.66667H94.7202C94.5458 4.66667 94.4044 4.81591 94.4044 5V7C94.4044 7.55229 93.9803 8 93.4571 8H92.3306C92.449 7.69119 92.5142 7.35364 92.5142 7V5C92.5142 4.81591 92.3729 4.66667 92.1984 4.66667H91.2511C91.0767 4.66667 90.9353 4.81591 90.9353 5V7C90.9353 7.55229 90.5111 8 89.9879 8H87.9096C88.028 7.69119 88.0932 7.35364 88.0932 7V5C88.0932 4.81591 87.9518 4.66667 87.7774 4.66667H86.83C86.6556 4.66667 86.5142 4.81591 86.5142 5V7C86.5142 7.55229 86.0901 8 85.5669 8H83.8653C83.9526 7.73936 84.0001 7.45887 84.0001 7.16667C84.0001 5.78596 82.9397 4.66667 81.6316 4.66667L80.1884 4.66667C79.7516 3.8696 78.9352 3.33334 78.0001 3.33334C76.6048 3.33334 75.4737 4.52724 75.4737 6ZM78.0001 5C77.4768 5 77.0527 5.44772 77.0527 6V8H78.9474V6C78.9474 5.44772 78.5233 5 78.0001 5ZM80.5264 8V6.33334H81.6316C82.0677 6.33334 82.4211 6.70643 82.4211 7.16667C82.4211 7.62691 82.0677 8 81.6316 8H80.5264Z" fill="#E6123D"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M45.7895 7C45.7895 7.35364 45.7243 7.69119 45.6059 8H50.2092C51.1128 8 51.7879 7.2873 51.7879 6.33334V6C51.7879 5.04604 51.1128 4.33334 50.2092 4.33334H46.5783C46.2942 4.33334 46.2394 4.06452 46.4205 3.83334L49.0795 0.248221C49.2026 0.0910277 49.3858 0 49.579 0H50.7919C51.0359 0 51.1696 0.3 51.0141 0.498498L49.4199 2.66667H50.2092C52.0197 2.66667 53.3665 4.08855 53.3665 6V6.33334C53.3665 6.95036 53.2262 7.51637 52.9752 8H54.6195C55.1427 8 55.5668 7.55229 55.5668 7V5C55.5668 4.81591 55.7082 4.66667 55.8826 4.66667H56.83C57.0044 4.66667 57.1458 4.81591 57.1458 5V7C57.1458 7.35364 57.0806 7.69119 56.9622 8H58.0886C58.6118 8 59.036 7.55229 59.036 7V5C59.036 4.81591 59.1774 4.66667 59.3518 4.66667H60.2991C60.4735 4.66667 60.6149 4.81591 60.6149 5V7C60.6149 7.35364 60.5497 7.69119 60.4313 8H60.6195C61.1428 8 61.5669 7.55229 61.5669 7V5C61.5669 4.81591 61.7083 4.66667 61.8827 4.66667H62.8301C63.0045 4.66667 63.1459 4.81591 63.1459 5V7C63.1459 8.47276 62.0148 9.66667 60.6195 9.66667H60.3159C60.2122 9.66667 60.1152 9.61301 60.0562 9.52308L59.7306 9.02664C59.289 9.42566 58.7155 9.66667 58.0886 9.66667H56.8376C56.7339 9.66667 56.6369 9.61301 56.5779 9.52308L56.2557 9.03183C55.8149 9.42775 55.2436 9.66667 54.6195 9.66667H52.7323C52.6287 9.66667 52.5316 9.61301 52.4727 9.52308L52.1396 9.01528C51.6143 9.42819 50.9507 9.66667 50.2092 9.66667H38.5218C38.4181 9.66667 38.3211 9.61301 38.2621 9.52308L37.9399 9.03181C37.4991 9.42774 36.9278 9.66667 36.3036 9.66667H30.0001C28.6048 9.66667 27.4738 8.47276 27.4738 7V5C27.4738 4.81591 27.6151 4.66667 27.7895 4.66667H28.7369C28.9113 4.66667 29.0527 4.81591 29.0527 5V7C29.0527 7.55229 29.4769 8 30.0001 8H36.3036C36.8269 8 37.251 7.55229 37.251 7V5C37.251 4.81591 37.3924 4.66667 37.5668 4.66667H38.5142C38.6886 4.66667 38.83 4.81591 38.83 5V7C38.83 7.35364 38.7647 7.69119 38.6463 8H40.9205C40.8021 7.69119 40.7369 7.35364 40.7369 7V6C40.7369 4.52724 41.868 3.33334 43.2632 3.33334C44.6584 3.33334 45.7895 4.52724 45.7895 6V7ZM44.2106 6V7C44.2106 7.55229 43.7864 8 43.2632 8C42.74 8 42.3158 7.55229 42.3158 7V6C42.3158 5.44772 42.74 5 43.2632 5C43.7864 5 44.2106 5.44772 44.2106 6Z" fill="#E6123D"/>
            <path d="M18.9454 6.33334C18.9454 6.95036 18.8051 7.51637 18.5541 8H21.1458C21.669 8 22.0931 7.55229 22.0931 7V5C22.0931 4.81591 22.2345 4.66667 22.4089 4.66667H23.3563C23.5307 4.66667 23.6721 4.81591 23.6721 5V7C23.6721 8.47276 22.541 9.66667 21.1458 9.66667H18.9428C18.8392 9.66667 18.7422 9.61301 18.6832 9.52308L18.1091 8.64779C17.5427 9.28358 16.7279 9.66667 15.7882 9.66667H10.3384L9.85431 9.014C9.41088 9.42057 8.83187 9.66667 8.1984 9.66667H5.36386C5.26023 9.66667 5.1632 9.61301 5.10422 9.52308L4.75745 8.99435V9C4.75745 10.9115 3.41059 12.3333 1.60015 12.3333H1.27757C1.08338 12.3333 0.899977 12.239 0.780267 12.0776L0.104618 11.1667C-0.0764254 10.9355 -0.0216732 10.6667 0.262483 10.6667H1.60015C2.50374 10.6667 3.1788 9.95397 3.1788 9L3.1785 5C3.1785 4.81591 3.31988 4.66667 3.49429 4.66667H4.44166C4.61606 4.66667 4.75745 4.81591 4.75745 5V8H8.1984C8.72162 8 9.14577 7.55229 9.14577 7V5C9.14577 4.81591 9.28715 4.66667 9.46156 4.66667H10.4089C10.5833 4.66667 10.7247 4.81591 10.7247 5V7C10.7247 7.35364 10.6595 7.69119 10.5411 8H15.7882C16.6917 8 17.3668 7.2873 17.3668 6.33334V6C17.3668 5.04604 16.6917 4.33334 15.7882 4.33334H12.1573C11.8731 4.33334 11.8184 4.06452 11.9994 3.83334L14.6584 0.248221C14.7816 0.0910277 14.9648 0 15.1579 0H16.3708C16.6149 0 16.7486 0.3 16.5931 0.498498L14.9988 2.66667H15.7882C17.5986 2.66667 18.9454 4.08855 18.9454 6V6.33334Z" fill="#E6123D"/>
            <path d="M24.6316 1.33333C24.6316 1.14924 24.773 1 24.9474 1H25.8948C26.0692 1 26.2106 1.14924 26.2106 1.33333V9.33334C26.2106 9.51743 26.0692 9.66667 25.8948 9.66667H24.9474C24.773 9.66667 24.6316 9.51743 24.6316 9.33334V1.33333Z" fill="#E6123D"/>
            </svg>
          <div class="image-box mb-6 ">
            <div>
              <img class="hover:scale-105 transition rounded-3xl w-full mx-auto" src="./assets/image/products/6.webp" alt="" />
            </div>
          </div>
          <div class="space-y-2 text-right">
            <div class="flex justify-end mt-1 mb-1 text-sm text-zinc-800">
              <div>1.100.000</div>
              <div>تومان</div>
            </div>
            <div class="flex justify-end text-xs opacity-65">
              <div class="line-through">1.350.000</div>
              <div class="line-through">تومان</div>
            </div>
          </div>
        </a>
        <a href="" class="card swiper-slide my-2 p-2 md:p-3 bg-white rounded-xl">
          <svg class="mt-2 mb-3" xmlns="http://www.w3.org/2000/svg" width="108" height="13" viewBox="0 0 108 13" fill="none">
            <path d="M47.9052 0.128687C47.965 0.047491 48.057 0 48.1545 0H48.4702C48.5359 0 48.5729 0.0797569 48.5325 0.134495L46.5159 2.87132C46.4561 2.95251 46.3641 3 46.2666 3H45.9509C45.8852 3 45.8483 2.92024 45.8886 2.86551L47.9052 0.128687Z" fill="#E6123D"/>
            <path d="M43.7366 0.333334C43.9073 0.333334 44.0332 0.45282 44.0503 0.624605L44.0523 0.665145V1.66058C44.0523 1.84008 43.9386 1.97233 43.7752 1.9903L43.7366 1.99239H42.6316C42.4608 1.99239 42.3349 1.87296 42.3178 1.70113L42.3158 1.66058V0.665145C42.3158 0.485712 42.4295 0.353409 42.593 0.335424L42.6316 0.333334H43.7366Z" fill="#E6123D"/>
            <path d="M58.1319 2.71664C57.9554 2.71664 57.8101 2.57622 57.7915 2.39607L57.7895 2.35689L57.7896 0.693083C57.7896 0.507632 57.9231 0.35498 58.0946 0.335451L58.1319 0.333341H59.0911C59.2677 0.333341 59.413 0.473628 59.4316 0.653882L59.4336 0.693083L59.4339 1.16267L60.537 1.16259C60.7135 1.16259 60.8588 1.30288 60.8774 1.48314L60.8794 1.52234V2.35689C60.8794 2.54221 60.7459 2.69498 60.5744 2.71452L60.537 2.71664H58.1319Z" fill="#E6123D"/>
            <path d="M105.757 10.6167C105.934 10.6167 106.079 10.7571 106.098 10.9373L106.1 10.9764L106.099 12.6403C106.099 12.8257 105.966 12.9784 105.794 12.9979L105.757 13H104.798C104.621 13 104.476 12.8597 104.457 12.6795L104.455 12.6403L104.455 12.1707L103.352 12.1707C103.175 12.1707 103.03 12.0305 103.012 11.8502L103.01 11.811V10.9764C103.01 10.7911 103.143 10.6384 103.315 10.6188L103.352 10.6167H105.757Z" fill="#E6123D"/>
            <path d="M93.4757 2.7294C93.4943 2.90956 93.6396 3.04997 93.8161 3.04997H96.2213L96.2586 3.04786C96.4301 3.02831 96.5637 2.87555 96.5637 2.69023V1.85567L96.5616 1.81647C96.5431 1.63622 96.3978 1.49593 96.2213 1.49593L95.1182 1.49601L95.1179 1.02642L95.1159 0.987215C95.0973 0.806962 94.952 0.666674 94.7754 0.666674H93.8162L93.7788 0.668785C93.6073 0.688314 93.4738 0.840965 93.4738 1.02642L93.4737 2.69023L93.4757 2.7294Z" fill="#E6123D"/>
            <path d="M34.4205 3C34.5913 3 34.7172 3.11949 34.7343 3.29127L34.7363 3.33181V4.32725C34.7363 4.50674 34.6226 4.63899 34.4591 4.65697L34.4205 4.65906H31.8947C31.7239 4.65906 31.5981 4.53963 31.581 4.3678L31.579 4.32725V3.33181C31.579 3.15238 31.6926 3.02008 31.8561 3.00209L31.8947 3H34.4205Z" fill="#E6123D"/>
            <path d="M101.366 10.9168C101.349 10.7451 101.223 10.6256 101.052 10.6256H98.5263L98.4877 10.6277C98.3242 10.6457 98.2106 10.778 98.2106 10.9574V11.9528L98.2126 11.9934C98.2297 12.1652 98.3555 12.2846 98.5263 12.2846H101.052L101.091 12.2825C101.254 12.2646 101.368 12.1323 101.368 11.9528V10.9574L101.366 10.9168Z" fill="#E6123D"/>
            <path d="M9.15737 10.6256C9.32816 10.6256 9.454 10.7451 9.47111 10.9168L9.4731 10.9574V11.9528C9.4731 12.1323 9.35946 12.2646 9.19596 12.2825L9.15737 12.2846H6.63154C6.46074 12.2846 6.3349 12.1652 6.3178 11.9934L6.31581 11.9528V10.9574C6.31581 10.778 6.42945 10.6457 6.59295 10.6277L6.63154 10.6256H9.15737Z" fill="#E6123D"/>
            <path d="M86.3662 1.62461C86.349 1.45282 86.2232 1.33333 86.0524 1.33333H84.9474L84.9088 1.33542C84.7453 1.35341 84.6316 1.48571 84.6316 1.66515V2.66058L84.6336 2.70113C84.6507 2.87296 84.7766 2.99239 84.9474 2.99239H86.0524L86.091 2.9903C86.2545 2.97233 86.3681 2.84008 86.3681 2.66058V1.66515L86.3662 1.62461Z" fill="#E6123D"/>
            <path d="M4.42113 1.33333C4.59187 1.33333 4.71776 1.45282 4.73487 1.62461L4.73686 1.66515V2.66058C4.73686 2.84008 4.62317 2.97233 4.45971 2.9903L4.42113 2.99239H3.47364C3.30291 2.99239 3.17701 2.87296 3.1599 2.70113L3.15791 2.66058V1.66515C3.15791 1.48571 3.27161 1.35341 3.43507 1.33542L3.47364 1.33333H4.42113Z" fill="#E6123D"/>
            <path d="M21.6293 1.62461C21.6122 1.45282 21.4863 1.33333 21.3155 1.33333H20.2105L20.1719 1.33542C20.0085 1.35341 19.8948 1.48571 19.8948 1.66515V2.66058L19.8968 2.70113C19.9139 2.87296 20.0398 2.99239 20.2105 2.99239H21.3155L21.3541 2.9903C21.5176 2.97233 21.6313 2.84008 21.6313 2.66058V1.66515L21.6293 1.62461Z" fill="#E6123D"/>
            <path d="M71.3663 5.22941C71.3309 3.87346 70.4667 2.99392 69.1573 2.99392H66.3158L66.2772 2.99601C66.1139 3.01401 66 3.14642 66 3.32573V4.32117L66.002 4.36167C66.0192 4.53332 66.1452 4.65298 66.3158 4.65298H69.1573L69.2122 4.65418C69.6049 4.67181 69.7888 4.884 69.7888 5.3166V7.30747L69.7877 7.36509C69.7709 7.77766 69.569 7.9711 69.1573 7.9711H66.3158L66.2772 7.97319C66.1139 7.99118 66 8.12354 66 8.30291V9.29834L66.002 9.33886C66.0192 9.51056 66.1452 9.63016 66.3158 9.63016H69.1573L69.2403 9.62897C70.5305 9.59172 71.3674 8.68351 71.3674 7.30747V5.3166L71.3663 5.22941Z" fill="#E6123D"/>
            <path d="M13.7334 0C13.636 0 13.544 0.047491 13.4841 0.128687L11.4675 2.86551C11.4272 2.92024 11.4642 3 11.5299 3H11.8456C11.943 3 12.035 2.95251 12.0948 2.87132L14.1114 0.134495C14.1518 0.0797569 14.1148 0 14.0491 0H13.7334Z" fill="#E6123D"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M75.4737 6V8H74.8422C74.3189 8 73.8948 7.55229 73.8948 7V1.33333C73.8948 1.14924 73.7534 1 73.579 1H72.6316C72.4572 1 72.3158 1.14924 72.3158 1.33333V7C72.3158 8.47276 73.4469 9.66667 74.8422 9.66667H81.6316C82.2044 9.66667 82.7297 9.45207 83.1392 9.09489L83.4201 9.52308C83.479 9.61301 83.5761 9.66667 83.6797 9.66667H85.5669C86.2855 9.66667 86.9341 9.34994 87.3941 8.84151L87.8411 9.52308C87.9001 9.61301 87.9971 9.66667 88.1008 9.66667H89.9879C90.6121 9.66667 91.1834 9.42775 91.6242 9.03183L91.9464 9.52308C92.0054 9.61301 92.1024 9.66667 92.206 9.66667H93.4571C94.0839 9.66667 94.6575 9.42566 95.0991 9.02664L95.4247 9.52308C95.4837 9.61301 95.5807 9.66667 95.6843 9.66667H95.988C96.6462 9.66667 97.2455 9.40101 97.6951 8.96573L97.9633 9.49137C98.0184 9.59934 98.1251 9.66667 98.2413 9.66667H100.421C101.044 9.66667 101.607 9.39474 102.008 8.95722L102.38 9.52308C102.439 9.61301 102.536 9.66667 102.639 9.66667H104.526C105.922 9.66667 107.053 8.47276 107.053 7V5C107.053 4.81591 106.911 4.66667 106.737 4.66667H105.79C105.615 4.66667 105.474 4.81591 105.474 5V7C105.474 7.55229 105.05 8 104.526 8H102.54C102.6 7.78877 102.632 7.565 102.632 7.33334V5C102.632 4.81591 102.49 4.66667 102.316 4.66667H101.368C101.194 4.66667 101.053 4.81591 101.053 5V7.33334C101.053 7.70153 100.77 8 100.421 8H98.5264V5C98.5264 4.81591 98.385 4.66667 98.2106 4.66667H97.2512C97.0767 4.66667 96.9354 4.81591 96.9354 5V7C96.9354 7.55229 96.5112 8 95.988 8H95.7997C95.9182 7.69119 95.9834 7.35364 95.9834 7V5C95.9834 4.81591 95.842 4.66667 95.6676 4.66667H94.7202C94.5458 4.66667 94.4044 4.81591 94.4044 5V7C94.4044 7.55229 93.9803 8 93.4571 8H92.3306C92.449 7.69119 92.5142 7.35364 92.5142 7V5C92.5142 4.81591 92.3729 4.66667 92.1984 4.66667H91.2511C91.0767 4.66667 90.9353 4.81591 90.9353 5V7C90.9353 7.55229 90.5111 8 89.9879 8H87.9096C88.028 7.69119 88.0932 7.35364 88.0932 7V5C88.0932 4.81591 87.9518 4.66667 87.7774 4.66667H86.83C86.6556 4.66667 86.5142 4.81591 86.5142 5V7C86.5142 7.55229 86.0901 8 85.5669 8H83.8653C83.9526 7.73936 84.0001 7.45887 84.0001 7.16667C84.0001 5.78596 82.9397 4.66667 81.6316 4.66667L80.1884 4.66667C79.7516 3.8696 78.9352 3.33334 78.0001 3.33334C76.6048 3.33334 75.4737 4.52724 75.4737 6ZM78.0001 5C77.4768 5 77.0527 5.44772 77.0527 6V8H78.9474V6C78.9474 5.44772 78.5233 5 78.0001 5ZM80.5264 8V6.33334H81.6316C82.0677 6.33334 82.4211 6.70643 82.4211 7.16667C82.4211 7.62691 82.0677 8 81.6316 8H80.5264Z" fill="#E6123D"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M45.7895 7C45.7895 7.35364 45.7243 7.69119 45.6059 8H50.2092C51.1128 8 51.7879 7.2873 51.7879 6.33334V6C51.7879 5.04604 51.1128 4.33334 50.2092 4.33334H46.5783C46.2942 4.33334 46.2394 4.06452 46.4205 3.83334L49.0795 0.248221C49.2026 0.0910277 49.3858 0 49.579 0H50.7919C51.0359 0 51.1696 0.3 51.0141 0.498498L49.4199 2.66667H50.2092C52.0197 2.66667 53.3665 4.08855 53.3665 6V6.33334C53.3665 6.95036 53.2262 7.51637 52.9752 8H54.6195C55.1427 8 55.5668 7.55229 55.5668 7V5C55.5668 4.81591 55.7082 4.66667 55.8826 4.66667H56.83C57.0044 4.66667 57.1458 4.81591 57.1458 5V7C57.1458 7.35364 57.0806 7.69119 56.9622 8H58.0886C58.6118 8 59.036 7.55229 59.036 7V5C59.036 4.81591 59.1774 4.66667 59.3518 4.66667H60.2991C60.4735 4.66667 60.6149 4.81591 60.6149 5V7C60.6149 7.35364 60.5497 7.69119 60.4313 8H60.6195C61.1428 8 61.5669 7.55229 61.5669 7V5C61.5669 4.81591 61.7083 4.66667 61.8827 4.66667H62.8301C63.0045 4.66667 63.1459 4.81591 63.1459 5V7C63.1459 8.47276 62.0148 9.66667 60.6195 9.66667H60.3159C60.2122 9.66667 60.1152 9.61301 60.0562 9.52308L59.7306 9.02664C59.289 9.42566 58.7155 9.66667 58.0886 9.66667H56.8376C56.7339 9.66667 56.6369 9.61301 56.5779 9.52308L56.2557 9.03183C55.8149 9.42775 55.2436 9.66667 54.6195 9.66667H52.7323C52.6287 9.66667 52.5316 9.61301 52.4727 9.52308L52.1396 9.01528C51.6143 9.42819 50.9507 9.66667 50.2092 9.66667H38.5218C38.4181 9.66667 38.3211 9.61301 38.2621 9.52308L37.9399 9.03181C37.4991 9.42774 36.9278 9.66667 36.3036 9.66667H30.0001C28.6048 9.66667 27.4738 8.47276 27.4738 7V5C27.4738 4.81591 27.6151 4.66667 27.7895 4.66667H28.7369C28.9113 4.66667 29.0527 4.81591 29.0527 5V7C29.0527 7.55229 29.4769 8 30.0001 8H36.3036C36.8269 8 37.251 7.55229 37.251 7V5C37.251 4.81591 37.3924 4.66667 37.5668 4.66667H38.5142C38.6886 4.66667 38.83 4.81591 38.83 5V7C38.83 7.35364 38.7647 7.69119 38.6463 8H40.9205C40.8021 7.69119 40.7369 7.35364 40.7369 7V6C40.7369 4.52724 41.868 3.33334 43.2632 3.33334C44.6584 3.33334 45.7895 4.52724 45.7895 6V7ZM44.2106 6V7C44.2106 7.55229 43.7864 8 43.2632 8C42.74 8 42.3158 7.55229 42.3158 7V6C42.3158 5.44772 42.74 5 43.2632 5C43.7864 5 44.2106 5.44772 44.2106 6Z" fill="#E6123D"/>
            <path d="M18.9454 6.33334C18.9454 6.95036 18.8051 7.51637 18.5541 8H21.1458C21.669 8 22.0931 7.55229 22.0931 7V5C22.0931 4.81591 22.2345 4.66667 22.4089 4.66667H23.3563C23.5307 4.66667 23.6721 4.81591 23.6721 5V7C23.6721 8.47276 22.541 9.66667 21.1458 9.66667H18.9428C18.8392 9.66667 18.7422 9.61301 18.6832 9.52308L18.1091 8.64779C17.5427 9.28358 16.7279 9.66667 15.7882 9.66667H10.3384L9.85431 9.014C9.41088 9.42057 8.83187 9.66667 8.1984 9.66667H5.36386C5.26023 9.66667 5.1632 9.61301 5.10422 9.52308L4.75745 8.99435V9C4.75745 10.9115 3.41059 12.3333 1.60015 12.3333H1.27757C1.08338 12.3333 0.899977 12.239 0.780267 12.0776L0.104618 11.1667C-0.0764254 10.9355 -0.0216732 10.6667 0.262483 10.6667H1.60015C2.50374 10.6667 3.1788 9.95397 3.1788 9L3.1785 5C3.1785 4.81591 3.31988 4.66667 3.49429 4.66667H4.44166C4.61606 4.66667 4.75745 4.81591 4.75745 5V8H8.1984C8.72162 8 9.14577 7.55229 9.14577 7V5C9.14577 4.81591 9.28715 4.66667 9.46156 4.66667H10.4089C10.5833 4.66667 10.7247 4.81591 10.7247 5V7C10.7247 7.35364 10.6595 7.69119 10.5411 8H15.7882C16.6917 8 17.3668 7.2873 17.3668 6.33334V6C17.3668 5.04604 16.6917 4.33334 15.7882 4.33334H12.1573C11.8731 4.33334 11.8184 4.06452 11.9994 3.83334L14.6584 0.248221C14.7816 0.0910277 14.9648 0 15.1579 0H16.3708C16.6149 0 16.7486 0.3 16.5931 0.498498L14.9988 2.66667H15.7882C17.5986 2.66667 18.9454 4.08855 18.9454 6V6.33334Z" fill="#E6123D"/>
            <path d="M24.6316 1.33333C24.6316 1.14924 24.773 1 24.9474 1H25.8948C26.0692 1 26.2106 1.14924 26.2106 1.33333V9.33334C26.2106 9.51743 26.0692 9.66667 25.8948 9.66667H24.9474C24.773 9.66667 24.6316 9.51743 24.6316 9.33334V1.33333Z" fill="#E6123D"/>
            </svg>
          <div class="image-box mb-6 ">
            <div>
              <img class="hover:scale-105 transition rounded-3xl w-full mx-auto" src="./assets/image/products/7.webp" alt="" />
            </div>
          </div>
          <div class="space-y-2 text-right">
            <div class="flex justify-end mt-1 mb-1 text-sm text-zinc-800">
              <div>1.100.000</div>
              <div>تومان</div>
            </div>
            <div class="flex justify-end text-xs opacity-65">
              <div class="line-through">1.350.000</div>
              <div class="line-through">تومان</div>
            </div>
          </div>
        </a>
        <a href="" class="card swiper-slide my-2 p-2 md:p-3 bg-white rounded-xl">
          <svg class="mt-2 mb-3" xmlns="http://www.w3.org/2000/svg" width="108" height="13" viewBox="0 0 108 13" fill="none">
            <path d="M47.9052 0.128687C47.965 0.047491 48.057 0 48.1545 0H48.4702C48.5359 0 48.5729 0.0797569 48.5325 0.134495L46.5159 2.87132C46.4561 2.95251 46.3641 3 46.2666 3H45.9509C45.8852 3 45.8483 2.92024 45.8886 2.86551L47.9052 0.128687Z" fill="#E6123D"/>
            <path d="M43.7366 0.333334C43.9073 0.333334 44.0332 0.45282 44.0503 0.624605L44.0523 0.665145V1.66058C44.0523 1.84008 43.9386 1.97233 43.7752 1.9903L43.7366 1.99239H42.6316C42.4608 1.99239 42.3349 1.87296 42.3178 1.70113L42.3158 1.66058V0.665145C42.3158 0.485712 42.4295 0.353409 42.593 0.335424L42.6316 0.333334H43.7366Z" fill="#E6123D"/>
            <path d="M58.1319 2.71664C57.9554 2.71664 57.8101 2.57622 57.7915 2.39607L57.7895 2.35689L57.7896 0.693083C57.7896 0.507632 57.9231 0.35498 58.0946 0.335451L58.1319 0.333341H59.0911C59.2677 0.333341 59.413 0.473628 59.4316 0.653882L59.4336 0.693083L59.4339 1.16267L60.537 1.16259C60.7135 1.16259 60.8588 1.30288 60.8774 1.48314L60.8794 1.52234V2.35689C60.8794 2.54221 60.7459 2.69498 60.5744 2.71452L60.537 2.71664H58.1319Z" fill="#E6123D"/>
            <path d="M105.757 10.6167C105.934 10.6167 106.079 10.7571 106.098 10.9373L106.1 10.9764L106.099 12.6403C106.099 12.8257 105.966 12.9784 105.794 12.9979L105.757 13H104.798C104.621 13 104.476 12.8597 104.457 12.6795L104.455 12.6403L104.455 12.1707L103.352 12.1707C103.175 12.1707 103.03 12.0305 103.012 11.8502L103.01 11.811V10.9764C103.01 10.7911 103.143 10.6384 103.315 10.6188L103.352 10.6167H105.757Z" fill="#E6123D"/>
            <path d="M93.4757 2.7294C93.4943 2.90956 93.6396 3.04997 93.8161 3.04997H96.2213L96.2586 3.04786C96.4301 3.02831 96.5637 2.87555 96.5637 2.69023V1.85567L96.5616 1.81647C96.5431 1.63622 96.3978 1.49593 96.2213 1.49593L95.1182 1.49601L95.1179 1.02642L95.1159 0.987215C95.0973 0.806962 94.952 0.666674 94.7754 0.666674H93.8162L93.7788 0.668785C93.6073 0.688314 93.4738 0.840965 93.4738 1.02642L93.4737 2.69023L93.4757 2.7294Z" fill="#E6123D"/>
            <path d="M34.4205 3C34.5913 3 34.7172 3.11949 34.7343 3.29127L34.7363 3.33181V4.32725C34.7363 4.50674 34.6226 4.63899 34.4591 4.65697L34.4205 4.65906H31.8947C31.7239 4.65906 31.5981 4.53963 31.581 4.3678L31.579 4.32725V3.33181C31.579 3.15238 31.6926 3.02008 31.8561 3.00209L31.8947 3H34.4205Z" fill="#E6123D"/>
            <path d="M101.366 10.9168C101.349 10.7451 101.223 10.6256 101.052 10.6256H98.5263L98.4877 10.6277C98.3242 10.6457 98.2106 10.778 98.2106 10.9574V11.9528L98.2126 11.9934C98.2297 12.1652 98.3555 12.2846 98.5263 12.2846H101.052L101.091 12.2825C101.254 12.2646 101.368 12.1323 101.368 11.9528V10.9574L101.366 10.9168Z" fill="#E6123D"/>
            <path d="M9.15737 10.6256C9.32816 10.6256 9.454 10.7451 9.47111 10.9168L9.4731 10.9574V11.9528C9.4731 12.1323 9.35946 12.2646 9.19596 12.2825L9.15737 12.2846H6.63154C6.46074 12.2846 6.3349 12.1652 6.3178 11.9934L6.31581 11.9528V10.9574C6.31581 10.778 6.42945 10.6457 6.59295 10.6277L6.63154 10.6256H9.15737Z" fill="#E6123D"/>
            <path d="M86.3662 1.62461C86.349 1.45282 86.2232 1.33333 86.0524 1.33333H84.9474L84.9088 1.33542C84.7453 1.35341 84.6316 1.48571 84.6316 1.66515V2.66058L84.6336 2.70113C84.6507 2.87296 84.7766 2.99239 84.9474 2.99239H86.0524L86.091 2.9903C86.2545 2.97233 86.3681 2.84008 86.3681 2.66058V1.66515L86.3662 1.62461Z" fill="#E6123D"/>
            <path d="M4.42113 1.33333C4.59187 1.33333 4.71776 1.45282 4.73487 1.62461L4.73686 1.66515V2.66058C4.73686 2.84008 4.62317 2.97233 4.45971 2.9903L4.42113 2.99239H3.47364C3.30291 2.99239 3.17701 2.87296 3.1599 2.70113L3.15791 2.66058V1.66515C3.15791 1.48571 3.27161 1.35341 3.43507 1.33542L3.47364 1.33333H4.42113Z" fill="#E6123D"/>
            <path d="M21.6293 1.62461C21.6122 1.45282 21.4863 1.33333 21.3155 1.33333H20.2105L20.1719 1.33542C20.0085 1.35341 19.8948 1.48571 19.8948 1.66515V2.66058L19.8968 2.70113C19.9139 2.87296 20.0398 2.99239 20.2105 2.99239H21.3155L21.3541 2.9903C21.5176 2.97233 21.6313 2.84008 21.6313 2.66058V1.66515L21.6293 1.62461Z" fill="#E6123D"/>
            <path d="M71.3663 5.22941C71.3309 3.87346 70.4667 2.99392 69.1573 2.99392H66.3158L66.2772 2.99601C66.1139 3.01401 66 3.14642 66 3.32573V4.32117L66.002 4.36167C66.0192 4.53332 66.1452 4.65298 66.3158 4.65298H69.1573L69.2122 4.65418C69.6049 4.67181 69.7888 4.884 69.7888 5.3166V7.30747L69.7877 7.36509C69.7709 7.77766 69.569 7.9711 69.1573 7.9711H66.3158L66.2772 7.97319C66.1139 7.99118 66 8.12354 66 8.30291V9.29834L66.002 9.33886C66.0192 9.51056 66.1452 9.63016 66.3158 9.63016H69.1573L69.2403 9.62897C70.5305 9.59172 71.3674 8.68351 71.3674 7.30747V5.3166L71.3663 5.22941Z" fill="#E6123D"/>
            <path d="M13.7334 0C13.636 0 13.544 0.047491 13.4841 0.128687L11.4675 2.86551C11.4272 2.92024 11.4642 3 11.5299 3H11.8456C11.943 3 12.035 2.95251 12.0948 2.87132L14.1114 0.134495C14.1518 0.0797569 14.1148 0 14.0491 0H13.7334Z" fill="#E6123D"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M75.4737 6V8H74.8422C74.3189 8 73.8948 7.55229 73.8948 7V1.33333C73.8948 1.14924 73.7534 1 73.579 1H72.6316C72.4572 1 72.3158 1.14924 72.3158 1.33333V7C72.3158 8.47276 73.4469 9.66667 74.8422 9.66667H81.6316C82.2044 9.66667 82.7297 9.45207 83.1392 9.09489L83.4201 9.52308C83.479 9.61301 83.5761 9.66667 83.6797 9.66667H85.5669C86.2855 9.66667 86.9341 9.34994 87.3941 8.84151L87.8411 9.52308C87.9001 9.61301 87.9971 9.66667 88.1008 9.66667H89.9879C90.6121 9.66667 91.1834 9.42775 91.6242 9.03183L91.9464 9.52308C92.0054 9.61301 92.1024 9.66667 92.206 9.66667H93.4571C94.0839 9.66667 94.6575 9.42566 95.0991 9.02664L95.4247 9.52308C95.4837 9.61301 95.5807 9.66667 95.6843 9.66667H95.988C96.6462 9.66667 97.2455 9.40101 97.6951 8.96573L97.9633 9.49137C98.0184 9.59934 98.1251 9.66667 98.2413 9.66667H100.421C101.044 9.66667 101.607 9.39474 102.008 8.95722L102.38 9.52308C102.439 9.61301 102.536 9.66667 102.639 9.66667H104.526C105.922 9.66667 107.053 8.47276 107.053 7V5C107.053 4.81591 106.911 4.66667 106.737 4.66667H105.79C105.615 4.66667 105.474 4.81591 105.474 5V7C105.474 7.55229 105.05 8 104.526 8H102.54C102.6 7.78877 102.632 7.565 102.632 7.33334V5C102.632 4.81591 102.49 4.66667 102.316 4.66667H101.368C101.194 4.66667 101.053 4.81591 101.053 5V7.33334C101.053 7.70153 100.77 8 100.421 8H98.5264V5C98.5264 4.81591 98.385 4.66667 98.2106 4.66667H97.2512C97.0767 4.66667 96.9354 4.81591 96.9354 5V7C96.9354 7.55229 96.5112 8 95.988 8H95.7997C95.9182 7.69119 95.9834 7.35364 95.9834 7V5C95.9834 4.81591 95.842 4.66667 95.6676 4.66667H94.7202C94.5458 4.66667 94.4044 4.81591 94.4044 5V7C94.4044 7.55229 93.9803 8 93.4571 8H92.3306C92.449 7.69119 92.5142 7.35364 92.5142 7V5C92.5142 4.81591 92.3729 4.66667 92.1984 4.66667H91.2511C91.0767 4.66667 90.9353 4.81591 90.9353 5V7C90.9353 7.55229 90.5111 8 89.9879 8H87.9096C88.028 7.69119 88.0932 7.35364 88.0932 7V5C88.0932 4.81591 87.9518 4.66667 87.7774 4.66667H86.83C86.6556 4.66667 86.5142 4.81591 86.5142 5V7C86.5142 7.55229 86.0901 8 85.5669 8H83.8653C83.9526 7.73936 84.0001 7.45887 84.0001 7.16667C84.0001 5.78596 82.9397 4.66667 81.6316 4.66667L80.1884 4.66667C79.7516 3.8696 78.9352 3.33334 78.0001 3.33334C76.6048 3.33334 75.4737 4.52724 75.4737 6ZM78.0001 5C77.4768 5 77.0527 5.44772 77.0527 6V8H78.9474V6C78.9474 5.44772 78.5233 5 78.0001 5ZM80.5264 8V6.33334H81.6316C82.0677 6.33334 82.4211 6.70643 82.4211 7.16667C82.4211 7.62691 82.0677 8 81.6316 8H80.5264Z" fill="#E6123D"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M45.7895 7C45.7895 7.35364 45.7243 7.69119 45.6059 8H50.2092C51.1128 8 51.7879 7.2873 51.7879 6.33334V6C51.7879 5.04604 51.1128 4.33334 50.2092 4.33334H46.5783C46.2942 4.33334 46.2394 4.06452 46.4205 3.83334L49.0795 0.248221C49.2026 0.0910277 49.3858 0 49.579 0H50.7919C51.0359 0 51.1696 0.3 51.0141 0.498498L49.4199 2.66667H50.2092C52.0197 2.66667 53.3665 4.08855 53.3665 6V6.33334C53.3665 6.95036 53.2262 7.51637 52.9752 8H54.6195C55.1427 8 55.5668 7.55229 55.5668 7V5C55.5668 4.81591 55.7082 4.66667 55.8826 4.66667H56.83C57.0044 4.66667 57.1458 4.81591 57.1458 5V7C57.1458 7.35364 57.0806 7.69119 56.9622 8H58.0886C58.6118 8 59.036 7.55229 59.036 7V5C59.036 4.81591 59.1774 4.66667 59.3518 4.66667H60.2991C60.4735 4.66667 60.6149 4.81591 60.6149 5V7C60.6149 7.35364 60.5497 7.69119 60.4313 8H60.6195C61.1428 8 61.5669 7.55229 61.5669 7V5C61.5669 4.81591 61.7083 4.66667 61.8827 4.66667H62.8301C63.0045 4.66667 63.1459 4.81591 63.1459 5V7C63.1459 8.47276 62.0148 9.66667 60.6195 9.66667H60.3159C60.2122 9.66667 60.1152 9.61301 60.0562 9.52308L59.7306 9.02664C59.289 9.42566 58.7155 9.66667 58.0886 9.66667H56.8376C56.7339 9.66667 56.6369 9.61301 56.5779 9.52308L56.2557 9.03183C55.8149 9.42775 55.2436 9.66667 54.6195 9.66667H52.7323C52.6287 9.66667 52.5316 9.61301 52.4727 9.52308L52.1396 9.01528C51.6143 9.42819 50.9507 9.66667 50.2092 9.66667H38.5218C38.4181 9.66667 38.3211 9.61301 38.2621 9.52308L37.9399 9.03181C37.4991 9.42774 36.9278 9.66667 36.3036 9.66667H30.0001C28.6048 9.66667 27.4738 8.47276 27.4738 7V5C27.4738 4.81591 27.6151 4.66667 27.7895 4.66667H28.7369C28.9113 4.66667 29.0527 4.81591 29.0527 5V7C29.0527 7.55229 29.4769 8 30.0001 8H36.3036C36.8269 8 37.251 7.55229 37.251 7V5C37.251 4.81591 37.3924 4.66667 37.5668 4.66667H38.5142C38.6886 4.66667 38.83 4.81591 38.83 5V7C38.83 7.35364 38.7647 7.69119 38.6463 8H40.9205C40.8021 7.69119 40.7369 7.35364 40.7369 7V6C40.7369 4.52724 41.868 3.33334 43.2632 3.33334C44.6584 3.33334 45.7895 4.52724 45.7895 6V7ZM44.2106 6V7C44.2106 7.55229 43.7864 8 43.2632 8C42.74 8 42.3158 7.55229 42.3158 7V6C42.3158 5.44772 42.74 5 43.2632 5C43.7864 5 44.2106 5.44772 44.2106 6Z" fill="#E6123D"/>
            <path d="M18.9454 6.33334C18.9454 6.95036 18.8051 7.51637 18.5541 8H21.1458C21.669 8 22.0931 7.55229 22.0931 7V5C22.0931 4.81591 22.2345 4.66667 22.4089 4.66667H23.3563C23.5307 4.66667 23.6721 4.81591 23.6721 5V7C23.6721 8.47276 22.541 9.66667 21.1458 9.66667H18.9428C18.8392 9.66667 18.7422 9.61301 18.6832 9.52308L18.1091 8.64779C17.5427 9.28358 16.7279 9.66667 15.7882 9.66667H10.3384L9.85431 9.014C9.41088 9.42057 8.83187 9.66667 8.1984 9.66667H5.36386C5.26023 9.66667 5.1632 9.61301 5.10422 9.52308L4.75745 8.99435V9C4.75745 10.9115 3.41059 12.3333 1.60015 12.3333H1.27757C1.08338 12.3333 0.899977 12.239 0.780267 12.0776L0.104618 11.1667C-0.0764254 10.9355 -0.0216732 10.6667 0.262483 10.6667H1.60015C2.50374 10.6667 3.1788 9.95397 3.1788 9L3.1785 5C3.1785 4.81591 3.31988 4.66667 3.49429 4.66667H4.44166C4.61606 4.66667 4.75745 4.81591 4.75745 5V8H8.1984C8.72162 8 9.14577 7.55229 9.14577 7V5C9.14577 4.81591 9.28715 4.66667 9.46156 4.66667H10.4089C10.5833 4.66667 10.7247 4.81591 10.7247 5V7C10.7247 7.35364 10.6595 7.69119 10.5411 8H15.7882C16.6917 8 17.3668 7.2873 17.3668 6.33334V6C17.3668 5.04604 16.6917 4.33334 15.7882 4.33334H12.1573C11.8731 4.33334 11.8184 4.06452 11.9994 3.83334L14.6584 0.248221C14.7816 0.0910277 14.9648 0 15.1579 0H16.3708C16.6149 0 16.7486 0.3 16.5931 0.498498L14.9988 2.66667H15.7882C17.5986 2.66667 18.9454 4.08855 18.9454 6V6.33334Z" fill="#E6123D"/>
            <path d="M24.6316 1.33333C24.6316 1.14924 24.773 1 24.9474 1H25.8948C26.0692 1 26.2106 1.14924 26.2106 1.33333V9.33334C26.2106 9.51743 26.0692 9.66667 25.8948 9.66667H24.9474C24.773 9.66667 24.6316 9.51743 24.6316 9.33334V1.33333Z" fill="#E6123D"/>
            </svg>
          <div class="image-box mb-6 ">
            <div>
              <img class="hover:scale-105 transition rounded-3xl w-full mx-auto" src="./assets/image/products/8.webp" alt="" />
            </div>
          </div>
          <div class="space-y-2 text-right">
            <div class="flex justify-end mt-1 mb-1 text-sm text-zinc-800">
              <div>1.100.000</div>
              <div>تومان</div>
            </div>
            <div class="flex justify-end text-xs opacity-65">
              <div class="line-through">1.350.000</div>
              <div class="line-through">تومان</div>
            </div>
          </div>
        </a>
        <a href="" class="card swiper-slide flex flex-col justify-center items-center h-full">
          <div class="text-gray-100">
            مشاهده همه
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#f2f2f2" viewBox="0 0 256 256"><path d="M128,26A102,102,0,1,0,230,128,102.12,102.12,0,0,0,128,26Zm0,192a90,90,0,1,1,90-90A90.1,90.1,0,0,1,128,218Zm46-90a6,6,0,0,1-6,6H102.49l21.75,21.76a6,6,0,1,1-8.48,8.48l-32-32a6,6,0,0,1,0-8.48l32-32a6,6,0,0,1,8.48,8.48L102.49,122H168A6,6,0,0,1,174,128Z"></path></svg>
          </div>
        </a>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <!-- product sldier 1 -->
    <div class="my-10 px-3">
      <!-- TOP SLIDER -->
      <div class="flex justify-between items-center pb-3">
        <div class="px-4 py-2 flex justify-center items-center gap-x-1 font-bold md:text-lg text-zinc-700 relative">
          <div class="z-10">
            محصولات پرتخفیف
          </div>
          <div class="w-20 h-2 bg-red-300 shadow-lg absolute right-5 top-5 rounded-sm">
          </div>
        </div>
        <a href="">
          <div class="transition px-4 py-2 flex justify-center items-center text-zinc-700 hover:text-zinc-600">
            مشاهده همه
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#292929" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
          </div>
        </a>
      </div>
      <!-- SLIDER -->
      <div class="containerPSlider swiper">
        <div class="product-slider1">
          <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl border group">
              <div class="flex justify-between relative">
                <div class="bg-red-500 rounded-full w-8 h-8 pt-1 text-white flex items-center justify-center text-xs">
                    % 10
                  </div>
                <div class="flex flex-col gap-y-2 absolute opacity-0 group-hover:opacity-100 left-0 transition-opacity duration-300 ease-out">
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-red-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-zinc-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M236.24,179.76a6,6,0,0,1,0,8.48l-24,24a6,6,0,0,1-8.48-8.48L217.52,190H200.94a70.16,70.16,0,0,1-57-29.31l-41.71-58.4A58.11,58.11,0,0,0,55.06,78H32a6,6,0,0,1,0-12H55.06a70.16,70.16,0,0,1,57,29.31l41.71,58.4A58.11,58.11,0,0,0,200.94,178h16.58l-13.76-13.76a6,6,0,0,1,8.48-8.48Zm-92.06-74.41a5.91,5.91,0,0,0,3.48,1.12,6,6,0,0,0,4.89-2.51l1.19-1.67A58.11,58.11,0,0,1,200.94,78h16.58L203.76,91.76a6,6,0,1,0,8.48,8.48l24-24a6,6,0,0,0,0-8.48l-24-24a6,6,0,0,0-8.48,8.48L217.52,66H200.94a70.16,70.16,0,0,0-57,29.31L142.78,97A6,6,0,0,0,144.18,105.35Zm-32.36,45.3a6,6,0,0,0-8.37,1.39l-1.19,1.67A58.11,58.11,0,0,1,55.06,178H32a6,6,0,0,0,0,12H55.06a70.16,70.16,0,0,0,57-29.31l1.19-1.67A6,6,0,0,0,111.82,150.65Z"></path></svg>
                </div>
              </div>
              <div class="image-box mb-6 ">
                <img class="max-w-52 mx-auto" src="./assets/image/products/1.webp" alt="" />
              </div>
              <div class="space-y-5">
                <span class="mb-2 h-8 md:h-10 flex justify-between">
                  <a href="" class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      لپ تاپ ایسوس مدل a342
                    </span>
                    <span class="text-xs text-zinc-500">
                      ASUS a342 plus for work
                    </span>
                  </a>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span class="pt-0.5">
                      <span>
                        (28+)
                      </span>
                      <span>
                        4.3
                      </span>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </div>
                </span>
                <div class="flex items-center gap-x-2">
                  <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                    <div class="line-through">1,350,000</div>
                    <div class="line-through">تومان</div>
                  </div>
                  <div class="flex justify-center gap-x-1 font-semibold text-zinc-800">
                    <div>1,100,000</div>
                    <div>تومان</div>
                  </div>
                </div>
                <a href="" class="flex items-center justify-center gap-x-1 text-sm w-full py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition">
                  خرید محصول
                </a>
              </div>
            </div>
            <div class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl border group">
              <div class="flex justify-between relative">
                <div class="bg-red-500 rounded-full w-8 h-8 pt-1 text-white flex items-center justify-center text-xs">
                    % 7
                  </div>
                <div class="flex flex-col gap-y-2 absolute opacity-0 group-hover:opacity-100 left-0 transition-opacity duration-300 ease-out">
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-red-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-zinc-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M236.24,179.76a6,6,0,0,1,0,8.48l-24,24a6,6,0,0,1-8.48-8.48L217.52,190H200.94a70.16,70.16,0,0,1-57-29.31l-41.71-58.4A58.11,58.11,0,0,0,55.06,78H32a6,6,0,0,1,0-12H55.06a70.16,70.16,0,0,1,57,29.31l41.71,58.4A58.11,58.11,0,0,0,200.94,178h16.58l-13.76-13.76a6,6,0,0,1,8.48-8.48Zm-92.06-74.41a5.91,5.91,0,0,0,3.48,1.12,6,6,0,0,0,4.89-2.51l1.19-1.67A58.11,58.11,0,0,1,200.94,78h16.58L203.76,91.76a6,6,0,1,0,8.48,8.48l24-24a6,6,0,0,0,0-8.48l-24-24a6,6,0,0,0-8.48,8.48L217.52,66H200.94a70.16,70.16,0,0,0-57,29.31L142.78,97A6,6,0,0,0,144.18,105.35Zm-32.36,45.3a6,6,0,0,0-8.37,1.39l-1.19,1.67A58.11,58.11,0,0,1,55.06,178H32a6,6,0,0,0,0,12H55.06a70.16,70.16,0,0,0,57-29.31l1.19-1.67A6,6,0,0,0,111.82,150.65Z"></path></svg>
                </div>
              </div>
              <div class="image-box mb-6 ">
                <img class="max-w-52 mx-auto" src="./assets/image/products/2.webp" alt="" />
              </div>
              <div class="space-y-5">
                <span class="mb-2 h-8 md:h-10 flex justify-between">
                  <a href="" class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      دریل شارژی رگنار
                    </span>
                    <span class="text-xs text-zinc-500">
                      ASUS a342 plus for work
                    </span>
                  </a>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span class="pt-0.5">
                      <span>
                        (45+)
                      </span>
                      <span>
                        4.2
                      </span>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </div>
                </span>
                <div class="flex items-center gap-x-2">
                  <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                    <div class="line-through">2,450,000</div>
                    <div class="line-through">تومان</div>
                  </div>
                  <div class="flex justify-center gap-x-1 font-semibold text-zinc-800">
                    <div>2,100,000</div>
                    <div>تومان</div>
                  </div>
                </div>
                <a href="" class="flex items-center justify-center gap-x-1 text-sm w-full py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition">
                  خرید محصول
                </a>
              </div>
            </div>
            <div class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl border group">
              <div class="flex justify-between relative">
                <div class="bg-red-500 rounded-full w-8 h-8 pt-1 text-white flex items-center justify-center text-xs">
                    % 3
                  </div>
                <div class="flex flex-col gap-y-2 absolute opacity-0 group-hover:opacity-100 left-0 transition-opacity duration-300 ease-out">
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-red-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-zinc-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M236.24,179.76a6,6,0,0,1,0,8.48l-24,24a6,6,0,0,1-8.48-8.48L217.52,190H200.94a70.16,70.16,0,0,1-57-29.31l-41.71-58.4A58.11,58.11,0,0,0,55.06,78H32a6,6,0,0,1,0-12H55.06a70.16,70.16,0,0,1,57,29.31l41.71,58.4A58.11,58.11,0,0,0,200.94,178h16.58l-13.76-13.76a6,6,0,0,1,8.48-8.48Zm-92.06-74.41a5.91,5.91,0,0,0,3.48,1.12,6,6,0,0,0,4.89-2.51l1.19-1.67A58.11,58.11,0,0,1,200.94,78h16.58L203.76,91.76a6,6,0,1,0,8.48,8.48l24-24a6,6,0,0,0,0-8.48l-24-24a6,6,0,0,0-8.48,8.48L217.52,66H200.94a70.16,70.16,0,0,0-57,29.31L142.78,97A6,6,0,0,0,144.18,105.35Zm-32.36,45.3a6,6,0,0,0-8.37,1.39l-1.19,1.67A58.11,58.11,0,0,1,55.06,178H32a6,6,0,0,0,0,12H55.06a70.16,70.16,0,0,0,57-29.31l1.19-1.67A6,6,0,0,0,111.82,150.65Z"></path></svg>
                </div>
              </div>
              <div class="image-box mb-6 ">
                <img class="max-w-52 mx-auto" src="./assets/image/products/3.webp" alt="" />
              </div>
              <div class="space-y-5">
                <span class="mb-2 h-8 md:h-10 flex justify-between">
                  <a href="" class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      ساعت مدل رولکس
                    </span>
                    <span class="text-xs text-zinc-500">
                      ASUS a342 plus for work
                    </span>
                  </a>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span class="pt-0.5">
                      <span>
                        (5+)
                      </span>
                      <span>
                        4.7
                      </span>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </div>
                </span>
                <div class="flex items-center gap-x-2">
                  <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                    <div class="line-through">18,900,000</div>
                    <div class="line-through">تومان</div>
                  </div>
                  <div class="flex justify-center gap-x-1 font-semibold text-zinc-800">
                    <div>15,200,000</div>
                    <div>تومان</div>
                  </div>
                </div>
                <a href="" class="flex items-center justify-center gap-x-1 text-sm w-full py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition">
                  خرید محصول
                </a>
              </div>
            </div>
            <div class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl border group">
              <div class="flex justify-between relative">
                <div class="bg-red-500 rounded-full w-8 h-8 pt-1 text-white flex items-center justify-center text-xs">
                    % 5
                  </div>
                <div class="flex flex-col gap-y-2 absolute opacity-0 group-hover:opacity-100 left-0 transition-opacity duration-300 ease-out">
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-red-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-zinc-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M236.24,179.76a6,6,0,0,1,0,8.48l-24,24a6,6,0,0,1-8.48-8.48L217.52,190H200.94a70.16,70.16,0,0,1-57-29.31l-41.71-58.4A58.11,58.11,0,0,0,55.06,78H32a6,6,0,0,1,0-12H55.06a70.16,70.16,0,0,1,57,29.31l41.71,58.4A58.11,58.11,0,0,0,200.94,178h16.58l-13.76-13.76a6,6,0,0,1,8.48-8.48Zm-92.06-74.41a5.91,5.91,0,0,0,3.48,1.12,6,6,0,0,0,4.89-2.51l1.19-1.67A58.11,58.11,0,0,1,200.94,78h16.58L203.76,91.76a6,6,0,1,0,8.48,8.48l24-24a6,6,0,0,0,0-8.48l-24-24a6,6,0,0,0-8.48,8.48L217.52,66H200.94a70.16,70.16,0,0,0-57,29.31L142.78,97A6,6,0,0,0,144.18,105.35Zm-32.36,45.3a6,6,0,0,0-8.37,1.39l-1.19,1.67A58.11,58.11,0,0,1,55.06,178H32a6,6,0,0,0,0,12H55.06a70.16,70.16,0,0,0,57-29.31l1.19-1.67A6,6,0,0,0,111.82,150.65Z"></path></svg>
                </div>
              </div>
              <div class="image-box mb-6 ">
                <img class="max-w-52 mx-auto" src="./assets/image/products/4.webp" alt="" />
              </div>
              <div class="space-y-5">
                <span class="mb-2 h-8 md:h-10 flex justify-between">
                  <a href="" class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      ساعت مدل اپل
                    </span>
                    <span class="text-xs text-zinc-500">
                      ASUS a342 plus for work
                    </span>
                  </a>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span class="pt-0.5">
                      <span>
                        (3+)
                      </span>
                      <span>
                        4.2
                      </span>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </div>
                </span>
                <div class="flex items-center gap-x-2">
                  <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                    <div class="line-through">2,000,000</div>
                    <div class="line-through">تومان</div>
                  </div>
                  <div class="flex justify-center gap-x-1 font-semibold text-zinc-800">
                    <div>1,230,000</div>
                    <div>تومان</div>
                  </div>
                </div>
                <a href="" class="flex items-center justify-center gap-x-1 text-sm w-full py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition">
                  خرید محصول
                </a>
              </div>
            </div>
            <div class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl border group">
              <div class="flex justify-between relative">
                <div class="bg-red-500 rounded-full w-8 h-8 pt-1 text-white flex items-center justify-center text-xs">
                    % 12
                  </div>
                <div class="flex flex-col gap-y-2 absolute opacity-0 group-hover:opacity-100 left-0 transition-opacity duration-300 ease-out">
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-red-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-zinc-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M236.24,179.76a6,6,0,0,1,0,8.48l-24,24a6,6,0,0,1-8.48-8.48L217.52,190H200.94a70.16,70.16,0,0,1-57-29.31l-41.71-58.4A58.11,58.11,0,0,0,55.06,78H32a6,6,0,0,1,0-12H55.06a70.16,70.16,0,0,1,57,29.31l41.71,58.4A58.11,58.11,0,0,0,200.94,178h16.58l-13.76-13.76a6,6,0,0,1,8.48-8.48Zm-92.06-74.41a5.91,5.91,0,0,0,3.48,1.12,6,6,0,0,0,4.89-2.51l1.19-1.67A58.11,58.11,0,0,1,200.94,78h16.58L203.76,91.76a6,6,0,1,0,8.48,8.48l24-24a6,6,0,0,0,0-8.48l-24-24a6,6,0,0,0-8.48,8.48L217.52,66H200.94a70.16,70.16,0,0,0-57,29.31L142.78,97A6,6,0,0,0,144.18,105.35Zm-32.36,45.3a6,6,0,0,0-8.37,1.39l-1.19,1.67A58.11,58.11,0,0,1,55.06,178H32a6,6,0,0,0,0,12H55.06a70.16,70.16,0,0,0,57-29.31l1.19-1.67A6,6,0,0,0,111.82,150.65Z"></path></svg>
                </div>
              </div>
              <div class="image-box mb-6 ">
                <img class="max-w-52 mx-auto" src="./assets/image/products/5.webp" alt="" />
              </div>
              <div class="space-y-5">
                <span class="mb-2 h-8 md:h-10 flex justify-between">
                  <a href="" class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      هندزفری بلوتوثی مدل اپل
                    </span>
                    <span class="text-xs text-zinc-500">
                      ASUS a342 plus for work
                    </span>
                  </a>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span class="pt-0.5">
                      <span>
                        (15+)
                      </span>
                      <span>
                        4.0
                      </span>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </div>
                </span>
                <div class="flex items-center gap-x-2">
                  <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                    <div class="line-through">5,300,000</div>
                    <div class="line-through">تومان</div>
                  </div>
                  <div class="flex justify-center gap-x-1 font-semibold text-zinc-800">
                    <div>4,900,000</div>
                    <div>تومان</div>
                  </div>
                </div>
                <a href="" class="flex items-center justify-center gap-x-1 text-sm w-full py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition">
                  خرید محصول
                </a>
              </div>
            </div>
            <div class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl border group">
              <div class="flex justify-between relative">
                <div class="bg-red-500 rounded-full w-8 h-8 pt-1 text-white flex items-center justify-center text-xs">
                    % 4
                  </div>
                <div class="flex flex-col gap-y-2 absolute opacity-0 group-hover:opacity-100 left-0 transition-opacity duration-300 ease-out">
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-red-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-zinc-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M236.24,179.76a6,6,0,0,1,0,8.48l-24,24a6,6,0,0,1-8.48-8.48L217.52,190H200.94a70.16,70.16,0,0,1-57-29.31l-41.71-58.4A58.11,58.11,0,0,0,55.06,78H32a6,6,0,0,1,0-12H55.06a70.16,70.16,0,0,1,57,29.31l41.71,58.4A58.11,58.11,0,0,0,200.94,178h16.58l-13.76-13.76a6,6,0,0,1,8.48-8.48Zm-92.06-74.41a5.91,5.91,0,0,0,3.48,1.12,6,6,0,0,0,4.89-2.51l1.19-1.67A58.11,58.11,0,0,1,200.94,78h16.58L203.76,91.76a6,6,0,1,0,8.48,8.48l24-24a6,6,0,0,0,0-8.48l-24-24a6,6,0,0,0-8.48,8.48L217.52,66H200.94a70.16,70.16,0,0,0-57,29.31L142.78,97A6,6,0,0,0,144.18,105.35Zm-32.36,45.3a6,6,0,0,0-8.37,1.39l-1.19,1.67A58.11,58.11,0,0,1,55.06,178H32a6,6,0,0,0,0,12H55.06a70.16,70.16,0,0,0,57-29.31l1.19-1.67A6,6,0,0,0,111.82,150.65Z"></path></svg>
                </div>
              </div>
              <div class="image-box mb-6 ">
                <img class="max-w-52 mx-auto" src="./assets/image/products/6.webp" alt="" />
              </div>
              <div class="space-y-5">
                <span class="mb-2 h-8 md:h-10 flex justify-between">
                  <a href="" class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      پروژکتور اپاندا
                    </span>
                    <span class="text-xs text-zinc-500">
                      ASUS a342 plus for work
                    </span>
                  </a>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span class="pt-0.5">
                      <span>
                        (56+)
                      </span>
                      <span>
                        4.8
                      </span>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </div>
                </span>
                <div class="flex items-center gap-x-2">
                  <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                    <div class="line-through">27,330,000</div>
                    <div class="line-through">تومان</div>
                  </div>
                  <div class="flex justify-center gap-x-1 font-semibold text-zinc-800">
                    <div>25,600,000</div>
                    <div>تومان</div>
                  </div>
                </div>
                <a href="" class="flex items-center justify-center gap-x-1 text-sm w-full py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition">
                  خرید محصول
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- category -->
    <div class="pb-6">
      <div class="flex justify-center px-3 md:px-10 items-center">
        <div class="text-gray-900 pb-2 mb-5 text-2xl font-extrabold">
          محبوب ترین دسته ها
        </div>
      </div>
      <div class="flex flex-wrap gap-4 md:gap-x-8 justify-center">
        <a class="border-2 border-gray-300 hover:border-red-600 rounded-full hover:shadow-md group hover:bg-red-600 hover:text-white transition duration-200 w-28 h-28 opacity-90 text-zinc-800 text-sm flex flex-col gap-y-2 items-center justify-center" href="">
          <svg class="fill-gray-900 group-hover:fill-white transition duration-200" xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="#000000" viewBox="0 0 256 256"><path d="M232,96a7.89,7.89,0,0,0-.3-2.2L217.35,43.6A16.07,16.07,0,0,0,202,32H54A16.07,16.07,0,0,0,38.65,43.6L24.31,93.8A7.89,7.89,0,0,0,24,96h0v16a40,40,0,0,0,16,32v72a8,8,0,0,0,8,8H208a8,8,0,0,0,8-8V144a40,40,0,0,0,16-32V96ZM54,48H202l11.42,40H42.61Zm50,56h48v8a24,24,0,0,1-48,0Zm-16,0v8a24,24,0,0,1-35.12,21.26,7.88,7.88,0,0,0-1.82-1.06A24,24,0,0,1,40,112v-8ZM200,208H56V151.2a40.57,40.57,0,0,0,8,.8,40,40,0,0,0,32-16,40,40,0,0,0,64,0,40,40,0,0,0,32,16,40.57,40.57,0,0,0,8-.8Zm4.93-75.8a8.08,8.08,0,0,0-1.8,1.05A24,24,0,0,1,168,112v-8h48v8A24,24,0,0,1,204.93,132.2Z"></path></svg>
            سوپر مارکت
        </a>
        <a class="border-2 border-gray-300 hover:border-red-600 rounded-full hover:shadow-md group hover:bg-red-600 hover:text-white transition duration-200 w-28 h-28 opacity-90 text-zinc-800 text-sm flex flex-col gap-y-2 items-center justify-center" href="">
          <svg class="fill-gray-900 group-hover:fill-white transition duration-200" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M219.31,108.68l-80-80a16,16,0,0,0-22.62,0l-80,80A15.87,15.87,0,0,0,32,120v96a8,8,0,0,0,8,8h64a8,8,0,0,0,8-8V160h32v56a8,8,0,0,0,8,8h64a8,8,0,0,0,8-8V120A15.87,15.87,0,0,0,219.31,108.68ZM208,208H160V152a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8v56H48V120l80-80,80,80Z"></path></svg>
            لوازم خانگی
        </a>
        <a class="border-2 border-gray-300 hover:border-red-600 rounded-full hover:shadow-md group hover:bg-red-600 hover:text-white transition duration-200 w-28 h-28 opacity-90 text-zinc-800 text-sm flex flex-col gap-y-2 items-center justify-center" href="">
          <svg class="fill-gray-900 group-hover:fill-white transition duration-200" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M200,40a8,8,0,0,0,0,16,16,16,0,0,1,16,16v56H40V72A16,16,0,0,1,56,56a8,8,0,0,0,0-16A32,32,0,0,0,24,72v92a44,44,0,0,0,88,0V144h32v20a44,44,0,0,0,88,0V72A32,32,0,0,0,200,40Zm12.63,137.31L179.31,144H216v20A27.8,27.8,0,0,1,212.63,177.31ZM40,164V147.31l41.31,41.32A28,28,0,0,1,40,164Zm56,0a27.8,27.8,0,0,1-3.37,13.31L59.31,144H96Zm64,0V147.31l41.31,41.32A28,28,0,0,1,160,164Z"></path></svg>
            عینک
        </a>
        <a class="border-2 border-gray-300 hover:border-red-600 rounded-full hover:shadow-md group hover:bg-red-600 hover:text-white transition duration-200 w-28 h-28 opacity-90 text-zinc-800 text-sm flex flex-col gap-y-2 items-center justify-center" href="">
          <svg class="fill-gray-900 group-hover:fill-white transition duration-200" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M200,40H179.31L165.66,26.34h0A8,8,0,0,0,160,24H96a8,8,0,0,0-5.66,2.34h0L76.69,40H56A16,16,0,0,0,40,56V208a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V56A16,16,0,0,0,200,40ZM128,65.58,111,40h34.1Zm33.24-21L168,51.31V104L138.57,78.56ZM88,51.31l6.76-6.75,22.67,34L88,104ZM56,56H72v48a15.85,15.85,0,0,0,9.21,14.49A16.1,16.1,0,0,0,88,120a15.89,15.89,0,0,0,10.2-3.73.52.52,0,0,0,.11-.1L120,97.48V208H56ZM200,208H136V97.48l21.65,18.7a.52.52,0,0,0,.11.1A15.89,15.89,0,0,0,168,120a16.1,16.1,0,0,0,6.83-1.54A15.85,15.85,0,0,0,184,104V56h16Z"></path></svg>
            پوشاک
        </a>
        <a class="border-2 border-gray-300 hover:border-red-600 rounded-full hover:shadow-md group hover:bg-red-600 hover:text-white transition duration-200 w-28 h-28 opacity-90 text-zinc-800 text-sm flex flex-col gap-y-2 items-center justify-center" href="">
          <svg class="fill-gray-900 group-hover:fill-white transition duration-200" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M176,16H80A24,24,0,0,0,56,40V216a24,24,0,0,0,24,24h96a24,24,0,0,0,24-24V40A24,24,0,0,0,176,16Zm8,200a8,8,0,0,1-8,8H80a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h96a8,8,0,0,1,8,8ZM168,56a8,8,0,0,1-8,8H96a8,8,0,0,1,0-16h64A8,8,0,0,1,168,56Z"></path></svg>
            موبایل
        </a>
        <a class="border-2 border-gray-300 hover:border-red-600 rounded-full hover:shadow-md group hover:bg-red-600 hover:text-white transition duration-200 w-28 h-28 opacity-90 text-zinc-800 text-sm flex flex-col gap-y-2 items-center justify-center" href="">
          <svg class="fill-gray-900 group-hover:fill-white transition duration-200" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M200,88a32,32,0,1,0-32,32A32,32,0,0,0,200,88Zm-32,16a16,16,0,1,1,16-16A16,16,0,0,1,168,104Zm9.42,102.62L209,137.07A64,64,0,0,0,168,24a8.4,8.4,0,0,0-1.32.11L29.37,47A16,16,0,0,0,16,62.78v50.44A16,16,0,0,0,29.37,129L128,145.44V200a16,16,0,0,0,16,16,40,40,0,0,0,40,40h16a8,8,0,0,0,0-16H184a24,24,0,0,1-24-24h2.85A16,16,0,0,0,177.42,206.62ZM32,62.78,168.64,40a48,48,0,0,1,0,96L32,113.23Zm134.68,89.11A8.4,8.4,0,0,0,168,152a63.9,63.9,0,0,0,17.82-2.54l-23,50.54H144V148.11Z"></path></svg>
            لوازم آرایشی
        </a>
        <a class="border-2 border-gray-300 hover:border-red-600 rounded-full hover:shadow-md group hover:bg-red-600 hover:text-white transition duration-200 w-28 h-28 opacity-90 text-zinc-800 text-sm flex flex-col gap-y-2 items-center justify-center" href="">
          <svg class="fill-gray-900 group-hover:fill-white transition duration-200" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M226.76,69a8,8,0,0,0-12.84-2.88l-40.3,37.19-17.23-3.7-3.7-17.23,37.19-40.3A8,8,0,0,0,187,29.24,72,72,0,0,0,88,96,72.34,72.34,0,0,0,94,124.94L33.79,177c-.15.12-.29.26-.43.39a32,32,0,0,0,45.26,45.26c.13-.13.27-.28.39-.42L131.06,162A72,72,0,0,0,232,96,71.56,71.56,0,0,0,226.76,69ZM160,152a56.14,56.14,0,0,1-27.07-7,8,8,0,0,0-9.92,1.77L67.11,211.51a16,16,0,0,1-22.62-22.62L109.18,133a8,8,0,0,0,1.77-9.93,56,56,0,0,1,58.36-82.31l-31.2,33.81a8,8,0,0,0-1.94,7.1L141.83,108a8,8,0,0,0,6.14,6.14l26.35,5.66a8,8,0,0,0,7.1-1.94l33.81-31.2A56.06,56.06,0,0,1,160,152Z"></path></svg>
            ابزار آلات
        </a>
      </div>
    </div>
    <!-- product sldier 2 -->
    <div class="my-10 px-3">
      <!-- TOP SLIDER -->
      <div class="flex justify-between items-center pb-3">
        <div class="px-4 py-2 flex justify-center items-center gap-x-1 font-bold md:text-lg text-zinc-700 relative">
          <div class="z-10">
            محبوب ترین ها
          </div>
          <div class="w-20 h-2 bg-red-300 shadow-lg absolute right-5 top-5 rounded-sm">
          </div>
        </div>
        <a href="">
          <div class="transition px-4 py-2 flex justify-center items-center text-zinc-700 hover:text-zinc-600">
            مشاهده همه
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#292929" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
          </div>
        </a>
      </div>
      <!-- SLIDER -->
      <div class="containerPSlider swiper">
        <div class="product-slider1">
          <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl border group">
              <div class="flex justify-between relative">
                <div class="bg-red-500 rounded-full w-8 h-8 pt-1 text-white flex items-center justify-center text-xs">
                    % 10
                  </div>
                <div class="flex flex-col gap-y-2 absolute opacity-0 group-hover:opacity-100 left-0 transition-opacity duration-300 ease-out">
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-red-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-zinc-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M236.24,179.76a6,6,0,0,1,0,8.48l-24,24a6,6,0,0,1-8.48-8.48L217.52,190H200.94a70.16,70.16,0,0,1-57-29.31l-41.71-58.4A58.11,58.11,0,0,0,55.06,78H32a6,6,0,0,1,0-12H55.06a70.16,70.16,0,0,1,57,29.31l41.71,58.4A58.11,58.11,0,0,0,200.94,178h16.58l-13.76-13.76a6,6,0,0,1,8.48-8.48Zm-92.06-74.41a5.91,5.91,0,0,0,3.48,1.12,6,6,0,0,0,4.89-2.51l1.19-1.67A58.11,58.11,0,0,1,200.94,78h16.58L203.76,91.76a6,6,0,1,0,8.48,8.48l24-24a6,6,0,0,0,0-8.48l-24-24a6,6,0,0,0-8.48,8.48L217.52,66H200.94a70.16,70.16,0,0,0-57,29.31L142.78,97A6,6,0,0,0,144.18,105.35Zm-32.36,45.3a6,6,0,0,0-8.37,1.39l-1.19,1.67A58.11,58.11,0,0,1,55.06,178H32a6,6,0,0,0,0,12H55.06a70.16,70.16,0,0,0,57-29.31l1.19-1.67A6,6,0,0,0,111.82,150.65Z"></path></svg>
                </div>
              </div>
              <div class="image-box mb-6 ">
                <img class="max-w-52 mx-auto" src="./assets/image/products/1.webp" alt="" />
              </div>
              <div class="space-y-5">
                <span class="mb-2 h-8 md:h-10 flex justify-between">
                  <a href="" class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      لپ تاپ ایسوس مدل a342
                    </span>
                    <span class="text-xs text-zinc-500">
                      ASUS a342 plus for work
                    </span>
                  </a>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span class="pt-0.5">
                      <span>
                        (28+)
                      </span>
                      <span>
                        4.3
                      </span>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </div>
                </span>
                <div class="flex items-center gap-x-2">
                  <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                    <div class="line-through">1,350,000</div>
                    <div class="line-through">تومان</div>
                  </div>
                  <div class="flex justify-center gap-x-1 font-semibold text-zinc-800">
                    <div>1,100,000</div>
                    <div>تومان</div>
                  </div>
                </div>
                <a href="" class="flex items-center justify-center gap-x-1 text-sm w-full py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition">
                  خرید محصول
                </a>
              </div>
            </div>
            <div class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl border group">
              <div class="flex justify-between relative">
                <div class="bg-red-500 rounded-full w-8 h-8 pt-1 text-white flex items-center justify-center text-xs">
                    % 7
                  </div>
                <div class="flex flex-col gap-y-2 absolute opacity-0 group-hover:opacity-100 left-0 transition-opacity duration-300 ease-out">
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-red-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-zinc-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M236.24,179.76a6,6,0,0,1,0,8.48l-24,24a6,6,0,0,1-8.48-8.48L217.52,190H200.94a70.16,70.16,0,0,1-57-29.31l-41.71-58.4A58.11,58.11,0,0,0,55.06,78H32a6,6,0,0,1,0-12H55.06a70.16,70.16,0,0,1,57,29.31l41.71,58.4A58.11,58.11,0,0,0,200.94,178h16.58l-13.76-13.76a6,6,0,0,1,8.48-8.48Zm-92.06-74.41a5.91,5.91,0,0,0,3.48,1.12,6,6,0,0,0,4.89-2.51l1.19-1.67A58.11,58.11,0,0,1,200.94,78h16.58L203.76,91.76a6,6,0,1,0,8.48,8.48l24-24a6,6,0,0,0,0-8.48l-24-24a6,6,0,0,0-8.48,8.48L217.52,66H200.94a70.16,70.16,0,0,0-57,29.31L142.78,97A6,6,0,0,0,144.18,105.35Zm-32.36,45.3a6,6,0,0,0-8.37,1.39l-1.19,1.67A58.11,58.11,0,0,1,55.06,178H32a6,6,0,0,0,0,12H55.06a70.16,70.16,0,0,0,57-29.31l1.19-1.67A6,6,0,0,0,111.82,150.65Z"></path></svg>
                </div>
              </div>
              <div class="image-box mb-6 ">
                <img class="max-w-52 mx-auto" src="./assets/image/products/2.webp" alt="" />
              </div>
              <div class="space-y-5">
                <span class="mb-2 h-8 md:h-10 flex justify-between">
                  <a href="" class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      دریل شارژی رگنار
                    </span>
                    <span class="text-xs text-zinc-500">
                      ASUS a342 plus for work
                    </span>
                  </a>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span class="pt-0.5">
                      <span>
                        (45+)
                      </span>
                      <span>
                        4.2
                      </span>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </div>
                </span>
                <div class="flex items-center gap-x-2">
                  <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                    <div class="line-through">2,450,000</div>
                    <div class="line-through">تومان</div>
                  </div>
                  <div class="flex justify-center gap-x-1 font-semibold text-zinc-800">
                    <div>2,100,000</div>
                    <div>تومان</div>
                  </div>
                </div>
                <a href="" class="flex items-center justify-center gap-x-1 text-sm w-full py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition">
                  خرید محصول
                </a>
              </div>
            </div>
            <div class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl border group">
              <div class="flex justify-between relative">
                <div class="bg-red-500 rounded-full w-8 h-8 pt-1 text-white flex items-center justify-center text-xs">
                    % 3
                  </div>
                <div class="flex flex-col gap-y-2 absolute opacity-0 group-hover:opacity-100 left-0 transition-opacity duration-300 ease-out">
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-red-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-zinc-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M236.24,179.76a6,6,0,0,1,0,8.48l-24,24a6,6,0,0,1-8.48-8.48L217.52,190H200.94a70.16,70.16,0,0,1-57-29.31l-41.71-58.4A58.11,58.11,0,0,0,55.06,78H32a6,6,0,0,1,0-12H55.06a70.16,70.16,0,0,1,57,29.31l41.71,58.4A58.11,58.11,0,0,0,200.94,178h16.58l-13.76-13.76a6,6,0,0,1,8.48-8.48Zm-92.06-74.41a5.91,5.91,0,0,0,3.48,1.12,6,6,0,0,0,4.89-2.51l1.19-1.67A58.11,58.11,0,0,1,200.94,78h16.58L203.76,91.76a6,6,0,1,0,8.48,8.48l24-24a6,6,0,0,0,0-8.48l-24-24a6,6,0,0,0-8.48,8.48L217.52,66H200.94a70.16,70.16,0,0,0-57,29.31L142.78,97A6,6,0,0,0,144.18,105.35Zm-32.36,45.3a6,6,0,0,0-8.37,1.39l-1.19,1.67A58.11,58.11,0,0,1,55.06,178H32a6,6,0,0,0,0,12H55.06a70.16,70.16,0,0,0,57-29.31l1.19-1.67A6,6,0,0,0,111.82,150.65Z"></path></svg>
                </div>
              </div>
              <div class="image-box mb-6 ">
                <img class="max-w-52 mx-auto" src="./assets/image/products/3.webp" alt="" />
              </div>
              <div class="space-y-5">
                <span class="mb-2 h-8 md:h-10 flex justify-between">
                  <a href="" class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      ساعت مدل رولکس
                    </span>
                    <span class="text-xs text-zinc-500">
                      ASUS a342 plus for work
                    </span>
                  </a>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span class="pt-0.5">
                      <span>
                        (5+)
                      </span>
                      <span>
                        4.7
                      </span>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </div>
                </span>
                <div class="flex items-center gap-x-2">
                  <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                    <div class="line-through">18,900,000</div>
                    <div class="line-through">تومان</div>
                  </div>
                  <div class="flex justify-center gap-x-1 font-semibold text-zinc-800">
                    <div>15,200,000</div>
                    <div>تومان</div>
                  </div>
                </div>
                <a href="" class="flex items-center justify-center gap-x-1 text-sm w-full py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition">
                  خرید محصول
                </a>
              </div>
            </div>
            <div class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl border group">
              <div class="flex justify-between relative">
                <div class="bg-red-500 rounded-full w-8 h-8 pt-1 text-white flex items-center justify-center text-xs">
                    % 5
                  </div>
                <div class="flex flex-col gap-y-2 absolute opacity-0 group-hover:opacity-100 left-0 transition-opacity duration-300 ease-out">
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-red-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-zinc-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M236.24,179.76a6,6,0,0,1,0,8.48l-24,24a6,6,0,0,1-8.48-8.48L217.52,190H200.94a70.16,70.16,0,0,1-57-29.31l-41.71-58.4A58.11,58.11,0,0,0,55.06,78H32a6,6,0,0,1,0-12H55.06a70.16,70.16,0,0,1,57,29.31l41.71,58.4A58.11,58.11,0,0,0,200.94,178h16.58l-13.76-13.76a6,6,0,0,1,8.48-8.48Zm-92.06-74.41a5.91,5.91,0,0,0,3.48,1.12,6,6,0,0,0,4.89-2.51l1.19-1.67A58.11,58.11,0,0,1,200.94,78h16.58L203.76,91.76a6,6,0,1,0,8.48,8.48l24-24a6,6,0,0,0,0-8.48l-24-24a6,6,0,0,0-8.48,8.48L217.52,66H200.94a70.16,70.16,0,0,0-57,29.31L142.78,97A6,6,0,0,0,144.18,105.35Zm-32.36,45.3a6,6,0,0,0-8.37,1.39l-1.19,1.67A58.11,58.11,0,0,1,55.06,178H32a6,6,0,0,0,0,12H55.06a70.16,70.16,0,0,0,57-29.31l1.19-1.67A6,6,0,0,0,111.82,150.65Z"></path></svg>
                </div>
              </div>
              <div class="image-box mb-6 ">
                <img class="max-w-52 mx-auto" src="./assets/image/products/4.webp" alt="" />
              </div>
              <div class="space-y-5">
                <span class="mb-2 h-8 md:h-10 flex justify-between">
                  <a href="" class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      ساعت مدل اپل
                    </span>
                    <span class="text-xs text-zinc-500">
                      ASUS a342 plus for work
                    </span>
                  </a>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span class="pt-0.5">
                      <span>
                        (3+)
                      </span>
                      <span>
                        4.2
                      </span>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </div>
                </span>
                <div class="flex items-center gap-x-2">
                  <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                    <div class="line-through">2,000,000</div>
                    <div class="line-through">تومان</div>
                  </div>
                  <div class="flex justify-center gap-x-1 font-semibold text-zinc-800">
                    <div>1,230,000</div>
                    <div>تومان</div>
                  </div>
                </div>
                <a href="" class="flex items-center justify-center gap-x-1 text-sm w-full py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition">
                  خرید محصول
                </a>
              </div>
            </div>
            <div class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl border group">
              <div class="flex justify-between relative">
                <div class="bg-red-500 rounded-full w-8 h-8 pt-1 text-white flex items-center justify-center text-xs">
                    % 12
                  </div>
                <div class="flex flex-col gap-y-2 absolute opacity-0 group-hover:opacity-100 left-0 transition-opacity duration-300 ease-out">
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-red-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-zinc-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M236.24,179.76a6,6,0,0,1,0,8.48l-24,24a6,6,0,0,1-8.48-8.48L217.52,190H200.94a70.16,70.16,0,0,1-57-29.31l-41.71-58.4A58.11,58.11,0,0,0,55.06,78H32a6,6,0,0,1,0-12H55.06a70.16,70.16,0,0,1,57,29.31l41.71,58.4A58.11,58.11,0,0,0,200.94,178h16.58l-13.76-13.76a6,6,0,0,1,8.48-8.48Zm-92.06-74.41a5.91,5.91,0,0,0,3.48,1.12,6,6,0,0,0,4.89-2.51l1.19-1.67A58.11,58.11,0,0,1,200.94,78h16.58L203.76,91.76a6,6,0,1,0,8.48,8.48l24-24a6,6,0,0,0,0-8.48l-24-24a6,6,0,0,0-8.48,8.48L217.52,66H200.94a70.16,70.16,0,0,0-57,29.31L142.78,97A6,6,0,0,0,144.18,105.35Zm-32.36,45.3a6,6,0,0,0-8.37,1.39l-1.19,1.67A58.11,58.11,0,0,1,55.06,178H32a6,6,0,0,0,0,12H55.06a70.16,70.16,0,0,0,57-29.31l1.19-1.67A6,6,0,0,0,111.82,150.65Z"></path></svg>
                </div>
              </div>
              <div class="image-box mb-6 ">
                <img class="max-w-52 mx-auto" src="./assets/image/products/5.webp" alt="" />
              </div>
              <div class="space-y-5">
                <span class="mb-2 h-8 md:h-10 flex justify-between">
                  <a href="" class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      هندزفری بلوتوثی مدل اپل
                    </span>
                    <span class="text-xs text-zinc-500">
                      ASUS a342 plus for work
                    </span>
                  </a>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span class="pt-0.5">
                      <span>
                        (15+)
                      </span>
                      <span>
                        4.0
                      </span>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </div>
                </span>
                <div class="flex items-center gap-x-2">
                  <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                    <div class="line-through">5,300,000</div>
                    <div class="line-through">تومان</div>
                  </div>
                  <div class="flex justify-center gap-x-1 font-semibold text-zinc-800">
                    <div>4,900,000</div>
                    <div>تومان</div>
                  </div>
                </div>
                <a href="" class="flex items-center justify-center gap-x-1 text-sm w-full py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition">
                  خرید محصول
                </a>
              </div>
            </div>
            <div class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl border group">
              <div class="flex justify-between relative">
                <div class="bg-red-500 rounded-full w-8 h-8 pt-1 text-white flex items-center justify-center text-xs">
                    % 4
                  </div>
                <div class="flex flex-col gap-y-2 absolute opacity-0 group-hover:opacity-100 left-0 transition-opacity duration-300 ease-out">
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-red-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                  <svg class="bg-gray-200 rounded-full p-1 hover:fill-zinc-500 transition cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#2b2b2b" viewBox="0 0 256 256"><path d="M236.24,179.76a6,6,0,0,1,0,8.48l-24,24a6,6,0,0,1-8.48-8.48L217.52,190H200.94a70.16,70.16,0,0,1-57-29.31l-41.71-58.4A58.11,58.11,0,0,0,55.06,78H32a6,6,0,0,1,0-12H55.06a70.16,70.16,0,0,1,57,29.31l41.71,58.4A58.11,58.11,0,0,0,200.94,178h16.58l-13.76-13.76a6,6,0,0,1,8.48-8.48Zm-92.06-74.41a5.91,5.91,0,0,0,3.48,1.12,6,6,0,0,0,4.89-2.51l1.19-1.67A58.11,58.11,0,0,1,200.94,78h16.58L203.76,91.76a6,6,0,1,0,8.48,8.48l24-24a6,6,0,0,0,0-8.48l-24-24a6,6,0,0,0-8.48,8.48L217.52,66H200.94a70.16,70.16,0,0,0-57,29.31L142.78,97A6,6,0,0,0,144.18,105.35Zm-32.36,45.3a6,6,0,0,0-8.37,1.39l-1.19,1.67A58.11,58.11,0,0,1,55.06,178H32a6,6,0,0,0,0,12H55.06a70.16,70.16,0,0,0,57-29.31l1.19-1.67A6,6,0,0,0,111.82,150.65Z"></path></svg>
                </div>
              </div>
              <div class="image-box mb-6 ">
                <img class="max-w-52 mx-auto" src="./assets/image/products/6.webp" alt="" />
              </div>
              <div class="space-y-5">
                <span class="mb-2 h-8 md:h-10 flex justify-between">
                  <a href="" class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      پروژکتور اپاندا
                    </span>
                    <span class="text-xs text-zinc-500">
                      ASUS a342 plus for work
                    </span>
                  </a>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span class="pt-0.5">
                      <span>
                        (56+)
                      </span>
                      <span>
                        4.8
                      </span>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </div>
                </span>
                <div class="flex items-center gap-x-2">
                  <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                    <div class="line-through">27,330,000</div>
                    <div class="line-through">تومان</div>
                  </div>
                  <div class="flex justify-center gap-x-1 font-semibold text-zinc-800">
                    <div>25,600,000</div>
                    <div>تومان</div>
                  </div>
                </div>
                <a href="" class="flex items-center justify-center gap-x-1 text-sm w-full py-2 px-2 rounded-lg text-white bg-red-500 hover:bg-red-400 transition">
                  خرید محصول
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- suggested my view -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 bg-white my-10">
      <div class="bg-white p-3 rounded-tl-xl rounded-tr-xl sm:rounded-tl-none sm:rounded-tr-xl lg:rounded-r-xl sm:border-l border">
        <div class="flex flex-col gap-y-2 mb-5">
          <div class="text-zinc-700">هدفون، هدست و هندزفری</div>
          <div class="text-zinc-400 text-xs">بر اساس بازدیدهای شما</div>
        </div>
        <div class="grid grid-cols-2">
          <div class="border-l border-b py-2"><a href="#"><img class="max-w-[130px] mx-auto" src="./assets/image/suggested/1.webp" alt=""></a></div>
          <div class="border-b py-2"><a href="#"><img class="max-w-[130px] mx-auto" src="./assets/image/suggested/2.webp" alt=""></a></div>
          <div class="border-l py-2"><a href="#"><img class="max-w-[130px] mx-auto" src="./assets/image/suggested/3.webp" alt=""></a></div>
          <div class="py-2"><a href="#"><img class="max-w-[130px] mx-auto" src="./assets/image/suggested/4.webp" alt=""></a></div>
        </div>
        <div class="flex justify-center text-sm text-red-500 hover:text-red-600 transition mt-5"><a href="#">مشاهده همه</a></div>
      </div>
      <div class="bg-white p-3 sm:border-l border-x sm:border-r-0 sm:border-t sm:rounded-tl-xl border-b lg:border-l-0 lg:rounded-tl-none">
        <div class="flex flex-col gap-y-2 mb-5">
          <div class="text-zinc-700">گوشی موبایل</div>
          <div class="text-zinc-400 text-xs">بر اساس بازدیدهای شما</div>
        </div>
        <div class="grid grid-cols-2">
          <div class="border-l border-b py-2"><a href="#"><img class="max-w-[130px] mx-auto" src="./assets/image/suggested/5.webp" alt=""></a></div>
          <div class="border-b py-2"><a href="#"><img class="max-w-[130px] mx-auto" src="./assets/image/suggested/6.webp" alt=""></a></div>
          <div class="border-l py-2"><a href="#"><img class="max-w-[130px] mx-auto" src="./assets/image/suggested/7.webp" alt=""></a></div>
          <div class="py-2"><a href="#"><img class="max-w-[130px] mx-auto" src="./assets/image/suggested/8.webp" alt=""></a></div>
        </div>
        <div class="flex justify-center text-sm text-red-500 hover:text-red-600 transition mt-5"><a href="#">مشاهده همه</a></div>
      </div>
      <div class="bg-white p-3 border-x sm:border-l-0 sm:rounded-br-xl border-b lg:border-t lg:rounded-br-none">
        <div class="flex flex-col gap-y-2 mb-5">
          <div class="text-zinc-700">لپ تاپ و مک بوک</div>
          <div class="text-zinc-400 text-xs">بر اساس بازدیدهای شما</div>
        </div>
        <div class="grid grid-cols-2">
          <div class="border-l border-b py-2"><a href="#"><img class="max-w-[130px] mx-auto" src="./assets/image/suggested/9.webp" alt=""></a></div>
          <div class="border-b py-2"><a href="#"><img class="max-w-[130px] mx-auto" src="./assets/image/suggested/10.webp" alt=""></a></div>
          <div class="border-l py-2"><a href="#"><img class="max-w-[130px] mx-auto" src="./assets/image/suggested/11.webp" alt=""></a></div>
          <div class="py-2"><a href="#"><img class="max-w-[130px] mx-auto" src="./assets/image/suggested/12.webp" alt=""></a></div>
        </div>
        <div class="flex justify-center text-sm text-red-500 hover:text-red-600 transition mt-5"><a href="#">مشاهده همه</a></div>
      </div>
      <div class="bg-white p-3 rounded-bl-xl rounded-br-xl sm:rounded-br-none border-x border-b lg:border-t lg:rounded-tl-xl">
        <div class="flex flex-col gap-y-2 mb-5">
          <div class="text-zinc-700">ساعت هوشمند</div>
          <div class="text-zinc-400 text-xs">بر اساس بازدیدهای شما</div>
        </div>
        <div class="grid grid-cols-2">
          <div class="border-l border-b py-2"><a href="#"><img class="max-w-[130px] mx-auto" src="./assets/image/suggested/13.webp" alt=""></a></div>
          <div class="border-b py-2"><a href="#"><img class="max-w-[130px] mx-auto" src="./assets/image/suggested/14.webp" alt=""></a></div>
          <div class="border-l py-2"><a href="#"><img class="max-w-[130px] mx-auto" src="./assets/image/suggested/15.webp" alt=""></a></div>
          <div class="py-2"><a href="#"><img class="max-w-[130px] mx-auto" src="./assets/image/suggested/16.webp" alt=""></a></div>
        </div>
        <div class="flex justify-center text-sm text-red-500 hover:text-red-600 transition mt-5"><a href="#">مشاهده همه</a></div>
      </div>
    </div>
    <!-- section blog -->
    <div class="rounded-2xl mx-auto text-gray-100">
      <!-- top blog -->
      <div class="flex justify-between px-5 md:px-10 items-center bg-white py-3 rounded-xl drop-shadow-lg mb-5">
        <div class="px-4 py-2 flex justify-center items-center gap-x-1 text-sm text-zinc-700">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#2e2e2e" viewBox="0 0 256 256"><path d="M104,34H56A14,14,0,0,0,42,48V208a14,14,0,0,0,14,14h48a14,14,0,0,0,14-14V48A14,14,0,0,0,104,34ZM54,78h52V178H54Zm2-32h48a2,2,0,0,1,2,2V66H54V48A2,2,0,0,1,56,46Zm48,164H56a2,2,0,0,1-2-2V190h52v18A2,2,0,0,1,104,210Zm125.7-15L196.51,37.16a14,14,0,0,0-16.63-10.85L133.07,36.37A14.09,14.09,0,0,0,122.3,53l33.19,157.81a14,14,0,0,0,6.1,8.9,13.85,13.85,0,0,0,7.57,2.26,13.55,13.55,0,0,0,3-.32l46.81-10.05A14.09,14.09,0,0,0,229.7,195Zm-82.81-83.32,50.73-10.9,14.12,67.16L161,178.81Zm-6.63-31.56L191,69.19,195.15,89l-50.73,10.9Zm-4.66-32,46.8-10.05a2.18,2.18,0,0,1,.42,0,1.89,1.89,0,0,1,1.05.32,2,2,0,0,1,.89,1.31l3.75,17.82L137.79,68.34l-3.74-17.78A2.07,2.07,0,0,1,135.6,48.1Zm80.81,151.8L169.6,210a1.92,1.92,0,0,1-1.47-.27,2,2,0,0,1-.89-1.31l-3.75-17.82,50.72-10.9L218,197.43A2.07,2.07,0,0,1,216.41,199.9Z"></path></svg>
          <span>
            خواندنی ها
          </span>
        </div>
        <a href="">
          <div class="transition px-4 py-2 flex justify-center items-center text-sm text-zinc-700 hover:text-zinc-600">
            مشاهده همه
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#292929" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
          </div>
        </a>
      </div>
      <!-- main blog -->
      <div class="grid grid-cols-1 gap-5 lg:grid-cols-4 sm:grid-cols-2">
        <div class="relative flex items-end justify-start w-full text-left bg-center bg-cover group">
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
        <div class="relative flex items-end justify-start w-full text-left bg-center bg-cover group">
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
        <div class="relative flex items-end justify-start w-full text-left bg-center bg-cover group">
          <img class="rounded-xl" src="./assets/image/blog/3.jpg" alt="">
          <div class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b via-transparent from-gray-900 to-gray-900 rounded-xl"></div>
          <div class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3">
            <a rel="noopener noreferrer" href="#" class="px-3 py-2 text-xs font-semibold tracki uppercase text-gray-100 bgundefined">
              کالای دیجیتال
            </a>
            <div class="flex flex-col justify-start text-center text-gray-100">
              <span class="text-2xl font-semibold leadi tracki">12</span>
              <span class="text-sm">فروردین</span>
            </div>
          </div>
          <h2 class="z-10 p-5 absolute -bottom-1 group-hover:bottom-0 group-hover:block transition-all text-right">
            <a href="#" class="text-md opacity-90 text-gray-100 transition-all">
              فواید استفاده از چند مانیتور همزمان
            </a>
            <br>
            <a href="#" class="text-sm bg-gray-300 bg-opacity-30 hover:bg-opacity-45 w-fit rounded-lg px-3 py-1 opacity-90 text-gray-100 mt-2 hidden group-hover:block transition-all">
              مطالعه بیشتر
            </a>
          </h2>
        </div>
        <div class="relative flex items-end justify-start w-full text-left bg-center bg-cover group">
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
    <!-- partner company -->
    <div class="bg-white my-10 rounded-2xl border">
      <!-- top companys -->
      <div class="flex justify-center px-5 md:px-10 items-center bg-white py-3">
        <div class="px-4 py-2 flex justify-center items-center gap-x-2 text-lg text-zinc-700">
          <svg class="fill-yellow-500" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#121212" viewBox="0 0 256 256"><path d="M196.89,130.94l-51.65-19a2,2,0,0,1-1.15-1.14l-19-51.66a13.92,13.92,0,0,0-26.12,0l-19,51.65a2,2,0,0,1-1.14,1.15l-51.66,19a13.92,13.92,0,0,0,0,26.12l51.65,19a2,2,0,0,1,1.15,1.14l19,51.66a13.92,13.92,0,0,0,26.12,0l19-51.65a2,2,0,0,1,1.14-1.15l51.66-19a13.92,13.92,0,0,0,0-26.12Zm-4.15,14.86-51.66,19a13.94,13.94,0,0,0-8.25,8.26l-19,51.65a1.92,1.92,0,0,1-3.6,0l-19-51.66a14,14,0,0,0-8.25-8.25h0l-51.65-19a1.92,1.92,0,0,1,0-3.6l51.66-19a13.94,13.94,0,0,0,8.25-8.26l19-51.65a1.92,1.92,0,0,1,3.6,0l19,51.66a13.94,13.94,0,0,0,8.26,8.25l51.65,19a1.92,1.92,0,0,1,0,3.6ZM146,40a6,6,0,0,1,6-6h18V16a6,6,0,0,1,12,0V34h18a6,6,0,0,1,0,12H182V64a6,6,0,0,1-12,0V46H152A6,6,0,0,1,146,40ZM246,88a6,6,0,0,1-6,6H230v10a6,6,0,0,1-12,0V94H208a6,6,0,0,1,0-12h10V72a6,6,0,0,1,12,0V82h10A6,6,0,0,1,246,88Z"></path></svg>
          محبوب ترین برند ها
        </div>
      </div>
      <!-- main companys -->
      <div class="containerPSlider swiper">
        <div class="partnetCompany px-1">
          <div class="card-wrapper swiper-wrapper py-2 flex items-center">
            <a href="" class="card swiper-slide my-2 border-l p-2 sm:p-4">
              <img class="mx-auto" src="./assets/image/company/1.png" alt="" />
            </a>
            <a href="" class="card swiper-slide my-2 border-l p-2 sm:p-4">
              <img class="mx-auto" src="./assets/image/company/2.png" alt="" />
            </a>
            <a href="" class="card swiper-slide my-2 border-l p-2 sm:p-4">
              <img class="mx-auto" src="./assets/image/company/3.png" alt="" />
            </a>
            <a href="" class="card swiper-slide my-2 border-l p-2 sm:p-4">
              <img class="mx-auto" src="./assets/image/company/4.png" alt="" />
            </a>
            <a href="" class="card swiper-slide my-2 border-l p-2 sm:p-4">
              <img class="mx-auto" src="./assets/image/company/5.png" alt="" />
            </a>
            <a href="" class="card swiper-slide my-2 border-l p-2 sm:p-4">
              <img class="mx-auto" src="./assets/image/company/6.jpg" alt="" />
            </a>
            <a href="" class="card swiper-slide my-2 border-l p-2 sm:p-4">
              <img class="mx-auto" src="./assets/image/company/7.png" alt="" />
            </a>
            <a href="" class="card swiper-slide my-2 border-l p-2 sm:p-4">
              <img class="mx-auto" src="./assets/image/company/8.png" alt="" />
            </a>
            <a href="" class="card swiper-slide my-2 border-l p-2 sm:p-4">
              <img class="mx-auto" src="./assets/image/company/9.jpg" alt="" />
            </a>
            <a href="" class="card swiper-slide my-2 border-l p-2 sm:p-4">
              <img class="mx-auto" src="./assets/image/company/10.jpg" alt="" />
            </a>
            <a href="" class="card swiper-slide my-2 p-2 sm:p-4">
              <img class="mx-auto" src="./assets/image/company/11.png" alt="" />
            </a>
          </div>
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
<!-- HERO SLIDER -->
<script src="./assets/js/dependencies/swiper.min.js"></script>
<script src="./assets/js/heroSlider.js"></script>
<!-- OFF SLIDER -->
<script src="./assets/js/slider.js"></script>

<script src="./assets/js/swiper-product.js"></script>
</html>
