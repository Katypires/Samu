<?php

namespace App\Http\Livewire\Admin\Sesau\Voluntario;

use Livewire\Component;
use Livewire\WithPagination;


class DropdownComponent extends Component
{
    public $model, $columnName, $columnId, $titulo, $columns,$value,$label;
    public $selected;
    public $search = '';
    public $color;



    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount($color,$columnName, $columnId, $titulo, $model,$value){
   
        //dd($columnName,$columnId,$title,$model,$label,$value);
        $this->columnName = $columnName;
        $this->columnId = $columnId;
        $this->titulo = $titulo;
        $this->value = $value;
        $this->model = $model;
        $this->color = $color;
        // $this->label = $label;
        // $this->selected = $value;
    }

    public function render()
    {
        $this->columns = app($this->model)::where('status', true)->get();
        
        return view('livewire.admin.sesau.voluntario.dropdown-component',[
            'colunas' => app($this->model)::query()
                ->when($this->search, function ($query){
                    $query->where($this->columnName, 'like', "%{$this->search}%");})->paginate(5),
            // 'colunas'=> app($this->model)::paginate(1),
        ]);
    }

    public function updatedSelected($value){
        // dd($value);
        $this->emit('selectedColumn', $value, $this->label);
    }

    public function updatedSearch($search){
        $this->search = $search;
        $this->render();

    }
}
