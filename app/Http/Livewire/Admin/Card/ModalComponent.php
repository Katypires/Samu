<?php

namespace App\Http\Livewire\Admin\Card;

use Livewire\Component;

class ModalComponent extends Component
{
    public $title, $form, $modalId, $icon, $tamanho; 
    
    public function render()
    {
        return view('livewire.admin.card.modal-component');
    }
}
