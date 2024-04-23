<?php

namespace App\Http\Livewire\Admin\Sesau\Semraiva;

use App\Models\Admin\Sesau\Semraiva\NotificacaoIndividual;
use App\Models\Admin\Sesau\Semraiva\Unidade;
use Livewire\Component;

class FichaComponent extends Component
{

    public $ficha;
    public $notificacao_id;
    public $status = [];
    public $data = [];
    public $select, $outra, $outro;

    public function mount()
    {
        $this->data['tipo_notificacao'] = "ATENDIMENTO ANTI-RÁBICO HUMANO";
        $this->data['agravo'] = "ATENDIMENTO ANTI-RÁBICO HUMANO";
        $this->data['cid'] = "W64";
        $this->data['data_notificacao'] = now()->format('Y-m-d');
        $this->data['uf'] = "MS";
        $this->data['municipio'] = "CAMPO GRANDE";
        $this->data['ibge'] = "5002704";
        $this->data['unidade'] = "CRS DR GUINTER HANS NOVA BAHIA";
        $this->data['codigo'] = "0010073";
        $this->data['data_atendimento'] = now()->format('Y-m-d');

        $this->data['municipio_unidade_saude'] = "CAMPO GRANDE";
        $this->data['cod_unidade_saude'] = "0010073";
        $this->data['nome_investigador'] = "INVESTIGADOR FULANO DE TAL";

        $this->data['ficha_id'] = 1;
        $this->data['paciente_id'] = 1;
    }
   

    public function updatedSelect($value)
    {
        //dd($value);
        $this->select = $value;
    }

    public function render()
    {
        return view('livewire.admin.sesau.semraiva.ficha-component',['unidades'=>Unidade::get()]);
    }

    public function storeNotificacao(){

        $this->validate([
            'data.nome' => 'required',
        ]);
        //dd($this->data);
        try {
            //dd($this->data);
            $notificacaoIndividual = NotificacaoIndividual::create(
                [
                // 'ficha_id' => $this->data['ficha_id'],
                // 'paciente_id' => $this->data['paciente_id'],
                'nome' => $this->data['nome'],
                'data_nascimento' =>$this->data['data_nascimento'],
                'idade' => $this->data['idade'],
                'sexo' => $this->data['sexo'],
                'gestante' => $this->data['gestante'],
                'raca_cor' => $this->data['raca_cor'],
                'escolaridade' =>$this->data['escolaridade'],
                'numero_cartao_sus' =>$this->data['numero_cartao_sus'],
                'nome_mae' => $this->data['nome_mae'],
            ]);

     
        } catch (\Throwable $th) {
            dd($th);
            session()->flash('message',
            'Não foi possível cadastrar/atualizar informação.');
        }


    }


}
