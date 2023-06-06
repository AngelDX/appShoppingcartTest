<x-dialog-modal  wire:model="isOpen">
    <x-slot name="title">
        <h3>Registro nuevo empresa</h3>
    </x-slot>
    <x-slot name="content">

        <div class="mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-label value="Nombre empresa" class="font-bold"/>
                <x-input type="text" class="w-full"/>
                <x-input-error for="empresa.name"/>
            </div>
        </div>

    </x-slot>
    <x-slot name="footer">
asdasd
    </x-slot>
</x-dialog-modal>
