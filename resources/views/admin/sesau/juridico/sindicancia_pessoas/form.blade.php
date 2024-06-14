@php
    $dados = ['pessoa', 'sindicancia'];
@endphp

<livewire:admin.crudtab.crud-component key="{{Str::random(5)}}" modelName="sindicancia_id" formType="form" modal="SindicanciaPessoa" title="Sindicancia Pessoa" model="App\Models\Admin\Sesau\Juridico\SindicanciaPessoa" form="admin.sesau.juridico.sindicancia_pessoas.form_sindicancia_pessoa" :relacionamento=$dados />