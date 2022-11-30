<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles de las Fichas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                ALUMNO: {{$persona->nombres}} {{$persona->apellidoPa}} {{$persona->apellidoMa}}
                @livewire('ficha-socioeconomica.mostrar-detalle-fichas', [$persona])
                
            </div>
        </div>
    </div>
</x-app-layout>
