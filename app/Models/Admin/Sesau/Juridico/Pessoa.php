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
            Column::make('ID')->searchable()->sortable(),
            Column::make('nome')->searchable()->sortable(),
            Column::make('cpf')->searchable()->sortable(),
            Column::make('cnpj')->searchable()->sortable(),
            Column::make('oab')->searchable()->sortable(),
            Column::make('Ações')->view('livewire.admin.crud.table.actions'),
        ];
    }
}
