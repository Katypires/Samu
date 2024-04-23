<div class="card p-4 mb-4">
    <div class="card p-2 mb-4 bg-light">
        <h5>Dados de Residência</h5>
    </div>
    <form wire:submit.prevent="storeDadoResidencia()">
        <div class="row">
            <div class="form-floating mb-4 col-2">
                <input type="text" wire:model="data.uf" class="form-control" placeholder="17 - UF">
                <label for="uf">17 - UF</label>
            </div>
            <div class="form-floating mb-4 col-4">
                <input type="text" wire:model="data.municipio_residencia" class="form-control" placeholder="18 - Município de Residência">
                <label for="municipio_residencia">18 - Município de Residência</label>
            </div>
            <div class="form-floating mb-4 col-2">
                <input type="text" wire:model="data.codigo_ibge" class="form-control" placeholder="18.1 - Código (IBGE)">
                <label for="codigo_ibge">18.1 - Código (IBGE)</label>
            </div>
            <!-- Adicione os outros campos aqui conforme a tabela -->
            <div class="form-floating mb-4 col-4">
                <input type="text" wire:model="data.distrito" class="form-control" placeholder="19 - Distrito">
                <label for="distrito">19 - Distrito</label>
            </div>
            <div class="form-floating mb-4 col-4">
                <input type="text" wire:model="data.bairro" class="form-control" placeholder="20 - Bairro">
                <label for="bairro">20 - Bairro</label>
            </div>
            <div class="form-floating mb-4 col-8">
                <input type="text" wire:model="data.logradouro" class="form-control" placeholder="21 - Logradouro">
                <label for="logradouro">21 - Logradouro</label>
            </div>
            <!-- Adicione os outros campos aqui conforme a tabela -->
            <div class="form-floating mb-4 col-2">
                <input type="text" wire:model="data.numero" class="form-control" placeholder="22 - Número">
                <label for="numero">22 - Número</label>
            </div>
            <!-- Adicione os outros campos aqui conforme a tabela -->
            <div class="form-floating mb-4 col-6">
                <input type="text" wire:model="data.complemento" class="form-control" placeholder="23 - Complemento">
                <label for="complemento">23 - Complemento (apto., casa, ...)</label>
            </div>
            <div class="form-floating mb-4 col-4">
                <input type="text" wire:model="data.geo_campo1" class="form-control" placeholder="24 - Geo campo 1">
                <label for="complemento">24 - Geo campo 1</label>
            </div>
            <div class="form-floating mb-4 col-4">
                <input type="text" wire:model="data.geo_campo2" class="form-control" placeholder="25 - Geo campo 2">
                <label for="complemento">25 - Geo campo 2</label>
            </div>
            <div class="form-floating mb-4 col-6">
                <input type="text" wire:model="data.ponto_referencia" class="form-control" placeholder=">26 - Ponto de Referência">
                <label for="complemento">26 - Ponto de Referência</label>
            </div>
            <!-- Adicione os outros campos aqui conforme a tabela -->
            <div class="form-floating mb-4 col-2">
                <input type="text" wire:model="data.cep" class="form-control" placeholder="27 - CEP">
                <label for="cep">27 - CEP</label>
            </div>
            <!-- Adicione os outros campos aqui conforme a tabela -->
            <div class="form-floating mb-4 col-4">
                <input type="text" wire:model="data.telefone" class="form-control" placeholder="28 - (DDD) Telefone">
                <label for="telefone">28 - (DDD) Telefone</label>
            </div>
            <!-- Adicione os outros campos aqui conforme a tabela -->
            <div class="form-floating mb-4 col-4">
                <select wire:model="data.zona" class="form-select">
                    <option value="">Selecione</option>
                    <option value="1">Urbana</option>
                    <option value="2">Rural</option>
                    <option value="3">Periurbana</option>
                    <option value="9">Ignorado</option>
                </select>
                <label for="zona">29 - Zona</label>
            </div>
            <!-- Adicione os outros campos aqui conforme a tabela -->
            <div class="form-floating mb-4 col-4">
                <input type="text" wire:model="data.pais" class="form-control" placeholder="30 - País">
                <label for="pais">30 - País</label>
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