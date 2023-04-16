<x-app-layout>
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-4 py-5 sm:px-6 bg-gray-100">
              <h3 class="text-lg leading-6 font-medium text-gray-800">
                Instructor Information
              </h3>
              <p class="mt-1 max-w-2xl text-sm text-gray-600">
                Please review the following information and approve or deny the instructor.
              </p>
            </div>
            <div class="border-t border-gray-200">
              <dl>
                <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                  <dt class="text-sm font-medium text-gray-500">
                    Name
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    John Doe
                  </dd>
                </div>
                <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                  <dt class="text-sm font-medium text-gray-500">
                    Email
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    john.doe@example.com
                  </dd>
                </div>
                <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                  <dt class="text-sm font-medium text-gray-500">
                    Phone Number
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    (555) 555-5555
                  </dd>
                </div>
                <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                  <dt class="text-sm font-medium text-gray-500">
                    Address
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    123 Main St, Anytown USA
                  </dd>
                </div>
                <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                  <dt class="text-sm font-medium text-gray-500">
                    CV
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <a href="#" class="text-blue-500 hover:text-blue-700">View CV</a>
                  </dd>
                </div>
                <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                  <dt class="text-sm font-medium text-gray-500">
                    Photo
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <img src="https://via.placeholder.com/150" alt="Instructor Photo" class="h-24 w-24 rounded-full">
                  </dd>
                </div>
              </dl>
            </div>
            <div class="py-4">
                  <h2 class="text-lg font-medium">CV</h2>
                  <div class="mt-4">
                      <div class="flex items-center">
                          <svg class="w-6 h-6 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l-7-7 3-3 4 4 8-8 3 3z"/>
                          </svg>
                          <a href="#" class="text-gray-500 hover:underline">{{ $instructor->cv_title }}</a>
                      </div>
                      <p class="mt-2 text-sm text-gray-500">{{ $instructor->cv_description }}</p>
                  </div>
              </div>
              <div class="flex justify-end py-4">
                  <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mr-2">
                    Approve
                  </button>
                  <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                    Decline
                  </button>
                </div>
</x-app-layout>
