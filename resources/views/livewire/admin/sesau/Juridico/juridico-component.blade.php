
@extends('admin.sesau.juridico.layout.app')

@section('content')

    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Tipo Função Pessoa" icon="fas fa-user icon"  form="admin.sesau.juridico.tipo_funcao_pessoas.form" modalId="TipoFuncaoPessoa" tamanho="modal-fullscreen" icon="fas fa-user icon"/>
    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Tipo Função Membro" icon="fas fa-user icon"  form="admin.sesau.juridico.tipo_funcao_membros.form" modalId="TipoFuncaoMembro" tamanho="modal-fullscreen" icon="fas fa-user icon"/>
    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Tipo Situação" icon="fas fa-mobile-alt icon"  form="admin.sesau.juridico.tipo_situacoes.form" modalId="TipoSituacao" tamanho="modal-fullscreen" icon="fa-solid fa-layer-group icon"/>
    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Sidicância" icon="fas fa-mobile-alt icon"  form="admin.sesau.juridico.sindicancia.form_sindicancia" modalId="Sindicancia" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>
    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Pessoa" icon="fas fa-mobile-alt icon"  form="admin.sesau.juridico.pessoa.form" modalId="Pessoa" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>
    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Oitiva" icon="fas fa-mobile-alt icon"  form="admin.sesau.juridico.oitiva.form" modalId="Oitiva" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>
    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Membro" icon="fas fa-mobile-alt icon"  form="admin.sesau.juridico.membros.form" modalId="Membro" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>
    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Sindicância Membro" icon="fas fa-mobile-alt icon"  form="admin.sesau.juridico.sindicancia_membros.form" modalId="SindicanciaMembro" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>
    <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Sindicância Pessoa" icon="fas fa-mobile-alt icon"  form="admin.sesau.juridico.sindicancia_pessoas.form" modalId="SindicanciaPessoa" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>
    {{-- <livewire:admin.card.modal-component key="{{Str::random(5)}}" title="Tipos" icon="fas fa-mobile-alt icon"  form="admin.sesau.juridico.tipos.form"  modalId="Tipo" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/> --}}


    <div class="card p-4 mb-4"  style="background-color: rgba(207, 173, 173, 0.69)">
        <div class="card p-4 mb-4 bg-light-subtle border-light-subtle shadow">
            <div class="row" style="justify-content: center" >


                <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Tipo Função Membro" text_color='text-secondary-emphasis' text="teste texto" icon="fas fa-user icon" cor="bg-danger bg-gradient bg-opacity-80 border border-danger shadow"  link=''  modalId="TipoFuncaoMembro" >
                <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Tipo Função Pessoa" text_color='text-secondary-emphasis' text="teste texto" icon="fas fa-user icon" cor="bg-danger bg-gradient bg-opacity-80 border border-danger shadow"  link='' modalId="TipoFuncaoPessoa">
                <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Tipo Situação" text_color='text-secondary-emphasis' text="teste texto" icon="fa-solid fa-layer-group icon" cor="bg-danger bg-gradient bg-opacity-80 border border-danger shadow"  link='' modalId="TipoSituacao">
                <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Pessoa" text_color='text-secondary-emphasis' text="teste texto" icon="fa-solid fa-layer-group icon" cor="bg-danger bg-gradient bg-opacity-80 border border-danger shadow"  link='' modalId="Pessoa">
                {{-- <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Oitiva" text_color='text-secondary-emphasis' text="teste texto" icon="fa-solid fa-layer-group icon" cor="bg-danger bg-gradient bg-opacity-80 border border-danger shadow"  link='' modalId="Oitiva">   --}}
                <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Membro" text_color='text-secondary-emphasis' text="teste texto" icon="fa-solid fa-layer-group icon" cor="bg-danger bg-gradient bg-opacity-80 border border-danger shadow"  link='' modalId="Membro">
                {{-- <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Sindicancia Membro" text_color='text-secondary-emphasis' text="teste texto" icon="fa-solid fa-layer-group icon" cor="bg-danger bg-gradient bg-opacity-80 border border-danger shadow"  link='' modalId="SindicanciaMembro">   --}}
                {{-- <livewire:admin.card.card-component key="{{Str::random(5)}}" title="Tipos" text_color='text-secondary-emphasis' text="teste texto" icon="fa-solid fa-layer-group icon" cor="bg-danger bg-gradient bg-opacity-80 border border-danger shadow"  link='' modalId="Tipo">   --}}
            </div>
        </div>


            <div class="card p-4 mb-4 bg-light-subtle border-light-subtle shadow">
                <livewire:admin.crud.crud-component key="{{Str::random(5)}}" formType="form" modal="Sindicancia" title="Sindicância" model="App\Models\Admin\Sesau\Juridico\Sindicancia" form="admin.sesau.juridico.sindicancia.form_sindicancia" />
                <div id="consulta"></div>
            </div>


    </div>
{{--
    @if(!empty($situacoes))
    @foreach($situacoes['categories'] as $key => $category)
        {{ $category }}: {{ $situacoes['series'][$key] }}<br>
    @endforeach
@else
    <p>Sem dados para exibir.</p>
@endif --}}

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<div>
<script>


    var options = {
          series: [{
          name: 'Net Profit',
        //   data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
          data: @json($situacoes['series'])
        },
        ],
          chart: {
          type: 'bar',
          height: 350
        },
        title: {
            text: 'RESULTADO DAS APURAÇÕES Total: 7',
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
        //   categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
          categories: @json($situacoes['categories'])
        },
        yaxis: {
          title: {
            text: '(thousands)'
          }
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val + " thousands"
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#consulta"), options);
        chart.render();






//     var options = {
//   chart: {
//     type: 'line'
//     },
//     series: [{
//         name: 'sales',
//         // data: [30,40,35,50,49,60,70,91,125]
//         data: @json($situacoes['series'])
//     }],
//     xaxis: {
//         // categories: [1991,1992,1993,1994,1995,1996,1997, 1998,1999]
//         categories: @json($situacoes['categories'])
//     }
//     }

//     var chart = new ApexCharts(document.querySelector("#consulta"), options);

//     chart.render();
</script>
</div>

@endsection

