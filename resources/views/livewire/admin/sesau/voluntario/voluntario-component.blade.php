{{-- style="background-color: rgb(187, 178, 178)" --}}
<div class="p-3">

    <livewire:admin.sesau.semraiva.modal-component key="{{Str::random(5)}}" title="TIPO ATIVIDADE" icon="fas fa-mobile-alt icon"  form="admin.sesau.voluntario.tipo_atividades.tipoatividade" modalId="TipoAtividade" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon" />
    <livewire:admin.sesau.semraiva.modal-component key="{{Str::random(5)}}" title="TIPO SEGUIMENTO" icon="fas fa-mobile-alt icon"  form="admin.sesau.voluntario.tipo_seguimentos.tiposeguimento" modalId="TipoSeguimento" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon" />
    <livewire:admin.sesau.semraiva.modal-component key="{{Str::random(5)}}" title="TIPO REGIAO URBANA" icon="fas fa-mobile-alt icon"  form="admin.sesau.voluntario.tipo_regioes.tiporegiao" modalId="TipoRegiaoUrbana" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon" />
    <livewire:admin.sesau.semraiva.modal-component key="{{Str::random(5)}}" corPrimaria="" corSecundaria="#FFEC9E" corFooter="#FFBB70" title="COLABORADOR" icon="fas fa-address-book icon"  form="admin.sesau.voluntario.colaborador.colaborador" modalId="Colaborador" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon" />
    <livewire:admin.sesau.semraiva.modal-component key="{{Str::random(5)}}" title="Instituicao" icon="fas fa-mobile-alt icon"  form="admin.sesau.voluntario.tipo_atividades.tipoatividade" modalId="viewInstituicao" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon" />


    <div class="row">

        <div class="card border-info p-4 mb-4" style="background-color:#e7dbaa" >
            <div class="card border-info p-4 mb-4" >   
                <div class="row" style="justify-content: center">
                    <livewire:admin.sesau.semraiva.card-component key="{{Str::random(5)}}" title="Atividade" text_color='text-white' text="Adicionar Tipo Atividade" icon="fas fa-map-marker-alt icon" cor="border-black bg-info" link='' modalId="TipoAtividade" />  
                    <livewire:admin.sesau.semraiva.card-component key="{{Str::random(5)}}" title="Seguimento" text_color='text-white' text="Adicione Tipo Seguimento" icon="fas fa-map-marker-alt icon" cor="border-black bg-info" link='' modalId="TipoSeguimento" />                   
                    <livewire:admin.sesau.semraiva.card-component key="{{Str::random(5)}}" title="Regiao Urbana" text_color='text-white' text="Adicione Regiao Urbana" icon="fas fa-map-marker-alt icon" cor="border-black bg-info" link='' modalId="TipoRegiaoUrbana" />
                    <livewire:admin.sesau.semraiva.card-component key="{{Str::random(5)}}" title="Colaborador" text_color='text-white' text="Colaborador Voluntario " icon="fas fa-address-book icon" cor="border-black bg-warning" link='' modalId="Colaborador" />
                </div>
            </div>

            <div class="card border-info p-4 mb-4" >   
                <div class="row" style="justify-content: center">
                    <livewire:admin.crud.crud-component key="{{Str::random(5)}}"  formType="form" title="Instituições Parceiras" model="App\Models\Admin\Sesau\Voluntario\Instituicao" form="admin.sesau.voluntario.instituicoes.form" />
                </div>
            </div>
       
        </div>  
    </div>
</div>