
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add Lesson') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <form method="POST" action="{{ route('lessons.store') }}">
                        @csrf

                        <div class="flex flex-col mb-4">
                            <label for="category" class="mb-2 font-bold">Cou</label>
                            <select id="category" name="category" required class="px-4 py-2 border rounded-lg">
                                <option value="">Select a Course</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                        </div>

                        <div class="flex flex-col mb-4">
                            <label for="title" class="mb-2 font-bold">Title</label>
                            <input type="text" id="title" name="title" required
                                class="px-4 py-2 border rounded-lg">
                        </div>

                        <div class="flex flex-col mb-4">
                            <label for="description" class="mb-2 font-bold">Description</label>
                            <textarea id="description" name="description" required class="px-4 py-2 border rounded-lg"></textarea>
                        </div>

                        <div class="flex flex-col mb-4">
                            <label for="course_id" class="mb-2 font-bold">Course</label>
                            <select id="course_id" name="course_id" required class="px-4 py-2 border rounded-lg">
                                <!-- display a list of courses to choose from -->
                            </select>
                        </div>

                        <div class="flex flex-col mb-4">
                            <label for="video_url" class="mb-2 font-bold">Video URL</label>
                            <input type="url" id="video_url" name="video_url" class="px-4 py-2 border rounded-lg">
                        </div>

                        <div id="lesson-resources" class="flex flex-col mb-4">
                            <label for="name" class="mb-2 font-bold">Name</label>
                            <input type="text" id="name" name="lesson_resources[0][name]" required
                                class="px-4 py-2 border rounded-lg">

                            <label for="description" class="mt-4 mb-2 font-bold">Description</label>
                            <textarea id="description" name="lesson_resources[0][description]" required class="px-4 py-2 border rounded-lg"></textarea>

                            <label for="type" class="mt-4 mb-2 font-bold">Type</label>
                            <select id="type" name="lesson_resources[0][type]" required
                                class="px-4 py-2 border rounded-lg">
                                <!-- display a list of types to choose from -->
                            </select>

                            <label for="file" class="mt-4 mb-2 font-bold">File</label>
                            <input type="file" id="file" name="lesson_resources[0][file]" required
                                class="px-4 py-2 border rounded-lg">

                            <input type="hidden" name="lesson_resources[0][lesson_id]" value="">

                            <!-- add a button to add a new lesson_resource -->
                            <button type="button" id="add-lesson-resource"
                                class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700">Add
                                Resource</button>
                        </div>

                        <!-- add a button to move to the next step of the form -->
                        <button type="button" id="next-step"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </x-app-layout>




<script>
    const addLessonResourceButton = document.getElementById('add-lesson-resource');
    const lessonResourcesDiv = document.getElementById('lesson-resources');
    let lessonResourceIndex = 0;

    addLessonResourceButton.addEventListener('click', () => {
        lessonResourceIndex++;

        const newLessonResourceDiv = document.createElement('div');
        newLessonResourceDiv.innerHTML = `
        <label for="name">Name</label>
        <input type="text" id="name" name="lesson_resources[${lessonResourceIndex}][name]" required>

        <label for="description">Description</label>
        <textarea id="description" name="lesson_resources[${lessonResourceIndex}][description]" required></textarea>

        <label for="type">Type</label>
        <select id="type" name="lesson_resources[${lessonResourceIndex}][type]" required>
            <!-- display a list of types to choose from -->
        </select>

        <label for="file">File</label>
        <input type="file" id="file" name="lesson_resources[${lessonResourceIndex}][file]" required>

        <input type="hidden" name="lesson_resources[${lessonResourceIndex}][lesson_id]" value="">

        <!-- add a button to remove this lesson_resource -->
        <button type="button" class="remove-lesson-resource">Remove</button>
    `;

        lessonResourcesDiv.appendChild(newLessonResourceDiv);
    });
    lessonResourcesDiv.addEventListener('click', (event) => {
        if (event.target.classList.contains('remove-lesson-resource')) {
            event.target.parentNode.remove();
        }
    });
    const formSections = document.querySelectorAll('.form-section');
    const prevButton = document.getElementById('prev-button');
    const nextButton = document.getElementById('next-button');
    let currentSectionIndex = 0;

    showFormSection(currentSectionIndex);

    prevButton.addEventListener('click', () => {
        if (currentSectionIndex > 0) {
            currentSectionIndex--;
            showFormSection(currentSectionIndex);
        }
    });

    nextButton.addEventListener('click', () => {
        if (currentSectionIndex < formSections.length - 1) {
            currentSectionIndex++;
            showFormSection(currentSectionIndex);
        }
    });

    function showFormSection(index) {
        formSections.forEach((section, sectionIndex) => {
            if (sectionIndex === index) {
                section.style.display = 'block';
            } else {
                section.style.display = 'none';
            }
        });

        if (index === 0) {
            prevButton.style.display = 'none';
        } else {
            prevButton.style.display = 'inline';
        }

        if (index === formSections.length - 1) {
            nextButton.innerHTML = 'Submit';
        } else {
            nextButton.innerHTML = 'Next';
        }
    }
</script>
