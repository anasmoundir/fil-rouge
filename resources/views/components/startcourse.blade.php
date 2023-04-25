<div class="flex flex-col md:flex-row">
    <!-- Left column for playlist -->
    <div class="w-full md:w-1/4 bg-white border-r border-gray-300 px-4 py-6">
        <h2 class="text-lg font-bold mb-4">Playlist</h2>
        <ul class="divide-y divide-gray-300">
            @foreach ($lessonResources as $lessonResource)
                <li class="py-2">
                    @if ($lessonResource->type == 'pdf')
                        <a href="{{ $lessonResource->getFirstMediaUrl('lesson_resources') }}"
                            class="flex items-center text-gray-700 hover:text-gray-900" download>
                            <span class="w-4 h-4 rounded-full bg-gray-500 mr-2"></span>
                            <span class="truncate">{{ $lessonResource->name }}</span>
                        </a>
                    @elseif ($lessonResource->type == 'mp4')
                        <a href="#" class="flex items-center text-gray-700 hover:text-gray-900">
                            <span class="w-4 h-4 rounded-full bg-gray-500 mr-2"></span>
                            <span class="truncate">{{ $lessonResource->name }}</span>
                        </a>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
    <!-- Center column for video player or file content -->
    <div class="w-full md:w-3/4 px-4 py-6">
        <h2 class="text-lg font-bold mb-4">{{ $course->title }}</h2>
        <div class="bg-gray-900 p-4">
            <video class="w-full" controls>
                <source src="{{ $lesson->video_url }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>
