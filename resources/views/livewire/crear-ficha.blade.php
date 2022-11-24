<div>
    <livewire:buscar-persona />

    <div>
        <form class="w-full" wire:submit.prevent='crearFicha'>
            <div>
                <h3 class="text-cyan-500 font-bold text-lg">Datos del Estudiante</h3>
            </div>
            <div class="grid grid-cols-4 gap-3 p-3 border border-cyan-500 rounded-lg mb-3">
                <div>
                    <x-jet-label for="nombre" :value="__('Nombres')" />

                    <x-jet-input class="block mt-1 w-full" type="text" wire:model="nombre" :value="old('nombre')"
                        placeholder="Nombres estudiante" />
                    @error('nombre')
                        <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-jet-label for="apellido" :value="__('Apellidos')" />

                    <x-jet-input id="apellido" class="block mt-1 w-full" type="text" wire:model="apellido"
                        :value="old('apellido')" placeholder="Apellidos estudiante" />
                    @error('apellido')
                        <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-jet-label for="codigo" :value="__('Código')" />

                    <x-jet-input id="codigo" class="block mt-1 w-full" type="text" wire:model="codigo"
                        :value="old('codigo')" placeholder="Código estudiante" />
                    @error('codigo')
                        <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-jet-label for="escuela" :value="__('Escuela')" />

                    <x-jet-input id="escuela" class="block mt-1 w-full" type="text" wire:model="escuela"
                        :value="old('escuela')" placeholder="Escuela" />
                    @error('escuela')
                        <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>


                <div>
                    <x-jet-label for="direccion" :value="__('Dirección ')" />

                    <x-jet-input id="direccion" class="block mt-1 w-full" type="text" wire:model="direccion"
                        :value="old('direccion')" placeholder="Dirección estudiante" />
                    @error('direccion')
                        <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-jet-label for="telefono" :value="__('Teléfono ')" />

                    <x-jet-input id="telefono" class="block mt-1 w-full" type="text" wire:model="telefono"
                        :value="old('telefono')" placeholder="Teléfono estudiante" />
                    @error('telefono')
                        <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-jet-label for="dir" :value="__('Dirección Padre o tutor')" />

                    <x-jet-input id="dir" class="block mt-1 w-full" type="text" wire:model="dir"
                        :value="old('dir')" placeholder="Dirección Padre o tutor" />
                    @error('dir')
                        <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>


                <div>
                    <x-jet-label for="tel" :value="__('Teléfono Padre o tutor')" />

                    <x-jet-input id="tel" class="block mt-1 w-full" type="text" wire:model="tel"
                        :value="old('tel')" placeholder="Teléfono Padre o tutor" />
                    @error('tel')
                        <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>

            </div>
            <div>
                <h3 class="text-blue-500 font-bold text-lg">Evaluación Socioeconómica</h3>
            </div>
            <div>
                <div class="grid grid-cols-3  gap-5 p-4 border border-blue-500 rounded-lg mb-3">
                    <div>
                        <x-jet-label for="item1" :value="__('1. Procedencia del Estudiante')" />

                        <select id="item1" wire:model="item1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
                            <option selected>-- Seleccione --</option>
                            @foreach ($procedencias as $d)
                                <option {{ $d->id }}>{{ $d->puntaje }}</option>
                            @endforeach
                        </select>
                        @error('item1')
                            <livewire:mostrar-alerta :message="$message" />
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="item2" :value="__('2. Carga Famliliar de los padres')" />

                        <select id="item2" wire:model="item2"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>-- Seleccione --</option>
                            @foreach ($cargasFamiliares as $d)
                                <option {{ $d->id }}>{{ $d->puntaje }}</option>
                            @endforeach
                        </select>
                        @error('item2')
                            <livewire:mostrar-alerta :message="$message" />
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="item3" :value="__('3. Situación de Orfandad y Desorganización Familiar')" />

                        <select id="item3" wire:model="item3"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>-- Seleccione --</option>
                            @foreach ($orfandades as $d)
                                <option {{ $d->id }}>{{ $d->puntaje }}</option>
                            @endforeach
                        </select>
                        @error('item3')
                            <livewire:mostrar-alerta :message="$message" />
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="item4" :value="__('4. Situación económica familiar')" />

                        <select id="item4" wire:model="item4"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>-- Seleccione --</option>
                            @foreach ($situacion as $d)
                                <option {{ $d->id }}>{{ $d->puntaje }}</option>
                            @endforeach
                        </select>
                        @error('item4')
                            <livewire:mostrar-alerta :message="$message" />
                        @enderror
                    </div>


                    <div>
                        <x-jet-label for="item5" :value="__('5. Dependencia Económica del estudiante ')" />

                        <select id="item5" wire:model="item5"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>-- Seleccione --</option>
                            @foreach ($dependencias as $d)
                                <option {{ $d->id }}>{{ $d->puntaje }}</option>
                            @endforeach

                        </select> @error('item5')
                            <livewire:mostrar-alerta :message="$message" />
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="item6" :value="__('6. Pensión mensual que recibe el estudiante ')" />

                        <select id="item6" wire:model="item6"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>-- Seleccione --</option>
                            @foreach ($pensiones as $pension)
                                <option {{ $pension->id }}>{{ $pension->puntaje }}</option>
                            @endforeach
                        </select> @error('item6')
                            <livewire:mostrar-alerta :message="$message" />
                        @enderror

                    </div>

                    <div>
                        <x-jet-label for="item7" :value="__('7. Vivienda del estudiante')" />

                        <select id="item7" wire:model="item7"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>-- Seleccione --</option>
                            @foreach ($viviendas as $d)
                                <option {{ $d->id }}>{{ $d->puntaje }}</option>
                            @endforeach

                        </select> @error('item7')
                            <livewire:mostrar-alerta :message="$message" />
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="sisfho" :value="__('8. Clasificación SISFHO(opcional)')" />

                        <select id="sisfho" wire:model="sisfho"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>-- Seleccione --</option>
                            {{-- @error('titulo')
                            <livewire:mostrar-alerta :message="$message" />
                            @enderror --}}

                        </select>
                    </div>
                    <div>
                        <x-jet-label for="fecha" :value="__('Fecha')" />

                        <input type="date" id="fecha" wire:model="fecha">
                        @error('fecha')
                            <livewire:mostrar-alerta :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <x-jet-label for="obs" :value="__('Observación(opcional)')" />

                        <textarea wire:model="obs" id="obs" cols="50" rows="3"></textarea>
                    </div>




                </div>
            </div>
            <div>
                <h3 class="text-indigo-500 font-bold text-lg">Evaluación Académica</h3>
            </div>
            <div>
                <div class="grid grid-cols-3 gap-3 p-3 border border-indigo-500 rounded-lg">
                    <div>
                        <x-jet-label for="ciclo" :value="__('Ciclo(opcional)')" />

                        <select id="ciclo" wire:model='ciclo'
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>-- Seleccione --</option>
                            {{-- @error('titulo')
                            <livewire:mostrar-alerta :message="$message" />
                            @enderror --}}

                        </select>
                        @error('ciclo')
                            <livewire:mostrar-alerta :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <x-jet-label for="aitem1" :value="__('Créditos Matriculados en Ciclo Inmediato')" />

                        <select id="aitem1" wire:model="aitem1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>-- Seleccione --</option>
                            @foreach ($creditosMatriculados as $d)
                                <option {{ $d->id }}>{{ $d->puntaje }}</option>
                            @endforeach
                            {{-- @error('titulo')
                            <livewire:mostrar-alerta :message="$message" />
                            @enderror --}}

                        </select>
                        @error('aitem1')
                            <livewire:mostrar-alerta :message="$message" />
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="aitem2" :value="__('Créditos Aprobados en Ciclo Anterior')" />

                        <select id="aitem2" wire:model="aitem2"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>-- Seleccione --</option>
                            @foreach ($creditosAprobados as $d)
                                <option {{ $d->id }}>{{ $d->puntaje }}</option>
                            @endforeach
                            {{-- @error('titulo')
                            <livewire:mostrar-alerta :message="$message" />
                            @enderror --}}

                        </select>
                        @error('aitem2')
                            <livewire:mostrar-alerta :message="$message" />
                        @enderror
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
</div>
