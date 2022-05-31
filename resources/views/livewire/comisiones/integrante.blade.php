<div>
    <h5 class="text-lg text-gray-500 border-b mt-8 mb-8 title-5">Integrantes</h5>
    {{$comision_id}}
    @if($editMode)
    <form>
        <div class="mb-4">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-2">
                Nombre
            </label>
            <input type="text"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                wire:model="nombre">
            @error('nombre')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-2">
                Puesto
            </label>
            <input type="text"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                wire:model="puesto">
        </div>

        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                <button wire:click.prevent="store()" type="button"
                    class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">

                    Guardar

                </button>
            </span>
            <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                <button wire:click.prevent="$set('editMode', false)" type="button"
                    class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">

                    Cerrar

                </button>
            </span>
        </div>
    </form>
    @endif
    <table class="table-fixed w-full">
        <tbody>
        @foreach ($integrantes as $integrante)
            <tr>
                <td class="border py-2 px-2"><button wire:click.prevent="$emit('editarIntegrante', {{$integrante->id}})">{{$integrante->nombre}}<br>{{$integrante->puesto}}</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
