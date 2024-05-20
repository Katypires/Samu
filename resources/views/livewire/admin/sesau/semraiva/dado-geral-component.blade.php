<div class="card p-4 mb-4">
            <div class="card p-2 mb-4 bg-light">
                <h5>Dados Gerais</h5>
            </div>
            <form wire:submit.prevent="{{$fichaId ? 'update' : 'store' }}">
                <div class="row">
                    <div class="form-floating mb-4 col-12">
                        <input type="text" wire:model.prevent="data.ficha_id" class="form-control" placeholder="Ficha:" disabled readonly>
                        <label for="nome">Ficha</label>
                    </div>

                    <div class="form-floating mb-4 col-12">
                        <input type="text" wire:model.prevent="data.tipo_notificacao" class="form-control" placeholder="Nome do eixo:">
                        <label for="nome">1 - Tipo de Notificação</label>
                    </div>

                    <div class="form-floating mb-4 col-8">
                        <input type="text" wire:model.prevent="data.agravo_doenca" class="form-control" placeholder="2 - Agravo/doença:">
                        <label for="nome">2 - Agravo/doença</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <input type="text" wire:model.prevent="data.codigo_cid" class="form-control" placeholder="Código (CID10)">
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
                        <input type="text" wire:model.prevent="data.municipio_notificacao" class="form-control" placeholder="Município de Notificação">
                        <label for="nome">5 - Município de Notificação</label>
                    </div>
                  <div class="form-floating mb-4 col-2">
                        <input type="text" wire:model.prevent="data.codigo_ibge" class="form-control" placeholder="Código (IBGE)">
                        <label for="nome">5 - Código (IBGE)</label>
                    </div>

                    <div class="form-floating mb-4 col-8">
                        <input type="text" wire:model.prevent="data.unidade" class="form-control" placeholder="2 - Agravo/doença:">
                        <label for="nome">6 - Unidade de Saúde (ou outra fonte notificadora)</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <input type="text" wire:model.prevent="data.codigo" class="form-control" placeholder="Código (CID10)">
                        <label for="nome">6 - Código</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <input type="date" wire:model.prevent="data.data_atendimento" class="form-control">
                        <label for="nome">7 - Data da Atendimento</label>
                    </div>
                    <div class="row">
                    <div class="col-auto">
                        <button class="btn btn-primary mb-4" type="submit" >{{$fichaId ? 'EDITAR' : 'SALVAR' }}</button>
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
