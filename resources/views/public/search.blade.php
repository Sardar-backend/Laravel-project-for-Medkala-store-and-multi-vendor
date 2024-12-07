@extends('base')
@section('content')
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
                      <div id="shop-price-slider" class="range-slider-target range-slider-rtl range-slider-horizontal range-slider-txt-dir-rtl"><div class="range-slider-base"><div class="range-slider-connects"><div class="range-slider-connect" style="transform: translate(0%, 0px) scale(1, 1);"></div></div><div class="range-slider-origin" style="transform: translate(100%, 0px); z-index: 5;"><div class="range-slider-handle range-slider-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="99999999.0" aria-valuenow="0.0" aria-valuetext="0"><div class="range-slider-touch-area"></div></div></div><div class="range-slider-origin" style="transform: translate(0%, 0px); z-index: 4;"><div class="range-slider-handle range-slider-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="100000000.0" aria-valuenow="100000000.0" aria-valuetext="100,000,000"><div class="range-slider-touch-area"></div></div></div></div></div>
                      <div class="flex items-center justify-between">
                        <div class="text-red-400">
                          <span class="text-xs font-semibold xl:text-sm" id="shop-price-slider-min">0</span>
                          <span class="text-xs">تومان</span>
                        </div>
                        <div class="text-red-400">
                          <span class="text-xs font-semibold xl:text-sm" id="shop-price-slider-max">100,000,000</span>
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
                     فقط محصولات موجود در انبار
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
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 mt-5">
            @foreach ( $products as $product )

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

            @endforeach

        </div>
        <!-- <div class="mt-8">
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
        <div class="mt-8">
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
  <!-- footer -->
  @endsection
