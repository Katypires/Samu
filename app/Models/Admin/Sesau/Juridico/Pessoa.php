<?php

namespace App\Models\Admin\Sesau\Juridico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    protected $table = 'Juridico.pessoas';
    protected $fillable = ['nome', 'cpf', 'cnpj', 'oab'];
}
