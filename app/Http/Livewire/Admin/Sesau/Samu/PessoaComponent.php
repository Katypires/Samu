<?php

namespace App\Http\Livewire\Admin\Sesau\Samu;

use Livewire\Component;

class PessoaComponent extends Component
{
    public $pessoa = [];

    public function mount()
    {
        $this->pessoa['solicitacao'] = '';
        $this->pessoa['nome'] = '';
        $this->pessoa['rg'] = '';
        $this->pessoa['cpf'] = '';
        $this->pessoa['data_nascimento'] = '';
        $this->pessoa['endereco'] = '';
        $this->pessoa['bairro'] = '';
        $this->pessoa['telefone'] = '';
        $this->pessoa['email'] = '';
    }

    public function store()
    {
        $this->validate([
            'pessoa.nome' => 'required',
            'pessoa.rg' => 'required',
            'pessoa.cpf' => 'required',
            'pessoa.data_nascimento' => 'required',
            'pessoa.endereco' => 'required',
            'pessoa.bairro' => 'required',
            'pessoa.telefone' => 'required',
            'pessoa.email' => 'required|email',
        ]);

        
        session()->flash('message', 'Pessoa adicionada com sucesso.');
    }

    public function render()
    {
        return view('livewire.admin.sesau.samu.pessoa-component');
    }
}
