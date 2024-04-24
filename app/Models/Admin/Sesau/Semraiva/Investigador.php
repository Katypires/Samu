<?php

namespace App\Models\Admin\Sesau\Semraiva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigador extends Model
{
    use HasFactory;
    protected $table = 'semraiva.investigadores';

    protected $fillable = ['municipio_unidade_saude', 'cod_unidade_saude', 'nome_investigador', 'funcao_investigador', 'assinatura_investigador'];
}
