@extends('public.seller.base')
@section('Content')
    <main class="p-3 md:p-5">
      <div class="bg-white rounded-lg border drop-shadow-lg p-5">
        <p class="text-center text-lg md:text-2xl text-gray-700">
          احراز هویت
        </p>
        <div class="mt-7 overflow-x-auto w-full">
          <form action="">
            <div class="mt-7 flex flex-col md:flex-row gap-5">
              <div class="flex flex-col md:w-1/2">
                <label for="" class="text-gray-800 text-sm">
                  تصویر روی کارت ملی:
                </label>
                <label for="dropzone-file" class="flex flex-col items-center justify-center mt-2 border-2 border-gray-200 hover:border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                  <div class="flex flex-col items-center justify-center p-5">
                    <svg class="fill-gray-600" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="" viewBox="0 0 256 256"><path d="M178.34,165.66,160,147.31V208a8,8,0,0,1-16,0V147.31l-18.34,18.35a8,8,0,0,1-11.32-11.32l32-32a8,8,0,0,1,11.32,0l32,32a8,8,0,0,1-11.32,11.32ZM160,40A88.08,88.08,0,0,0,81.29,88.68,64,64,0,1,0,72,216h40a8,8,0,0,0,0-16H72a48,48,0,0,1,0-96c1.1,0,2.2,0,3.29.12A88,88,0,0,0,72,128a8,8,0,0,0,16,0,72,72,0,1,1,100.8,66,8,8,0,0,0,3.2,15.34,7.9,7.9,0,0,0,3.2-.68A88,88,0,0,0,160,40Z"></path></svg>
                  </div>
                  <input id="dropzone-file" type="file" class="hidden">
                </label>
              </div>
              <div class="flex flex-col md:w-1/2">
                <label for="" class="text-gray-800 text-sm">
                  تصویر پشت کارت ملی:
                </label>
                <label for="dropzone-file" class="flex flex-col items-center justify-center mt-2 border-2 border-green-400 hover:border-green-500 transition-all border-dashed rounded-lg cursor-pointer bg-green-100 hover:bg-green-200">
                  <div class="flex flex-col items-center justify-center p-5">
                    <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M160,40A88.09,88.09,0,0,0,81.29,88.67,64,64,0,1,0,72,216h88a88,88,0,0,0,0-176Zm0,160H72a48,48,0,0,1,0-96c1.1,0,2.2,0,3.29.11A88,88,0,0,0,72,128a8,8,0,0,0,16,0,72,72,0,1,1,72,72Zm37.66-93.66a8,8,0,0,1,0,11.32l-48,48a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L144,148.69l42.34-42.35A8,8,0,0,1,197.66,106.34Z"></path></svg>
                  </div>
                  <input id="dropzone-file" type="file" class="hidden">
                </label>
              </div>
            </div>
            <div class="mt-7 flex flex-col md:flex-row gap-5">
              <div class="flex flex-col md:w-1/2">
                <label for="" class="text-gray-800 text-sm">
                  صفحه اول شناسنامه:
                </label>
                <label for="dropzone-file" class="flex flex-col items-center justify-center mt-2 border-2 border-gray-200 hover:border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                  <div class="flex flex-col items-center justify-center p-5">
                    <svg class="fill-gray-600" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="" viewBox="0 0 256 256"><path d="M178.34,165.66,160,147.31V208a8,8,0,0,1-16,0V147.31l-18.34,18.35a8,8,0,0,1-11.32-11.32l32-32a8,8,0,0,1,11.32,0l32,32a8,8,0,0,1-11.32,11.32ZM160,40A88.08,88.08,0,0,0,81.29,88.68,64,64,0,1,0,72,216h40a8,8,0,0,0,0-16H72a48,48,0,0,1,0-96c1.1,0,2.2,0,3.29.12A88,88,0,0,0,72,128a8,8,0,0,0,16,0,72,72,0,1,1,100.8,66,8,8,0,0,0,3.2,15.34,7.9,7.9,0,0,0,3.2-.68A88,88,0,0,0,160,40Z"></path></svg>
                  </div>
                  <input id="dropzone-file" type="file" class="hidden">
                </label>
              </div>
              <div class="flex flex-col md:w-1/2">
                <label for="" class="text-gray-800 text-sm">
                  امضا:
                </label>
                <label for="dropzone-file" class="flex flex-col items-center justify-center mt-2 border-2 border-gray-200 hover:border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                  <div class="flex flex-col items-center justify-center p-5">
                    <svg class="fill-gray-600" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="" viewBox="0 0 256 256"><path d="M178.34,165.66,160,147.31V208a8,8,0,0,1-16,0V147.31l-18.34,18.35a8,8,0,0,1-11.32-11.32l32-32a8,8,0,0,1,11.32,0l32,32a8,8,0,0,1-11.32,11.32ZM160,40A88.08,88.08,0,0,0,81.29,88.68,64,64,0,1,0,72,216h40a8,8,0,0,0,0-16H72a48,48,0,0,1,0-96c1.1,0,2.2,0,3.29.12A88,88,0,0,0,72,128a8,8,0,0,0,16,0,72,72,0,1,1,100.8,66,8,8,0,0,0,3.2,15.34,7.9,7.9,0,0,0,3.2-.68A88,88,0,0,0,160,40Z"></path></svg>
                  </div>
                  <input id="dropzone-file" type="file" class="hidden">
                </label>
              </div>
            </div>
            <div class="mt-7 flex flex-col md:flex-row gap-5">
              <div class="flex flex-col md:w-1/2">
                <label for="" class="text-gray-800 text-sm">
                  عکس پرسنلی:
                </label>
                <label for="dropzone-file" class="flex flex-col items-center justify-center mt-2 border-2 border-gray-200 hover:border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                  <div class="flex flex-col items-center justify-center p-5">
                    <svg class="fill-gray-600" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="" viewBox="0 0 256 256"><path d="M178.34,165.66,160,147.31V208a8,8,0,0,1-16,0V147.31l-18.34,18.35a8,8,0,0,1-11.32-11.32l32-32a8,8,0,0,1,11.32,0l32,32a8,8,0,0,1-11.32,11.32ZM160,40A88.08,88.08,0,0,0,81.29,88.68,64,64,0,1,0,72,216h40a8,8,0,0,0,0-16H72a48,48,0,0,1,0-96c1.1,0,2.2,0,3.29.12A88,88,0,0,0,72,128a8,8,0,0,0,16,0,72,72,0,1,1,100.8,66,8,8,0,0,0,3.2,15.34,7.9,7.9,0,0,0,3.2-.68A88,88,0,0,0,160,40Z"></path></svg>
                  </div>
                  <input id="dropzone-file" type="file" class="hidden">
                </label>
              </div>
              <div class="flex flex-col md:w-1/2">
                <label for="" class="text-gray-800 text-sm">
                  جواز کار:
                </label>
                <label for="dropzone-file" class="flex flex-col items-center justify-center mt-2 border-2 border-gray-200 hover:border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                  <div class="flex flex-col items-center justify-center p-5">
                    <svg class="fill-gray-600" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="" viewBox="0 0 256 256"><path d="M178.34,165.66,160,147.31V208a8,8,0,0,1-16,0V147.31l-18.34,18.35a8,8,0,0,1-11.32-11.32l32-32a8,8,0,0,1,11.32,0l32,32a8,8,0,0,1-11.32,11.32ZM160,40A88.08,88.08,0,0,0,81.29,88.68,64,64,0,1,0,72,216h40a8,8,0,0,0,0-16H72a48,48,0,0,1,0-96c1.1,0,2.2,0,3.29.12A88,88,0,0,0,72,128a8,8,0,0,0,16,0,72,72,0,1,1,100.8,66,8,8,0,0,0,3.2,15.34,7.9,7.9,0,0,0,3.2-.68A88,88,0,0,0,160,40Z"></path></svg>
                  </div>
                  <input id="dropzone-file" type="file" class="hidden">
                </label>
              </div>
            </div>
            <div class="mt-7 flex flex-col md:flex-row gap-5">
              <div class="flex flex-col md:w-1/2">
                <label for="" class="text-gray-800 text-sm">
                  ویدئو از خود و تکرار جمله (ایران سرای من است.)
                </label>
                <label for="dropzone-file" class="flex flex-col items-center justify-center mt-2 border-2 border-gray-200 hover:border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                  <div class="flex flex-col items-center justify-center p-5">
                    <svg class="fill-gray-600" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="" viewBox="0 0 256 256"><path d="M178.34,165.66,160,147.31V208a8,8,0,0,1-16,0V147.31l-18.34,18.35a8,8,0,0,1-11.32-11.32l32-32a8,8,0,0,1,11.32,0l32,32a8,8,0,0,1-11.32,11.32ZM160,40A88.08,88.08,0,0,0,81.29,88.68,64,64,0,1,0,72,216h40a8,8,0,0,0,0-16H72a48,48,0,0,1,0-96c1.1,0,2.2,0,3.29.12A88,88,0,0,0,72,128a8,8,0,0,0,16,0,72,72,0,1,1,100.8,66,8,8,0,0,0,3.2,15.34,7.9,7.9,0,0,0,3.2-.68A88,88,0,0,0,160,40Z"></path></svg>
                  </div>
                  <input id="dropzone-file" type="file" class="hidden">
                </label>
              </div>
              <div class="flex flex-col md:w-1/2">
                <label for="" class="text-gray-800 text-sm">
                  ارسال قرار داد بین مد کالا و شخص حقیقی:
                </label>
                <label for="dropzone-file" class="flex flex-col items-center justify-center mt-2 border-2 border-gray-200 hover:border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                  <div class="flex flex-col items-center justify-center p-5">
                    <svg class="fill-gray-600" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="" viewBox="0 0 256 256"><path d="M178.34,165.66,160,147.31V208a8,8,0,0,1-16,0V147.31l-18.34,18.35a8,8,0,0,1-11.32-11.32l32-32a8,8,0,0,1,11.32,0l32,32a8,8,0,0,1-11.32,11.32ZM160,40A88.08,88.08,0,0,0,81.29,88.68,64,64,0,1,0,72,216h40a8,8,0,0,0,0-16H72a48,48,0,0,1,0-96c1.1,0,2.2,0,3.29.12A88,88,0,0,0,72,128a8,8,0,0,0,16,0,72,72,0,1,1,100.8,66,8,8,0,0,0,3.2,15.34,7.9,7.9,0,0,0,3.2-.68A88,88,0,0,0,160,40Z"></path></svg>
                  </div>
                  <input id="dropzone-file" type="file" class="hidden">
                </label>
              </div>
            </div>
            <a href="" class="mx-auto w-full md:w-3/12 mt-10 block text-center shadow-lg px-2 py-3 text-sm bg-green-500 hover:bg-green-700 transition text-gray-100 rounded-lg">
              ارسال مدارک
             </a>
          </form>
        </div>
      </div>
    </main>
@endsection
