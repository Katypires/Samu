<div class="dropdown-center">
    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        {{ $titulo }}
    </button>
    <ul class="dropdown-menu row">
            <select class="form-select" aria-label="Default select example">
                @foreach ($columns as $column)
                    <option class="dropdown-item" value="{{$column->columnId}}">{{ $column->columnName }}</option>
                    {{-- <li><a class="dropdown-item" href="#">Another action</a></li> --}}
                @endforeach
            </select>
            <label for="{{ $label }}">{{ $titulo }}</label>
        {{-- <li><hr class="dropdown-divider" {{$colunas->link()}}></li> --}}
        <li></li>
    </ul>
</div>
