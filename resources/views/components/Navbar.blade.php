<nav class="p-5  bg-white shadow md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center ">
        <span class="text-2xl font-[Poppins] cursor-pointer">
            <img class="h-10 inline" src="{{ asset('images/BrainRose.png') }}">
            BrainRose <span
                class="text-cyan-400 hover@author">.com</span>
              </span>

              <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                  <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
              </span>
          </div>

          <ul class="md:flex md:items-center z-50 md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-16 transition-all ease-in duration-500">
              <li class="mx-4 my-6 md:my-0">
                  <form>   
                      <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                      <div class="relative">
                          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                          </div>
                          <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                          <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                      </div>
                  </form>
              </li>
              <li class="mx-4 my-6 md:my-0">
                  <a href="#" class="text-xl hover:text-cyan-500 duration-500">HOME</a>
              </li>
              <li class="mx-4 my-6 md:my-0">
                  <a href="#" class="text-xl hover:text-cyan-500 duration-500">SERVICE</a>
              </li>
              <li class="mx-4 my-6 md:my-0">
                  <a href="#" class="text-xl hover:text-cyan-500 duration-500">CONTACT</a>
              </li>
              <li class="mx-4 my-6 md:my-0">
                  <a href="#" class="text-xl hover:text-cyan-500 duration-500">BLOG'S</a>
              </li>
              @guest
              <li class="mx-4 my-6 md:my-0">
                  @if (Route::has('login'))
                      <a href="{{ route('login') }}"
                          class="inline-block rounded border-2 border-neutral-800 px-6 pt-2 pb-[6px] text-xs font-medium uppercase leading-normal text-neutral-800 transition duration-150 ease-in-out hover:border-neutral-800 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-800 focus:border-neutral-800 focus:text-neutral-800 focus:outline-none focus:ring-0 active:border-neutral-900 active:text-neutral-900 dark:border-neutral-900 dark:text-neutral-900 dark:hover:border-neutral-900 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 dark:hover:text-neutral-900 dark:focus:border-neutral-900 dark:focus:text-neutral-900 dark:active:border-neutral-900 dark:active:text-neutral-900">Log
                          in</a>
                  @endif
              </li>
              <li class="mx-4 my-6 md:my-0">
                  @if (Route::has('register'))
                      <a href="{{ route('register') }}"
                          class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Register</a> @endif
              </li>
              @endguest
              @auth
              <li class="mx-4
                my-6 md:my-0">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-nav-link>
                </li>
                <li class="mx-4 my-6 md:my-0">
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </li>
                 @endauth
                </ul>
</nav>
<script>
    function Menu(e) {
        let list = document.querySelector('ul');
        e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) : (e
            .name = "menu", list.classList.remove('top-[120px]'), list.classList.remove('opacity-100'))
    }
    const navbar = document.querySelector('nav');
    let prevScrollPos = window.pageYOffset;
    window.addEventListener('scroll', function() {
        const currentScrollPos = window.pageYOffset;
        if (prevScrollPos > currentScrollPos) {
            navbar.classList.remove('hidden');
        } else {
            navbar.classList.add('hidden');
        }
        prevScrollPos = currentScrollPos;
    });
</script>
