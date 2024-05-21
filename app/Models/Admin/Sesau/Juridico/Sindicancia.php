<?php

namespace App\Models\Admin\Sesau\Juridico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sindicancia extends Model
{
    use HasFactory;
    protected $table = 'juridico.sindicancias';
    protected $fillable = ['nome', 'rg', 'cpf', 'data_nascimento', 'endereco', 'bairro', 'telefone', 'email'];
}
