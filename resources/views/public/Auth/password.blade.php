<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./assets/css/output.css">
  <link rel="stylesheet" href="./assets/css/font.css">
  <link rel="stylesheet" href="./assets/css/app.css">

  <title>ورود</title>
</head>
<body class="bg-[#fcfcfc]">
  <div class="h-screen flex justify-center items-center">
    <div class="bg-white rounded-2xl shadow-box-sm w-11/12 sm:w-7/12 md:w-6/12 lg:w-4/12 xl:w-3/12 h-auto py-5 px-4">
      <img class="w-48 mx-auto" src="./assets/image/logo.png" alt="">
      <div class="mt-5 mb-4 text-lg text-zinc-700">
        رمز عبور را وارد کنید
      </div>
      <div class="flex flex-col gap-y-1">
        <input type="password" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-3 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
      </div>
      <div class="mt-5">
        <a class="text-xs text-red-400 hover:text-red-500 transition flex items-center" href="/verify_confrim">
          ورود با رمز یکبار مصرف
          <svg class="fill-red-400" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
        </a>
        <a class="mt-4 text-xs text-red-400 hover:text-red-500 transition flex items-center" href="">
          فراموشی رمز عبور
          <svg class="fill-red-400" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
        </a>
      </div>
      <button class="mx-auto w-full px-2 py-3 mt-10 text-sm bg-red-500 hover:bg-red-400 transition text-gray-100 rounded-lg">
        ورود
      </button>
    </div>
  </div>
</body>
</html>
