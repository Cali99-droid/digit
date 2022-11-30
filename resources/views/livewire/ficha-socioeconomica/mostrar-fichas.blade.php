<div>
    <div class="grid grid-cols-6 gap-4">
        <div class="col-span-2">
            <div class="flex items-center">
                <span>Mostrar</span>
                <select id="countries"
                    class="mx-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>10</option>
                    <option value="US">25</option>
                    <option value="CA">100</option>
                    <option value="FR">Todo</option>
                </select>
                <span>registros</span>
            </div>

        </div>
        <div class="col-span-3">
            <div class="flex items-center">
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Buscar ..." required>
                </div>
            </div>
        </div>
        <div class="col-span-1">
            <div class="flex items-end">
                <a href="{{ route('ficha.create') }}" type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    <i class="fa-regular fa-file"></i> Nuevo
                </a>
            </div>
        </div>
    </div>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-4">
        <table class="table-auto w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="bg-gray-200">
                    <th scope="col" class="py-3 px-6">
                        Nº
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nombres
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Semestre
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Escuela
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Clasificación
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Registrado
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                    $contador = 1;
                @endphp
                @foreach ($fichas as $f)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$contador++}}
                        </th>
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $f->datos }}
                        </th>
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $f->nombre }}
                        </th>
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $f->nombre_escuela }}
                        </th>
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            @if ($f->puntaje_total >= 164 && $f->puntaje_total <= 180)
                                C
                            @endif

                            @if ($f->puntaje_total >= 152 && $f->puntaje_total <= 162)
                                B
                            @endif

                            @if ($f->puntaje_total < 152)
                                A
                            @endif
                        </th>
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Hace 2 días
                        </th>
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="#">Editar</a>
                            <a href="#" wire:click="deleteConfirm({{$f->idFicha}})">Eliminar Ficha</a>
                            
                            <a href="{{ route('ficha.detalle', $f->id) }}">Ver Todo</a>
                        </th>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <script>
        window.addEventListener('swal-confirm', event => {
            Swal.fire({
                title: event.detail.title,
                icon: event.detail.icon,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, quiero eliminarlo!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emitTo('ficha-socioeconomica.mostrar-fichas','delete', event.detail.id);
                }
            })
        })
    </script>
</div>
