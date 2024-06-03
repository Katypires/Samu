@if($formType == 'form')
    <button  class="btn btn-success"  wire:click="$emit('openEditFormCrud', {{$model}},  '{{$form}}')">Oitiva</button>
    @endif

@if($formType == 'modal')
    <button  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#{{$modal}}"  wire:click="$emit('openEditFormCrud', {{$model}})">Oitiva{{$modal}}</button>
@endif

