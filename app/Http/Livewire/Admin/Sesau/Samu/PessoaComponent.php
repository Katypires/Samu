<?php

namespace App\Http\Livewire\Admin\Sesau\Samu;

use Livewire\Component;
use App\Models\Admin\Sesau\Samu\Pessoa;

class PessoaComponent extends Component
{
    public $pessoa = [];
    public $tipo = [];

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

        try {
            Pessoa::Create($this->pessoa);

       
        } catch (\Throwable $th) {
            session()->flash('message',
            'Não foi possível cadastrar/atualizar informação.');
        }

        
        session()->flash('message', 'Pessoa adicionada com sucesso.');
    }

    public function render()
    {
        // Busque todas as pessoas e passe para a view
        $pessoas = Pessoa::all();

        // Retorne a view com a variável $pessoas
        return view('livewire.admin.sesau.samu.pessoa-component', [
            'pessoas' => \app\Models\Admin\Sesau\Samu\Pessoa::query()
                ->paginate(8),

        ]);
    }
}
