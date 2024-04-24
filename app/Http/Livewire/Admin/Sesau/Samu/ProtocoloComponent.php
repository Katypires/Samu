<?php

namespace App\Http\Livewire\Admin\Sesau\Samu;

use Livewire\Component;

class ProtocoloComponent extends Component
{
    public $protocolo = [];
    public $tipo = [];

    public function mount()
    {
        $this->protocolo['solicitacao'] = '';
        $this->protocolo['nome'] = '';
        $this->protocolo['rg'] = '';
        $this->protocolo['cpf'] = '';
        $this->protocolo['data_nascimento'] = '';
        $this->protocolo['endereco'] = '';
        $this->protocolo['bairro'] = '';
        $this->protocolo['telefone'] = '';
        $this->protocolo['email'] = '';
        $this->tipo['parentesco'] = '';
        $this->tipo['fim'] = '';
    }

    public function store()
    {
        $this->validate([
            'protocolo.nome' => 'required',
            'protocolo.rg' => 'required',
            'protocolo.cpf' => 'required',
            'protocolo.data_nascimento' => 'required',
            'protocolo.endereco' => 'required',
            'protocolo.bairro' => 'required',
            'protocolo.telefone' => 'required',
            'protocolo.email' => 'required|email',
            'tipo.parentesco' => 'required',
            'tipo.fim' => 'required',
        ]);

        
    }

    public function render()
    {
        return view('livewire.admin.sesau.samu.protocolo-component');
    }
}

