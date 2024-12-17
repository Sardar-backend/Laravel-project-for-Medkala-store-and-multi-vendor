@extends('base')
@section('content')
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
    <div class="bg-white shadow-xl my-5 lg:my-10 rounded-xl md:rounded-2xl p-3 md:p-5">
      <!-- SECTION TOP -->
      <div class="flex justify-center items-center lg:my-0">
          <div class="content-center px-4 my-8">
            <div class="text-center mb-2 text-zinc-700 text-lg">
              با خیال راحت با تیم پشتیبانی مدکالا ارتباط برقرار کنید
            </div>
            <div class="text-center text-zinc-600 text-sm">
              اطلاعات فرم را پر کنید تا کارشناسان ما با شما تماس بگیرند
            </div>
          </div>
      </div>
      <!-- SECTION DOWN -->
      <div class="grid">
        <div class="px-4 lg:px-10 my-10 mx-0 lg:mx-36">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
              <div class="flex items-center gap-x-1 bg-red-500 text-white px-3 py-3 rounded-lg">
                <svg class="fill-white bg-red-400 p-1 rounded-md h-8 w-8 md:h-10 md:w-10 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M222.37,158.46l-47.11-21.11-.13-.06a16,16,0,0,0-15.17,1.4,8.12,8.12,0,0,0-.75.56L134.87,160c-15.42-7.49-31.34-23.29-38.83-38.51l20.78-24.71c.2-.25.39-.5.57-.77a16,16,0,0,0,1.32-15.06l0-.12L97.54,33.64a16,16,0,0,0-16.62-9.52A56.26,56.26,0,0,0,32,80c0,79.4,64.6,144,144,144a56.26,56.26,0,0,0,55.88-48.92A16,16,0,0,0,222.37,158.46ZM176,208A128.14,128.14,0,0,1,48,80,40.2,40.2,0,0,1,82.87,40a.61.61,0,0,0,0,.12l21,47L83.2,111.86a6.13,6.13,0,0,0-.57.77,16,16,0,0,0-1,15.7c9.06,18.53,27.73,37.06,46.46,46.11a16,16,0,0,0,15.75-1.14,8.44,8.44,0,0,0,.74-.56L168.89,152l47,21.05h0s.08,0,.11,0A40.21,40.21,0,0,1,176,208Z"></path></svg>
                <span class="inline-block text-sm">
                  شماره تماس شرکت:
                </span>
                <span class="inline-block text-xs">
                  051-44444444
                </span>
              </div>
              <div class="flex items-center gap-x-1 bg-blue-500 text-white px-3 py-3 rounded-lg">
                <svg class="fill-white bg-blue-400 p-1 rounded-md h-8 w-8 md:h-10 md:w-10 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M128,24a104,104,0,0,0,0,208c21.51,0,44.1-6.48,60.43-17.33a8,8,0,0,0-8.86-13.33C166,210.38,146.21,216,128,216a88,88,0,1,1,88-88c0,26.45-10.88,32-20,32s-20-5.55-20-32V88a8,8,0,0,0-16,0v4.26a48,48,0,1,0,5.93,65.1c6,12,16.35,18.64,30.07,18.64,22.54,0,36-17.94,36-48A104.11,104.11,0,0,0,128,24Zm0,136a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z"></path></svg>
                <span class="inline-block text-sm">
                  ایمیل:
                </span>
                <span class="inline-block text-xs">
                  aaaaaaa@gmail.com
                </span>
              </div>
              <div class="flex items-center gap-x-1 bg-zinc-800 text-white px-3 py-3 rounded-lg">
                <svg class="fill-white bg-zinc-700 p-1 rounded-md h-8 w-8 md:h-10 md:w-10 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z"></path></svg>
                <span class="inline-block text-sm">
                  آدرس حضوری:
                </span>
                <span class="inline-block text-xs">
                  خراسان رضوی-مشهد-خیابان
                </span>
              </div>
              <div class="flex items-center gap-x-1 bg-green-500 text-white px-3 py-3 rounded-lg">
                <svg class="fill-white bg-green-400 p-1 rounded-md h-8 w-8 md:h-10 md:w-10 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                <span class="inline-block text-sm">
                  ایمیل:
                </span>
                <span class="inline-block text-xs">
                  aaaaaaa@gmail.com
                </span>
              </div>
            </div>
            <form action="" method="post">
                @csrf
            <div class="px-5 md:pr-24 my-10">
              <div class="md:flex gap-x-5 gap-y-5 mb-5">
                <div class="md:w-1/2">
                  <label for="name" class="mb-2 ml-1 text-xs opacity-80 flex">
                    نام و نام خانوادگی:
                    <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                  </label>
                  <input type="text" name="name" class="text-sm block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 outline-none transition-all focus:border-red-300">
                </div>
                <div class="md:w-1/2 mt-5 md:mt-0">
                  <label for="name" class="mb-2 ml-1 text-xs opacity-80 flex">
                    ایمیل:
                    <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                  </label>
                  <input type="email" name="email" class="text-sm block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 outline-none transition-all focus:border-red-300">
                </div>
              </div>
              <div class="w-full max-w-full shrink-0 md:w-10/12 md:flex-0">
                  <div class="mb-4">
                    <label for="description" class="mb-2 ml-1 text-xs opacity-80 flex">
                      توضیحات:
                      <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                    </label>
                    <textarea name="content" cols="20" rows="7" class="text-sm block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 outline-none transition-all focus:border-red-300"></textarea>
                  </div>
              </div>
              <span class="flex justify-center items-center my-5">
                  <button type="submit" class="px-7 py-2 text-center text-white bg-red-400 hover:bg-red-500 transition rounded-lg text-sm">ارسال</button>
              </span>
            </div>
            </form>
            <div>
              <iframe class="rounded-3xl w-full my-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5487.320972393403!2d59.6102611712093!3d36.28800020180445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f6c91ef5993b861%3A0xbc78a4fdeb4d00b5!2z2K3YsdmFINin2YXYp9mFINix2LbYpyDYudmE24zZhyDYp9mE2LPZhNin2YU!5e0!3m2!1sen!2sus!4v1690833786920!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
      </div>
    </div>
  </main>
  <!-- footer -->
  @endsection
