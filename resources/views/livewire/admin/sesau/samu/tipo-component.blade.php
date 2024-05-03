<div class="col-lg-2 mb-4">
    <div class="card p-4 my-4">
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <button class="btn btn-primary btn-sm mb-1" wire:click="create">Adicionar</button>
        @include($form)

        <div class="card">
            <div class="form-floating my-4 col-10 m-3">
                <input type="text" wire:model="nome" class="form-control">
                <label for="nome">Nome:</label>
            </div>

            <div class="row form-check form-switch">
                <div class="mb-4">
                    <label for="status" class="form-check-label">Status</label>
                    <input type="checkbox" wire:model="status" id="status" class="form-check-input">
                    <button type="submit" class="btn btn-primary btn-sm ms-2">Salvar</button>
                    <button type="button" class="btn btn-secondary btn-sm" wire:click="closeModal">Cancelar</button>
                </div>
            </div>
        </div>


        <div class="card p-4 mb-4">
            <div>
                <h2 class="my-4">Tabela tipo</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tipos as $tipo)
                            <tr>
                                <td>{{ $tipo['nome'] }}</td>
                                <td>
                                    <button wire:click="edit({{ $tipo['nome'] }})"
                                        class="btn btn-primary">Editar</button>
                                    <button wire:click="delete({{ $tipo['nome'] }})"
                                        class="btn btn-danger">Deletar</button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
