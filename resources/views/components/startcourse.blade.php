<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Your course {{ $course->title }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-8">
        <div class="flex flex-wrap -mx-4">

            <!-- Left column for lesson playlist -->
            <div class="w-full md:w-1/4 bg-white border-r border-gray-300 px-4 py-6">

                <h2 class="text-lg font-bold mb-4">Playlist</h2>

                <ul class="divide-y divide-gray-300">


                    @foreach ($lessons as $lesson)
                        <li class="py-2">
                            <a href="{{ route('course.proceed', [$course->id, $lesson->id]) }}"
                                class="flex items-center text-gray-700 hover:text-gray-900 {{ $lesson->id == $currentLesson->id ? 'font-bold' : '' }}">
                                <span class="w-4 h-4 rounded-full bg-gray-500 mr-2"></span>
                                <span class="truncate">{{ $lesson->title }}</span>
                            </a>
                        </li>
                    @endforeach

                </ul>

            </div>

            <!-- Center column for video player or file content -->
            <div class="w-full md:w-3/4 px-4 py-6">

                <div class="bg-gray-100 p-4">
                    <video class="w-full" controls>
                        <source src="http://127.0.0.1:8000/storage/lesson1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h1>here </h1>
                    @if ($currentLesson->lessonResources->count() > 0)
                        @foreach ($currentLesson->lessonResources as $lessonResource)
                            @foreach ($lessonResource->media as $media)
                                @if ($media->mime_type == 'video/mp4' || $media->mime_type == 'video/quicktime')
                                    <video class="w-full" controls>
                                        <source src="{{ $media->getUrl() }}" type="{{ $media->mime_type }}">
                                        Your browser does not support the video tag.
                                    </video>
                             
                                @elseif ($media->mime_type == 'application/pdf')
                                    <iframe src="{{ $media->getUrl() }}" frameborder="0"
                                        class="w-full h-screen"></iframe>
                                @endif
                            @endforeach
                        @endforeach
                    @else
                        <p class="text-white">No lesson resources available for this lesson.</p>
                    @endif

                </div>

            </div>

        </div>
    </div>

</x-app-layout>
