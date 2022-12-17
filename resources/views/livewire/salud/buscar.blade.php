<div class=>
    <div class="max-w-6xl mt-2 mx-auto  lg:px-2 ">
        <div class="flex items-center border-b border-teal-500 py-2">
            <input
                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                type="text" placeholder="Buscar paciente" aria-label="Full name" placeholder="Buscar paciente"
                wire:model='buscar'>

            @livewire('salud.paciente')
        </div>
    </div>

    <div class="py-12 overflow-x">
        <x-table>

            <table class="min-w-max w-full table-auto overflow-scroll" id="tabla">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">DNI</th>
                        <th class="py-3 px-6 text-left">PACIENTE</th>
                        <th class="py-3 px-6 text-left">Escuela</th>
                        <th class="py-3 px-6 text-center">Procedencia</th>
                        <th class="py-3 px-6 text-center">Historial</th>
                        <th class="py-3 px-6 text-center">Aciones</th>

                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($persona as $persona)
                    <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left">
                            <div class="flex items-center">
                                {{$persona->id}}
                            </div>
                        </td>
                        <td class="py-3 px-6 text-left">
                            <div class="flex items-center">
                                {{$persona->apellidoPa.' '.$persona->apellidoMa.' '.$persona->nombres}}
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center">
                                <span>{{$persona->nombre_escuela}}</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            {{$persona->lugarProc}}
                        </td>
                        <td class="py-3 px-6 text-center">
                            @livewire('salud.historial', ['persona' => $persona], key($persona->id))
                        </td>
                        <td class="py-3 px-6 text-center">
                            <i class="fa-solid fa-house"></i>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </x-table>
    </div>
</div>