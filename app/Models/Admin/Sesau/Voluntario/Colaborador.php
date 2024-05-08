<?php

namespace App\Models\Admin\Sesau\Voluntario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    protected $fillable=[ 'nome', 'apelido', 'cpf', 'cargo', 'email', 'telefone', 'celular', 'data_inicial', 'data_final', 'nota', 'status'];
}
