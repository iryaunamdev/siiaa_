<h5 class="uppercase text-gray-500 border-b mb-8 title-5">Datos Generales</h5>
<form>
    <div class="mb-4">
        <input class="appearance-none block w-full bg-gray-200 text-gray-500 border rounded py-2 px-2 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" wire:model="nombre" placeholder="Nombre del integrante">
        @error('nombre')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
         @enderror
    </div>

    <div class="mb-4">
        <input class="appearance-none block w-full bg-gray-200 text-gray-500 border rounded py-2 px-2 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" wire:model="puesto" placeholder="(Puesto / Adscripcion)">
    </div>


    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <span class="flex w-full rounded-md shadow-sm sm:w-auto">
            <button wire:click.prevent="store()" type="button"
                class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                Guardar
            </button>
        </span>
    </div>

    <table class="table-fixed w-full mt-6">
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
</form>
