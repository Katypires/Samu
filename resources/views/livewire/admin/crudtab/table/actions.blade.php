@if($formType == 'form')
    <button  class="btn btn-danger"  wire:click="$emit('openDeleteFormCrudTab', {{$model}}, '{{$form}}')"><i class="fas fa-times"></i> Deletar x</button>
    <button  class="btn btn-success"  wire:click="$emit('openEditFormCrudTab', {{$model}},  '{{$form}}')"><i class="fas fa-edit"></i> Editar x</button>
   
    <button  class="btn btn-warning"  wire:click=""><i class="fa fa-file-text"></i> Visualize</button>
    <button class="btn btn-warningr"><i class="fas fa-print"></i>Imprima</button>
    @endif

@if($formType == 'modal')
    <button  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#{{$modal}}" wire:click="$emit('openDeleteFormCrudTab', {{$model}}, '{{$form}}')">Deletar y</button>
    <button  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#{{$modal}}"  wire:click="$emit('openEditFormCrudTab', {{$model}}, '{{$form}}')">Editar y</button>
@endif


