<?php

namespace App\Models\Admin\Sesau\Juridico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSituacao extends Model
{
    use HasFactory;
    protected $table = 'juridico.tipo_situacaos';
    protected $fillable = ['nome', 'status'];
}
