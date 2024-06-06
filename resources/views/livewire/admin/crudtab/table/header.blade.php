@if ($formType == 'form')
    <button wire:click="$emit('openCloseFormCrudTab', '{{$form}}','{{$emitId}}')" class="btn btn-primary">+ ADICIONAR {{$this->emitId}}</button>
@else
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{ $modal }}">
    Modal {{ $modal }}
    </button>
@endif
