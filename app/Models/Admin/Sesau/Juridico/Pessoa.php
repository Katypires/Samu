<?php

namespace App\Models\Admin\Sesau\Juridico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kdion4891\LaravelLivewireTables\Column;

class Pessoa extends Model
{
    use HasFactory;
    protected $table = 'juridico.pessoas';
    protected $fillable = ['nome', 'cpf', 'cnpj', 'oab', 'status'];

    public $rules = [
        'data.nome' => 'required',
        'data.cpf' => 'required',
        
    ];

    protected $casts = [
        'cnpj' => 'string',
        'oab' => 'string',
        'status' => 'boolean',
    ];

    public static function columns()
    {
        return [
            // Column::make('ID')->searchable()->sortable(),
            Column::make('Nome','nome')->searchable()->sortable(),
            Column::make('CPF','cpf')->searchable()->sortable(),
            Column::make('CNPJ','cnpj')->searchable()->sortable(),
            Column::make('OAB','oab')->searchable()->sortable(),
            Column::make('Ações')->view('livewire.admin.crud.table.actions'),
        ];
    }
}
