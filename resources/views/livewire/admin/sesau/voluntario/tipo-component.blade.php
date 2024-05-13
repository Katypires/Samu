<div class="col-lg-4 mb-4">
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class=" p-4 mb-4">
        <div>
            <h4 class="my-8">Tabela {{ $title }}</h4>
            <livewire:admin.sesau.voluntario.tipo-table-component model="{{ $model }}"
                form="{{ $form }}" />
        </div>
    </div>
</div>
