<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fichas Socioeconómica') }}
        </h2>
    </x-slot>

    <div class="py-5">

        <div class="p-5">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 ">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{-- mensaje si se creo por primera vez --}}
                        <div class="py-2 flex justify-between flex-col md:flex-row ">
                            <h3 class="text-xl flex gap-1 font-bold text-gray-700">

                                <i class="fa-sharp fa-solid fa-file"></i> Lista de Fichas Registradas
                            </h3>
                            <div>
                                <div class="flex justify-end gap-2">
                                    {{-- <a href="{{ route('ficha.informe') }}" type="button"
                                        class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-8 py-2.5 < mb-2 dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                                        <i class="fa-solid fa-chart-line"></i> Informe
                                    </a> --}}
                                    <a href="{{ route('ficha.exportar.excel') }}" type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 < mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        <i class="fa-regular fa-file"></i> Excel
                                    </a>
                                    <a href="{{ route('ficha.create') }}" type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 < mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        <i class="fa-regular fa-file"></i> Nuevo
                                    </a>
                                </div>
                            </div>
                        </div>

                        @if (session()->has('mensaje-ok'))
                        <div id="alert-5" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                                {{ session('mensaje-ok') }}
                            </div>
                            <button type="button"
                                class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
                                data-dismiss-target="#alert-5" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        @endif
                        @livewire('ficha-socioeconomica.mostrar-fichas')




                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>