<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('./assets/css/output.css')}}">
  <link rel="stylesheet" href="{{ asset('./assets/css/font.css')}}">

  <link href="{{ asset('./assets/css/dependencies/swiper.min.css')}}" rel="stylesheet"/>
  <link href="{{ asset('./assets/css/app.css')}}" rel="stylesheet"/>
  <link href="./assets/css/dependencies/nouislider.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('./assets/css/dependencies/swiper-product.css')}}">
  <link href="{{ asset('./assets/css/main.css" rel="stylesheet')}}"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- <title>صفحه اصلی</title> -->
{!! SEO::generate() !!}

  <!-- <style>
    .scroll-animate {
        opacity: 0; /* مخفی */
        transform: translateY(80px); /* حرکت اولیه */
        transition: all 0.6s cubic-bezier(0.25, 0.8, 0.25, 1); /* انیمیشن نرم و حرفه‌ای */
      }

      .scroll-animate.visible {
        opacity: 1; /* شفاف */
        transform: translateY(0); /* موقعیت نهایی */
      }


  </style> -->
<style>
  /* انیمیشن تکان دادن زنگوله */
  @keyframes ring {
    0% { transform: rotate(0); }
    25% { transform: rotate(-15deg); }
    50% { transform: rotate(15deg); }
    75% { transform: rotate(-10deg); }
    100% { transform: rotate(0); }
  }

  /* انیمیشن پرش */
  @keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
  }

  /* استایل اصلی دکمه */
  .bell {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding: 0.75rem 1rem;
    font-size: 0.875rem;
    font-weight: 600;
    color: #ffffff;
    background: linear-gradient(135deg, #ff4d4d, #ff0000);
    border-radius: 12px;
    border: 2px solid #ffffff;
    box-shadow: 0 5px 10px rgba(255, 0, 0, 0.3);
    transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.3s ease;
    cursor: pointer;
  }

  /* هاور */
  .bell:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(255, 0, 0, 0.4);
    background: linear-gradient(135deg, #ff6666, #ff1a1a);
  }

  /* زنگوله با انیمیشن در حالت هاور */
  .bell:hover .bell-icon {
    animation: ring 0.6s ease-in-out, bounce 0.6s ease-in-out;
  }

  /* افکت نور ملایم */
  .bell::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border-radius: 12px;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.5), transparent 70%);
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  /* نور در حالت هاور */
  .bell:hover::after {
    opacity: 1;
  }

  .tab-hidden {
  display: none;
}

.tab-active {
  color: #000;
  font-weight: bold;
  border-bottom: 2px solid #000;
}



.tab-hidden {
  display: none;
}

.content-box {
  position: relative;
  background-color: #fff;
  padding: 30px 40px;
  border-radius: 12px;
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
  width: 100%; /* عرض 100 درصد */
  max-width: 100%; /* حداکثر عرض به 100 درصد تغییر کرد */
  margin: 40px auto;
  direction: rtl; /* راست‌چین کردن محتوا */
  transition: all 0.3s ease-in-out;
}

.content-box::before {
  content: "";
  position: absolute;
  top: -20px;
  left: 50%;
  transform: translateX(-50%);
  width: 80px;
  height: 8px;
  background-color: #D32F2F;
  border-radius: 10px;
}

.content-title {
  font-size: 32px;
  font-weight: 700;
  color: #D32F2F;
  text-align: center;
  margin-bottom: 25px;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.content-text {
  font-size: 20px;
  line-height: 1.8;
  color: #444;
  text-align: justify; /* متن مساوی */
  padding-bottom: 25px;
}

.content-box:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}



.tab-hidden {
  display: none;
}

.review-box {
  position: relative;
  background-color: #F5F5F5; /* پس‌زمینه خاکی روشن */
  padding: 25px 35px;
  border-radius: 8px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
  width: 100%;
  max-width: 100%;
  margin: 40px auto;
  direction: rtl;
  transition: all 0.3s ease-in-out;
}

.review-box::before {
  content: "";
  position: absolute;
  top: -15px;
  left: 50%;
  transform: translateX(-50%);
  width: 60px;
  height: 6px;
  background-color: #F44336; /* قرمز کم‌رنگ */
  border-radius: 5px;
}

.review-title {
  font-size: 28px;
  font-weight: 600;
  color: #F44336; /* رنگ قرمز کم‌رنگ */
  text-align: center;
  margin-bottom: 20px;
  text-transform: capitalize;
  letter-spacing: 1px;
}

.review-text {
  font-size: 18px;
  line-height: 1.6;
  color: #666;
  text-align: justify;
}

.review-box:hover {
  transform: translateY(-8px);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

</style>
</head>
@php
use App\Helpers\Cart\Cart;
use App\Models\productcategory;
$AllParentProductCategory = productcategory::whereparent(0)->get();
@endphp
<body class="bg-[#fcfcfc]">
  <!-- header -->

     <form action="{{route('products')}}" id="form" method="get">
  <input id="desktopHeaderSearch2" name="search" type="text"/>
  </form>
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
               @guest
               <a href="{{route('login')}}" >
              <div class="flex items-center py-2 px-2 rounded-xl bg-red-500 hover:bg-red-400 transition shadow-lg shadow-red-500/50 nnn" >
                <button
                  class="text-gray-100 flex gap-x-1"
                  data-dropdown-toggle="dropdownAccountDesktop"
                  id="dropdownDefaultButton"
                  type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <!-- بدنه قفل -->
                    <rect x="6" y="10" width="12" height="10" rx="2" ry="2" fill="#ffffff" />
                    <!-- حلقه قفل -->
                    <path d="M8 10V7C8 4.79 9.79 3 12 3C14.21 3 16 4.79 16 7V10" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <!-- کلید -->
                    <path d="M13 15L16 15L16 17L17 17L17 19L15 19L15 17L13 17L13 15Z" fill="#ffffff" />
                    <!-- دایره کلید -->
                    <circle cx="12" cy="15" r="1" fill="#ffffff" />
                  </svg>



                <span class="hidden md:block text-sm">
                  ورود/ثبت نام
                </span>
                </button>

              </div></a>
              @else

              <div class="flex items-center py-2 px-2 rounded-xl bg-red-500 hover:bg-red-400 transition shadow-lg shadow-red-500/50">
                <button
                  class="text-gray-100 flex gap-x-1"
                  data-dropdown-toggle="dropdownAccountDesktop"
                  id="dropdownDefaultButton"
                  type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ffffff" viewBox="0 0 256 256"><path d="M229.19,213c-15.81-27.32-40.63-46.49-69.47-54.62a70,70,0,1,0-63.44,0C67.44,166.5,42.62,185.67,26.81,213a6,6,0,1,0,10.38,6C56.4,185.81,90.34,166,128,166s71.6,19.81,90.81,53a6,6,0,1,0,10.38-6ZM70,96a58,58,0,1,1,58,58A58.07,58.07,0,0,1,70,96Z"></path></svg>
                <span class="hidden md:block text-sm">
                    {{request()->user()->name}}
                </span>
            </button>
                <div
                  class="z-50 !ml-5 hidden w-60 rounded-lg bg-white shadow-lg"
                  id="dropdownAccountDesktop">
                  <ul class="space-y-2 p-2">
                    <li>
                      <a class='flex items-center justify-between gap-x-2 rounded-lg p-2 text-zinc-700 hover:text-zinc-800 transition hover:bg-gray-100' href='{{route('personal')}}'>
                          <span class="flex items-center gap-x-2">
                              <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M229.19,213c-15.81-27.32-40.63-46.49-69.47-54.62a70,70,0,1,0-63.44,0C67.44,166.5,42.62,185.67,26.81,213a6,6,0,1,0,10.38,6C56.4,185.81,90.34,166,128,166s71.6,19.81,90.81,53a6,6,0,1,0,10.38-6ZM70,96a58,58,0,1,1,58,58A58.07,58.07,0,0,1,70,96Z"></path></svg>
                                </span>

                                <span class="text-sm"> {{request()->user()->name}}</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a class='flex items-center justify-between gap-x-2 rounded-lg p-2 text-zinc-700 hover:text-zinc-800 transition hover:bg-gray-100' href='{{route('factors')}}'>
                        <span class="flex items-center gap-x-2">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M237.9,198.36l-14.25-120a14.06,14.06,0,0,0-14-12.36H174V64a46,46,0,0,0-92,0v2H46.33a14.06,14.06,0,0,0-14,12.36l-14.25,120a14,14,0,0,0,14,15.64H223.92a14,14,0,0,0,14-15.64ZM94,64a34,34,0,0,1,68,0v2H94ZM225.5,201.3a2.07,2.07,0,0,1-1.58.7H32.08a2.07,2.07,0,0,1-1.58-.7,1.92,1.92,0,0,1-.49-1.53l14.26-120A2,2,0,0,1,46.33,78H209.67a2,2,0,0,1,2.06,1.77l14.26,120A1.92,1.92,0,0,1,225.5,201.3Z"></path></svg>
                          </span>
                          <span class="text-sm">سفارش ها</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a class='flex items-center justify-between gap-x-2 rounded-lg p-2 text-zinc-700 hover:text-zinc-800 transition hover:bg-gray-100' href='{{route('favorites')}}'>
                        <span class="flex items-center gap-x-2">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                          </span>
                          <span class="text-sm"> علاقه مندی ها</span>
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
              @endif
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

                    @if (count(Cart::all()))
                    <span
                      class="absolute -right-3 -top-3 flex h-5 w-5 drop-shadow-lg cursor-pointer items-center justify-center rounded-lg bg-white text-sm font-semibold text-red-500">
                      {{count(Cart::all())}}
                    </span>

                    @endif

                </button>
                @if (count(Cart::all()))

                <div
                  class="z-50 mx-5 md:!ml-5 hidden w-auto md:w-[400px] rounded-lg bg-white shadow-lg"
                  id="dropdownBasketDesktop">
                  <!-- Head -->
                  <div class="flex items-center justify-between p-4 pb-2 border-b mx-5">
                    <div class="text-sm text-zinc-500">
                      {{count(Cart::all())}} کالا
                    </div>
                  </div>
                  <!-- Items -->
                  <div class="h-60">
                    <ul
                      class="main-scroll h-full space-y-2 divide-y divide-gray-100 overflow-y-auto p-5 pl-2">
                        @foreach (Cart::all() as $item )
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


                                {{$item['product']->name}}
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

                        @endforeach

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
                @endif
              </div>
            </div>
          </div>
          <!-- Bottom Header -->
          <div
            class="absolute left-0 right-0 top-full z-20 bg-white shadow-sm transition-transform duration-300"
            id="desktop-header-bottom">
            <div
              class="container relative flex max-w-[1680px] items-center gap-x-2 px-5 mb-3">
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
                            @foreach ( $AllParentProductCategory as $item )
                            <li>
                                <a class='flex items-center gap-x-1 py-4 pr-4 text-zinc-700 hover:text-zinc-600 hover:bg-white transition min-w-24 border-b' data-category-parent='{{$loop->iteration}}' href='#'>
                                    <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M176,18H80A22,22,0,0,0,58,40V216a22,22,0,0,0,22,22h96a22,22,0,0,0,22-22V40A22,22,0,0,0,176,18Zm10,198a10,10,0,0,1-10,10H80a10,10,0,0,1-10-10V40A10,10,0,0,1,80,30h96a10,10,0,0,1,10,10ZM138,60a10,10,0,1,1-10-10A10,10,0,0,1,138,60Z"></path></svg>
                                </span>
                                <span class="text-sm">
                                    {{$item->name}}
                                    </span>
                                </a>
                                </li>

                                @endforeach
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

                          @foreach ( $AllParentProductCategory as $item )
                          <div class="hidden p-5" data-category-child="{{$loop->iteration}}">
                            <!-- head -->
                            <div class="mb-4">
                              <a class='flex items-center gap-x-1 py-2 text-xs text-red-400 hover:text-red-500 transition' href=''>
                                <div>مشاهده همه محصولات {{$item->name}} </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                              </a>
                            </div>
                            <div
                              class="flex flex-grow flex-wrap gap-x-14 gap-y-8">
                              <div class="space-y-2">
                                <a class='flex items-center gap-x-1 text-zinc-700 hover:text-red-400' href=''>
                                  <span
                                    class="h-5 w-0.5 rounded-full bg-red-500"></span>
                                  <div class="text-sm">برند های مختلف {{$item->name}}</div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                                </a>
                                <ul>
                                    @foreach ( $item->Brand()->get() as $Item)
                                    <li>
                                      <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                         {{ $Item->name}}
                                      </a>
                                    </li>

                                    @endforeach

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
                                   @foreach ( $item->products()->where('count_view', '>' , 10)->get() as $product )

                                   <li>
                                     <a class='block py-2 text-xs text-zinc-600 hover:text-red-500' href=''>
                                       {{$product->name}}
                                     </a>
                                   </li>
                                   @endforeach
                                </ul>
                              </div>
                            </div>
                          </div>
                          @endforeach

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="group">
                <a class="relative" href="#">
                  <div class="p-2 pt-0 text-sm text-zinc-700">
                    شگفت انگیزها
                  </div>
                  <div class="absolute bottom-0 flex w-full justify-center">
                    <div
                      class="left-0 h-[1px] animate-border-width-reverse rounded-full bg-gradient-to-r from-red-400 to-red-400 transition-all duration-200 group-hover:animate-border-width">
                    </div>
                  </div>
                  <div class="absolute hidden group-hover:flex top-8 right-1 lg:right-28 h-auto rounded-lg w-11/12 lg:w-9/12 shadow-lg border z-50 bg-white items-center gap-x-5 py-5">
                    <div class="space-y-2">
                      <div class="flex items-center gap-x-1 text-zinc-700 hover:text-red-400">
                        <span class="h-5 w-0.5 rounded-full bg-red-500"></span>
                        <div class="text-sm">برند های مختلف موبایل</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                      </div>
                      <ul>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                             گوشی اپل
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی سامسونگ
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی شیائومی
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی هاوائی
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی ال جی
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی آنر
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی نوکیا
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی آنر
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی جی پلاس
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="space-y-2">
                      <div class="flex items-center gap-x-1 text-zinc-700 hover:text-red-400">
                        <span class="h-5 w-0.5 rounded-full bg-red-500"></span>
                        <div class="text-sm">برند های مختلف موبایل</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                      </div>
                      <ul>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                             گوشی اپل
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی سامسونگ
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی شیائومی
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی هاوائی
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی ال جی
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی آنر
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی نوکیا
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی آنر
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی جی پلاس
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="space-y-2">
                      <div class="flex items-center gap-x-1 text-zinc-700 hover:text-red-400">
                        <span class="h-5 w-0.5 rounded-full bg-red-500"></span>
                        <div class="text-sm">برند های مختلف موبایل</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                      </div>
                      <ul>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                             گوشی اپل
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی سامسونگ
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی شیائومی
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی هاوائی
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی ال جی
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی آنر
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی نوکیا
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی آنر
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی جی پلاس
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="space-y-2">
                      <div class="flex items-center gap-x-1 text-zinc-700 hover:text-red-400">
                        <span class="h-5 w-0.5 rounded-full bg-red-500"></span>
                        <div class="text-sm">برند های مختلف موبایل</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
                      </div>
                      <ul>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                             گوشی اپل
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی سامسونگ
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی شیائومی
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی هاوائی
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی ال جی
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی آنر
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی نوکیا
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی آنر
                          </a>
                        </li>
                        <li>
                          <a class="block py-2 text-xs text-zinc-600 hover:text-red-500" href="">
                            گوشی جی پلاس
                          </a>
                        </li>
                      </ul>
                    </div>
                    <img class="w-36 lg:w-64 mx-auto h-full" src="./assets/image/General.webp" alt="">
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

                <a class="block hover:text-zinc-800 hover:bg-zinc-100 rounded-md transition p-2 my-1" href="{{route('blog_list')}}">
                    بلاگ
                  </a>

                  <a class="block hover:text-zinc-800 hover:bg-zinc-100 rounded-md transition p-2 my-1" href="{{route('cart')}}">
                    سبد خرید
                  </a>
                  <a class="block hover:text-zinc-800 hover:bg-zinc-100 rounded-md transition p-2 my-1" href="{{route('comparision')}}">
                    مقایسه محصول
                  </a>

                  <a class="block hover:text-zinc-800 hover:bg-zinc-100 rounded-md transition p-2 my-1" href="{{route('contact')}}">
                     تماس با ما
                  </a>
                  <a class="block hover:text-zinc-800 hover:bg-zinc-100 rounded-md transition p-2 my-1" href="{{route('about')}}">
                      درباره ما
                  </a>
                  <a class="block hover:text-zinc-800 hover:bg-zinc-100 rounded-md transition p-2 my-1" href="./category-index.html">
                   دسته بندی
                  </a>
                  @guest
                  <a class="block hover:text-zinc-800 hover:bg-zinc-100 rounded-md transition p-2 my-1" href="./login-register.html">
                    ورود یا ثبت نام
                  </a>
                  @else
                  <a class="block hover:text-zinc-800 hover:bg-zinc-100 rounded-md transition p-2 my-1" href="./profile.html">
                    پروفایل کاربر
                  </a>
                  @endif

                </div>
              </div>
              @if (Nwidart\Modules\Facades\Module::isEnabled('MultiVendor'))

              <div class="mr-auto">
                <a  href="{{route('seller-login')}}">
                  <div class="py-2 px-3 rounded-lg text-sm text-zinc-700 bg-gray-100 hover:bg-gray-200 transition border hover:shadow-lg flex items-center gap-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M184,89.57V84c0-25.08-37.83-44-88-44S8,58.92,8,84v40c0,20.89,26.25,37.49,64,42.46V172c0,25.08,37.83,44,88,44s88-18.92,88-44V132C248,111.3,222.58,94.68,184,89.57ZM232,132c0,13.22-30.79,28-72,28-3.73,0-7.43-.13-11.08-.37C170.49,151.77,184,139,184,124V105.74C213.87,110.19,232,122.27,232,132ZM72,150.25V126.46A183.74,183.74,0,0,0,96,128a183.74,183.74,0,0,0,24-1.54v23.79A163,163,0,0,1,96,152,163,163,0,0,1,72,150.25Zm96-40.32V124c0,8.39-12.41,17.4-32,22.87V123.5C148.91,120.37,159.84,115.71,168,109.93ZM96,56c41.21,0,72,14.78,72,28s-30.79,28-72,28S24,97.22,24,84,54.79,56,96,56ZM24,124V109.93c8.16,5.78,19.09,10.44,32,13.57v23.37C36.41,141.4,24,132.39,24,124Zm64,48v-4.17c2.63.1,5.29.17,8,.17,3.88,0,7.67-.13,11.39-.35A121.92,121.92,0,0,0,120,171.41v23.46C100.41,189.4,88,180.39,88,172Zm48,26.25V174.4a179.48,179.48,0,0,0,24,1.6,183.74,183.74,0,0,0,24-1.54v23.79a165.45,165.45,0,0,1-48,0Zm64-3.38V171.5c12.91-3.13,23.84-7.79,32-13.57V172C232,180.39,219.59,189.4,200,194.87Z"></path></svg>
                    فروشنده شوید
                  </div>
                </a>
              </div>
              @endif
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
              <a href="{{route('index')}}">
                <img
                  alt=""
                  class="h-10 w-full rounded-lg"
                  src="{{asset('./assets/image/logo.png')}}"/>
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





@yield('content')






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
