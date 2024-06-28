<?php

namespace App\Models\Admin\Sesau\Eleicao;

use Kdion4891\LaravelLivewireTables\Column;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;
    public $table = 'eleicoes.candidatos';
    // protected $connection = 'eleicao';

    public $fillable = [
        'eleicao_id', 'eleitor_id', 'nome', 'cpf', 'cargo', 'status',
    ];

    public $rules = [
        'data.eleicao_id' => 'required',
        'data.nome' => 'required',
        'data.cpf' => 'required',
        'data.cargo' => 'required',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];


    public static function columns()
    {
        return [
            Column::make('id')->searchable()->sortable(),
            Column::make('eleicao_id')->searchable()->sortable(),
            Column::make('nome')->searchable()->sortable(),
            Column::make('cpf')->searchable()->sortable(),
            Column::make('cargo')->searchable()->sortable(),
            Column::make('status')->searchable()->sortable(),
            Column::make('Ação')->view('livewire.admin.crud.table.actions'),
        ];
    }

}
