<x-guest-layout>
    <div class="grid grid-cols-1 sm:grid-cols-2">
        <x-jet-authentication-card>
            <x-slot name="logo">
                {{-- <x-jet-authentication-card-logo /> --}}
                <img class="w-1/2 mx-auto" src="{{Storage::url('img/logo_san-mateo.png')}}">
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="phone" value="{{ __('Phone') }}" />
                    <x-jet-input id="phone" class="block mt-1 w-full" type="number" name="phone" required autocomplete="phone" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="city" value="{{ __('City') }}" />
                    <livewire:city-form/>
                    {{-- <x-jet-input id="city" class="block mt-1 w-full" type="number" name="city" required autocomplete="city" /> --}}
                </div>

                <div class="mt-4">
                    <x-jet-label for="contact_option" value="{{ __('Contact option') }}" />
                    <livewire:contact-form/>
                    {{-- <x-jet-input id="contact_option" class="block mt-1 w-full" type="number" name="contact_option" required autocomplete="contact_option" /> --}}
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" required />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-jet-button class="ml-4">
                        {{ __('Register') }}
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
</x-guest-layout>
