<?php

namespace App\Http\Livewire\Admin\Sesau\Juridico;
use App\Models\Admin\Sesau\Juridico\Sindicancia;
use Livewire\Component;
use Illuminate\Http\Request;

class JuridicoPdfComponent extends Component
{
    public $sindicancia;

    public function render()
    {
        return view('livewire.admin.sesau.juridico.juridico-pdf-component', ['sindicancias'=>Sindicancia::all()]);


    }
    public function mount(Request $request)
    {
        //dd($request);
        $slug = $request->segments()[0];
        $slug1 = isset($request->segments()[1]) ? $request->segments()[1] : null;

        if($slug1){
            $id = decrypt($slug1);
            $data = now();
            $this->sindicancia = Sindicancia::where('id', $id)->with('oitivas')->first();
        }

    }

}
