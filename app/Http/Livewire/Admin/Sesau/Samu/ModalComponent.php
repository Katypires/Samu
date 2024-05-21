<?php

namespace App\Http\Livewire\Admin\Sesau\Samu;

use Livewire\Component;

class ModalComponent extends Component
{
    public $title, $form, $modalId, $icon, $tamanho;
    
    public function render()
    {
        return view('livewire.admin.sesau.samu.modal-component');
    }
}
