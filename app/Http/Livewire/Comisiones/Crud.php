<?php

namespace App\Http\Livewire\Comisiones;

use App\Models\Comision;
use Livewire\Component;

class Crud extends Component
{
    protected $rules = [
        'titulo'=>'required',
    ];

    public $titulo, $contacto, $url_local, $descripcion;
    public $comisiones, $comision_id;
    public $editMode = 0; //variable global diferente al paramatro de 'editMode'

    public function render()
    {

        $this->comisiones = Comision::all();
        return view('livewire.comisiones.crud');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->editMode = true;
    }

    public function edit($id)
    {
        $comision = Comision::findOrFail($id);
        $this->comision_id = $id;
        $this->titulo = $comision->titulo;
        $this->contacto = $comision->contacto;
        $this->url_local = $comision->url_local;
        $this->descripcion = $comision->descripcion;

        $this->editMode = true;
        $this->emit('comisionID', $comision->id);
    }

    public function store()
    {
        $this->validate();

        if($this->comision_id)
        {
            $comision = Comision::findOrFail($this->comision_id);
            $comision->update([
                'titulo' => $this->titulo,
                'contacto' => $this->contacto,
                'url_local' => $this->url_local,
                'descripcion' => $this->descripcion,
            ]);
        }else{
            $comision = Comision::create([
                'titulo' => $this->titulo,
                'contacto' => $this->contacto,
                'url_local' => $this->url_local,
                'descripcion' => $this->descripcion,
            ]);

            $comision->save();
        }
        //dd($comision);
        session()->flash('message', $this->comision_id ? 'La Comision se actualizó.' : 'La Comisión se creó.');

        $this->emit('comisionID', $comision->id);

        //$this->editMode = false;
        //$this->resetInputFields();

    }

    public function editMode($editMode)
    {
        $this->comision_id = $editMode;
    }

    public function delete($id)
    {
        Comision::find($id)->delete();
        session()->flash('message', 'Registro eliminado.');
    }

    private function resetInputFields()
    {
        $this->comision_id = '';
        $this->titulo = '';
        $this->contacto = '';
        $this->url_local = '';
        $this->descripcion = '';
    }

}
