<div class="py-12">
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <form>
                            <div class="mb-4">
                                <label for="titulo" class="block text-gray-700 text-sm font-bold mb-2">Nombre de la Comisión:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="titulo" placeholder="Nombre de la Comisión" wire:model="titulo">
                                @error('titulo') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-4">
                                <label for="urllocal" class="block text-gray-700 text-sm font-bold mb-2">URL local:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="urlocal" placeholder="URL local" wire:model="url_local">
                                @error('url_local') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-4">
                                <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" wire:model="descripcion" placeholder="Enter Body" rows=4></textarea>
                                @error('descripcion') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                        </form>

                        <h3>Integrantes</h3>
                    </div>
                    <div>
                        <h3>Documentos</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


