<div class="card p-4 mb-4">
    <div class="card p-2 mb-4 bg-light">
        <h5>{{$title}}</h5>
    </div>
         @include('livewire.admin.crudtab.table.message')
        <form wire:submit.prevent="{{ isset($data['id']) ? $type == 'update' ? 'update' : 'destroy' : 'store' }}">

            @include($form)
            @if (isset($data['id']))
                @if ($type == 'update')
                    <button type="submit" class="btn btn-primary">ATUALIZAR</button>
                @endif
                @if ($type == 'delete')
                    {{-- <button type="button" wire:click="destroy({{ $data['id'] }})" data-bs-dismiss="modal" class="btn btn-danger ">REMOVER</button> --}}
                    <button type="submit" class="btn btn-danger ">REMOVER</button>
                @endif
            @else
                <button type="submit" class="btn btn-primary">SALVAR</button>
            @endif
            <button wire:click="$emit('closeFormCrudTab')" type="button" class="btn btn-secondary">CANCELAR</button>
        </form>

</div>
