@extends('multivendor::seller.base')
@section('Content')
    <main class="p-3 md:p-5">
      <div class="bg-white rounded-lg border drop-shadow-lg p-5">
        <p class="text-center text-lg md:text-2xl text-gray-700">
          تخفیف هوشمند
        </p>
        <div class="mt-7 overflow-x-auto w-full">
          <form action="">
            <div class="mt-7 flex flex-col md:flex-row gap-5">
              <div class="flex flex-col md:w-1/2">
                <label for="" class="text-gray-800 text-sm">
                  انتخاب محصول:
                </label>
                <select name="" id="" class="border border-gray-400 rounded-lg shadow-lg mt-2 w-full p-2 focus:outline-gray-400">
                  <option value="-">
                    -
                  </option>
                  <option value="185257">
                    گوشی موبایل اپل (185257)
                  </option>
                  <option value="23582759">
                    جارو برقی(23582759)
                  </option>
                  <option value="4547474">
                    لپ تاپ ایسوس (4547474)
                  </option>
                  <option value="7474777">
                    تلویزیون سامسونگ (7474777)
                  </option>
                </select>
              </div>
              <div class="flex flex-col md:w-1/2">
                <label for="" class="text-gray-800 text-sm">
                  مقدار تخفیف:
                </label>
                <input type="text" class="border border-gray-400 rounded-lg shadow-lg mt-2 w-full p-2 focus:outline-gray-400" placeholder="درصد">
              </div>
            </div>
            <div class="mt-7 flex flex-col md:flex-row gap-5">
              <div class="flex flex-col md:w-1/2">
                <label for="" class="text-gray-800 text-sm">
                  از تاریخ:
                </label>
                <input type="text" class="border border-gray-400 rounded-lg shadow-lg mt-2 w-full p-2 focus:outline-gray-400" placeholder="مثال: 1403/04/18">
              </div>
              <div class="flex flex-col md:w-1/2">
                <label for="" class="text-gray-800 text-sm">
                  تا تاریخ:
                </label>
                <input type="text" class="border border-gray-400 rounded-lg shadow-lg mt-2 w-full p-2 focus:outline-gray-400" placeholder="مثال: 1403/04/24">
              </div>
            </div>
            <a href="" class="mx-auto w-full md:w-3/12 mt-10 block text-center shadow-lg px-2 py-3 text-sm bg-cyan-500 hover:bg-cyan-700 transition text-gray-100 rounded-lg">
              ثبت تخفیف
            </a>
          </form>
        </div>
      </div>
    </main>

    @endsection
