<div class="card p-4 m-4">
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <style>
        .meu-card1 {
          border: 3px solid #0a777c;
          border-radius: 10px;
          box-shadow: 0 4px 8px rgba(5, 5, 5, 0.466);
          padding: 5px;
        }
      </style>

    <style>
        .meu-formulario1 {
           background-color: #0a788633;
           padding: 20px;
           border-radius: 10px;
           box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
      </style>

<div class="card mb-3" style="max-width: 2000px;">
    <div class="row g-0">
      <div class="col-md-4" style="display: flex; justify-content: center; align-items: center; height: 300px;">
        <img src="{{ asset("imagemSesau.jpg") }}" class="img-fluid rounded-start"  width="500" height="150" alt="...">
      </div>
      <div class="col-md-8 ">
        <div class="card-body">
          <h5 class="card-title">Protocolo - Telefone (2020-1648)</h5>
        
        {{-- <div class="card p-4 mb-4">
            <div class="card-title card text-center  border: 2px card meu-card1">
                <h5>Protocolo - Telefone (2020-1648)</h5>
            </div> --}}

            <form class="meu-formulario1">
            <form wire:submit.prevent="store">
                <div class="row">

                    <div class="form-floating mb-4 col-10">
                        <input type="text" wire:model.prevent="protocolo.nome" class="form-control">
                        <label for="nome">1 - Nome</label>
                    </div>

                    <div class="form-floating mb-4 col-2">
                        <select wire:model.prevent="protocolo.prazo" class="form-select">
                            <option value="">Selecione</option>
                            @foreach($prazos as $prazo)
                            <option value="{{$prazo->nome}}">{{$prazo->nome}}</option>
                            @endforeach
                        </select>
                        <label for="prazo">2 -  Prazo</label>
                    </div>


                    <div class="form-floating mb-4 col-10">
                        <input type="text" wire:model.prevent="protocolo.solicitacao" class="form-control">
                        <label for="solicitacao">3 - Solicitação</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <input type="date" wire:model.prevent="protocolo.data_solicitacao" class="form-control">
                        <label for="data_solicitacao">4 - Data da solicitação</label>
                    </div>
                    

                    <div class="form-floating mb-4 col-10">
                        <input type="text" wire:model.prevent="protocolo.servidor" class="form-control">
                        <label for="servidor">5 - Servidor</label>
                    </div>

                    <div class="form-floating mb-4 col-2">
                        <input type="date" wire:model.prevent="protocolo.data_retirada" class="form-control">
                        <label for="data_retirada">6 - Data de retirada</label>
                    </div>
        
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>