<form class="w-full max-w-lg">
    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <h5 class="text-lg font-medium mb-8 title-5">Integrantes</h5>
        <div class="">
            <div class="flex flex-wrap  mb-6">
                <div class="w-full mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Nombre
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-500 border rounded py-2 px-2 mb-3 leading-tight focus:outline-none focus:bg-white"
                        type="text" wire:model="nombre">
                        @error('nombre')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                </div>
                <div class="w-full mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Puesto
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-500 border rounded py-2 px-2 mb-3 leading-tight focus:outline-none focus:bg-white"
                        type="text" wire:model="puesto">
                </div>

                <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                    <button wire:click.prevent="store()" type="button"
                        class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        Agregar miembro
                    </button>
                </span>

            </div>
        </div>
    </div>
</form>

<div class="w-full max-w-lg">
    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <table class="table-fixed w-full">
            <tbody>
            @foreach ($integrantes as $integrante )
                <tr>
                    <td class="border py-1 px-2">{{ $integrante->nombre }}<br><span class="text-sm">{{ $integrante->puesto ?  $integrante->puesto : '' }}</span></td>
                    <td class="border py-1 px-2 text-center w-12">
                        <button type="button" wire:click='delete({{ $integrante->id }})' class="text-red-500 hover:text-red-700"><i class="fa-solid fa-circle-trash"></i></button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

