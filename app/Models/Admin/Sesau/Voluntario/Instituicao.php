<?php

namespace App\Models\Admin\Sesau\Voluntario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'nome_fantasia', 'razao_social', 'cnpj', 'fone_contato', 'email', 'sigla', 'cep', 
    'numero', 'uf', 'bairro', 'cidade', 'complemento', 'classificacao', 'risco', 'prioridade', 'complexidade', 'situacao', 'status'];
}
