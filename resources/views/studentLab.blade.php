<x-app-layout>
    <h1>Courses for {{ $category->name }}</h1>

@foreach($courses as $course)
    <div class="bg-white shadow rounded-lg p-4">
        <h3 class="text-lg font-bold mb-2">{{ $course->name }}</h3>
        <p class="text-gray-600">{{ $course->description }}</p>
        <a href="#" class="text-blue-500 font-semibold hover:text-blue-700 mt-2">Enroll Now</a>
    </div>
@endforeach

{{ $courses->links() }}


<div x-data="{ message: 'Hello from Vue!' }">
      <video-upload :message="message"></video-upload>
  </div>

  <div class="bg-gray-100 min-h-screen flex flex-col">
      <!-- Header -->
      <header class="bg-white shadow">
          <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
              <h1 class="text-xl font-bold text-gray-900">My Video Playlist</h1>
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                  Add Vidadeo
              </button>
          </div>
      </header>
      <!-- Main Content -->
      <main class="flex-grow container mx-auto mt-6">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
              <!-- Video Card -->
              <div class="bg-white rounded-lg shadow-md overflow-hidden">
                  <a href="#" class="block">
                      <img src="https://i.ytimg.com/vi/dQw4w9WgXcQ/maxresdefault.jpg" alt="Video Thumbnail"
                          class="object-cover w-full h-48">
                      <div class="p-4">
                          <h2 class="text-lg font-semibold text-gray-900">Never Gonna Give You Up</h2>
                          <p class="text-sm text-gray-700 mt-2">Rick Astley</p>
                      </div>
                  </a>
              </div>
              <!-- Video Card -->
              <div class="bg-white rounded-lg shadow-md overflow-hidden">
                  <a href="#" class="block">
                      <img src="https://i.ytimg.com/vi/XGm5F5C8UyM/maxresdefault.jpg" alt="Video Thumbnail"
                          class="object-cover w-full h-48">
                      <div class="p-4">
                          <h2 class="text-lg font-semibold text-gray-900">Smooth Criminal</h2>
                          <p class="text-sm text-gray-700 mt-2">Michael Jackson</p>
                      </div>
                  </a>
              </div>
              <!-- Video Card -->
              <div class="bg-white rounded-lg shadow-md overflow-hidden">
                  <a href="#" class="block">
                      <img src="https://i.ytimg.com/vi/dQw4w9WgXcQ/maxresdefault.jpg" alt="Video Thumbnail"
                          class="object-cover w-full h-48">
                      <div class="p-4">
                          <h2 class="text-lg font-semibold text-gray-900">Never Gonna Give You Up</h2>
                          <p class="text-sm text-gray-700 mt-2">Rick Astley</p>
                      </div>
                  </a>
              </div>
              <!-- Video Card -->
              <div class="bg-white rounded-lg shadow-md overflow-hidden">
                  <a href="#" class="block">
                      <img src="https://i.ytimg.com/vi/XGm5F5C8UyM/maxresdefault.jpg" alt="Video Thumbnail"
                          class="object-cover w-full h-48">
                      <div class="p-4">
                          <h2 class="text-lg font-semibold text-gray-900">Smooth Criminal</h2>
                          <p class="text-sm text-gray-700 mt-2">Michael Jackson</p>
                      </div>
                  </a>
              </div>
          </div>
      </main>
      <footer class="bg-gray-900">
          <div class="container mx-auto py-8 px-4">
              <div class="flex flex-wrap -mx-4">
                  <div class="w-full lg:w-1/3 px-4 mb-4 lg:mb-0">
                      <h2 class="text-lg font-semibold text-gray-100 mb-4">About Us</h2>
                      <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod
                          sapien auctor, consectetur justo sit amet, eleifend orci.</p>
                  </div>
                  <div class="w-full lg:w-1/3 px-4 mb-4 lg:mb-0">
                      <h2 class="text-lg font-semibold text-gray-100 mb-4">Contact Us</h2>
                      <ul class="list-none">
                          <li class="mb-2"><i class="fas fa-map-marker-alt fa-fw text-gray-400 mr-2"></i>123 Main
                              St, New York, NY 10001</li>
                          <li class="mb-2"><i class="fas fa-phone fa-fw text-gray-400 mr-2"></i>(123) 456-7890
                          </li>
                          <li><i class="fas fa-envelope fa-fw text-gray-400 mr-2"></i>info@example.com</li>
                      </ul>
                  </div>
                  <div class="w-full lg:w-1/3 px-4 mb-4 lg:mb-0">
                      <h2 class="text-lg font-semibold text-gray-100 mb-4">Connect with Us</h2>
                      <ul class="list-none flex justify-center">
                          <li class="mx-4"><a href="#" class="text-gray-400 hover:text-gray-100"><i
                                      class="fab fa-facebook-f fa-lg"></i></a></li>
                          <li class="mx-4"><a href="#" class="text-gray-400 hover:text-gray-100"><i
                                      class="fab fa-twitter fa-lg"></i></a></li>
                          <li class="mx-4"><a href="#" class="text-gray-400 hover:text-gray-100"><i
                                      class="fab fa-instagram fa-lg"></i></a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </footer>

      <!-- Student side -->
      <div class="container mx-auto px-4 py-8">
          <div class="flex flex-wrap -mx-4">
              <div class="w-full lg:w-2/3 px-4">
                  <h1 class="text-3xl font-bold mb-4">Video Playlist</h1>
                  <div class="mb-8">
                      <iframe src="https://www.youtube.com/embed/videoseries?list=YOUR_PLAYLIST_ID" frameborder="0"
                          allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                  <div class="mb-8">
                      <h2 class="text-xl font-bold mb-4">Course Overview</h2>
                      <p class="text-gray-700 leading-7">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae libero sit amet enim
                          volutpat
                          vulputate. Fusce blandit, neque id luctus fringilla, nisi libero sollicitudin risus, ac
                          bibendum quam
                          ipsum quis eros. Vestibulum in consectetur tortor. Vestibulum ante ipsum primis in faucibus
                          orci luctus
                          et ultrices posuere cubilia curae; In faucibus euismod bibendum.
                      </p>
                  </div>
              </div>
              <div class="w-full lg:w-1/3 px-4">
                  <div class="mb-8">
                      <h2 class="text-xl font-bold mb-4">Course Materials</h2>
                      <ul class="list-disc pl-6 text-gray-700 leading-7">
                          <li><a href="#">Course Syllabus</a></li>
                          <li><a href="#">Textbook</a></li>
                          <li><a href="#">Homework Assignments</a></li>
                          <li><a href="#">Exam Study Guide</a></li>
                      </ul>
                  </div>
                  <div class="mb-8">
                      <h2 class="text-xl font-bold mb-4">Instructor</h2>
                      <div class="flex items-center">
                          <img class="w-12 h-12 rounded-full mr-4" src="https://via.placeholder.com/150"
                              alt="Instructor Avatar">
                          <div>
                              <p class="font-bold">John Doe</p>
                              <p class="text-gray-700 leading-7">Lorem ipsum dolor sit amet, consectetur adipiscing
                                  elit. Maecenas vitae libero
                                  sit amet enim volutpat vulputate.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Sidebar -->
      <aside class="bg-gray-900 w-1/5 h-screen text-white">
          <!-- Sidebar header -->
          <div class="px-6 py-4">
              <h2 class="text-xl font-bold">Video Playlists</h2>
              <p class="mt-1 text-gray-500">Select a playlist to view videos</p>
          </div>

          <!-- Sidebar content -->
          <nav class="px-2 py-4">
              <ul>
                  <li class="mb-3">
                      <a href="#" class="flex items-center text-white hover:text-gray-300">
                          <span class="mr-2"><i class="fas fa-video"></i></span>
                          <span>Playlist 1</span>
                      </a>
                  </li>
                  <li class="mb-3">
                      <a href="#" class="flex items-center text-white hover:text-gray-300">
                          <span class="mr-2"><i class="fas fa-video"></i></span>
                          <span>Playlist 2</span>
                      </a>
                  </li>
                  <li class="mb-3">
                      <a href="#" class="flex items-center text-white hover:text-gray-300">
                          <span class="mr-2"><i class="fas fa-video"></i></span>
                          <span>Playlist 3</span>
                      </a>
                  </li>
</x-app-layout>

<script>
  // Get the container for the lesson resources file inputs
  var lessonResourcesContainer = document.getElementById('lesson-resources-container');

  // Get the button to add more file inputs
  var addFileInputButton = document.getElementById('add-file-input');

  // Add an event listener to the button to add more file inputs
  addFileInputButton.addEventListener('click', function() {
      // Create a new file input element
      var fileInput = document.createElement('input');
      fileInput.type = 'file';
      fileInput.name = 'lesson_resources[]';
      fileInput.classList.add('shadow', 'appearance-none', 'border', 'rounded', 'w-full', 'py-2', 'px-3',
          'text-gray-700', 'leading-tight', 'focus:outline-none', 'focus:shadow-outline');

      // Create a new remove button element
      var removeButton = document.createElement('button');
      removeButton.type = 'button';
      removeButton.textContent = 'Remove';
      removeButton.classList.add('remove-file-input');

      // Create a new div to hold the file input and remove button
      var fileInputWrapper = document.createElement('div');
      fileInputWrapper.classList.add('file-input');
      fileInputWrapper.appendChild(fileInput);
      fileInputWrapper.appendChild(removeButton);

      // Append the new file input and remove button to the container
      lessonResourcesContainer.appendChild(fileInputWrapper);
  });

  // Add an event listener to the container for the lesson resources file inputs
  lessonResourcesContainer.addEventListener('click', function(event) {
      // Check if the clicked element is a remove button
      if (event.target && event.target.classList.contains('remove-file-input')) {
          // Remove the corresponding file input and remove button
          var fileInputWrapper = event.target.closest('.file-input');
          lessonResourcesContainer.removeChild(fileInputWrapper);
      }
  });
  </script>