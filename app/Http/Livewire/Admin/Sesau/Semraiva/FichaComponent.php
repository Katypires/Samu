<?php

namespace App\Http\Livewire\Admin\Sesau\Semraiva;

use App\Models\Admin\Sesau\Semraiva\DadoGeral;
use App\Models\Admin\Sesau\Semraiva\Ficha;
use Livewire\Component;

class FichaComponent extends Component
{
    public $fichaId, $dadoGeralId;
    public $status = [];
    public $data = [];
    public $select, $outra, $outro;
    public $controlePagina, $tabela = 0;
    protected $listeners = ['openForm', 'closeFicha'];

    public $openDadoGeral = false;
    public $openFicha = false;

    public function render()
    {
        return view('livewire.admin.sesau.semraiva.ficha-component',['fichas'=>Ficha::with('dado_geral')->get()]);
    }
    
    public function openForm($fichaId)
    {

        //dd("teste");
        if($fichaId == 0)        
        {
            $this->openDadoGeral = true;
        }else
        {
            $this->fichaId = $fichaId;
            $this->openDadoGeral = true;
            $this->openFicha = true;
        }
        //dd( $this->controlePagina);
    }
    
    public function closeFicha($id){
        $this->openDadoGeral = false;
        $this->openFicha = false;
        $this->emit('openForm', ($id));
    }

    public function cancelarFicha(){
        $this->openDadoGeral = false;
        $this->openFicha = false;
        $this->fichaId = null;
    }
}
