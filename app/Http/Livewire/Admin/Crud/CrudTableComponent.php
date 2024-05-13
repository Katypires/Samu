<?php

namespace App\Http\Livewire\Admin\Crud;

use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;

class CrudTableComponent extends TableComponent
{
    public $per_page = 5;
    public $checkbox = false;
    protected $paginationTheme = 'bootstrap';
    public $header_view = 'livewire.admin.crud.header';
    public $footer_view = '';

    public $model, $form, $title, $modalId;

    public function query()
    {
        return $this->model::query();
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
