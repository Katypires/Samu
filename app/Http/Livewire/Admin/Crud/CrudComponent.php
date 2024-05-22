<?php

namespace App\Http\Livewire\Admin\Crud;

use Livewire\Component;

class CrudComponent extends Component
{
    public $modal, $model, $form, $title, $modalId, $formType;
    public $data = [];
    public $openForm = false;
    
    protected $listeners = [
        'closeFormCrud',
        'openCloseFormCrud',
        'openEditFormCrud',
        'openDeleteFormCrud'
    ];

    public function render()
    {
        return view('livewire.admin.crud.crud-component');
    }

    public function closeFormCrud()
    {
        $this->openForm =  false;
    }

    public function openCloseFormCrud()
    {
        $this->openForm =  !$this->openForm;
    }

    public function openEditFormCrud($data)
    {
        $this->openForm =  true;
        $this->emit('editCrudForm', $data);
    }

    public function openDeleteFormCrud($data)
    {
        $this->openForm =  true;
        $this->emit('deleteCrudForm', $data);
    }
}
