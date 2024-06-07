@extends('admin.sesau.juridico.layout.app')

<div class="card p-4 mb-4" style="background-color: rgba(187, 178, 178, 0.472)">
    <div class="card p-4 mb-4">
        <div class="row" style="justify-content: center">
            <livewire:admin.card.modal-component key="{{ Str::random(5) }}" title="Tipo Funcao Pessoa" icon="fas fa-user icon" form="admin.sesau.juridico.tipo_funcao_pessoas.form" modalId="TipoFuncaoPessoa" tamanho="modal-fullscreen" icon="fas fa-user icon" />
            <livewire:admin.card.modal-component key="{{ Str::random(5) }}" title="Tipo Função Membro" icon="fas fa-user icon" form="admin.sesau.juridico.tipo_funcao_membros.form" modalId="TipoFuncaoMembro" tamanho="modal-fullscreen" icon="fas fa-user icon" />
            <livewire:admin.card.modal-component key="{{ Str::random(5) }}" title="Tipo Situacao" icon="fas fa-mobile-alt icon" form="admin.sesau.juridico.tipo_situacoes.form" modalId="TipoSituacao" tamanho="modal-fullscreen" icon="fa-solid fa-layer-group icon" />



            <livewire:admin.card.card-component key="{{ Str::random(5) }}" title="Tipo Função Pessoa" text_color='text-secondary-emphasis' text="teste texto" icon="fas fa-user icon" cor="" link='' modalId="TipoFuncaoPessoa">
            <livewire:admin.card.card-component key="{{ Str::random(5) }}" title="Tipo Função Membro" text_color='text-secondary-emphasis' text="teste texto" icon="fas fa-user icon" cor="" link='' modalId="TipoFuncaoMembro">
            <livewire:admin.card.card-component key="{{ Str::random(5) }}" title="Tipo Situação" text_color='text-secondary-emphasis' text="teste texto" icon="fa-solid fa-layer-group icon" cor="" link='' modalId="TipoSituacao">

        </div>
    </div>
</div>
