<div class="row">

    <div class="form-floating mb-4 col-12">
        <input type="text" wire:model.defer="data.nome" class="form-control">
        <label for="nome">nome</label>
    </div>  
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.matricula" class="form-control">
        <label for="matricula">matricula</label>
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