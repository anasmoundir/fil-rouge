<x-app-layout>
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
    <x-navbar></x-navbar>
    <div class="flex flex-col md:flex-row">

        <aside class="w-1/6  min-h-screen">
            <nav class="flex flex-col h-full py-6 px-2 space-y-4 text-gray-700 bg-white border-r-2 border-gray-200">
                <!-- Logo -->
                <a href="" class="flex items-center justify-center mb-6">
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
                        <a id="instructorLink" href="#"
                            class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100">
                            <x-heroicon-o-user-group class="w-5 h-5" />
                            <span>approve instructor</span>
                            <span
                                class="inline-block px-2 py-1 ml-auto text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">10</span>
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


                    </li>
                </ul>
        </aside>


        <div class="w-5/6 p-4">
            <div id="categories-container" class="container">
                <x-categorieitem :categories="$categories" />
            </div>

            <div id="courses-container" class="container hidden">
                <x-courseitem :categories="$categories" :courses="$courses" :instructors="$instructors" />
            </div>
            <div id="istructor-container" class="container hidden">
                <x-instructors-item :instructors="$instructors" class="w-full"></x-instructors-item>
            </div>
        </div>

    </div>


    <div class="md:w-3/4">
    </div>
</x-app-layout>
<script>
    const categoriesLink = document.getElementById('categoriesLink');
    const coursesLink = document.getElementById('coursesLink');
    const instructorLink = document.getElementById('instructorLink');
    const categoriesContainer = document.getElementById('categories-container');
    const lessonsContainer = document.getElementById('lessons-container');
    const coursesContainer = document.getElementById('courses-container');
    const instructorContainer = document.getElementById('istructor-container');




    coursesLink.addEventListener('click', () => {

        categoriesContainer.classList.add('hidden')
        coursesContainer.classList.remove('hidden')
        instructorContainer.classList.add('hidden')
    });

    categoriesLink.addEventListener('click', () => {

        categoriesContainer.classList.remove('hidden')
        coursesContainer.classList.add('hidden')
        instructorContainer.classList.add('hidden')
    });
    instructorLink.addEventListener('click', () => {

        categoriesContainer.classList.add('hidden')
        coursesContainer.classList.add('hidden')
        instructorContainer.classList.remove('hidden')
    });
    i
</script>
