<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nueva Ficha') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-3">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold text-center mb-2">Digitalizar Ficha</h1>
                    <div class="md:flex md:justify-center flex-col gap-4 p-5">

                        <livewire:crear-ficha />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>