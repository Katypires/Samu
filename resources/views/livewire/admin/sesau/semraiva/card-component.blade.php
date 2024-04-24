<div class="col-lg-2 mb-4">

    <div class="card {{$cor}} {{$text_color}}">
        <div class="card-body">
                <i class="{{$icon}}"></i>
                <h5 class="card-title">{{$title}}</h5>
                <p class="card-text">{{$text}}</p>
                <a href="{{$link}}" target="_blank" class="btn btn-custom"> Saiba Mais</a>
                <a class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$title}}"> Modal Mais</a>
        </div>
    </div>


    <div wire:ignore.self class="modal fade" id="staticBackdrop{{$title}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$title}}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel{{$title}}">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

  
</div>
