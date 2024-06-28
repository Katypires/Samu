<?php

namespace App\Models\Admin\Sesau\Eleicao;

use Auth;
use Carbon\Carbon;

use App\Models\Admin\Module\Profissional;

use Kdion4891\LaravelLivewireTables\Column;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprovante extends Model
{
    use HasFactory;

    public $table = 'eleicoes.comprovantes';
    // protected $connection = 'eleicao';

    public $fillable = [
        'eleicao_id', 'eleitor_id', 'key', 'log', 'status',
    ];

    public $rules = [
         'data.eleicao_id' => 'required',
         'data.eleitor_id'=> 'required',
         'data.hora_eleicao'=> 'required',
    ];

    public static function columns()
    {
        return [
            Column::make('id')->searchable()->sortable(),
            Column::make('eleicao_id')->searchable()->sortable(),
            Column::make('eleitor_id')->searchable()->sortable(),
            Column::make('key')->searchable()->sortable(),
            Column::make('log')->searchable()->sortable(),
            Column::make('status')->searchable()->sortable(),
            // Column::make('Ação')->view('livewire.buttons.buttons'),
        ];
    }


    public static function createModel($id, $datas, $log, $cpf)
    {
        $profissional = Profissional::where('user_id', Auth::user()->id)->first();
        //dd($profissional, Auth::user()->id);
        //dd($id, $datas, $log, $cpf);
        $links = implode(', ', array_values($datas));

        try {

            $eleitor = Eleitor::where('cpf', $cpf)->first();

            $comprovante = new self;
            $comprovante->eleicao_id = $id;
            $comprovante->eleitor_id = $eleitor->id;
            $comprovante->key = "$comprovante->eleicao_id".'_'."$comprovante->eleitor_id";
            //$comprovante->hora_eleicao = Carbon::now();
            $comprovante->log = $log;
            $comprovante->status = true;

            $comprovante->save();
            //session()->flash('message', 'Atualização realizada com sucesso.');



            foreach($datas as $data){
                   // dd($module);
               // $keyModel = "$model->id".'_'."$module->id";
                    //dd($data);
                    $votacao = new Votacao();

                    $votacao->eleicao_id = $id;
                    $votacao->eleitor_id = $eleitor->id;
                    $votacao->candidato_id = $data;
                    $votacao->comprovante_id = $comprovante->id;
                    $votacao->key = "$comprovante->eleicao_id".'_'."$comprovante->eleitor_id".'_'."$data";
                    $votacao->quantidade = '1';
                    $votacao->status = true;


                    $votacao->save();
                    //dd($votacao);
            }

        } catch (\Throwable $th) {
            return ['error' => 'Não foi possivel criar a transferência.'];
        }
    }


    public function getEleitorAttribute()
    {
        $eleitor = Eleitor::find($this->attributes['eleitor_id']);
        return $eleitor->nome;
    }

        public function getEleicaoAttribute()
    {
        $eleicao = Eleicao::find($this->attributes['eleicao_id']);
        return $eleicao->nome;
    }

}
