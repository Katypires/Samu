<?php

namespace App\Http\Livewire\Admin\Sesau\Voluntario;

use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;
use Livewire\WithPagination;


class TipoTableComponent extends TableComponent
{
    public $model, $form;
    public $checkbox = false;
    public $per_page = 5;
    public $data = [];
    public $modelId;
    public $model_id;


    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $header_view = 'livewire.admin.sesau.voluntario.tipo.table.header';

    protected $listeners = [
        'editListener' => 'edit',
        'deleteListener' => 'delete'
    ];

    public function query()
    {
        return $this->model::query();
    }

    public function columns()
    {
        if (method_exists($this->model, 'columns')) {
            return app($this->model)::columns();
        } else {
            return [
                Column::make('ID')->searchable()->sortable(),
            ];
        }
    }

    public function store()
    {
        // dd($this->model);
        $this->validate(app($this->model)->rules);
        try {
            app($this->model)::create($this->data);
            $this->resetFields();
        } catch (\Throwable $th) {
            dd($th);
            session()->flash('message', 'Não foi possível cadastrar informação.');
        }

        session()->flash('message', 'Registro cadastrado com sucesso.');
    }

    private function resetFields()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->data = [];
    }

    public function delete($id)
    {
        app($this->model)::find($id)->delete();
    }

    public function edit($data){
        try {
           $this->data = $data;
        } catch (\Exception $ex) {
            session()->flash('error','Algo deu errado!!');
        }
    }

    public function update()
    {
        // dd($this->model);
        $this->validate(app($this->model)->rules);
        try {
            app($this->model)::whereId($this->data['id'])->update($this->data);
            session()->flash('success','Atualizado com sucesso!!');
            $this->resetFields();
        } catch (\Exception $ex) {
            session()->flash('success','Algo deu errado!!');
        }
    }
}
