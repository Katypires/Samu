<?php

namespace App\Http\Livewire\Admin\Crudtab;

use Livewire\Component;

class CrudComponent extends Component
{
    public $modal, $modelName, $model, $form, $title, $modalId, $formType, $key;
    public $data = [];
    public $openForm = false;
    public $emitForm;
    
    protected $listeners = [
        'closeFormCrudTab',
        'openCloseFormCrudTab',
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

    public function openCloseFormCrudTab($form,$data)
    {
        // dd($data);
        // $this->data = $data;
        if($data != 0)
        {
            // dd($data);
            $this->data = $data;
            // dd($this->data);
        }
        $this->emitForm = $form;
        $this->openForm =  !$this->openForm;
    }

    public function openEditFormCrudTab($data)
    {    
        //dd("aqui");
        // dd($data, $this->form);
        $this->emitForm = $this->form;
        $this->openForm =  false;
        $this->emit('editCrudTabForm', $data);
    }

    public function openDeleteFormCrudTab($data, $form)
    {
        $this->emitForm = $form;
        $this->openForm =  true;
        $this->emit('deleteCrudTabForm', $data);
    }
}

