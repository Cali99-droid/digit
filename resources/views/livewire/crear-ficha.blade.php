<div>

    <livewire:buscar-persona />
    @if (session()->has('mensaje'))
    <div id="alert-4" class="w-1/2 flex p-4 mb-4 bg-yellow-100 rounded-lg dark:bg-yellow-200">
        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-yellow-700 dark:text-yellow-800" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium text-yellow-700 dark:text-yellow-800">
            {{session('mensaje')}}
        </div>

    </div>

    @endif
    @if (session()->has('mensaje-ok'))
    <div id="alert-5" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
            {{session('mensaje-ok')}}
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
    <div>
        {{-- wire:submit.prevent='crearFicha' --}}
        <form class="w-full border border-gray-300 rounded-lg p-5 " wire:submit.prevent='crearFicha'>

            <div class=" flex  justify-between">
                <div>
                    <p class="text-blue-700 font-bold text-xl ">Ficha Socioeconómica</p>
                </div>
                <div class="w-1/4 flex items-center gap-1">
                    <x-jet-label for="semestre" :value="__('SEMESTRE: ')" />

                    <select id="semestre" wire:model="semestre"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
                        <option value="" selected>-- Seleccione --</option>
                        @foreach ($semestres as $d)
                        <option value="{{ $d->id }}">{{ $d->nombre }}</option>
                        @endforeach
                    </select>

                </div> @error('semestre')
                <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>

            <div>
                <h3 class="text-blue-700 font-bold text-lg ">Datos del Estudiante</h3>
            </div>

            <div class="grid grid-cols-4 gap-3 p-5  mb-3 border-t border-blue-700 ">

                <div>
                    <x-jet-label for="nombre" :value="__('Nombres')" /> {{$nombre}}

                    <input {{ $bool ? 'disabled' : '' }} id="nombre"
                        class="block mt-1 w-full border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        type="text" wire:model="nombre" id="nombre" :value="old('nombre')" placeholder="Nombres estudiante" />
                    @error('nombre')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-jet-label for="apellidoPat" :value="__('Apellido Paterno')" />

                    <input {{ $bool ? 'disabled' : '' }} id="apellidoPat" type="text"
                        class="block mt-1 w-full border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        wire:model="apellidoPat" :value="old('apellidoPat')" placeholder="Apellido paterno " />



                    @error('apellidoPat')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-jet-label for="apellidoMat" :value="__('Apellido Materno')" />

                    <input {{ $bool ? 'disabled' : '' }} id="apellidoMat" type="text"
                        class="block mt-1 w-full border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        wire:model="apellidoMat" :value="old('apellidoMat')" placeholder="Apellidos materno" />
                    @error('apellidoMat')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>


                <div>
                    <x-jet-label for="codigo" :value="__('Código')" />

                    <input {{ $bool ? 'disabled' : '' }} id="codigo" type="text"
                        class="block mt-1 w-full border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        wire:model="codigo" :value="old('codigo')" placeholder="Código estudiante" />
                    @error('codigo')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-jet-label for="escuela" :value="__('Escuela')" />


                    <select id="escuela" wire:model="escuela"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        {{ $bool ? 'disabled' : '' }}>
                        <option value="" selected>-- Seleccione --</option>
                        @foreach ($escuelas as $d)
                        <option value="{{ $d->id }}" @if ($estudiante) @if ($d->id == $estudiante->escuelas_id)
                            selected
                            @endif

                            @endif
                            >{{ $d->nombre_escuela }}</option>
                        @endforeach
                    </select>
                    @error('escuela')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>


                <div>
                    <x-jet-label for="direccion" :value="__('Dirección ')" />

                    <input {{ $bool ? 'disabled' : '' }} id="direccion" type="text"
                        class="block mt-1 w-full border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        wire:model="direccion" :value="old('direccion')" placeholder="Dirección estudiante" />
                    @error('direccion')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-jet-label for="telefono" :value="__('Teléfono ')" />

                    <input id="telefono"
                        class=" block mt-1 w-full border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        type="tel" wire:model="telefono" :value="old('telefono')" placeholder="Teléfono estudiante" />
                    @error('telefono')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-jet-label for="dir" :value="__('Dirección Padre o tutor')" />

                    <input id="dir"
                        class="block mt-1 w-full  border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm "
                        type="text" wire:model="dir" :value="old('dir')" placeholder="Dirección Padre o tutor" />
                    @error('dir')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>


                <div>
                    <x-jet-label for="tel" :value="__('Teléfono Padre o tutor')" />

                    <input id="tel"
                        class="block mt-1 w-full  border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        type="tel" wire:model="tel" :value="old('tel')" placeholder="Teléfono Padre o tutor" />
                    @error('tel')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>
                {{-- @endif --}}
            </div>


            <div>
                <h3 class="text-blue-700 font-bold text-lg">Evaluación Socioeconómica</h3>
            </div>
            <div>
                <div class="grid grid-cols-3  gap-5 p-5  mb-3  border-t border-blue-700 ">
                    <div>
                        <x-jet-label for="item1" :value="__('1. Procedencia del Estudiante')" />

                        <select id="item1" wire:model="item1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
                            <option value="" selected>-- Seleccione --</option>
                            @foreach ($procedencias as $d)


                            <option value="{{ $d->id }}">{{ $d->puntaje }}</option>

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
                            <option value="" selected>-- Seleccione --</option>
                            @foreach ($cargasFamiliares as $d)


                            <option value="{{ $d->id }}">{{ $d->puntaje }}</option>

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
                            <option value="" selected>-- Seleccione --</option>
                            @foreach ($orfandades as $d)


                            <option value="{{ $d->id }}">{{ $d->puntaje }}</option>

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
                            <option value="" selected>-- Seleccione --</option>
                            @foreach ($situacion as $d)


                            <option value="{{ $d->id }}">{{ $d->puntaje }}</option>

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
                            <option value="" selected>-- Seleccione --</option>
                            @foreach ($dependencias as $d)


                            <option value="{{ $d->id }}">{{ $d->puntaje }}</option>

                            @endforeach

                        </select> @error('item5')
                        <livewire:mostrar-alerta :message="$message" />
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="item6" :value="__('6. Pensión mensual que recibe el estudiante ')" />

                        <select id="item6" wire:model="item6"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected value="">-- Seleccione --</option>
                            @foreach ($pensiones as $pension)


                            <option value="{{ $pension->id }}">{{ $pension->puntaje }}</option>

                            @endforeach
                        </select> @error('item6')
                        <livewire:mostrar-alerta :message="$message" />
                        @enderror

                    </div>

                    <div>
                        <x-jet-label for="item7" :value="__('7. Vivienda del estudiante')" />

                        <select id="item7" wire:model="item7"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected value="">-- Seleccione --</option>
                            @foreach ($viviendas as $d)


                            <option value="{{ $d->id }}">{{ $d->puntaje }}</option>

                            @endforeach

                        </select> @error('item7')
                        <livewire:mostrar-alerta :message="$message" />
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="sisfho" :value="__('8. Clasificación SISFOH(opcional)')" />

                        <select id="sisfho" wire:model="sisfho"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected value="">-- Seleccione --</option>
                            @foreach ($clasificacionesSocioeconomicas as $cs)
                            <option value="{{$cs->id}}">{{$cs->nombre}}</option>
                            @endforeach
                            {{-- @error('titulo')
                            <livewire:mostrar-alerta :message="$message" />
                            @enderror --}}

                        </select>
                    </div>
                    <div>
                        <x-jet-label for="fecha" :value="__('Fecha')" />

                        <input type="date"
                            class="block mt-1 w-full border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            id="fecha" wire:model="fecha">
                        @error('fecha')
                        <livewire:mostrar-alerta :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <x-jet-label for="obs" :value="__('Observación(opcional)')" />

                        <textarea
                            class="block mt-1 w-full border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            wire:model="obs" id="obs" cols="37" rows="3"></textarea>
                    </div>




                </div>
            </div>
            <div>
                <h3 class="text-blue-700 font-bold text-lg ">Evaluación Académica</h3>
            </div>
            <div>
                <div class="grid grid-cols-3 gap-3 p-5   border-t border-blue-700 ">
                    <div>
                        <x-jet-label for="ciclo" :value="__('Ciclo')" />

                        <select id="ciclo" wire:model="ciclo"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected value="">-- Seleccione --</option>
                            @for ($i = 1; $i <= 12; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                @endfor


                        </select>
                        @error('ciclo')
                        <livewire:mostrar-alerta :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <x-jet-label for="aitem1" :value="__('Créditos Matriculados en Ciclo Inmediato')" />

                        <select id="aitem1" wire:model="aitem1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected value="">-- Seleccione --</option>
                            @foreach ($creditosMatriculados as $d)

                            <option value="{{ $d->id }}">{{ $d->puntaje }}</option>

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
                            <option selected value="">-- Seleccione --</option>
                            @foreach ($creditosAprobados as $d)

                            <option value="{{ $d->id }}">{{ $d->puntaje }}</option>

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
                {{-- wire:click="crearFicha" type="button" --}}
                <x-jet-button class="bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy"
                        width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                        <circle cx="12" cy="14" r="2" />
                        <polyline points="14 4 14 8 8 8 8 4" />
                    </svg>
                    Guardar Ficha
                </x-jet-button>
            </div>

        </form>
    </div>


    <x-jet-dialog-modal wire:model="ficha">
        <x-slot name="title" class="bg-blue-200 text-blue-700">
            {{ __('Resumen de la ficha') }}
        </x-slot>

        <x-slot name="content">
            {{ __('') }}
            <div class="flex justify-start gap-5">
                <div>
                    <p class="font-bold text-lg">Puntaje Ev. Socioeconómica: <span
                            class="text-gray-600 font-normal text-lg">{{$totalEc ??
                            ''}}</span></p>
                    <p class="font-bold text-lg">Puntaje Ev. Académica: <span
                            class="text-gray-600 font-normal text-lg">{{$totalAca ??
                            ''}}</span></p>
                </div>
                <div>
                    <p class="font-bold text-lg">Puntaje Total : <span
                            class="text-gray-600 font-normal text-lg">{{$total ??
                            ''}}</span>
                    </p>
                    <p class="font-bold text-lg">Clasificacion: <span
                            class="text-gray-600 font-normal text-lg">{{$clasificacion
                            ?? ''}}</span></p>
                </div>

            </div>
            @if (session()->has('mensaje-ficha'))

            <div id="alert-6" class="flex p-4 mb-4 bg-yellow-100 rounded-lg dark:bg-yellow-200" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-yellow-700 dark:text-yellow-800"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium text-yellow-700 dark:text-yellow-800">
                    {{session('mensaje-ficha')}}
                </div>

            </div>
            @endif
        </x-slot>

        <x-slot name="footer">
            {{-- wire:click="$toggle('confirmingUserDeletion')" --}}
            <x-jet-secondary-button wire:click="$toggle('ficha')" wire:loading.attr="disabled">
                {{ __('Cancelar') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-3 bg-blue-700" wire:click="saveFicha" wire:loading.attr="disabled">

                {{ __('Confirmar') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>