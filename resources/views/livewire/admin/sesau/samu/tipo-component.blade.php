
<div class="col-lg-4 mb-4">
    <div class="card p-4 my-8">
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <title class="btn btn-primary btn-sm mb-1">Adicionar {{$title}}</title>
       
        <div class="card my-3">
            <form wire:submit.prevent="store">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @include($form)
                <div class="row form-check form-switch">
                    <div class="mb-4">           
                        <button type="submit" class="btn btn-primary btn-sm ms-2">Salvar</button>
                        <button type="button" class="btn btn-secondary btn-sm" wire:click="closeModal">Cancelar</button>
                    </div>
                </div>
                
            </form>
        </div>

        <div class="card p-4 mb-4">
            <div>
                <h4 class="my-8">Tabela {{$title}}</h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
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
