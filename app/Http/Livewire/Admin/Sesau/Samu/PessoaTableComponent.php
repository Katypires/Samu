<?php

namespace App\Http\Livewire\Admin\Sesau\Samu;

use App\Model;
use App\Models\Admin\Sesau\Samu\Pessoa;
use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;

class PessoaTableComponent extends TableComponent
{
    public $table_class = 'table-hover table-striped';
    public $thead_class = 'thead-dark';
    public $header_view = 'livewire.admin.sesau.samu.pessoa.table.header';
    public $checkbox = false;

    public function query()
    {
        return Pessoa::query();
    }

    public function columns()
    {
        return [
            // Column::make('ID')->searchable()->sortable(),
            Column::make('nome')->searchable()->sortable(),
            Column::make('rg')->searchable()->sortable(),
            Column::make('cpf')->searchable()->sortable(),
            Column::make('data_nascimento')->searchable()->sortable(),
            Column::make('endereco')->searchable()->sortable(),
        ];
    }
}
