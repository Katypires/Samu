<?php

namespace App\Http\Livewire\Admin\Sesau\Semraiva;

use Livewire\Component;
use App\Models\Admin\Sesau\Semraiva\Unidade;


class UnidadeComponent extends Component
{
    public $data=[];
    public $unidadeId;
   
    public function render()
    {
        return view('livewire.admin.sesau.semraiva.unidade-component', ['unidades'=>Unidade::get()]);
    }

    public function store(){
        $this->validate([
            'data.nome' => 'required',
        ]);

        try {

            $unidade = Unidade::create($this->data);

            session()->flash('message', 'Unidade cadastrada com sucesso.');

            $this->resetInputFields();

        } catch (\Throwable $th) {
            dd($th);
            session()->flash('message',
            'Não foi possível cadastrar/atualizar informação.');
        }
    }
    
    public function edit($unidade){

        $this->data = $unidade;
        $this->unidadeId = $unidade['id'];

    }

    public function update(){
        $this->validate([
            'data.nome' => 'required',
        ]);

        try {

            $unidade = Unidade::find($this->unidadeId);
            $unidade->update([
                'nome' => $this->data['nome'],
                'codigo'=>$this->data['codigo'],
                'status'=>$this->data['status'] ? true : false,
            ]);
    
            session()->flash('message', 'Unidade atualizado com sucesso.');
    
            $this->resetInputFields();

        } catch (\Throwable $th) {
            dd($th);
            session()->flash('message',
            'Não foi possível cadastrar/atualizar informação.');
        }
       
    }

    public function delete($id)
    {
        Unidade::find($id)->delete();
        session()->flash('message', 'Post deletado com sucesso.');
    }
    
    public function resetInputFields(){

        $this->data = [];
    }
}
