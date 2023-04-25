<x-app-layout>
    @if ($display == 'mycourses')
        <x-my-enrolled-courses :courses="$courses" :display="$display"> </x-my-enrolled-courses>
    @elseif ($display == 'courses')
        <x-courses-by-categorie :courses="$courses"> </x-courses-by-categorie>
    @endif

</x-app-layout>
