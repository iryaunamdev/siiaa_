<?php

namespace App\Http\Livewire\Comisiones;

use App\Models\Comision;
use Livewire\Component;

class Create extends Component
{
    public $titulo, $contacto, $url_local, $descripcion;
    public $comision, $comision_id;
    public $integrantes;

    public function mount($comisionID = null)
    {
        if($comisionID != null)
        {
            $comision = Comision::findOrFail($comisionID);
            $this->titulo = $comision->titulo;
            $this->contacto = $comision->contacto;
            $this->url_local = $comision->url_local;
            $this->descripcion = $comision->descripcion;
            $this->comision_id = $comision->id;

            $this->comision = $comision;
        }
    }

    public function render()
    {

        return view('livewire.comisiones.create');
    }

}
