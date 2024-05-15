<div class="card p-4 m-4">
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <style>
        .meu-card1 {
            border: 3px solid #0a777c;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(5, 5, 5, 0.466);
            padding: 5px;
        }
    </style>

    <style>
        .meu-formulario1 {
            background-color: #0a788633;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>

    <div class="card p-4 mb-4">
        <div class="card-title card text-center  border: 2px card meu-card1">
            <h5>Adicionar Pessoa</h5>
        </div>

        <form wire:submit.prevent="store" method="POST">
            <div class="row">

                <div class="form-floating mb-4 col-1" hidden>
                    <input type="text" wire:model.prevent="pessoa.solicitacao" class="form-control">
                    <label for="solicitacao">1 - Quem está solicitando?</label>
                </div>

                <div class="form-floating mb-4 col-2">
                    <select wire:model.prevent="pessoa.solicitacao" class="form-select" id="tipoPaciente">
                        <option value="">Selecione</option>
                        <option value="S">Solicitante</option>
                        <option value="P">Paciente</option>
                    </select>
                    <label for="solicitacao">1 - Quem está solicitando?</label>
                </div>


                <div class="form-floating mb-4 col-12">
                    <input type="text" wire:model.prevent="pessoa.nome" class="form-control">
                    <label for="nome">1.1 - Nome</label>
                </div>

                <div class="form-floating mb-4 col-3">
                    <input type="text" wire:model.prevent="pessoa.rg" class="form-control">
                    <label for="rg">2 - RG</label>
                </div>

                <div class="form-floating mb-4 col-7">
                    <input type="text" wire:model.prevent="pessoa.cpf" class="form-control">
                    <label for="cpf">3 - CPF</label>
                </div>

                <div class="form-floating mb-4 col-2">
                    <input type="date" wire:model.prevent="pessoa.data_nascimento" class="form-control">
                    <label for="data_nascimento">4 - Data de Nascimento</label>
                </div>

                <div class="form-floating mb-4 col-8">
                    <input type="text" wire:model.prevent="pessoa.endereco" class="form-control">
                    <label for="endereco">5 - Endereço</label>
                </div>

                <div class="form-floating mb-4 col-4">
                    <input type="text" wire:model.prevent="pessoa.bairro" class="form-control">
                    <label for="bairro">6 - Bairro</label>
                </div>

                <div class="form-floating mb-4 col-4">
                    <input type="text" wire:model.prevent="pessoa.telefone" class="form-control">
                    <label for="telefone">7 - DDD-Telefone</label>
                </div>


                <div class="form-floating mb-4 col-8">
                    <input type="text" wire:model.prevent="pessoa.email" class="form-control">
                    <label for="email">5 - E-mail</label>
                </div>

                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary mb-4">Adicionar Pessoa</button>
                    </div>
                </div>
        </form>

        <div class="card p-4 mb-4">
            <div>
                <input type="text" class= "form-control mb-3 rounded"wire:model.debounce.500ms="search" placeholder="search users...">

                <h2 class="my-4">Tabela de Pessoas</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">RG</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pessoas as $pessoa)
                            <tr>
                                <td>{{ $pessoa['nome'] }}</td>
                                <td>{{ $pessoa['rg'] }}</td>
                                <td>{{ $pessoa['cpf'] }}</td>
                                <td>{{ $pessoa['data_nascimento'] }}</td>
                                <td>{{ $pessoa['endereco'] }}</td>
                                <td>
                                    <button wire:click="edit({{ $pessoa['id'] }})"
                                        class="btn btn-primary">Editar</button>
                                    <button wire:click="delete({{ $pessoa['id'] }})"
                                        class="btn btn-danger">Deletar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                    {{ $pessoas->links() }}
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
    </form>
</div>
</div>


