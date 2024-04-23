<div class="card p-4 m-4">
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

        {{-- <div class="card p-4 mb-4">
            <div>
                <h2 class="my-4">Tabela de Atendimento</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome Paciente</th>
                            <th scope="col">Data Atendimento</th>
                            <th scope="col">Idade</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Tipo Animal</th>
                            <th scope="col">Tipo Tratamento</th>
                            <th scope="col">Status</th>
                            <th scope="col">Setor</th>
                            <th scope="col">CCZ</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bolinha</td>
                            <td>2024-04-13</td>
                            <td>3</td>
                            <td>Fêmea</td>
                            <td>Gato</td>
                            <td>Consulta</td>
                            <td><button type="button" class="btn btn-success">Aberto</button></td>
                            <td>Distrito</td>
                            <td><button type="button" class="btn btn-info">Em andamento</button></td>
                        </tr>
                        <tr>
                            <td>Rex</td>
                            <td>2024-04-12</td>
                            <td>2</td>
                            <td>Macho</td>
                            <td>Cachorro</td>
                            <td>Cirurgia</td>
                            <td><button type="button" class="btn btn-info">Em andamento</button></td>
                            <td>Gestor</td>
                            <td><button type="button" class="btn btn-success">Aberto</button></td>
                        </tr>
                        <tr>
                            <td>Miau</td>
                            <td>2024-04-11</td>
                            <td>1</td>
                            <td>Fêmea</td>
                            <td>Gato</td>
                            <td>Vacinação</td>
                            <td><button type="button" class="btn btn-danger">Concluído</button></td>
                            <td>Unidade</td>
                            <td><button type="button" class="btn btn-info">Em andamento</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> --}}

    
    {{-- @if ($isOpen) --}}

        <div class="card p-4 mb-4">
            <div class="card p-2 mb-4 bg-light">
                <h5>Adicionar Pessoa</h5>
            </div>
            <form wire:submit.prevent="store">
                <div class="row">

                    <div class="form-floating mb-4 col-1" hidden>
                        <input type="text" wire:model.prevent="pessoa.solicitacao" class="form-control">
                        <label for="nome">1 - Quem está solicitando?</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <select wire:model.prevent="pessoa.solicitacao" class="form-select">
                            <option value="">Selecione</option>
                            <option value="S">Solicitante</option>
                            <option value="P">Paciente</option>
                        </select>
                        <label for="sexo">1 - Quem está solicitando?</label>
                    </div>

                    <div class="form-floating mb-4 col-12">
                        <input type="text" wire:model.prevent="pessoa.nome" class="form-control">
                        <label for="nome">1.1 - Nome</label>
                    </div>

                    <div class="form-floating mb-4 col-3">
                        <input type="text" wire:model.prevent="pessoa.rg" class="form-control">
                        <label for="nome">2 - RG</label>
                    </div>
                    <div class="form-floating mb-4 col-7">
                        <input type="text" wire:model.prevent="pessoa.cpf" class="form-control">
                        <label for="nome">3 - CPF</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <input type="date" wire:model.prevent="pessoa.data_nascimento" class="form-control">
                        <label for="nome">4 - Data de Nascimento</label>
                    </div>

                    <div class="form-floating mb-4 col-8">
                        <input type="text" wire:model.prevent="pessoa.endereco" class="form-control">
                        <label for="nome">5 - Endereco</label>
                    </div>

                    <div class="form-floating mb-4 col-4">
                        <input type="text" wire:model.prevent="pessoa.bairro" class="form-control">
                        <label for="nome">6 - Bairro</label>
                    </div>
                    <div class="form-floating mb-4 col-4">
                        <input type="text" wire:model.prevent="pessoa.telefone" class="form-control">
                        <label for="nome">7 - DDD-Telefone</label>
                    </div>
                  <div class="form-floating mb-4 col-8">
                        <input type="text" wire:model.prevent="pessoa.email" class="form-control">
                        <label for="nome">5 - E-mail</label>
                    </div>

                    <div class="row">
                        <div class="col-auto">
                            <button class="btn btn-primary mb-4" wire:click="create">Adicionar Pessoa</button>
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