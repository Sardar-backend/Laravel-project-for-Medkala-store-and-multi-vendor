
@extends('multivendor::seller.base')
@section('Content')
@php
$colorMap = [
    'قرمز' => 'red',
    'سبز' => 'green',
    'زرد' => 'yellow',
    'آبی' => 'blue',
    'نارنجی' => 'orange',
    'بنفش' => 'purple',
    'صورتی' => 'pink',
    'قهوه‌ای' => 'brown',
    'خاکستری' => 'gray',
    'سیاه' => 'black',
    'سفید' => 'white',
    'آبی تیره' => 'darkblue',
    'آبی روشن' => 'lightblue',
    'سبز تیره' => 'darkgreen',
    'سبز روشن' => 'lightgreen',
    'قرمز تیره' => 'darkred',
    'قرمز روشن' => 'lightcoral',
    'زرد تیره' => 'goldenrod',
    'زرد روشن' => 'lightyellow',
    'نارنجی تیره' => 'darkorange',
    'نارنجی روشن' => 'lightsalmon',
    'بنفش تیره' => 'darkviolet',
    'بنفش روشن' => 'plum',
    'صورتی تیره' => 'deeppink',
    'صورتی روشن' => 'lightpink',
    'قهوه‌ای تیره' => 'sienna',
    'قهوه‌ای روشن' => 'burlywood',
    'خاکستری تیره' => 'dimgray',
    'خاکستری روشن' => 'lightgray',
    'فیروزه‌ای' => 'turquoise',
    'لاجوردی' => 'navy',
    'لیمویی' => 'lime',
    'کاربنی' => 'midnightblue',
    'شفقی' => 'orangered',
    'آبی کبود' => 'steelblue',
    'لاجوردی روشن' => 'skyblue',
    'سبز فسفری' => 'chartreuse',
    'خردلی' => 'gold',
    'کاهویی' => 'greenyellow',
    'ارکیده‌ای' => 'orchid',
    'رزگلد' => 'rosybrown',
    'سرخابی' => 'fuchsia',
    'آبی فیروزه‌ای' => 'cyan',
    'سبز دریایی' => 'seagreen',
    'سرمه‌ای' => 'teal',
    'زرد طلایی' => 'gold',
    'زرشکی' => 'maroon',
    'یاسی' => 'lavender',
    'قرمز آتشی' => 'firebrick',
    'آبی نفتی' => 'cadetblue',
    'آبی اقیانوسی' => 'aquamarine',
    'کرمی' => 'beige',
    'گلبهی' => 'coral',
    'نیلی' => 'indigo',
    'زیتونی' => 'olive',
    'خاکی' => 'khaki',
    'نقره‌ای' => 'silver',
    'مسی' => 'copper',
    'آبی آسمانی' => 'skyblue',
    'خرمایی' => 'chocolate',
    'پسته‌ای' => 'palegreen',
    'بادمجانی' => 'rebeccapurple',
    'شامپاینی' => 'champagne',
    'آبی سلطنتی' => 'royalblue',
    'زرد موزی' => 'banana',
    'سبز پسته‌ای' => 'mintcream',
    'قرمز گیلاسی' => 'cherry',
    'آبی کاربنی' => 'prussianblue',
    'صورتی چرک' => 'thistle',
    'آبی کارولینایی' => 'carolina',
    'قرمز عنابی' => 'crimson',
    'سبز یشمی' => 'jade',
    'آبی یخی' => 'aliceblue',
    'کبود' => 'cornflowerblue',
    'سبز سدری' => 'darkolivegreen',
    'سبز زیتونی' => 'darkseagreen',
    'آبی کمرنگ' => 'paleturquoise',
    'نقره‌ای مات' => 'darkgray',
    'زرد نخودی' => 'cornsilk',
    'خاکی روشن' => 'palegoldenrod',
    'ارغوانی' => 'magenta',
    'آبی ملوانی' => 'navyblue',
    'بنفش شاه‌توتی' => 'blueviolet',
    'قرمز آجری' => 'brick',
    'سبز لجنی' => 'darkkhaki',
    'آبی دریایی' => 'lightseagreen',
    'لیمویی روشن' => 'lightgoldenrodyellow',
    'آبی تند' => 'deepskyblue',
    'زرد چمنی' => 'lightgoldenrod',
    'صورتی چرک' => 'palevioletred',
    'آبی درباری' => 'dodgerblue',
    'سبز مایل به آبی' => 'darkcyan',
    'آبی سیر' => 'deepblue',
    'زرد کاهی' => 'moccasin',
    'بژ' => 'beige',
    'آبی کبریتی' => 'powderblue',
    'سبز مغزپسته‌ای' => 'palegreen',
    'آبی سربی' => 'slateblue',
    'سرخ آبی' => 'slategray',
    'سبز زرد' => 'yellowgreen',
    'سبز چمنی' => 'forestgreen',
    'آبی درخشان' => 'lightcyan',
    'زرشکی روشن' => 'lightcoral',
    'کرم خاکی' => 'wheat',
    'خرمایی روشن' => 'peru',
    'طلایی مات' => 'darkgoldenrod',
    'سبز سدری روشن' => 'palegreen',
    'نارنجی چرک' => 'sandybrown',
    'طلایی روشن' => 'goldenrod',
    'گندمی' => 'tan',
    'آبی کدر' => 'steelblue',
    'سبز زمردی' => 'emerald',
    'قرمز گوجه‌ای' => 'tomato',
    'بنفش ملایم' => 'mediumorchid',
    'صورتی چرکی' => 'mediumvioletred',
    'آبی فیروزه‌ای' => 'mediumturquoise',
    'زرشکی تیره' => 'darkred',
    'صورتی شاد' => 'mediumviolet',
    'سبز مرجانی' => 'lightgreen',
    'صورتی مات' => 'mistyrose',
    'کاهی روشن' => 'linen',
    'نیلی کمرنگ' => 'plum',
    'قهوه‌ای بژ' => 'sienna',
    'بنفش دودی' => 'slateblue',
    'سبز روشن مات' => 'springgreen',
    'نارنجی قرمز' => 'orangered',
    'سبز پررنگ' => 'darkgreen',
    'آبی دریاچه‌ای' => 'darkturquoise',
    'نقره‌ای مات' => 'darkslategray',
    'طلایی پررنگ' => 'darkgoldenrod',
    'گندمی' => 'burlywood',
    'نارنجی ملایم' => 'bisque',
    'زرد کم‌رنگ' => 'lemonchiffon',
    'آبی سنگی' => 'lightslategray',
    'آبی مهتابی' => 'lightsteelblue',
    'یاسی کم‌رنگ' => 'lightpurple',
    'خاکی ملایم' => 'moccasin',
    'آبی نیلی' => 'darkorchid',
    'قرمز مات' => 'indianred',
    'قهوه‌ای سوخته' => 'rosybrown',
    'نارنجی سوخته' => 'darkorange',
    'آبی آرام' => 'skyblue',
    'سبز تازه' => 'lawngreen',
    'بنفش شاه بلوطی' => 'orchid',
    'صورتی کمرنگ' => 'lightcoral',
    'نیلی آبی' => 'mediumslateblue',
    'سبز ملایم' => 'palegreen',
    'نارنجی روشن' => 'papayawhip',
    'سبز پسته‌ای' => 'seagreen',
    'کاهویی روشن' => 'greenyellow',
    'خاکستری' => 'gray',
    'آبی شفاف' => 'powderblue',
];

@endphp
<script src="./assets/js/dependencies/textEditorQuill.js"></script>
<link href="./assets/css/dependencies/textEditorQuill.css" rel="stylesheet">
    <!-- main -->
    <main class="p-3 md:p-5">
      <div class="bg-white rounded-lg border drop-shadow-lg p-5">
                            @if ($errors->any())
            <div class="mb-4 p-4 bg-red-50 border-l-4 border-red-500 text-red-700">
                <p class="font-medium">خطاهایی رخ داده است:</p>
                <ul class="mt-2 list-disc list-inside text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif
        <p class="text-center text-lg md:text-2xl text-gray-700">
           ثبت محصول جدید
        </p>
        <form action="{{route('admin_PRODUCT.store')}}" id="FORM-INSERT" method="post" >
            @csrf
            <input type="hidden" value="{{request()->user()->id}}" name="user_id">
            <input type="hidden" value="" id="INPUT" name="discription">
          <div class="mt-7 flex flex-col md:flex-row gap-5">
            <div class="flex flex-col md:w-1/2">
              <label for="" class="text-gray-800 text-sm">
                نام فارسی محصول:
              </label>
              <input name="name" type="text" class="border border-gray-400 rounded-lg shadow-lg mt-2 w-full p-2 focus:outline-gray-400">
            </div>
            <!-- <div class="flex flex-col md:w-1/2">
              <label for="" class="text-gray-800 text-sm">
                برند  محصول:
              </label>
              <input value="apple mobile x 64g" type="text" class="border border-gray-400 rounded-lg shadow-lg mt-2 w-full p-2 focus:outline-gray-400">
            </div> -->
            <div class="flex items-center md:w-1/2">
              <label for="" class="text-gray-800 text-sm">
                تعداد
              </label>
              <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlfor="check">
                <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                </span>
              </label>
              <input min="1" name="count" type="number" class="border border-gray-400 rounded-lg shadow-lg p-2 focus:outline-gray-400" placeholder="مقدار ماه">
            </div>
          </div>
          <div class="mt-10 flex flex-col md:flex-row gap-5">
            <div class="flex flex-col md:w-1/2">
              <label for="" class="text-gray-800 text-sm">
                دسته بندی:
              </label>
              <select name="categories" id="" class="border border-gray-400 rounded-lg shadow-lg mt-2 w-full p-2 focus:outline-gray-400">
                @foreach ( $categories as $item)

                <option value="موبایل">
                   {{ $item->name }}
                </option>
                @endforeach
              </select>
            </div>
            <div class="flex flex-col md:w-1/2">
              <label for="" class="text-gray-800 text-sm">
                رنگ ها:
              </label>
              <select x-cloak id="select" class="hidden">
                @foreach ( $colorMap as $colorName => $colorValue )
                <option value="{{ $colorValue }}">
                {{ $colorName }}

                <span></span>
                </option>

                @endforeach
              </select>
              <div x-data="dropdown()" x-init="loadOptions()" class="flex flex-col items-center mx-auto border border-gray-400 rounded-lg shadow-lg mt-2 w-full p-2 focus:outline-gray-400">
                <input name="values" type="hidden" x-bind:value="selectedValues()">
                <div class="inline-block relative w-full">
                  <div class="flex flex-col items-center relative">
                    <div x-on:click="open" class="w-full">
                      <div class="flex w-full">
                        <div class="flex flex-auto flex-wrap">
                          <template x-for="(option,index) in selected" :key="options[option].value">
                            <div class="flex justify-center items-center m-1 py-1 px-1 rounded bg-gray-100">
                              <div class="text-xs max-w-full flex-initial x-model=" options[option] x-text="options[option].text"></div>
                              <div class="flex flex-auto flex-row-reverse">
                                <div x-on:click.stop="remove(index,option)">
                                  <svg class="fill-red-500 cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M165.66,101.66,139.31,128l26.35,26.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
                                </div>
                              </div>
                            </div>
                          </template>
                          <div x-show="selected.length == 0" class="flex-1">
                            <input placeholder="یک یا چند رنگ را انتخاب کنید" class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800" x-bind:value="selectedValues()">
                          </div>
                        </div>
                        <div class="text-gray-300 w-8 py-1 pl-2 pr-1 flex items-center border-gray-200 svelte-1l8159u">
                          <button type="button" x-show="isOpen() === true" x-on:click="open" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                            <svg class="fill-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="" viewBox="0 0 256 256"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
                          </button>
                          <button type="button" x-show="isOpen() === false" @click="close" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                            <svg class="fill-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="" viewBox="0 0 256 256"><path d="M213.66,165.66a8,8,0,0,1-11.32,0L128,91.31,53.66,165.66a8,8,0,0,1-11.32-11.32l80-80a8,8,0,0,1,11.32,0l80,80A8,8,0,0,1,213.66,165.66Z"></path></svg>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="w-full px-4">
                      <div x-show.transition.origin.top="isOpen()" class="absolute shadow top-100 bg-white z-40 w-full left-0 rounded max-h-select" x-on:click.away="close">
                        <div class="flex flex-col w-full overflow-y-auto h-64">
                          <template x-for="(option,index) in options" :key="option" class="overflow-auto">
                            <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-gray-100" @click="select(index,$event)">
                              <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
                                <div class="w-full items-center flex justify-between">
                                  <div class="mx-2 leading-6" x-model="option" x-text="option.text"></div>
                                  <div x-show="option.selected">
                                    <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </template>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-10 flex flex-col md:flex-row gap-5">
            <div class="flex items-center md:w-1/2">
              <label for="" class="text-gray-800 text-sm">
                (ماه)گارانتی دارد؟
              </label>
              <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="check">
                <!-- <input checked type="checkbox"
                  class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-gray-900 checked:before:bg-gray-900"
                  id="check" /> -->
                <span
                  class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor"
                    stroke="currentColor" stroke-width="1">
                    <path fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"></path>
                  </svg>
                </span>
              </label>
              <input name="garant" min="1" value="18" type="number" class="border border-gray-400 rounded-lg shadow-lg p-2 focus:outline-gray-400" placeholder="مقدار ماه">
            </div>
            <div class="flex gap-x-3 items-center md:w-1/2">
              <label for="" class="text-gray-800 text-sm">
                تخفیف
              </label>
              <input min="0" max="100" name="discust" type="number" class="border border-gray-400 rounded-lg shadow-lg p-2 focus:outline-gray-400" placeholder="مقدار تخفیف">
            </div>
          </div>
          <div class="mt-10 flex flex-col md:flex-row gap-5">
            <div class="flex items-center md:w-1/2">
              <label for="" class="text-gray-800 text-sm">
                طول
              </label>
              <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="check">
                <span
                  class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor"
                    stroke="currentColor" stroke-width="1">
                    <path fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"></path>
                  </svg>
                </span>
              </label>
              <input name="length" min="1" type="number" class="border border-gray-400 rounded-lg shadow-lg p-2 focus:outline-gray-400" placeholder="مقدار ماه">
            </div>
            <div class="flex items-center md:w-1/2">
              <label for="" class="text-gray-800 text-sm">
                عرض
              </label>
              <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="check">
                <span
                  class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor"
                    stroke="currentColor" stroke-width="1">
                    <path fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"></path>
                  </svg>
                </span>
              </label>
              <input min="1" name="with" type="number" class="border border-gray-400 rounded-lg shadow-lg p-2 focus:outline-gray-400" placeholder="مقدار ماه">
            </div>
          </div>
          <div class="mt-10 flex flex-col md:flex-row gap-5">
            <div class="flex flex-col md:w-1/2">
              <label for="" class="text-gray-800 text-sm">
                قیمت اصلی کالا:
              </label>
              <input name="price" type="text" class="border border-gray-400 rounded-lg shadow-lg mt-2 w-full p-2 focus:outline-gray-400" placeholder="تومان">
            </div>
            <div class="flex flex-col md:w-1/2">
              <label for="" class="text-gray-800 text-sm">
                 برندمحصول:
              </label>
              <select name="Brand" id="" class="border border-gray-400 rounded-lg shadow-lg mt-2 w-full p-2 focus:outline-gray-400">
                @foreach ( $Brands as $item)

                <option value="{{$item->id}}">
                   {{ $item->name }}
                </option>
                @endforeach
              </select>
            </div>

          </div>
          <!-- <div class="mt-10 flex flex-col md:flex-row items-center gap-3">
            <label for="" class="text-gray-800 text-sm">
              انتخاب عکس های محصول:
            </label>
            <label for="dropzone-file" class="w-8/12 sm:w-1/4 h-14 flex flex-col items-center justify-center border border-gray-400 hover:bg-gray-100 transition rounded-lg shadow-lg cursor-pointer">
              <div class="flex flex-col items-center justify-center p-1">
                <svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"></path>
                </svg>
              </div>
              <input id="dropzone-file" type="file" class="hidden" accept="image/*" multiple="multiple">
            </label>
          </div> -->
          <div class="container mx-auto p-4">
        <div class="flex flex-col space-y-4">

        <div class="container mx-auto p-4">
    <h2 class="text-xl font-semibold mb-4">مدیریت ویژگی‌ها</h2>

    <!-- والد برای نگهداری ورودی‌ها -->
    <div class="asa space-y-4">
    <div class="flex items-center space-x-8 cursor-pointer">
            <!-- بخش نوع ویژگی -->
            <div class="w-1/2 ">
                <label for="attribute_name" class="block text-sm font-medium text-gray-700 mb-2">
                    نوع ویژگی
                </label>
                <input
                    type="text"
                    name="attribute[0][name]"
                    id="attribute_name"
                    placeholder="تخفیف را وارد کنید"
                    class="block w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>
            <!-- بخش نام ویژگی -->
            <div class="w-1/2 ml-10">
                <label for="attribute_value" class="block text-sm font-medium text-gray-700 mb-2">
                    نام ویژگی
                </label>
                <input
                    type="text"
                    name="attribute[0][value]"
                    id="attribute_value"
                    placeholder="تخفیف را وارد کنید"
                    class="block w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>


        </div>
    </div>
    <!-- دکمه افزودن -->
    <button
    type="button"
        id="add_product_attribute"
        class="mt-4 px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none asa"
    >
        + افزودن ویژگی
    </button>
    </div>
        </div>
        </div>

          <div class="mt-10 h-44" dir="ltr">
            <label for="" class="text-gray-800 text-sm mb-2 w-full text-right block">
              :توضیحات محصول
            </label>
            <div id="editor" class="border border-gray-400 shadow-lg text-right" dir="rtl">
              <p id="Param">
                  محصولی بسیار زیبا و خوش دست.
                </p>
                <!-- <script>

                </script> -->
            </div>
          </div>
          <div class="mt-32">
            <a onclick="INS()"  class="mx-auto w-full md:w-3/12 block text-center shadow-lg px-2 py-3 text-sm bg-cyan-600 hover:bg-cyan-700 transition text-gray-100 rounded-lg">
             ثبت محصول
            </a>
          </div>
        </form>
      </div>
    </main>
    <script>
    function INS() {



        document.querySelector('#INPUT').value = document.getElementById('editor').querySelector('p').textContent ;
        document.querySelector('#FORM-INSERT').submit()
    }
    // عناصر DOM
    let container = document.querySelector('.asa'); // والد اصلی
    let addButton = document.querySelector('#add_product_attribute'); // دکمه افزودن ویژگی
    let id = 1; // شناسه برای مقادیر name ها

    // رویداد کلیک برای افزودن بخش جدید
    addButton.addEventListener('click', function () {
        let newRow = document.createElement('div');
        newRow.className = "flex items-center space-x-8 mt-2 elem";

        // کد HTML برای بخش جدید
        newRow.innerHTML = `
            <!-- نوع ویژگی -->
            <div class="w-1/2">
                <label class="block text-sm font-medium text-gray-700 mb-2">نوع ویژگی</label>
                <input
                    type="text"
                    name="attribute[${id}][name]"
                    placeholder="نوع را وارد کنید"
                    class="block w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- نام ویژگی -->
            <div class="w-1/2 ">
                <label class="block text-sm font-medium text-gray-700 mb-2">نام ویژگی</label>
                <input
                    type="text"
                    name="attribute[${id}][value]"
                    placeholder="نام را وارد کنید"
                    class="block w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- دکمه حذف -->
            <div>
                <button
                    type="button"
                    class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none"
                    onclick="this.parentNode.parentNode.remove()"
                >
                    حذف
                </button>
            </div>
        `;

        // اضافه کردن عنصر جدید به والد
        container.appendChild(newRow);
        id++; // افزایش مقدار شناسه
    });
</script>

  <script>
    function dropdown() {
                return {
                    options: [],
                    selected: [],
                    show: false,
                    open() { this.show = true },
                    close() { this.show = false },
                    isOpen() { return this.show === true },
                    select(index, event) {
                        if (!this.options[index].selected) {
                            this.options[index].selected = true;
                            this.options[index].element = event.target;
                            this.selected.push(index);
                        } else {
                            this.selected.splice(this.selected.lastIndexOf(index), 1);
                            this.options[index].selected = false
                        }
                    },
                    remove(index, option) {
                        this.options[option].selected = false;
                        this.selected.splice(index, 1);
                    },
                    loadOptions() {
                        const options = document.getElementById('select').options;
                        for (let i = 0; i < options.length; i++) {
                            this.options.push({
                                value: options[i].value,
                                text: options[i].innerText,
                                selected: options[i].getAttribute('selected') != null ? options[i].getAttribute('selected') : false
                            });
                        }
                    },
                    selectedValues(){
                        return this.selected.map((option)=>{
                            return this.options[option].value;
                        })
                    }
                }
            }
  </script>
  <script>
    const quill = new Quill('#editor', {
      theme: 'snow'
    });
  </script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js"></script>

@endsection
