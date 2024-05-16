<?php

namespace App\Http\Livewire\Admin\Sesau\Voluntario;

use Livewire\Component;
use Livewire\WithPagination;


class SelectComponent extends Component
{
    public $model, $label, $columnName, $columnId, $columns ,$title;
    public $selected;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $this->columns = app($this->model)::where('status', true)->get();

        return view('livewire.admin.sesau.voluntario.select-component',[
            'colunas' => app($this->model)::paginate(3),
        ]);
    }

    public function updatedSelected($value){
        $this->emit('selectedColumn', $value, $this->label);
    }
}
