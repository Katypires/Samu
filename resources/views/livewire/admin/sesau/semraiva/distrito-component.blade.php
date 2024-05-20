<div class="card p-4 mb-4">
    <div class="card p-2 mb-4 bg-light">
        <h5>Distrito</h5>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <button wire:click="openForm()" class="btn btn-primary mb-3 col-1">ADICIONAR DISTRITO</button>
    @if ($openForm)
        <form wire:submit.prevent="{{ $distritoId ? 'update' : 'store' }}">
            <div class="row">
                <div class="form-floating mb-4 col-6">
                    <input type="text" wire:model.prevent="data.nome" class="form-control">
                    <label for="nome">1 - Nome do Distrito</label>
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
            @if ($distritoId)
                <button type="submit" class="btn btn-primary mb-3">Atualizar</button>
            @else
                <button type="submit" class="btn btn-primary mb-3">Salvar</button>
            @endif
        </form>
    @endif
    <div class="card p-4 mb-4">
        <div>
            <h2 class="my-4">Tabela de Distritos</h2>
            <livewire:admin.sesau.voluntario.tipo-table-component key="{{Str::random(5)}}"  model="App\Models\Admin\Sesau\Semraiva\Distrito"  title="Distrito" />
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"> {{ $distritos->links() }}
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
