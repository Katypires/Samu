<div>

     <livewire:admin.sesau.semraiva.modal-component key="1" title="Pessoa" icon="fas fa-mobile-alt icon"  form="admin.sesau.samu.pessoa.form" modalId="Pessoa" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>

     <div class="card p-4 mb-4">            
          <div class="row">
              <livewire:admin.sesau.semraiva.card-component key="1" title="App" text_color='text-white' text="teste texto" icon="fas fa-mobile-alt icon" cor="bg-primary" link="https://semraiva.flutterflow.app/" /> 
              <livewire:admin.sesau.semraiva.card-component key="2" title="Site" text_color='text-white' text="teste texto" icon="fas fa-globe icon" cor="bg-success" link='http://semraiva.by.dev.br/'>
              <livewire:admin.sesau.semraiva.card-component key="6" title="Pessoa" text_color='text-white' text="teste texto" icon="fas fa-map-marker-alt icon" cor="bg-info" link='' modalId="Pessoa">   
          </div>
      </div>
     
     {{-- <livewire:admin.sesau.samu.pessoa-component title="Pessoa" model="App\Models\Admin\Sesau\Samu\Pessoa" />
     {{-- <livewire:admin.sesau.samu.tipo-component title="Tipo Fins" model="App\Models\Admin\Sesau\Samu\TipoFim" />
     <livewire:admin.sesau.samu.tipo-component title="Tipo Parentesco" model="App\Models\Admin\Sesau\Samu\TipoParentesco"/>
     <livewire:admin.sesau.samu.tipo-component title="Tipo Prazo" model="App\Models\Admin\Sesau\Samu\TipoPrazo" /> --}}
     <livewire:admin.sesau.samu.atendimento-component title="Atendimento" model="App\Models\Admin\Sesau\Samu\Atendimento" />
     <livewire:admin.sesau.samu.protocolo-component title="Protocolo" model="App\Models\Admin\Sesau\Samu\Protocolo" />
     <livewire:admin.sesau.samu.ocorrencia-component title="Ocorrencia" model="App\Models\Admin\Sesau\Samu\Ocorrencia" /> --}}

</div>
