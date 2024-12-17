@extends('base')
@section('content')
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
    <div class="my-5 lg:my-10">
      <div class="md:flex gap-5">
      @include('public.profile.sidebar')

        <div class="md:w-9/12 bg-white shadow-box-md rounded-2xl p-5 mt-5 md:mt-0">
          <div class="">
            <div class="text-zinc-800 text-lg mb-4">
             پیغام ها:
            </div>
            <div class="space-y-5">
              <div class="bg-zinc-100 rounded-md">
                <div class="border-b border-b-zinc-500 px-3 py-2 text-zinc-800 text-sm flex justify-between items-center">
                  تایید نظر
                  <a href="" class="text-zinc-50 hover:text-zinc-100 transition bg-blue-400 px-3 py-1 text-xs rounded-md">
                    بهمن 1402
                   </a>
                </div>
                <div class="px-5 py-4 text-zinc-600 text-sm flex justify-between items-center">
                  نظر شما برای محصول کیبورد مدل تسکو تایید و منتشر شد.
                  <a href="" class="text-zinc-50 hover:text-zinc-100 transition bg-red-400 hover:bg-red-500 px-3 py-1 text-xs rounded-md">
                    جزئیات
                   </a>
                </div>
              </div>
              <div class="bg-zinc-100 rounded-md">
                <div class="border-b border-b-zinc-500 px-3 py-2 text-zinc-800 text-sm flex justify-between items-center">
                  ثبت سفارش
                  <a href="" class="text-zinc-50 hover:text-zinc-100 transition bg-blue-400 px-3 py-1 text-xs rounded-md">
                    دی 1402
                   </a>
                </div>
                <div class="px-5 py-4 text-zinc-600 text-sm flex justify-between items-center">
                  سفارش شما ثبت و درحال بسته بندی میباشد.
                  <a href="" class="text-zinc-50 hover:text-zinc-100 transition bg-red-400 hover:bg-red-500 px-3 py-1 text-xs rounded-md">
                    جزئیات
                   </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- footer -->
  @endsection
