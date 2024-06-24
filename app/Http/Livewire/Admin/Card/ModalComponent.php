<?php

namespace App\Http\Livewire\Admin\Card;

use Livewire\Component;
// use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ModalComponent extends Component
{
    public $title, $form, $modalId, $icon, $tamanho, $corPrimaria, $corSecundaria;
    public $openForm = false;

    public function render()
    {
        // $qrcode = QrCode::size(300)->format('png')->generate('https://www.google.com.br/')->toHtml();
        return view('livewire.admin.card.modal-component');  //,compact('qrcode')
    }

}
