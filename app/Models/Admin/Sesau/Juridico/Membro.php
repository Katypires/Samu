<?php

namespace App\Models\Admin\Sesau\Juridico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kdion4891\LaravelLivewireTables\Column;

class Membro extends Model
{
    use HasFactory;
    protected $table = 'juridico.membros';
    protected $fillable = ['nome', 'matricula', 'status'];

    public $rules = [
        'data.nome' => 'required',
        'data.matricula' => 'required',
        
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public static function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('nome')->searchable()->sortable(),
            Column::make('matricula')->searchable()->sortable(),
            Column::make('Ações')->view('livewire.admin.crud.table.actions'),
        ];
    }
}
