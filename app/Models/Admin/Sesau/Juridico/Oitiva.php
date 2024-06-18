<?php

namespace App\Models\Admin\Sesau\Juridico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kdion4891\LaravelLivewireTables\Column;

class Oitiva extends Model
{
    use HasFactory;
    protected $table = 'juridico.oitivas';
    protected $fillable = ['sindicancia_id', 'pessoa_id', 'data_oitiva', 'local', 'relatorio', 'status'];

    public $rules = [
        'data.sindicancia_id' => 'required',
        'data.pessoa_id' => 'required',
        
    ];

    protected $casts = [
        
        'local' => 'string',
        'relatorio' => 'string',
        'status' => 'boolean',
    ];


    public static function columns()
    {
        return [
            // Column::make('ID')->searchable()->sortable(),
            // Column::make('sindicancia','sindicancia_id')->searchable()->sortable(),
            Column::make('Nome','pessoa.nome')->searchable()->sortable(),
            // Column::make ('pessoa','pessoa_id')->searchable()->sortable(),
            Column::make('Data da Oitiva','data_oitiva')->searchable()->sortable(),
            Column::make('Local','local')->searchable()->sortable(),
            Column::make('Relatório','relatorio')->searchable()->sortable(),
            //Column::make('Ações')->view('livewire.admin.crudtab.table.actions'),
            Column::make('Ações')->view('admin.sesau.voluntario.table-actions'),
        ];
    }

    public function sindicancia()
    {
        return $this->belongsTo(Sindicancia::class, 'sindicancia_id', 'id');
    }

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id', 'id');
    }
}
