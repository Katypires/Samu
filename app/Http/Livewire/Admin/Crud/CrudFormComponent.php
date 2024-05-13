<?php

namespace App\Http\Livewire\Admin\Crud;

use Livewire\Component;

class CrudFormComponent extends Component
{
    public $model, $form, $title, $modalId;
    public $data = [];

    public function render()
    {
        return view('livewire.admin.crud.crud-form-component');
    }

    protected $listeners = [
        'editListner'=>'edit',
        'deleteListner'=>'delete',
    ];

    public function edit($data){
        try {
           $this->data = $data;
        } catch (\Exception $ex) {
            session()->flash('error','Algo deu errado!!');
        }
    }

    public function store()
    {
        $this->validate(app($this->model)->rules);
        try {
            app($this->model)::create($this->data);
            session()->flash('success','Criado com sucesso!!');
            $this->resetFields();
        } catch (\Exception $ex) {
            session()->flash('error','Algo deu errado!!');
        }
    }

    public function update()
    {
        $this->validate(app($this->model)->rules);
        try {
            app($this->model)::whereId($this->data['id'])->update($this->data);
            session()->flash('success','Atualizado com sucesso!!');
            $this->resetFields();
        } catch (\Exception $ex) {
            session()->flash('success','Algo deu errado!!');
        }
    }

    public function delete()
    {
        try{
            $destroy = app($this->model)::find($this->data['id']);
            $destroy ? $destroy->delete() : false;
            session()->flash('success',"Deletado com sucesso!!");
        }catch(\Exception $e){
            session()->flash('error',"Algo deu errado!!");
        }
    }

    public function cancel()
    {
        $this->resetFields();
    }

    private function resetFields(){
        $this->resetErrorBag();
        $this->resetValidation();
        $this->data = [];
    }

}
