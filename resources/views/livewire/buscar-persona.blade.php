<div>
    <div class="flex items-center justify-center">
        <div class="p-3 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
            <form method="GET" wire:submit.prevent='leerDatosFormulario' novalidate>
                @csrf
                @method('PUT')
                <div class="flex items-end gap-1">
                    <div>
                        <x-jet-label for="codigob" :value="__('Código del estudiante')" />

                        <x-jet-input id="codigob" class="block mt-1 w-60" type="text" wire:model="codigob"
                            placeholder="Ingrese código del estudiante" :value="old('codigo')" required autofocus />

                    </div>
                    <x-jet-button class=" h-10 bg-cyan-800 ">
                        {{ __('Continuar') }}
                    </x-jet-button>

                </div>

                @error('codigob')
                <livewire:mostrar-alerta :message='$message' />

                @enderror


            </form>
        </div>
    </div>

</div>