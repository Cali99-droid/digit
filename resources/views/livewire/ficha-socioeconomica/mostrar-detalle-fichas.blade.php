<div>



    <div class="overflow-x-auto relative shadow-md sm:rounded-lg  ">
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
                    <!--<th scope="col" class="py-3 px-6">
                        Acciones
                    </th>-->
                </tr>
            </thead>
            <tbody>
                @php
                $contador = 1;
                @endphp
                @foreach ($fichas as $f)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $contador++ }}
                    </th>
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $f->datos }}
                    </th>
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $f->nombre }}
                    </th>
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $f->nombre_escuela }}
                    </th>
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        @if ($f->puntaje_total > 162 && $f->puntaje_total <= 180) C @endif @if ($f->puntaje_total > 150
                            && $f->puntaje_total <= 162) B @endif @if ($f->puntaje_total <= 150) A @endif </th>
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Hace 2 días
                    </th>
                    <!--<th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="#"
                                class="inline-flex items-center px-3 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Editar</a>
                            <a href="#"
                                class="inline-flex items-center px-3 py-1 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition">Eliminar</a>
                            <a href="#"
                                class="inline-flex items-center px-3 py-1 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300 disabled:opacity-25 transition">Ver
                                Todo</a>
                        </th>-->
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
                    Livewire.emitTo('ficha-socioeconomica.mostrar-fichas', 'delete', event.detail.id);
                }
            })
        })
    </script>
</div>