<?php

namespace App\Models\Admin\Sesau\Semraiva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadoGeral extends Model
{
    use HasFactory;

    protected $table = 'semraiva.dado_gerais';

    protected $fillable = ['ficha_id', 'unidade_id','tipo_notificacao', 'agravo_doenca', 'codigo_cid', 'data_notificacao',
                         'uf', 'municipio_notificacao', 'codigo_ibge', 'data_atendimento'];
    
}
