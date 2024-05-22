<div class="row">
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.prevent="data.nome" class="form-control">
        <label for="nome">1 - Unidade de Saúde (ou outra fonte notificadora)</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.prevent="data.codigo" class="form-control">
        <label for="nome">2 - Código</label>
    </div>

    <div class="row form-check form-switch">
        <div class="mb-4 px-4">
            <label for="status" class="form-check-label">Status</label>
            <input type="checkbox" wire:model="data.status" id="status" class="form-check-input">
            @error('status')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>