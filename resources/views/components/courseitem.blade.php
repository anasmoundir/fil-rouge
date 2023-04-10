
<p>course modal</p>
<h1>course section </h1>
<div x-data="{ isOpen: false }">
    <button @click="isOpen = true">Add Course</button>

    <div x-show="isOpen" class="fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div x-show.transition.opacity="isOpen" class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div x-show.transition.origin.bottom="isOpen"
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-100 sm:mx-0 sm:h-10 sm:w-10">
                            <svg class="h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4"></path>
                            </svg>
                        </div>

                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Add Course</h3>
                        </div>
                    </div>

                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <e class="mt-5">
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                <div class="mt-1">
                                    <input type="text" name="title" id="title" autocomplete="title" required
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <div class="mt-1">
                                    <input type="text" name="name" id="name" autocomplete="name" required
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="description"
                                    class="block text-sm font-medium text-gray-700">Description</label>
                                <div class="mt-1">
                                    <textarea name="description" id="description" rows="3"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                                <div class="mt-1">
                                    <select name="category" id="category" required
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        <option value="" disabled selected>Select a category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                                <div class="mt-1">
                                    <input type="file" name="image" id="image" required
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="video" class="block text-sm font-medium text-gray-700">Video</label>
                                <div class="mt-1">
                                    <input type="file" name="video" id="video"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                                <div class="mt-1">
                                    <input type="number" name="price" id="price" step="0.01" min="0"
                                        required
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="duration" class="block text-sm font-medium text-gray-700">Duration</label>
                                <div class="mt-1">
                                    <input type="text" name="duration" id="duration" placeholder="Format: XXh XXm"
                                        required
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="level" class="block text-sm font-medium text-gray-700">Level</label>
                                <div class="mt-1">
                                    <select name="level" id="level" required
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        <option value="" disabled selected>Select a level</option>
                                        <option value="beginner">Beginner</option>
                                        <option value="intermediate">Intermediate</option>
                                        <option value="advanced">Advanced</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="language" class="block text-sm font-medium text-gray-700">Language</label>
                                <div class="mt-1">
                                </div>
                            </div>
                        </e>

