<div class="py-8 sm:py-6 sm:px-6 lg:px-8">
    <div class="p-6 rounded-lg shadow-lg bg-white">
        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Comisiones</h5>

        <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4" id="tabs-tab"
  role="tablist">
  <li class="nav-item" role="presentation">
    <a href="#tabs-generales" class="nav-link block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent active" id="tabs-generales-tab" data-bs-toggle="pill" data-bs-target="#tabs-generales" role="tab" aria-controls="tabs-generales"
      aria-selected="true">Información general</a>
  </li>
  <li class="nav-item" role="presentation">
    <a href="#tabs-integrantes" class="nav-link block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent" id="tabs-integrantes-tab" data-bs-toggle="pill" data-bs-target="#tabs-integrantes" role="tab" aria-controls="tabs-integrantes" aria-selected="false">
        Integrantes
    </a>
  </li>
  <li class="nav-item" role="presentation">
    <a href="#tabs-documentos" class="nav-link block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent" id="tabs-documentos-tab" data-bs-toggle="pill" data-bs-target="#tabs-documentos" role="tab" aria-controls="tabs-documentos" aria-selected="false">
        Documentos
    </a>
  </li>
</ul>

<div class="tab-content" id="tabs-tabContent">
  <div class="tab-pane fade show active" id="tabs-generales" role="tabpanel" aria-labelledby="tabs-generales-tab">
    @livewire('comisiones.comisiones')
  </div>
  <div class="tab-pane fade" id="tabs-integrantes" role="tabpanel" aria-labelledby="tabs-integrantes-tab">
    @livewire('comisiones.integrantes')
  </div>
  <div class="tab-pane fade" id="tabs-documentos" role="tabpanel" aria-labelledby="tabs-documentos-tab">
    @livewire('comisiones.documentos')
</div>




        <button type="button"
            class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Aceptar</button>
    </div>
</div>
