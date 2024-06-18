<div class="row">
    {{-- <div class="mb-4 col-4">
        <input type="hidden" wire:model.prevent="data.sindicancia_id" class="form-control">
        <livewire:admin.sesau.juridico.select-component key="{{Str::random(5)}}" columnName="nome" columnId="id" title="Sindicancia" model="App\Models\Admin\Sesau\Juridico\Sidicancia" label="sindicancia_id" value="{{ isset($data['sindicancia_id']) ? $data['sindicancia_id'] : '0' }}"/>
        <livewire:admin.sesau.juridico.dropdown-component color="secondary" key="{{Str::random(5)}}" columnName="id" columnId="id" titulo="Sindicância" model="App\Models\Admin\Sesau\Juridico\Sindicancia" label="sindicancia_id" value="{{ isset($data['sindicancia_id']) ? $data['sindicancia_id'] : '0' }}"/>
        @error('data.sindicancia_id')<span class="text-danger">{{ $message }}</span> @enderror                                          
    </div> --}}
    <div class="mb-4 col-6">
        <input type="hidden" wire:model.prevent="data.membro_id" class="form-control">
        {{-- <livewire:admin.sesau.juridico.select-component key="{{Str::random(5)}}" columnName="nome" columnId="id" title="Membro" model="App\Models\Admin\Sesau\Juridico\Membro" label="membro_id" value="{{ isset($data['membro_id']) ? $data['membro_id'] : '0' }}"/> --}}
        <livewire:admin.sesau.juridico.dropdown-component color="secondary" key="{{Str::random(5)}}" columnName="nome" columnId="id" titulo="Membro" model="App\Models\Admin\Sesau\Juridico\Membro" label="membro_id" value="{{ isset($data['membro_id']) ? $data['membro_id'] : '0' }}"/>
        @error('data.membro_id')<span class="text-danger">{{ $message }}</span> @enderror                                          
    </div>
    <div class="mb-4 col-6">
        <input type="hidden" wire:model.prevent="data.tipo_funcao_membro_id" class="form-control">
        {{-- <livewire:admin.sesau.juridico.select-component key="{{Str::random(5)}}" columnName="nome" columnId="id" title="Tipo Funcao Membro" model="App\Models\Admin\Sesau\Juridico\TipoFuncaoMembro" label="tipo_funcao_membro_id" value="{{ isset($data['tipo_funcao_membro_id']) ? $data['tipo_funcao_membro_id'] : '0' }}"/> --}}
        <livewire:admin.sesau.juridico.dropdown-component color="secondary" key="{{Str::random(5)}}" columnName="nome" columnId="id" titulo="Tipo Funcao Membro" model="App\Models\Admin\Sesau\Juridico\TipoFuncaoMembro" label="tipo_funcao_membro_id" value="{{ isset($data['tipo_funcao_membro_id']) ? $data['tipo_funcao_membro_id'] : '0' }}"/>
        @error('data.tipo_funcao_membro_id')<span class="text-danger">{{ $message }}</span> @enderror                                          
    </div>

    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.especie" class="form-control">
        <label for="especie">Espécie:</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.numero_ato" class="form-control">
        <label for="numero_ato">N° do Ato:</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="date" wire:model.defer="data.data_ato" class="form-control">
        <label for="data_ato">Data do Ato:</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.numero_diogrande" class="form-control">
        <label for="numero_diogrande">N° do Diogrande:</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="date" wire:model.defer="data.data_publicacao" class="form-control">
        <label for="data_publicacao">Data da Publicação:</label>
    </div>
    
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.numero_processo_sindicancia" class="form-control">
        <label for="numero_processo_sindicancia">N° do Processo Sindicância:</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="date" wire:model.defer="data.data_publicacao_despacho_secretario" class="form-control">
        <label for="data_publicacao_despacho_secretario">Data da Publicação Despacho Secretário:</label>
    </div>
    <div class="form-floating mb-4 col-12">
        <textarea wire:model.defer="data.rubrica" class="form-control" rows="5" cols="50"></textarea>
        <label for="rubrica">Rubrica:</label>
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