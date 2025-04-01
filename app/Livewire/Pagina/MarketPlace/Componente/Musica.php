<?php

namespace App\Livewire\Pagina\MarketPlace\Componente;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Musica extends Component
{
    #[Layout('layout.front')]
    public function render()
    {
        return view('pagina.market-place.componente.musica');
    }
}
