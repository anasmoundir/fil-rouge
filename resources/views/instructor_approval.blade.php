<x-app-layout>
            <x-navbar></x-navbar>
            <div class="flex flex-col md:flex-row">
        
                <aside class="w-1/6  min-h-screen">
                    <nav class="flex flex-col h-full py-6 px-2 space-y-4 text-gray-700 bg-white border-r-2 border-gray-200">
                        <!-- Logo -->
                        <a href="#" class="flex items-center justify-center mb-6">
                            <img class="w-8 h-8 mr-2" src="/path/to/logo.png" alt="Logo">
                            <span class="text-lg font-medium">LMS Dashboard</span>
                        </a>
                        <!-- Links -->
                        <ul class="flex flex-col flex-1 space-y-2">
                            <li class="relative">
                                <a href="#" class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100">
                                    <x-heroicon-o-home class="w-5 h-5" />
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="relative">
                                <a id="categoriesLink" href="#"
                                    class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100">
                                    <x-heroicon-o-book-open class="w-5 h-5" />
                                    <span>Categories</span>
                                </a>
                            </li>
                            <li class="relative">
                                <a id="usersLink" href="#"
                                    class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100">
                                    <x-heroicon-o-user-group class="w-5 h-5" />
                                    <span>Users</span>
                                    <span
                                        class="inline-block px-2 py-1 ml-auto text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">10</span>
                                </a>
                            </li>
                            <li class="relative">
                                <a id="lessonsLink" href="#"
                                    class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100">
                                    <x-heroicon-o-document class="w-5 h-5" />
                                    <span>Lessons</span>
                                </a>
                            </li>
                            <li class="relative">
                                <a href="#" class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100">
                                    <x-heroicon-o-cog class="w-5 h-5" />
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li class="relative">
                                <a id="coursesLink" href="#"
                                    class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100">
                                    <x-heroicon-o-book-open class="w-5 h-5" />
                                    <span>Courses</span>
                                    <span
                                        class="inline-block px-2 py-1 ml-auto text-xs font-semibold leading-5 text-gray-600 rounded-full">+</span>
                                </a>
                                <ul id="coursesDropdown"
                                    class="absolute top-full left-0 mt-1 ml-6 w-1/2 bg-white rounded-lg shadow-md">
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Mathematics</a></li>
                                    <li><a href="#" class="block py-1 px-2 hover:bg-gray-100">Science</a></li>
                                    <li><a href="#" class="block py-1 px-2 hover:bg-gray-100">History</a></li>
                                </ul>
                            </li>
                        </ul>
                </aside>
        
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
                          <a href="#" class="text-gray-500 hover:underline">cv</a>
                      </div>
                      <p class="mt-2 text-sm text-gray-500">cv</p>
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


<div class="md:w-3/4">
</div>
</x-app-layout>
<script>
const categoriesLink = document.getElementById('categoriesLink');
const lessonsLink = document.getElementById('lessonsLink');
const coursesLink = document.getElementById('courses-container');

const categoriesContainer = document.getElementById('categories-container');
const lessonsContainer = document.getElementById('lessons-container');
const coursesContainer = document.getElementById('courses-container');

categoriesLink.addEventListener('click', () => {
    categoriesContainer.style.display = 'block';
    lessonsContainer.style.display = 'none';
    coursesContainer.style.display = 'none';
});

lessonsLink.addEventListener('click', () => {
    categoriesContainer.style.display = 'none';
    lessonsContainer.style.display = 'block';
    coursesContainer.style.display = 'none';
});

coursesLink.addEventListener('click', () => {
    categoriesContainer.style.display = 'none';
    lessonsContainer.style.display = 'none';
    coursesContainer.style.display = 'block';
});
</script>
