<div class="grid grid-cols-1 pt-4 sm:grid-cols-2 md:grid-cols-3 gap-6">
  @foreach ($courses as $course)
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }} thumbnail"
              class="h-48 w-full object-cover">
          <div class="p-6">
              <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $course->title }}</h3>
              <p class="text-gray-600 mb-4">{{ $course->description }}</p>
              <div class="flex justify-between items-center mb-4">
                  <span class="text-gray-500">{{ count($course->lessons) }} lessons</span>
                  {{-- <a href="{{ route('course.edit', $course) }}"
                      class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg transition duration-300">Edit</a> --}}
              </div>
              <div>
                  <p class="text-lg font-semibold text-gray-800 mb-2">Lesson Resources</p>
                  <ul class="list-disc ml-6">
                      @foreach ($course->lessons as $lesson)
                          <li class="mb-2">
                              <span class="font-medium">{{ $lesson->title }}</span> - {{ $lesson->description }}
                              <ul class="list-disc ml-6">
                                @foreach ($lesson->lessonResources as $lessonResource)
                                <li>
                                    <a href="{{ asset('storage/' . $lessonResource->file) }}" target="_blank" class="text-blue-500 hover:underline">{{ $lessonResource->name }}</a>
                                    <form action="{{ route('lesson-resource.delete', $lessonResource->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="ml-2 text-red-600 hover:text-red-800">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </li>
                            @endforeach
                              </ul>
                          </li>
                      @endforeach
                  </ul>
              </div>
          </div>
      </div>
  @endforeach
</div>
