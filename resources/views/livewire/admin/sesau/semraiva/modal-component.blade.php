<div wire:ignore.self class="modal fade" id="{{ $modalId }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="{{ $modalId }}Label" aria-hidden="true">
    <div class="modal-dialog {{ $tamanho }}">
        <div class="modal-content" style="background-color:{{$corPrimaria}}">
            <div class="modal-header" style="justify-content: center">
                {{ $title }}
            </div>
            <div class="modal-body" style="background-color: {{$corSecundaria}}">
                @include($form)
            </div>
            <div class="modal-footer" style="background-color: {{$corFooter}}">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    wire:click="$emit('closeFormCrud')">FECHAR</button>
            </div>
        </div>
    </div>
</div>
