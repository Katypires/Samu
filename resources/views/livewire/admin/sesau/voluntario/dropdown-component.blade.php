<div class="btn-group mb-3">
    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        {{$titulo}}
    </button>
    <ul class="dropdown-menu">
        @foreach($columns as $column)
            <li><a  class="dropdown-item">{{$column->nome}}</li>
        @endforeach
        {{-- <li><hr class="dropdown-divider"> {{$colunas->link()}} </li> --}}
        <li></li>
    </ul>
  </div>