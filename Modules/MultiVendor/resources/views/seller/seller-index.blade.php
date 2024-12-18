@extends('multivendor::seller.base')
@section('Content')
    <main>
      <div class="flex flex-col lg:flex-row gap-5 p-2 lg:p-5">
        <!-- righr notification -->
        <div class="lg:w-4/12 bg-white rounded-lg drop-shadow-lg border p-3 pt-5 h-fit">
          <div class="flex justify-between items-center">
            <p class="text-gray-700 flex items-center justify-center gap-x-1">
              <svg class="fill-gray-700" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M228.44,89.34l-96-64a8,8,0,0,0-8.88,0l-96,64A8,8,0,0,0,24,96V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V96A8,8,0,0,0,228.44,89.34ZM128,41.61l81.91,54.61-67,47.78H113.11l-67-47.78ZM40,200V111.53l65.9,47a8,8,0,0,0,4.65,1.49h34.9a8,8,0,0,0,4.65-1.49l65.9-47V200Z"></path></svg>
              اطلاعیه های شما
            </p>
            <a href="">
              <svg class="fill-gray-700" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="" viewBox="0 0 256 256"><path d="M128,26A102,102,0,1,0,230,128,102.12,102.12,0,0,0,128,26Zm0,192a90,90,0,1,1,90-90A90.1,90.1,0,0,1,128,218ZM138,84a10,10,0,1,1-10-10A10,10,0,0,1,138,84Zm0,44a10,10,0,1,1-10-10A10,10,0,0,1,138,128Zm0,44a10,10,0,1,1-10-10A10,10,0,0,1,138,172Z"></path></svg>
            </a>
          </div>
          <div class="grid grid-cols-1 gap-4 mt-6">
            <a href="" class="border border-gray-300 p-3 rounded-md text-gray-800 text-sm hover:bg-gray-200 transition">
             محصول شما 1 عدد به فروش رسید.
            </a>
            <a href="" class="border border-gray-300 p-3 rounded-md text-gray-800 text-sm hover:bg-gray-200 transition">
              کاربر 4754477  نظر جدیدی ثبت کرد.
            </a>
            <a href="" class="border border-gray-300 p-3 rounded-md text-gray-800 text-sm hover:bg-gray-200 transition">
              یک تیکت مهم از طرف مدیریت دارید.
             </a>
             <a href="" class="border border-gray-300 p-3 rounded-md text-gray-800 text-sm hover:bg-gray-200 transition">
               محصول 871234 حذف گردید.
             </a>
             <a href="" class="border border-gray-300 p-3 rounded-md text-gray-800 text-sm hover:bg-gray-200 transition">
              محصول موبایل اپل جهت تایید به بخش مدیریت ارسال شد.
             </a>
             <a href="" class="border border-gray-300 p-3 rounded-md text-gray-800 text-sm hover:bg-gray-200 transition">
               کاربر 1234460  نظر جدیدی ثبت کرد.
             </a>
          </div>
        </div>
        <!-- left -->
        <div class="lg:w-8/12 h-fit">
          <!-- 4 box -->
          <div class="bg-white rounded-lg drop-shadow-lg border p-5">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 lg:flex gap-5">
              <a href="" class="flex gap-x-2 items-center bg-white border border-gray-300 rounded-lg p-3 text-xs sm:text-sm w-full">
                <svg class="fill-zinc-800 bg-gray-200 rounded-xl p-1" xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="" viewBox="0 0 256 256"><path d="M232,96v96a8,8,0,0,1-8,8H32a8,8,0,0,1-8-8V96Z" opacity="0.2"></path><path d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z"></path></svg>
                <div class="text-zinc-500 space-y-1">
                  <div>
                    درآمد کل
                  </div>
                  <div class="text-gray-800">
                    13,710,450 تومان
                  </div>
                </div>
              </a>
              <a href="" class="flex gap-x-2 items-center bg-white border border-gray-300 rounded-lg p-3 text-xs sm:text-sm w-full">
                <svg class="fill-zinc-800 bg-gray-200 rounded-xl p-1" xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#000000" viewBox="0 0 256 256"><path d="M240,104,128,224,80,104l48-64h56Z" opacity="0.2"></path><path d="M246,98.73l-56-64A8,8,0,0,0,184,32H72a8,8,0,0,0-6,2.73l-56,64a8,8,0,0,0,.17,10.73l112,120a8,8,0,0,0,11.7,0l112-120A8,8,0,0,0,246,98.73ZM222.37,96H180L144,48h36.37ZM74.58,112l30.13,75.33L34.41,112Zm89.6,0L128,202.46,91.82,112ZM96,96l32-42.67L160,96Zm85.42,16h40.17l-70.3,75.33ZM75.63,48H112L76,96H33.63Z"></path></svg>
                <div class="text-zinc-500 space-y-1">
                  <div>
                   سفارشات کل
                  </div>
                  <div class="text-gray-800">
                    18 عدد
                  </div>
                </div>
              </a>
              <a href="" class="flex gap-x-2 items-center bg-white border border-gray-300 rounded-lg p-3 text-xs sm:text-sm w-full">
                <svg class="fill-zinc-800 bg-gray-200 rounded-xl p-1" xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#000000" viewBox="0 0 256 256"><path d="M216,64l-12.16,66.86A16,16,0,0,1,188.1,144H62.55L48,64Z" opacity="0.2"></path><path d="M222.14,58.87A8,8,0,0,0,216,56H54.68L49.79,29.14A16,16,0,0,0,34.05,16H16a8,8,0,0,0,0,16h18L59.56,172.29a24,24,0,0,0,5.33,11.27,28,28,0,1,0,44.4,8.44h45.42A27.75,27.75,0,0,0,152,204a28,28,0,1,0,28-28H83.17a8,8,0,0,1-7.87-6.57L72.13,152h116a24,24,0,0,0,23.61-19.71l12.16-66.86A8,8,0,0,0,222.14,58.87ZM96,204a12,12,0,1,1-12-12A12,12,0,0,1,96,204Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,192,204Zm4-74.57A8,8,0,0,1,188.1,136H69.22L57.59,72H206.41Z"></path></svg>
                <div class="text-zinc-500 space-y-1">
                  <div>
                   سفارشات ارسال شده
                  </div>
                  <div class="text-gray-800">
                    17 عدد
                  </div>
                </div>
              </a>
              <a href="" class="flex gap-x-2 items-center bg-white border border-gray-300 rounded-lg p-3 text-xs sm:text-sm w-full">
                <svg class="fill-zinc-800 bg-gray-200 rounded-xl p-1" xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#000000" viewBox="0 0 256 256"><path d="M16,152H48v56H16a8,8,0,0,1-8-8V160A8,8,0,0,1,16,152ZM204,56a28,28,0,0,0-12,2.71h0A28,28,0,1,0,176,85.29h0A28,28,0,1,0,204,56Z" opacity="0.2"></path><path d="M230.33,141.06a24.43,24.43,0,0,0-21.24-4.23l-41.84,9.62A28,28,0,0,0,140,112H89.94a31.82,31.82,0,0,0-22.63,9.37L44.69,144H16A16,16,0,0,0,0,160v40a16,16,0,0,0,16,16H120a7.93,7.93,0,0,0,1.94-.24l64-16a6.94,6.94,0,0,0,1.19-.4L226,182.82l.44-.2a24.6,24.6,0,0,0,3.93-41.56ZM16,160H40v40H16Zm203.43,8.21-38,16.18L119,200H56V155.31l22.63-22.62A15.86,15.86,0,0,1,89.94,128H140a12,12,0,0,1,0,24H112a8,8,0,0,0,0,16h32a8.32,8.32,0,0,0,1.79-.2l67-15.41.31-.08a8.6,8.6,0,0,1,6.3,15.9ZM164,96a36,36,0,0,0,5.9-.48,36,36,0,1,0,28.22-47A36,36,0,1,0,164,96Zm60-12a20,20,0,1,1-20-20A20,20,0,0,1,224,84ZM164,40a20,20,0,0,1,19.25,14.61,36,36,0,0,0-15,24.93A20.42,20.42,0,0,1,164,80a20,20,0,0,1,0-40Z"></path></svg>
                <div class="text-zinc-500 space-y-1">
                  <div>
                    سفارشات منتظر ارسال
                  </div>
                  <div class="text-gray-800">
                    1 عدد
                  </div>
                </div>
              </a>
            </div>
            <!-- chart -->
            <div class="overflow-x-auto">
              <div class="mt-5 w-full min-w-[400px]">
                <canvas id="myChart"></canvas>
              </div>
            </div>
          </div>
          <!-- comments -->
          <div class="bg-white rounded-lg drop-shadow-lg border p-3 pt-5 h-fit mt-5">
            <div class="flex justify-between items-center border-b pb-3 border-gray-300">
              <p class="text-gray-700 flex items-center justify-center gap-x-1">
                <svg class="fill-gray-700" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M169.57,72.59A80,80,0,0,0,16,104v64a16,16,0,0,0,16,16H86.67A80.15,80.15,0,0,0,160,232h64a16,16,0,0,0,16-16V152A80,80,0,0,0,169.57,72.59ZM32,104a64,64,0,1,1,64,64H32ZM224,216H160a64.14,64.14,0,0,1-55.68-32.43A79.93,79.93,0,0,0,174.7,89.71,64,64,0,0,1,224,152Z"></path></svg>
                آخرین نظرات
              </p>
              <a href="{{route('seller-comments')}}" class="text-xs text-gray-500 hover:text-gray-700 transition border-b-2 pb-1 border-gray-300 border-dashed">
                مشاهده همه
              </a>
            </div>
            <div class="grid grid-cols-1 gap-4 mt-6">
              <!-- comment -->
               @foreach ( $comments as  $comment)

               <div class="text-gray-800 text-sm border-b border-gray-300 py-3">
                 <div class="flex items-center justify-between">
                   <div class="flex gap-x-3">
                     <img src="./assets/image/blog/5.jpg" alt="" class="max-w-16 rounded-md">
                     <div class="flex flex-col justify-around text-xs text-gray-500">
                       <div>
                         {{$comment->user()->name}}
                       </div>
                       <div>
                       {{jdate(str: $comment->failed_at)->format('%B %d، %Y')}}
                       </div>
                     </div>
                   </div>
                   <a href="" class="text-xs text-gray-500 hover:text-gray-700 transition">
                     مشاهده و پاسخ
                   </a>
                 </div>
                 <div class="mt-5">
                   {{$comment->content}}
                 </div>
               </div>
               @endforeach
            </div>
          </div>
        </div>
      </div>
    </main>
  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'],
        datasets: [{
          label: 'درآمد شما',
          data: [8540000, 12984260, 10750100, 7534800, 8700100, 10470000],
          borderWidth: 2,
          borderColor: 'rgb(75, 192, 192)',
          tension: 0.1,
        }]
      },
    });
  </script>
@endsection
