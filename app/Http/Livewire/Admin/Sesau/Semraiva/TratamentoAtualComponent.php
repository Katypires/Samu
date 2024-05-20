<?php

namespace App\Http\Livewire\Admin\Sesau\Semraiva;

use App\Models\Semraiva\TratamentoAtual;
use Livewire\Component;

class TratamentoAtualComponent extends Component
{
    public $data =[];
    public $outro;

    public function render()
    {
        return view('livewire.admin.sesau.semraiva.tratamento-atual-component');
    }

    public function storeTratamentoAtual(){
        $this->validate([
            'data.tratamento_indicado' => 'required',
        ]);

        try {
            //dd($this->data);
            $tratamentoAtual = TratamentoAtual::create($this->data);
        } catch (\Throwable $th) {
            dd($th);
            session()->flash('message',
            'Não foi possível cadastrar/atualizar informação.');
        }

    }
}
