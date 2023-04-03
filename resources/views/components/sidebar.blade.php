<div class="bg-gray-800 text-gray-100 flex h-screen">
    <div class="w-56 flex-shrink-0">
        <div class="flex items-center justify-center h-14 text-xl font-bold">
            {{ config('app.name', 'Laravel') }}
        </div>
        <li class="relative" x-data="{ dropdownOpen: false }">
            <button @click="dropdownOpen = !dropdownOpen" class="flex items-center justify-between w-full text-gray-100 hover:text-green-800">
              <div class="flex items-center">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 mr-2"><path d="M9 5l7 7-7 7"></path></svg>
                Courses
              </div>
              <svg x-show="!dropdownOpen" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M6 9l6 6 6-6"></path></svg>
              <svg x-show="dropdownOpen" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M18 15l-6-6-6 6"></path></svg>
            </button>
            <ul x-show="dropdownOpen" @click.away="dropdownOpen = false" class="absolute z-10 w-full py-2 mt-2 bg-white rounded-md shadow-md">
              <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">My Courses</a></li>
              <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Enrolled Courses</a></li>
              <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Create a Course</a></li>
            </ul>
          </li>
          <li class="relative" x-data="{ dropdownOpen: false }">
            <button @click="dropdownOpen = !dropdownOpen" class="flex items-center justify-between w-full text-gray-100 hover:text-green-800">
              <div class="flex items-center">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 mr-2"><path d="M9 5l7 7-7 7"></path></svg>
                Courses
              </div>
              <svg x-show="!dropdownOpen" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M6 9l6 6 6-6"></path></svg>
              <svg x-show="dropdownOpen" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M18 15l-6-6-6 6"></path></svg>
            </button>
            <ul x-show="dropdownOpen" @click.away="dropdownOpen = false" class="absolute z-10 w-full py-2 mt-2 bg-white rounded-md shadow-md">
              <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">My Courses</a></li>
              <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Enrolled Courses</a></li>
              <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Create a Course</a></li>
            </ul>
          </li>
    </div>
    <div class="flex-1 flex flex-col h-screen overflow-y-auto">
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </div>
</div>
<button @click="toggleSidebar" class="flex items-center justify-between w-full text-gray-600 hover:text-gray-800">
    <div class="flex items-center">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 mr-2"><path d="M9 5l7 7-7 7"></path></svg>
        Courses
    </div>
    <svg x-show="!sidebarOpen" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M6 9l6 6 6-6"></path></svg>
    <svg x-show="sidebarOpen" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M18 15l-6-6-6 6"></path></svg>
</button>
