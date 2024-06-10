<?php

namespace App\Http\Livewire\Admin\Crudtab;

use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;

class CrudTableComponent extends TableComponent
{
    public $per_page = 5;
    public $checkbox = false;
    protected $paginationTheme = 'bootstrap';
    public $header_view = 'livewire.admin.crudtab.table.header';
    // public $footer_view = 'livewire.admin.crud.table.footer';

    public $model, $form, $title, $modalId, $formType, $modal, $key,$tableAction,$modelName;
    public $emitId = 0;

    protected $listeners = [
        'refreshCrudTabTable'=>'$refresh',
        'editCrudTabForm' => 'x',   
    ];

    public function x($data)
    {
       // dd($data);
        $this->emitId = $data['id'];
        $this->query();
    }

    public function query()
    {
        return $this->model::query()->where($this->modelName, $this->emitId);
    }

    public function columns()
    {
        if(method_exists($this->model, 'columns')){
            return app($this->model)::columns();
        } else {
            return [
                Column::make('ID')->searchable()->sortable(),
                Column::make('Created At')->searchable()->sortable(),
                Column::make('Updated At')->searchable()->sortable(),
            ];
        }
    }

}
