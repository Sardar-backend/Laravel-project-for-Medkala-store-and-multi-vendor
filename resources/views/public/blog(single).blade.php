@extends('base')
@section('content')
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
    <!-- top section -->
    <div class="lg:mr-8 lg:ml-16 h-full p-5 text-sm bg-white rounded-xl shadow-box-sm flex items-center gap-x-2">
      <a href="" class="text-zinc-800 hover:text-red-400 transition">
        خانه
      </a>
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
      </div>
      <a href="" class="text-zinc-800 hover:text-red-400 transition">
        صفحه
      </a>
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
      </div>
      <a class="text-zinc-800 hover:text-red-400 transition" href="">
        وبلاگ
      </a>
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
      </div>
      <a class="text-red-400" href="">
        معرفی نینتندو سوئیچ 2
      </a>
    </div>
    <!-- text blogs -->
    <div class="my-2 py-5 lg:px-10 flex flex-col lg:flex-row gap-4">
      <div class="lg:w-10/12">
        <div class="bg-white rounded-xl shadow-box-md p-4">
          <div class="flex gap-4 pb-2 flex-wrap">
            <div class="text-xs flex gap-x-1 items-center text-zinc-400">
              <svg class="fill-zinc-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Z"></path></svg>
              1402/11/11
            </div>
            <div class="text-xs flex gap-x-1 items-center text-zinc-400">
              <svg class="fill-zinc-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path></svg>
              ارسال شده توسط امیررضا کریمی
            </div>
            <div class="text-xs flex gap-x-1 items-center text-zinc-400">
              <svg class="fill-zinc-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M224,64H154.67L126.93,43.2a16.12,16.12,0,0,0-9.6-3.2H72A16,16,0,0,0,56,56V72H40A16,16,0,0,0,24,88V200a16,16,0,0,0,16,16H192.89A15.13,15.13,0,0,0,208,200.89V184h16.89A15.13,15.13,0,0,0,240,168.89V80A16,16,0,0,0,224,64ZM192,200H40V88H85.33l27.74,20.8a16.12,16.12,0,0,0,9.6,3.2H192Zm32-32H208V112a16,16,0,0,0-16-16H122.67L94.93,75.2a16.12,16.12,0,0,0-9.6-3.2H72V56h45.33l27.74,20.8a16.12,16.12,0,0,0,9.6,3.2H224Z"></path></svg>
              دسته بندی گیمینگ
            </div>
            <div class="text-xs flex gap-x-1 items-center text-zinc-400">
              <svg class="fill-zinc-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z"></path></svg>
              73بازدید
            </div>
          </div>
          <img class="rounded-lg" src="./assets/image/blog/10.jpg" alt="">
          <div class="mt-7 text-sm">
            <a href="" class="text-xl md:text-2xl text-zinc-700">
              معرفی نینتندو سوییچ 2
            </a>
            <div class="bg-red-400 w-6/12 h-px mt-5"></div>
            <div class="text-zinc-600 my-7 flex flex-wrap gap-y-5">
              <span class="leading-8 font-normal">
                لپ‌تاپ‌های گیمینگ همیشه جذابیت زیادی دارند؛ زیرا از یک طرف از طراحی پر زرق‌و‌برق بهره می‌برد و از سوی دیگر می‌توانند سنگین‌ترین برنامه‌ها و بازی‌ها را اجرا کنند. این نوع لپ‌تاپ‌ها طبیعتا قیمت بسیار بالایی دارند ولی در این ویدیو به بررسی لپ‌تاپ ایسوس TUF Gaming F15 می‌پردازیم که نسبت به امکاناتی که ارائه می‌دهد، قیمت منطقی دارد و در نتیجه در بازار ایران مورد توجه زیادی قرار گرفته است.
              </span>
              <span class="leading-8 font-normal">
                همین ابتدا باید بگوییم که در این ویدیو به طور مشخص سراغ مدل FX506HC از این لپ‌تاپ رفته‌ایم که از نسل ۱۱ اینتل استفاده می‌کند. این لپ‌تاپ مجهز به پردازنده‌ی Core i5 11400H است و در کنار آن RTX 3050 به عنوان پردازنده گرافیکی انجام وظیفه می‌کند. در ضمن نباید بهره‌گیری از ۸ گیگابایت رم و ۵۱۲ گیگابایت حافظه SSD را از قلم بیندازیم.
              </span>
              <span class="leading-8 font-normal">
                این لپ‌تاپ می‌تواند بازی God Of War را در تنظیمات متوسط و رزولوشن Full HD را با سرعت ۵۵ تا ۶۵ فریم در ثانیه اجرا کند. بازی سنگین و البته بسیار جذاب Red Dead 2 را می‌توانید با تنظیمات گرافیکی بالا و همین رزولوشن، با نرخ ۵۰ فریم در ثانیه تجربه کنید. اگر به بازی آنلاین Call Of Duty علاقه زیادی دارید، لپ‌تاپ ایسوس TUF Gaming F15 قادر است این بازی را با گرافیک بالا و نرخ حدود ۵۰ فریم در ثانیه اجرا کند.
              </span>
              <span class="leading-8 font-normal">
                در نهایت برای اینکه لپ‌تاپ ایسوس TUF Gaming F15 را به چالش بکشیم، باید به سراغ بازی بسیار سنگین CyberPunk 2077 برویم. برای اجرای این بازی با تنظیمات گرافیکی متوسط، با نرخ ۴۰ تا ۵۰ فریم در ثانیه روبرو می‌شوید. یکی از مهم‌ترین ویژگی‌های پردازنده گرافیکی این لپ‌تاپ این است که از فناوری DLSS پشتیبانی می‌کند و اگر بازی موردنظر از این مشخصه بهره می‌برد، توصیه می‌کنیم آن را فعال کنید. زیرا با انجام این کار، در ازای افت ناچیز کیفیت تصویر، فریم‌ریت به طور قابل توجهی افزایش پیدا می‌کند.
              </span>
              <span class="leading-8 font-normal">
                حدود دو سال از عرضه‌ی لپ‌تاپ FX506HC به بازار می‌گذرد. احتمالا بسیاری از افراد به شما توصیه می‌کنند سراغ لپ‌تاپی بروید که حداقل از پردازنده نسل ۱۲ یا نسل ۱۳ اینتل استفاده می‌کند. اما این لپ‌تاپ می‌تواند تمام بازی‌ها را به‌خوبی اجرا کند که البته اگر بازی موردنظر بسیار سنگین باشد، شاید باید به تنظیمات گرافیکی متوسط یا پایین راضی شوید.  ولی در این محدوده‌ی قیمتی، بدون شک یکی از بهترین گزینه‌های موجود در بازار ایران محسوب می‌شود.
              </span>
            </div>
          </div>
          <img class="rounded-lg w-10/12 mx-auto" src="./assets/image/blog/10.jpg" alt="">
          <div class="mt-7 text-sm">
            <div class="text-zinc-600 my-7 flex flex-wrap gap-y-5">
              <span class="leading-8 font-normal">
                این لپ‌تاپ می‌تواند بازی God Of War را در تنظیمات متوسط و رزولوشن Full HD را با سرعت ۵۵ تا ۶۵ فریم در ثانیه اجرا کند. بازی سنگین و البته بسیار جذاب Red Dead 2 را می‌توانید با تنظیمات گرافیکی بالا و همین رزولوشن، با نرخ ۵۰ فریم در ثانیه تجربه کنید. اگر به بازی آنلاین Call Of Duty علاقه زیادی دارید، لپ‌تاپ ایسوس TUF Gaming F15 قادر است این بازی را با گرافیک بالا و نرخ حدود ۵۰ فریم در ثانیه اجرا کند.
              </span>
              <span class="leading-8 font-normal">
                در نهایت برای اینکه لپ‌تاپ ایسوس TUF Gaming F15 را به چالش بکشیم، باید به سراغ بازی بسیار سنگین CyberPunk 2077 برویم. برای اجرای این بازی با تنظیمات گرافیکی متوسط، با نرخ ۴۰ تا ۵۰ فریم در ثانیه روبرو می‌شوید. یکی از مهم‌ترین ویژگی‌های پردازنده گرافیکی این لپ‌تاپ این است که از فناوری DLSS پشتیبانی می‌کند و اگر بازی موردنظر از این مشخصه بهره می‌برد، توصیه می‌کنیم آن را فعال کنید. زیرا با انجام این کار، در ازای افت ناچیز کیفیت تصویر، فریم‌ریت به طور قابل توجهی افزایش پیدا می‌کند.
              </span>
              <span class="leading-8 font-normal">
                حدود دو سال از عرضه‌ی لپ‌تاپ FX506HC به بازار می‌گذرد. احتمالا بسیاری از افراد به شما توصیه می‌کنند سراغ لپ‌تاپی بروید که حداقل از پردازنده نسل ۱۲ یا نسل ۱۳ اینتل استفاده می‌کند. اما این لپ‌تاپ می‌تواند تمام بازی‌ها را به‌خوبی اجرا کند که البته اگر بازی موردنظر بسیار سنگین باشد، شاید باید به تنظیمات گرافیکی متوسط یا پایین راضی شوید.  ولی در این محدوده‌ی قیمتی، بدون شک یکی از بهترین گزینه‌های موجود در بازار ایران محسوب می‌شود.
              </span>
            </div>
          </div>
        </div>
        <div class="flex flex-col p-4 mt-5 rounded-2xl bg-white shadow-box-md">
          <!-- top comments -->
          <div>
            <div class="text-zinc-600">5 دیدگاه برای معرفی نینتندو سوییچ 2</div>
          </div>
          <!-- COMMENT -->
          <div class="border rounded-xl px-5 py-3 my-2">
            <div class="flex items-center gap-x-1">
              <svg class="fill-zinc-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path></svg>
              <div class="text-xs opacity-60">
                امیررضا -
                11 بهمن 1402
              </div>
            </div>
            <div class="opacity-60 text-sm py-3">
              نظر شما درباره این لپ تاپ چیه؟
            </div>
            <div>
              <button class="mr-auto bg-blue-500 text-zinc-50 rounded-lg px-4 py-1 md:w-auto text-sm flex justify-center items-center">
                پاسخ
              </button>
            </div>
            <!-- RESPONSE -->
            <div class="bg-blue-100 rounded-xl pl-2 pr-5 sm:pr-8 py-3 mt-2">
              <div class="flex items-center gap-x-1">
                <svg class="fill-zinc-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path></svg>
                <div class="text-xs opacity-60">
                  امیررضا -
                  11 بهمن 1402
                </div>
              </div>
              <div class="opacity-60 text-sm py-3">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحامه و مجله در ستون و سطرآنچنان که لازم است.
              </div>
              <div>
                <button class="mr-auto bg-blue-500 text-zinc-50 rounded-lg px-4 py-1 md:w-auto text-sm flex justify-center items-center">
                  پاسخ
                </button>
              </div>
            </div>
          </div>
          <div class="border rounded-xl px-5 py-3 my-2">
            <div class="flex items-center gap-x-1">
              <svg class="fill-zinc-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path></svg>
              <div class="text-xs opacity-60">
                امیررضا -
                11 بهمن 1402
              </div>
            </div>
            <div class="opacity-60 text-sm py-3">
              لورم ایپسوم متن ساختگی با تولید سادگی نامفهو است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
            </div>
            <div>
              <button  class="mr-auto bg-blue-500 text-zinc-50 rounded-lg px-4 py-1 md:w-auto text-sm flex justify-center items-center">
                پاسخ
              </button>
            </div>
          </div>
          <div class="border rounded-xl px-5 py-3 my-2">
            <div class="flex items-center gap-x-1">
              <svg class="fill-zinc-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path></svg>
              <div class="text-xs opacity-60">
                امیررضا -
                11 بهمن 1402
              </div>
            </div>
            <div class="opacity-60 text-sm py-3">
              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گ ستون و سطرآنچنان که لازم است.
            </div>
            <div>
              <button  class="mr-auto bg-blue-500 text-zinc-50 rounded-lg px-4 py-1 md:w-auto text-sm flex justify-center items-center">
                پاسخ
              </button>
            </div>
            <!-- RESPONSE -->
            <div class="bg-blue-100 rounded-xl pl-2 pr-5 sm:pr-8 py-3 mt-2">
              <div class="flex items-center gap-x-1">
                <svg class="fill-zinc-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path></svg>
                <div class="text-xs opacity-60">
                  امیررضا -
                  11 بهمن 1402
                </div>
              </div>
              <div class="opacity-60 text-sm py-3">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکهلازم است.
              </div>
              <div>
                <button  class="mr-auto bg-blue-500 text-zinc-50 rounded-lg px-4 py-1 md:w-auto text-sm flex justify-center items-center">
                  پاسخ
                </button>
              </div>
            </div>
          </div>
          <!-- BOX SENT COMMENT -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-4">
              <label for="username" class="inline-block mb-2 ml-1 font-semibold text-xs text-slate-700">نام شما:</label>
              <input type="text" class="text-sm block w-full rounded-lg border border-gray-400 bg-white px-3 py-2 font-normal text-gray-700 outline-none focus:border-red-300">
            </div>
            <div class="mb-4">
              <label for="username" class="inline-block mb-2 ml-1 font-semibold text-xs text-slate-700">ایمیل شما:</label>
              <input type="text" class="text-sm block w-full rounded-lg border border-gray-400 bg-white px-3 py-2 font-normal text-gray-700 outline-none focus:border-red-300">
            </div>
          </div>
          <div class="mb-4">
            <label for="mailTicket" class="inline-block mb-2 ml-1 font-semibold text-xs text-slate-700">نظر شما:</label>
            <textarea cols="30" rows="5" class="text-sm block w-full rounded-lg border border-gray-400 bg-white px-3 py-2 font-normal text-gray-700 outline-none focus:border-red-300"></textarea>
          </div>
          <button class="inline-block px-8 py-2 ml-auto text-center text-white bg-red-400 hover:bg-red-500 transition rounded-lg shadow-md text-xs">ارسال نظر</button>
        </div>
      </div>
      <div class="lg:w-4/12">
        <div class="p-3 bg-white rounded-xl shadow-box-sm mb-4">
          <div class="mx-auto flex gap-x-1 group items-center text-right w-full px-2 py-3 text-sm text-gray-600 rounded-lg mb-2 font-semibold">
            <span class="w-44">
              جدیدترین مقالات
            </span>
            <span class="bg-red-400 w-full h-px"></span>
          </div>
          <ul class="grid w-full gap-3">
            <li>
              <label class="flex items-center justify-start gap-x-2 w-full p-2 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer hover:text-gray-600 hover:bg-gray-100">
                <img class="max-w-20 rounded-md" src="./assets/image/blog/2.jpg" alt="">
                <div class="text-center flex flex-col space-y-3">
                  <div class="text-xs sm:text-sm">طرز پخت تاکو مثل مکزیکی ها</div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-400">
                    <svg class="fill-gray-400" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                    <span>
                      2 دقیقه
                    </span>
                  </div>
                </div>
              </label>
            </li>
            <li>
              <label class="flex items-center justify-start gap-x-2 w-full p-2 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer hover:text-gray-600 hover:bg-gray-100">
                <img class="max-w-20 rounded-md" src="./assets/image/blog/3.jpg" alt="">
                <div class="text-center flex flex-col space-y-3">
                  <div class="text-xs sm:text-sm">طرز پخت تاکو مثل مکزیکی ها</div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-400">
                    <svg class="fill-gray-400" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                    <span>
                      2 دقیقه
                    </span>
                  </div>
                </div>
              </label>
            </li>
            <li>
              <label class="flex items-center justify-start gap-x-2 w-full p-2 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer hover:text-gray-600 hover:bg-gray-100">
                <img class="max-w-20 rounded-md" src="./assets/image/blog/1.jpg" alt="">
                <div class="text-center flex flex-col space-y-3">
                  <div class="text-xs sm:text-sm">طرز پخت تاکو مثل مکزیکی ها</div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-400">
                    <svg class="fill-gray-400" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                    <span>
                      2 دقیقه
                    </span>
                  </div>
                </div>
              </label>
            </li>
            <li>
              <label class="flex items-center justify-start gap-x-2 w-full p-2 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer hover:text-gray-600 hover:bg-gray-100">
                <img class="max-w-20 rounded-md" src="./assets/image/blog/5.jpg" alt="">
                <div class="text-center flex flex-col space-y-3">
                  <div class="text-xs sm:text-sm">طرز پخت تاکو مثل مکزیکی ها</div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-400">
                    <svg class="fill-gray-400" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                    <span>
                      2 دقیقه
                    </span>
                  </div>
                </div>
              </label>
            </li>
            <li>
              <label class="flex items-center justify-start gap-x-2 w-full p-2 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer hover:text-gray-600 hover:bg-gray-100">
                <img class="max-w-20 rounded-md" src="./assets/image/blog/4.jpg" alt="">
                <div class="text-center flex flex-col space-y-3">
                  <div class="text-xs sm:text-sm">طرز پخت تاکو مثل مکزیکی ها</div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-400">
                    <svg class="fill-gray-400" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                    <span>
                      2 دقیقه
                    </span>
                  </div>
                </div>
              </label>
            </li>
            <li>
              <label class="flex items-center justify-start gap-x-2 w-full p-2 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer hover:text-gray-600 hover:bg-gray-100">
                <img class="max-w-20 rounded-md" src="./assets/image/blog/6.jpg" alt="">
                <div class="text-center flex flex-col space-y-3">
                  <div class="text-xs sm:text-sm">طرز پخت تاکو مثل مکزیکی ها</div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-400">
                    <svg class="fill-gray-400" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                    <span>
                      2 دقیقه
                    </span>
                  </div>
                </div>
              </label>
            </li>
          </ul>
        </div>
        <div class="p-3 bg-white rounded-xl shadow-box-sm">
          <div class="mx-auto flex gap-x-1 group items-center text-right w-full px-2 py-3 text-sm text-gray-600 rounded-lg mb-2 font-semibold">
            <span class="w-44">
              برچسب ها
            </span>
            <span class="bg-red-400 w-full h-px"></span>
          </div>
          <div class="flex gap-2 flex-wrap">
            <a href="" class="bg-gray-200 text-gray-500 hover:text-gray-400 transition px-2 py-1 text-sm rounded-full w-fit">
              #لپ_تاپ
            </a>
            <a href="" class="bg-gray-200 text-gray-500 hover:text-gray-400 transition px-2 py-1 text-sm rounded-full w-fit">
              #بازی
            </a>
            <a href="" class="bg-gray-200 text-gray-500 hover:text-gray-400 transition px-2 py-1 text-sm rounded-full w-fit">
              #مقاله
            </a>
            <a href="" class="bg-gray-200 text-gray-500 hover:text-gray-400 transition px-2 py-1 text-sm rounded-full w-fit">
              #آموزش
            </a>
            <a href="" class="bg-gray-200 text-gray-500 hover:text-gray-400 transition px-2 py-1 text-sm rounded-full w-fit">
              #برنامه_نویسی
            </a>
            <a href="" class="bg-gray-200 text-gray-500 hover:text-gray-400 transition px-2 py-1 text-sm rounded-full w-fit">
              #گیمینگ
            </a>
            <a href="" class="bg-gray-200 text-gray-500 hover:text-gray-400 transition px-2 py-1 text-sm rounded-full w-fit">
              #طراحی
            </a>
            <a href="" class="bg-gray-200 text-gray-500 hover:text-gray-400 transition px-2 py-1 text-sm rounded-full w-fit">
              #نینتندو
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- blog slider -->
    <div class="mt-10 px-2 sm:px-6 md:px-16">
      <!-- TOP SLIDER -->
      <div class="flex justify-between px-5 md:px-10 items-center bg-white py-3 rounded-xl shadow-box">
        <div class="px-4 py-2 flex justify-center items-center gap-x-1 text-sm text-zinc-700">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#dc2626" viewBox="0 0 256 256"><path d="M100,56H40A16,16,0,0,0,24,72v64a16,16,0,0,0,16,16h60v8a32,32,0,0,1-32,32,8,8,0,0,0,0,16,48.05,48.05,0,0,0,48-48V72A16,16,0,0,0,100,56Zm0,80H40V72h60ZM216,56H156a16,16,0,0,0-16,16v64a16,16,0,0,0,16,16h60v8a32,32,0,0,1-32,32,8,8,0,0,0,0,16,48.05,48.05,0,0,0,48-48V72A16,16,0,0,0,216,56Zm0,80H156V72h60Z"></path></svg>
          <span class="text-red-500">
            مرتبط ترین مقالات
          </span>
        </div>
        <a href="">
          <div class="transition px-4 py-2 flex justify-center items-center text-sm text-zinc-700 hover:text-zinc-600">
            مشاهده همه
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#292929" viewBox="0 0 256 256"><path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path></svg>
          </div>
        </a>
      </div>
      <!-- SLIDER -->
      <div class="containerPSlider swiper mb-10">
        <div class="blog-slider px-1">
          <div class="card-wrapper swiper-wrapper py-2">
            <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
              <div class="image-box mb-6 ">
                <div class="relative">
                  <img class="mx-auto rounded-xl " src="./assets/image/blog/3.jpg" alt="" />
                  <div class="absolute top-2 left-2">
                    <svg class="bg-gray-200 rounded-full p-1 hover:fill-gray-500 transition" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,177.57-51.77-32.35a8,8,0,0,0-8.48,0L72,209.57V48H184Z"></path></svg>
                  </div>
                </div>
              </div>
              <div class="">
                <span class="mb-2 h-6 flex justify-between items-center">
                  <div class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      مزیت های یک ساعت هوشمند
                    </span>
                  </div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span>
                      <span>
                        2 دقیقه
                      </span>
                    </span>
                    <svg class="fill-gray-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                  </div>
                </span>
              </div>
            </a>
            <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
              <div class="image-box mb-6 ">
                <div class="relative">
                  <img class="mx-auto rounded-xl " src="./assets/image/blog/5.jpg" alt="" />
                  <div class="absolute top-2 left-2">
                    <svg class="bg-gray-200 rounded-full p-1 hover:fill-gray-500 transition" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,177.57-51.77-32.35a8,8,0,0,0-8.48,0L72,209.57V48H184Z"></path></svg>
                  </div>
                </div>
              </div>
              <div class="">
                <span class="mb-2 h-6 flex justify-between items-center">
                  <div class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      مزیت های یک ساعت هوشمند
                    </span>
                  </div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span>
                      <span>
                        2 دقیقه
                      </span>
                    </span>
                    <svg class="fill-gray-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                  </div>
                </span>
              </div>
            </a>
            <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
              <div class="image-box mb-6 ">
                <div class="relative">
                  <img class="mx-auto rounded-xl " src="./assets/image/blog/6.jpg" alt="" />
                  <div class="absolute top-2 left-2">
                    <svg class="bg-gray-200 rounded-full p-1 hover:fill-gray-500 transition" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,177.57-51.77-32.35a8,8,0,0,0-8.48,0L72,209.57V48H184Z"></path></svg>
                  </div>
                </div>
              </div>
              <div class="">
                <span class="mb-2 h-6 flex justify-between items-center">
                  <div class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      مزیت های یک ساعت هوشمند
                    </span>
                  </div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span>
                      <span>
                        2 دقیقه
                      </span>
                    </span>
                    <svg class="fill-gray-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                  </div>
                </span>
              </div>
            </a>
            <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
              <div class="image-box mb-6 ">
                <div class="relative">
                  <img class="mx-auto rounded-xl " src="./assets/image/blog/7.jpg" alt="" />
                  <div class="absolute top-2 left-2">
                    <svg class="bg-gray-200 rounded-full p-1 hover:fill-gray-500 transition" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,177.57-51.77-32.35a8,8,0,0,0-8.48,0L72,209.57V48H184Z"></path></svg>
                  </div>
                </div>
              </div>
              <div class="">
                <span class="mb-2 h-6 flex justify-between items-center">
                  <div class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      مزیت های یک ساعت هوشمند
                    </span>
                  </div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span>
                      <span>
                        2 دقیقه
                      </span>
                    </span>
                    <svg class="fill-gray-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                  </div>
                </span>
              </div>
            </a>
            <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
              <div class="image-box mb-6 ">
                <div class="relative">
                  <img class="mx-auto rounded-xl " src="./assets/image/blog/8.jpg" alt="" />
                  <div class="absolute top-2 left-2">
                    <svg class="bg-gray-200 rounded-full p-1 hover:fill-gray-500 transition" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,177.57-51.77-32.35a8,8,0,0,0-8.48,0L72,209.57V48H184Z"></path></svg>
                  </div>
                </div>
              </div>
              <div class="">
                <span class="mb-2 h-6 flex justify-between items-center">
                  <div class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      مزیت های یک ساعت هوشمند
                    </span>
                  </div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span>
                      <span>
                        2 دقیقه
                      </span>
                    </span>
                    <svg class="fill-gray-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                  </div>
                </span>
              </div>
            </a>
            <a href="" class="card swiper-slide my-2 p-2 md:p-4 bg-white rounded-2xl drop-shadow-lg">
              <div class="image-box mb-6 ">
                <div class="relative">
                  <img class="mx-auto rounded-xl " src="./assets/image/blog/9.jpg" alt="" />
                  <div class="absolute top-2 left-2">
                    <svg class="bg-gray-200 rounded-full p-1 hover:fill-gray-500 transition" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,177.57-51.77-32.35a8,8,0,0,0-8.48,0L72,209.57V48H184Z"></path></svg>
                  </div>
                </div>
              </div>
              <div class="">
                <span class="mb-2 h-6 flex justify-between items-center">
                  <div class="flex flex-col gap-y-2">
                    <span class="text-sm font-semibold text-zinc-800">
                      مزیت های یک ساعت هوشمند
                    </span>
                  </div>
                  <div class="flex items-start gap-x-1 text-xs text-zinc-500">
                    <span>
                      <span>
                        2 دقیقه
                      </span>
                    </span>
                    <svg class="fill-gray-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path></svg>
                  </div>
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="bg-red-500 w-full h-72 rounded-2xl -mt-60 relative">
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </main>
  <!-- footer -->
  @endsection
