<?php

namespace App\Models\Admin\Sesau\Juridico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SindicanciaPessoa extends Model
{
    use HasFactory;
    protected $table = 'juridico.sindicancia_pessoas';
    protected $fillable = ['sindicancia_id', 'pessoa_id', 'status'];
}
