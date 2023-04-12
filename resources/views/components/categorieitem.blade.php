    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div x-data="{ showModal: false }">

        <div class="flex justify-end">
            <button @click="showModal = true"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Add categorie
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
                        <h2 class="text-lg font-medium text-gray-900 mb-4" id="modal-headline">Create categorie</h2>
                        <form method="POST" action={{ route('categories.store') }} enctype="multipart/form-data">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="block mb-2 font-bold text-gray-700">Name</label>
                                <input type="text" name="name" id="name" class="form-input w-full" required>
                            </div>

                            <div class="mb-4">
                                <label for="image" class="block mb-2 font-bold text-gray-700">Upload Image</label>
                                <input type="file" name="image" id="image" class="form-input w-full" required>
                            </div>

                            <div class="flex justify-end">
                                <button type="button" @click="showModal = false"
                                    class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 mr-2 rounded">
                                    Cancel
                                </button>
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Create
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
                                ID</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Name</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Image</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Created_At</th>

                            </th>
                            <th class="px-6 py-3 text-sm text-left text-gray-500 border-b border-gray-200 bg-gray-50"
                                colspan="3">
                                Action</th>
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
                                <td>
                                  <button @click="showModal = true; category = {{ json_encode($categorie) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                              </td>
              

                                <td
                                    class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                    <span>{{ $categorie->updated_at }}</span>
                                    <button type="button" class="text-gray-600 hover:text-gray-900 ml-4"
                                        data-toggle="modal" data-target="#updateModal{{ $categorie->id }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 21a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2h10l4 4v10z" />
                                        </svg>
                                    </button>

              
                                </td>

                                <td
                                    class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200">
                                    <a href="{{ route('categories.show', $categorie->id) }}"
                                        class="text-gray-600 hover:text-gray-900 ml-4">show</a>

                                    <button @click="showModal = true"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                        data-target="#update-category-modal-{{ $categorie->id }}>
                                    update categorie
                                    </button>
                                        
                                </td>


                                <td class="text-sm
                                        font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">
                                  
                                    <a href="{{ route('categories.destroy', $categorie->id) }}"
                                        class="text-gray-600 hover:text-gray-900 ml-4"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $categorie->id }}').submit();">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </a>
                                    <form id="delete-form-{{ $categorie->id }}"
                                        action="{{ route('categories.destroy', $categorie->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
 @endforeach

                    </tbody>
                </table>
                
                
            </div>
        </div>
    </div>

    