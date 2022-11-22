<livewire:buscar-persona>

    <div>
        <form action="" class="w-full" wire:submit.prevent='crearVacante'>
            <div>
                <h3 class="text-cyan-500">Datos del Estudiante</h3>
            </div>
            <div class="grid grid-cols-2 gap-3 p-3 border border-cyan-500 rounded-lg mb-3">
                <div>
                    <x-jet-label for="nombre" :value="__('Nombres')" />

                    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" wire:model="nombre"
                        :value="old('nombre')" placeholder="Nombres estudiante" />
                    {{-- @error('titulo')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror --}}
                </div>

                <div>
                    <x-jet-label for="apellido" :value="__('Apellidos')" />

                    <x-jet-input id="apellido" class="block mt-1 w-full" type="text" wire:model="apellido"
                        :value="old('apellido')" placeholder="Apellidos estudiante" />
                    {{-- @error('titulo')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror --}}
                </div>

                <div>
                    <x-jet-label for="codigo" :value="__('Código')" />

                    <x-jet-input id="codigo" class="block mt-1 w-full" type="text" wire:model="codigo"
                        :value="old('codigo')" placeholder="Código estudiante" />
                    {{-- @error('titulo')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror --}}
                </div>

                <div>
                    <x-jet-label for="escuela" :value="__('Escuela')" />

                    <x-jet-input id="escuela" class="block mt-1 w-full" type="text" wire:model="escuela"
                        :value="old('escuela')" placeholder="Escuela" />
                    {{-- @error('titulo')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror --}}
                </div>


                <div>
                    <x-jet-label for="direccion" :value="__('Dirección ')" />

                    <x-jet-input id="direccion" class="block mt-1 w-full" type="text" wire:model="direccion"
                        :value="old('direccion')" placeholder="Dirección estudiante" />
                    {{-- @error('titulo')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror --}}
                </div>

                <div>
                    <x-jet-label for="telefono" :value="__('Teléfono ')" />

                    <x-jet-input id="telefono" class="block mt-1 w-full" type="text" wire:model="telefono"
                        :value="old('telefono')" placeholder="Teléfono estudiante" />
                    {{-- @error('titulo')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror --}}
                </div>

                <div>
                    <x-jet-label for="dir" :value="__('Dirección Padre o tutor')" />

                    <x-jet-input id="dir" class="block mt-1 w-full" type="text" wire:model="dir" :value="old('dir')"
                        placeholder="Dirección Padre o tutor" />
                    {{-- @error('titulo')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror --}}
                </div>


                <div>
                    <x-jet-label for="tel" :value="__('Teléfono Padre o tutor')" />

                    <x-jet-input id="tel" class="block mt-1 w-full" type="text" wire:model="tel" :value="old('tel')"
                        placeholder="Teléfono Padre o tutor" />
                    {{-- @error('titulo')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror --}}
                </div>

            </div>
            <div>
                <h3 class="text-blue-500">Evaluación Socioeconómica</h3>
            </div>
            <div>
                <div class="grid grid-cols-2 gap-3 p-3 border border-blue-500 rounded-lg mb-3">
                    <div>
                        <x-jet-label for="item1" :value="__('Item 1')" />

                        <x-jet-input id="item1" class="block mt-1 w-full" type="text" wire:model="item1"
                            :value="old('item1')" placeholder="Item 1" />
                        {{-- @error('titulo')
                        <livewire:mostrar-alerta :message="$message" />
                        @enderror --}}
                    </div>

                    <div>
                        <x-jet-label for="item2" :value="__('Item 2')" />

                        <x-jet-input id="item2" class="block mt-1 w-full" type="text" wire:model="item2"
                            :value="old('item2')" placeholder="Item 2" />
                        {{-- @error('titulo')
                        <livewire:mostrar-alerta :message="$message" />
                        @enderror --}}
                    </div>

                    <div>
                        <x-jet-label for="codigo" :value="__('Item 3')" />

                        <x-jet-input id="codigo" class="block mt-1 w-full" type="text" wire:model="codigo"
                            :value="old('codigo')" placeholder="Item 3" />
                        {{-- @error('titulo')
                        <livewire:mostrar-alerta :message="$message" />
                        @enderror --}}
                    </div>

                    <div>
                        <x-jet-label for="escuela" :value="__('Item 4')" />

                        <x-jet-input id="escuela" class="block mt-1 w-full" type="text" wire:model="escuela"
                            :value="old('escuela')" placeholder="Item 4" />
                        {{-- @error('titulo')
                        <livewire:mostrar-alerta :message="$message" />
                        @enderror --}}
                    </div>


                    <div>
                        <x-jet-label for="direccion" :value="__('Item 5 ')" />

                        <x-jet-input id="direccion" class="block mt-1 w-full" type="text" wire:model="direccion"
                            :value="old('direccion')" placeholder="Item 5" />
                        {{-- @error('titulo')
                        <livewire:mostrar-alerta :message="$message" />
                        @enderror --}}
                    </div>

                    <div>
                        <x-jet-label for="telefono" :value="__('Item 6 ')" />

                        <x-jet-input id="telefono" class="block mt-1 w-full" type="text" wire:model="telefono"
                            :value="old('telefono')" placeholder="Item 6" />
                        {{-- @error('titulo')
                        <livewire:mostrar-alerta :message="$message" />
                        @enderror --}}
                    </div>

                    <div>
                        <x-jet-label for="dir" :value="__('Item 7')" />

                        <x-jet-input id="dir" class="block mt-1 w-full" type="text" wire:model="dir" :value="old('dir')"
                            placeholder="Item 7" />
                        {{-- @error('titulo')
                        <livewire:mostrar-alerta :message="$message" />
                        @enderror --}}
                    </div>




                </div>
            </div>
            <div>
                <h3 class="text-indigo-500">Evaluación Académica</h3>
            </div>
            <div>
                <div class="grid grid-cols-2 gap-3 p-3 border border-indigo-500 rounded-lg">
                    <div>
                        <x-jet-label for="item1" :value="__('Item 1')" />

                        <x-jet-input id="item1" class="block mt-1 w-full" type="text" wire:model="item1"
                            :value="old('item1')" placeholder="Item 1" />
                        {{-- @error('titulo')
                        <livewire:mostrar-alerta :message="$message" />
                        @enderror --}}
                    </div>

                    <div>
                        <x-jet-label for="item2" :value="__('Item 2')" />

                        <x-jet-input id="item2" class="block mt-1 w-full" type="text" wire:model="item2"
                            :value="old('item2')" placeholder="Item 2" />
                        {{-- @error('titulo')
                        <livewire:mostrar-alerta :message="$message" />
                        @enderror --}}
                    </div>

                </div>

            </div>
            <div class="mt-3 flex justify-center">
                <x-jet-button class="bg-cyan-800">
                    Guardar Ficha
                </x-jet-button>
            </div>

        </form>
    </div>