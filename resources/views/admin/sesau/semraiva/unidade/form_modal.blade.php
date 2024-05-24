<div class="card p-4 mb-4">
    <div>
        <h2 class="my-4">Form {{$title}}</h2>
        <livewire:admin.crud.crud-form-component key="{{Str::random(5)}}" formType="form" modal="Unidade" title="{{$title}}" model="App\Models\Admin\Sesau\Semraiva\Unidade" form="admin.sesau.semraiva.unidade.form_unidade" />
    </div>
</div>   