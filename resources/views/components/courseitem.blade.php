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


<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Name
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Title
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Description
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Image
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Is Free
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            >Instructor</th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Category
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Level
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Language
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Created At
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Updated At
                        </th>
                        <th class="px-6 py-3 text-sm text-left text-gray-500 border-b border-gray-200 bg-gray-50"
                            colspan="2">
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-white">
                    @foreach ($courses as $course)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $course->name }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $course->title }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $course->description }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <img src="{{ asset('storage/' . $course->image) }}" alt="" width="10px">
                                {{ $course->image }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $course->is_free }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $course->instructor_name }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $course->categorie_name }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $course->level }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $course->language }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $course->created_at }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $course->updated_at }}
                            </td>
                            <td>
                            <td
                                class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200">
                                <div x-data="{ showModal: false }">

                                    <div class="flex justify-end">
                                        <button @click="showModal = true"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Edit
                                        </button>
                                    </div>

                                    <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto">
                                        <div
                                            class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                            <div class="fixed inset-0 transition-opacity">
                                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                            </div>

                                            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                                                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                    <h2 class="text-lg font-medium text-gray-900 mb-4"
                                                        id="modal-headline">Edit Course</h2>
                                                    <form method="POST"
                                                        action="{{ route('courses.update', $course->id) }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="mb-4">
                                                            <label for="name"
                                                                class="block mb-2 font-bold text-gray-700">Name</label>
                                                            <input type="text" name="name" id="name"
                                                                class="form-input w-full" value="{{ $course->name }}"
                                                                required>
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="title"
                                                                class="block mb-2 font-bold text-gray-700">Title</label>
                                                            <input type="text" name="title" id="title"
                                                                value="{{ $course->title }}"
                                                                class="form-input w-full">
                                                        </div>
                                                        <!-- description -->
                                                        <div class="mb-4">
                                                            <label for="description"
                                                                class="block mb-2 font-bold text-gray-700">Description</label>
                                                            <textarea name="description" id="description" cols="30" rows="10" class="form-input w-full"> {{ $course->description }}</textarea>
                                                        </div>
                                                        <!--is_free-->
                                                        <div class="mb-4">
                                                            <label for="is_free"
                                                                class="block mb-2 font-bold text-gray-700">Is
                                                                Free</label>
                                                            <select name="is_free" id="is_free"
                                                                class="form-input w-full"
                                                                value="{{ $course->is_free }}">
                                                                <option value="1">Yes</option>
                                                                <option value="0">No</option>
                                                            </select>
                                                        </div>
                                                        <!--instructor approved-->
                                                        <!--check if  instructor is approved ?-->

                                                        <div class="mb-4">
                                                            <label for=" instructor_id"
                                                                class="block mb-2 font-bold text-gray-700">Instructor</label>
                                                            <select name="instructor_id" id="instructor_id"
                                                                class="form-select w-full" required>
                                                                @foreach ($instructors as $instructor)
                                                                    <option value="{{ $instructor->id }}"
                                                                        @if ($instructor->id == $course->instructor_id) selected @endif>
                                                                        {{ $instructor->first_name }}
                                                                        {{ $instructor->last_name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <!--category-->
                                                        <div class="mb-4">
                                                            <label for="categorie_id"
                                                                class="block mb-2 font-bold text-gray-700">Category</label>
                                                            <select name="categorie_id" id="categorie_id"
                                                                class="form-input w-full">
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}">
                                                                        {{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <!--level-->
                                                        <div class="mb-4">
                                                            <label for="level"
                                                                class="block mb-2 font-bold text-gray-700">Level</label>
                                                            <select name="level" id="level"
                                                                class="form-input w-full"
                                                                value="{{ $course->level }}">
                                                                <option value="beginner">Beginner</option>
                                                                <option value="intermediate">Intermediate</option>
                                                                <option value="advanced">Advanced</option>
                                                            </select>
                                                        </div>
                                                        <!--language-->
                                                        <div class="mb-4">
                                                            <label for="language"
                                                                class="block mb-2 font-bold text-gray-700">Language</label>
                                                            <select name="language" id="language"
                                                                class="form-input w-full"
                                                                value="{{ $course->language }}">
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
                                                                Update
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <td
                                class="text-sm
                                        font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">

                                <a href="{{ route('courses.destroy', $course->id) }}"
                                    class="text-gray-600 hover:text-gray-900 ml-4"
                                    onclick="event.preventDefault(); document.getElementById('delete-form-{{ $course->id }}').submit();">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </a>
                                <form id="delete-form-{{ $course->id }}"
                                    action="{{ route('courses.destroy', $course->id) }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>

                            </td>



                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
