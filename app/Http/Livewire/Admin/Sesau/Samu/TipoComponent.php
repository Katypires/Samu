<?php

namespace App\Http\Livewire\Admin\Sesau\Samu;

use Livewire\Component;


class TipoComponent extends Component
{
    public $title, $model;
    public $nome, $status, $tipocomponent_id;
    public $isOpen = false;
    public $data = [];

    public function mount($title, $model) {
        $this->title = $title;
        $this->model = $model;
    }

    private function resetInputFields() {
        $this->tipocomponent_id = null;
        $this->nome = '';
        $this->status = true;
    }

    public function edit($id) {
        $tipocomponent_id = TipoComponent::findOrFail($id);
        $this->tipocomponent_id = $id;
        $this->nome = $tipocomponent_id->nome;
        $this->status = $tipocomponent_id->status;

        $this->openModal();
    }

    public function create() {
        $this->resetInputFields();
        $this->openModal();
    }

    public function store() {

        $this->validate([
            'data.nome' => 'required',           
        ]);

        try {
            $this->model::Create($this->data);

       
        } catch (\Throwable $th) {
            session()->flash('message',
            'Não foi possível cadastrar/atualizar informação.');
        }



    }

    public function delete($id) {
        TipoComponent::find($id)->delete();
        session()->flash('Tipo de indicador removido com sucesso.');
    }

    public function openModal() {
        $this->isOpen = true;
    }

    public function closeModal() {
        $this->isOpen = false;
    }

    public function rrender()
    {
        return view('livewire.dant.tipo-indicador-component', ['tipoIndicadores' => TipoComponent::all()]);
    }
    public function render()
    {
        return view('livewire.admin.sesau.samu.tipo-component');
    }
}
