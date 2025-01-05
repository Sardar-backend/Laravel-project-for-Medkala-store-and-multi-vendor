@extends('base')
@section('content')
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
    <div class="my-5 lg:my-10">
      <div class="md:flex gap-5">
      @include('public.profile.sidebar')

        <div class="md:w-9/12 bg-white shadow-box-md rounded-2xl p-5 mt-5 md:mt-0">
          <div class="">
            <div class="text-zinc-800 text-lg mb-4">
             پیغام ها:
            </div>
            <div class="space-y-5">
                @foreach ($messages as $message )

                <div class="bg-zinc-100 rounded-md">
                  <div class="border-b border-b-zinc-500 px-3 py-2 text-zinc-800 text-sm flex justify-between items-center">
                    تایید نظر
                    <a href="" class="text-zinc-50 hover:text-zinc-100 transition bg-blue-400 px-3 py-1 text-xs rounded-md">
                    {{jdate($message->failed_at)->format('%B %d، %Y')}}
                     </a>
                  </div>
                  <div class="px-5 py-4 text-zinc-600 text-sm flex justify-between items-center">
                    {{$message->message}}
                    <!-- <a href="" class="text-zinc-50 hover:text-zinc-100 transition bg-red-400 hover:bg-red-500 px-3 py-1 text-xs rounded-md">
                      جزئیات
                     </a> -->
                  </div>
                </div>
                @endforeach
            </div>
          </div>
            @if (count($messages) > 10)


          <div class="mt-8" id="pageinate">
            <ul class="flex items-center justify-center gap-x-2 md:gap-x-3 h-8 text-sm">
                {{-- دکمه قبلی --}}
                @if ($messages->onFirstPage())
                    <li>
                        <span class="flex items-center justify-center transition shadow-lg px-3 h-8 ms-0 text-gray-300 bg-white rounded-lg">
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"></path>
                            </svg>
                        </span>
                    </li>
                @else
                    <li>
                        <a href="{{ $messages->previousPageUrl() }}" class="flex items-center justify-center transition shadow-lg px-3 h-8 ms-0 text-gray-500 bg-white rounded-lg hover:bg-red-100 hover:text-red-400">
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"></path>
                            </svg>
                        </a>
                    </li>
                @endif

                {{-- شماره صفحات --}}
                @foreach ($messages->links()->elements[0] as $page => $url)
                    @if ($page == $messages->currentPage())
                        <li>
                            <span class="flex items-center justify-center transition shadow-lg px-3 h-8 text-red-500 bg-red-200 rounded-lg">{{ $page }}</span>
                        </li>
                    @else
                        <li>
                            <a href="{{ $url }}" class="flex items-center justify-center transition shadow-lg px-3 h-8 text-gray-500 bg-white rounded-lg hover:bg-red-100 hover:text-red-400">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach

                {{-- دکمه بعدی --}}
                @if ($messages->hasMorePages())
                    <li>
                        <a href="{{ $messages->nextPageUrl() }}" class="flex items-center justify-center transition shadow-lg px-3 h-8 text-gray-500 bg-white rounded-lg hover:bg-red-100 hover:text-red-400">
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                            </svg>
                        </a>
                    </li>
                @else
                    <li>
                        <span class="flex items-center justify-center transition shadow-lg px-3 h-8 text-gray-300 bg-white rounded-lg">
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                            </svg>
                        </span>
                    </li>
                @endif
            </ul>
        </div>
        @endif
        </div>
      </div>
    </div>
  </main>
  <!-- footer -->
  @endsection
