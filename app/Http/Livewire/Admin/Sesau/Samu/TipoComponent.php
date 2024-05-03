<?php

namespace App\Http\Livewire\Admin\Sesau\Samu;

use Livewire\Component;
use App\Models\Admin\Sesau\Samu\TipoPrazo;
use App\Models\Admin\Sesau\Samu\TipoFim;
use App\Models\Admin\Sesau\Samu\TipoParentesco;

class TipoComponent extends Component
{
    public $nome, $status = [];
    public $tipo; // Esta variável armazenará o tipo de registro (Prazo, Fim ou Parentesco)
    public $form = 'form';
    public $tipoprazo, $tipofim, $tipoparentesco; // Variáveis para cada tipo de registro

    public function edit($tipo)
    {
        $this->tipo = $tipo; // Armazenamos o tipo de registro

        // Dependendo do tipo, carregamos os dados do registro correspondente
        switch ($tipo) {
            case 'prazo':
                $this->tipoprazo = TipoPrazo::first();
                break;
            case 'fim':
                $this->tipofim = TipoFim::first();
                break;
            case 'parentesco':
                $this->tipoparentesco = TipoParentesco::first();
                break;
            default:
                // Limpa as variáveis se o tipo não for reconhecido
                $this->reset();
                break;
        }
    }

    public function create(){
        dd('aqui');
    }


    public function update()
    {
        $this->validate([
            'nome' => 'required',
            // Aqui você pode adicionar mais regras de validação, se necessário
        ]);

        // Dependendo do tipo, atualizamos o registro correspondente
        switch ($this->tipo) {
            case 'prazo':
                $this->tipoprazo->update([
                    'nome' => $this->nome,
                    'status' => $this->status,
                ]);
                break;
            case 'fim':
                $this->tipofim->update([
                    'nome' => $this->nome,
                    'status' => $this->status,
                ]);
                break;
            case 'parentesco':
                $this->tipoparentesco->update([
                    'nome' => $this->nome,
                    'status' => $this->status,
                ]);
                break;
            default:
                // Limpa as variáveis se o tipo não for reconhecido
                $this->reset();
                break;
        }

        session()->flash('message', 'Registro atualizado com sucesso.');
        $this->reset(); // Limpa os campos do formulário após a atualização
    }

    public function delete()
    {
        // Dependendo do tipo, excluímos o registro correspondente
        switch ($this->tipo) {
            case 'prazo':
                $this->tipoprazo->delete();
                break;
            case 'fim':
                $this->tipofim->delete();
                break;
            case 'parentesco':
                $this->tipoparentesco->delete();
                break;
        }

        session()->flash('message', 'Registro excluído com sucesso.');
        $this->reset(); // Limpa as variáveis após a exclusão
    }

    public function render()
    {
        // Recupera os registros de cada tipo
        $tipos_prazo = TipoPrazo::all();
        $tipos_fim = TipoFim::all();
        $tipos_parentesco = TipoParentesco::all();

        // Combina os registros dos três tipos em uma única coleção
        $tipos = $tipos_prazo->merge($tipos_fim)->merge($tipos_parentesco);

        return view('livewire.admin.sesau.samu.tipo-component', compact('tipos'));
    }
}
