<?php

namespace App\Models\Admin\Sesau\Semraiva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kdion4891\LaravelLivewireTables\Column;


class Distrito extends Model
{
    use HasFactory;
    protected $table='semraiva.distritos';

    protected $fillable=['nome', 'codigo','status'];

    public $rules = [
        'data.nome' => 'required|min:1|max:255',
        'data.codigo' => 'required|min:1|max:255',
    ];

    protected $casts = [
        'nome' => 'string',
        'status' => 'boolean',
    ];

    public static function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('Distrito', 'nome')->searchable()->sortable(),
            Column::make('Codigo', 'codigo')->searchable()->sortable(),
           Column::make('Ações')->view('livewire.admin.crud.table.actions'),
        ];
    }
}
