<?php

namespace App\Http\Livewire\Admin\Sesau\Voluntario;

use Livewire\Component;
use Livewire\WithPagination;


class DropdownComponent extends Component
{
    public $model, $columnName, $columnId, $titulo, $columns,$colunas,$value,$label;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount($columnName, $columnId, $titulo, $model,$value){
   
        //dd($columnName,$columnId,$title,$model,$label,$value);
        $this->columnName = $columnName;
        $this->columnId = $columnId;
        $this->titulo = $titulo;
        $this->value = $value;
        $this->model = $model;
        // $this->label = $label;
        // $this->selected = $value;
    }

    public function render()
    {
        $this->columns = app($this->model)::where('status', true)->get();
        
        return view('livewire.admin.sesau.voluntario.dropdown-component',[
            'colunas'=> app($this->model)::paginate(3),
        ]);
    }

    // public function updatedSelecionado($value){
    //     $this->emit('selectedColumn', $value, $this->label);
    // }
}
