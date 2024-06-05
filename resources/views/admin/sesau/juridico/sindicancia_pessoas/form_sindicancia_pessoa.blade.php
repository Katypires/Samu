<div class="row">
    <div class="mb-4 col-4">
        <input type="hidden" wire:model.prevent="data.sindicancia_id" class="form-control">
        {{-- <livewire:admin.sesau.juridico.select-component key="{{Str::random(5)}}" columnName="nome" columnId="id" title="Sindicancia" model="App\Models\Admin\Sesau\Juridico\Sidicancia" label="sindicancia_id" value="{{ isset($data['sindicancia_id']) ? $data['sindicancia_id'] : '0' }}"/> --}}
        <livewire:admin.sesau.juridico.dropdown-component color="secondary" key="{{Str::random(5)}}" columnName="id" columnId="id" titulo="Sindicancia" model="App\Models\Admin\Sesau\Juridico\Sindicancia" label="sindicancia_id" value="{{ isset($data['sindicancia_id']) ? $data['sindicancia_id'] : '0' }}"/>
        @error('data.sindicancia_id')<span class="text-danger">{{ $message }}</span> @enderror                                          
    </div>
    <div class="mb-4 col-4">
        <input type="hidden" wire:model.prevent="data.pessoa_id" class="form-control">
        {{-- <livewire:admin.sesau.juridico.select-component key="{{Str::random(5)}}" columnName="nome" columnId="id" title="Pessoa" model="App\Models\Admin\Sesau\Juridico\Pessoa" label="pessoa_id" value="{{ isset($data['pessoa_id']) ? $data['pessoa_id'] : '0' }}"/> --}}
        <livewire:admin.sesau.juridico.dropdown-component color="secondary" key="{{Str::random(5)}}" columnName="nome" columnId="id" titulo="Pessoa" model="App\Models\Admin\Sesau\Juridico\Pessoa" label="pessoa_id" value="{{ isset($data['pessoa_id']) ? $data['pessoa_id'] : '0' }}"/>
        @error('data.pessoa_id')<span class="text-danger">{{ $message }}</span> @enderror                                          
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