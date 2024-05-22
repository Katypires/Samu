<?php

namespace App\Models\Admin\Sesau\Juridico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sindicancia extends Model
{
    use HasFactory;
    protected $table = 'juridico.sindicancias';
    protected $fillable = ['tipo_situacao_id', 'numero_processo', 'especie', 'numero_resolucao', 'numero_diogrande', 'data_abertura', 'data_instauracao', 'assunto_fato', 'numero_documento', 'conclusao_decisao', 'data_finalizacao', 'status'];
}
