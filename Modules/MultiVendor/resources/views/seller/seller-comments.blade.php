@extends('multivendor::seller.base')
@section('Content')
<div class="container mx-auto px-6 py-10">
    <!-- عنوان صفحه -->
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">پرسش‌ها و نظرات کاربران</h1>

    <!-- گرید دو ستونه -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        <!-- ستون پرسش‌ها -->
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <!-- هدر بخش -->
            <div class="bg-gradient-to-r from-teal-600 to-teal-400 text-white px-6 py-4 rounded-t-lg">
                <h2 class="text-lg font-bold">پرسش‌های کاربران</h2>
            </div>
            <!-- بدنه -->
            <div class="p-6 space-y-6">
                @foreach($questions as $question)
                <div class="p-4 bg-gray-50 border border-gray-200 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between mb-3">
                        <!-- اطلاعات کاربر -->
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/image/users/default.png') }}" alt="User Image"
                                class="w-12 h-12 rounded-full object-cover shadow-md">
                            <div>
                                <p class="font-semibold text-gray-700">{{ $question->Question }}</p>
                                <p class="text-xs text-gray-500">{{ jdate($question->created_at)->format('%B %d، %Y') }}</p>
                            </div>
                        </div>
                        <!-- دکمه پاسخ -->
                        <button class="px-4 py-2 text-xs font-semibold text-white bg-teal-500 hover:bg-teal-600 rounded-full transition duration-300"
                            onclick="toggleResponseBox('question-{{ $question->id }}')">پاسخ</button>
                    </div>
                    <!-- محتوای پرسش -->
                    <p class="text-gray-600 leading-relaxed">
                        {{ $question->content }}
                    </p>

                    <!-- باکس پاسخ‌دهی -->
                    <div id="response-box-question-{{ $question->id }}" class="mt-4 hidden">
                        <form action="{{route('respond',['id'=>$question->id , 'type' => 'Question'])}}" method="post"> @csrf
                        <textarea name="Answer" class="w-full p-3 border border-teal-300 rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-teal-500 transition duration-300"
                            rows="4" placeholder="پاسخ خود را وارد کنید..."></textarea>
                        <button class="mt-2 px-6 py-2 text-white bg-teal-500 hover:bg-teal-600 rounded-md focus:outline-none transition duration-300">ارسال پاسخ</button></form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- ستون نظرات -->
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <!-- هدر بخش -->
            <div class="bg-gradient-to-r from-indigo-600 to-indigo-400 text-white px-6 py-4 rounded-t-lg">
                <h2 class="text-lg font-bold">نظرات کاربران</h2>
            </div>
            <!-- بدنه -->
            <div class="p-6 space-y-6">
                @foreach($comments as $comment)
                <div class="p-4 bg-gray-50 border border-gray-200 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between mb-3">
                        <!-- اطلاعات کاربر -->
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/image/users/default.png') }}" alt="User Image"
                                class="w-12 h-12 rounded-full object-cover shadow-md">
                            <div>
                                <p class="font-semibold text-gray-700">{{ $comment->name }}</p>
                                <p class="text-xs text-gray-500">{{ jdate($comment->created_at)->format('%B %d، %Y') }}</p>
                            </div>
                        </div>
                        <!-- دکمه پاسخ -->
                        <button class="px-4 py-2 text-xs font-semibold text-white bg-indigo-500 hover:bg-indigo-600 rounded-full transition duration-300"
                            onclick="toggleResponseBox('comment-{{ $comment->id }}')">پاسخ</button>
                    </div>
                    <!-- محتوای نظر -->
                    <p class="text-gray-600 leading-relaxed">
                        {{ $comment->content }}
                    </p>

                    <!-- باکس پاسخ‌دهی -->
                    <div id="response-box-comment-{{ $comment->id }}" class="mt-4 hidden">
                    <form action="{{route('respond',['id'=>$question->id , 'type' => 'Question'])}}" method="post"> @csrf
                        <textarea class="w-full p-3 border border-indigo-300 rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300"
                            rows="4" placeholder="پاسخ خود را وارد کنید..."></textarea>
                        <button class="mt-2 px-6 py-2 text-white bg-indigo-500 hover:bg-indigo-600 rounded-md focus:outline-none transition duration-300">ارسال پاسخ</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    // تابعی برای نمایش/پنهان کردن باکس پاسخ‌دهی
    function toggleResponseBox(id) {
        // باکس پاسخ مربوطه را پیدا کن
        const responseBox = document.getElementById('response-box-' + id);
        // باکس را نمایش یا پنهان کن
        responseBox.classList.toggle('hidden');
    }
</script>

@endsection
