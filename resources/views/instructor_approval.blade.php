<x-app-layout>
    <x-navbar></x-navbar>
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex  flex-col md:flex-row">

        <aside :class="{ 'hidden': !sidebarOpen, 'md:block': sidebarOpen }"
            class="w-1/6 min-h-screen bg-white border-r-2 border-gray-200">
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
   

        <!-- Instructors section -->
        <section class="w-full">
            <div>
                <h2 class="text-lg font-semibold text-gray-900">Instructors</h2>

                <div>
                    <x-instructors-item :instructors="$instructors" class="w-full"></x-instructors-item>
                </div>
            </div>
        </section>
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
