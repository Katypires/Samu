<div class="card p-4 mb-4">
            <div class="card p-2 mb-4 bg-light">
                <h5>Antecedentes Epidemiológicos </h5>
            </div>
            <form wire:submit.prevent="update">
                <div class="row">
                    <div class="form-floating mb-4 col-12">
                        <input type="text" wire:model.prevent="data.ficha_id" class="form-control" placeholder="Ficha:" disabled readonly>
                        <label for="nome">Ficha</label>
                    </div>
                    <div class="form-floating mb-4 col-12">
                        <input type="text" wire:model="data.ocupacao" class="form-control" placeholder="31 - Ocupação">
                        <label for="ocupacao">31 - Ocupação</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <input type="text" wire:model="data.tipo_expocidao_viru_rabico" class="form-control" placeholder="32 - Tipo de Exposição ao Vírus Rábico">
                        <label for="tipo_exposicao_rabica">32 - Tipo de Exposição ao Vírus Rábico</label>
                    </div>
                    {{-- data.contato_indireto --}}
                    <div class="form-floating mb-4 col-2">
                        <select wire:model="data.contato_indireto" class="form-select">
                            <option value="">Selecione</option>
                            <option value="1">Sim</option>
                            <option value="2">Não</option>
                            <option value="9">Ignorado</option>
                        </select>
                        <label for="contato_indireto">32.1 - Contato Indireto</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <select wire:model="data.arranhadura" class="form-select" {{ $data['contato_indireto'] == "2" || $data['contato_indireto'] == "9"  ? '' : 'disabled' }} >
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
                        <select wire:model="data.lambedura" class="form-select" {{ $data['contato_indireto'] == "2" || $data['contato_indireto'] == "9"  ? '' : 'disabled' }}>
                            <option value="">Selecione</option>
                            <option value="1">Sim</option>
                            <option value="2">Não</option>
                            <option value="9">Ignorado</option>
                        </select>
                        <label for="lambedura">32.3 - Lambedura</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <select wire:model="data.mordedura" class="form-select" {{ $data['contato_indireto'] == "2" || $data['contato_indireto'] == "9"  ? '' : 'disabled' }}>
                            <option value="">Selecione</option>
                            <option value="1">Sim</option>
                            <option value="2">Não</option>
                            <option value="9">Ignorado</option>
                        </select>
                        <label for="mordedura">32.4 - Mordedura</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <select wire:model="data.outro" class="form-select" {{ $data['contato_indireto'] == "2" || $data['contato_indireto'] == "9"  ? '' : 'disabled' }}>
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
                        <select wire:model="data.membro_superiores" class="form-select">
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
                    <div class="form-floating mb-4 col-4">
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
                    <div class="form-floating mb-4 col-2">
                        <input type="text" wire:model="data.tipo_ferimento" class="form-control" placeholder="35 - Tipo de Ferimento">
                        <label for="tipo_ferimento">35 - Tipo de Ferimento</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <select wire:model="data.profundo" class="form-select">
                            <option value="">Selecione</option>
                            <option value="1">Sim</option>
                            <option value="2">Não</option>
                            <option value="9">Ignorado</option>
                        </select>
                        <label for="profundo">35.1 - Profundo</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <select wire:model="data.superficial" class="form-select">
                            <option value="">Selecione</option>
                            <option value="1">Sim</option>
                            <option value="2">Não</option>
                            <option value="9">Ignorado</option>
                        </select>
                        <label for="superficial">35.2 - Superficial</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
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
                    <div class="form-floating mb-4 col-2">
                        <input type="date" wire:model="data.data_exposicao" class="form-control" placeholder="36 - Data da Exposição">
                        <label for="data_exposicao">36 - Data da Exposição</label>
                    </div>
                    <div class="form-floating mb-4 col-4">
                        <input type="text" wire:model="data.tem_antecedentes_de_tratamento_anti_rabico" class="form-control" placeholder="37 - Tem Antecedentes de Tratamento Anti-Rábico ?">
                        <label for="tem_antecedentes_de_tratamento_anti_rabico">37 - Tem Antecedentes de Tratamento Anti-Rábico ?</label>
                    </div>
                    <div class="form-floating mb-4 col-3">
                        <select wire:model="data.pre_exposicao" class="form-select">
                            <option value="">Selecione</option>
                            <option value="1">Sim</option>
                            <option value="2">Não</option>
                            <option value="9">Ignorado</option>
                        </select>
                        <label for="pre_exposicao">37.1 - Pré-Exposição</label>
                    </div>
                    <div class="form-floating mb-4 col-3">
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
                        <select wire:model="data.se_foi_quando_foi_concluido" class="form-select">
                            <option value="">Selecione</option>
                            <option value="1">Até 90 dias</option>
                            <option value="2">Após 90 dias</option>
                        </select>
                        <label for="se_foi_quando_foi_concluido">38 - Se Houve, quando foi concluído?</label>
                    </div>
                    <div class="form-floating mb-4 col-6">
                        <input type="text" wire:model="data.numeros_doses_aplicadas" class="form-control" placeholder="39 - Nº de Doses Aplicadas">
                        <label for="numeros_doses_aplicadas">39 - Nº de Doses Aplicadas</label>
                    </div>
                    {{-- data.especie_animal_agressor --}}
                    <div class="form-floating mb-4 col-8">
                        <select wire:model="data.especie_animal" class="form-select">
                            <option value="">Selecione</option>
                            <option value="1">Canina</option>
                            <option value="2">Felina</option>
                            <option value="3">Quiróptera (Morcego)</option>
                            <option value="4">Primata (Macaco)</option>
                            <option value="5">Raposa</option>
                            <option value="6">Herbívoro doméstico (especificar)</option>
                            <option value="7">Outra</option>
                        </select>
                        <label for="especie_animal">40 - Espécie do Animal Agressor</label>
                    </div>
                    <div class="form-floating mb-4 col-4">
                        <input type="text" wire:model="data.outra" {{ $data['especie_animal'] == "7"  ? '' : 'disabled readonly' }} class="form-control" placeholder="40.1 - Outra">
                        <label for="outra">40.1 - Outra</label>
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
                <div class="row">
                    <div class="col-auto">
                        <button class="btn btn-primary mb-4"  type="submit">Atualizar Antecedente</button>
                    </div>
                </div>
            </form>
        </div>
