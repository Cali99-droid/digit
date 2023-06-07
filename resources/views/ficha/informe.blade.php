<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-5">

        <div class="p-5">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 ">
                <div class=" overflow-hidden shadow-sm sm:rounded-lg mx-auto">
                    <div class="  bg-blue-700  ">
                        <iframe title="DashFS_CP" width="1024" height="612"
                            src="https://app.powerbi.com/reportEmbed?reportId=d61c32bd-e412-421b-8648-a18a7273ba00&autoAuth=true&ctid=c5d23b09-af01-4aec-ab74-7a5d1da01084"
                            frameborder="0" allowFullScreen="true"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>