<?php

namespace App\Models\Admin\Sesau\Juridico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoFuncaoMembro extends Model
{
    use HasFactory;
    protected $table = 'juridico.tipo_funcao_membros';
    protected $fillable = ['nome', 'status'];
}
