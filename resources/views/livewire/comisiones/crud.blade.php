<div class="py-8 px-6 sm:py-6 sm:py-4">
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <div class="mt-4 mb-2 text-2xl page-title">
            Comisiones locales
        </div>
        <div class="flex justify-end toolbar border border-gray-100 border-dotted">
            <div>
                <button wire:click='create()' class="btn">Nueva Comisión</button>
            </div>
        </div>
        @if($editMode)
            @include('livewire.comisiones.create')
        @endif

        <div class="mt-6 text-gray-500 text-sm">
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-300">
                        <th class="px-4 py-2 w-20 border">No.</th>
                        <th class="px-4 py-2 border">Nombre de la Comisión</th>
                        <th class="px-4 py-2 border"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($comisiones as $comision )
                    <tr>
                        <td class="border px-4 py-2">{{ $comision->id }}</td>
                        <td class="border px-4 py-2"><button type="button" wire:click="edit({{ $comision->id }})" class="">{{ $comision->titulo }}</button></td>
                        <td class="border px-4 py-2"></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
