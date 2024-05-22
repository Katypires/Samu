<?php

namespace App\Models\Admin\Sesau\Juridico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oitiva extends Model
{
    use HasFactory;
    protected $table = 'juridico.oitivas';
    protected $fillable = ['sindicancia_id', 'pessoa_id', 'data_oitiva', 'local', 'relatorio', 'status'];
}
