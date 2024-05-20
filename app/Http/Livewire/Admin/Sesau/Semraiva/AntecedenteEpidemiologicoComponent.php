<?php

namespace App\Http\Livewire\Admin\Sesau\Semraiva;

use App\Models\Semraiva\AntecedentesEpidemiologicos;
use Livewire\Component;

class AntecedenteEpidemiologicoComponent extends Component
{
    public $data = [];
    public  $fichaId;
    
    
    public function mount($fichaId)
    {
       
        $data = AntecedentesEpidemiologicos::where('ficha_id', $fichaId)->first();
       
        if($data == null){
            $create = AntecedentesEpidemiologicos::Create(['ficha_id' => $fichaId]);
            $data = AntecedentesEpidemiologicos::where('ficha_id', $fichaId)->first();
        }
        $this->data = $data ? $data->getAttributes() : [] ;
        $this->data['ficha_id'] = $fichaId;
    }

    public function render()
    {
        return view('livewire.admin.sesau.semraiva.antecedente-epidemiologico-component');
    }

    public function update(){
        
        $this->validate([
            'data.ficha_id' => 'required',
        ]);

        try{

           AntecedentesEpidemiologicos::find($this->data['id'])->fill($this->data)->save();
            session()->flash('success','FICHA ATUALIZADA COM SUCESSO!!');
    
        }catch(\Exception $e){
            //dd($e);
            session()->flash('error','ERRO!!');
        }
    }
}
