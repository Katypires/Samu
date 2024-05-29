<div class="row">
    <div class="mb-4 col-12">
        <input type="hidden" wire:model.prevent="data.tipo_situacao_id" class="form-control">
        {{-- <livewire:admin.sesau.juridico.select-component key="{{Str::random(5)}}" columnName="nome" columnId="id" title="Tipo Situação" model="App\Models\Admin\Sesau\Juridico\TipoSituacao" label="tipo_situacao_id" value="{{ isset($data['tipo_situacao_id']) ? $data['tipo_situacao_id'] : '0' }}"/> --}}
        <livewire:admin.sesau.juridico.dropdown-component color="secondary" key="{{Str::random(5)}}" columnName="nome" columnId="id" titulo="Tipo Situação" model="App\Models\Admin\Sesau\Juridico\TipoSituacao" label="tipo_situacao_id" value="{{ isset($data['tipo_situacao_id']) ? $data['tipo_situacao_id'] : '0' }}"/>
        @error('data.tipo_situacao_id')<span class="text-danger">{{ $message }}</span> @enderror                                          
    </div>

    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.numero_processo" class="form-control">
        <label for="numero_processo">numero_processo</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.especie" class="form-control">
        <label for="especie">especie</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.numero_resolucao" class="form-control">
        <label for="numero_resolucao">numero_resolucao</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.numero_diogrande" class="form-control">
        <label for="numero_diogrande">numero_diogrande</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="date" wire:model.defer="data.data_abertura" class="form-control">
        <label for="data_abertura">data_abertura</label>
    </div>
    
    <div class="form-floating mb-4 col-6">
        <input type="date" wire:model.defer="data.data_instauracao" class="form-control">
        <label for="data_instauracao">data_instauracao</label>
    </div>
    <div class="form-floating mb-4 col-12">
        <textarea wire:model.defer="data.assunto_fato" class="form-control" rows="5" cols="50"></textarea>
        <label for="assunto_fato">assunto_fato</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.numero_documento" class="form-control">
        <label for="numero_documento">numero_documento</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="date" wire:model.defer="data.data_finalizacao" class="form-control">
        <label for="data_finalizacao">data_finalizacao</label>
    </div>
    <div class="form-floating mb-4 col-12">
        <textarea wire:model.defer="data.conclusao_decisao" class="form-control" rows="5" cols="50"></textarea>
        <label for="conclusao_decisao">conclusao_decisao</label>
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