<div>
    <x-jet-danger-button class="bg-blue-500 hover:bg-blue-400" wire:click="$set('open',true)">
        <i class="fa-solid fa-receipt"></i>
    </x-jet-danger-button>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Nuevo Registro De Personas {{$persona->id}}
        </x-slot>
        <x-slot name="content">
            <div class="flex items-center justify-center p-12">
               
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
