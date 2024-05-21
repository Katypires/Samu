<?php

namespace App\Models\Admin\Sesau\Semraiva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kdion4891\LaravelLivewireTables\Column;


class Unidade extends Model
{
    use HasFactory;
    protected $table='semraiva.unidades';

    protected $fillable=['nome','codigo','status'];

    public static function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('Unidade', 'nome')->searchable()->sortable(),
            Column::make('Codigo', 'codigo')->searchable()->sortable(),
            Column::make('Ações')->view('admin.sesau.voluntario.table-actions'),
        ];
    }

}
