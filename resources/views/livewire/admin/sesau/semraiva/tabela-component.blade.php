<div>
    <div class="row">
        <div class="col-auto">
            <button class="btn btn-primary mb-4" wire:click="$emit('openForm', 0)">Adicionar Ficha</button>
        </div>
        <div class="card p-4 mb-4">
            <div>
                <h2 class="my-4">Tabela de Atendimento</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Ficha ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Número</th>
                            <th scope="col">Data da Notificação</th>
                            <th scope="col">Dado Geral Id</th>
                            <th scope="col">Status</th>
                            <th scope="col">Setor</th>
                            <th scope="col">CCZ</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fichas as $ficha)
                            <tr>
                                <td>{{ $ficha->id }}</td>
                                <td>{{ $ficha->nome }}</td>
                                <td>{{ $ficha->tipo }}</td>
                                <td>{{ $ficha->numero }}</td>
                                <td>{{ $ficha->dado_geral ? $ficha->dado_geral->data_atendimento : null }}</td>
                                <td>{{ $ficha->dado_geral ? $ficha->dado_geral->data_notificacao : null }}</td>
                                <td>{{ $ficha->dado_geral ? $ficha->dado_geral->id : null }}</td>
                                <td><button type="button" class="btn btn-success">Aberto</button></td>
                                <td>Distrito</td>
                                <td><button type="button" class="btn btn-info">Em andamento</button></td>
                                <td>
                                    <button type="button" class="btn btn-info" wire:click="$emit('openForm', {{ $ficha->id }})">Editar</button>
                                    <button type="button" class="btn btn-info" wire:click="delete({{$ficha->id}})">Deletar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>