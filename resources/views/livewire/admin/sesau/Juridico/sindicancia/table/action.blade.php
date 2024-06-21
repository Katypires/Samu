<button  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Oitiva"  wire:click="$emit('openModalCrudTab', {{$model}})">Oitiva</button>
<button  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#SindicanciaMembro"  wire:click="$emit('openModalCrudTab', {{$model}})">Membros</button>
<button  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#SindicanciaPessoa"  wire:click="$emit('openModalCrudTab', {{$model}})">Pessoas</button>
<button  class="btn btn-success"  wire:click="pdf">gerar PDF</button>
{{-- <button  class="btn btn-success"  wire:click="pdf({{ $data['id'] }})">gerar PDF</button> --}}
