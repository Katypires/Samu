<button  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Oitiva"  wire:click="$emit('openModalCrudTab', {{$model}})">Oitiva</button>
<button  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#SindicanciaMembro"  wire:click="$emit('openModalCrudTab', {{$model}})">Membros</button>
<button  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#SindicanciaPessoa"  wire:click="$emit('openModalCrudTab', {{$model}})">Pessoas</button>
<button  class="btn btn-success"  wire:click="pdf">gerar PDF</button>
<button type="button" class="btn btn-primary" title="imprimir" style="padding: 5px 10px; background-color: #e9e9e9" onClick="window.open('{{ route('imprimir-receituario', ['id' => encrypt($model->id)]) }}', '_blank')" target="_blank" >
    <i class="icofont icofont-printer" style="font-size: 25px;"></i>
</button>
{{-- <button  class="btn btn-success"  wire:click="pdf({{ $data['id'] }})">gerar PDF</button> --}}
