<div class="row">

    <div class="form-floating mb-4 col-12">
        <input type="text" wire:model.defer="data.nome" class="form-control">
        <label for="nome">Nome:</label>
    </div>
    <div class="form-floating mb-4 col-4">
        <input type="date" wire:model.defer="data.data_inicial" class="form-control">
        <label for="data_inicial">Data Inicial:</label>
    </div>
    <div class="form-floating mb-4 col-4">
        <input type="date" wire:model.defer="data.data_final" class="form-control">
        <label for="data_final">Data Final:</label>
    </div>
    <div class="form-floating mb-4 col-4">
        <input type="text" wire:model.defer="data.candidatos" class="form-control">
        <label for="candidatos">Candidatos:</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.min_votantes" class="form-control">
        <label for="min_votantes">Min. Votantes:</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.max_votantes" class="form-control">
        <label for="max_votantes">Máx. Votantes:</label>
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
