<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Lesson') }}
        </h2>
    </x-slot>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form method="POST" action="{{ route('lessons.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col mb-4">
                        <label for="course_id" class="mb-2 font-bold">Course</label>
                        <select id="course_id" name="course_id" required class="px-4 py-2 border rounded-lg">
                            <option value="">Select a Course</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-col mb-4">
                        <label for="description" class="mb-2 font-bold">Title</label>
                        <input type="text" id="title" name="title" required
                            class="px-4 py-2 border rounded-lg">
                    </div>

                    <div class="flex flex-col mb-4">
                        <label for="description" class="mb-2 font-bold">Description</label>
                        <textarea id="description" name="description" required class="px-4 py-2 border rounded-lg"></textarea>
                    </div>



                    <div class="flex flex-col mb-4">
                        <label for="video_url" class="mb-2 font-bold">Video URL</label>
                        <input type="url" id="video_url" name="video_url" class="px-4 py-2 border rounded-lg">
                    </div>

                    <div id="lesson-resources" class="flex flex-col mb-4">
                        {{-- <label for="name" class="mb-2 font-bold">Name</label>
                        <input type="text" id="name" name="lesson_resources[0][name]" required
                            class="px-4 py-2 border rounded-lg">

                        <label for="description" class="mt-4 mb-2 font-bold">Description</label>
                        <textarea id="description" name="lesson_resources[0][description]" required class="px-4 py-2 border rounded-lg"></textarea> --}}

                        <div class="flex flex-col mb-4">
                            <label for="course_id" class="mb-2 font-bold">Course</label>
                            <select id="course_id" name="course_id" required class="px-4 py-2 border rounded-lg">
                                <option value="">Select a Course</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}"
                                        {{ old('course_id') == $course->id ? 'selected' : '' }}>{{ $course->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex flex-col mb-4">
                            <label for="new_course_name" class="mb-2 font-bold">New Course Name</label>
                            <input type="text" id="new_course_name" name="new_course_name"
                                value="{{ old('new_course_name') }}" class="px-4 py-2 border rounded-lg">
                        </div>


                        <!-- add a button to add a new lesson_resource -->
                        <button type="button" id="add-lesson-resource"
                            class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700">Add
                            Resource</button>
                    </div>
                    <button type="submit"
                        class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-700">Submit</button>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>



<script>
    const addLessonResourceButton = document.getElementById('add-lesson-resource');
    const lessonResourcesDiv = document.getElementById('lesson-resources');
    let lessonResourceIndex = document.querySelectorAll('#lesson-resources .p-4').length;

    addLessonResourceButton.addEventListener('click', () => {
        lessonResourceIndex++;

        const newLessonResourceDiv = document.createElement('div');
        newLessonResourceDiv.innerHTML = `
        <div class="p-4 my-4 bg-gray-100 rounded-lg">
            <label for="name" class="block font-medium text-gray-700 mb-2">Name</label>
            <input type="text" id="name" name="lesson_resources[${lessonResourceIndex}][name]" required
                class="border border-gray-300 p-2 rounded-lg w-full mb-4" />

            <label for="description" class="block font-medium text-gray-700 mb-2">Description</label>
            <textarea id="description" name="lesson_resources[${lessonResourceIndex}][description]" required
                class="border border-gray-300 p-2 rounded-lg w-full mb-4"></textarea>

            <label for="file" class="block font-medium text-gray-700 mb-2">File</label>
            <input type="file" id="file" name="lesson_resources[${lessonResourceIndex}][file]" required
                class="border border-gray-300 p-2 rounded-lg w-full mb-4" />

            <input type="hidden" name="lesson_resources[${lessonResourceIndex}][lesson_id]" value="" />

            <!-- add a button to remove this lesson_resource -->
            <button type="button" class="remove-lesson-resource bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded-lg">
                Remove
            </button>
        </div>
        `;

        lessonResourcesDiv.appendChild(newLessonResourceDiv);
    });

    lessonResourcesDiv.addEventListener('click', (event) => {
        if (event.target.classList.contains('remove-lesson-resource')) {
            event.target.parentNode.remove();
            lessonResourceIndex--;
        }
    });
</script>
