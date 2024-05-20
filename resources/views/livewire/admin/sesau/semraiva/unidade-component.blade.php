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
            @if ($unidadeId)
                <button type="submit" class="btn btn-primary mb-3">Atualizar</button>
            @else
                <button type="submit" class="btn btn-primary mb-3">Salvar</button>
            @endif
        </form>
    @endif
    <div class="card p-4 mb-4">
        <div>
            <h2 class="my-4">Tabela de Unidade</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Unidade</th>
                        <th scope="col">Codigo </th>
                        <th scope="col">Status</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($unidades as $unidade)
                        <tr>
                            <td>{{ $unidade->nome }}</td>
                            <td>{{ $unidade->codigo }}</td>
                            <td>{{ $unidade->status }}</td>
                            <td><button wire:click="edit({{ $unidade }})" class="btn btn-primary">Editar</button>
                            </td>
                            <td><button wire:click='delete({{ $unidade->id }})' class="btn btn-danger">Deletar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"> {{ $unidades->links() }}
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
