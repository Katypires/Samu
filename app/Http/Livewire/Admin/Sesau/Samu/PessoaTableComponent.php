<?php

namespace App\Http\Livewire\Admin\Sesau\Samu;

use App\Model;
use App\Models\Admin\Sesau\Samu\Pessoa;
use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;

class PessoaTableComponent extends TableComponent
{
    public function query()
    {
        return Pessoa::query();
    }

    public function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('Created At')->searchable()->sortable(),
            Column::make('Updated At')->searchable()->sortable(),
        ];
    }
}
