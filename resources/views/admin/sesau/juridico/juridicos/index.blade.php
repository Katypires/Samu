@extends('admin.sesau.juridico.layout.app')

@section('content')
<livewire:admin.card.modal-component key="1" title="TipoFuncaoPessoa" icon="fas fa-mobile-alt icon"  form="admin.sesau.semraiva.unidade.form" modalId="TipoFuncaoPessoa" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>
<livewire:admin.card.modal-component key="1" title="TipoFuncaoMembro" icon="fas fa-mobile-alt icon"  form="admin.sesau.semraiva.distrito.distritoform" modalId="TipoFuncaoMembro" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>
<livewire:admin.card.modal-component key="1" title="TipoSituacao" icon="fas fa-mobile-alt icon"  form="admin.sesau.juridico.tipo_situacoes.form" modalId="TipoSituacao" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>

<div class="card p-4 mb-4">            
    <div class="row">
        <livewire:admin.card.card-component key="1" title="App" text_color='text-white' text="teste texto" icon="fas fa-mobile-alt icon" cor="bg-primary" link="https://semraiva.flutterflow.app/" /> 
        <livewire:admin.card.card-component key="2" title="Site" text_color='text-white' text="teste texto" icon="fas fa-globe icon" cor="bg-success" link='http://semraiva.by.dev.br/'>
        <livewire:admin.card.card-component key="3" title="Form" text_color='text-white' text="teste texto" icon="fas fa-file-alt icon" cor="bg-danger" link=''>
        <livewire:admin.card.card-component key="4" title="TipoFuncaoMembro" text_color='text-dark' text="teste texto" icon="fas fa-cogs icon" cor="bg-warning" link=''  modalId="TipoFuncaoMembro" >
        <livewire:admin.card.card-component key="5" title="TipoFuncaoPessoa" text_color='text-white' text="teste texto" icon="fas fa-map-marker-alt icon" cor="bg-info" link='' modalId="TipoFuncaoPessoa">
        <livewire:admin.card.card-component key="6" title="TipoSituacao" text_color='text-white' text="teste texto" icon="fas fa-map-marker-alt icon" cor="bg-info" link='' modalId="TipoSituacao">                   

        <livewire:admin.crud.crud-component key="{{Str::random(5)}}" formType="modal" modal="Unidade" title="Unidade" model="App\Models\Admin\Sesau\Semraiva\Unidade" form="admin.sesau.semraiva.unidade.form_unidade" />

    </div>            
</div>
@endsection
