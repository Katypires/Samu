<?php

namespace App\Models\Admin\Sesau\Juridico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kdion4891\LaravelLivewireTables\Column;

class TipoFuncaoPessoa extends Model
{
    use HasFactory;
    protected $table = 'juridico.tipo_funcao_pessoas';
    protected $fillable = ['nome', 'status'];

    public $rules = [
        'data.nome' => 'required|min:1|max:255',
    ];

    protected $casts = [
        'nome' => 'string',
        'status' => 'boolean',
    ];

    public static function columns()
    {
        return [
            //Column::make('ID')->searchable()->sortable(),
            Column::make('Nome','nome')->searchable()->sortable(),
            Column::make('Ações')->view('livewire.admin.crud.table.actions'),
        ];
    }
}
