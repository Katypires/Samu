@php
    $dados = ['pessoa', 'sindicancia'];
@endphp

<livewire:admin.crudtab.crud-component key="{{Str::random(5)}}" modelName="sindicancia_id" formType="form" modal="Oitiva" title="Oitiva" model="App\Models\Admin\Sesau\Juridico\Oitiva" form="admin.sesau.juridico.oitiva.form_oitiva" :relacionamento=$dados />
