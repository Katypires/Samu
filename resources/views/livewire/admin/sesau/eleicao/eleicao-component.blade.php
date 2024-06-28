
@extends('admin.sesau.eleicoes.layout.app')

@section('content')

    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Eleitor" icon="fas fa-user icon"  form="admin.sesau.eleicoes.eleitores.form_eleitor" modalId="Eleitor" tamanho="modal-fullscreen" icon="fas fa-user icon"/>
    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Candidato" icon="fas fa-user icon"  form="admin.sesau.eleicoes.candidatos.form_candidato" modalId="Candidato" tamanho="modal-fullscreen" icon="fas fa-user icon"/>
    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Resultado" icon="fas fa-user icon"  form="admin.sesau.eleicoes.resultados.form_resultado" modalId="Resultado" tamanho="modal-fullscreen" icon="fas fa-user icon"/>
    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Eleição" icon="fas fa-user icon"  form="admin.sesau.eleicoes.eleicoes.form_eleicao" modalId="Eleicao" tamanho="modal-fullscreen" icon="fas fa-user icon"/>

    <div class="card p-4 mb-4"  style="background-color: rgba(20, 131, 151, 0.678)">
        <div class="card p-4 mb-4 bg-light-subtle border-light-subtle shadow">
            <div class="row" style="justify-content: center" >


                <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Eleitor" text_color='text-secondary-emphasis' text="teste texto" icon="fas fa-user icon" cor="bg-primary bg-gradient bg-opacity-80 border border-primary shadow"  link=''  modalId="Eleitor" >
                <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Candidato" text_color='text-secondary-emphasis' text="teste texto" icon="fas fa-user icon" cor="bg-success bg-gradient bg-opacity-80 border border-success shadow"  link='' modalId="Candidato">
                <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Resultado" text_color='text-secondary-emphasis' text="teste texto" icon="fas fa-user icon" cor="bg-danger bg-gradient bg-opacity-80 border border-danger shadow"  link='' modalId="Resultado">
                <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Eleição" text_color='text-secondary-emphasis' text="teste texto" icon="fas fa-user icon" cor="bg-secondary bg-gradient bg-opacity-80 border border-secondary shadow"  link='' modalId="Eleicao">

            </div>
        </div>


            <div class="card p-4 mb-4 bg-light-subtle border-light-subtle shadow">
                {{-- <livewire:admin.crud.crud-component key="{{Str::random(5)}}" formType="form" modal="Sindicancia" title="Sindicância" model="App\Models\Admin\Sesau\Juridico\Sindicancia" form="admin.sesau.juridico.sindicancia.form_sindicancia" /> --}}
                <livewire:admin.crud.crud-component key="{{Str::random(5)}}" formType="form" modal="Eleicao" title="Eleicao" model="App\Models\Admin\Sesau\Eleicao\Eleicao" form="admin.sesau.eleicoes.eleicoes.form_eleicao" />

            </div>
    </div>
@endsection
