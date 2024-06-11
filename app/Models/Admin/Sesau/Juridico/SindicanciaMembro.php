<?php

namespace App\Models\Admin\Sesau\Juridico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kdion4891\LaravelLivewireTables\Column;

class SindicanciaMembro extends Model
{
    use HasFactory;
    protected $table = 'juridico.sindicancia_membros';
    protected $fillable = ['sindicancia_id', 'membro_id', 'tipo_funcao_membro_id', 'especie', 'numero_ato', 'data_ato', 'numero_diogrande', 'data_publicacao', 'numero_processo_sindicancia', 'data_publicacao_despacho_secretario', 'rubrica' ];

    public $rules = [
        'data.sindicancia_id' => 'required',
        'data.membro_id' => 'required',
        'data.tipo_funcao_membro_id' => 'required',
        
    ];

    protected $casts = [
        'especie' => 'string',
        'numero_ato' => 'string',
        'data_ato' => 'date',
        'numero_diogrande' => 'string',
        'data_publicacao' => 'date',
        'numero_processo_sindicancia' => 'string',
        'data_publicacao_despacho_secretario' => 'date',
        'rubrica' => 'string',
        'status' => 'boolean',
    ];

    public static function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('sindicancia','sindicancia_id')->searchable()->sortable(),
            Column::make ('membro','membro_id')->searchable()->sortable(),
            // Column::make('tipo função membro','tipo_funcao_membro_id')->searchable()->sortable(),
            // Column::make('espécie')->searchable()->sortable(),
            // Column::make('número ato','numero_ato')->searchable()->sortable(),
            // Column::make('data ato','data_ato')->searchable()->sortable(),
            // Column::make('numero diogrande','numero_diogrande')->searchable()->sortable(),
            // Column::make('data publicação','data_publicacao')->searchable()->sortable(),
            Column::make('numero processo sindicancia','numero_processo_sindicancia')->searchable()->sortable(),
            // Column::make('data publicação despacho secretário','data_publicacao_despacho_secretario')->searchable()->sortable(),
            Column::make('rubrica')->searchable()->sortable(),
            //Column::make('Ações')->view('livewire.admin.crudtab.table.actions'),
            Column::make('Ações')->view('admin.sesau.voluntario.table-actions'),
        ];
    }
}
