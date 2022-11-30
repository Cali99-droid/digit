<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ficha Socioeconómica') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="p-5">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 ">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{-- mensaje si se creo por primera vez --}}
                        <div class="py-2 flex justify-between flex-col md:flex-row ">
                            <h3 class="text-xl flex gap-1 font-bold text-gray-700">
                                
                                <i class="fa-sharp fa-solid fa-file"></i> Lista de Fichas Registradas
                            </h3>
                            <!--<a href="#"
                                    class="mt-2 md:mt-0 flex items-center border rounded-lg  bg-blue-700 hover:bg-blue-800 transition-colors text-white text-sm  p-2 cursor-pointer  w-full md:w-auto first-letter:uppercase ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg> Nuevo Material</a>-->

                        </div>

                       
                        @livewire('ficha-socioeconomica.mostrar-fichas')

                        


                    </div>

                </div>
            </div>
        </div>

        <script>
            (function() {
                'use strict'
                var forms = document.querySelectorAll('.form-delete')
                Array.prototype.slice.call(forms)
                    .forEach(function(form) {
                        form.addEventListener('submit', function(event) {
                            event.preventDefault()
                            event.stopPropagation()
                            Swal.fire({
                                title: '¿Confirma la eliminación del registro?',
                                icon: 'info',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Confirmar',
                                cancelButtonText: 'Cancelar'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    this.submit();
                                }
                            })
                        }, false)
                    })
            })()

            function ejecutarAlert() {
                Swal.fire({
                    title: 'Desea Eliminar el Registro',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            }
        </script>
    </div>
</x-app-layout>
