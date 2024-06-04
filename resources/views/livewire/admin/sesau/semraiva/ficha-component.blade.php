<div class="p-3" style="background-color:#D8AE7E">
    
    <livewire:admin.sesau.semraiva.modal-component corPrimaria="#D8AE7E" corSecundaria="#F8C794" corFooter="#D8AE7E" key="{{Str::random(5)}}" title="Unidade" icon="fas fa-mobile-alt icon"  form="admin.sesau.semraiva.unidade.form_table" modalId="Unidadee" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>
    <livewire:admin.sesau.semraiva.modal-component corPrimaria="#D8AE7E" corSecundaria="#F8C794" corFooter="#D8AE7E" key="{{Str::random(5)}}" title="Distrito" icon="fas fa-mobile-alt icon"  form="admin.sesau.semraiva.distrito.distritoform" modalId="Distrito" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>
    <livewire:admin.sesau.semraiva.modal-component corPrimaria="#D8AE7E" corSecundaria="#F8C794" corFooter="#D8AE7E" key="{{Str::random(5)}}" title="Unidade" icon="fas fa-mobile-alt icon"  form="admin.sesau.semraiva.unidade.form_modal" modalId="Unidade" tamanho="modal-fullscreen" icon="fas fa-map-marker-alt icon"/>

    <div class="card p-4 m-4" style="background-color:#F8C794">
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

            <div class="card p-4 mb-4 ml-4">            
                <div class="row">
                    <livewire:admin.sesau.semraiva.card-component key="{{Str::random(5)}}" title="App" text_color='text-white' text="teste texto" icon="fas fa-mobile-alt icon" cor="bg-primary" link="https://semraiva.flutterflow.app/" /> 
                    <livewire:admin.sesau.semraiva.card-component key="{{Str::random(5)}}" title="Site" text_color='text-white' text="teste texto" icon="fas fa-globe icon" cor="bg-success" link='http://semraiva.by.dev.br/'>
                    <livewire:admin.sesau.semraiva.card-component key="{{Str::random(5)}}" title="Form" text_color='text-white' text="teste texto" icon="fas fa-file-alt icon" cor="bg-danger" link=''>
                    <livewire:admin.sesau.semraiva.card-component key="{{Str::random(5)}}" title="Gestor" text_color='text-dark' text="teste texto" icon="fas fa-cogs icon" cor="bg-warning" link=''>
                    <livewire:admin.sesau.semraiva.card-component key="{{Str::random(5)}}" title="Unidade" text_color='text-white' text="teste texto" icon="fas fa-map-marker-alt icon" cor="bg-info" link='' modalId="Unidadee">
                    <livewire:admin.sesau.semraiva.card-component key="{{Str::random(5)}}" title="Distrito" text_color='text-white' text="teste texto" icon="fas fa-map-marker-alt icon" cor="bg-info" link='' modalId="Distrito">                   

                    {{-- <livewire:admin.crud.crud-component key="{{Str::random(5)}}" formType="modal" modal="Unidade" title="Unidade" model="App\Models\Admin\Sesau\Semraiva\Unidade" form="admin.sesau.semraiva.unidade.form_modal" /> --}}
                    <livewire:admin.crud.crud-table-component key="{{Str::random(5)}}" formType="modal" modal="Unidade" title="Unidade" model="App\Models\Admin\Sesau\Semraiva\Unidade" form="admin.sesau.semraiva.unidade.form_modal"  />
                </div>            
            </div>
            
            <div class="card p-4 mb-4">
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
            </div>

        {{-- @if ($isOpen) --}}'
            {{-- @livewire('admin.sesau.semraiva.unidade-component') --}}
            <div class="card p-4 mb-4">
                <div class="card p-2 mb-4 bg-light">
                    <h5>Dados Gerais</h5>
                </div>
                <form wire:submit.prevent="store">
                    <div class="row">

                        <div class="form-floating mb-4 col-12">
                            <input type="text" wire:model.prevent="data.tipo_notificacao" class="form-control" placeholder="Nome do eixo:">
                            <label for="nome">1 - Tipo de Notificação</label>
                        </div>

                        <div class="form-floating mb-4 col-8">
                            <input type="text" wire:model.prevent="data.agravo" class="form-control" placeholder="2 - Agravo/doença:">
                            <label for="nome">2 - Agravo/doença</label>
                        </div>
                        <div class="form-floating mb-4 col-2">
                            <input type="text" wire:model.prevent="data.cid" class="form-control" placeholder="Código (CID10)">
                            <label for="nome">2 - Código (CID10)</label>
                        </div>
                        <div class="form-floating mb-4 col-2">
                            <input type="date" wire:model.prevent="data.data_notificacao" class="form-control">
                            <label for="nome">2 - Data da Notificação</label>
                        </div>

                        <div class="form-floating mb-4 col-2">
                            <input type="text" wire:model.prevent="data.uf" class="form-control" placeholder="4 - UF:">
                            <label for="nome">4 - UF</label>
                        </div>
                        <div class="form-floating mb-4 col-8">
                            <input type="text" wire:model.prevent="data.municipio" class="form-control" placeholder="Município de Notificação">
                            <label for="nome">5 - Município de Notificação</label>
                        </div>
                    <div class="form-floating mb-4 col-2">
                            <input type="text" wire:model.prevent="data.ibge" class="form-control" placeholder="Código (IBGE)">
                            <label for="nome">5 - Código (IBGE)</label>
                        </div>

                            <div class="form-floating mb-4 col-6">
                                <input type="text" wire:model.prevent="data.unidade" class="form-control" placeholder="2 - Agravo/doença:">
                                <label for="nome">6 - Unidade de Saúde (ou outra fonte notificadora)</label>
                            </div>
                            <div class="form-floating mb-4 col-3">
                                <input type="text" wire:model.prevent="data.codigo" class="form-control" placeholder="Código (CID10)">
                                <label for="nome">6 - Código</label>
                            </div>
                        
                        <div class="form-floating mb-4 col-3">
                            <input type="date" wire:model.prevent="data.data_atendimento" class="form-control">
                            <label for="nome">7 - Data da Atendimento</label>
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

            <div class="card p-4 mb-4">
                <div class="card p-2 mb-4 bg-light">
                    <h5>Notificação Individual</h5>
                </div>
                <form wire:submit.prevent="storeNotificacao">
                    <div class="row">

                        <div class="form-floating mb-4 col-10">
                            <input type="text" wire:model.prevent="data.nome" class="form-control" placeholder="8 - Nome do Paciente:">
                            <label for="nome">8 - Nome do Paciente</label>
                        </div>
                        <div class="form-floating mb-4 col-2">
                            <input type="date" wire:model.prevent="data.data_nascimento" class="form-control">
                            <label for="nome">9 - Data de Nascimento</label>
                        </div>

                        <div class="form-floating mb-4 col-3">
                            <select wire:model.prevent="data.idade" class="form-select">
                                <option value="">Selecione</option>
                                <option value="1">Hora</option>
                                <option value="2">Dia</option>
                                <option value="3">Mês</option>
                                <option value="4">Ano</option>
                            </select>
                            <label for="select">10 - (ou) Idade</label>
                        </div>
                        <div class="form-floating mb-4 col-1">
                            <input type="text" wire:model.prevent="data.idade" class="form-control" placeholder="ou) Idade">
                            <label for="nome">10 - Idade</label>
                        </div>
                        <div class="form-floating mb-4 col-1" hidden>
                            <input type="text" wire:model.prevent="data.sexo" class="form-control" placeholder="11 - Sexo">
                            <label for="nome">11 - Sexo</label>
                        </div>
                        <div class="form-floating mb-4 col-2">
                            <select wire:model.prevent="data.sexo" class="form-select">
                                <option value="">Selecione um gênero</option>
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                                <option value="I">Ignorado</option>
                            </select>
                            <label for="sexo">11 - Sexo</label>
                        </div>

                        <div class="form-floating mb-4 col-1" hidden>
                            <input type="text" wire:model.prevent="data.gestante" class="form-control" placeholder="12 - Gestante">
                            <label for="nome">12 - Gestante</label>
                        </div>

                        <div class="form-floating mb-4 col-3">
                            <select wire:model.prevent="data.gestante" class="form-select">
                                <option value="">Selecione uma opção</option>
                                <option value="1">1º Trimestre</option>
                                <option value="2">2º Trimestre</option>
                                <option value="3">3º Trimestre</option>
                                <option value="4">Idade gestacional/Ignorada</option>
                                <option value="5">Não</option>
                                <option value="6">Não se aplica</option>
                                <option value="9">Ignorado</option>
                            </select>
                            <label for="select">12 - Gestante</label>
                        </div>

                        <div class="form-floating mb-4 col-1" hidden>
                            <input type="text" wire:model.prevent="data.raca_cor" class="form-control" placeholder="13 - Raça/Cor">
                            <label for="nome">13 - Raça/Cor</label>
                        </div>
                        <div class="form-floating mb-4 col-3">
                            <select wire:model.prevent="data.raca_cor" class="form-select">
                                <option value="">Selecione uma opção</option>
                                <option value="1">Branca</option>
                                <option value="2">Preta</option>
                                <option value="3">Amarela</option>
                                <option value="4">Parda</option>
                                <option value="5">Indígena</option>
                                <option value="9">Ignorado</option>
                            </select>
                            <label for="select">13 - Raça/Cor</label>
                        </div>

                        <div class="form-floating mb-4 col-2">
                            <input type="text" wire:model.prevent="data.escolaridade" class="form-control" placeholder="14 - Escolaridade">
                            <label for="nome">14 - Escolaridade</label>
                        </div>

                        <div class="form-floating mb-4 col-10">
                            <select wire:model.prevent="data.escolaridade" class="form-select">
                                <option value="">Selecione uma opção</option>
                                <option value="0">Analfabeto</option>
                                <option value="1">1ª a 4ª série incompleta do EF (antigo primário ou 1º grau)</option>
                                <option value="2">4ª série completa do EF (antigo primário ou 1º grau)</option>
                                <option value="3">5ª à 8ª série incompleta do EF (antigo ginásio ou 1º grau)</option>
                                <option value="4">Ensino fundamental completo (antigo ginásio ou 1º grau)</option>
                                <option value="5">Ensino médio incompleto (antigo colegial ou 2º grau)</option>
                                <option value="6">Ensino médio completo (antigo colegial ou 2º grau)</option>
                                <option value="7">Educação superior incompleta</option>
                                <option value="8">Educação superior completa</option>
                                <option value="9">Ignorado</option>
                                <option value="10">Não se aplica</option>
                            </select>
                            <label for="select">14 - Escolaridade</label>
                        </div>


                        <div class="form-floating mb-4 col-4">
                            <input type="text" wire:model.prevent="data.numero_cartao_sus" class="form-control" placeholder="15 - Número do Cartão SUS">
                            <label for="nome">15 - Número do Cartão SUS</label>
                        </div>
                        <div class="form-floating mb-4 col-8">
                            <input type="text" wire:model.prevent="data.nome_mae" class="form-control" placeholder="16 - Nome da mãe">
                            <label for="nome">16 - Nome da mãe</label>
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
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
            @livewire('admin.sesau.semraiva.dado-residencia-component')
            <div class="card p-4 mb-4">
                <div class="card p-2 mb-4 bg-light">
                    <h5>Antecedentes Epidemiológicos </h5>
                </div>
                <form>
                    <div class="row">
                        <div class="form-floating mb-4 col-12">
                            <input type="text" wire:model="data.ocupacao" class="form-control" placeholder="31 - Ocupação">
                            <label for="ocupacao">31 - Ocupação</label>
                        </div>
                        <p>32 - Tipo de Exposição ao Vírus Rábico</p>
                        {{-- data.contato_indireto --}}
                        <div class="form-floating mb-4 col-2">
                            <select wire:model="select" class="form-select">
                                <option value="">Selecione</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="9">Ignorado</option>
                            </select>
                            <label for="contato_indireto">32.1 - Contato Indireto</label>
                        </div>
                        <div class="form-floating mb-4 col-4">
                            <select wire:model="data.arranhadura" class="form-select" {{ $select == "2" || $select == "9"  ? '' : 'disabled' }} >
                                <option value="">Selecione</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="9">Ignorado</option>
                            </select>
                            <label for="arranhadura">32.2 - Arranhadura</label>
                        </div>
                        <!-- Adicione os outros campos aqui conforme a tabela -->
                        <!-- Continuação do formulário -->
                        <div class="form-floating mb-4 col-2">
                            <select wire:model="data.lambedura" class="form-select" {{ $select == "2" || $select == "9"  ? '' : 'disabled' }}>
                                <option value="">Selecione</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="9">Ignorado</option>
                            </select>
                            <label for="lambedura">32.3 - Lambedura</label>
                        </div>
                        <div class="form-floating mb-4 col-2">
                            <select wire:model="data.mordedura" class="form-select" {{ $select == "2" || $select == "9"  ? '' : 'disabled' }}>
                                <option value="">Selecione</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="9">Ignorado</option>
                            </select>
                            <label for="mordedura">32.4 - Mordedura</label>
                        </div>
                        <div class="form-floating mb-4 col-2">
                            <select wire:model="data.outro" class="form-select" {{ $select == "2" || $select == "9"  ? '' : 'disabled' }}>
                                <option value="">Selecione</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="9">Ignorado</option>
                            </select>
                            <label for="outro">32.5 - Outro</label>
                        </div>
                        <!-- Adicione os outros campos aqui conforme a tabela -->
                        <!-- Continuação do formulário -->
                        <div class="form-floating mb-4 col-2" hidden>
                            <input type="text" wire:model="data.localizacao" class="form-control" placeholder="33 - Localização">
                            <label for="localizacao">33 - Localização</label>
                        </div>
                        <div class="form-floating mb-4 col-2">
                            <select wire:model="data.mucosa" class="form-select">
                                <option value="">Selecione</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="3">Desconhecida</option>
                            </select>
                            <label for="mucosa">33.1 - Mucosa</label>
                        </div>
                        <div class="form-floating mb-4 col-2">
                            <select wire:model="data.cabeca_pescoco" class="form-select">
                                <option value="">Selecione</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="3">Desconhecida</option>
                            </select>
                            <label for="cabeca_pescoco">33.2 - Cabeça/Pescoço</label>
                        </div>
                        <div class="form-floating mb-4 col-2">
                            <select wire:model="data.maos_pe" class="form-select">
                                <option value="">Selecione</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="3">Desconhecida</option>
                            </select>
                            <label for="maos_pe">33.3 - Mãos/Pé</label>
                        </div>
                        <!-- Adicione os outros campos aqui conforme a tabela -->
                        <!-- Continuação do formulário -->
                        <div class="form-floating mb-4 col-2">
                            <select wire:model="data.tronco" class="form-select">
                                <option value="">Selecione</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="3">Desconhecida</option>
                            </select>
                            <label for="tronco">33.4 - Tronco</label>
                        </div>
                        <div class="form-floating mb-4 col-2">
                            <select wire:model="data.membros_superiores" class="form-select">
                                <option value="">Selecione</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="3">Desconhecida</option>
                            </select>
                            <label for="membros_superiores">33.5 - Membros Superiores</label>
                        </div>
                        <div class="form-floating mb-4 col-2">
                            <select wire:model="data.membros_inferiores" class="form-select">
                                <option value="">Selecione</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="3">Desconhecida</option>
                            </select>
                            <label for="membros_inferiores">33.6 - Membros Inferiores</label>
                        </div>
                        <div class="form-floating mb-4 col-12">
                            <select wire:model="data.ferimento" class="form-select">
                                <option value="">Selecione</option>
                                <option value="1">Único</option>
                                <option value="2">Múltiplo</option>
                                <option value="3">Sem ferimento</option>
                                <option value="9">Ignorado</option>
                            </select>
                            <label for="ferimento">34 - Ferimento</label>
                        </div>
                        <!-- Adicione os outros campos aqui conforme a tabela -->
                        <!-- Continuação do formulário -->
                        <p>35 - Tipo de Ferimento</p>
                        <div class="form-floating mb-4 col-3">
                            <select wire:model="data.profundo" class="form-select">
                                <option value="">Selecione</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="9">Ignorado</option>
                            </select>
                            <label for="profundo">35.1 - Profundo</label>
                        </div>
                        <div class="form-floating mb-4 col-3">
                            <select wire:model="data.superficial" class="form-select">
                                <option value="">Selecione</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="9">Ignorado</option>
                            </select>
                            <label for="superficial">35.2 - Superficial</label>
                        </div>
                        <div class="form-floating mb-4 col-3">
                            <select wire:model="data.dilacerante" class="form-select">
                                <option value="">Selecione</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="9">Ignorado</option>
                            </select>
                            <label for="dilacerante">35.3 - Dilacerante</label>
                        </div>
                        <!-- Adicione os outros campos aqui conforme a tabela -->
                        <!-- Continuação do formulário -->
                        <div class="form-floating mb-4 col-3">
                            <input type="date" wire:model="data.data_exposicao" class="form-control" placeholder="36 - Data da Exposição">
                            <label for="data_exposicao">36 - Data da Exposição</label>
                        </div>
                        <p>37 - Tem Antecedentes de Tratamento Anti-Rábico ?</p>
                        <div class="form-floating mb-4 col-6">
                            <select wire:model="data.pre_exposicao" class="form-select">
                                <option value="">Selecione</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="9">Ignorado</option>
                            </select>
                            <label for="pre_exposicao">37.1 - Pré-Exposição</label>
                        </div>
                        <div class="form-floating mb-4 col-6">
                            <select wire:model="data.pos_exposicao" class="form-select">
                                <option value="">Selecione</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="9">Ignorado</option>
                            </select>
                            <label for="pos_exposicao">37.2 - Pós-Exposição</label>
                        </div>
                        <!-- Adicione os outros campos aqui conforme a tabela -->
                        <!-- Continuação do formulário -->
                        <div class="form-floating mb-4 col-6">
                            <select wire:model="data.conclusao_tratamento" class="form-select">
                                <option value="">Selecione</option>
                                <option value="1">Até 90 dias</option>
                                <option value="2">Após 90 dias</option>
                            </select>
                            <label for="conclusao_tratamento">38 - Se Houve, quando foi concluído?</label>
                        </div>
                        <div class="form-floating mb-4 col-6">
                            <input type="text" wire:model="data.num_doses_aplicadas" class="form-control" placeholder="39 - Nº de Doses Aplicadas">
                            <label for="num_doses_aplicadas">39 - Nº de Doses Aplicadas</label>
                        </div>
                        {{-- data.especie_animal_agressor --}}
                        <div class="form-floating mb-4 col-8">
                            <select wire:model="outra" class="form-select">
                                <option value="">Selecione</option>
                                <option value="1">Canina</option>
                                <option value="2">Felina</option>
                                <option value="3">Quiróptera (Morcego)</option>
                                <option value="4">Primata (Macaco)</option>
                                <option value="5">Raposa</option>
                                <option value="6">Herbívoro doméstico (especificar)</option>
                                <option value="7">Outra</option>
                            </select>
                            <label for="especie_animal_agressor">40 - Espécie do Animal Agressor</label>
                        </div>
                        <div class="form-floating mb-4 col-4">
                            <input type="text" wire:model="data.outra_especie" {{ $outra == "7"  ? '' : 'disabled readonly' }} class="form-control" placeholder="40.1 - Outra">
                            <label for="outra_especie">40.1 - Outra</label>
                        </div>
                        <!-- Adicione os outros campos aqui conforme a tabela -->
                        <!-- Continuação do formulário -->
                        <div class="form-floating mb-4 col-6">
                            <select wire:model="data.condicao_animal" class="form-select">
                                <option value="">Selecione</option>
                                <option value="1">Sadio</option>
                                <option value="2">Suspeito</option>
                                <option value="3">Raivoso</option>
                                <option value="4">Morto/Desaparecido</option>
                            </select>
                            <label for="condicao_animal">41 - Condição do Animal para Fins de Conduta do Tratamento</label>
                        </div>
                        <div class="form-floating mb-4 col-6">
                            <select wire:model="data.passivel_observacao" class="form-select">
                                <option value="">Selecione</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                            </select>
                            <label for="passivel_observacao">42 - Animal Passível de Observação ? (Somente para Cão ou Gato)</label>
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
                </form>
            </div>

            @livewire('admin.sesau.semraiva.tratamento-atual-component')

            <div class="card p-4 mb-4">
                <div class="card p-2 mb-4 bg-light">
                    <h5>Observações</h5>
                </div>
                <form wire:submit.prevent="store">
                    <div class="row">
                        <div class="col">
                            <textarea wire:model.prevent="data.observacao" id="" cols="30" rows="5" placeholder="Observações:" class="form-control"></textarea>
                            <label for="observacao">Observações</label>
                            @error('observacao')<span class="error">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="row form-check form-switch">
                        <div class="mb-4">
                            <label for="status" class="form-check-label">Status</label>
                            <input type="checkbox" wire:model="data.status" id="status"
                                class="form-check-input">
                            @error('status')<span class="error">{{ $mssage }}</span>@enderror
                        </div>
                    </div> {{-- fim status --}}

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>
                    <div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="button" class="btn btn-secondary">Cancelar</button>
                    </div>
            </div>
            @livewire('admin.sesau.semraiva.investigador-component')

    </div>
</div>