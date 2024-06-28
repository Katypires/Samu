<?php

namespace App\Models\Admin\Sesau\Eleicao;

use Kdion4891\LaravelLivewireTables\Column;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;

    public $table = 'eleicoes.vw_resultados';
    // protected $connection = 'eleicao';

    public $fillable = [
       'id', 'eleicao', 'candidato_id', 'votos',  'nome', 'status'
    ];

    public $rules = [
        'data.eleicao_id' => 'required',
    ];

    protected $casts = [
        'status'      => 'boolean',
    ];

    public static function columns()
    {
        return [
            Column::make('eleicao')->searchable()->sortable(),
            Column::make('nome')->searchable()->sortable(),
            Column::make('votos')->searchable()->sortable(),

        ];
    }


    public function setNomeAttribute($value)
    {
        $this->attributes['nome'] = strtoupper($value);
    }


}
