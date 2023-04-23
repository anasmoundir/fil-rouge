<div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
    @if (count($courses) > 0)

        <div class="grid grid-cols-1 sm:grid-cols-2 pt-4 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($courses as $course)
                <div class="bg-white rounded-lg shadow-md overflow-hidden mb-4">
                    <button
                        class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-lg transition duration-300  delete-course float-right"
                        data-form-id="delete-course-form-{{ $course->id }}">
                        <span class="text-2xl font-bold">&times;</span>
                    </button>
                    <form id="delete-course-form-{{ $course->id }}"
                        action="{{ route('lesson.deleteCourse', $course->id) }}" method="POST" class="hidden">
                        @csrf
                        @method('DELETE')
                    </form>
                    <img src="{{ asset('images/' . $course->image) }}" alt="{{ $course->title }} thumbnail"
                        class="h-48 w-full object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $course->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ $course->description }}</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-gray-500">{{ count($course->lessons) }} lessons</span>

                        </div>
                        <div>
                            <p class="text-lg font-semibold text-gray-800 mb-2">Lesson Resources</p>
                            <ul class="list-disc ml-6">
                                @foreach ($course->lessons as $lesson)
                                    <li class="mb-2">
                                        <span class="font-medium">{{ $lesson->title }}</span> -
                                        {{ $lesson->description }}
                                        <button
                                            class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-lg transition duration-300  float-right"
                                            onclick="event.preventDefault(); document.getElementById('delete-lesson-form-{{ $lesson->id }}').submit();">
                                            <span class="text-2xl font-bold">&times;</span>
                                        </button>
                                        <form id="delete-lesson-form-{{ $lesson->id }}"
                                            action="{{ route('lesson.deleteLesson', $lesson->id) }}" method="POST"
                                            class="hidden">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <ul class="list-disc ml-6">
                                            @foreach ($lesson->lessonResources as $lessonResource)
                                                <li>
                                                    <a href="{{ asset('storage/' . $lessonResource->file) }}"
                                                        target="_blank"
                                                        class="text-blue-500 hover:underline">{{ $lessonResource->name }}</a>
                                                    <button
                                                        class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-lg transition duration-300  mb-6"
                                                        onclick="event.preventDefault(); document.getElementById('delete-lesson-resource-form-{{ $lessonResource->id }}').submit();">
                                                        <span class="text-2xl font-bold">&times;</span>
                                                    </button>
                                                    <form id="delete-lesson-resource-form-{{ $lessonResource->id }}"
                                                        action="{{ route('lesson-resource.delete', $lessonResource->id) }}"
                                                        method="POST" class="hidden">
                                                        @csrf
                                                        @method('DELETE')
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
    @else
        <p class="p-6">You have no courses yet. <a href="{{ route('instructorlab') }}"
                class="text-blue-500 hover:underline">Create a new course.</a></p>
    @endif
</div>


<script>
    // Listen for the click event on the delete button
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('delete-course')) {
            event.preventDefault();

            // Show a confirmation alert before submitting the form
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit the form if the user confirms
                    document.getElementById(event.target.dataset.formId).submit();
                }
            });
        }
    });
</script>
