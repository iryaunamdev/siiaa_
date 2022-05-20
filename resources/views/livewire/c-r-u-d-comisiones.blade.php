<div class="py-12">
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <div class="toolbar grid place-content-end">
                    <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded my-3">
                        <i class="fa-light fa-plus"></i>
                        Nueva Comisión
                    </button>
                </div>

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

                @if($isOpen)
                    @include('livewire.comisiones_create')
                @endif

                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-1 w-20">No.</th>
                            <th class="px-4 py-1">Nombre de la comisión</th>
                            <th class="px-4 py-1"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($comisiones as $comision)
                        <tr>
                            <td class="border px-4 py-0 text-right">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-0">
                                <button wire:click="show({{ $comision->id }})" class="hover:text-blue-700 py-2 px-4 rounded">{{ $comision->titulo }}</button>
                            </td>
                            <td class="border px-4 py-0 text-right">
                                <i class="fa-solid fa-user pr-2"></i>
                                <i class="fa-solid fa-file-lines"></i>
                            </td>
                            {{---<td class="border px-4 py-2">
                            <button wire:click="edit({{ $comision->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                            </td>--}}
                        </tr>
                        @endforeach
                    </tbody>


                </table>
            </div>
        </div>
    </div>
</div>


{{--
<div class="py-12">
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Nueva Comisión</button>

            @if($isOpen)
                @include('livewire.comisiones_create')
            @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">No.</th>
                        <th class="px-4 py-2">Nombre de la comisión</th>
                        <th class="px-4 py-2">Descripción</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($comisiones as $comision)
                    <tr>
                        <td class="border px-4 py-2">{{ $comision->id }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('comisiones-show', $comision->id) }}">{{ $comision->titulo }}</a>
                            <button wire:click="edit({{ $comision->id }})" class="hover:text-blue-700 text-gray">{{ $comision->titulo }}</button>
                        </td>
                        <td class="border px-4 py-2">{{ $comision->descripcion }}</td>
                        <td class="border px-4 py-2">
                        <button wire:click="edit({{ $comision->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
--}}
