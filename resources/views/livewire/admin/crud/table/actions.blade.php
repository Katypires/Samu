{{-- 
<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$model}}"  wire:click="$emit('deleteTipoFormComponent', {{$model}})">Deleta</button>
<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$model}}" wire:click="$emit('editTipoFormComponent', {{$model}})">Edita</button> --}}
@if($formType == 'form')
    <button  class="btn btn-danger"  wire:click="$emit('openDeleteFormCrud', {{$model}},  '{{$form}}')">Deletar</button>
    <button  class="btn btn-success"  wire:click="$emit('openEditFormCrud', {{$model}},  '{{$form}}')">Editar</button>
    @endif

@if($formType == 'modal')
    <button  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#{{$modal}}" wire:click="$emit('openDeleteFormCrud', {{$model}})">Deletar</button>
    <button  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#{{$modal}}"  wire:click="$emit('openEditFormCrud', {{$model}})">Editar{{$modal}}</button>
@endif


