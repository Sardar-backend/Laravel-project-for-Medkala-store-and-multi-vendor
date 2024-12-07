@extends('base')
@section('content')
  <!-- hero slider -->
  <div class="mt-44 md:mt-28">
    <!-- desktop -->
    <div class="swiper heroSlider hidden md:block">
      <div class="swiper-wrapper">
        <a href="" class="swiper-slide">
          <img src="./assets/image/heroSlider/10.jpg" alt="">
        </a>
        <a href="" class="swiper-slide">
          <img src="./assets/image/heroSlider/11.jpg" alt="">
        </a>
        <a href="" class="swiper-slide">
          <img src="./assets/image/heroSlider/12.jpg" alt="">
        </a>
        <a href="" class="swiper-slide">
          <img src="./assets/image/heroSlider/13.jpg" alt="">
        </a>
        <a href="" class="swiper-slide">
          <img src="./assets/image/heroSlider/14.jpg" alt="">
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
          <img class="rounded-lg" src="./assets/image/heroSlider/10m.jpg" alt="">
        </a>
        <a href="" class="swiper-slide px-4">
          <img class="rounded-lg" src="./assets/image/heroSlider/11m.jpg" alt="">
        </a>
        <a href="" class="swiper-slide px-4">
          <img class="rounded-lg" src="./assets/image/heroSlider/12m.jpg" alt="">
        </a>
        <a href="" class="swiper-slide px-4">
          <img class="rounded-lg" src="./assets/image/heroSlider/13m.jpg" alt="">
        </a>
        <a href="" class="swiper-slide px-4">
          <img class="rounded-lg" src="./assets/image/heroSlider/14m.jpg" alt="">
        </a>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <main class="max-w-[1500px] mx-auto px-3 md:px-5">
    <!-- brand laptop -->
    <div class="my-10">
      <!-- top companys -->
      <div class="flex justify-center px-5 md:px-10 items-center py-3">
        <div class="px-4 py-2 flex justify-center items-center gap-x-2 text-lg text-zinc-700">
          <svg class="fill-yellow-500" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#121212" viewBox="0 0 256 256"><path d="M196.89,130.94l-51.65-19a2,2,0,0,1-1.15-1.14l-19-51.66a13.92,13.92,0,0,0-26.12,0l-19,51.65a2,2,0,0,1-1.14,1.15l-51.66,19a13.92,13.92,0,0,0,0,26.12l51.65,19a2,2,0,0,1,1.15,1.14l19,51.66a13.92,13.92,0,0,0,26.12,0l19-51.65a2,2,0,0,1,1.14-1.15l51.66-19a13.92,13.92,0,0,0,0-26.12Zm-4.15,14.86-51.66,19a13.94,13.94,0,0,0-8.25,8.26l-19,51.65a1.92,1.92,0,0,1-3.6,0l-19-51.66a14,14,0,0,0-8.25-8.25h0l-51.65-19a1.92,1.92,0,0,1,0-3.6l51.66-19a13.94,13.94,0,0,0,8.25-8.26l19-51.65a1.92,1.92,0,0,1,3.6,0l19,51.66a13.94,13.94,0,0,0,8.26,8.25l51.65,19a1.92,1.92,0,0,1,0,3.6ZM146,40a6,6,0,0,1,6-6h18V16a6,6,0,0,1,12,0V34h18a6,6,0,0,1,0,12H182V64a6,6,0,0,1-12,0V46H152A6,6,0,0,1,146,40ZM246,88a6,6,0,0,1-6,6H230v10a6,6,0,0,1-12,0V94H208a6,6,0,0,1,0-12h10V72a6,6,0,0,1,12,0V82h10A6,6,0,0,1,246,88Z"></path></svg>
          انتخاب بر اساس برند
        </div>
      </div>
      <!-- main companys -->
      <div class="containerPSlider swiper">
        <div class="brandLaptop px-1">
          <div class="card-wrapper swiper-wrapper py-2 flex items-center md:justify-center">
            <a href="" class="card swiper-slide my-2 border-l p-2 sm:p-4">
              <img class="mx-auto" src="./assets/image/company/12.png" alt="" />
            </a>
            <a href="" class="card swiper-slide my-2 border-l p-2 sm:p-4">
              <img class="mx-auto" src="./assets/image/company/13.png" alt="" />
            </a>
            <a href="" class="card swiper-slide my-2 border-l p-2 sm:p-4">
              <img class="mx-auto" src="./assets/image/company/14.png" alt="" />
            </a>
            <a href="" class="card swiper-slide my-2 border-l p-2 sm:p-4">
              <img class="mx-auto" src="./assets/image/company/15.png" alt="" />
            </a>
            <a href="" class="card swiper-slide my-2 border-l p-2 sm:p-4">
              <img class="mx-auto" src="./assets/image/company/16.png" alt="" />
            </a>
            <a href="" class="card swiper-slide my-2 p-2 sm:p-4">
              <img class="mx-auto" src="./assets/image/company/17.png" alt="" />
            </a>
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
          <span class="text-blue-500">
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
                <div class="bg-blue-200 rounded-lg px-2 py-1 text-blue-500 flex items-center gap-x-1 text-xs">
                  <div>
                    10%
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
                      مانیتور ایسوس a342
                    </span>
                    <span class="text-xs text-zinc-500">
                      ASUS a342 plus for work
                    </span>
                  </div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span>
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
                <div class="bg-gray-100 rounded-xl py-3 px-2 flex justify-between items-center">
                  <div class="flex flex-col gap-y-2">
                    <div class="flex justify-center gap-x-1 font-semibold text-sm text-zinc-800">
                      <div>1,100,000</div>
                      <div>تومان</div>
                    </div>
                    <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                      <div class="line-through">1,350,000</div>
                      <div class="line-through">تومان</div>
                    </div>
                  </div>
                  <div>
                    <button class="flex items-center gap-x-1 text-sm py-2 px-2 rounded-lg text-white bg-blue-500 hover:bg-blue-400 transition shadow-lg shadow-blue-500/50">
                      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ededed" viewBox="0 0 256 256"><path d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z"></path></svg>
                      خرید محصول
                    </button>
                  </div>
                </div>
              </div>
            </a>
            <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
              <div class="flex justify-between">
                <div class="bg-blue-200 rounded-lg px-2 py-1 text-blue-500 flex items-center gap-x-1 text-xs">
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
                    <button class="flex items-center gap-x-1 text-sm py-2 px-2 rounded-lg text-white bg-blue-500 hover:bg-blue-400 transition shadow-lg shadow-blue-500/50">
                      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ededed" viewBox="0 0 256 256"><path d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z"></path></svg>
                      خرید محصول
                    </button>
                  </div>
                </div>
              </div>
            </a>
            <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
              <div class="flex justify-between">
                <div class="bg-blue-200 rounded-lg px-2 py-1 text-blue-500 flex items-center gap-x-1 text-xs">
                  <div>
                    30%
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
                      مک بوک ایر
                    </span>
                    <span class="text-xs text-zinc-500">
                      mac book air AX12
                    </span>
                  </div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span>
                      <span>
                        (13+)
                      </span>
                      <span>
                        4.7
                      </span>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </div>
                </span>
                <div class="bg-gray-100 rounded-xl py-3 px-2 flex justify-between items-center">
                  <div class="flex flex-col gap-y-2">
                    <div class="flex justify-center gap-x-1 font-semibold text-sm text-zinc-800">
                      <div>29,800,000</div>
                      <div>تومان</div>
                    </div>
                    <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                      <div class="line-through">35,500,000</div>
                      <div class="line-through">تومان</div>
                    </div>
                  </div>
                  <div>
                    <button class="flex items-center gap-x-1 text-sm py-2 px-2 rounded-lg text-white bg-blue-500 hover:bg-blue-400 transition shadow-lg shadow-blue-500/50">
                      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ededed" viewBox="0 0 256 256"><path d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z"></path></svg>
                      خرید محصول
                    </button>
                  </div>
                </div>
              </div>
            </a>
            <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
              <div class="flex justify-between">
                <div class="bg-blue-200 rounded-lg px-2 py-1 text-blue-500 flex items-center gap-x-1 text-xs">
                  <div>
                    17%
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
                      کیبورد تسکو 15F
                    </span>
                    <span class="text-xs text-zinc-500">
                      TSCO F15s
                    </span>
                  </div>
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
                </span>
                <div class="bg-gray-100 rounded-xl py-3 px-2 flex justify-between items-center">
                  <div class="flex flex-col gap-y-2">
                    <div class="flex justify-center gap-x-1 font-semibold text-sm text-zinc-800">
                      <div>1,200,000</div>
                      <div>تومان</div>
                    </div>
                    <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                      <div class="line-through">1,750,000</div>
                      <div class="line-through">تومان</div>
                    </div>
                  </div>
                  <div>
                    <button class="flex items-center gap-x-1 text-sm py-2 px-2 rounded-lg text-white bg-blue-500 hover:bg-blue-400 transition shadow-lg shadow-blue-500/50">
                      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ededed" viewBox="0 0 256 256"><path d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z"></path></svg>
                      خرید محصول
                    </button>
                  </div>
                </div>
              </div>
            </a>
            <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
              <div class="flex justify-between">
                <div class="bg-blue-200 rounded-lg px-2 py-1 text-blue-500 flex items-center gap-x-1 text-xs">
                  <div>
                    7%
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
                  <img class="max-w-52 mx-auto" src="./assets/image/products/l5.webp" alt="" />
                </div>
              </div>
              <div class="space-y-6">
                <span class="mb-2 h-8 md:h-10 flex justify-between">
                  <div class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      موس گیمینگ مکس
                    </span>
                    <span class="text-xs text-zinc-500">
                      MAX mouse for game
                    </span>
                  </div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span>
                      <span>
                        (10+)
                      </span>
                      <span>
                        4.2
                      </span>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </div>
                </span>
                <div class="bg-gray-100 rounded-xl py-3 px-2 flex justify-between items-center">
                  <div class="flex flex-col gap-y-2">
                    <div class="flex justify-center gap-x-1 font-semibold text-sm text-zinc-800">
                      <div>760,000</div>
                      <div>تومان</div>
                    </div>
                    <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                      <div class="line-through">850,000</div>
                      <div class="line-through">تومان</div>
                    </div>
                  </div>
                  <div>
                    <button class="flex items-center gap-x-1 text-sm py-2 px-2 rounded-lg text-white bg-blue-500 hover:bg-blue-400 transition shadow-lg shadow-blue-500/50">
                      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ededed" viewBox="0 0 256 256"><path d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z"></path></svg>
                      خرید محصول
                    </button>
                  </div>
                </div>
              </div>
            </a>
            <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
              <div class="flex justify-between">
                <div class="bg-blue-200 rounded-lg px-2 py-1 text-blue-500 flex items-center gap-x-1 text-xs">
                  <div>
                    5%
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
                  <img class="max-w-52 mx-auto" src="./assets/image/products/l6.webp" alt="" />
                </div>
              </div>
              <div class="space-y-6">
                <span class="mb-2 h-8 md:h-10 flex justify-between">
                  <div class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      گینر مخصوص بدن
                    </span>
                    <span class="text-xs text-zinc-500">
                      GAIN VIT
                    </span>
                  </div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span>
                      <span>
                        (17+)
                      </span>
                      <span>
                        4.7
                      </span>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
                  </div>
                </span>
                <div class="bg-gray-100 rounded-xl py-3 px-2 flex justify-between items-center">
                  <div class="flex flex-col gap-y-2">
                    <div class="flex justify-center gap-x-1 font-semibold text-sm text-zinc-800">
                      <div>3,000,000</div>
                      <div>تومان</div>
                    </div>
                    <div class="flex justify-center gap-x-1 text-xs text-zinc-400">
                      <div class="line-through">3,850,000</div>
                      <div class="line-through">تومان</div>
                    </div>
                  </div>
                  <div>
                    <button class="flex items-center gap-x-1 text-sm py-2 px-2 rounded-lg text-white bg-blue-500 hover:bg-blue-400 transition shadow-lg shadow-blue-500/50">
                      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ededed" viewBox="0 0 256 256"><path d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z"></path></svg>
                      خرید محصول
                    </button>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="bg-blue-600 w-full h-72 rounded-2xl -mt-60 relative">
        </div>
        <div class="swiper-btn-next swiper-navbtn" style="display: none;"></div>
        <div class="swiper-btn-prev swiper-navbtn" style="display: none;"></div>
      </div>
    </div>
    <!-- category laptop -->
    <div class="my-10">
      <!-- top companys -->
      <div class="flex justify-center px-5 md:px-10 items-center py-3">
        <div class="px-4 py-2 flex justify-center items-center gap-x-2 text-lg text-zinc-700">
          <svg class="fill-yellow-500" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#121212" viewBox="0 0 256 256"><path d="M196.89,130.94l-51.65-19a2,2,0,0,1-1.15-1.14l-19-51.66a13.92,13.92,0,0,0-26.12,0l-19,51.65a2,2,0,0,1-1.14,1.15l-51.66,19a13.92,13.92,0,0,0,0,26.12l51.65,19a2,2,0,0,1,1.15,1.14l19,51.66a13.92,13.92,0,0,0,26.12,0l19-51.65a2,2,0,0,1,1.14-1.15l51.66-19a13.92,13.92,0,0,0,0-26.12Zm-4.15,14.86-51.66,19a13.94,13.94,0,0,0-8.25,8.26l-19,51.65a1.92,1.92,0,0,1-3.6,0l-19-51.66a14,14,0,0,0-8.25-8.25h0l-51.65-19a1.92,1.92,0,0,1,0-3.6l51.66-19a13.94,13.94,0,0,0,8.25-8.26l19-51.65a1.92,1.92,0,0,1,3.6,0l19,51.66a13.94,13.94,0,0,0,8.26,8.25l51.65,19a1.92,1.92,0,0,1,0,3.6ZM146,40a6,6,0,0,1,6-6h18V16a6,6,0,0,1,12,0V34h18a6,6,0,0,1,0,12H182V64a6,6,0,0,1-12,0V46H152A6,6,0,0,1,146,40ZM246,88a6,6,0,0,1-6,6H230v10a6,6,0,0,1-12,0V94H208a6,6,0,0,1,0-12h10V72a6,6,0,0,1,12,0V82h10A6,6,0,0,1,246,88Z"></path></svg>
          انتخاب بر اساس کاربرد
        </div>
      </div>
      <!-- main companys -->
      <div class="">
        <div class="px-1">
          <div class="py-2 flex items-center justify-center flex-wrap gap-3">
            <a href="" class="">
              <img class="mx-auto rounded-lg" src="./assets/image/category/l1.jpg" alt="" />
              <div class="text-zinc-700 text-sm text-center mt-2">
                دانشجویی
              </div>
            </a>
            <a href="" class="">
              <img class="mx-auto rounded-lg" src="./assets/image/category/l2.jpg" alt="" />
              <div class="text-zinc-700 text-sm text-center mt-2">
                کارمندی
              </div>
            </a>
            <a href="" class="">
              <img class="mx-auto rounded-lg" src="./assets/image/category/l3.jpg" alt="" />
              <div class="text-zinc-700 text-sm text-center mt-2">
                طراحی
              </div>
            </a>
            <a href="" class="">
              <img class="mx-auto rounded-lg" src="./assets/image/category/l4.jpg" alt="" />
              <div class="text-zinc-700 text-sm text-center mt-2">
                گیمینگ
              </div>
            </a>
            <a href="" class="">
              <img class="mx-auto rounded-lg" src="./assets/image/category/l5.jpg" alt="" />
              <div class="text-zinc-700 text-sm text-center mt-2">
                اداری
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- off slider -->
    <div class="swiper mySwiper bg-blue-600 rounded-2xl my-10">
      <div class="swiper-wrapper items-center">
        <div class="card swiper-slide flex flex-col justify-center items-center">
          <img class="w-5/12" src="./assets/image/FeaturedPromos.svg" alt="">
          <img class="w-10/12" src="./assets/image/Electronics.webp" alt="">
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
    <!-- 4 image -->
    <div class="grid sm:grid-cols-4 gap-4">
      <a href="">
        <img src="./assets/image/sectionImage/l1.jpg" alt="">
      </a>
      <a href="">
        <img src="./assets/image/sectionImage/l2.jpg" alt="">
      </a>
      <a href="">
        <img src="./assets/image/sectionImage/l3.jpg" alt="">
      </a>
      <a href="">
        <img src="./assets/image/sectionImage/l4.jpg" alt="">
      </a>
    </div>
    <!-- section blog -->
    <div class="rounded-2xl mx-auto text-gray-100 my-10">
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
          <img class="rounded-xl" src="./assets/image/blog/7.jpg" alt="">
          <div class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b via-transparent from-gray-900 to-gray-900 rounded-xl"></div>
          <div class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3">
            <a rel="noopener noreferrer" href="#" class="px-3 py-2 text-xs font-semibold tracki uppercase text-gray-100 bgundefined">
              تکنولوژی
            </a>
            <div class="flex flex-col justify-start text-center text-gray-100">
              <span class="text-2xl font-semibold leadi tracki">06</span>
              <span class="text-sm">فروردین</span>
            </div>
          </div>
          <h2 class="z-10 p-5 absolute -bottom-1 group-hover:bottom-0 group-hover:block transition-all text-right">
            <a href="#" class="text-md opacity-90 text-gray-100 transition-all">
              هوشمند جدید اپل
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
          <img class="rounded-xl" src="./assets/image/blog/8.jpg" alt="">
          <div class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b via-transparent from-gray-900 to-gray-900 rounded-xl"></div>
          <div class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3">
            <a rel="noopener noreferrer" href="#" class="px-3 py-2 text-xs font-semibold tracki uppercase text-gray-100 bgundefined">
              تکنولوژی
            </a>
            <div class="flex flex-col justify-start text-center text-gray-100">
              <span class="text-2xl font-semibold leadi tracki">03</span>
              <span class="text-sm">اردیبهشت</span>
            </div>
          </div>
          <h2 class="z-10 p-5 absolute -bottom-1 group-hover:bottom-0 group-hover:block transition-all text-right">
            <a href="#" class="text-md opacity-90 text-gray-100 transition-all">
              عینک جدید هوشمند گوگل
            </a>
            <br>
            <a href="#" class="text-sm bg-gray-300 bg-opacity-30 hover:bg-opacity-45 w-fit rounded-lg px-3 py-1 opacity-90 text-gray-100 mt-2 hidden group-hover:block transition-all">
              مطالعه بیشتر
            </a>
          </h2>
        </div>
      </div>
    </div>
  </main>
  <!-- footer -->
  @endsection
