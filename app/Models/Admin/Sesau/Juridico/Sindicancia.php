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

    // protected $dates = [
    //     'data_abertura', 'data_instauracao', 'data_finalizacao'
    // ];

    public $rules = [
        'data.numero_processo' => 'required|min:1|max:255',
        'data.tipo_situacao_id' => 'required',
    ];

    protected $casts = [
        'numero_processo' => 'string',
        'especie' => 'string',
        'numero_resolucao' => 'string',
        'numero_diogrande' => 'string',
        'assunto_fato' => 'string',
        'numero_documento' => 'string',
        'conclusao_decisao' => 'string',
        'status' => 'boolean',
    ];

    // public function getDataAberturaAttribute($value)
    // {
    //     return $this->asDateTime($value)->format('Y-m-d');
    // }
    // public function getDataInstauracaoAttribute($value)
    // {
    //     return $this->asDateTime($value)->format('Y-m-d');
    // }
    // public function getDataFinalizacaoAttribute($value)
    // {
    //     return $this->asDateTime($value)->format('Y-m-d');
    // }

    public static function columns()
    {
        return [
               Column::make('N° do Processo','numero_processo')->searchable()->sortable(),
               Column::make('Data de Instauração','data_instauracao')->searchable()->sortable(),
            // Column::make('conclusão','conclusao_decisao')->searchable()->sortable(),
               Column::make('Oitivas','Ações')->view('livewire.admin.sesau.juridico.sindicancia.table.action'),
               Column::make('Ações')->view('livewire.admin.crud.table.actions'),
        ];
    }

    public function oitivas() {
        return $this->hasMany(Oitiva::class);
    }
    public function sindicancia_membros() {
        return $this->hasMany(SindicanciaMembro::class);
    }
    public function sindicancia_pessoas() {
        return $this->hasMany(SindicanciaPessoa::class);
    }

}
