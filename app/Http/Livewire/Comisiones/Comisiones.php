<?php

namespace App\Http\Livewire\Comisiones;

use App\Models\Comision;
use Livewire\Component;

class Comisiones extends Component
{
    public $titulo, $contacto, $descripcion, $url_local, $comision_id;

    public $step = 1;

    protected $rules = [
        'titulo' => 'required',
    ];

    public function render()
    {
        return view('livewire.comisiones.comisiones');
    }

    public function resetInputFields()
    {
        $this->titulo = '';
        $this->descripripcion = '';
        $this->url_local = '';
        $this->comision_id = '';
    }

    public function submit()
    {
        $this->emmit('stepEvent', 1);

        /*
        $this->validate();

        Comision::create([
            'titulo' => $this->titulo,
            'contacto' => $this->contacto,
            'url_local' => $this->url_local,
            'descripcion' => $this->descripcion,
        ]);

        $this->resetInputFields();

        session()->flash('message', 'La Comisión se creo correctamente.');
        */
    }

}
