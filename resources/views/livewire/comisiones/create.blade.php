<h5 class="uppercase text-gray-500 border-b mb-8 title-5">Datos Generales</h5>

<form>
    <div class="mb-4">
        <input type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            wire:model="titulo" placeholder="Nombre de la Comisión">
        @error('title')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-4">
        <input type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            wire:model="contacto"placeholder="Contacto">
        @error('contacto')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-4">
        <input type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            wire:model="url_local" placeholder="URL local">
    </div>
    <div class="mb-4">
        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="exampleFormControlInput2" wire:model="descripcion" rows=4></textarea>
            <p class="italic text-xs text-gray-300">Descripción breve de las funciones de la Comisión</p>
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
