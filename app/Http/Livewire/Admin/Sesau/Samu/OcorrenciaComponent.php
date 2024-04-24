<?php

namespace App\Http\Livewire\Admin\Sesau\Samu;

use Livewire\Component;

class OcorrenciaComponent extends Component
{
    public $ocorrencia = [];

    public function mount()
    {
        $this->ocorrencia['numero'] = '';
        $this->ocorrencia['data'] = '';
        $this->ocorrencia['hora'] = '';
        $this->ocorrencia['natureza'] = '';
        $this->ocorrencia['motivo'] = '';
        $this->ocorrencia['equipe_atendimento'] = '';
        $this->ocorrencia['endereco_ocorrencia'] = '';
        $this->ocorrencia['bairro'] = '';
        $this->ocorrencia['cidade'] = '';
        $this->ocorrencia['declaracao'] = '';
    }

    public function store()
    {
        $this->validate([
            'ocorrencia.numero' => 'required',
            'ocorrencia.data' => 'required',
            'ocorrencia.hora' => 'required',
            'ocorrencia.natureza' => 'required',
            'ocorrencia.motivo' => 'required',
            'ocorrencia.equipe_atendimento' => 'required',
            'ocorrencia.endereco_ocorrencia' => 'required',
            'ocorrencia.bairro' => 'required',
            'ocorrencia.cidade' => 'required',
            'ocorrencia.declaracao' => 'required',
        ]);

        
    }

    public function render()
    {
        return view('livewire.admin.sesau.samu.ocorrencia-component');
    }
}
