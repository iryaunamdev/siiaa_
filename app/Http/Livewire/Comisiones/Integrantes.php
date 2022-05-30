<?php

namespace App\Http\Livewire\Comisiones;

use App\Models\ComisionIntegrante;
use Livewire\Component;

class Integrantes extends Component
{
    protected $listeners = ['comisionID'];
    protected $rules = [
        'comision_id'=>'required',
        'nombre'=> 'required',
    ];

    public $nombre, $puesto;
    public $integrantes, $integrante_id;
    public $comision_id;

    public function render()
    {
        $this->integrantes = ComisionIntegrante::where('comision_id', $this->comision_id)->get();
        return view('livewire.comisiones.integrantes');
    }

    public function store()
    {
        $this->validate();

        if($this->integrante_id)
        {
            $integrante = ComisionIntegrante::findOrFail($this->integrante_id);
            $integrante->update([
                'nombre'=> $this->nombre,
                'puesto'=> $this->puesto,
            ]);
        }else
        {
            $integrante = ComisionIntegrante::create([
                'comision_id'=> $this->comision_id,
                'nombre'=> $this->nombre,
                'puesto'=> $this->puesto,
            ]);

            $integrante->save();
        }
    }

    public function delete($id)
    {
        //dd($id);
        $integrante = ComisionIntegrante::find($id)->delete();
        session()->flash('message', 'Integrante eliminado');

    }

    //Listeners
    public function comisionID($comisionID)
    {
        $this->comision_id = $comisionID;
    }
}
