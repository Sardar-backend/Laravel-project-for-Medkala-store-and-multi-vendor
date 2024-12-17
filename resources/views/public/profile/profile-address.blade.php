@extends('base')
@section('content')
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
    <div class="my-5 lg:my-10">
      <div class="md:flex gap-5">
      @include('public.profile.sidebar')

        <div class="md:w-9/12 bg-white shadow-box-md rounded-2xl p-5 mt-5 md:mt-0">

            <div class="">
                <div class="text-zinc-800 text-lg mb-4">
                    آدرس های من:
                </div>
            @foreach ( $Addresses as $Address)
              <div class="space-y-5 mt-5">
                <div class="border border-zinc-300 rounded-md">
                  <div class="border-b border-b-zinc-400 p-3 text-zinc-800 text-sm flex justify-between items-center">
                  {{$Address->ostan}} - {{$Address->city}}
                    <a data-modal-toggle="authentication-modal" href="javascript:void(0);" class="text-zinc-50 hover:text-zinc-100 transition bg-blue-400 px-3 py-1 text-xs rounded-md">
                      ویرایش آدرس
                     </a>
                  </div>
                  <div class="px-5 py-4 text-zinc-600 fill-zinc-600 space-y-4 text-sm">
                    <div class="flex gap-x-1 items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z"></path></svg>
                      {{$Address->ostan}}  - {{$Address->city}} - {{$Address->city}}
                    </div>
                    <div class="flex gap-x-1 items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M228.44,89.34l-96-64a8,8,0,0,0-8.88,0l-96,64A8,8,0,0,0,24,96V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V96A8,8,0,0,0,228.44,89.34ZM96.72,152,40,192V111.53Zm16.37,8h29.82l56.63,40H56.46Zm46.19-8L216,111.53V192ZM128,41.61l81.91,54.61-67,47.78H113.11l-67-47.78Z"></path></svg>
                      {{$Address->number}}
                    </div>
                    <div class="flex gap-x-1 items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M222.37,158.46l-47.11-21.11-.13-.06a16,16,0,0,0-15.17,1.4,8.12,8.12,0,0,0-.75.56L134.87,160c-15.42-7.49-31.34-23.29-38.83-38.51l20.78-24.71c.2-.25.39-.5.57-.77a16,16,0,0,0,1.32-15.06l0-.12L97.54,33.64a16,16,0,0,0-16.62-9.52A56.26,56.26,0,0,0,32,80c0,79.4,64.6,144,144,144a56.26,56.26,0,0,0,55.88-48.92A16,16,0,0,0,222.37,158.46ZM176,208A128.14,128.14,0,0,1,48,80,40.2,40.2,0,0,1,82.87,40a.61.61,0,0,0,0,.12l21,47L83.2,111.86a6.13,6.13,0,0,0-.57.77,16,16,0,0,0-1,15.7c9.06,18.53,27.73,37.06,46.46,46.11a16,16,0,0,0,15.75-1.14,8.44,8.44,0,0,0,.74-.56L168.89,152l47,21.05h0s.08,0,.11,0A40.21,40.21,0,0,1,176,208Z"></path></svg>
                      09123456789
                    </div>
                    <div class="flex gap-x-1 items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"></path></svg>
                      امیررضا کریمی
                    </div>
                  </div>
                  <form id="aaa{{$Address->id}}" action="{{route('delete_address',['id'=>$Address->id])}}" method="post">
                                                    @csrf
                                                </form>
                    <div style="display: flex;" >

                        <a onclick="let cc = document.querySelector('#aaa{{$Address->id}}').submit()" class="text-zinc-50 hover:text-zinc-100 transition bg-red-400 hover:bg-red-500 px-3 py-1 block w-fit mb-2 mr-5 text-xs rounded-md">
                          حذف آدرس
                         </a>
                         @if ($Address->is_selected)


                         @else
                         <form action="{{route('selectaddress' , ['id'=> $Address->id ])}}" id="dfd{{$Address->id}}" method="post">@csrf
                         </form>
                         <a onclick="document.querySelector('#dfd{{$Address->id}}').submit()"
                            class="transition px-3 py-1 block w-fit mb-2 mr-5 text-xs rounded-md font-bold"
                            style="
                                color: #FFFFFF;
                                background: linear-gradient(90deg, #FFD700, #FFA500);
                                box-shadow: 0 4px 10px rgba(255, 193, 7, 0.6);
                                position: relative;
                                overflow: hidden;"
                            onmouseover="this.style.color='#000'; this.style.background='linear-gradient(90deg, #FFA500, #FF8C00)';"
                            onmouseout="this.style.color='#FFFFFF'; this.style.background='linear-gradient(90deg, #FFD700, #FFA500)';">
                            <span style="position: relative; z-index: 2;"> انتخاب بعوان ادرس منتخب</span>
                            <span
                                style="
                                content: '';
                                position: absolute;
                                top: 0;
                                left: -100%;
                                width: 100%;
                                height: 100%;
                                background: rgba(255, 255, 255, 0.2);
                                z-index: 1;
                                transition: all 0.4s ease;"
                                class="hover-effect"></span>
                            </a>
                         @endif


                    </div>
                </div>
              </div>
              @endforeach
              <!-- edit addredd modal -->
              <div class="max-w-2xl mx-auto relative">
                <!-- Main modal -->
                <div id="authentication-modal" class="overflow-x-hidden overflow-y-auto z-50 fixed h-modal h-full inset-0 justify-end items-end hidden" aria-hidden="true">
                    <div id="authentication-modal" data-modal-toggle="authentication-modal" aria-hidden="true" class="overflow-x-hidden overflow-y-auto fixed h-modal h-full inset-0 z-10 bg-gray-600 bg-opacity-50 w-full">
                    </div>
                    <div class="relative w-12/12 sm:w-10/12 lg:w-6/12 px-4 h-auto mb-4 z-50 mt-96 md:mt-20">
                      <!-- Modal content -->
                      <div class="bg-white rounded-lg shadow-lg relative overflow-y-visible">
                          <div class="flex justify-between items-center p-4 border-b">
                            <h3 class="text-gray-700">ویرایش آدرس</h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex items-center" data-modal-toggle="authentication-modal">
                              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                          </div>
                          <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 pt-4" action="#">
                            <div>
                              <!-- inputs -->
                              <div class="sm:flex gap-x-5 mt-5">
                                <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                                  <label class="text-sm text-zinc-700 flex">
                                    نام
                                    <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                                  </label>
                                  <input type="text" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
                                </div>
                                <div class="sm:w-1/2 flex flex-col gap-y-1">
                                  <label class="text-sm text-zinc-700 flex">
                                    نام خانوادگی
                                    <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                                  </label>
                                  <input type="text" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
                                </div>
                              </div>
                              <div class="sm:flex gap-x-5 mt-7">
                                <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                                  <label class="text-sm text-zinc-700 flex">
                                    استان
                                    <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                                  </label>
                                  <select name="select" class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                    <option value="">-</option>
                                    <option value="2">خراسان رضوی</option>
                                    <option value="">خراسان جنوبی</option>
                                    <option value="">خراسان شمالی</option>
                                    <option value="">تهران</option>
                                  </select>
                                </div>
                                <div class="sm:w-1/2 flex flex-col gap-y-1">
                                  <label class="text-sm text-zinc-700 flex">
                                    شهر
                                    <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                                  </label>
                                  <select name="select" class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                    <option value="">تهران</option>
                                    <option value="2">رباط کریم</option>
                                    <option value="">دماوند</option>
                                    <option value="">بومهن</option>
                                    <option value="">رودهن</option>
                                  </select>
                                </div>
                              </div>
                              <div class="mt-7">
                                <div class="flex flex-col gap-y-1">
                                  <label class="text-sm text-zinc-700 flex">
                                    خیابان و کوچه
                                    <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                                  </label>
                                  <input type="text" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
                                </div>
                                <div class="flex flex-col gap-y-1 mt-5">
                                  <label class="text-sm text-zinc-700 flex">
                                    شماره پلاک و واحد
                                    <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                                  </label>
                                  <input type="text" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
                                </div>
                              </div>
                              <div class="sm:flex gap-x-5 mt-5">
                                <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                                  <label class="text-sm text-zinc-700 flex">
                                    تلفن
                                    <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                                  </label>
                                  <input type="text" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
                                </div>
                                <div class="sm:w-1/2 flex flex-col gap-y-1">
                                  <label class="text-sm text-zinc-700 flex">
                                    کد پستی
                                    <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                                  </label>
                                  <input type="text" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
                                </div>
                              </div>
                              <div class="mt-5">
                                <div class="flex flex-col gap-y-1">
                                  <label class="text-sm text-zinc-700 flex">
                                    توضیحات اضافه
                                  </label>
                                  <textarea placeholder="نکات مهم درباره تحویل محصول" name="mailTicket" cols="30" rows="7" class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-400 focus:outline-none"></textarea>
                                </div>
                              </div>
                            </div>
                          </form>
                      </div>
                    </div>
                </div>
              </div>
            </div>


        </div>
      </div>
    </div>
  </main>
  <!-- footer -->
  @endsection
