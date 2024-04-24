<?php

namespace App\Http\Livewire\Admin\Sesau\Semraiva;

use Livewire\Component;

class CardComponent extends Component
{
    public $card;
    public $title;
    public $text;
    public $text_color;
    public $icon;
    public $cor;
    public $link;

    public function mount($title, $text, $text_color, $icon, $cor, $link)
    {
        $this->title =  $title;
        $this->text = $text;
        $this->text_color = $text_color;
        $this->icon =  $icon;
        $this->cor = $cor;
        $this->link = $link;
    }

    public function render()
    {
        return view('livewire.admin.sesau.semraiva.card-component');
    }


}
