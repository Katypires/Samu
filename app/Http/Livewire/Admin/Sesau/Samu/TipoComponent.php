<?php

namespace App\Http\Livewire\Admin\Sesau\Samu;

use Livewire\Component;
use App\Models\Admin\Sesau\Samu\TipoPrazo;
use App\Models\Admin\Sesau\Samu\TipoFim;
use App\Models\Admin\Sesau\Samu\TipoParentesco;

class TipoComponent extends Component
{
    public $nome, $status = [];
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


    public function edit($tipoId)
    {
        $this->tipoId = $tipoId; // Armazenamos o tipo de registro

        // Dependendo do tipo, carregamos os dados do registro correspondente
        $this->tipoprazo = $this->model::find($tipoId);
        $this->tipofim = $this->model::find($tipoId);
        $this->tipoparentesco = $this->model::find($tipoId);
    }

    public function store()
    {
        $this->validate([
            'nome' => 'required',
        ]);

        try {
            $this->model::create(['nome' => $this->nome]);

            $this->resetInputFields();
        } catch (\Throwable $th) {
            session()->flash('message', 'Não foi possível cadastrar informação.');
        }

        session()->flash('message', 'Registro cadastrado com sucesso.');
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
