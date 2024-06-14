<div>   
    @if ($openForm && $form == $emitForm && $formType != 'modal')
        <div class="card p-4 mb-4 bg-light-subtle border-light-subtle">
            <div>
                <livewire:admin.crudtab.crud-form-component key="{{Str::random(5)}}" modelName="{{$modelName}}" formType="{{$formType}}" modal="{{$modal}}" title="{{$title}}" model="{{$model}}" form="{{$form}}" modelId="{{ isset($modelId) ? $modelId : 0 }}"/>
            </div>
        </div>   
    @endif

    @if(!$openForm) 
        <div class="card p-4 mb-4 bg-secondary-subtle border-light-subtle shadow text-center">
            @include('livewire.admin.crudtab.table.message')
            <div>
                <h2 class="my-4">Tabela {{$title}}</h2>
                @include('livewire.admin.crudtab.table.message')
                <livewire:admin.crudtab.crud-table-component key="{{Str::random(5)}}" modelName="{{$modelName}}" formType="{{$formType}}" modal="{{$modal}}" title="{{$title}}" model="{{$model}}" form="{{$form}}" :relacionamento=$relacionamento />
            </div>
        </div>
    @endif
</div>

