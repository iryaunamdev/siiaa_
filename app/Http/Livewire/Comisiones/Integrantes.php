<?php

namespace App\Http\Livewire\Comisiones;

use App\Models\ComisionIntegrante;
use Livewire\Component;

class Integrantes extends Component
{
    protected $rules = [
        'comision_id'=>'required',
        'nombre'=> 'required',
    ];

    public $nombre, $puesto;
    public $integrantes, $integrante_id;
    public $comision_id;


    public function render()
    {
        $this->comision_id = 2;
        $this->integrantes = ComisionIntegrante::where('comision_id', $this->comision_id)->get();
        return view('livewire.comisiones.integrantes');
    }

    public function store()
    {
        if($this->integrante_id)
        {
            dd('hola');
        }else
        {
            $this->comision_id = 2;
            $integrante = ComisionIntegrante::create([
                'comision_id'=> $this->comision_id,
                'nombre'=> $this->nombre,
                'puesto'=> $this->puesto,
            ]);
        }

        $this->resetInputFields();
        $this->render();
    }

    public function delete($id)
    {
        dd($id);
        $integrante = ComisionIntegrante::find($id)->delete();

        session()->flash('message', 'Integrante eliminado');

    }

    private function resetInputFields()
    {
        $this->comision_id = '';
        $this->nombre = '';
        $this->puesto = '';
    }
}
