<?php

namespace App\Models\Admin\Sesau\Voluntario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kdion4891\LaravelLivewireTables\Column;


class Instituicao extends Model
{
    use HasFactory;
    protected $connection = 'voluntario';
    protected $table = 'voluntario.instituicoes';

    public $rules = [   
        'data.nome' => 'required|min:1|max:255',
    ];

    protected $fillable = ['nome', 'descricao', 'nome_fantasia', 'razao_social', 'cnpj', 'fone_contato', 'email', 'sigla', 'cep', 
    'numero', 'uf', 'bairro', 'cidade', 'complemento', 'classificacao', 'risco', 'prioridade', 'complexidade', 'situacao', 'status'];

    public static function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('Instituicao', 'nome_fantasia')->searchable()->sortable(),
            Column::make('Telefone de Contato', 'fone_contato')->searchable()->sortable(),
            Column::make('Email', 'email')->searchable()->sortable(),
            Column::make('Ações')->view('livewire.admin.crud.table.actions'),
        ];
    }
}
