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

        $tipos = $this->model::all();

        return view('livewire.admin.sesau.samu.tipo-component', compact('tipos'));
    }


    public function edit($id)
    {
        $data = app($this->model)::findOrFail($id);
        dd($data->attributes());
        $this->data = $data;

    }


    public function store(){


            $this->validate([
                'data.nome' => 'required',
            ]);
        
            try {
                $this->model::create(['nome' => $this->data['nome']]);
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
