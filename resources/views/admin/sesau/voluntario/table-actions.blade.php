{{-- resources/views/cars/table-actions.blade.php --}}
<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$modal}}"  wire:click="$emit('deleteTipoFormComponent', {{$model}})">Deleta</button>
<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$modal}}" wire:click="$emit('editTipoFormComponent', {{$model}})">Edit</button>

