<?php

namespace App\Models\Admin\Sesau\Voluntario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Kdion4891\LaravelLivewireTables\Column;


class Colaborador extends Model
{
    use HasFactory;
    protected $connection = 'voluntario';
    // protected $table = 'voluntario.colaboradors';


    protected $fillable=[ 'nome', 'apelido', 'cpf', 'cargo', 'email', 'telefone', 'celular', 'data_inicial', 'data_final', 'nota', 'status'];

    // public static function columns()
    // {
    //     return [
    //         Column::make('ID')->searchable()->sortable(),
    //         Column::make('Instituicao', 'nome')->searchable()->sortable(),
    //         Column::make('Telefone de Contato', 'telefone')->searchable()->sortable(),
    //         Column::make('Email', 'email')->searchable()->sortable(),
    //         Column::make('Ações')->view('livewire.admin.crud.table.actions'),
    //     ];
    // }
}
