<?php

namespace App\Models\Admin\Sesau\Voluntario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kdion4891\LaravelLivewireTables\Column;


class Colaborador extends Model
{
    use HasFactory;
    // protected $connection = 'voluntario';
    protected $table = 'voluntario.colaboradores';


    protected $fillable=[ 'nome', 'apelido', 'cpf','empresa', 'cargo', 'email', 'telefone', 'celular', 'data_inicial', 'data_final', 'nota', 'status'];

    public $rules = [   
        'data.nome' => 'required',
        'data.empresa' => 'required',
        'data.email' => 'required',
    ];

    public static function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('Nome do Colaborador', 'nome')->searchable()->sortable(),
            Column::make('Empresa', 'empresa')->searchable()->sortable(),
            Column::make('Email', 'email')->searchable()->sortable(),

            Column::make('Ações')->view('livewire.admin.crud.table.actions'),
        ];
    }
}
