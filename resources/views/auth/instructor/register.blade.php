<x-guest-layout>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    <form method="POST" action="{{ route('instructor.register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- first name -->
        <div class="mt-4">
            <x-input-label for="first_name" :value="__('First Name')" />
            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')"
                required autofocus autocomplete="first_name" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>
        <!-- last name -->
        <div class="mt-4">
            <x-input-label for="last_name" :value="__('Last Name')" />
            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')"
                required autofocus autocomplete="last_name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>
        <!--date of birth -->
        <div class="mt-4">
            <x-input-label for="date_of_birth" :value="__('Date of Birth')" />
            <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth"
                :value="old('date_of_birth')" required autofocus autocomplete="date_of_birth" />
            <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
        </div>
        <!--teaching experience-->
        <div class="mt-4">
            <x-input-label for="teaching_experience" :value="__('Teaching Experience')" />
            <x-text-input id="teaching_experience" class="block mt-1 w-full" type="text" name="teaching_experience"
                :value="old('teaching_experience')" required autofocus autocomplete="teaching_experience" />
            <x-input-error :messages="$errors->get('teaching_experience')" class="mt-2" />
        </div>
        <!--field of expertise-->
        <div class="mt-4">
            <x-input-label for="field_of_expertise" :value="__('Field of Expertise')" />
            <x-text-input id="field_of_expertise" class="block mt-1 w-full" type="text" name="field_of_expertise"
                :value="old('field_of_expertise')" required autofocus autocomplete="field_of_expertise" />
            <x-input-error :messages="$errors->get('field_of_expertise')" class="mt-2" />
        </div>
        <!--the image of the instructor it is a file input-->
        <div class="mt-4">
            <x-input-label for="image" :value="__('Image')" />
            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')"
                required autofocus autocomplete="image" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>
       
        <!--the cv of the instructor it is a file input-->
        <div class="mt-4">
            <x-input-label for="cv" :value="__('CV')" />
            <x-text-input id="cv" class="block mt-1 w-full" type="file" name="cv" :value="old('cv')"
                required autofocus autocomplete="cv" />
            <x-input-error :messages="$errors->get('cv')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <!-- address-->
        <div class="mt-4">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
                required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
        <!-- Confirm Password -->
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
            required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            <input type="hidden" name="role" value="instructor">
            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
