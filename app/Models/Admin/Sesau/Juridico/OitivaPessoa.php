<?php

namespace App\Models\Admin\Sesau\Juridico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OitivaPessoa extends Model
{
    use HasFactory;
    protected $table = 'juridico.oitiva_pessoas';
    protected $fillable = ['oitiva_id', 'pessoa_id', 'tipo_funcao_pessoa_id', 'status'];
}
