<div class="card p-4 mb-4">
    <div class="card p-2 mb-4 bg-light">
        <h5>Tratamento Atual</h5>
    </div>
    <form wire:submit.prevent="storeTratamentoAtual">
        <div class="row">

            <!-- Continuação do formulário -->
            <div class="form-floating mb-4 col-2">
                <select wire:model="data.tratamento_indicado" class="form-select">
                    <option value="">Selecione</option>
                    <option value="1">Pré Exposição</option>
                    <option value="2">Dispensa de Tratamento</option>
                    <option value="3">Observação do animal (se cão ou gato)</option>
                    <option value="4">Observação + Vacina</option>
                    <option value="5">Vacina</option>
                    <option value="6">Soro + Vacina</option>
                    <option value="7">Esquema de Reexposição</option>
                </select>
                <label for="tratamento_indicado">43 - Tratamento Indicado</label>
            </div>
            {{-- data.vacina --}}
            <div class="form-floating mb-4 col-3">
                <select wire:model="outro" class="form-select">
                    <option value="">Selecione</option>
                    <option value="1">Instituto Butantan</option>
                    <option value="2">Instituto Vital Brasil</option>
                    <option value="3">Aventis Pasteur</option>
                    <option value="4">Outro</option>
                </select>
                <label for="vacina">44 - Vacina</label>
            </div>
            <div class="form-floating mb-4 col-3">
                <input type="text" wire:model="data.outro_vacina" {{ $outro == "4"  ? '' : 'disabled readonly' }} class="form-control" placeholder="44.1 - Outro">
                <label for="outro_vacina">44.1 - Outro</label>
            </div>
            <div class="form-floating mb-4 col-2">
                <input type="text" wire:model="data.num_lote" class="form-control" placeholder="45 - Número do Lote">
                <label for="num_lote">45 - Número do Lote</label>
            </div>
            <!-- Continuação do formulário -->
            <div class="form-floating mb-4 col-2">
                <input type="date" wire:model="data.data_vencimento" class="form-control" placeholder="46 - Data do Vencimento">
                <label for="data_vencimento">46 - Data do Vencimento</label>
            </div>
            <p>47 - Datas das Aplicações da Vacina (dia e mês)</p>
            <div class="form-floating mb-4 col-2">
                <input type="date" wire:model="data.dose_data_1a" class="form-control" placeholder="47.1 - Data da 1a dose">
                <label for="dose_data_1a">47.1 - Data da 1a dose</label>
            </div>
            <div class="form-floating mb-4 col-2">
                <input type="date" wire:model="data.dose_data_2a" class="form-control" placeholder="47.2 - Data da 2a dose">
                <label for="dose_data_2a">47.2 - Data da 2a dose</label>
            </div>
            <div class="form-floating mb-4 col-2">
                <input type="date" wire:model="data.dose_data_3a" class="form-control" placeholder="47.3 - Data da 3a dose">
                <label for="dose_data_2a">47.3 - Data da 3a dose</label>
            </div>
            <div class="form-floating mb-4 col-2">
                <input type="date" wire:model="data.dose_data_4a" class="form-control" placeholder="47.4 - Data da 4a dose">
                <label for="dose_data_2a">47.4 - Data da 4a dose</label>
            </div>
            <div class="form-floating mb-4 col-2">
                <input type="date" wire:model="data.dose_data_5a" class="form-control" placeholder="47.4 - Data da 4a dose">
                <label for="dose_data_2a">47.4 - Data da 5a dose</label>
            </div>

            <!-- Continuação do formulário -->
            <div class="form-floating mb-4 col-4">
                <select wire:model="data.condicao_final_animal" class="form-select">
                    <option value="">Selecione</option>
                    <option value="1">Negativo para Raiva (Clínica)</option>
                    <option value="2">Negativo para Raiva (Laboratório)</option>
                    <option value="3">Positivo para Raiva (Clínica)</option>
                    <option value="4">Positivo para Raiva (Laboratório)</option>
                    <option value="5">Morto/ Sacrificado/ Sem Diagnóstico</option>
                    <option value="9">Ignorado</option>
                </select>
                <label for="condicao_final_animal">48 - Condição Final do Animal (após período de observação)</label>
            </div>
            <div class="form-floating mb-4 col-4">
                <select wire:model="data.interrupcao_tratamento" class="form-select">
                    <option value="">Selecione</option>
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
                <label for="interrupcao_tratamento">49 - Houve Interrupção do Tratamento</label>
            </div>
            <div class="form-floating mb-4 col-4">
                <select wire:model="data.motivo_interrupcao" class="form-select">
                    <option value="">Selecione</option>
                    <option value="1">Indicação da Unidade de Saúde</option>
                    <option value="2">Abandono</option>
                    <option value="3">Transferência</option>
                </select>
                <label for="motivo_interrupcao">50 - Qual o Motivo da Interrupção</label>
            </div>
            <div class="form-floating mb-4 col-4">
                <select wire:model="data.procura_unidade_saude" class="form-select">
                    <option value="">Selecione</option>
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
                <label for="procura_unidade_saude">51 - Se houve Abandono do Tratamento, a Unidade de Saúde Procurou o Paciente</label>
            </div>
            <!-- Continuação do formulário -->
            <div class="form-floating mb-4 col-4">
                <select wire:model="data.evento_adverso_vacina" class="form-select">
                    <option value="">Selecione</option>
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                    <option value="9">Ignorado</option>
                </select>
                <label for="evento_adverso_vacina">52 - Evento Adverso à Vacina</label>
            </div>
            <div class="form-floating mb-4 col-4">
                <select wire:model="data.indicacao_soro_rabico" class="form-select">
                    <option value="">Selecione</option>
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                    <option value="9">Ignorado</option>
                </select>
                <label for="indicacao_soro_rabico">53 - Indicação do Soro Anti-Rábico</label>
            </div>
            <div class="form-floating mb-4 col-4">
                <input type="text" wire:model="data.peso_paciente" class="form-control" placeholder="54 - Peso do Paciente">
                <label for="peso_paciente">54 - Peso do Paciente</label>
            </div>
            <div class="form-floating mb-4 col-4">
                <input type="text" wire:model="data.qtd_soro_aplicada_ml" class="form-control" placeholder="55 - Quantidade de Soro Aplicada ml">
                <label for="qtd_soro_aplicada_ml">55 - Quantidade de Soro Aplicada ml</label>
            </div>
            <!-- Continuação do formulário -->
            <div class="form-floating mb-4 col-4">
                <select wire:model="data.qtd_soro_aplicada" class="form-select">
                    <option value="">Selecione</option>
                    <option value="1">Heterólogo</option>
                    <option value="2">Homólogo</option>
                </select>
                <label for="qtd_soro_aplicada">55.1 - Quantidade de Soro Aplicada</label>
            </div>
           <p>56 - Infriltração de Soro no(s) Local(is) do(s) Ferimento(s)</p>
            <div class="form-floating mb-4 col-6">
                <select wire:model="data.infiltracao_soro_total" class="form-select">
                    <option value="">Selecione</option>
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
                <label for="infiltracao_soro_total">56.1 - Total</label>
            </div>
            <div class="form-floating mb-4 col-6">
                <select wire:model="data.infiltracao_soro_parcial" class="form-select">
                    <option value="">Selecione</option>
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
                <label for="infiltracao_soro_parcial">56.2 - Parcial</label>
            </div>
            <!-- Continuação do formulário -->
            <div class="form-floating mb-4 col-8">
                <select wire:model="data.laboratorio_soro_rabico" class="form-select">
                    <option value="">Selecione</option>
                    <option value="1">Instituto Butantan</option>
                    <option value="2">Instituto Vital Brasil</option>
                    <option value="3">Aventis Pasteur</option>
                    <option value="4">Outro</option>
                </select>
                <label for="laboratorio_soro_rabico">57 - Laboratório Produtor do Soro Anti-Rábico</label>
            </div>
            <div class="form-floating mb-4 col-4">
                <input type="text" wire:model="data.outro_laboratorio_soro_rabico" {{ $outro == "4"  ? '' : 'disabled readonly' }} class="form-control" placeholder="57.1 - Outro">
                <label for="outro_laboratorio_soro_rabico">57.1 - Outro</label>
            </div>
            <div class="form-floating mb-4 col-4">
                <input type="text" wire:model="data.num_partida" class="form-control" placeholder="58 - Número da Partida">
                <label for="num_partida">58 - Número da Partida</label>
            </div>
            <div class="form-floating mb-4 col-4">
                <select wire:model="data.evento_adverso_soro_rabico" class="form-select">
                    <option value="">Selecione</option>
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                    <option value="9">Ignorado</option>
                </select>
                <label for="evento_adverso_soro_rabico">59 - Evento Adverso ao Soro Anti-Rábico</label>
            </div>
            <!-- Continuação do formulário -->
            <div class="form-floating mb-4 col-4">
                <input type="date" wire:model="data.data_encerramento_caso" class="form-control" placeholder="60 - Data do Encerramento do Caso">
                <label for="data_encerramento_caso">60 - Data do Encerramento do Caso</label>
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
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>