
<div>
                                                                                         
    <div class="row">
        <livewire:admin.sesau.voluntario.tipo-component key="{{Str::random(5)}}" modal="TipoAtividade" title="Tipo Atividade" model="App\Models\Admin\Sesau\Voluntario\TipoAtividade" form="admin.sesau.voluntario.tipo_atividades.form" />
        <livewire:admin.sesau.voluntario.tipo-component key="{{Str::random(5)}}"  modal="TipoSeguimento" title="Tipo Seguimento" model="App\Models\Admin\Sesau\Voluntario\TipoSeguimento" form="admin.sesau.voluntario.tipo_seguimentos.form" />
        <livewire:admin.sesau.voluntario.tipo-component key="{{Str::random(5)}}"  modal="TipoRegiaoUrbana" title="Tipo Regiao Urbana" model="App\Models\Admin\Sesau\Voluntario\TipoRegiaoUrbana" form="admin.sesau.voluntario.tipo_regioes.form" />
    </div>

        <livewire:admin.crud.crud-component key="{{Str::random(5)}}"  formType="form" title="Instituições Parceiras" model="App\Models\Admin\Sesau\Voluntario\Instituicao" form="admin.sesau.voluntario.instituicoes.form" />

</div>