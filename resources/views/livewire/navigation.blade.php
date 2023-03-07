<nav class="bg-gray-50" x-data="{ open: false }">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">

        <!-- Mobile menu button-->
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <button x-on:click="open = true" type="button" class="inline-flex items-center justify-center rounded-md p-2 text-neutral-400 hover:bg-red-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--
              Icon when menu is closed.

              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!--
              Icon when menu is open.

              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
            {{-- logotipo --}}
            <div class="flex flex-shrink-0 items-center">
                <a href="{{ route('home') }}">
                <img class="block h-8 w-auto lg:hidden" src="{{Storage::url('img/logo_san-mateo.png')}}" >
                <img class="hidden h-8 w-auto lg:block" src="{{Storage::url('img/logo_san-mateo.png')}}" >
            </div>
            {{-- Menu lg --}}
            <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')" class="text-neutral-900 hover:bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                    {{ __('Home') }}
                </x-jet-nav-link>

                <x-jet-nav-link href="{{ route('program.index') }}" :active="request()->routeIs('program*')" class="text-neutral-900 hover:bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                    {{ __('Academic programs') }}
                </x-jet-nav-link>

                <x-jet-nav-link href="{{ route('user_experience') }}" :active="request()->routeIs('user_experience')" class="text-neutral-900 hover:bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                    {{ __('User Experience') }}
                </x-jet-nav-link>

                </div>
            </div>
        </div>

        @auth
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            {{-- Boton notificacion --}}
            {{-- <button type="button" class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <span class="sr-only">View notifications</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
            </svg>
          </button> --}}

          <!-- Profile dropdown -->
          <div class="relative ml-3" x-data="{ open: false}">
            <div>
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <button x-on:click="open = true" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </button>
                @else
                    <span class="inline-flex rounded-md">
                        <button x-on:click="open = true" type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                            {{ Auth::user()->name }}

                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </span>
                @endif
            </div>

            <!--
              Dropdown menu, show/hide based on menu state.

              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
            <div x-show="open" x-on:click.away="open = false" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <!-- Active: "bg-gray-100", Not Active: "" -->
                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                    {{ __('Profile') }}
                </x-jet-dropdown-link>
                <x-jet-dropdown-link href="{{ route('admin.home') }}">
                    {{ __('Dashboard') }}
                </x-jet-dropdown-link>
                <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <x-jet-dropdown-link href="{{ route('logout') }}"
                         @click.prevent="$root.submit();">
                    {{ __('Log Out') }}
                </x-jet-dropdown-link>
                </form>
            </div>
          </div>
        </div>
        @endauth

      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open = false">
      <div class="space-y-1 px-2 pt-2 pb-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="{{ route('home') }}" :active="request()->routeIs('home')" class="bg-red-800 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">
            {{ __('Home') }}
        </a>

        <a href="{{ route('program.index') }}" :active="request()->routeIs('program*')" class="text-neutral-900 hover:bg-red-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
            {{ __('Academic programs') }}
        </a>

        <a href="{{ route('user_experience') }}" :active="request()->routeIs('user_experience')" class="text-neutral-900 hover:bg-red-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
            {{ __('User Experience') }}
        </a>
      </div>
    </div>
  </nav>
