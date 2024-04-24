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
  
        <div class="card p-4 mb-4">
            <div class="card-title card text-center  border: 2px card meu-card1">
                <h5>Dados da Ocorrência</h5>
            </div>

            <form class="meu-formulario1">
            <form wire:submit.prevent="store">
                <div class="row">

                    <div class="form-floating mb-4 col-8">
                        <input type="text" wire:model.prevent="ocorrencia.numero" class="form-control">
                        <label for="numero">1 - Numero:</label>
                    </div>
                    
                    <div class="form-floating mb-4 col-2">
                        <input type="date" wire:model.prevent="ocorrencia.data_ocorrencia" class="form-control">
                        <label for="data_ocorrencia">2 - Data:</label>
                    </div>

                    <div class="form-floating mb-4 col-2">
                        <input type="time" wire:model.prevent="ocorrencia.hora_ocorrencia" class="form-control">
                        <label for="hora_ocorrencia">3 - Hora:</label>
                    </div>

                    <div class="form-floating mb-4 col-6">
                        <input type="text" wire:model.prevent="ocorrencia.natureza" class="form-control">
                        <label for="natureza">4 - Natureza:</label>
                    </div>
                    
                    <div class="form-floating mb-4 col-6">
                        <input type="text" wire:model.prevent="ocorrencia.motivo" class="form-control">
                        <label for="motivo">5 - Motivo:</label>
                    </div>

                    <div class="form-floating mb-4 col-6">
                        <input type="text" wire:model.prevent="ocorrencia.equipe_atendimento" class="form-control">
                        <label for="equipe_atendimento">6 - Equipe do Atendimento:</label>
                    </div>

                    <div class="form-floating mb-4 col-6">
                        <input type="text" wire:model.prevent="ocorrencia.endereco_ocorrencia" class="form-control">
                        <label for="endereco_ocorrencia">7 - Endereço da ocorrência:</label>
                    </div>
                    
                    <div class="form-floating mb-4 col-2">
                        <input type="text" wire:model.prevent="ocorrencia.bairro" class="form-control">
                        <label for="bairro">8 - Bairro:</label>
                    </div>

                    <div class="form-floating mb-4 col-2">
                        <input type="text" wire:model.prevent="ocorrencia.cidade" class="form-control">
                        <label for="cidade">9 - Cidade:</label>
                    </div>

                    <div class="form-floating mb-4 col-12">
                        <input type="text" wire:model.prevent="ocorrencia.descricao" class="form-control">
                        <label for="descricao">10 - Descrição:</label>
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