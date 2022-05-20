<?php

namespace App\Http\Livewire;

use App\Models\Comision;
use Livewire\Component;

class CRUDComisiones extends Component
{
    public $comisiones, $titulo, $descripcion, $url_local, $comision_id, $comision;
    public $isOpen = 0;

    public function render()
    {
        if ($this->comision != null){
            return view('livewire.s-h-o-w-comisiones');
        }else{
            $this->comisiones = Comision::all();
            return view('livewire.c-r-u-d-comisiones');
        }
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function resetInputFields()
    {
        $this->titulo = '';
        $this->descripripcion = '';
        $this->url_local = '';
        $this->comision_id = '';
    }

    public function store()
    {
        $this->validate([
            'titulo' => 'required',
        ]);

        Comision::updateOrCreate(['id' => $this->comision_id], [
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'url_local' => $this->url_local,
        ]);

        session()->flash('message', $this->comision_id ? 'Los datos de la Comisión se actualizarón.' : 'La Comisión se creo correctamente.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $comision = Comision::findOrFail($id);
        $this->comision_id = $id;
        $this->titulo = $comision->titulo;
        $this->descripcion = $comision->descripcion;
        $this->url_local = $comision->url_local;

        $this->openModal();
    }

    public function show($id)
    {
        $this->comision = Comision::findOrFail($id);
        $this->comision_id = $this->comision->id;
        $this->titulo = $this->comision->titulo;
        $this->descripcion = $this->comision->descripcion;
        $this->url_local = $this->comision->url_local;
    }

    public function delete($id)
    {
        Comision::find($id)->delete();
        session()->flash('message', 'La Comisión se ha eliminado.');
    }
}
