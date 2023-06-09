<x-guest-layout>
      <p class="text-center text-3xl font-bold text-gray-700">Admin Login</p>
      <p class="text-center text-xl font-bold text-gray-700">Welcome back! Please login to your account.</p>
      <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
          <div class="sm:mx-auto sm:w-full sm:max-w-md">
              <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900">
                  {{ __('Log in to your account') }}
              </h2>
              <p class="mt-2 text-sm text-center text-gray-600">
                  Or
                  <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                      {{ __('create an account') }}
                  </a>
              </p>
          </div>
  
          <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
              <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                  <form method="POST" action="{{ route('login') }}">
                      @csrf
  
                      <div>
                          <x-input-label for="email" :value="__('Email')" />
                          <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                          <x-input-error :messages="$errors->get('email')" class="mt-2" />
                      </div>
  
                      <div class="mt-6">
                          <x-input-label for="password" :value="__('Password')" />
  
                          <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />
  
                          <x-input-error :messages="$errors->get('password')" class="mt-2" />
                      </div>
  
                      <div class="flex items-center justify-between mt-6">
                          <div class="flex items-center">
                              <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 shadow-sm focus:ring-indigo-500" name="remember">
                              <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                                  {{ __('Remember me') }}
                              </label>
                          </div>
  
                          @if (Route::has('password.request'))
                              <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:text-indigo-500">
                                  {{ __('Forgot your password?') }}
                              </a>
                          @endif
                      </div>
  
                      <div class="mt-6">
                          <x-primary-button>
                              {{ __('Log in') }}
                          </x-primary-button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
      <div class="flex justify-center mt-6">
          <a href="{{ route('instructor.register') }}" class="text-sm text-gray-600 hover:text-gray-500">
            {{ __('Not a instructor?') }}
              {{ __('Not a staff?') }}
          </a>
  </x-guest-layout>
  