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
    public $type;

   
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    protected $listeners=['unidade', 'search', 'deleteComponent', 'editComponent'];

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
            $this->openForm = false;


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

            // dd($this->namespace);
            Unidade::whereId($this->data['id'])->update($this->data);
            // dd($this->data);
         //    $this->emit('refreshTipoTableComponent', $this->namespace);
     
             session()->flash('message', 'Unidade atualizado com sucesso.');
     
             $this->resetInputFields();
             $this->openForm = false;
    
            $this->resetInputFields();

        } catch (\Throwable $th) {
            dd($th);
            session()->flash('message',
            'Não foi possível cadastrar/atualizar informação.');
        }
       
    }

    // public function delete($id)
    // {
    //     Unidade::find($id)->delete();
    //     session()->flash('message', 'Unidade deletada com sucesso.');
    // }
    
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

    public function closeForm(){
        $this->openForm = false;
    }

    public function deleteComponent($data){
        $this->data = $data;
        $this->type = 'delete';
        $this->openForm();
    }

    public function editComponent($data){
        $this->data = $data;
        $this->type = 'update';
        $this->openForm();
    }

    public function destroy($id)
    {
        Unidade::find($id)->delete();
        $this->openForm = false;
        $this->resetInputFields();
    }
}
