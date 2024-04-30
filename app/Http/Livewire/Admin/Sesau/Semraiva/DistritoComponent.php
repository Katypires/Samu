<?php

namespace App\Http\Livewire\Admin\Sesau\Semraiva;

use Livewire\Component;
use App\Models\Admin\Sesau\Semraiva\Distrito;


class DistritoComponent extends Component
{
    public $data=[];
    public $distritoId;

    public function render()
    {
        return view('livewire.admin.sesau.semraiva.distrito-component', ['distritos'=>Distrito::get()]);
    }

    public function store(){
        $this->validate([
            'data.nome' => 'required',
        ]);

        try{
            $distrito = Distrito::create($this->data);

            session()->flash('message', 'Distrito cadastrado com sucesso.');

            $this->resetInputFields();

        }catch (\Throwable $th){
            session()->flash('message',
            'Não foi possível cadastrar/atualizar informação.');
        }
    }

    public function edit($distrito){
        $this->data = $distrito;
        $this->distritoId = $distrito['id'];

    }

    public function update(){
        $this->validate([
            'data.nome' => 'required',
        ]);

        try{
            $distrito = Distrito::find($this->distritoId);
            $distrito->update([
                'nome' => $this->data['nome'],
                'codigo'=>$this->data['codigo'],
                'status'=>$this->data['status'] ? true : false,
            ]);

            session()->flash('message', 'Unidade atualizada com sucesso.');
            $this->resetInputFields();

        }catch (\Throwable $th){
            session()->flash('message',
            'Não foi possível cadastrar/atualizar informação.');
        }
    }

    public function delete($id){
        Distrito::find($id)->delete();
        session()->flash('message', 'Distrito deletado com sucesso.');
    }

    public function resetInputFields(){
        $this->data = [];
        $this->distritoId = null;
    }
}
