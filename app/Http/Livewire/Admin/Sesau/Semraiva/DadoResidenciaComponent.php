<?php

namespace App\Http\Livewire\Admin\Sesau\Semraiva;

use App\Models\Semraiva\DadoResidencia;
use Livewire\Component;

class DadoResidenciaComponent extends Component
{
    public $data = [];

    public function render()
    {
        return view('livewire.admin.sesau.semraiva.dado-residencia-component');
    }

    public function storeDadoResidencia(){
        $this->validate([
            'data.municipio_residencia' => 'required',
        ]);

        try {
            //dd($this->data);
            $dadoResidencia = DadoResidencia::create($this->data);
        } catch (\Throwable $th) {
            dd($th);
            session()->flash('message',
            'Não foi possível cadastrar/atualizar informação.');
        }

    }
}
