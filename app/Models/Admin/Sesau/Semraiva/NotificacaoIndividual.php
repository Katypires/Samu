<?php

namespace App\Models\Admin\Sesau\Semraiva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificacaoIndividual extends Model
{
    use HasFactory;
    protected $table = 'semraiva.notificacao_individuais';

    protected $fillable = [ 'nome', 'data_nascimento', 'idade', 'sexo', 'gestante', 'raca_cor', 'escolaridade', 'numero_cartao_sus', 'nome_mae'];
}
