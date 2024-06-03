<?php

namespace App\Http\Livewire\Admin\Crudtab;

use Livewire\Component;

class CrudFormComponent extends Component
{
    public $model, $modelName,  $form, $title, $modalId, $type, $formType,$modal;
    public $data = [];
    public $openForm = false;
    
    protected $listeners = [
        'editCrudTabForm' => 'edit',
        'deleteCrudTabForm' => 'delete',
        'selectedColumn',
        'selectedTitulo'
    ];

  

    public function mount($modelName, $formType, $modal, $title, $model, $form){       
        $this->modelName = $modelName;
        $this->formType = $formType;
        $this->modal = $modal;
        $this->title = $title;
        $this->model = $model;
        $this->form = $form;
    }

    public function render()
    {
        return view('livewire.admin.crudtab.crud-form-component');
    }

    public function edit($data){       
        //dd($data);
        try {
           $this->type = 'update';
           $this->data = $data;
           $this->data[$this->modelName] = $data['id'];
        } catch (\Exception $ex) {
            session()->flash('error','Algo deu errado!!');
        }
    }

    public function delete($data){       
        try {
           $this->type = 'delete';
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
            $this->emit('refreshCrudTabTable');
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
            $this->emit('refreshCrudTabTable');
            $this->resetFields();
        } catch (\Exception $ex) {
            session()->flash('success','Algo deu errado!!');
        }
    }

    public function destroy()
    {
        try{
            $destroy = app($this->model)::find($this->data['id']);
            $destroy ? $destroy->delete() : false;
            session()->flash('success',"Deletado com sucesso!!");
            $this->emit('refreshCrudTabTable');
            $this->emit('openCloseFormCrud');
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

    public function selectedColumn($value, $label){
        $this->data[$label] = $value;
    }

    public function selectedTitulo($value, $label){
        $this->data[$label] = $value;
    }

}
