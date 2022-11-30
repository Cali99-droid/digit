<div>
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
                            <a href="#" onclick="ejecutarAlert()">Eliminar</a>
                            
                            <a href="#">Ver Todo</a>
                        </th>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
