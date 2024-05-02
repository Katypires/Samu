<div class="col-lg-2 mb-4">
    <div class="card p-4 my-4">
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <button class="btn btn-primary btn-sm mb-1" wire:click="create">Adicionar {{ $title }}</button>
        @include($form)

        <div class="card">
            <div class="form-floating my-4 col-10">
                <input type="text" wire:model="data.nome" class="form-control">
                <label for="nome">Nome:</label>
            </div>

            <div class="row form-check form-switch">
                <div class="mb-4">
                    <label for="status" class="form-check-label">Status</label>
                    <input type="checkbox" wire:model="data.status" id="status" class="form-check-input">
                    <button type="submit" class="btn btn-primary btn-sm ms-2">Salvar</button>
                    <button type="button" class="btn btn-secondary btn-sm" wire:click="closeModal">Cancelar</button>
                </div>
            </div>

            {{-- <div class="">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="button" class="btn btn-secondary" wire:click="closeModal">Cancelar</button>
            </div> --}}
        </div>
    </div>
</div>


{{-- <table class="table rounded-lg text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo do indicador</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tipoIndicadores as $tipoIndicador)
                <tr>
                    <td>{{ $tipoIndicador->id }} </td>
                    <td>{{ $tipoIndicador->nome }}</td>
                    <td>
                        <button class="btn" wire:click="edit({{ $tipoIndicador->id}})">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                            </svg>
                        </button>  
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#tipoIndicadorModal{{ $tipoIndicador->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                        </svg></button>
                    
                    <div wire:ignore.self class="modal fade" id="tipoIndicadorModal{{ $tipoIndicador->id }}" tabindex="-1" aria-labelledby="tipoIndicadorModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h5 class="fs-5">Deseja realmente excluir {{ $tipoIndicador->nome }}?</h5>
                                </div>
                                <div class="modal-footer d-flex justify-content-around">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-danger" wire:click.prevent="delete({{ $tipoIndicador->id}})">Remover</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
