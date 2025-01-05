@extends('multivendor::seller.base')
@section('Content')
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>
    <main class="p-3 md:p-5">
      <div class="bg-white rounded-lg border drop-shadow-lg p-5">
        <p class="text-center text-lg md:text-2xl text-gray-700">
          تخفیف هوشمند
        </p>
                            <!-- @if ($errors->any())
            <div class="mb-4 p-4 bg-red-50 border-l-4 border-red-500 text-red-700">
                <p class="font-medium">خطاهایی رخ داده است:</p>
                <ul class="mt-2 list-disc list-inside text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif -->
        <div class="mt-7 overflow-x-auto w-full">
          <form action="{{route('seller-smart-discount-post')}}" id="FROM_DISCUST" method="post">
            @csrf
            <div class="mt-7 flex flex-col md:flex-row gap-5">
              <div class="flex flex-col md:w-1/2">
                <label for="" class="text-gray-800 text-sm">
                  انتخاب محصول:
                </label>
                <select name="product" id="" class="border border-gray-400 rounded-lg shadow-lg mt-2 w-full p-2 focus:outline-gray-400">
                  <option value="">
                    -
                  </option>
                  @foreach ( $products as $product )

                  <option value="{{$product->id}}">
                    {{$product->name}}
                  </option>
                  @endforeach
                </select>
              </div>
              <div class="flex flex-col md:w-1/2">
                <label for="" class="text-gray-800 text-sm">
                  مقدار تخفیف:
                </label>
                <input name="discust" type="number" class="border border-gray-400 rounded-lg shadow-lg mt-2 w-full p-2 focus:outline-gray-400" placeholder="درصد">
              </div>
            </div>
            <div class="mt-7 flex flex-col md:flex-row gap-5">
  <!-- فیلد شروع تاریخ -->
  <div class="flex flex-col md:w-1/2">
    <label for="start" class="text-gray-800 text-sm font-medium mb-1">
      از تاریخ:
    </label>
    <input
      id="start"
      name="start"
      class="border border-gray-400 rounded-lg shadow-lg w-full p-2 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent"
      required
    >
  </div>

  <!-- فیلد پایان تاریخ -->
  <div class="flex flex-col md:w-1/2">
    <label for="end" class="text-gray-800 text-sm font-medium mb-1">
      تا تاریخ:
    </label>
    <input
      id="end"
      name="end"
      class="border border-gray-400 rounded-lg shadow-lg w-full p-2 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent"
      required
    >
  </div>
</div>

<a  onclick="document.getElementById('FROM_DISCUST').submit();" class="mx-auto w-full md:w-3/12 mt-10 block text-center shadow-lg px-2 py-3 text-sm bg-cyan-500 hover:bg-cyan-700 transition text-gray-100 rounded-lg">
              ثبت تخفیف
            </a>
        </form>
    </div>
</div>
</main>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                  flatpickr("#start", {
                    enableTime: true, // فعال‌سازی انتخاب زمان
                    dateFormat: "Y-m-d H:i", // فرمت تاریخ و زمان
                    time_24hr: true, // استفاده از زمان ۲۴ ساعته
                  });

                  flatpickr("#end", {
                    enableTime: true,
                    dateFormat: "Y-m-d H:i",
                    time_24hr: true,
                  });
                });

                </script>
                <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    @endsection
