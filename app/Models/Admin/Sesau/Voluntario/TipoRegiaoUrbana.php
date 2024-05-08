<?php

namespace App\Models\Admin\Sesau\Voluntario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoRegiaoUrbana extends Model
{
    use HasFactory;

    protected $fillable = ['nome','status'];
}
