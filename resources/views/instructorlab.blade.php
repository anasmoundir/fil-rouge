<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight my-class">
                {{ __('Add Lesson') }}
            </h2>
            <div class="flex items-center">
                <a href="{{ route('course.instructor') }}"
                    class="px-4 py-2 text-sm text-gray-700 bg-gray-100 hover:bg-gray-200 rounded transition duration-300">See
                    Your Courses</a>
                <a href="{{ route('instructorlab') }}"
                    class="px-4 py-2 ml-4 text-sm text-white bg-blue-500 hover:bg-blue-600 rounded transition duration-300">Add
                    Your Lesson</a>
            </div>
        </div>
    </x-slot>


    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if ($display)
        <x-course_-cards :courses=$courses :instructor=$instructor :lessons=$lessons
            :lessonResources=$lessonResources />
    @else
        <x-addlesson-item :users="$users" :categories="$categories" :courses="$courses" :instructors="$instructors" />
    @endif
</x-app-layout>

//define style
<style>
    .my-class {
        font-family: Arial, sans-serif;
        font-size: 24px;
        font-weight: bold;
        color: #000000;
    }
</style>
