<?php

namespace App\Http\Livewire\Admin\Sesau\Semraiva;

use Livewire\Component;

class ModalComponent extends Component
{
    public $title, $form, $modalId, $icon, $tamanho,$model,$formType, $modal, $modalForm,$tableAction, $corPrimaria, $corSecundaria, $corFooter; 
    
    public function render()
    {
        return view('livewire.admin.sesau.semraiva.modal-component');
    }

    public function updatedTitulo($value){
        // dd($value);
        $this->emit('selectedColumn', $value, $this->label);
    }
}
