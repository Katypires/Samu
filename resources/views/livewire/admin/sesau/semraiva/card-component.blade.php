<div class="col-lg-2 mb-4">
    <div class="card {{$cor}} {{$text_color}}">
        <div class="card-body">
                <i class="{{$icon}}"></i>
                <h5 class="card-title">{{$title}}</h5>
                <p class="card-text">{{$text}}</p>
                <a href="{{$link}}" target="_blank" class="btn btn-custom"> Saiba Mais</a>
                <a wire:click='iniciaModal' class="btn btn-custom " data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$title}}"> Modal </a>
        </div>
    </div>
</div>
