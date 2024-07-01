<?php

namespace App\Http\Livewire\Admin\Sesau\Juridico;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class JuridicoComponent extends Component
{
    public function render()
    {
        $consulta = DB::connection('pgsql')
            ->select("SELECT ts.nome AS tipo_situacao, COUNT(s.id) AS total_situacoes
                      FROM juridico.sindicancias AS s
                      JOIN juridico.tipo_situacaos AS ts
                      ON s.tipo_situacao_id = ts.id
                      GROUP BY ts.nome");


foreach ($consulta as $resultado) {
    echo "Tipo de Situação: " . $resultado->tipo_situacao . ", Total de Situações: " . $resultado->total_situacoes . "<br>";


    $situacoes['categories'][] = $resultado->tipo_situacao;
    $situacoes['series'][] = $resultado->total_situacoes;
}

        return view('livewire.admin.sesau.juridico.juridico-component', compact('situacoes'));
    }
}
