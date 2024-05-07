
<div class="col-lg-4 mb-4">
    <div class="card p-4 my-8">
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <title class="btn btn-primary btn-sm mb-1">Adicionar {{$title}}</title>
       

        <form wire:submit.prevent="store">
            @include($form)

            <div class="card">
                @if ($title !== 'Tipo Fins')
                <div class="form-floating my-8 col-10 m-3">
                    <input type="text" wire:model="nome" class="form-control">
                    <label for="nome">Nome:</label>
                </div>
                @endif

                @if ($title === 'Tipo Fins')
                <div class="form-floating mb-4 col-6 m-3" hidden>
                    <input type="text" wire:model.prevent="tipo.fim" class="form-control" id="campoFim">
                    <label for="tipo">Para fins de:</label>
                </div>

                <div class="form-floating mb-4 col-4 m-3">
                    <select wire:model.prevent="tipo.fim" class="form-select">
                        <option value="">Selecione</option>
                        <option value="D">DPVAT</option>
                        <option value="I">INSS</option>
                        <option value="J">JUDICIAL</option>
                        <option value="O">OUTROS</option>
                    </select>
                    <label for="tipo">Para fins de:</label>
                </div>
                @endif

                <div class="row form-check form-switch">
                    <div class="mb-4">
                        {{-- <label for="status" class="form-check-label">Status</label>
                        <input type="checkbox" wire:model="status" id="status" class="form-check-input"> --}}
                        <button type="submit" wire:click="store" class="btn btn-primary btn-sm ms-2">Salvar</button>
                        <button type="button" class="btn btn-secondary btn-sm" wire:click="closeModal">Cancelar</button>
                    </div>
                </div>
            </div>
        </form>

        <div class="card p-4 mb-4">
            <div>
                <h4 class="my-8">Tabela {{$title}}</h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            @if ($title === 'Tipo Parentesco')
                            <th scope="col">Nome</th>
                            @endif
                            @if ($title === 'Tipo Fins')
                            <th scope="col">Tipo Fins</th>
                            @endif
                            @if ($title === 'Tipo Prazo')
                            <th scope="col">Prazo</th>
                            @endif
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tipos as $tipo)
                            <tr>
                                <td>{{ $tipo->nome }}</td>
                                <td>
                                    <button wire:click="edit('{{ $tipo->id }}')" class="btn btn-primary">Editar</button>
                                    <button wire:click="destroy('{{ $tipo->id }}')" class="btn btn-danger">Deletar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
