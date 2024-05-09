<div class="card p-4 m-4">
    <h2 class="mb-4">Instituição Parceira</h2>
    <div class="page-content compass container-fluid">
        <div class="row">
            <div class="row">
                <div class="page-content edit-add container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card p-4 mb-4">
                                <div class="card p-2 mb-4 bg-light">
                                    <h5>INSTITUICAO</h5>
                                </div>
                                <form wire:submit.prevent="store()">
                                    <div class="row">
                                        <div class="form-floating mb-4 col-4">
                                            <select wire:model.prevent="tipo_atividade" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>---SELECIONE---</option>
                                                <option value="1">OUTROS</option>
                                                <option value="2">QUALFICACAO PROFISSIONAL</option>
                                                <option value="3">SEGURANCA PUBLICA MUNICIPAL</option>
                                                <option value="4">SEGURANCA PUBLICA ESTADUAL</option>
                                                <option value="5">PRESTADORA DE SERVICOS</option>
                                                <option value="6">EDUCACAO</option>
                                                <option value="7">CULTURA/LASER</option>
                                                <option value="8">COMERCIO VAREJISTA</option>
                                                <option value="9">COMERCIO ATACADISTA</option>
                                                <option value="10">ENTRETENIMENTO</option>
                                            </select>
                                            <label for="tipo_atividade">Tipo Atividade</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <select wire:model.prevent="tipo_seguimento_id" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>---SELECIONE---</option>
                                                <option value="1">PRIVADO</option>
                                                <option value="2">FILANTRÓPICO</option>
                                                <option value="3">PUBLICA MUNICIPAL</option>
                                                <option value="4">PUBLICA ESTADUAL</option>
                                                <option value="5">PUBLICA FEDERAL</option>
                                            </select>
                                            <label for="tipo_seguimento">Tipo Seguimento</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <select wire:model.prevent="regiao_urbana" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>---SELECIONE---</option>
                                                <option value="1">REGIAO URBANA -LAGOA</option>
                                                <option value="2">REGIAO URBANA - PROSA</option>
                                                <option value="3">REGIAO URBANA - SEGREDO</option>
                                                <option value="4">REGIAO URBANA - ANHANDUIZINHO 1</option>
                                                <option value="5">REGIAO URBANA - ANHANDUIZINHO 2</option>
                                                <option value="6">REGIAO URBANA - BANDEIRA</option>
                                                <option value="7">REGIAO URBANA - CENTRO</option>
                                            </select>
                                            <label for="regiao_urbana">Região Urbana</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.razao_social"
                                                class="form-control">
                                            <label for="razao_social">Razao Social</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text"
                                                wire:model.prevent="data.nome_fantasia"class="form-control">
                                            <label for="nome_fantasia">Nome fantasia</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.sigla" class="form-control">
                                            <label for="sigla">Sigla</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.cnpj" class="form-control">
                                            <label for="cnpj">CNPJ</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.email" class="form-control">
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.telefone"
                                                class="form-control">
                                            <label for="telefone">Telefone</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.contato"
                                                class="form-control">
                                            <label for="contato">Contato</label>
                                        </div>
                                        <div class="form-floating mb-4 col-1">
                                            {{-- <label for="status" class="control-label" style="height: 20px">Status</label> --}}
                                            <input type="checkbox" data-toggle="switchbutton" style="height: 10px">
                                        </div>
                                        <div class="form-floating mb-4 col-1">
                                            {{-- <label for="cv" class="control-label" style="height: 20px">Status</label> --}}
                                            <input type="checkbox" data-toggle="switchbutton" style="height: 10px">
                                        </div>
                                        <div class="form-floating mb-4 col-2">
                                            {{-- <label for="pe" class="control-label" style="height: 20px">Status</label> --}}
                                            <input type="checkbox" data-toggle="switchbutton" style="height: 10px">
                                        </div>
                                        <div class="form-floating mb-4 col-5">
                                            <select wire:model.prevent="classificacao" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>---SELECIONE---</option>
                                                <option value="1">AZUL</option>
                                                <option value="2">VERDE</option>
                                                <option value="3">AMARELA</option>
                                                <option value="4">VERMELHA</option>
                                            </select>
                                            <label for="select">Classificao</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <select wire:model.prevent="risco" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>---SELECIONE---</option>
                                                <option value="1">AZUL</option>
                                                <option value="2">VERDE</option>
                                                <option value="3">AMARELA</option>
                                                <option value="4">VERMELHA</option>
                                            </select>
                                            <label for="select">Risco</label>
                                        </div>
                                        <div class="form-floating mb-4 col-1">
                                            <select wire:model.prevent="prioridade" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>---SELECIONE---</option>
                                                <option value="1">BAIXA</option>
                                                <option value="2">NORMAL</option>
                                                <option value="3">ALTA</option>
                                                <option value="4">URGENTE</option>
                                                <option value="5">IMEDIATA</option>
                                            </select>
                                            <label for="select">Prioridade</label>
                                        </div>
                                        <div class="form-floating mb-4 col-1">
                                            <select wire:model.prevent="complexidade" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>---SELECIONE---</option>
                                                <option value="1">BAIXA</option>
                                                <option value="2">MEDIA</option>
                                                <option value="3">ALTA</option>
                                            </select>
                                            <label for="select">Complexidade</label>
                                        </div>
                                        <div class="form-floating mb-4 col-1">
                                            <select wire:model.prevent="situacao" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>---SELECIONE---</option>
                                                <option value="1">ABERTA</option>
                                                <option value="2">FECHADA</option>
                                            </select>
                                            <label for="select">Situação</label>
                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label">Descrição</label>
                                            <textarea class="form-control" wire:model.prevent="data.descricao" rows="4"></textarea>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="number" wire:model.prevent="data.cep" class="form-control">
                                            <label for="cep">CEP</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.endereco"
                                                class="form-control">
                                            <label for="endereco">Endereço</label>
                                        </div>
                                        <div class="form-floating mb-4 col-2">
                                            <input type="text" wire:model.prevent="data.numero"
                                                class="form-control">
                                            <label for="numero">Numero</label>
                                        </div>
                                        <div class="form-floating mb-4 col-2">
                                            <input type="text" wire:model.prevent="data.uf" class="form-control">
                                            <label for="uf">Uf</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.bairro"
                                                class="form-control">
                                            <label for="bairro">Bairro</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.cidade"
                                                class="form-control">
                                            <label for="cidade">Cidade</label>
                                        </div>
                                        <div class="form-floating mb-4 col-4">
                                            <input type="text" wire:model.prevent="data.complemento"
                                                class="form-control">
                                            <label for="complemento">Complemento</label>
                                        </div>
                                        <div class="form-floating mb-4 col-12">
                                            <input type="text" wire:model.prevent="data.url" class="form-control">
                                            <label for="url">URL</label>
                                        </div>
                                    </div>
                                </form>
                                <div>
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
