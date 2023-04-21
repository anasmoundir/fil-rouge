<!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
<div x-data="{ showModal: false }" x-init="showModal = false">

    <div class="flex px-4">
        <button @click="showModal = true" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add course
        </button>
    </div>
    <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <h2 class="text-lg font-medium text-gray-900 mb-4" id="modal-headline">Create Course if is not
                        exist</h2>
                    <form action="{{ route('AddCourseIfNotexist') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="title" class="block mb-2 font-bold text-gray-700">Title</label>
                            <input type="text" name="title" id="title" class="form-input w-full" required>
                        </div>

                        <div class="mb-2">
                            <label for="Name" class="block mb-2 font-bold text-gray-700">Name</label>
                            <textarea name="name" id="name" class="form-textarea w-full" required></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="description" class="block mb-2 font-bold text-gray-700">description</label>
                            <textarea name="description" id="description" class="form-textarea w-full" required></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="categorie_id" class="block mb-2 font-bold text-gray-700">Category</label>
                            <select name="categorie_id" id="categorie_id" class="form-select w-full" required>
                                @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="instructor_id" class="block mb-2 font-bold text-gray-700">Instructor</label>
                            <select name="instructor_id" id="instructor_id" class="form-select w-full" required>
                                @foreach ($instructors as $instructor)
                                    <option value="{{ $instructor->id }}">{{ $instructor->first_name }}
                                        {{ $instructor->last_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="image" class="block mb-2 font-bold text-gray-700">Image</label>
                            <input type="file" name="image" id="image" class="form-input w-full" required>
                        </div>

                        <div class="mb-2">
                            <label for="is_free" class="block mb-2 font-bold text-gray-700">is free</label>
                            <select name="is_free" id="is_free" class="form-select w-full" required>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="level" class="block mb-2 font-bold text-gray-700">Level</label>
                            <select name="level" id="level" class="form-select w-full" required>
                                <option value="Beginner">Beginner</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Advanced">Advanced</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label for="language" class="block mb-2 font-bold text-gray-700">language</label>
                            <select name="language" id="language" class="form-select w-full" required>
                                <option value="Arabic">Arabic</option>
                                <option value="English">English</option>
                                <option value="French">French</option>
                                <option value="Spanish">Spanish</option>
                            </select>
                        </div>
                        <div class="flex justify-end">
                            <button type="button" @click="showModal = false"
                                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 mr-2 rounded">
                                Cancel
                            </button>
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Create Course
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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
