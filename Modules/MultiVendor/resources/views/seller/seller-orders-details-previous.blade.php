@extends('multivendor::seller.base')
@section('Content')
    <main class="p-3 md:p-5">
      <div class="bg-white rounded-lg border drop-shadow-lg p-5">
        <p class="text-center text-lg md:text-2xl text-gray-700">
          جزئیات سفارش
        </p>
        <p class="border-b pb-2 border-b-gray-300 text-lg md:text-xl text-gray-700 mt-7 mb-5">
          جزئیات مشتری
        </p>
        <div class="flex flex-col md:flex-row gap-5">
          <div class="flex flex-col md:w-1/2">
            <label for="" class="text-gray-800 text-sm">
              نام:
            </label>
            <label for="" class="border border-gray-300 rounded-lg mt-2 w-full p-2 text-gray-500">
              {{$user->name}}
            </label>
          </div>
          <div class="flex flex-col md:w-1/2">
            <label for="" class="text-gray-800 text-sm">
                شماره همراه
            </label>
            <label for="" class="border border-gray-300 rounded-lg mt-2 w-full p-2 text-gray-500">
              {{$user->phonenumber}}
            </label>
          </div>
        </div>
        <div class="mt-7 flex flex-col md:flex-row gap-5">
          <div class="flex flex-col md:w-1/2">
            <label for="" class="text-gray-800 text-sm">
              استان:
            </label>
            <label for="" class="border border-gray-300 rounded-lg mt-2 w-full p-2 text-gray-500">
              {{$Address->ostan}}
            </label>
          </div>
          <div class="flex flex-col md:w-1/2">
            <label for="" class="text-gray-800 text-sm">
              شهر:
            </label>
            <label for="" class="border border-gray-300 rounded-lg mt-2 w-full p-2 text-gray-500">
            {{$Address->city}}
            </label>
          </div>
        </div>
        <div class="mt-7 flex flex-col md:flex-row gap-5">
          <div class="flex flex-col md:w-1/2">
            <label for="" class="text-gray-800 text-sm">
              خیابان و کوچه:
            </label>
            <label for="" class="border border-gray-300 rounded-lg mt-2 w-full p-2 text-gray-500">
{{$Address->street}}
      </label>
          </div>
          <div class="flex flex-col md:w-1/2">
            <label for="" class="text-gray-800 text-sm">
              پلاک و واحد:
            </label>
            <label for="" class="border border-gray-300 rounded-lg mt-2 w-full p-2 text-gray-500">
{{$Address->plate}}
            </label>
          </div>
        </div>
        <div class="mt-7 flex flex-col md:flex-row gap-5">
          <div class="flex flex-col md:w-1/2">
            <label for="" class="text-gray-800 text-sm">
              شماره کارت حهت مرجوعی
            </label>
            <label for="" class="border border-gray-300 rounded-lg mt-2 w-full p-2 text-gray-500">
            {{$user->cart_number}}
            </label>
          </div>
          <div class="flex flex-col md:w-1/2">
            <label for="" class="text-gray-800 text-sm">
              کدپستی:
            </label>
            <label for="" class="border border-gray-300 rounded-lg mt-2 w-full p-2 text-gray-500">
{{$Address->post_number}}
            </label>
          </div>
        </div>
        <div class="mt-7 flex flex-col md:flex-row gap-5">
          <div class="flex flex-col md:w-1/2">
            <label for="" class="text-gray-800 text-sm">
              روز تحویل:
            </label>
            <label for="" class="border border-gray-300 rounded-lg mt-2 w-full p-2 text-gray-500">
              یکشنبه 1402/04/17
            </label>
          </div>
          <div class="flex flex-col md:w-1/2">
            <label for="" class="text-gray-800 text-sm">
              نوع ارسال:
            </label>
            <label for="" class="border border-gray-300 rounded-lg mt-2 w-full p-2 text-gray-500">
              پیشتاز
            </label>
          </div>
        </div>
        <div class="mt-7">
          <div class="flex flex-col">
            <label for="" class="text-gray-800 text-sm">
              توضیحات اضافه:
            </label>
            <label for="" class="border border-gray-300 rounded-lg mt-2 w-full p-2 text-gray-500">
              با سلام لطفا در روی جعبه بنویسید شکستنی است.
            </label>
          </div>
        </div>
        <p class="border-b pb-2 border-b-gray-300 text-lg md:text-xl text-gray-700 mt-10 mb-5">
         جزئیات محصولات
        </p>
        @foreach ( $order->products()->get() as $product)

        <div class="flex flex-col md:flex-row gap-5">
            <div class="flex flex-col md:w-1/2">
                <label for="" class="text-gray-800 text-sm">
                    نام محصول:
                </label>
                <label for="" class="border border-gray-300 rounded-lg mt-2 w-full p-2 text-gray-500">
                    {{$product->name}}
            </label>
          </div>
          <div class="flex flex-col md:w-1/2">
              <label for="" class="text-gray-800 text-sm">
                  رنگ محصول:
                </label>
                <label for="" class="border border-gray-300 rounded-lg mt-2 w-full p-2 text-gray-500">
                    آبی روشن
                </label>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-5 mt-7">

            <div class="flex flex-col md:w-1/2">
                <label for="" class="text-gray-800 text-sm">
                    تعداد محصول
                </label>
                <label for="" class="border border-gray-300 rounded-lg mt-2 w-full p-2 text-gray-500">
                    1
                </label>
            </div>
            <div class="flex flex-col md:w-1/2">
                <label for="" class="text-gray-800 text-sm">
                    اندازه محصول
                </label>
                <label for="" class="border border-gray-300 rounded-lg mt-2 w-full p-2 text-gray-500">
                    md
                </label>
          </div>
        </div>
        <br>
        <hr>
        @endforeach
      </div>
    </main>
@endsection
