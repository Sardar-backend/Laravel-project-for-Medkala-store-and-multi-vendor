<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./assets/css/output.css" />
    <link rel="stylesheet" href="./assets/css/seller-font.css" />

    <title>ثبت اطلاعات</title>

    <style>
      #signUpForm .form-header .stepIndicator::before {
        content: "";
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translateX(-50%);
        z-index: 9;
        width: 20px;
        height: 20px;
        background-color: #fecaca;
        border-radius: 50%;
        border: 3px solid #fee2e2;
      }
      #signUpForm .form-header .stepIndicator.active::before {
        background-color: #f87171;
        border: 3px solid #fecaca;
      }
      #signUpForm .form-header .stepIndicator.finish::before {
        background-color: #ef4444;
        border: 3px solid #f87171;
      }
      #signUpForm .form-header .stepIndicator::after {
        content: "";
        position: absolute;
        right: 50%;
        bottom: 8px;
        width: 100%;
        height: 3px;
        background-color: #fee2e2;
      }
      #signUpForm .form-header .stepIndicator.active::after {
        background-color: #fca5a5;
      }
      #signUpForm .form-header .stepIndicator.finish::after {
        background-color: #f87171;
      }
      #signUpForm .form-header .stepIndicator:last-child:after {
        display: none;
      }
      #signUpForm input.invalid {
        border: 2px solid #ffaba5;
      }
      #signUpForm .step {
        display: none;
      }
    </style>
  </head>
  <body class="bg-[#fcfcfc]">
    <div class="h-screen flex justify-center relative md:items-center">
      <div class="bg-white rounded-2xl border border-zinc-300 w-11/12 md:w-10/12 lg:w-7/12 max-w-4xl h-fit absolute top-10 md:static py-10 md:py-14">
        <form
          id="signUpForm"
          class="p-4 mb-8"
          action="#!">
          <!-- start step indicators -->
          <div class="form-header flex gap-3 mb-4 text-xs text-center">
            <span class="stepIndicator flex-1 pb-8 relative">
              نوع مشتری
            </span>
            <span class="stepIndicator flex-1 pb-8 relative">
              اطلاعات شخصی
            </span>
            <span class="stepIndicator flex-1 pb-8 relative">
              اطلاعات فروشگاه
            </span>
            <span class="stepIndicator flex-1 pb-8 relative">
              اطلاعات تحصیلی
            </span>
            <span class="stepIndicator flex-1 pb-8 relative">
              تایید و ادامه
            </span>
          </div>
          <!-- end step indicators -->

          <!-- step one -->
          <div class="step">
            <ul class="grid w-full gap-6 grid-cols-2 mb-5 text-base md:text-lg">
              <li>
                <input type="radio" id="1" name="hosting" value="1" class="hidden peer" required="">
                <label for="1" class="inline-flex items-center justify-center size-32 w-full text-gray-600 bg-white border border-zinc-400 rounded-lg cursor-pointer peer-checked:border-red-400 peer-checked:text-red-400 hover:text-gray-600 hover:bg-gray-100">
                  <div class="text-center">
                    حقیقی
                  </div>
                </label>
              </li>
              <li>
                <input type="radio" id="2" name="hosting" value="2" class="hidden peer" required="">
                <label for="2" class="inline-flex items-center justify-center size-32 w-full text-gray-600 bg-white border border-zinc-400 rounded-lg cursor-pointer peer-checked:border-red-400 peer-checked:text-red-400 hover:text-gray-600 hover:bg-gray-100">
                  <div class="text-center">
                    حقوقی
                  </div>
                </label>
              </li>
            </ul>
          </div>

          <!-- step two -->
          <div class="step">
            <div class="sm:flex gap-x-5 my-5">
              <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                <label class="text-sm text-zinc-700 flex">
                  نام:
                  <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                </label>
                <input type="text" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
              </div>
              <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                <label class="text-sm text-zinc-700 flex">
                  نام خانوادگی:
                  <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                </label>
                <input type="text" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
              </div>
            </div>
            <div class="sm:flex gap-x-5 my-5">
              <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                <label class="text-sm text-zinc-700 flex">
                  کد ملی:
                  <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                </label>
                <input type="text" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
              </div>
              <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                <label class="text-sm text-zinc-700 flex">
                  شماره کارت:
                  <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                </label>
                <input type="text" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
              </div>
            </div>
            <div class="sm:flex gap-x-5 my-5">
              <div class="w-full mb-2 sm:mb-0 flex flex-col gap-y-1">
                <label class="text-sm text-zinc-700 flex">
                  شماره شبا:
                  <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                </label>
                <span class="flex gap-x-2 items-center">
                  <input type="text" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
                  <span class="text-2xl text-zinc-600">
                    IR
                  </span>
                </span>
              </div>
            </div>
          </div>

          <!-- step three -->
          <div class="step">
            <div class="sm:flex gap-x-5 my-5">
              <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                <label class="text-sm text-zinc-700 flex">
                  نام فروشگاه:
                  <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                </label>
                <input type="text" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
              </div>
              <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                <label class="text-sm text-zinc-700 flex">
                  دسته بندی فروشگاه
                  <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                </label>
                <select name="select" class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                  <option value="">-</option>
                  <option value="2">فروش عروسک</option>
                  <option value="3">فروش مواد غذایی</option>
                  <option value="4">فروش اسباب بازی</option>
                  <option value="5">فروش لوازم آرایشی</option>
                </select>
              </div>
            </div>
            <div class="sm:flex gap-x-5 my-5">
              <div class="sm:w-1/2 flex gap-x-2 justify-center items-center pt-7 h-16">
                <span class="w-auto text-sm text-zinc-700">
                  آپلود مجوز
                </span>
                <label for="dropzone-file" class="w-8/12 sm:w-1/3 flex flex-col items-center justify-center border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                  <div class="flex flex-col items-center justify-center p-1">
                    <svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"></path>
                    </svg>
                  </div>
                  <input id="dropzone-file" type="file" class="opacity-0 absolute">
                </label>
              </div>
              <div class="sm:w-1/2 flex gap-x-2 justify-center items-center pt-7 h-16">
                <span class="w-auto text-sm text-zinc-700">
                  آپلود عکس از مغازه
                </span>
                <label for="dropzone-file" class="w-8/12 sm:w-1/3 flex flex-col items-center justify-center border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                  <div class="flex flex-col items-center justify-center p-1">
                    <svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"></path>
                    </svg>
                  </div>
                  <input id="dropzone-file" type="file" class="opacity-0 absolute">
                </label>
              </div>
            </div>
            <div class="flex flex-col gap-y-1 mb-5">
              <label class="text-sm text-zinc-700 flex">
                آدرس کامل مغازه:
              </label>
              <textarea name="mailTicket" cols="30" rows="7" class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-400 focus:outline-none"></textarea>
            </div>
          </div>

          <!-- step four -->
          <div class="step">
            <div class="sm:flex gap-x-5 my-5">
              <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                <label class="text-sm text-zinc-700 flex">
                  شغل اصلی:
                  <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                </label>
                <input type="text" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
              </div>
              <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                <label class="text-sm text-zinc-700 flex">
                  مدرک تحصیلی:
                  <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                </label>
                <select name="select" class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-red-300 focus:outline-none">
                  <option value="">-</option>
                  <option value="2">زیر دیپلم</option>
                  <option value="3"> دیپلم</option>
                  <option value="4"> کاردانی</option>
                  <option value="5">کارشناسی </option>
                  <option value="6">کارشناسی ارشد </option>
                  پ<option value="7">دکتری </option>
                </select>
              </div>
            </div>
          </div>

          <!-- step five -->
          <div class="step">
            <p class="text-center text-zinc-600 mt-4">
              ممنون از وقتی که گذاشتید.
            </p>
            <p class="text-center text-zinc-800 text-xl mt-5 mb-7">
              اگر از اطلاعات خودتون مطمئن هستید دکمه ثبت را بزنید.
            </p>
          </div>

          <!-- start previous / next buttons -->
          <div class="form-footer flex gap-3">
            <button
              type="button"
              id="prevBtn"
              class="flex-1 focus:outline-none border border-gray-300 py-2 px-5 rounded-lg shadow-sm text-center text-gray-700 bg-white hover:bg-gray-100 md:text-lg"
              onclick="nextPrev(-1)">
              مرحله قبل
            </button>
            <button
              type="button"
              id="nextBtn"
              class="flex-1 border border-transparent focus:outline-none p-3 rounded-md text-center text-white bg-red-500 hover:bg-red-400 transition-all md:text-lg"
              onclick="nextPrev(1)">
              مرحله بعد
            </button>
          </div>
          <!-- end previous / next buttons -->

        </form>
      </div>
    </div>
  </body>
  <script src="./assets/js/app.js"></script>
</html>
