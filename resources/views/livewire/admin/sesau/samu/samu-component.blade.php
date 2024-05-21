{{-- <div class="card p-4 m-4">
<livewire:admin.sesau.samu.protocolo-component title="Protocolo" model="App\Models\Admin\Sesau\Samu\Protocolo"/> --}}

<div>
    <div class="card p-4 m-4">
        <livewire:admin.sesau.samu.modal-component key="1" title="Pessoa" icon="fas fa-user icon"
            form="admin.sesau.samu.pessoa.form" modalId="Pessoa" tamanho="modal-fullscreen" icon="fas fa-user icon" />

        <div class="card p-4 mb-4">
            <div class="row">
                <livewire:admin.sesau.samu.card-component key="1" title="App" text_color='text-white' text="teste texto" icon="fas fa-mobile-alt icon" cor="bg-primary" link="" />
                <livewire:admin.sesau.samu.card-component key="2" title="Site" text_color='text-white' text="teste texto" icon="fas fa-globe icon" cor="bg-success" link='' />
                <livewire:admin.sesau.samu.card-component key="6" title="Pessoa" text_color='text-white' text="teste texto" icon="fas fa-user icon" cor="bg-info" link='' modalId="Pessoa" />
            </div>
        </div>
    </div>

    <livewire:admin.sesau.samu.pessoa-component title="Pessoa" model="App\Models\Admin\Sesau\Samu\Pessoa" />
    <livewire:admin.sesau.samu.pessoa-table-component title="Pessoa" model="App\Models\Admin\Sesau\Samu\Pessoa" />

        <div class="card p-4 mb-4">                                                                                                 
            <div class="row">
                <livewire:admin.sesau.samu.tipo-component title="Tipo Fins" model="App\Models\Admin\Sesau\Samu\TipoFim" form="admin.sesau.samu.tipo_fim.form" />
                <livewire:admin.sesau.samu.tipo-component title="Tipo Parentesco" model="App\Models\Admin\Sesau\Samu\TipoParentesco" form="admin.sesau.samu.tipo_parentesco.form"/>
                <livewire:admin.sesau.samu.tipo-component title="Tipo Prazo" model="App\Models\Admin\Sesau\Samu\TipoPrazo" form="admin.sesau.samu.tipo_prazo.form"/>
            </div>
        </div>

    <livewire:admin.sesau.samu.atendimento-component title="Atendimento" model="App\Models\Admin\Sesau\Samu\Atendimento" />
    <livewire:admin.sesau.samu.ocorrencia-component title="Ocorrencia" model="App\Models\Admin\Sesau\Samu\Ocorrencia" />
    <livewire:admin.sesau.samu.protocolo-component title="Protocolo" model="App\Models\Admin\Sesau\Samu\Protocolo" />

</div>
