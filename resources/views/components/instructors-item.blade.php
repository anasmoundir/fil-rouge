<div>


    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                full name
                            </th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                date_of_birth
                            </th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                teaching_experience
                            </th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                registration_date
                            </th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                approved
                            </th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                field of experience
                            </th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                image
                            </th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                cv
                            </th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                adress
                            </th>
                            <th class="px-6 py-3 text-sm text-left text-gray-500 border-b border-gray-200 bg-gray-50"
                                colspan="2">
                                Action
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        @foreach ($instructors as $instructor)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    {{ $instructor->first_name }}  {{ $instructor->first_name }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    {{ $instructor->date_of_birth }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    {{ $instructor->teaching_experience }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    {{ $instructor->created_at }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    {{ $instructor->approved }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    {{ $instructor->field_of_expertise }}
                                </td>
                                <td>
                                    <img src="{{ $instructor->image_url }}" alt="{{ $instructor->name }}"
                                        class="w-12 h-12 rounded-full">
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <a href="{{ asset('cv/' . $instructor->cv) }}"
                                        target="_blank">{{ $instructor->cv }}</a>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    {{ $instructor->address }}
                                </td>

                                <td>
                                <td
                                    class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200">
                                    <div x-data="{ showModal: false }">

                                        <div class="flex justify-end">
                                            <button @click="showModal = true"
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                consult the profile
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
                                                            id="modal-headline">consul the profile</h2>
                                                        <div class="class="bg-blue-200" style="flex-grow: 1;">
                                                            <div class="px-4 py-5 sm:px-6 bg-gray-100">
                                                                <h3 class="text-lg leading-6 font-medium text-gray-800">
                                                                    Instructor Information
                                                                </h3>
                                                                <p class="mt-1 max-w-2xl text-sm text-gray-600">
                                                                    Please review the following information and approve
                                                                    or deny the instructor.
                                                                </p>
                                                            </div>
                                                            <div class="border-t border-gray-200">
                                                                <dl>
                                                                    <div
                                                                        class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                                        <dt class="text-sm font-medium text-gray-500">
                                                                            Name
                                                                        </dt>
                                                                        <dd
                                                                            class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                                            John Doe
                                                                        </dd>
                                                                    </div>
                                                                    <div
                                                                        class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                                        <dt class="text-sm font-medium text-gray-500">
                                                                            Email
                                                                        </dt>
                                                                        <dd
                                                                            class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                                            john.doe@example.com
                                                                        </dd>
                                                                    </div>
                                                                    <div
                                                                        class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                                        <dt class="text-sm font-medium text-gray-500">
                                                                            Phone Number
                                                                        </dt>
                                                                        <dd
                                                                            class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                                            (555)
                                                                            555-5555
                                                                        </dd>
                                                                    </div>
                                                                    <div
                                                                        class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                                        <dt class="text-sm font-medium text-gray-500">
                                                                            Address
                                                                        </dt>
                                                                        <dd
                                                                            class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                                            123 Main St, Anytown USA
                                                                        </dd>
                                                                    </div>
                                                                    <div
                                                                        class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                                        <dt class="text-sm font-medium text-gray-500">
                                                                            CV
                                                                        </dt>
                                                                        <dd
                                                                            class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                                            <a href="#"
                                                                                class="text-blue-500 hover:text-blue-700">View
                                                                                CV</a>
                                                                        </dd>
                                                                    </div>
                                                                    <div
                                                                        class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                                        <dt class="text-sm font-medium text-gray-500">
                                                                            Photo
                                                                        </dt>
                                                                        <dd
                                                                            class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                                            <img src="https://via.placeholder.com/150"
                                                                                alt="Instructor Photo"
                                                                                class="h-24 w-24 rounded-full">
                                                                        </dd>
                                                                    </div>
                                                                </dl>
                                                            </div>
                                                            <div class="py-4">
                                                                <h2 class="text-lg font-medium">CV</h2>
                                                                <div class="mt-4">
                                                                    <div class="flex items-center">
                                                                        <svg class="w-6 h-6 text-gray-500 mr-2"
                                                                            fill="none" stroke="currentColor"
                                                                            viewBox="0 0 24 24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M12 19l-7-7 3-3 4 4 8-8 3 3z" />
                                                                        </svg>
                                                                        <a href="#"
                                                                            class="text-gray-500 hover:underline">cv</a>
                                                                    </div>
                                                                    <p class="mt-2 text-sm text-gray-500">cv</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-end py-4">
                                                              <form method="POST" action="{{ route('approve_instructor', $instructor->id) }}">
                                                                @csrf
                                                                <button type="submit">Click me</button>
                                                            </form>
                                                      
                                                            <button type="button" @click="showModal = false"
                                                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 mr-2 rounded">
                                                            Cancel
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                              

                                </td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
