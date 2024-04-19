<?php

namespace App\Models\Admin\Sesau\Semraiva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $table = 'semraiva.pacientes';

    protected $fillable = ['nome', 'status',];
}
