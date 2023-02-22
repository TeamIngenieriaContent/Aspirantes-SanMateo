<x-app-layout>
    <div class="py-8">
        <h1 class="text-4xl font-bold text-black">{{$program->name}}</h1>
    </div>
    {{-- <div class="pb-5" @click.away="open=false, preview = ''" x-data="{ open: false, name: '', objective: '', online: '', enable: '', community: '', button: '', preview: '' }">
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach ($courses as $course)
                    <div class="swiper-slide" @click="open=true, name='{{ $course->name }}', objective='{{ $course->description }}',
                        button='<a class=\'p-3 m-3 font-bold rounded bg-botton text-comp\' href='{{$program->url_landing}}'>Más Información</a>',
                        preview=@if ($resource->preview_type == 'external video') '<video class=\'w-full h-full\' autoplay controls src=\'{{ $resource->preview }}\'></video>' @elseif ($resource->preview_type == 'local video') '<video class=\'w-full h-full\' autoplay controls src=\'{{ $resource->preview }}\'></video>' @elseif ($resource->preview_type == 'iframe') '<iframe class=\'w-full h-full\' src=\'{{ $resource->preview }}\'></iframe>' @endif">
                        <div class="group cursor-pointer relative h-48" title="{{ $course->name }}">
                            <div class="relative w-full h-40">
                                <img class="group-hover:brightness-50 transition-all w-full h-full"
                                    src="{{ Storage::url($course->url_resource) }}">
                                <div class="absolute grid items-center justify-items-center inset-0">
                                    <span class="fa-stack fa-lg">
                                        <i
                                            class="fa-solid text-transparent transition-all fa-circle fa-stack-2x group-hover:text-black"></i>
                                        <i
                                            class="fa-solid text-transparent transition-all fa-circle-play fa-stack-2x group-hover:text-white"></i>
                                    </span>
                                </div>
                            </div>
                            <h3
                                class="p-1 h-8 transition-all group-hover:h-max text-active-comp bg-active-comp absolute bottom-0 inset-x-0">
                                {{ $course->name }}
                            </h3>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div class="grid grid-cols-3 pt-1" x-transition x-cloak x-show="open">
            <div class="pt-3 bg-active-comp text-active-comp">
                <h3 class="p-3 font-bold text-xl" x-text="name"></h3>
                <div class="p-3">
                    <p class="text-justify" x-text="objective"></p>
                </div>
                <div class="p-3">
                    <div class="space-x-4 flex items-center" x-html="online"></div>
                    <div class="space-x-4 flex items-center" x-html="enable"></div>
                    <div class="space-x-4 flex items-center" x-html="community"></div>
                </div>
                <div class="p-3 mb-2 flex justify-center">
                    <div class="pt-1 space-x-4 flex items-center" x-html="button"></div>
                </div>
            </div>
            <div class="col-span-2" x-html="preview"></div>
        </div>
    </div>
    @push('css')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    @endpush

    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script>
            window.Livewire.on('carousel', () => {
                var swiper = new Swiper(".swiper", {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                    spaceBetween: 10,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    breakpoints: {
                        380: {
                            slidesPerView: 2,
                            slidesPerGroup: 2,
                        },
                        768: {
                            slidesPerView: 3,
                            slidesPerGroup: 3,
                        },
                        1024: {
                            slidesPerView: 4,
                            slidesPerGroup: 4,
                        },
                        1536: {
                            slidesPerView: 5,
                            slidesPerGroup: 5,
                        },
                    },
                });
            })
        </script>
    @endpush --}}
    <livewire:program.show :program="$program"/>
</x-app-layout>
