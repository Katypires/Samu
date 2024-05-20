<?php

namespace App\Models\Admin\Sesau\Semraiva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;
    protected $table = 'semraiva.fichas';

    protected $fillable = [ 'nome', 'numero', 'tipo', 'status',];

    public function unidades(){
        return $this->hasOne(Unidade::class);
    }

    public function dado_geral(){
        return  $this->hasOne(DadoGeral::class);
    }
}
