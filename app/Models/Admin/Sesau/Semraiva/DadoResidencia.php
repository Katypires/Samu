<?php

namespace App\Models\Admin\Sesau\Semraiva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadoResidencia extends Model
{
    use HasFactory;
    protected $table = 'semraiva.dado_residencias';

    protected $fillable = ['uf','municipio_residencia','codigo_ibge','distrito','bairro','logradouro','numero','complemento','geo_campo1','geo_campo2','ponto_referencia','cep','telefone','zona','pais',];
}
