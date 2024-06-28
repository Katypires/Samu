<?php

namespace App\Models\Admin\Sesau\Eleicao;

use Kdion4891\LaravelLivewireTables\Column;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votacao extends Model
{
    use HasFactory;

    public $table = 'eleicoes.votacoes';
    // protected $connection = 'eleicao';

    public $fillable = [
        'eleicao_id',
        'eleitor_id',
        'candidato_id',
        'comprovante_id',
        'key',
        'quantidade',
        'status',
    ];

    public $rules = [
        'data.eleicao_id'         => 'required',
        'data.eleitor_id'         => 'required',
        'data.candidato_id'       => 'required',
        'data.comprovante_id'       => 'required',
        'data.key'       => 'required',
        'data.quantidade' => 'required',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public static function columns()
    {
        return [
            Column::make('id')->searchable()->sortable(),
            Column::make('eleicao_id')->searchable()->sortable(),
            Column::make('eleitor_id')->searchable()->sortable(),
            Column::make('candidato_id')->searchable()->sortable(),
            Column::make('comprovante_id')->searchable()->sortable(),
            Column::make('key')->searchable()->sortable(),
            Column::make('quantidade')->searchable()->sortable(),
            Column::make('status')->searchable()->sortable(),
            // Column::make('Ação')->view('livewire.buttons.buttons'),
            Column::make('Ações')->view('livewire.admin.crud.table.actions'),
        ];
    }




}
