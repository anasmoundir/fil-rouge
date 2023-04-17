<div id="app">
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add Course') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <form method="POST" action="{{ route('courses.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="flex flex-col md:flex-row md:space-x-4">
                            <div class="flex-1">
                                <label for="title" class="block mb-2">{{ __('Title') }}</label>
                                <input type="text" name="title" id="title" value="{{ old('title') }}" required
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                @error('title')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="w-full md:w-1/2 mt-4 md:mt-0">
                                <label for="category_id" class="block mb-2">{{ __('Category') }}</label>
                                <div class="relative">
                                    <select name="category_id" id="category_id" required
                                        class="block w-full appearance-none rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <option value="">{{ __('Select a category') }}</option>
                                        {{-- @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                    @endforeach --}}
                                    </select>
                                </div>
                                @error('category_id')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row md:space-x-4">
                            <div class="mt-4">
                                <label for="description" class="block mb-2">{{ __('Description') }}</label>

                                <textarea name="description" id="description" rows="5" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-4">
                                <label for="category_id">{{ __('Category') }}</label>
                                <select name="category_id" id="category_id" required>
                                    <option value="">{{ __('Select a category') }}</option>
                                    {{-- @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach --}}
                                </select>
                                @error('category_id')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <label for="course_name">{{ __('Course Name') }}</label>
                                <input type="text" name="course_name" id="course_name" required>
                                <p class="text-xs text-gray-500">
                                    {{ __('Start typing the course name, or enter a new course name') }}</p>
                            </div>
                        </div>


                        <div class="mb-4">
                            <label for="lesson_resources"
                                class="block text-gray-700 font-bold mb-2">{{ __('Lesson Resources') }}</label>
                            <div id="lesson-resources-container">
                                <div class="file-input">
                                    <video-upload></video-upload>
                                    <button type="button" class="remove-file-input">Remove</button>
                                </div>
                            </div>
                            <button type="button" id="add-file-input">Add More</button>
                            @error('lesson_resources')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-app-layout>
</div>



<script>
    // Get the container for the lesson resources file inputs
    var lessonResourcesContainer = document.getElementById('lesson-resources-container');

    // Get the button to add more file inputs
    var addFileInputButton = document.getElementById('add-file-input');

    // Add an event listener to the button to add more file inputs
    addFileInputButton.addEventListener('click', function() {
        // Create a new file input element
        var fileInput = document.createElement('input');
        fileInput.type = 'file';
        fileInput.name = 'lesson_resources[]';
        fileInput.classList.add('shadow', 'appearance-none', 'border', 'rounded', 'w-full', 'py-2', 'px-3',
            'text-gray-700', 'leading-tight', 'focus:outline-none', 'focus:shadow-outline');

        // Create a new remove button element
        var removeButton = document.createElement('button');
        removeButton.type = 'button';
        removeButton.textContent = 'Remove';
        removeButton.classList.add('remove-file-input');

        // Create a new div to hold the file input and remove button
        var fileInputWrapper = document.createElement('div');
        fileInputWrapper.classList.add('file-input');
        fileInputWrapper.appendChild(fileInput);
        fileInputWrapper.appendChild(removeButton);

        // Append the new file input and remove button to the container
        lessonResourcesContainer.appendChild(fileInputWrapper);
    });

    // Add an event listener to the container for the lesson resources file inputs
    lessonResourcesContainer.addEventListener('click', function(event) {
        // Check if the clicked element is a remove button
        if (event.target && event.target.classList.contains('remove-file-input')) {
            // Remove the corresponding file input and remove button
            var fileInputWrapper = event.target.closest('.file-input');
            lessonResourcesContainer.removeChild(fileInputWrapper);
        }
    });
    import {
        createApp
    } from 'vue';
    import VideoUpload from '@/components/VideoUpload.vue';

    createApp({
        components: {
            VideoUpload,
        }
    }).mount('#app');
</script>
