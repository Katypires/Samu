<?php

namespace App\Models\Admin\Sesau\Samu;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    protected $table = 'samu.pessoas';
    protected $fillable = ['nome', 'rg', 'cpf', 'data_nascimento', 'endereco', 'bairro', 'telefone', 'email'];
}
