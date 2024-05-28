<div wire:ignore.self class="modal fade" id="{{ $modalId }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="{{ $modalId }}Label" aria-hidden="true">
    <div class="modal-dialog {{ $tamanho }}">
        <div class="modal-content" style="background-color: #D8AE7E">
            <div class="modal-header ">
                <i class="{{ $icon }}">
                    <h1 class="modal-title" id="{{ $modalId }}Label">{{ $title }}</h1>
                </i>
            </div>
            <div class="modal-body" style="background-color: #F8C794">
                @include($form)
            </div>
            <div class="modal-footer" style="background-color: #D8AE7E">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    wire:click="$emit('closeFormCrud')">FECHAR</button>
            </div>
        </div>
    </div>
</div>
