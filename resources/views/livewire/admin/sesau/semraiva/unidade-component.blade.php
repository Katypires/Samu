<div class="card p-4 mb-4">
    <div class="card p-2 mb-4 bg-light">
        <h5>Unidade</h5>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <button wire:click="openForm" class="btn btn-primary mb-3 col-1">ADICIONAR UNIDADE</button>
    @if ($openForm)
        <form wire:submit.prevent="{{ $unidadeId ? 'update' : 'store' }}">
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

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            @if (isset($data['id']))
                @if ($type == 'update')
                    <button type="button" wire:click="update({{ $data['id'] }})" data-bs-dismiss="modal"
                        class="btn btn-primary ">ATUALIZAR</button>
                @endif
                @if ($type == 'delete')
                    <button type="button" wire:click="destroy({{ $data['id'] }})" data-bs-dismiss="modal"
                        class="btn btn-danger ">DELETAR</button>
                @endif
            @else
                <button type="button" wire:click="store" type="submit" class="btn btn-primary">SALVAR</button>
            @endif
            <button wire:click="closeForm" type="button" class="btn btn-secondary">CANCELAR</button>

            {{-- @if ($unidadeId)
                <button type="submit" class="btn btn-primary mb-3">Atualizar</button>
            @else
                <button type="submit" class="btn btn-primary mb-3">Salvar</button>
            @endif --}}
        </form>
    @endif
    <div class="card p-4 mb-4">
        <div>
            <h2 class="my-4">Tabela de Unidade</h2>
            <livewire:admin.sesau.semraiva.semraiva-table-component key="{{ Str::random(5) }}"
                model="App\Models\Admin\Sesau\Semraiva\Unidade" title="Unidade" />
        </div>
    </div>
</div>
