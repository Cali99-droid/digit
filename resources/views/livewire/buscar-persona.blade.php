<div>
    <div class="flex items-center justify-start">
        <div class="p-3 ">
            <form method="GET" wire:submit.prevent='leerDatosFormulario' novalidate>
                @csrf
                @method('PUT')
                <div class="flex items-end gap-1">
                    <div>
                        <x-jet-label for="codigob" :value="__('Código del estudiante')" />

                        <x-jet-input id="codigob" class="block mt-1 w-60" type="text" wire:model.defer="codigob"
                            placeholder="Ingrese código del estudiante" :value="old('codigo')" required autofocus />

                    </div>
                    <x-jet-button class=" h-10 bg-blue-700 ">
                        {{ __('Continuar') }}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>

                    </x-jet-button>

                </div>

                @error('codigob')
                <livewire:mostrar-alerta :message='$message' />

                @enderror


            </form>

        </div>
    </div>

</div>