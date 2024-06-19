<?php

namespace App\Exports;

use App\Models\Admin\Sesau\Juridico\Pessoa;
use Maatwebsite\Excel\Concerns\FromCollection;

class PessoaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pessoa::select('nome','cpf')->get();
    }
}
