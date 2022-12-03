<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles de las Fichas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="py-2 flex justify-between flex-col md:flex-row ">
                    <h3 class="text-xl flex gap-1 font-bold text-gray-700">
            
                        <i class="fa-solid fa-user"></i>
                        ALUMNO: {{$persona->nombres}} {{$persona->apellidoPa}} {{$persona->apellidoMa}}
                    </h3>
                    <!--<a href="#"
                            class="mt-2 md:mt-0 flex items-center border rounded-lg  bg-blue-700 hover:bg-blue-800 transition-colors text-white text-sm  p-2 cursor-pointer  w-full md:w-auto first-letter:uppercase ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg> Nuevo Material</a>-->
            
                </div>

                @livewire('ficha-socioeconomica.mostrar-detalle-fichas', [$persona])
                
            </div>
        </div>
    </div>
</x-app-layout>
