@extends('layouts.app')

@section('content')
  <div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" autocomplete="title" value="{{ old('title') }}"
                  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('title')
                  <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" autocomplete="name" value="{{ old('name') }}"
                  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('name')
                  <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>

              <div class="col-span-6">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="5"
                  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ old('description') }}</textarea>
                @error('description')
                  <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="image" id="image" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('image')
                  <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="categorie_id" class="block text-sm font-medium text-gray-700">Category</label>
                <select id="categorie_id" name="categorie_id"
                  class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option value="">Select a category</option>
                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}" @if (old('categorie_id') == $category->id) selected @endif>{{ $category->name }}</option>
                @endforeach
              </select>
              @error('categorie_id')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>

            <div class="col-span-6">
              <label for="is_free" class="block text-sm font-medium text-gray-700">Is Free?</label>
              <input type="checkbox" name="is_free" id="is_free" value="1"
                class="mt-1 focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
              @error('is_free')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="level" class="block text-sm font-medium text-gray-700">Level</label>
              <select id="level" name="level"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="">Select a level</option>
                <option value="beginner" @if (old('level') == 'beginner') selected @endif>Beginner</option>
                <option value="intermediate" @if (old('level') == 'intermediate') selected @endif>Intermediate</option>
                <option value="advanced" @if (old('level') == 'advanced') selected @endif>Advanced</option>
              </select>
              @error('level')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="language" class="block text-sm font-medium text-gray-700">Language</label>
              <input type="text" name="language" id="language" autocomplete="language" value="{{ old('language') }}"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              @error('language')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="instructor_id" class="block text-sm font-medium text-gray-700">Instructor</label>
              <select id="instructor_id" name="instructor_id"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="">Select an instructor</option>
                @foreach ($instructors as $instructor)
                  <option value="{{ $instructor->id }}" @if (old('instructor_id') == $instructor->id) selected @endif>{{ $instructor->name }}</option>
                @endforeach
              </select>
             