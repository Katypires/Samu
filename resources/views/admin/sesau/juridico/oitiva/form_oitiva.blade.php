<div class="row">
    
    <div class="mb-4 col-6">
        <input type="hidden" wire:model.prevent="data.sindicancia_id" class="form-control">
        {{-- <livewire:admin.sesau.juridico.select-component key="{{Str::random(5)}}" columnName="nome" columnId="id" title="Tipo Situação" model="App\Models\Admin\Sesau\Juridico\TipoSituacao" label="sindicancia_id" value="{{ isset($data['sindicancia_id']) ? $data['sindicancia_id'] : '0' }}"/> --}}
        <livewire:admin.sesau.juridico.dropdown-component color="secondary" key="{{Str::random(5)}}" columnName="id" columnId="id" titulo="Sindicancia" model="App\Models\Admin\Sesau\Juridico\Sindicancia" label="sindicancia_id" value="{{ isset($data['sindicancia_id']) ? $data['sindicancia_id'] : '0' }}"/>
        @error('data.sindicancia_id')<span class="text-danger">{{ $message }}</span> @enderror                                          
    </div>

    <div class="mb-4 col-6">
        <input type="hidden" wire:model.prevent="data.pessoa_id" class="form-control">
        {{-- <livewire:admin.sesau.juridico.select-component key="{{Str::random(5)}}" columnName="nome" columnId="id" title="Tipo Situação" model="App\Models\Admin\Sesau\Juridico\TipoSituacao" label="pessoa_id" value="{{ isset($data['pessoa_id']) ? $data['pessoa_id'] : '0' }}"/> --}}
        <livewire:admin.sesau.juridico.dropdown-component color="secondary" key="{{Str::random(5)}}" columnName="nome" columnId="id" titulo="Pessoa" model="App\Models\Admin\Sesau\Juridico\Pessoa" label="pessoa_id" value="{{ isset($data['pessoa_id']) ? $data['pessoa_id'] : '0' }}"/>
        @error('data.pessoa_id')<span class="text-danger">{{ $message }}</span> @enderror                                          
    </div>
    <div class="form-floating mb-4 col-12">
        <input type="text" wire:model.defer="data.sindicancia_id" class="form-control">
        <label for="sindicancia_id">sindicancia_id</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="date" wire:model.defer="data.data_oitiva" class="form-control">
        <label for="data_oitiva">data_oitiva</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.local" class="form-control">
        <label for="local">local</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.relatorio" class="form-control">
        <label for="relatorio">relatorio</label>
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