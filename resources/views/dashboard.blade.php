<x-app-layout>
    <x-navbar></x-navbar>
    <div class="flex flex-col md:flex-row">
        <x-sidebar-link class="w-full md:w-1/4 md:flex-row">
            <x-categorieitem :categories="$categories" />
            
        </x-sidebar-link>
        <div class="md:w-3/4">
            <!-- Main content goes here -->
        </div>
    </div>
</x-app-layout>
