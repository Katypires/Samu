<?php

namespace App\Http\Livewire\Admin\Sesau\Semraiva;

use App\Models\Admin\Sesau\Semraiva\Investigador;
use Livewire\Component;

class InvestigadorComponent extends Component
{
    public $data=[];

    public function render()
    {
        return view('livewire.admin.sesau.semraiva.investigador-component');
    }

    public function storeInvestigador(){
        $this->validate([
            'data.municipio_unidade_saude' => 'required',
        ]);

        try {
            //dd($this->data);
            $investigador = Investigador::create($this->data);
        } catch (\Throwable $th) {
            dd($th);
            session()->flash('message',
            'Não foi possível cadastrar/atualizar informação.');
        }
    }
}
