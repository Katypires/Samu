<?php

namespace App\Models\Admin\Sesau\Eleicao;

use Kdion4891\LaravelLivewireTables\Column;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleicao extends Model
{
    use HasFactory;

    public $table = 'eleicoes.eleicoes';
    // protected $connection = 'eleicao';

    public $fillable = [
        'nome', 'data_inicial', 'data_final', 'candidatos', 'min_votantes', 'max_votantes', 'status'
    ];

    protected $casts = [
        'data_inicial' => 'datetime',
        'data_final' => 'datetime',
        'candidatos' => 'integer',
        'min_votantes' => 'integer',
        'max_votantes' => 'integer',
        'status' => 'boolean',
    ];

    public $rules = [
        'data.nome' => 'required',
        'data.data_inicial' => 'required',
        'data.data_final' => 'required',
        'data.candidatos' => 'required',
        'data.min_votantes' => 'required',
        'data.max_votantes' => 'required',
    ];

    public static function columns()
    {
        return [
            Column::make('id')->searchable()->sortable(),
            Column::make('nome')->searchable()->sortable(),
            Column::make('data_inicial')->searchable()->sortable(),
            Column::make('data_final')->searchable()->sortable(),
            Column::make('candidatos')->searchable()->sortable(),
            Column::make('min_votantes')->searchable()->sortable(),
            Column::make('max_votantes')->searchable()->sortable(),
            Column::make('status')->searchable()->sortable(),
            Column::make('Ações')->view('livewire.admin.crud.table.actions'),
        ];
    }

}
