
<div class="col-lg-4 mb-4">
    <div class="card p-4 my-8">
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <title class="btn btn-primary btn-sm mb-1">Adicionar</title>
       

        <form wire:submit.prevent="store">
            @include($form)

            <div class="card">
                <div class="form-floating my-8 col-10 m-3">
                    <input type="text" wire:model="nome" class="form-control">
                    <label for="nome">Nome:</label>
                </div>

                <div class="row form-check form-switch">
                    <div class="mb-4">
                        <label for="status" class="form-check-label">Status</label>
                        <input type="checkbox" wire:model="status" id="status" class="form-check-input">
                        <button type="submit" wire:click="store" class="btn btn-primary btn-sm ms-2">Salvar</button>
                        <button type="button" class="btn btn-secondary btn-sm" wire:click="closeModal">Cancelar</button>
                    </div>
                </div>
            </div>
        </form>

        <div class="card p-4 mb-4">
            <div>
                <h2 class="my-8">Tabela {{$title}}</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tipos as $tipo)
                            <tr>
                                <td>{{ $tipo->nome }}</td>
                                <td>
                                    <button wire:click="edit('{{ $tipo->id }}')" class="btn btn-primary">Editar</button>
                                    <button wire:click="destroy('{{ $tipo->id }}')" class="btn btn-danger">Deletar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
