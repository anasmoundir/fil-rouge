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
                                <img src="{{ asset('storage/' . $course->image) }}" alt="" width="100px">
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $course->is_free }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $course->instructor->name }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{-- {{ $course->category->name }} --}}
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
                                          <button @click="showModal = true" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                              Edit
                                          </button>
                                      </div>
                                    
                                      <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto">
                                          <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                              <div class="fixed inset-0 transition-opacity">
                                                  <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                              </div>
                                    
                                              <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                                  <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                      <h2 class="text-lg font-medium text-gray-900 mb-4" id="modal-headline">Edit Category</h2>
                                                      <form method="POST" action="{{ route('categories.update', $categorie->id) }}" enctype="multipart/form-data">
                                                          @csrf
                                                          @method('PUT')
                                    
                                                          <div class="mb-4">
                                                              <label for="name" class="block mb-2 font-bold text-gray-700">Name</label>
                                                              <input type="text" name="name" id="name" class="form-input w-full" value="{{ $categorie->name }}" required>
                                                          </div>
                                    
                                                          <div class="mb-4">
                                                              <label for="image" class="block mb-2 font-bold text-gray-700">Upload Image</label>
                                                              <input type="file" name="image" id="image" class="form-input w-full">
                                                          </div>
                                    
                                                          <div class="flex justify-end">
                                                              <button type="button" @click="showModal = false" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 mr-2 rounded">
                                                                  Cancel
                                                              </button>
                                                              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                                  Update
                                                              </button>
                                                          </div>
                                                      </form>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                        
                                </td>
              
                                      class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                      <div x-show="showModal" class="fixed inset-0 transition-opacity"
                                          aria-hidden="true" @click="showModal = false">
                                          <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                      </div>
                          
                                      <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                          aria-hidden="true">&#8203;</span>

                                          class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                              <div class="sm:flex sm:items-start">
                                                  <div
                                                      class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 sm:mx-0 sm:h-10 sm:w-10">
                                                      <svg class="h-6 w-6 text-blue-600"
                                                          xmlns="http://www.w3.org/2000/svg" fill="none"
                                                          viewBox="0 0 24 24" stroke="currentColor"
                                                          aria-hidden="true">
                                                          <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                      </svg>
                                                  </div>
                                                  <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                      <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
                                                          Edit Course</h3>
                                                      <form x-ref="editForm" x-on:submit.prevent="submitEditForm('{{ route('courses.update', $course) }}')">
                                                          @csrf
                                                          @method('PUT')
                                                          <div>
                                                              <label for="name"
                                                                  class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                                                              <input type="text" name="name" id="name"
                                                                  value="{{ $course->name }}"
                                                                  class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                          </div>
                                                          <div class="mt-4">
                                                              <label for="title"
                                                                  class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                                                              <input type="text" name="title" id="title"
                                                                  value="{{ $course->title }}"
                                                                  class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                          </div>
                                                          <div class="mt-4">
                                                              <label for="description"
                                                                  class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                                                              <textarea name="description" id="description" rows="3"  
                                                                  class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">{{ $course->description }}</textarea>
                                                          </div>
                                                          <div class="mt-4">
                                                              <label for="image"
                                                                  class="block text-sm font-medium text-gray-700 mb-2">Image</label>
                                                              <input type="file" name="image" id="image"
                                                                  value="{{ $course->image }}"
                                                                  class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                          </div>
                                                          <div class="mt-4">
                                                              <label for="is_free"
                                                                  class="block text-sm font-medium text-gray-700 mb-2">Is Free</label>
                                                              <input type="text" name="is_free" id="is_free"
                                                                  value="{{ $course->is_free }}"
                                                                  class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                          </div>
                                                          <div class="mt-4">
                                                              <label for="instructor_id"
                                                                  class="block text-sm font-medium text-gray-700 mb-2">Instructor</label>
                                                              <select name="instructor_id" id="instructor_id"
                                                                  class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                                  @foreach ($instructors as $instructor)
                                                                      <option value="{{ $instructor->id }}"
                                                                          {{ $instructor->id == $course->instructor_id ? 'selected' : '' }}>
                                                                          {{ $instructor->name }}</option>
                                                                  @endforeach
                                                              </select>
                                                          </div>
                                                          <div class="mt-4">
                                                              <label for="category_id"
                                                                  class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                                                              <select name="category_id" id="category_id"
                                                                  class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                                  @foreach ($categories as $category)
                                                                      <option value="{{ $category->id }}"
                                                                          {{ $category->id == $course->category_id ? 'selected' : '' }}>
                                                                          {{ $category->name }}</option>
                                                                  @endforeach
                                                              </select>
                                                          </div>
                                                          <div class="mt-4">
                                                              
                                                          </div>
                                                        //close here the information
                                                      </form>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                              <button type="button" x-on:click="showModal = false"
                                                  class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                  Save
                                              </button>
                                              <button type="button" x-on:click="showModal = false"
                                                  class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                  Cancel
                                              </button>
                                          </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

