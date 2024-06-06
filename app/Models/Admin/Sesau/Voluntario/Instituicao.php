<?php

namespace App\Models\Admin\Sesau\Voluntario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kdion4891\LaravelLivewireTables\Column;


class Instituicao extends Model
{
    use HasFactory;
    // protected $connection = 'voluntario';
    protected $table = 'voluntario.instituicoes';

    protected $fillable = ['tipo_atividade_id', 'tipo_seguimento_id', 'tipo_regiao_urbana_id', 'nome', 'descricao', 'nome_fantasia', 'razao_social', 'cnpj','telefone', 'fone_contato', 'email', 'sigla', 'cep','endereco', 'numero', 'uf', 'bairro', 'cidade', 'complemento', 'classificacao', 'risco', 'prioridade', 'complexidade', 'situacao','cv','pe', 'status'];

    public $rules = [   
        'data.tipo_atividade_id' => 'required',
        'data.tipo_seguimento_id' => 'required',
        'data.tipo_regiao_urbana_id' => 'required',
        'data.nome_fantasia' => 'required|min:1|max:255',
    ];

    public static function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('Instituicao', 'nome_fantasia')->searchable()->sortable(),
            Column::make('Email', 'email')->searchable()->sortable(),
            Column::make('Colaborador')->view('livewire.admin.sesau.voluntario.colaborador.table.actions'),
            Column::make('Ações')->view('livewire.admin.crud.table.actions'),
        ];
    }
}
