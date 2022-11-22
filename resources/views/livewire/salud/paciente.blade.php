<div>
    <x-jet-danger-button wire:click="$set('open',true)">
        Registrar Persona
    </x-jet-danger-button>

    <!-- Modal-->
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Nuevo Registro De Personas
        </x-slot>
        <x-slot name="content">
            <div class="flex items-center justify-center p-12">
                <div class="mx-auto w-full ">
                    <form action="" method="POST">
                        <div class="-mx-1 flex flex-wrap mb-5">
                            <div class="w-full px-1 sm:w-1/2">
                                <label for="apellidoPa" class="mb-3 block leading-3">
                                    Apellido Paterno
                                </label>
                                <div class="mb-1 flex items-center border-b border-teal-500 py-2">
                                    <input type="text" name="apellidoPa" id="apellidoPa"
                                        placeholder="Ingrese Apellido Paterno" wire:model.defer='apellidoPa'
                                        class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:border-green-700" />
                                </div>
                            </div>
                            <div class="w-full px-1 sm:w-1/2">
                                <label for="apellidoMa" class="mb-3 block leading-3">
                                    Apellido Materno
                                </label>
                                <div class="mb-1 flex items-center border-b border-teal-500 py-2">
                                    <input type="text" name="apellidoMa" id="apellidoMa" placeholder="Apellido Materno"
                                        wire:model.defer='apellidoMa'
                                        class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:border-green-700" />
                                </div>
                            </div>
                        </div>
                        <div class="-mx-1 flex flex-wrap mb-5">
                            <div class="w-full px-1 sm:w-1/2">
                                <label for="dni" class="mb-3 block leading-3">
                                    Nombres
                                </label>
                                <div class="mb-1 flex items-center border-b border-teal-500 py-2">
                                    <input type="text" name="nombres" id="nombres" placeholder="Ingrese Nombres"
                                        wire:model.defer='nombres'
                                        class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full px-1 sm:w-1/2">

                                <label for="dni" class="mb-3 block leading-3">
                                    DNI
                                </label>
                                <div class="mb-1 flex items-center border-b border-teal-500 py-2">
                                    <input type="text" name="dni" id="dni" placeholder="Ingrese DNI" wire:model='dni'
                                        class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" />
                                    <x-jet-input-error for="dni" />
                                </div>
                            </div>

                        </div>
                        <div class="-mx-1 flex flex-wrap mb-5">
                            <div class="w-full px-1 sm:w-1/2">
                                <div class="mb-1">
                                    <label for="sexo" class="mb-3 block leading-3">
                                        Seleccionar sexo
                                    </label>
                                    <select id="sexo" name="sexo" wire:model.defer='sexo'
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Seleccionar sexo</option>
                                        <option value="MASCULINO">Masculino</option>
                                        <option value="FEMENINO">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full px-1 sm:w-1/2">
                                <div class="mb-1">
                                    <label for="fechaNac" class="mb-3 block leading-3">
                                        Fecha Nacimiento
                                    </label>
                                    <input type="date" name="fechaNac" id="fechaNac" wire:model.defer='fechaNac'
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                        </div>
                        <div class="-mx-1 flex flex-wrap mb-5">
                            <div class="w-full px-1 sm:w-1/2">
                                <div class="mb-1">
                                    <label for="lugarNac" class="mb-3 block leading-3">
                                        Lugar de Nacimiento
                                    </label>
                                    <input type="text" name="lugarNac" id="lugarNac" placeholder="Lugar de Nacimiento"
                                        wire:model.defer='lugarNac'
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base  text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-1 sm:w-1/2">
                                <div class="mb-1">
                                    <label for="ocupacion" class="mb-3 block leading-3">
                                        Ocupacion
                                    </label>
                                    <select id="ocupacion"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="ocupacion" wire:model.defer='ocupacion'>
                                        <option selected>Seleccionar ocupacion</option>
                                        <option value="MASCULINO">ESTUDIANTE</option>
                                        <option value="FEMENINO">DOCENTE</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="-mx-1 flex flex-wrap mb-5">
                            <div class="w-full px-1 sm:w-1/2">
                                <div class="mb-1">
                                    <label for="lugarProc" class="mb-3 block leading-3">
                                        Lugar de Procedencia
                                    </label>
                                    <input type="text" name="lugarProc" id="lugarProc" wire:model.defer='lugarProc'
                                        placeholder="Lugar de Procedencia"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base  text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-1 sm:w-1/2">
                                <div class="mb-1">
                                    <label for="estadoCivil" class="mb-3 block leading-3">
                                        Estado Civil
                                    </label>
                                    <select id="estadoCivil" wire:model.defer='estadoCivil'
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="estadoCivil">
                                        <option selected>Seleccionar Estado Civil</option>
                                        <option value="SOLTERO">SOLTERO</option>
                                        <option value="CASADO">CASADO</option>
                                        <option value="VIUDO">VIUDO</option>
                                        <option value="DIVORCIADO">DIVORCIADO</option>
                                        <option value="OTRO">OTRO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="escuelaID" class="mb-3 block leading-3">
                                Escuela
                            </label>
                            <select id="escuelaID"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="escuelaID" wire:model.defer='escuelaID'>
                                <option selected>Seleccionar escuela</option>
                                @foreach ($escuela as $escuela)
                                <option value="{{$escuela->id}}">{{$escuela->nombre_escuela}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="codigo" class="mb-3 block text-base font-medium text-[#07074D] text-sm">
                                Codigo
                            </label>
                            <input type="text" name="codigo" id="codigo" wire:model.defer='codigo'
                                placeholder="Codigo estudiante o administrativo"
                                class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="mb-5">
                            <label for="direccion" class="mb-3 block text-base font-medium text-[#07074D]">
                                Dirección
                            </label>
                            <input type="text" name="direccion" id="direccion" placeholder="direccion"
                                wire:model.defer='direccion'
                                class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </form>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open',false)">
                cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button class="bg-green-500" wire:click="guardar">
                Registrar
            </x-jet-danger-button>

        </x-slot>
    </x-jet-dialog-modal>
</div>