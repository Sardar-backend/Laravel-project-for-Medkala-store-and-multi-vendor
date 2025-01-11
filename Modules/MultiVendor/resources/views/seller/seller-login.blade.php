<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./assets/css/output.css">
  <link rel="stylesheet" href="./assets/css/seller-font.css">

  <title>ورود فروشنده ها</title>
</head>
<body class="bg-[#fcfcfc]">
  <div class="h-screen flex justify-center items-center">
    <div class="bg-white rounded-2xl border border-zinc-300 w-11/12 sm:w-7/12 md:w-10/12 lg:w-7/12 h-auto mt-32 md:mt-0 px-10 py-10 md:py-14 grid grid-cols-1 md:grid-cols-2 gap-y-5">
      <div>
        <form action="">
          <div class="text-xs text-zinc-600 text-center">
            فروشنده گرامی خوش آمدید.
          </div>
          <div class="text-zinc-700 mt-10 text-sm">
            آماده اید برای فروش ؟؟؟
          </div>
          <div class="text-zinc-700 mt-5 mb-3 text-sm">
            برای شروع شماره موبایل خود را وارد کنید:
          </div>
          <input type="tel" name="" class="text-sm w-full rounded-lg border border-gray-400 bg-white px-3 py-3 text-gray-700 outline-none transition-all focus:border-red-500" placeholder="09.........">
          <a href="./seller-verify.html" class="block text-center mx-auto w-full px-2 py-3 mt-12 text-sm bg-red-500 hover:bg-red-400 transition text-gray-100 rounded-lg">
            تایید
          </a>
          <div class="flex justify-center mt-6">
            <a href="{{route('seller-guidance')}}" class="border-l border-l-zinc-400 text-zinc-600 hover:text-zinc-800 transition-all text-xs px-3">
              راهنمای ثبت نام
            </a>
            <a href="" class="text-zinc-600 hover:text-zinc-800 transition-all text-xs px-3">
              پشتیبانی
            </a>
          </div>
        </form>
      </div>
      <img src="./assets/image/seller/seller.svg" alt="">
    </div>
  </div>
</body>
</html>
