<?php

namespace App\Models\Admin\Sesau\Juridico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kdion4891\LaravelLivewireTables\Column;

class SindicanciaPessoa extends Model
{
    use HasFactory;
    protected $table = 'juridico.sindicancia_pessoas';
    protected $fillable = ['sindicancia_id', 'pessoa_id', 'status'];

    public $rules = [
        'data.sindicancia_id' => 'required',
        'data.pessoa_id' => 'required',
        
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public static function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('sindicancia','sindicancia_id')->searchable()->sortable(),
            Column::make('pessoa','pessoa_id')->searchable()->sortable(),
            //Column::make('Ações')->view('livewire.admin.crud.table.actions'),
            Column::make('Ações')->view('admin.sesau.voluntario.table-actions'),
        ];
    }

    public function pessoa()
{
    return $this->belongsTo(\app\Models\Admin\Sesau\Juridico\Pessoa::class, 'pessoa_id');
}

}
