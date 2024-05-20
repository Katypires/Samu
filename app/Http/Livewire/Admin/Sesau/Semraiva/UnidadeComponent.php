<?php

namespace App\Http\Livewire\Admin\Sesau\Semraiva;

use Livewire\Component;
use App\Models\Admin\Sesau\Semraiva\Unidade;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;



class UnidadeComponent extends Component
{
    public $data=[];
    public $unidadeId;
    public $search = '';
    public $openForm = false;

   
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    protected $listeners=['unidade', 'search'];

    public function render()
    {
        return view('livewire.admin.sesau.semraiva.unidade-component', [
            'unidades'=>Unidade::paginate(3)]);
    }


    public function store(){
        $this->validate([
            'data.nome' => 'required',
        ]);

        try {

            $unidade = Unidade::create($this->data);

            session()->flash('message', 'Unidade cadastrada com sucesso.');

            $this->resetInputFields();

        } catch (\Throwable $th) {
            dd($th);
            session()->flash('message',
            'Não foi possível cadastrar/atualizar informação.');
        }
    }
    
    public function edit($unidade){

        $this->data = $unidade;
        $this->unidadeId = $unidade['id'];
        $this->openForm();

    }

    public function update(){
        $this->validate([
            'data.nome' => 'required',
        ]);

        try {

            $unidade = Unidade::find($this->unidadeId);
            $unidade->update([
                'nome' => $this->data['nome'],
                'codigo'=>$this->data['codigo'],
                'status'=>$this->data['status'] ? true : false,
            ]);
    
            session()->flash('message', 'Unidade atualizada com sucesso.');
    
            $this->resetInputFields();

        } catch (\Throwable $th) {
            dd($th);
            session()->flash('message',
            'Não foi possível cadastrar/atualizar informação.');
        }
       
    }

    public function delete($id)
    {
        Unidade::find($id)->delete();
        session()->flash('message', 'Unidade deletada com sucesso.');
    }
    
    public function resetInputFields(){

        $this->data = [];
        $this->unidadeId = null;
    }

    public function unidade($value){
        $this->search = $value;
        $this->render();
    }

    public function search($value){
        $this->search = strtoupper(trim($value));
        $this->render();
    }

    public function openForm(){
        $this->openForm = true;
    }
}
