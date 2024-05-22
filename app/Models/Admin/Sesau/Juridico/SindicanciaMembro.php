<?php

namespace App\Models\Admin\Sesau\Juridico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SindicanciaMembro extends Model
{
    use HasFactory;
    protected $table = 'juridico.sindicancia_membros';
    protected $fillable = ['sindicancia_id', 'membro_id', 'tipo_funcao_membro_id', 'especie', 'numero_ato', 'data_ato', 'numero_diogrande', 'data_publicacao', 'numero_processo_sindicancia', 'data_publicacao_despacho_secretario', 'rubrica' ];
}
