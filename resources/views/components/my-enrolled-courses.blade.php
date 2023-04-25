<x-slot name="header">
    <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight my-class">
            {{ __('Available Courses') }}
        </h2>
        <div class="flex items-center">
            <a href="{{ route('course.instructor') }}"
                class="px-4 py-2 text-sm text-gray-700 bg-gray-100 hover:bg-gray-200 rounded transition duration-300">My
                Enrolled Courses</a>
            <a href="{{ route('instructorlab') }}"
                class="px-4 py-2 ml-4 text-sm text-white bg-blue-500 hover:bg-blue-600 rounded transition duration-300">Add
                Your Lesson</a>
        </div>
    </div>
</x-slot>
<div class="bg-white rounded-md shadow-md p-6">
    <h2 class="text-2xl font-bold mb-4">Your Courses</h2>
    <div class="flex flex-wrap -mx-4">


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($courses as $course)
                <div class="bg-white shadow-md rounded-lg p-4">
                    <img src="{{ asset('images/' . $course->image) }}" alt="{{ $course->title }} thumbnail">
                    <div class="mt-4">
                        <h3 class="text-lg font-medium">{{ $course->name }}</h3>
                        <p class="text-gray-500">{{ $course->instructor->name }}</p>
                        <p class="mt-2 text-gray-500">{{ $course->description }}</p>
                        <a class="block mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Proceed
                            to course</a>
                        <form method="POST" action="{{ route('course.unsubscribe', $course) }}" class="inline">
                            @csrf
                            @method('POST')
                            <button type="submit"
                                class="block mt-4 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Unsubscribe</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
