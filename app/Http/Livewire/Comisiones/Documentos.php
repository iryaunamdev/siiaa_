<?php

namespace App\Http\Livewire\Comisiones;

use Livewire\Component;

class Documentos extends Component
{
    protected $listeners = ['comisionID'];
    protected $rules = [
        'titulo'=>'required',
        'tipo_id'=>'required',
        'fecha'=>'date',
    ];

    public $titulo, $tipo_id, $fecha;
    public $comision_id;
    public $documentos, $documento_id;

    public function render()
    {
        return view('livewire.comisiones.documentos');
    }

    //LISTENERS
    public function comisionID($comisionID)
    {
        $this->comision_id = $comisionID;
    }
}
