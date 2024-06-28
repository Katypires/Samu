<?php

namespace App\Models\Admin\Sesau\Eleicao;

use Kdion4891\LaravelLivewireTables\Column;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleitor extends Model
{
    use HasFactory;

    public $table = 'eleicoes.eleitores';
    // protected $connection = 'eleicao';

    public $fillable = [
        'nome', 'cpf', 'status'
    ];

    public $rules = [
        'data.nome'        => 'required',
        'data.cpf'         => 'required',
    ];

    protected $casts = [
        'status'      => 'boolean',
    ];
    
    public static function columns()
    {
        return [
            Column::make('id')->searchable()->sortable(),
            Column::make('nome')->searchable()->sortable(),
            Column::make('cpf')->searchable()->sortable(),
            Column::make('status')->searchable()->sortable(),
            // Column::make('Ação')->view('livewire.buttons.buttons'),
            Column::make('Ações')->view('livewire.admin.crud.table.actions'),
        ];
    }


    public function setNomeAttribute($value)
    {
        $this->attributes['nome'] = strtoupper($value);
    }

}
