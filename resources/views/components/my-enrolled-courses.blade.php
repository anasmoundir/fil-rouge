    <div class="bg-white rounded-md shadow-md p-6">
        <h2 class="text-2xl font-bold mb-4">Your Courses</h2>
        <div class="grid grid-cols-3 gap-6">
          @foreach ($courses as $course)
            <div class="bg-gray-100 rounded-md shadow-md p-4">
              <h3 class="text-lg font-bold mb-2">{{ $course->name }}</h3>
              <p class="text-gray-600">{{ $course->description }}</p>
              <div class="flex justify-between items-center mt-4">
                <a href="{{ route('courses.show', $course->id) }}" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Start Course</a>
                <span class="text-gray-600">{{ $course->lessons->count() }} Lessons</span>
              </div>
            </div>
          @endforeach
        </div>
      </div>