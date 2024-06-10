<?php

namespace App\Http\Livewire\Admin\Crudtab;

use Livewire\Component;

class CrudComponent extends Component
{
    public $modal, $modelName, $model, $form, $title, $modalId, $formType, $key,$modelId;
    public $data = [];
    public $openForm = false;
    public $emitForm;
    
    protected $listeners = [
        'closeFormCrudTab',
        'openCloseFormCrudTab',
        'openModalCrudTab',
        'openEditFormCrudTab',
        'openDeleteFormCrudTab'
    ];

    public function mount($modelName, $formType, $modal, $title, $model, $form)
    {
       $this->modelName = $modelName;
       $this->formType = $formType;
       $this->modal = $modal;
       $this->title = $title;
       $this->model = $model;
       $this->form = $form;
    }

    public function render()
    {
        return view('livewire.admin.crudtab.crud-component');
    }

    public function closeFormCrudTab()
    {
        $this->openForm =  false;
    }

    public function openCloseFormCrudTab($form, $modelName,$emitId)
    {
        // dd($form, $modelName,$emitId);
        // $this->data[$modelName] = $emitId;
        $this->modelId = $emitId;
        $this->emitForm = $form;
        $this->openForm =  !$this->openForm;
        // $this->emit('editCrudTabForm', $data);
    }

    public function openModalCrudTab($data)
    {   
        $this->emitForm = $this->form;
        $this->openForm = false;
        $this->emit('editCrudTabForm', $data);
    }

    public function openEditFormCrudTab($data, $form)
    {   
        $this->emitForm =  $form;
        $this->openForm = true;
        $this->emit('editCrudTabForm', $data);
    }

    public function openDeleteFormCrudTab($data)
    {
        // $this->emitForm = $form;
        $this->openForm =  true;
        $this->emit('deleteCrudTabForm', $data);
    }
}

