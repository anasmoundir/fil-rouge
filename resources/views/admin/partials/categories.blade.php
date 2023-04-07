//extend the layout from the admin.blade.php
@extends('layouts.admin')

<div class=" ">
    <div class="mb-4">
        <h1 class="font-serif text-3xl font-bold underline decoration-gray-400"> categories Index</h1>
        <div class="flex justify-end">
            <button class="px-4 py-2 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600" id="modalBtn">Create a
                ctegorie</button>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                ID</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Name</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Image</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Created_At</th>

                            </th>
                            <th class="px-6 py-3 text-sm text-left text-gray-500 border-b border-gray-200 bg-gray-50"
                                colspan="3">
                                Action</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        @foreach ($lessons as $lesson)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        {{ $lessons->id }}
                                    </div>

                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">
                                        {{ $lessons->name }}
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <p>{{ $lessons->image }}</p>
                                </td>

                                <td
                                    class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                    <span>12/12/22</span>
                                </td>

                                <td
                                    class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>
                                <td
                                    class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                                    <a href="#" class="text-gray-600 hover:text-gray-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </a>
                                </td>

                                </td>
                                <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-6 h-6 text-red-600 hover:text-red-800" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg></a>
                                </td>
                            </tr>
                    </tbody>
                </table>
                @endforeach
            </div>
        </div>
    </div>
</div>


<div id="myModal" class="modal">
    <div class="modal-content">
        <!-- Modal content goes here -->
        <div>
            <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
                <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
                    <div class="mb-4">
                        <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
                            Add a new categorie
                        </h1>
                    </div>

                    <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div>
                                <label class="block text-sm font-bold text-gray-700" for="name">
                                    Name
                                </label>
                                <input
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    type="text" name="name" placeholder="Category Name" />
                            </div>

                            <div class="mt-4">
                                <label class="block text-sm font-bold text-gray-700" for="image">
                                    Image
                                </label>
                                <input
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    type="file" name="image" accept="image/*" />
                            </div>

                            <div class="flex items-center justify-start mt-4 gap-x-2">
                                <button type="submit"
                                    class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                                    Save
                                </button>
                                <button type="button"
                                    class="px-6 py-2 text-sm font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300"
                                    id="closeBtn">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .modal {
        display: none;
        /* Set the modal to take up the entire screen */
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        /* Set a semi-transparent black background */
        background-color: rgba(0, 0, 0, 0.7);
        /* Center the modal vertically and horizontally */
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .modal-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: rgb(203, 203, 203);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        margin: auto;
        height: 400px;
        max-height: 80vh;
        overflow: auto;
    }

    .modal-close {
        display: none;
    }
</style>

<script>
    (function() {
        var modal = document.getElementById("myModal");
        var triggerBtn = document.getElementById("modalBtn");
        var closeBtn = document.getElementById("closeBtn");

        triggerBtn.addEventListener("click", function() {
            modal.style.display = "flex";
        });

        closeBtn.addEventListener("click", function() {
            modal.style.display = "none";
        });

        window.addEventListener("click", function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        });
    })();
</script>
