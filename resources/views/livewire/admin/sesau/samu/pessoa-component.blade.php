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

        <form wire:submit.prevent="store">
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

                <div class="form-floating mb-4 col-7" @if ($pessoa['solicitacao'] == 'P') style="display: none;" @endif>
                    <input type="text" wire:model.prevent="pessoa.cpf" class="form-control">
                    <label for="cpf">3 - CPF</label>
                </div>

                <div class="form-floating mb-4 col-2">
                    <input type="date" wire:model.prevent="pessoa.data_nascimento" class="form-control">
                    <label for="data_nascimento">4 - Data de Nascimento</label>
                </div>

                <div class="form-floating mb-4 col-8" @if ($pessoa['solicitacao'] == 'P') style="display: none;" @endif>
                    <input type="text" wire:model.prevent="pessoa.endereco" class="form-control">
                    <label for="endereco">5 - Endereço</label>
                </div>

                <div class="form-floating mb-4 col-4" @if ($pessoa['solicitacao'] == 'P') style="display: none;" @endif>
                    <input type="text" wire:model.prevent="pessoa.bairro" class="form-control">
                    <label for="bairro">6 - Bairro</label>
                </div>

                <div class="form-floating mb-4 col-4" @if ($pessoa['solicitacao'] == 'P') style="display: none;" @endif>
                    <input type="text" wire:model.prevent="pessoa.telefone" class="form-control">
                    <label for="telefone">7 - DDD-Telefone</label>
                </div>


                <div class="form-floating mb-4 col-8" @if ($pessoa['solicitacao'] == 'P') style="display: none;" @endif>
                    <input type="text" wire:model.prevent="pessoa.email" class="form-control">
                    <label for="email">5 - E-mail</label>
                </div>


                {{-- <div class="form-floating mb-4 col-6">
                    <input type="text" wire:model.prevent="tipo.parentesco" class="form-control" id="campoParentesco"
                        @if ($pessoa['solicitacao'] == 'S') readonly @endif>
                    <label for="tipo">6 - Grau de Parentesco:</label>
                </div>

                <script>
                    document.addEventListener('livewire:load', function() {
                        var tipoPaciente = document.getElementById('tipoPaciente');
                        var campoParentesco = document.getElementById('campoParentesco');

                        tipoPaciente.addEventListener('change', function() {
                            if (tipoPaciente.value === 'S') {
                                campoParentesco.readOnly = true;
                            } else {
                                campoParentesco.readOnly = false;
                            }
                        });
                    });
                </script>

                <div class="form-floating mb-4 col-6" hidden>
                    <input type="text" wire:model.prevent="tipo.fim" class="form-control" id="campoFim"
                        @if ($tipo['fim'] == 'S') style="display: none;" @endif>
                    <label for="tipo">7 - Para fins de:</label>
                </div>

                <div class="form-floating mb-4 col-2">
                    <select wire:model.prevent="tipo.fim" class="form-select">
                        <option value="">Selecione</option>
                        <option value="D">DPVAT</option>
                        <option value="I">INSS</option>
                        <option value="J">JUDICIAL</option>
                        <option value="O">OUTROS</option>
                    </select>
                    <label for="tipo">7 - Para fins de:</label>
                </div>

                <script>
                    document.addEventListener('livewire:load', function() {
                                var tipo = document.getElementById('tipo');
                                var campoFim = document.getElementById('campoFim');

                                tipo.addEventListener('change', function() {
                                    if (tipo.value === 'S') {
                                        campoFim.style.display = 'none'; // Esconde o campoFim
                                    } else {
                                        campoFim.style.display = 'block'; // Exibe o campoFim
                                    }
                                });
                </script> --}}


                <div class="row">
                    <div class="col-auto">
                        <button class="btn btn-primary mb-4">Adicionar Pessoa</button>
                    </div>
                </div>
        </form>

        <div class="card p-4 mb-4">
            <div>
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
