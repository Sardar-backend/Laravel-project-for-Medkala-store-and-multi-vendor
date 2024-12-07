@extends('base')
@section('content')
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
    <div class="my-8 lg:my-10 py-5 lg:px-20">
      <div class="bg-white shadow-box-sm rounded-xl py-5 px-2 sm:px-6">
        <img class="mx-auto rounded-3xl" src="./assets/image/empty-cart.svg" alt="">
        <div class="text-zinc-700 text-center mt-7 mb-5 text-lg">
          سبد خرید شما خالی است!
        </div>
        <div class="flex justify-center items-center mb-5">
          <a class="text-zinc-600 hover:text-zinc-500 transition" href="./index.html">
            محصولات پرتخفیف
          </a>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#575757" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
        </div>
      </div>
    </div>
  </main>
  <!-- footer -->
  @endsection
