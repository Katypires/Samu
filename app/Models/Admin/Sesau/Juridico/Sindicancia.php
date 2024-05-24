<?php

namespace App\Models\Admin\Sesau\Juridico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kdion4891\LaravelLivewireTables\Column;

class Sindicancia extends Model
{
    use HasFactory;
    protected $table = 'juridico.sindicancias';
    protected $fillable = ['tipo_situacao_id', 'numero_processo', 'especie', 'numero_resolucao', 'numero_diogrande', 'data_abertura', 'data_instauracao', 'assunto_fato', 'numero_documento', 'conclusao_decisao', 'data_finalizacao', 'status'];

    public $rules = [
        'data.numero_processo' => 'required|min:1|max:255',
    ];

    protected $casts = [
        'numero_processo' => 'string',
        'especie' => 'string',
        'numero_resolucao' => 'string',
        'numero_diogrande' => 'string',
        'data_abertura' => 'date',
        'data_instauracao' => 'date',
        'assunto_fato' => 'string',
        'numero_documento' => 'string',
        'conclusao_decisao' => 'string',
        'data_finalizacao' => 'date',
        'status' => 'boolean',
    ];

    public static function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('numero_processo')->searchable()->sortable(),
            Column::make('especie')->searchable()->sortable(),
            Column::make('numero_resolucao')->searchable()->sortable(),
            Column::make('numero_diogrande')->searchable()->sortable(),
            Column::make('data_abertura')->searchable()->sortable(),
            Column::make('data_instauracao')->searchable()->sortable(),
            Column::make('assunto_fato')->searchable()->sortable(),
            Column::make('numero_documento')->searchable()->sortable(),
            Column::make('conclusao_decisao')->searchable()->sortable(),
            Column::make('data_finalizacao')->searchable()->sortable(),
            Column::make('Ações')->view('livewire.admin.crud.table.actions'),
        ];
    }
}
