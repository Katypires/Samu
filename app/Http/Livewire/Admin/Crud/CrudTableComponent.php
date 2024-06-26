<?php

namespace App\Http\Livewire\Admin\Crud;

use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;
use App\Exports\ModelExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class CrudTableComponent extends TableComponent
{
    public $per_page = 5;
    public $checkbox = false;
    protected $paginationTheme = 'bootstrap';
    public $header_view = 'livewire.admin.crud.table.header';
    // public $footer_view = 'livewire.admin.crud.table.footer';

    public $model, $form, $title, $modalId, $formType, $modal, $key, $tableAction;

    protected $listeners = [
        'refreshCrudTable'=>'$refresh'
    ];

    public function query()
    {
        return $this->model::query();
    }

    public function columns()
    {
        if(method_exists($this->model, 'columns')){
            return app($this->model)::columns();
        } else {
            return [
                Column::make('ID')->searchable()->sortable(),
                Column::make('Created At')->searchable()->sortable(),
                Column::make('Updated At')->searchable()->sortable(),
            ];
        }
    }

    public function export() {

        $export = $this->title.'.xlsx';
        //dd( $export);
        return Excel::download(new ModelExport($this->model), $export );
    }

    // public function criaQR() {
    //     $this->qrcode = QrCode::size(300)
    //         ->format('png')
    //         ->generate('https://www.google.com.br/')
    //         ->toHtml();
    // }

    public function pdf() {

        $pdf = Pdf::loadView('admin.sesau.juridico.sindicancia.pdf.invoice');
        //dd($pdf);
        return $pdf->stream();

    }

}
