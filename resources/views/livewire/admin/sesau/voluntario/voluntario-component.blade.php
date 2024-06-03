{{-- style="background-color: rgb(187, 178, 178)" --}}
<div >
                                                                                         
    <div class="row">
        {{-- <livewire:admin.sesau.voluntario.tipo-component key="{{Str::random(5)}}" modal="TipoAtividade" title="Tipo Atividade" model="App\Models\Admin\Sesau\Voluntario\TipoAtividade" form="admin.sesau.voluntario.tipo_atividades.form" />
        <livewire:admin.sesau.voluntario.tipo-component key="{{Str::random(5)}}"  modal="TipoSeguimento" title="Tipo Seguimento" model="App\Models\Admin\Sesau\Voluntario\TipoSeguimento" form="admin.sesau.voluntario.tipo_seguimentos.form" />
        <livewire:admin.sesau.voluntario.tipo-component key="{{Str::random(5)}}"  modal="TipoRegiaoUrbana" title="Tipo Regiao Urbana" model="App\Models\Admin\Sesau\Voluntario\TipoRegiaoUrbana" form="admin.sesau.voluntario.tipo_regioes.form" /> --}}

        <livewire:admin.sesau.semraiva.modal-component key="{{Str::random(5)}}" title="TIPO ATIVIDADE" icon="fas fa-mobile-alt icon"  form="admin.sesau.voluntario.tipo_atividades.tipoatividade" modalId="TipoAtividade" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon" />
        <livewire:admin.sesau.semraiva.modal-component key="{{Str::random(5)}}" title="TIPO SEGUIMENTO" icon="fas fa-mobile-alt icon"  form="admin.sesau.voluntario.tipo_seguimentos.tiposeguimento" modalId="TipoSeguimento" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon" />
        <livewire:admin.sesau.semraiva.modal-component key="{{Str::random(5)}}" title="TIPO REGIAO URBANA" icon="fas fa-mobile-alt icon"  form="admin.sesau.voluntario.tipo_regioes.tiporegiao" modalId="TipoRegiaoUrbana" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon" />
        
        <div class="row">
            <livewire:admin.sesau.semraiva.card-component key="{{Str::random(5)}}" title="TIPO ATIVIDADE" text_color='text-white' text="Adicionar Tipo Atividade" icon="fas fa-map-marker-alt icon" cor="bg-info" link='' modalId="TipoAtividade" />  
            <livewire:admin.sesau.semraiva.card-component key="{{Str::random(5)}}" title="TIPO SEGUIMENTO" text_color='text-white' text="Adicionar Tipo Seguimento" icon="fas fa-map-marker-alt icon" cor="bg-info" link='' modalId="TipoSeguimento" />                   
            <livewire:admin.sesau.semraiva.card-component key="{{Str::random(5)}}" title=" REGIAO URBANA" text_color='text-white' text="Adicionar Tipo Regiao Urbana" icon="fas fa-map-marker-alt icon" cor="bg-info" link='' modalId="TipoRegiaoUrbana" />
        </div>
         
        <livewire:admin.crud.crud-component key="{{Str::random(5)}}"  formType="form" title="Instituições Parceiras" model="App\Models\Admin\Sesau\Voluntario\Instituicao" form="admin.sesau.voluntario.instituicoes.form" />
        
    </div>
</div>