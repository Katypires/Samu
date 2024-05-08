<?php

namespace App\Http\Livewire\Admin\Sesau\Samu;

use Livewire\Component;
use App\Models\Admin\Sesau\Samu\TipoPrazo;
use App\Models\Admin\Sesau\Samu\TipoFim;
use App\Models\Admin\Sesau\Samu\TipoParentesco;

class TipoComponent extends Component
{
    public $nome, $data = [];
    public $tipo;
    public $form, $title, $model;
    public $tipoId, $tipoprazo, $tipofim, $tipoparentesco;

    public function mount($title, $model, $form)
    {
        $this->title = $title;
        $this->model = $model;
        $this->form = $form;
    }

    public function render()
    {

        // Recupera os registros de cada tipo
        $tipos = $this->model::all();

        // Retorna a view com o formulário correto incluído
        return view('livewire.admin.sesau.samu.tipo-component', compact('tipos'));
    }


    public function edit($id)
    {
        $data = app($this->model)::findOrFail($id);
        dd($data->attributes());
        $this->data = $data;

        // $this->tipoId = $tipoId; // Armazenamos o tipo de registro

        // // Dependendo do tipo, carregamos os dados do registro correspondente
        // $this->tipoprazo = $this->model::find($tipoId);
        // $this->tipofim = $this->model::find($tipoId);
        // $this->tipoparentesco = $this->model::find($tipoId);
    }

    public function store()
    {
        // Lógica de validação condicional baseada no tipo
        if ($this->title !== 'Tipo Fins') {
            $this->validate([
                'nome' => 'required',
            ]);
        }
    
        try {
            // Lógica de criação do registro
            if ($this->title === 'Tipo Prazo') {
                TipoPrazo::create(['nome' => $this->nome]);
            } elseif ($this->title === 'Tipo Fins') {
                // Criação do registro para Tipo Fins com base no valor selecionado no <select>
                TipoFim::create([
                    'dpvat' => $this->tipo['fim'] === 'D' ? 1 : null,
                    'inss' => $this->tipo['fim'] === 'I' ? 1 : null,
                    'judicial' => $this->tipo['fim'] === 'J' ? 1 : null,
                    'outros' => $this->tipo['fim'] === 'O' ? 1 : null,
                ]);
            } elseif ($this->title === 'Tipo Parentesco') {
                TipoParentesco::create(['nome' => $this->nome]);
            }
    
            // Limpa os campos do formulário
            $this->resetInputFields();
            session()->flash('message', 'Registro cadastrado com sucesso.');
        } catch (\Throwable $th) {
            session()->flash('message', 'Não foi possível cadastrar informação.');
        }

        dd($this->nome); 
        dd($this->tipo['fim']);
    }
    


    public function update()
    {
        $this->validate([
            'nome' => 'required',
        ]);


        $this->model::find($this->tipo_id)->fill([
            'nome' => $this->nome,
            // 'status' => $this->status,
        ])->save();

        session()->flash('message', 'Registro atualizado com sucesso.');
        $this->reset();
    }

    public function destroy($id)
    {
        try {
            $item = $this->model::find($id);
            $item ? $item->delete() : null;
            session()->flash('success', "Category Deleted Successfully!!");
        } catch (\Exception $e) {
            session()->flash('error', "Something goes wrong while deleting category!!");
        }
    }
}
