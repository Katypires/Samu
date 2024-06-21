<?php

namespace App\Http\Livewire\Admin\Sesau\Juridico;
use App\Models\Admin\Sesau\Juridico\Sindicancia;
use Livewire\Component;

class JuridicoPdfComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.sesau.juridico.juridico-pdf-component', ['sindicancias'=>Sindicancia::all()]);
    }
}
