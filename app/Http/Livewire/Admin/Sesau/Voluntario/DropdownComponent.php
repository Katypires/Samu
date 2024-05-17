<?php

namespace App\Http\Livewire\Admin\Sesau\Voluntario;

use Livewire\Component;
use Livewire\WithPagination;


class DropdownComponent extends Component
{
    public $model, $columnName, $columnId, $titulo, $columns,$colunas;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $this->columns = app($this->model)::where('status', true)->get();
        
        return view('livewire.admin.sesau.voluntario.dropdown-component',[
            'colunas'=> app($this->model)::paginate(3),
        ]);
    }
}