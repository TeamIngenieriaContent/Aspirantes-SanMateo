<x-guest-layout>
    <div class="grid grid-cols-1 sm:grid-cols-2">
        <x-jet-authentication-card>
            <x-slot name="logo">
                {{-- <x-jet-authentication-card-logo /> --}}
                <img class="w-1/2 mx-auto" src="{{Storage::url('img/logo_san-mateo.png')}}">
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-jet-button class="ml-4">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
        <div class="hidden sm:block">
            <div class="swiper w-full h-full">
                <div class="swiper-wrapper w-full h-full">
                    <div class="swiper-slide w-full h-full">
                        <img src="{{Storage::url('img/login-slide-1.jpg')}}" class="w-full h-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{Storage::url('img/login-slide-2.jpg')}}" class="w-full h-full">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{Storage::url('img/login-slide-3.jpg')}}" class="w-full h-full">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('css')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    @endpush
    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script>
            const swiper = new Swiper('.swiper', {
                loop: true,
                allowTouchMove: false,
                autoplay: {
                    delay: 5000,
                },
            });
        </script>
    @endpush
    </div>
</x-guest-layout>
