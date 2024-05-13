{{-- resources/views/cars/table-actions.blade.php --}}
<button class="btn btn-danger" wire:click="delete({{ $model->id }})">Delete</button>
<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop" wire:click="edit({{ $model->id }})">Edit</button>