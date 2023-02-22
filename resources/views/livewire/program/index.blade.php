<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 p-4">
    @foreach ($programs as $program)
        <a href="{{ route('program.show', $program) }}">
            <div class="group cursor-pointer relative h-50" title="{{ $program->name }}">
                <div class="relative w-full h-48">
                    <img class="group-hover:brightness-50 transition-all w-full h-full" src="{{ Storage::url($program->image->url)}}">
                    <div class="absolute grid items-center justify-items-center inset-0">
                        <span class="fa-stack fa-lg">
                            <i
                                class="fa-solid text-transparent transition-all fa-circle fa-stack-2x group-hover:text-black"></i>
                            <i
                                class="fa-solid text-transparent transition-all fa-circle-play fa-stack-2x group-hover:text-white"></i>
                        </span>
                        <p class="text-transparent transition-all group-hover:text-white" >Más información</p>
                    </div>
                </div>
                <h3 class="bg-active-comp font-bold text-active-comp p-3 bg-gray-600 text-white">{{ $program->name }}</h3>
            </div>
        </a>
    @endforeach
</div>
