<?php

namespace App\Http\Livewire\Admin\Sesau\Voluntario;

use Livewire\Component;

class SelectComponent extends Component
{
    public $model, $label, $columnName, $columnId, $columns ,$title;
    public $selected;

    public function render()
    {
        $this->columns = app($this->model)::where('status', true)->get();

        return view('livewire.admin.sesau.voluntario.select-component');
    }

    public function updatedSelected($value){
        $this->emit('selectedColumn', $value, $this->label);
    }

    
}
