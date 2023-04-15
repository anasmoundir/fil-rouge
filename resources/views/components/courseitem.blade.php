<div x-data="{ showModal: false }">

    <div class="flex justify-end">
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
                    <h2 class="text-lg font-medium text-gray-900 mb-4" id="modal-headline">Create Course</h2>
                    <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label for="category_id" class="block mb-2 font-bold text-gray-700">Category</label>
                            <select name="category_id" id="course_id" class="form-select w-full" required>
                                @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->title }}</option>
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
                                <option value="1">English</option>
                                <option value="2">French</option>
                                <option value="3">Spanish</option>
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


<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div
            class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            ID
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Name
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Image
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Created_At
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Description
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            is_free
                        </th>
                        <th class="px-6 py-3 text-sm text-left text-gray-500 border-b border-gray-200 bg-gray-50"
                            colspan="2">
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-white">
                    @foreach ($categories as $categorie)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    {{ $categorie->id }}
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{ $categorie->name }}</div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <p>{{ $categorie->image }}</p>
                            </td>

                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                <span>{{ $categorie->created_at }}</span>
                            </td>

                            <td
                                class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                            <td
                                class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                                <a href="#" class="text-gray-600 hover:text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>
                            </td>

                            </td>
                            <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 text-red-600 hover:text-red-800" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
