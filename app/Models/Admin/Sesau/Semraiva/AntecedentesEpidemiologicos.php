<?php

namespace App\Models\Semraiva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntecedentesEpidemiologicos extends Model
{
    use HasFactory;
    protected $table = 'semraiva.antecedentes_epidemiologicos';

    protected $fillable = ['ficha_id','ocupacao', 'tipo_expocidao_viru_rabico', 'contato_indireto', 'arranhaura',
                         'lambedura', 'mordedura', 'outro', 'mucosa', 'cabeca_pescoco', 'maos_pe', 'tronco', 'membro_superiores',
                        'membros_inferiores', 'ferimento', 'tipo_ferimento', 'profundo', 'superficial', 'dilacerante', 'data_exposicao',
                    'tem_antecedentes_de_tratamento_anti_rabico', 'pre_exposicao', 'pos_exposicao', 'se_foi_quando_foi_concluido',
                'numeros_doses_aplicadas', 'especie_animal', 'outra', 'condicao_animal', 'animal_passivel_observacao'];
}
