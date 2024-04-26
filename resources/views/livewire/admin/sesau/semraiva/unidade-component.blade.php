<div class="card p-4 mb-4">
    <div class="card p-2 mb-4 bg-light">
        <h5>Unidade</h5>
    </div>
    <form wire:submit.prevent="{{ $unidadeId ? 'update' : 'store' }}">
        <div class="row">
                <div class="form-floating mb-4 col-6">
                    <input type="text" wire:model.prevent="data.nome" class="form-control" placeholder="2 - Agravo/doença:">
                    <label for="nome">1 - Unidade de Saúde (ou outra fonte notificadora)</label>
                </div>
                <div class="form-floating mb-4 col-6">
                    <input type="text" wire:model.prevent="data.codigo" class="form-control" placeholder="Código (CID10)">
                    <label for="nome">2 - Código</label>
                </div>

                <div class="row form-check form-switch">
                    <div class="mb-4 px-4">
                        <label for="status" class="form-check-label">Status</label>
                        <input type="checkbox" wire:model="data.status" id="status"
                            class="form-check-input">
                        @error('status')<span class="error">{{ $mssage }}</span>@enderror
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
        <button type="submit" class="btn btn-primary mb-3">Salvar {{$unidadeId}}</button>
    </form>
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
                    @foreach($unidades as $unidade)
                    <tr>
                        <td>{{$unidade->nome}}</td>
                        <td>{{$unidade->codigo}}</td>
                        <td>{{$unidade->status}}</td>
                        <td><button wire:click="edit({{ $unidade }})" class="btn btn-primary">Editar</button></td>
                        <td><button wire:click='delete({{$unidade->id}})' class="btn btn-danger">Deletar</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>