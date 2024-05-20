<?php

namespace App\Http\Livewire\Admin\Sesau\Semraiva;

use App\Models\Admin\Sesau\Semraiva\Distrito;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;



class DistritoComponent extends Component
{
    public $data=[];
    public $distritoId;
    public $openForm;
    public $search = '';

   
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    protected $listeners=['distrito', 'search'];

    public function render()
    {
        return view('livewire.admin.sesau.semraiva.distrito-component', [
            'distritos'=>Distrito::paginate(3)]);
    }


    public function store(){
        $this->validate([
            'data.nome' => 'required',
        ]);

        try {

            $distrito = Distrito::create($this->data);

            session()->flash('message', 'Distrito cadastrado com sucesso.');

            $this->resetInputFields();

        } catch (\Throwable $th) {
            dd($th);
            session()->flash('message',
            'Não foi possível cadastrar/atualizar informação.');
        }
    }
    
    public function edit($distrito){

        $this->data = $distrito;
        $this->distritoId = $distrito['id'];
        $this->openForm();

    }

    public function update(){
        $this->validate([
            'data.nome' => 'required',
        ]);

        try {

            $distrito = Distrito::find($this->distritoId);
            $distrito->update([
                'nome' => $this->data['nome'],
                'codigo'=>$this->data['codigo'],
                'status'=>$this->data['status'] ? true : false,
            ]);
    
            session()->flash('message', 'Distrito atualizado com sucesso.');
    
            $this->resetInputFields();

        } catch (\Throwable $th) {
            dd($th);
            session()->flash('message',
            'Não foi possível cadastrar/atualizar informação.');
        }
       
    }

    public function delete($id)
    {
        Distrito::find($id)->delete();
        session()->flash('message', 'Distrito deletado com sucesso.');
    }
    
    public function resetInputFields(){

        $this->data = [];
        $this->distritoId = null;
    }

    public function distrito($value){
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
