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
          <x-heroicon-o-home class="w-5 h-5"/>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="relative">
        <a href="#" class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100">
          <x-heroicon-o-book-open class="w-5 h-5"/>
          <span>Categories</span>
        </a>
      </li>
      <li class="relative">
        <a href="#" class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100">
          <x-heroicon-o-user-group class="w-5 h-5"/>
          <span>Users</span>
          <span class="inline-block px-2 py-1 ml-auto text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">10</span>
        </a>
      </li>
      <li class="relative">
        <a href="#" class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100">
          <x-heroicon-o-document class="w-5 h-5"/>
          <span>Assignments</span>
        </a>
      </li>
      <li class="relative">
        <a href="#" class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100">
          <x-heroicon-o-cog class="w-5 h-5"/>
          <span>Settings</span>
        </a>
      </li>
      <li class="relative">
        <a href="#" class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100">
          <x-heroicon-o-book-open class="w-5 h-5"/>
          <span>Courses</span>
          <span class="inline-block px-2 py-1 ml-auto text-xs font-semibold leading-5 text-gray-600 rounded-full">+</span>
        </a>
        <ul class="absolute top-full left-0 mt-1 ml-6 w-1/2 bg-white rounded-lg shadow-md">
          <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Mathematics</a></li>
                <li><a href="#" class="block py-1 px-2 hover:bg-gray-100">Science</a></li>
                <li><a href="#" class="block py-1 px-2 hover:bg-gray-100">History</a></li>
            </ul>
        </li>
    </ul>
  </aside>
  <div class="w-5/6 p-4">
    <!-- Slot content goes here -->
    {{ $slot }}
  </div>
</div>
