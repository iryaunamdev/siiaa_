<div class="py-8 px-6 sm:py-6 sm:py-4 {{ $editMode ? 'grid grid-cols-2' : '' }} overflow-auto">
    <div class="p-6 sm:px-20 bg-white">
        @if($editMode)
            @include('livewire.comisiones.create')
            @if($comision_id)
                @livewire('comisiones.integrantes')
            @endif
        @else
        <div class="mt-4 mb-2 text-2xl page-title">
            Comisiones locales
        </div>
        <div class="flex justify-end toolbar border border-gray-100 border-dotted">
            <div>
                <button wire:click.prevent="create()" class="btn">Nueva Comisión</button>
            </div>
        </div>

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
                        <td class="border px-4 py-2"><button wire:click.prevent="edit({{$comision->id}})" class="">{{ $comision->titulo }}</button></td>
                        <td class="border px-4 py-2">

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
    @if($comision_id)
    <div class="p-6 sm:px-20 bg-white">
        @livewire('comisiones.documentos')
    </div>
    @endif
</div>


{{--<div class="py-8 px-6 sm:py-6 sm:py-4 grid grid-cols-2">
    <div class="bg-white p-8">
        <h5 class="uppercase text-gray-500 border-b mb-8 title-5">Datos Generales</h5>

        <form>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Nombre de la Comisión:</label>
                <input type="text"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    wire:model="titulo">
                @error('title')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Contacto:</label>
                <input type="text"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    wire:model="contacto">
                @error('contacto')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">URL local:</label>
                <input type="text"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    wire:model="url_local">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="exampleFormControlInput2" wire:model="descripcion" rows=4></textarea>
            </div>

            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:ml-3 sm:w-auto">
                    <button wire:click="$set('editMode', false)" type="button"
                        class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        Cancelar
                    </button>
                </span>
                <span class="flex w-full rounded-md shadow-sm sm:w-auto">
                    <button wire:click.prevent="store()" type="button"
                        class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        Guardar
                    </button>
                </span>
            </div>
        </form>

        @livewire('comisiones.integrantes')
    </div>
    <div class="bg-white p-8">
        <h5 class="uppercase text-gray-500 border-b mb-8 title-5">Documentos</h5>
    </div>


</div> --}}
        {{--
        <div class="py-8 px-6 sm:py-6 sm:py-4 ">
            <div class="p-6 sm:px-8 bg-white border-b border-gray-200">
                <div class="mt-6 text-gray-500">
                    <h5 class="uppercase text-gray-500 border-b mb-8 title-5">Datos Generales</h5>

                    <form>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Nombre de la Comisión:</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                wire:model="titulo">
                            @error('title')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Contacto:</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                wire:model="contacto">
                            @error('contacto')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">URL local:</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                wire:model="url_local">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput2" wire:model="descripcion" rows=4></textarea>
                        </div>

                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:ml-3 sm:w-auto">
                                <button wire:click="$set('editMode', false)" type="button"
                                    class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                    Cancelar
                                </button>
                            </span>
                            <span class="flex w-full rounded-md shadow-sm sm:w-auto">
                                <button wire:click.prevent="store()" type="button"
                                    class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                    Guardar
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>

            <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center mt-2 text-gray-500">
                        Botones generales
                    </div>
                </div>
            </div>

            <div class="py-8 px-6 sm:py-6 sm:py-4 ">
                <div class="p-6 sm:px-8 bg-white border-b border-gray-200">
                    <div class="mt-6 text-gray-500">
                        <h5 class="uppercase text-gray-500 border-b mb-8 title-5">Datos Generales</h5>
                    </div>
                </div>
            </div>
        </div>

    --}}


