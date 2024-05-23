<div>   

@if ($openForm)
    <div class="card p-4 mb-4">
        <div>
            <h2 class="my-4">Form {{$title}}</h2>
            <livewire:admin.crud.crud-form-component key="{{Str::random(5)}}"  modal="{{$modal}}" title="{{$title}}" model="{{$model}}" form="{{$form}}" />
        </div>
    </div>   
@endif

    <div class="card p-4 mb-4">
        <div>
            <h2 class="my-4">Tabela {{$title}}</h2>
            <livewire:admin.crud.crud-table-component key="{{Str::random(5)}}" formType="{{$formType}}" modal="{{$modal}}" title="{{$title}}" model="{{$model}}" form="{{$form}}" />
        </div>
    </div>

</div>
