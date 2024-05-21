{{-- resources/views/cars/table-actions.blade.php --}}
@if($tableAction)
<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$modal}}"  wire:click="$emit('deleteTipoFormComponent', {{$model}})">Deleta</button>
<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$modal}}" wire:click="$emit('editTipoFormComponent', {{$model}})">Edita</button>
@else
<button  class="btn btn-danger"  wire:click="$emit('deleteComponent', {{$model}})">Deleta</button>
<button  class="btn btn-success"  wire:click="$emit('editComponent', {{$model}})">Edita</button>
@endif
