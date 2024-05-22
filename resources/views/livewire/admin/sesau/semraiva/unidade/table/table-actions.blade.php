
<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$model}}"  wire:click="$emit('deleteTipoFormComponent', {{$model}})">Deleta</button>
<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$model}}" wire:click="$emit('editTipoFormComponent', {{$model}})">Edita</button>

<button  class="btn btn-danger"  wire:click="$emit('deleteComponent', {{$model}})">Deleta</button>
<button  class="btn btn-success"  wire:click="$emit('editComponent', {{$model}})">Edita</button>

