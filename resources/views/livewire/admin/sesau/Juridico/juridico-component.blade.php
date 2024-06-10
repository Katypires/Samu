
@extends('admin.sesau.juridico.layout.app')

@section('content')

    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Tipo Funcao Pessoa" icon="fas fa-user icon"  form="admin.sesau.juridico.tipo_funcao_pessoas.form" modalId="TipoFuncaoPessoa" tamanho="modal-fullscreen" icon="fas fa-user icon"/>
    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Tipo Função Membro" icon="fas fa-user icon"  form="admin.sesau.juridico.tipo_funcao_membros.form" modalId="TipoFuncaoMembro" tamanho="modal-fullscreen" icon="fas fa-user icon"/>
    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Tipo Situacao" icon="fas fa-mobile-alt icon"  form="admin.sesau.juridico.tipo_situacoes.form" modalId="TipoSituacao" tamanho="modal-fullscreen" icon="fa-solid fa-layer-group icon"/>
    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Sidicancia" icon="fas fa-mobile-alt icon"  form="admin.sesau.juridico.sindicancia.form_sindicancia" modalId="Sindicancia" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>
    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Pessoa" icon="fas fa-mobile-alt icon"  form="admin.sesau.juridico.pessoa.form" modalId="Pessoa" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>
    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Oitiva" icon="fas fa-mobile-alt icon"  form="admin.sesau.juridico.oitiva.form" modalId="Oitiva" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>
    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Membro" icon="fas fa-mobile-alt icon"  form="admin.sesau.juridico.membros.form" modalId="Membro" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>
    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Sindicancia Membro" icon="fas fa-mobile-alt icon"  form="admin.sesau.juridico.sindicancia_membros.form" modalId="SindicanciaMembro" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>
    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Tipos" icon="fas fa-mobile-alt icon"  form="admin.sesau.juridico.tipos.form"  modalId="Tipo" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>


    <div class="card p-4 mb-4" style="background-color: rgba(187, 178, 178, 0.472)"> 
        <div class="card p-4 mb-4">         
            <div class="row" style="justify-content: center">
                {{-- <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Tipo Função Membro" text_color='text-secondary-emphasis' text="teste texto" icon="fas fa-user icon" cor="" link=''  modalId="TipoFuncaoMembro" >
                <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Tipo Função Pessoa" text_color='text-secondary-emphasis' text="teste texto" icon="fas fa-user icon" cor="" link='' modalId="TipoFuncaoPessoa">
                <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Tipo Situação" text_color='text-secondary-emphasis' text="teste texto" icon="fa-solid fa-layer-group icon" cor="" link='' modalId="TipoSituacao">                    --}}
                <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Pessoa" text_color='text-secondary-emphasis' text="teste texto" icon="fa-solid fa-layer-group icon" cor="" link='' modalId="Pessoa">                   
                <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Oitiva" text_color='text-secondary-emphasis' text="teste texto" icon="fa-solid fa-layer-group icon" cor="" link='' modalId="Oitiva">  
                <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Membro" text_color='text-secondary-emphasis' text="teste texto" icon="fa-solid fa-layer-group icon" cor="" link='' modalId="Membro">  
                <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Sindicancia Membro" text_color='text-secondary-emphasis' text="teste texto" icon="fa-solid fa-layer-group icon" cor="" link='' modalId="SindicanciaMembro">  
                <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Tipos" text_color='text-secondary-emphasis' text="teste texto" icon="fa-solid fa-layer-group icon" cor="" link='' modalId="Tipo">  
            </div>
        </div>


            <div class="card p-4 mb-4">
                <livewire:admin.crud.crud-component key="{{Str::random(5)}}" formType="form" modal="Sindicancia" title="Sindicancia" model="App\Models\Admin\Sesau\Juridico\Sindicancia" form="admin.sesau.juridico.sindicancia.form_sindicancia" />
            </div> 
    </div> 
@endsection

