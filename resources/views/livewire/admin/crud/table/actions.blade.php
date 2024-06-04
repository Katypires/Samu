{{-- 
<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$model}}"  wire:click="$emit('deleteTipoFormComponent', {{$model}})">Deleta</button>
<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$model}}" wire:click="$emit('editTipoFormComponent', {{$model}})">Edita</button> --}}
@if($formType == 'form')
    <button  class="btn btn-danger"  wire:click="$emit('openDeleteFormCrud', {{$model}},  '{{$form}}')"><i class="fas fa-times"></i> Deletar</button>
    <button  class="btn btn-success"  wire:click="$emit('openEditFormCrud', {{$model}},  '{{$form}}')"><i class="fas fa-edit"></i> Editar</button>
    <button  class="btn btn-warning"  wire:click=""><i class="fa fa-file-text"></i> Visualize</button>
    <button class="btn btn-warning"><i class="fas fa-print"></i>Imprima</button>
    @endif

@if($formType == 'modal')
    <button  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#{{$modal}}" wire:click="$emit('openDeleteFormCrud', {{$model}})"><i class="fas fa-times"></i> Deletar</button>
    <button  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#{{$modal}}"  wire:click="$emit('openEditFormCrud', {{$model}})"> Editar{{$modal}}</button>
@endif


