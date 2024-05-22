<?php

namespace App\Models\Admin\Sesau\Scam;

use Auth;
use App\Models\User;
use Kdion4891\LaravelLivewireTables\Column;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    use HasFactory;

    protected $table = 'scam.planos';
    protected $connection = 'scam';

    protected $fillable = [
        'nome', 'ano_inicial', 'ano_final', 'consolidar', 'status', 'user_id'
    ];

    public $rules = [
        'data.nome' => 'required|min:1|max:255',
    ];

    protected $casts = [
        'nome' => 'string',
        'status' => 'boolean',
    ];

    public static function createdModel()
    {
        return [
            'status' =>  true,
            'user_id' =>  Auth::user()->id,
        ];
    }

    public static function columns_modal()
    {
        return [
            Column::make('id')->searchable()->sortable(),
            Column::make('nome')->searchable()->sortable(),
            Column::make('ano_inicial')->searchable()->sortable(),
            Column::make('ano_final')->searchable()->sortable(),
            Column::make('consolidar')->searchable()->sortable(),
            Column::make('status')->searchable()->sortable(),
            Column::make('acao')->view('livewire.admin.cruds.action_modal'),
        ];
    }

    public static function columns_modal_card()
    {
        return [
            Column::make('id')->searchable()->sortable(),
            Column::make('nome')->searchable()->sortable(),
            Column::make('ano_inicial')->searchable()->sortable(),
            Column::make('ano_final')->searchable()->sortable(),
            Column::make('consolidar')->searchable()->sortable(),
            Column::make('status')->searchable()->sortable(),
            Column::make('action')->view('livewire.admin.card.action_modal_card'),
        ];
    }

    public function anos()
    {
        return $this->hasMany(Ano::class)->where('status', true)->orderBy('id');
    }

    public function diretrizes()
    {
        return $this->hasMany(Diretriz::class)->where('status', true)->orderBy('id');
    }

}
