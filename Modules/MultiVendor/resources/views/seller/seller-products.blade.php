@extends('multivendor::seller.base')
@section('Content')
    <main class="p-3 md:p-5">
      <div class="bg-white rounded-lg border drop-shadow-lg p-5">
        <p class="text-center text-lg md:text-2xl text-gray-700">
          محصولات ثبت شده
        </p>
        <div class="mt-7 overflow-x-auto w-full">
          <table class="w-full whitespace-nowrap">
              <tbody>
                <tr tabindex="0" class="focus:outline-none h-16 rounded text-sm md:text-base">
                  <td class="pr-7">
                    نام محصول
                  </td>
                  <td class="pl-24">
                    دسته بندی
                  </td>
                  <td class="pl-5" >قیمت</td>
                  <td class="pl-5" >گارانتی</td>
                  <td class="pl-5" >برند</td>
                  <td class="pl-10">
                      فعال | غیرفعال
                    </td>

                  <td>
                    وضعیت
                  </td>
                  <td>
                    اقدامات
                  </td>
                </tr>
                @foreach ($products as $product )
                <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 hover:bg-gray-100 transition text-xs md:text-sm">
                      <td class="pr-5">
                        <p class="text-gray-700 mr-2">
                          {{ $product->name}}
                        </p>
                      </td>
                      <td class="pl-24">
                        <p class="text-gray-600 ml-2">
                        {{ $product->category()->first()->name}}

                        </p>
                      </td>
                      <td class="pl-24">
                        <p class="text-gray-600 ml-2">
                        {{ $product->price}}

                        </p>
                      </td>
                      <td class="pl-24">
                        <p class="text-gray-600 ml-2">
                        {{ $product->garant}}

                        </p>
                      </td>
                      <td class="pl-24">
                        <p class="text-gray-600 ml-2">
                        {{ $product->Brand()->first()->name}}

                    </p>
                </td>
                    <td class="pl-10">
                    <label class="relative inline-flex cursor-pointer items-center">
                        <input id="switch-2{{$product->id}}" type="checkbox" class="peer sr-only" />
                        <label for="switch-2" class="hidden"></label>
                        <div class="peer h-4 w-11 rounded-full border bg-green-500 after:absolute after:-top-1 after:left-0 after:h-6 after:w-6 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-red-500 peer-checked:after:translate-x-full peer-focus:ring-red-500"></div>
                    </label>
                    </td>
                    <script>
                        var u =document.getElementById('switch-2{{$product->id}}').checked = {{$product->Active}} ;




                    </script>
                    <td>
                    @if ($product->Status)
                    <span class="bg-green-600 text-white px-3 py-1 rounded-full shadow-md text-sm font-bold">تائید شده</span>
                    @else
                    <span class="bg-red-600 text-white px-3 py-1 rounded-full shadow-md text-sm font-bold">تائید نشده</span>

                    @endif
                    </td>
                      <td class="pl-5">
                      <form action="/products/{{ $product->id }}" method="POST" class="inline-block ml-2" onsubmit="return confirm('آیا مطمئن هستید که می‌خواهید محصول را حذف کنید؟')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded-lg shadow-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-opacity-50">
                            حذف محصول
                        </button>
                    </form>

                    <a href="{{route('seller-product-edit' , ['id' => $product->id])}}" class="text-blue-500 py-2 px-4 bg-blue-100 rounded-md hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    ویرایش
                    </a>

                      </td>
                </tr>

                @endforeach
              </tbody>
          </table>
      </div>
      </div>
    </main>
@endsection
