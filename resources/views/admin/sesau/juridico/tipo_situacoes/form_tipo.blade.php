
<div class="form-floating my-8 col-10 m-3">
    <input type="text" wire:model="data.nome" class="form-control">
    <label for="nome">Nome:</label>

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

