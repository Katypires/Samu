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
    public $openForm = false;
    public $search = '';
    public $type;

   
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    protected $listeners=['distrito', 'search', 'deleteComponent','editComponent'];

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
            $this->openForm = false;

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
        // dd('aqui')
        $this->validate([
            'data.nome' => 'required',
        ]);

        try {

           // dd($this->namespace);
           Distrito::whereId($this->data['id'])->update($this->data);
           // dd($this->data);
        //    $this->emit('refreshTipoTableComponent', $this->namespace);
    
            session()->flash('message', 'Distrito atualizado com sucesso.');
    
            $this->resetInputFields();
            $this->openForm = false;

        } catch (\Throwable $th) {
            dd($th);
            session()->flash('message',
            'Não foi possível cadastrar/atualizar informação.');
        }
       
    }

    // public function delete($id)
    // {
    //     Distrito::find($id)->delete();
    //     session()->flash('message', 'Distrito deletado com sucesso.');
    // }
    
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

    public function closeForm(){
        $this->openForm = false;
        $this->resetInputFields();
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
        Distrito::find($id)->delete();
        $this->openForm = false;
        $this->resetInputFields();
    }
}
