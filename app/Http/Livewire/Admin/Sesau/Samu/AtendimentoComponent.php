<?php

namespace App\Http\Livewire\Admin\Sesau\Samu;

use Livewire\Component;

class AtendimentoComponent extends Component
{
    public $atendimento = [];

    public function mount()
    {
        $this->atendimento['data_atendimento'] = '';
        $this->atendimento['horario'] = '';
        $this->atendimento['endereco'] = '';
        $this->atendimento['fato_acontecido'] = '';
        $this->atendimento['transportado_para'] = '';
        $this->atendimento['observacao'] = '';
    }
    
    public function store()
    {
        $this->validate([
            'atendimento.data_atendimento' => 'required',
            'atendimento.horario' => 'required',
            'atendimento.endereco' => 'required',
            'atendimento.fato_acontecido' => 'required',
            'atendimento.transportado_para' => 'required',
            'atendimento.observacao' => 'required',
        ]);
    
            
        session()->flash('message', 'Atendimento adicionado com sucesso.');
    }
    
    public function render()
    {
        return view('livewire.admin.sesau.samu.atendimento-component');
    }
}
