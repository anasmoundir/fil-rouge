<x-slot name="header">
    <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight my-class">
            {{ __('Available Courses') }}
        </h2>
        <div class="flex items-center">
            <a href="{{ route('enrolled.courses') }}"
                class="px-4 py-2 text-sm text-gray-700 bg-gray-100 hover:bg-gray-200 rounded transition duration-300">My
                Enrolled Courses</a>
            <a href="{{ route('instructorlab') }}"
                class="px-4 py-2 ml-4 text-sm text-white bg-blue-500 hover:bg-blue-600 rounded transition duration-300">Add
                Your Lesson</a>
        </div>
    </div>
</x-slot>
<div class="container mx-auto mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach ($courses as $course)
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-4">{{ $course->name }}</h2>
            <div class="flex justify-between items-center mb-4">
                <p class="text-gray-600">{{ $course->description }}</p>
                <form action="{{ route('course.enroll', $course->id) }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Enroll Now</button>
                </form>

            </div>
            <div class="flex items-center border-b border-gray-300 pb-4 mb-4">
                <span class="text-lg font-bold mr-4">{{ $course->lessons->count() }} Lessons</span>
                <nav>
                    <ul class="flex">
                        <li class="mr-4">
                            <a href="#" class="text-gray-600 hover:text-black">Overview</a>
                        </li>
                        <li class="mr-4">
                            <a href="#" class="text-gray-600 hover:text-black">Lessons</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-black">Instructor</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="flex flex-col gap-4">
                @foreach ($course->lessons as $lesson)
                    <div class="flex items-center">
                        <div class="w-8 h-8 rounded-full bg-gray-400 mr-4"></div>
                        <div>
                            <h3 class="text-lg font-bold mb-2">{{ $lesson->name }}</h3>
                            <p class="text-gray-600">{{ $lesson->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>

<div class="container mx-auto my-8">
    {{ $courses->links() }}
</div>
