@php
    $dados = ['membro', 'tipo_funcao_membro'];
@endphp

<livewire:admin.crudtab.crud-component key="{{Str::random(5)}}" modelName="sindicancia_id" formType="form" modal="SindicanciaMembro" title="Sindicancia Membro" model="App\Models\Admin\Sesau\Juridico\SindicanciaMembro" form="admin.sesau.juridico.sindicancia_membros.form_sindicancia_membro" :relacionamento=$dados />