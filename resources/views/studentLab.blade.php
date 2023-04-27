<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight my-class">
                {{ __('Available Courses') }}
            </h2>
            <div class="flex items-center">
                <a href="{{ route('course.instructor') }}"
                    class="px-4 py-2 text-sm text-gray-700 bg-gray-100 hover:bg-gray-200 rounded transition duration-300">My
                    Enrolled Courses</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="#" onclick="event.preventDefault(); this.closest('form').submit();"
                        class="block px-2 py-1 transition rounded-md hover:bg-gray-100">{{ __('Log Out') }}</a>
                </form>
            </div>
        </div>
    </x-slot>
    @if ($display == 'mycourses')
        <x-my-enrolled-courses :courses="$courses" :display="$display"> </x-my-enrolled-courses>
    @elseif ($display == 'courses')
        <x-courses-by-categorie :courses="$courses"> </x-courses-by-categorie>
    @elseif ($display == 'lessons')
        <x-startcourse :course="$course" :lessons="$lessons" :currentLesson="$currentLesson" :display="$display"></x-startcourse>
    @endif
</x-app-layout>
