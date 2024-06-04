<div class="card p-4 mb-4">
    <div class="card p-2 mb-4 bg-light">
        <h5>{{$title}}</h5>
    </div>

    
        <form wire:submit.prevent="{{ isset($data['id']) ? $type == 'update' ? 'update' : 'destroy' : 'store' }}">
            @include('livewire.admin.crud.table.message')

            @include($form)
            @if (isset($data['id']))
                @if ($type == 'update')
                    <button type="submit" class="btn btn-primary "><i class="fas fa-edit"></i> ATUALIZAR</button>
                @endif
                @if ($type == 'delete')
                    <button type="submit"class="btn btn-danger "><i class="fas fa-times"> DELETAR</button>
                @endif
            @else
                <button type="button" wire:click="store" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> SALVAR</button>
            @endif
            <button wire:click="$emit('closeFormCrud')" type="button" class="btn btn-secondary"><i class="fas fa-times"></i> CANCELAR</button>
        </form>

        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
</div>  
