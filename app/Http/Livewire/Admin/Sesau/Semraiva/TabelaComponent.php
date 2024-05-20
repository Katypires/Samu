<?php

namespace App\Http\Livewire\Admin\Sesau\Semraiva;

use Livewire\Component;
use App\Models\Semraiva\Ficha;

class TabelaComponent extends Component
{

    public $teste = false;
    public $controlePagina, $tabela = 0;


    public function render()
    {
        return view('livewire.admin.sesau.semraiva.tabela-component',['fichas'=>Ficha::with('dado_geral')->get()]);
    }

    public function notificaTeste()
    {
        $this->teste = true;
        //dd($this->teste);
    }

    public function delete($id){
        Ficha::find($id)->delete();
    }

}
