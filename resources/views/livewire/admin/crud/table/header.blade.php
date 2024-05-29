@if ($formType == 'form')
    <button wire:click="$emit('openCloseFormCrud', '{{$form}}')" class="btn btn-primary">+ ADICIONAR</button>
@else
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{ $modal }}">
      modal {{ $modal }}
    </button>
@endif

<!-- Modal -->

