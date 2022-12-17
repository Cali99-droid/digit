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
                        <iframe title="DashFS - EV. SOCIOECONOMICA" width="1024" height="612"
                            src="https://app.powerbi.com/view?r=eyJrIjoiYzBmZTY1YTItZWViZi00MDU5LWI4NjMtZWU1MGZiZTM4NzYyIiwidCI6ImM1ZDIzYjA5LWFmMDEtNGFlYy1hYjc0LTdhNWQxZGEwMTA4NCJ9&pageName=ReportSection"
                            frameborder="0" allowFullScreen="true"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>