@extends('base')
@section('content')
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
    <div class="bg-white shadow-xl my-5 lg:my-10 rounded-xl md:rounded-2xl p-3 md:p-5">
      <div class="relative flex justify-center items-center mb-5">
        <img class="w-full h-96 md:h-[500px] object-center object-cover rounded-xl blur-sm" src="./assets/image/workspace.jpg" alt="">
        <div class="absolute top-0 bg-zinc-400 bg-opacity-50 w-full h-full flex justify-center items-center text-white font-semibold rounded-xl">
          <div class="text-center space-y-5">
            <div class="text-3xl sm:text-3xl md:text-5xl "> مد کالا تقدیم می کند</div>
            <div class="text-xl sm:text-2xl md:text-4xl">به شرکت مهندسی و فروشگاهی  مد کالا خوش آمدید</div>
          </div>
        </div>
      </div>
      <div class="leading-10">
        {!!$about!!}
      </div>
    </div>
  </main>
  <!-- footer -->
  @endsection
