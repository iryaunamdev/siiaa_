<div>
    @if (session()->has('message'))
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
                <div class="py-1"><i class="fa-light fa-circle-exclamation fa-lg"></i></div>
                <div>
                    <p class="text-sm">{{ session('message') }}</p>
                </div>
            </div>
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <x-jet-label>Nombre de la Comision</x-jet-label>
        <x-jet-input-error for="titulo" />
        <x-jet-input type=text wire:model='titulo' />

        <x-jet-label>Contacto</x-jet-label>
        <x-jet-input-error for="contacto" />
        <x-jet-input type=text wire:model='contacto' placeholder="Correo electrónico" />

        <x-jet-label>URL local</x-jet-label>
        <x-jet-input-error for="url_local" />
        <x-jet-input type=text wire:model='url_local' />

        <x-jet-label>Información general de la Comisión</x-jet-label>
        <x-jet-input-error for="descripcion" />
        <textarea type=text wire:model='descripcion'></textarea>

        <x-jet-button type="submit">Aceptar</x-jet-button>
    </form>
</div>
