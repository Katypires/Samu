<?php

namespace App\Models\Admin\Sesau\Semraiva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TratamentoAtual extends Model
{
    use HasFactory;
    protected $table = 'semraiva.tratamento_atuais';

    protected $fillable = [ 'tratamento_indicado', 'outro', 'outro_vacina', 'num_lote', 'data_vencimento', 'datas_aplicacao_vacina', 'dose_data_1a', 'dose_data_2a', 'dose_data_3a', 'dose_data_4a','dose_data_5a', 'condicao_final_animal', 'interrupcao_tratamento', 'motivo_interrupcao', 'procura_unidade_saude', 'evento_adverso_vacina', 'indicacao_soro_rabico', 'peso_paciente', 'qtd_soro_aplicada_ml', 'qtd_soro_aplicada', 'infiltracao_soro_local', 'infiltracao_soro_total', 'infiltracao_soro_parcial', 'laboratorio_soro_rabico', 'outro_laboratorio_soro_rabico', 'num_partida', 'evento_adverso_soro_rabico', 'data_encerramento_caso',];
}
