<?php

namespace App\Http\Livewire\Admin\Sesau\Semraiva;

use App\Models\Semraiva\AntecedentesEpidemiologicos;
use App\Models\Semraiva\NotificacaoIndividual;
use App\Models\Semraiva\DadoGeral;
use App\Models\Semraiva\DadoResidencia;
use App\Models\Semraiva\Ficha;
use App\Models\Semraiva\TratamentoAtual;
use App\Models\Semraiva\Investigador;
use Illuminate\Auth\Events\Login;
use Livewire\Component;

class DadoGeralComponent extends Component
{
    public $fichaId, $dadoGeralId;
    public $status = [];
    public $data = [];
    public $select, $outra, $outro;
    public bool $editar;
    public $updateLogin;
    public $closeFicha;

    public function mount($fichaId)
    {
        if ($fichaId == "") {
            // dd($this->fichaId);
            $this->fichaId = $fichaId;
            $this->data['ficha_id'] = $fichaId;
            $this->data['tipo_notificacao'] = "SINAN";
            $this->data['agravo_doenca'] = "ATENDIMENTO ANTI-RÁBICO HUMANO";
            $this->data['codigo_cid'] = "W64";
            $this->data['data_notificacao'] = now()->format('Y-m-d');
            $this->data['data_atendimento'] = now()->format('Y-m-d');
            $this->data['uf'] = "MS";
            $this->data['municipio_notificacao'] = "CAMPO GRANDE";
            $this->data['codigo_ibge'] = "5002704";
            $this->data['unidade'] = "CRS DR GUINTER HANS NOVA BAHIA";
            $this->data['codigo'] = "0010073";
            //$this->data['data_atendimento'] = now()->format('Y-m-d');
    
            $this->data['municipio_unidade_saude'] = "CAMPO GRANDE";
            $this->data['cod_unidade_saude'] = "0010073";
            $this->data['nome_investigador'] = "INVESTIGADOR FULANO DE TAL";        
        } else {
            $this->edit($fichaId);
        }
        
       
    }

    public function render()
    {       
        return view('livewire.admin.sesau.semraiva.dado-geral-component');
    }

    public function updatedSelect($value)
    {
        //dd($value);
        $this->select = $value;
    }

    public function resetFields()
    {
        $this->data = [];
        $this->fichaId = null;
        $this->dadoGeralId = null;
    }

    public function store(){
        //dd("string");
        // Validate Form Request
        $this->validate([
            'data.tipo_notificacao' => 'required',
        ]);

        try{
            //dd("string");
            // Create Category
            //DadoGeral::create($this->data[];)
            //'nome', 'tipo', 'numero', 'observacao', 'status'
            $ficha = Ficha::create([
                'nome'=> "SINAN",
                'tipo'=> "ATENDIMENTO ANTI-RÁBICO HUMANO",
                'numero'=>123,
                'observacao'=>'observacao',
                'status'=>true
            ]);

            //dd($ficha->id);
            DadoGeral::create([
                'ficha_id' => $ficha->id,
                'tipo_notificacao'=>$this->data['tipo_notificacao'],
                'agravo_doenca'=>$this->data['agravo_doenca'],
                'codigo_cid'=>$this->data['codigo_cid'],
                'uf'=>$this->data['uf'],
                'municipio_notificacao'=>$this->data['municipio_notificacao'],
                'codigo_ibge'=>$this->data['codigo_ibge'],
                'data_atendimento'=>$this->data['data_atendimento'],        
                'data_notificacao'=>$this->data['data_notificacao']
            ]);

            AntecedentesEpidemiologicos::create([
                'ficha_id' => $ficha->id,                
            ]);

            //RESTANTE DAS FICHAS
            DadoResidencia::create([
                'ficha_id' => $ficha->id,                
            ]);

            TratamentoAtual::create([
                'ficha_id' => $ficha->id,                
            ]);

            Investigador::create([
                'ficha_id' => $ficha->id,                
            ]);
           
         
            $this->emit('closeFicha', ($ficha->id));          
            session()->flash('success','Login Created Successfully!!');
            
            
        }catch(\Exception $e){
            dd($e);
            // Set Flash Message
            session()->flash('error','Something goes wrong while creating produto!!');
            // Reset Form Fields After Creating Category
            $this->resetFields();
        }
        $this->resetFields();
        $this->closeFicha = true;
    }

    public function edit($id){       
      

        $ficha = Ficha::findOrFail($id);
        $this->fichaId = $ficha->id;
        $this->dadoGeralId = $ficha->dado_geral->id;
        $this->data['ficha_id'] = $id;
        $this->data['tipo_notificacao'] = $ficha->dado_geral->tipo_notificacao;
        $this->data['agravo_doenca'] = $ficha->dado_geral->agravo_doenca;
        $this->data['codigo_cid'] = $ficha->dado_geral->codigo_cid;
        $this->data['uf'] = $ficha->dado_geral->uf;
        $this->data['municipio_notificacao'] = $ficha->dado_geral->municipio_notificacao;
        $this->data['codigo_ibge'] = $ficha->dado_geral->codigo_ibge;
        $this->data['data_atendimento'] = $ficha->dado_geral->data_atendimento;
        $this->data['data_notificacao'] = $ficha->dado_geral->data_notificacao;
        // DD($this->data, $this->fichaId,$this->dadoGeralId,$ficha);


      
    }

    public function cancel()
    {
        $this->updateLogin = false;
        $this->fichaId = null;
        $this->resetFields();
    }

    public function update(){
        
        $this->validate([
            'data.tipo_notificacao' => 'required',
        ]);

        try{
        //    DD($this->data, $this->fichaId,$this->dadoGeralId);
            DadoGeral::find($this->dadoGeralId)->fill([
                'tipo_notificacao'=>$this->data['tipo_notificacao'],
                'agravo_doenca'=>$this->data['agravo_doenca'],
                'codigo_cid'=>$this->data['codigo_cid'],
                'uf'=>$this->data['uf'],
                'municipio_notificacao'=>$this->data['municipio_notificacao'],
                'codigo_ibge'=>$this->data['codigo_ibge'],
                'data_atendimento'=>$this->data['data_atendimento'],        
                'data_notificacao'=>$this->data['data_notificacao']
            ])->save();
            
            session()->flash('success','Produto Updated Successfully!!');
            $this->edit($this->fichaId);          
            // $this->data['ficha_id'] = null;
            
            // $this->cancel();
        }catch(\Exception $e){
            dd($e);
            session()->flash('error','Something goes wrong while updating category!!');
            $this->cancel();
        }
    }
    
    // public function destroy($id){
    //     try{
    //         Login::find($id)->delete();
    //         session()->flash('success',"Category Deleted Successfully!!");
    //     }catch(\Exception $e){
    //         session()->flash('error',"Something goes wrong while deleting category!!");
    //     }
    // }
}
