<?php

namespace App\Http\Livewire\Admin\Crud;

use Livewire\Component;

class CrudComponent extends Component
{
    public $modal, $model, $form, $title, $modalId, $formType, $key;
    public $data = [];
    public $openForm = false;
    public $emitForm;
    
    protected $listeners = [
        'closeFormCrud',
        'openCloseFormCrud',
        'openEditFormCrud',
        'openDeleteFormCrud',
        'deleteComponent',
        'editComponent'
    ];

    public function render()
    {
        return view('livewire.admin.crud.crud-component');
    }

    public function closeFormCrud()
    {
        $this->openForm =  false;
    }

    public function openCloseFormCrud($form)
    {
        $this->emitForm = $form;
        $this->openForm =  !$this->openForm;
    }

    public function openEditFormCrud($data, $form)
    {      
          //dd($data, $this->form, $form);
        $this->emitForm = $form;
        $this->openForm =  true;
        $this->emit('editCrudForm', $data);
    }

    public function openDeleteFormCrud($data, $form)
    {
        $this->emitForm = $form;
        $this->openForm =  true;
        $this->emit('deleteCrudForm', $data);
    }
}
