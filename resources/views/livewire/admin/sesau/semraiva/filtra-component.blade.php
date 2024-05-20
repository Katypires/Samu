<div>
    <div class="flex items-center gap-2">
        <input wire:model.live="search" class="border px-2 py-1 rounded w-64" placeholder="Pesquise aqui" type="text" >
            <select wire:model.live="unidade" class="border p-1 text-slate-600 text-lg rounded">
                <option value="">Selecione uma Unidade</option>
                @foreach($unidades as $unidade)
                    <option value="{{$unidade->nome}}">{{$unidade->nome}}</option>
                @endforeach
            </select>
    </div>
</div>