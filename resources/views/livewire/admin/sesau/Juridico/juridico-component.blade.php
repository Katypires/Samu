@extends('admin.sesau.juridico.layout.app')

@section('content')
<livewire:admin.card.modal-component key="{{Str::random(5)}}" title="TipoFuncaoPessoa" icon="fas fa-mobile-alt icon"  form="admin.sesau.juridico.tipo_funcao_pessoas.form" modalId="TipoFuncaoPessoa" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>
<livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Membro" icon="fas fa-user icon"  form="admin.sesau.juridico.tipo_funcao_membros.form" modalId="TipoFuncaoMembro" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>
<livewire:admin.card.modal-component key="{{Str::random(5)}}" title="TipoSituacao" icon="fas fa-mobile-alt icon"  form="admin.sesau.juridico.tipo_situacoes.form" modalId="TipoSituacao" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>
<livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Sidicancia" icon="fas fa-mobile-alt icon"  form="admin.sesau.juridico.sindicancia.form_sindicancia" modalId="Sindicancia" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>

<div class="card p-4 mb-4">            
    <div class="row">
        {{-- <livewire:admin.card.card-component key="{{Str::random(5)}}" title="App" text_color='text-white' text="teste texto" icon="fas fa-mobile-alt icon" cor="bg-primary" link="" /> 
        <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Site" text_color='text-white' text="teste texto" icon="fas fa-globe icon" cor="bg-success" link=''>
        <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Form" text_color='text-white' text="teste texto" icon="fas fa-file-alt icon" cor="bg-danger" link=''> --}}
        <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Membro" text_color='text-white' text="Membros da Comissão de Sindicância" icon="fas fa-user icon" cor="bg-danger" link=''  modalId="TipoFuncaoMembro" >
        <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Tipo Funcao Pessoa" text_color='text-white' text="teste texto" icon="fas fa-user icon" cor="bg-success" link='' modalId="TipoFuncaoPessoa">
        <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Tipo Situacao" text_color='text-white' text="teste texto" icon="fas fa-map-marker-alt icon" cor="bg-info" link='' modalId="TipoSituacao">                   

        <livewire:admin.crud.crud-component key="{{Str::random(5)}}" formType="form" modal="Sindicancia" title="Sindicancia" model="App\Models\Admin\Sesau\Juridico\Sindicancia" form="admin.sesau.juridico.sindicancia.form_sindicancia" />
    

    </div>            
</div>
@endsection