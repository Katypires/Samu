<?php

namespace App\Models\Admin\Sesau\Juridico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kdion4891\LaravelLivewireTables\Column;

class SindicanciaPessoa extends Model
{
    use HasFactory;
    protected $table = 'juridico.sindicancia_pessoas';
    protected $fillable = ['sindicancia_id', 'pessoa_id', 'status'];

    public $rules = [
        'data.sindicancia_id' => 'required',
        'data.pessoa_id' => 'required',

    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public static function columns()
    {
        return [
            Column::make('N° de Processo','sindicancia.numero_processo')->searchable()->sortable(),
            Column::make('Nome','pessoa.nome')->searchable()->sortable(),
            //Column::make('Ações')->view('livewire.admin.crud.table.actions'),
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
