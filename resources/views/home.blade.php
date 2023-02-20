<x-app-layout>
    <div class="py-5">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" x-data="{ open: false }">
{{--                 <button x-on:click="open = true" class="w-full aspect-video">
                    <img src="{{Storage::url('img/Mateverso.jpg')}}" class="w-full h-full">
                </button> --}}
                <iframe loading="lazy" class="w-full aspect-video" src="https://moodlevirtual.sanmateovirtual.edu.co/ModulosVirtuales/Prueba/Mateverso2/index.html"></iframe>
            </div>
        </div>
    </div>
</x-app-layout>
