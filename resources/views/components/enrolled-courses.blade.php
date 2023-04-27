
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('My Courses') }}
    </h2>
</x-slot>

<div class="container mx-auto mt-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($courses as $course)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-48 object-cover" src="{{ $course->image_url }}" alt="{{ $course->name }}">
                <div class="p-4">
                    <h3 class="font-bold text-xl mb-2">{{ $course->name }}</h3>
                    <p class="text-gray-700 text-base mb-2">{{ $course->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>